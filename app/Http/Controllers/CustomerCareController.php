<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CustomerCare\CustomerCareInterface as CustomerCareInterface;
use Auth;
use Redirect;

class CustomerCareController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CustomerCareInterface $customerCare)
    {   
        $this->customerCare = $customerCare;
        $this->middleware('auth');
    }

    /**
     * Show the school page.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerCareList()
    {	
        if(Auth::User()->role->first()->name == "school"){
            return view('customercare.create');
        }else{
            $newIssues = $this->customerCare->getNewIssue();
            $reIssues = $this->customerCare->getReIssue();
            $processIssues = $this->customerCare->getProcessIssue();
            $holdIssues = $this->customerCare->getHoldIssue();
            $closeIssues = $this->customerCare->getCloseIssue();
            $overAllReport = $this->customerCare->getOverAllReport();
            return view('customercare.all',compact('newIssues','reIssues','processIssues','holdIssues','closeIssues','overAllReport'));
        }
    } 

    /**
     * Store issue details.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function storeNewIssue(Request $request)
    {   
        $input = $request->all();
        $response = $this->customerCare->storeNewIssue($input);
        return Redirect::back()->with('success', $response);
    } 

    /**
     * Get customer care details.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function getCustomerCareDetails($track_id)
    {   
        $details = $this->customerCare->getCustomerCareDetails($track_id); 
        $notes = $this->customerCare->getCustomerCareNoteDetails($details->id); 
        return view('customercare.track',compact('details','notes'));       
    }

    /**
     * Store issue details.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function replyIssue(Request $request)
    {   
        $input = $request->all();
        $response = $this->customerCare->replyIssue($input);
        return Redirect::back()->with('success', $response);
    } 

    /**
     * Check Track id details.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function checkTrackID(Request $request)
    {   
        $input = $request->all();
        $response = $this->customerCare->checkTrackID($input);
        return response()->json($response);  
    }                  
}
