<?php

namespace App\Repositories\School;

use App\Repositories\School\SchoolInterface as SchoolInterface;
use App\Models\Employer;
use App\Models\FranchiseState;
use App\Models\FranchiseRegion;
use App\Models\FranchiseZone;
use App\Models\FranchiseDistrict;
use App\Models\FranchiseTaluk;
use App\Models\Vendor;
use App\Models\School;
use App\Models\SchoolFeeDetail;
use App\User;
use App\Models\RoleUser;
use App\Models\SchoolPayment;
use App\Models\SchoolPaymentHistory;
use Event;
use Auth;
use Carbon\Carbon;

class SchoolRepository implements SchoolInterface
{   

    /**
     * School instance
     *
     * @var model instance
     * @access protected
     */    
    protected $school;

    /**
     * School Fee Detail instance
     *
     * @var model instance
     * @access protected
     */    
    protected $schoolFeeDetail;    

    /**
     * Employer instance
     *
     * @var model instance
     * @access protected
     */    
    protected $employer; 

    /**
     * FranchiseState instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseState;  

    /**
     * FranchiseRegion instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseRegion;   

    /**
     * FranchiseZone instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseZone; 

    /**
     * FranchiseDistrict instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseDistrict;  

    /**
     * FranchiseTaluk instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseTaluk;            

    /**
     * Vendor instance
     *
     * @var model instance
     * @access protected
     */    
    protected $vendor;     

    /**
     * SchoolPayment instance
     *
     * @var model instance
     * @access protected
     */    
    protected $schoolPayment; 

    /**
     * SchoolPaymentHistory instance
     *
     * @var model instance
     * @access protected
     */    
    protected $schoolPaymentHistory; 

    /**
     * masterMonth instance
     *
     * @var array
     * @access protected
     */    
    protected $masterMonth;         

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(School $school, SchoolFeeDetail $schoolFeeDetail, Employer $employer, Vendor $vendor, FranchiseState $franchiseState, FranchiseRegion $franchiseRegion, FranchiseZone $franchiseZone, FranchiseDistrict $franchiseDistrict, FranchiseTaluk $franchiseTaluk, SchoolPayment $schoolPayment, SchoolPaymentHistory $schoolPaymentHistory) {
        $this->school = $school;
        $this->schoolFeeDetail = $schoolFeeDetail;
        $this->employer = $employer;
        $this->vendor = $vendor;
        $this->franchiseState = $franchiseState;
        $this->franchiseRegion = $franchiseRegion;
        $this->franchiseZone = $franchiseZone;
        $this->franchiseDistrict = $franchiseDistrict;
        $this->franchiseTaluk = $franchiseTaluk;
        $this->schoolPayment = $schoolPayment;
        $this->schoolPaymentHistory = $schoolPaymentHistory;
        // $this->masterMonth = ["Jan","Feb","Mar","Apr","May","June","Jully","Aug","Sep","Oct","Nov","Dec"];
    }   

    /* ------------------- Add Schools Page --------------------------- */

    /**
     * Get all schools.
     *
     * @return $schools object
     */
    public function getAllSchools()
    {       
        $schools = $this->school::where('is_deleted',0)->get();                
        return $schools;
    }

    /**
     * Activate school
     *
     * @param $input array
     * @return string
     */
    public function activateSchool($input){
        $school = $this->school::find($input['id']);
        $school->status = 1;
        $school->update();

        // update to user
        $user = User::find($school->user_id);
        $user->status = 1;
        $user->update();        
        return 'School has been activated successfully...';
    }

    /**
     * Deactivate school
     *
     * @param $input array
     * @return string
     */
    public function deactivateSchool($input){
        $school = $this->school::find($input['id']);
        $school->status = 0;
        $school->update();  

        // update to user
        $user = User::find($school->user_id);
        $user->status = 0;
        $user->update();                
        return 'School has been deactivated successfully...';
    }

    /**
     * Delete school
     *
     * @param $input array
     * @return string
     */
    public function deleteSchool($input){
        $school = $this->school::find($input['id']);
        $school->is_deleted = 1;
        $school->update();        
        return 'School has been deleted successfully...';
    }     

    /* ------------------- Add Schools Page --------------------------- */

    /**
     * Get activated vendors.
     *
     * @return $vendors object
     */
    public function getActivatedVendors()
    {       
        $vendors = $this->vendor::where('status',1)->where('is_deleted',0)->get();                
        return $vendors;
    }  

    /**
     * Get activated states.
     *
     * @return $states object
     */
    public function getActivatedStates()
    {       
        $states = $this->franchiseState::where('status',1)->get();                
        return $states;
    } 

    /**
     * Get employer details by id.
     *
     */
    public function getEmployerDataByID($input){
        $employer = $this->employer::where('emp_id',$input["empID"])->where('status',1)->where('is_deleted',0)->first();                
        return $employer;        
    }          

    /**
     * Store new School form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewSchool($input)
    {   

        $user = new User();
        $user->name = $input['school_name'];
        $user->email = $input['email'];
        $user->password = bcrypt($input["school_id"]);
        $user->status = 1;
        $user->is_deleted = 0;
        $user->notify_count = 0;
        $user->save();

        // assign role
        $roleUser = new RoleUser();
        $roleUser->user_id = $user->id;
        $roleUser->role_id = 4;
        $roleUser->save(); 

        $this->school->user_id = $user->id;
        $this->school->school_name = $input["school_name"];
        $this->school->school_id = $input["school_id"];
        $this->school->email = $input["email"];
        $this->school->contact_no = $input["contact_no"];
        $this->school->contact_no_optional = $input["contact_no_optional"];
        $this->school->address = $input["address"];
        $this->school->country = $input["country"];
        $this->school->school_category = $input["school_category"];
        $this->school->plan_type = $input["plan_type"];
        $this->school->vendor_id = $input["vendor"];
        $this->school->state_id = $input["school_state"];
        $this->school->region_id = $input["school_region"];
        $this->school->zone_id = $input["school_zone"];
        $this->school->district_id = $input["school_district"];
        $this->school->taluk_id = $input["school_taluk"];
        $this->school->assign_emp_id = $input["assign_emp_id"];
        $this->school->status = 1;
        $this->school->is_deleted = 0;
        $this->school->save();

        // School added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'School Added Successfully...';                      
        return $msg;
    }  

    /**
     * Get region data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getRegionData($input)
    {   
        $regions = $this->franchiseRegion::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    }  

    /**
     * Get zone data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getZoneData($input)
    {   
        $regions = $this->franchiseZone::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('region_id',$input['region_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    } 

    /**
     * Get district data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getDistrictData($input)
    {   
        $regions = $this->franchiseDistrict::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('region_id',$input['region_id'])->where('zone_id',$input['zone_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    }   

    /**
     * Get taluk data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getTalukData($input)
    {   
        $regions = $this->franchiseTaluk::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('region_id',$input['region_id'])->where('zone_id',$input['zone_id'])->where('district_id',$input['district_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    }

    /* ------------------- Edit Schools Page --------------------------- */

    /**
     * Update School
     *
     * @param $input array
     * @return $msg array
     */     
    public function updateSchool($input){
        $school = $this->school::find($input['id']);             
        $school->school_name = $input["school_name"];
        $school->school_id = $input["school_id"];
        $school->email = $input["email"];
        $school->contact_no = $input["contact_no"];
        $school->contact_no_optional = $input["contact_no_optional"];
        $school->address = $input["address"];
        $school->country = $input["country"];
        $school->school_category = $input["school_category"];
        $school->plan_type = $input["plan_type"]; 
        $school->update();

        // school updated successfull
        $msg['status'] = 1;
        $msg['msg'] = 'School Updated Successfully...';                      
        return $msg;        
    } 

    /* ------------------- View Schools Details Page --------------------------- */

    /**
     * Get school data.
     *
     * @param $school_id int
     */
    public function getSingleSchoolData($school_id){
        $school = $this->school::where('id',$school_id)->first();
        return $school;
    } 

    /**
     * Get school fee details.
     *
     * @param $school_id int
     */
    public function getSchoolFeeData($school_id){
        $schoolFeeDetail = $this->schoolFeeDetail::where('school_id',$school_id)->first();
        return $schoolFeeDetail;
    }   

    /* ------------------- Add Schools Fee Details Page --------------------------- */

    /**
     * Get schools for fee details
     *
     * @return $schools array
     */
    public function getSchoolsForFeeDetails(){
        $filledSchoolIDS = [];
        $schoolFeeDetail = $this->schoolFeeDetail::where('status',1)->where('is_deleted',0)->get();
        foreach ($schoolFeeDetail as $key => $value) {
            $filledSchoolIDS[] = $value->school_id;
        }
        $schools = $this->school::whereNotIN('id',$filledSchoolIDS)->where('status',1)->where('is_deleted',0)->get();
        return $schools;
    }                   

    /**
     * Store new school fee details form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeSchoolFeeDetails($input){

        $start = $input['payment_start_month'];
        $end = $input['payment_end_month'];

        $start = $start=='' ? time() : strtotime($start);
        $end = $end=='' ? time() : strtotime($end); 
        $months = array();
         
        for ($i = $start; $i <= $end; $i = $this->getNextMonth($i)) {
            $months[] = date('m-Y', $i); 
        }
         
        $implode = implode(',', $months);

        $this->schoolFeeDetail->vendor_id = $input['vendor'];
        $this->schoolFeeDetail->school_id = $input['school'];
        $this->schoolFeeDetail->agreement_date = $input['agreement_date'];
        $this->schoolFeeDetail->stamp_no = $input['stamp_no'];
        $this->schoolFeeDetail->agreement_sign = $input['agreement_sign'];
        $this->schoolFeeDetail->installation_total_amount = $input['total_amount'];
        $this->schoolFeeDetail->student_strength = $input['student_strength'];
        $this->schoolFeeDetail->payment_start_month = $input['payment_start_month'];
        $this->schoolFeeDetail->payment_end_month = $input['payment_end_month'];
        $this->schoolFeeDetail->monthly_fees = $input['monthly_fees'];
        $this->schoolFeeDetail->gst_percentage = $input['gst_percentage'];
        $this->schoolFeeDetail->per_sms_amount = $input['per_sms_amount'];
        $this->schoolFeeDetail->text_sms_count = $input['text_sms_count'];
        $this->schoolFeeDetail->voice_sms_count = $input['voice_sms_count'];
        $this->schoolFeeDetail->status = 1;
        $this->schoolFeeDetail->is_deleted = 0;
        $this->schoolFeeDetail->save();

        $this->schoolPayment->fee_id = $this->schoolFeeDetail->id;
        $this->schoolPayment->school_id = $input['school'];
        $this->schoolPayment->balance_installation_amount = $input['total_amount'];
        $this->schoolPayment->balance_monthly_fees_amount = 0;
        $this->schoolPayment->other_charges = $input['other_charges'];
        $this->schoolPayment->gst_amount = 0;
        $this->schoolPayment->pending_months = $implode;
        $this->schoolPayment->status = 1;
        $this->schoolPayment->is_deleted = 0;
        $this->schoolPayment->save();        

        // fee added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Fee Details added Successfully...';                      
        return $msg;         
    }

    /**
     * Update new school fee details form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function updateSchoolFeeDetails($input){
        $schoolFeeDetail = $this->schoolFeeDetail::find($input['fee_id']);
        $schoolFeeDetail->installation_total_amount = $input['installation_amt'];
        $schoolFeeDetail->student_strength = $input['student_strength'];
        $schoolFeeDetail->payment_end_month = $input['payment_end_month'];
        $schoolFeeDetail->monthly_fees = $input['monthly_fees'];
        $schoolFeeDetail->per_sms_amount = $input['per_sms_amount'];
        $schoolFeeDetail->text_sms_count = $input['text_sms_count'];
        $schoolFeeDetail->voice_sms_count = $input['voice_sms_count'];
        $schoolFeeDetail->update();

        $schoolPayment = $this->schoolPayment::where('fee_id',$input['fee_id'])->first();
        $schoolPayment->other_charges = $input['other_charges'];
        $schoolPayment->update();        

        // fee updated successfull
        $msg['status'] = 1; 
        $msg['msg'] = 'Fee Details updated Successfully...';                      
        return $msg;         
    }    

    public function getNextMonth($tstamp) {
        return (strtotime('+1 months', strtotime(date('Y-m-01', $tstamp)))); 
    }    

    /* ------------------- Schools Payment Details Page --------------------------- */

    /**
     * Get schools data
     *
     */
    public function getSchoolData(){
        $user_id = Auth::user()->id;
        $school = $this->school::where('user_id',$user_id)->where('status',1)->where('is_deleted',0)->first();
        return $school;
    }

    /**
     * Get vendors data
     *
     * @param $vendor_id school
     */
    public function getVendorData($vendor_id){
        $vendor = $this->vendor::where('id',$vendor_id)->where('status',1)->where('is_deleted',0)->first();
        return $vendor;
    }

    /**
     * Get employers data
     *
     * @param $employer_id school
     */
    public function getEmployerData($employer_id){
        $employer = $this->employer::where('id',$employer_id)->where('status',1)->where('is_deleted',0)->first();
        return $employer;
    }            

    /**
     * Get schools payment data
     *
     * @param $school_id school
     */
    public function getSchoolPaymentData($school_id){
        $payment = $this->schoolPayment::where('school_id',$school_id)->where('status',1)->where('is_deleted',0)->first();
        return $payment;        
    }

    /**
     * Get schools payment data
     *
     * @param $school_id school
     */
    public function getBalanceServiceFeeAmount($school_id){
        // calculate balance service fee amount
        $balanceServiceFeeAmount = 0;
        $schoolPayments = $this->schoolPayment::where('school_id',$school_id)->first();
        $schoolFeeDetails = $this->schoolFeeDetail::where('school_id',$school_id)->first();
        $paidMonths = $schoolPayments->paid_months;
        $pendingMonths = $schoolPayments->pending_months;

        $start = $schoolFeeDetails->payment_start_month;
        $end = $schoolFeeDetails->payment_end_month;

        $start = $start=='' ? time() : strtotime($start);
        $end = $end=='' ? time() : strtotime($end); 
        $months = array();
         
        $currentMonth = date('m-Y');       
        for ($i = $start; $i <= $end; $i = $this->getNextMonth($i)) {
            if(date('m-Y', $i) == $currentMonth) break;
            $months[] = date('m-Y', $i); 
        }     
        $totalStudents = $schoolFeeDetails->student_strength;
        $monthlyFees = $schoolFeeDetails->monthly_fees;
        $pendingMonthsExplode = explode(",", $pendingMonths);
        $pendingMonthsCount = 0;
        foreach ($months as $month) {
            if(in_array($month, $pendingMonthsExplode)){
                $pendingMonthsCount++;
            }
        }
        $balanceServiceFeeAmount = $totalStudents * $monthlyFees * $pendingMonthsCount;  

        return $balanceServiceFeeAmount;  
    }

    /**
     * Get schools payment summary data
     *
     * @param $input array
     * @return $msg array
     */
    public function getPaymentSummaryData(){   
        $data = [];
        $schools = $this->school::where('status',1)->where('is_deleted',0)->get();

        $totalInstallationAmount = 0;
        $balanceInstallationAmount = 0;
        $receivedInstallationAmount = 0;
        $balanceServiceFeeAmount = 0;
        $totalBalanceAmount = 0;

        foreach ($schools as $key => $school) {
            $schoolPaymentCount = $this->schoolPayment::where('school_id',$school->id)->count();
            $schoolFeeDetailCount = $this->schoolFeeDetail::where('school_id',$school->id)->count();
            if($schoolPaymentCount > 0 && $schoolFeeDetailCount > 0){
                $schoolPayments = $this->schoolPayment::where('school_id',$school->id)->first();
                $schoolFeeDetails = $this->schoolFeeDetail::where('school_id',$school->id)->first();
                $paidMonths = $schoolPayments->paid_months;
                $pendingMonths = $schoolPayments->pending_months;

                $start = $schoolFeeDetails->payment_start_month;
                $end = $schoolFeeDetails->payment_end_month;

                $start = $start=='' ? time() : strtotime($start);
                $end = $end=='' ? time() : strtotime($end); 
                $months = array();
                 
                $currentMonth = date('m-Y');       
                for ($i = $start; $i <= $end; $i = $this->getNextMonth($i)) {
                    if(date('m-Y', $i) == $currentMonth) break;
                    $months[] = date('m-Y', $i); 
                }     
                $totalStudents = $schoolFeeDetails->student_strength;
                $monthlyFees = $schoolFeeDetails->monthly_fees;
                $pendingMonthsExplode = explode(",", $pendingMonths);
                $pendingMonthsCount = 0;
                foreach ($months as $month) {
                    if(in_array($month, $pendingMonthsExplode)){
                        $pendingMonthsCount++;
                    }
                }
                $totalInstallationAmount += $schoolFeeDetails->installation_total_amount;
                $balanceInstallationAmount += $schoolPayments->balance_installation_amount;
                $balanceServiceFeeAmount += $totalStudents * $monthlyFees * $pendingMonthsCount; 
            }else{
                $totalInstallationAmount += 0;
                $balanceInstallationAmount += 0;
                $balanceServiceFeeAmount += 0;             
            }
        }

        $receivedInstallationAmount = $totalInstallationAmount - $balanceInstallationAmount;
        $totalBalanceAmount = $balanceInstallationAmount + $balanceServiceFeeAmount;
        $data['totalInstallationAmount'] = $totalInstallationAmount;
        $data['balanceInstallationAmount'] = $balanceInstallationAmount;
        $data['receivedInstallationAmount'] = $receivedInstallationAmount;
        $data['concessionAmount'] = 0;
        $data['balanceServiceFeeAmount'] = $balanceServiceFeeAmount;
        $data['totalBalanceAmount'] = $totalBalanceAmount;
        return $data;        
    }

    /**
     * Get schools payment data
     *
     * @param $input array
     * @return $msg array
     */
    public function getSchoolOverAllPaymentData(){   
        // $payments = $this->schoolPayment::where('status',1)->where('is_deleted',0)->get();
        // return $payments;
        $data = [];
        $schools = $this->school::where('status',1)->where('is_deleted',0)->get();
        foreach ($schools as $key => $school) {
            $inrow = [];
            $balanceServiceFeeAmount = 0;
            $schoolPaymentCount = $this->schoolPayment::where('school_id',$school->id)->count();
            $schoolFeeDetailCount = $this->schoolFeeDetail::where('school_id',$school->id)->count();
            if($schoolPaymentCount > 0 && $schoolFeeDetailCount > 0){
                $schoolPayments = $this->schoolPayment::where('school_id',$school->id)->first();
                $schoolFeeDetails = $this->schoolFeeDetail::where('school_id',$school->id)->first();
                $paidMonths = $schoolPayments->paid_months;
                $pendingMonths = $schoolPayments->pending_months;

                $start = $schoolFeeDetails->payment_start_month;
                $end = $schoolFeeDetails->payment_end_month;

                $start = $start=='' ? time() : strtotime($start);
                $end = $end=='' ? time() : strtotime($end); 
                $months = array();
                 
                $currentMonth = date('m-Y');       
                for ($i = $start; $i <= $end; $i = $this->getNextMonth($i)) {
                    if(date('m-Y', $i) == $currentMonth) break;
                    $months[] = date('m-Y', $i); 
                }     
                $totalStudents = $schoolFeeDetails->student_strength;
                $monthlyFees = $schoolFeeDetails->monthly_fees;
                $pendingMonthsExplode = explode(",", $pendingMonths);
                $pendingMonthsCount = 0;
                foreach ($months as $month) {
                    if(in_array($month, $pendingMonthsExplode)){
                        $pendingMonthsCount++;
                    }
                }
                $totalInstallationAmount = $schoolFeeDetails->installation_total_amount;
                $balanceInstallationAmount = $schoolPayments->balance_installation_amount;
                $receivedInstallationAmount = $totalInstallationAmount - $balanceInstallationAmount;
                $balanceServiceFeeAmount = $totalStudents * $monthlyFees * $pendingMonthsCount;
                $inrow['school_name'] = $school->school_name;
                $inrow['city'] = $school->taluk_id;
                $inrow['strength'] = $totalStudents; 
                $inrow['tinstallamt'] = $totalInstallationAmount; 
                $inrow['rinstallamt'] = $receivedInstallationAmount; 
                $inrow['binstallamt'] = $balanceInstallationAmount; 
                $inrow['concessionamt'] = 0; 
                $inrow['monthlyamt'] = $monthlyFees; 
                $inrow['bmonthlyamt'] = $balanceServiceFeeAmount; 
                $totalBalanceAmount = $balanceInstallationAmount + $balanceServiceFeeAmount; 
                $inrow['tbamt'] = $totalBalanceAmount;
            }else{
                $inrow['school_name'] = $school->school_name;
                $inrow['city'] = $school->taluk_id;
                $inrow['strength'] = $totalStudents; 
                $inrow['tinstallamt'] = 0; 
                $inrow['rinstallamt'] = 0; 
                $inrow['binstallamt'] = 0; 
                $inrow['concessionamt'] = 0; 
                $inrow['monthlyamt'] = $monthlyFees; 
                $inrow['bmonthlyamt'] = 0; 
                $totalBalanceAmount = 0 + 0; 
                $inrow['tbamt'] = $totalBalanceAmount;                
            }
            $data[] = $inrow;  
        }
        return $data;        
    }


    /* ------------------- Schools Payment History Details Page --------------------------- */

    /**
     * Get schools payment history data
     *
     * @param $school_slug string
     */
    public function getSchoolPaymentHistoryData($input){
        $school_slug = $input['school_slug'];
        $school = $this->school::where('school_id',$school_slug)->first();
        $history = $this->schoolPaymentHistory::with('payumoney')->where('school_id',$school->id)->get();
        return $history;
    } 

    /**
     * Get schools payment history data
     *
     * @param $history_id id
     */
    public function downloadHistoryPDF($history_id){
        $history = $this->schoolPaymentHistory::with('payumoney')->where('id',$history_id)->first();
        return $history;
    } 


    /* ------------------- Office Staff School Payment --------------------------- */

    /**
     * Get schools data
     *
     */
    public function getSchoolDataByID($input){
        $school_id = $input['school_id'];
        $school = $this->school::where('school_id',$school_id)->where('status',1)->where('is_deleted',0)->first();
        if($school){
            return $school;
        }else{
            return "not-found";
        }
    }                                       
}

?>