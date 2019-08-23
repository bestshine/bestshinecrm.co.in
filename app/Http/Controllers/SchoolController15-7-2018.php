<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\School\SchoolInterface as SchoolInterface;
use PDF;

class SchoolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SchoolInterface $school)
    {   
        $this->school = $school;
        $this->middleware('auth');
    }

    /**
     * Show the school page.
     *
     * @return \Illuminate\Http\Response
     */
    public function school()
    {	
        return view('school.all');
    }

    /**
     * Get all schools.
     *
     * @return array $data
     */
    public function getSchoolsData()
    {   
        $data = [];
        $schools = $this->school->getAllSchools();
        $data['data'] = $schools;
        return $data;        
    }      

    /**
     * Show the school form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNewSchool()
    {	
        $vendors = $this->school->getActivatedVendors();
        $states = $this->school->getActivatedStates();
        return view('school.create',compact('vendors','states'));
    } 

    /**
     * Show the employer details form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmployerDataByID(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->getEmployerDataByID($input);
        return response()->json($response);  
    }

    /**
     * Show the school form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewSchool(Request $request)
    {	
        $input = $request->all();
        $response = $this->school->storeNewSchool($input);
        return response()->json($response);    
    }

    /**
     * Show the school form edit page.
     *
     * @return \Illuminate\Http\Response
     */
    public function editSchool($id)
    {   
        $edit = $this->school->getSingleSchoolData($id);
        return view('school.edit',compact('edit'));      
    } 

    /**
     * update school.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateSchool(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->updateSchool($input);
        return response()->json($response);          
    }     

    /**
     * Show the school form view page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewSchool($id)
    {   
        $view = $this->school->getSingleSchoolData($id);
        $feeDetails = $this->school->getSchoolFeeData($id);
        $vendor = $this->school->getVendorData($view->vendor_id);
        $employer = $this->school->getEmployerData($view->assign_emp_id);        
        return view('school.view',compact('view','feeDetails','vendor','employer'));      
    }     

    /**
     * Activate school.
     *
     * @param $request array
     * @return json $response
     */
    public function activateSchool(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->activateSchool($input);
        return response()->json(['result'=>$response]);    
    }

    /**
     * Deactivate school.
     *
     * @param $request array
     * @return json $response
     */
    public function deactivateSchool(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->deactivateSchool($input);
        return response()->json(['result'=>$response]);          
    }           

    /**
     * Delete school.
     *
     * @param $request array
     * @return json $response
     */
    public function deleteSchool(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->deleteSchool($input);
        return response()->json(['result'=>$response]);          
    } 

    /**
     * Create school fee details.
     *
     * @param $request array
     * @return json $response
     */
    public function addSchoolFeeDetails()
    {   
        $vendors = $this->school->getActivatedVendors();
        $schools = $this->school->getSchoolsForFeeDetails();
        return view('school.fee.create',compact('vendors','schools'));                 
    }

    /**
     * Store school fee details form data.
     *
     * @param $request array
     * @return json $response
     */
    public function storeSchoolFeeDetails(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->storeSchoolFeeDetails($input);
        return response()->json($response);                  
    }

    /**
     * Update school fee details form data.
     *
     * @param $request array
     * @return json $response
     */
    public function updateSchoolFeeDetails(Request $request)
    {   
        $input = $request->all();
        $response = $this->school->updateSchoolFeeDetails($input);
        return response()->json($response);                  
    }    

    /**
     * Show over all payments for school
     *
     * @return json $response
     */
    public function overAllSchoolPayment()
    {   
        return view('school.payment.over-all');                 
    } 

    /**
     * Get over all payment details for schools.
     *
     * @return array $data
     */
    public function getSchoolOverAllPaymentData()
    {   
        $data = [];
        $payments = $this->school->getSchoolOverAllPaymentData();
        $data['data'] = $payments;
        return $data;        
    }

    /**
     * Show screen for school user payment data
     *
     * @return json $response
     */
    public function schoolPayment()
    {   
        $school = $this->school->getSchoolData();
        $payment = $this->school->getSchoolPaymentData($school->id);
        $vendor = $this->school->getVendorData($school->vendor_id);
        $employer = $this->school->getEmployerData($school->assign_emp_id);
        $balanceServiceFeeAmount = $this->school->getBalanceServiceFeeAmount($school->id);
        return view('school.payment.all',compact('school','payment','vendor','employer','balanceServiceFeeAmount'));
    }      

    /**
     * Show screen for school user payment history
     *
     * @return json $response
     */
    public function schoolPaymentHistory($school_slug)
    {   
        return view('school.payment.history',compact('school_slug'));                 
    }

    /**
     * Get schools history data.
     *
     * @return array $data
     */
    public function getSchoolPaymentHistoryData(Request $request)
    {   
        $input = $request->all();
        $data = [];
        $history = $this->school->getSchoolPaymentHistoryData($input);
        $data['data'] = $history;
        return $data;        
    }

    public function downloadHistoryPDF($history_id){
        $history = $this->school->downloadHistoryPDF($history_id);
        $pdf = PDF::loadView('school.payment.history-pdf', compact('history'));
        return $pdf->download('history.pdf');
    }

    /*---------------------------- Office Staff School Payment ------------------------ */

    /**
     * Show payment page for office employers.
     *
     * @return \Illuminate\Http\Response
     */
    public function officeStaffSchoolPayment()
    {   
        return view('school.payment.office.all');  
    }    

    /**
     * Get school payment by school id
     *
     * @return \Illuminate\Http\Response
     */
    public function searchSchoolPayment(Request $request)
    {   
        $input = $request->all();
        $school = $this->school->getSchoolDataByID($input);
        if($school != "not-found"){
            $payment = $this->school->getSchoolPaymentData($school->id);
            $vendor = $this->school->getVendorData($school->vendor_id);
            $employer = $this->school->getEmployerData($school->assign_emp_id);
            $balanceServiceFeeAmount = $this->school->getBalanceServiceFeeAmount($school->id);
            $html =  view('school.payment.office.load',compact('school','payment','vendor','employer','balanceServiceFeeAmount'))->render();
            return response()->json(['html'=>$html]);
        }else{
            return response()->json(['html'=>"not-found"]); 
            // return "not-found";
        }       
    }                             
}
