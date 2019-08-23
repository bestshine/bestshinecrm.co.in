<?php

namespace App\Repositories\CustomerCare;

use App\Repositories\CustomerCare\CustomerCareInterface as CustomerCareInterface;
use App\Models\School;
use App\Models\CustomerCare;
use App\Models\CustomerCareNote;
use App\User;
use Auth;
use Event;
use Mail;

class CustomerCareRepository implements CustomerCareInterface
{   

    /**
     * CustomerCare instance
     *
     * @var model instance
     * @access protected
     */    
    protected $customerCare; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(School $school, CustomerCare $customerCare, CustomerCareNote $customerCareNote) {
        $this->school = $school;
        $this->customerCare = $customerCare;
        $this->customerCareNote = $customerCareNote;
    }   
    
    /* ------------------- Post new issue Page --------------------------- */  

    /**
     * Post new issue
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewIssue($input){
        $school = $this->school::where('user_id',Auth::user()->id)->first();
        $randomString = $this->generateRandomString();
        $this->customerCare->track_id = $randomString;
        $this->customerCare->school_id = $school->id;
        $this->customerCare->school_email = $school->email;
        $this->customerCare->category = $input['category'];
        $this->customerCare->subject = $input['subject'];
        $this->customerCare->description = $input['description'];
        $this->customerCare->priority = $input['priority_level'];
        foreach ($input['screen_shot_images'] as  $image) {
            $fileName = $randomString.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/issue/images');
            $image->move($destinationPath, $fileName);  
        }      
        $this->customerCare->images = $fileName;
        $this->customerCare->save();

        // send mail
        $data['track_id'] = $randomString;
        $toEmail = $school->email;
        Mail::send('email-templates.track', $data, function($message) use ($toEmail) {
            $message->to($toEmail);
            $message->subject('BESTSHINE CRM ISSUE BOOKED.');
        });  
        $msg['status'] = 1;
        $msg['msg'] = "Issue Posted Successfully..We will contact you soon...";
        return $msg;
    } 

    /**
     * Get customer care details
     *
     * @param $track_id random string
     * @return $details object
     */
    public function getCustomerCareDetails($track_id){
        $details = $this->customerCare::where('track_id',$track_id)->first();
        return $details;
    }

    /**
     * Get customer care note details
     *
     * @param $care_id int
     * @return $details object
     */
    public function getCustomerCareNoteDetails($care_id){
        $notes = $this->customerCareNote::where('customer_care_id',$care_id)->get();
        return $notes;
    }        

    /**
     * Generate random string
     *
     * @return $string random string
     */
    public function generateRandomString(){
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[rand(0, $charactersLength - 1)];
        }

        return $string;
    }    

    /* ------------------- Reply Issue Page --------------------------- */

    /**
     * Reply issue
     *
     * @param $input array
     */
    public function replyIssue($input){
        $this->customerCareNote->customer_care_id = $input['care_id'];
        $this->customerCareNote->updated_by_id = Auth::user()->id;
        $this->customerCareNote->request_close_status = $input['close_duration'];
        $this->customerCareNote->reply_status = $input['reply_status'];
        $this->customerCareNote->comments = $input['comments'];
        $this->customerCareNote->status = 1;
        $this->customerCareNote->is_deleted = 0;
        $this->customerCareNote->save();

        if($input['reply_status'] == "Process"){
            $status = 1;
        }
        if($input['reply_status'] == "Hold"){
            $status = 2;
        } 
        if($input['reply_status'] == "Closed"){
            $status = 3;
        }
        if($input['reply_status'] == "Thank You"){
            $status = 3;
        }  
        if($input['reply_status'] == "Re-Issue"){
            $status = 4;
        }                     

        $customerCare = $this->customerCare::where('id',$input['care_id'])->first();
        $customerCare->status = $status;
        $customerCare->update();  

        $msg['status'] = 1;
        $msg['msg'] = "Replied Successfully";
        return $msg;              
    }

    /* ------------------- All Issue Page --------------------------- */ 
    
    /**
     * New Issues
     *
     * @return $newIssues array
     */
    public function getNewIssue(){
        $newIssues = $this->customerCare::where('status',0)->where('is_deleted',0)->paginate(10);
        return $newIssues;
    }   


    /**
     * Process Issues
     *
     * @return $processIssues array
     */
    public function getProcessIssue(){
        $processIssues = $this->customerCare::where('status',1)->where('is_deleted',0)->paginate(10);
        return $processIssues;        
    }  

    /**
     * Hold Issues
     *
     * @return $reIssues array
     */
    public function getHoldIssue(){
        $holdIssues = $this->customerCare::where('status',2)->where('is_deleted',0)->paginate(10);
        return $holdIssues;         
    } 

    /**
     * Close Issues
     *
     * @return $reIssues array
     */
    public function getCloseIssue(){
        $closeIssues = $this->customerCare::where('status',3)->where('is_deleted',0)->paginate(10);
        return $closeIssues;         
    }       

    /**
     * Re Issues
     *
     * @return $reIssues array
     */
    public function getReIssue(){
        $reIssues = $this->customerCare::where('status',4)->where('is_deleted',0)->paginate(10);
        return $reIssues;
    } 

    /**
     * Over All report
     *
     * @return $report array
     */
    public function getOverAllReport(){
        $report = [];
        $newIssueCount = $this->customerCare::where('status',0)->where('is_deleted',0)->count();
        $processingIssueCount = $this->customerCare::where('status',1)->where('is_deleted',0)->count();
        $holdIssueCount = $this->customerCare::where('status',2)->where('is_deleted',0)->count();
        $closeIssueCount = $this->customerCare::where('status',3)->where('is_deleted',0)->count();
        $reIssueCount = $this->customerCare::where('status',4)->where('is_deleted',0)->count();
        $report['newIssueCount'] = $newIssueCount;
        $report['processingIssueCount'] = $processingIssueCount;
        $report['holdIssueCount'] = $holdIssueCount;
        $report['closeIssueCount'] = $closeIssueCount;
        $report['reIssueCount'] = $reIssueCount;
        return $report;
    }

    /**
     * Check Track id details.
     *
     * @param $input array
     * @return \Illuminate\Http\Response
     */
    public function checkTrackID($input)
    {   
        $count = $this->customerCare::where('track_id',$input['trackID'])->count();
        if($count > 0){
            $msg['status'] = 1;
            $msg['msg'] = "Track ID Found";
        }else{
            $msg['status'] = 0;
            $msg['msg'] = "Track ID Not Found";            
        }
        return $msg;
    }                                            
}

?>