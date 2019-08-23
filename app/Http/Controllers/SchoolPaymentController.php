<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tzsk\Payu\Facade\Payment;
use App\Models\School;
use App\Models\SchoolPayment;
use App\Models\SchoolPaymentHistory;
use Auth;
use Carbon\Carbon;

class SchoolPaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }  

    /**
     * Pay school payment
     *
     * @return json $response
     */
    public function paySchoolPayment(Request $request)
    {   
        $input = $request->all();
        $school = School::find($input['school_id']);
        $request->session()->put('secureInputData',$input);
        $attributes = [
            'txnid' => strtoupper(str_random(8)), # Transaction ID.
            'amount' => $input['total_entered_amount'], # Amount to be charged.
            'productinfo' => "BestShine",
            'firstname' => $school->school_name, # Payee Name.
            'email' => $school->email, # Payee Email Address.
            'phone' => $school->contact_no # Payee Phone Number.
        ];

        // return redirect()->route('schoolPaymentStatus');
        return Payment::make($attributes, function ($then) {
            $then->redirectRoute('schoolPaymentStatus');
        });                                                            
    }

    /**
     * Show screen for school user payment history
     *
     * @return json $response
     */
    public function schoolPaymentStatus(Request $request)
    {   
    	$paymentData = Payment::capture(); 
        if($paymentData->status == "Completed"){
    	// if("Completed" == "Completed"){
	    	$secureInputData = $request->session()->get('secureInputData');     
    		if($secureInputData){
		        $schoolPaymentHistory = new SchoolPaymentHistory();
		        // payment history
                $schoolPaymentHistory->user_id = Auth::user()->id;
		        $schoolPaymentHistory->txnid = $paymentData->txnid;
		        $schoolPaymentHistory->school_id = $secureInputData['school_id'];
		        $schoolPaymentHistory->payment_id = $secureInputData['payment_id'];
		        $schoolPaymentHistory->payment_mode = $secureInputData['payment_mode'];
                $schoolPaymentHistory->pay_id = $paymentData->id;
                // $schoolPaymentHistory->pay_id = 1;
                $schoolPaymentHistory->paid_installation_amount = $secureInputData['blc_install_amount'];
                $schoolPaymentHistory->paid_monthly_fees_amount = $secureInputData['blc_monthly_fee_amount'];
                $schoolPaymentHistory->other_charges_amount = $secureInputData['other_chargers_amount'];
                $schoolPaymentHistory->gst_amount = $secureInputData['gst_amount'];
                $schoolPaymentHistory->paid_month = $secureInputData["selected_months"];
                $schoolPaymentHistory->total_paid_amount = $secureInputData['total_entered_amount'];
		        $schoolPaymentHistory->payment_date = Carbon::now();
		        $schoolPaymentHistory->status = 1;
		        $schoolPaymentHistory->is_deleted = 0;
		        $schoolPaymentHistory->save();

		        $schoolPayment = SchoolPayment::find($secureInputData['payment_id']);

		        // update amount to payment table
		        $balance_installation_amount = $schoolPayment->balance_installation_amount - $secureInputData['blc_install_amount'];
		        $balance_monthly_fees_amount = $schoolPayment->balance_monthly_fees_amount - $secureInputData['blc_monthly_fee_amount'];
		        $other_charges = 0;
		        $gst_amount = 0;
		        $paid_months = $schoolPayment->paid_months.','.$secureInputData['selected_months'];
                $pendingMonthExplodeArray = explode(",", $schoolPayment->pending_months);
                $inputSelectedMonthsArray = explode(",", $secureInputData['selected_months']);
                $pending_months = [];
                foreach ($pendingMonthExplodeArray as $key => $value) {
                    if(!in_array($value, $inputSelectedMonthsArray)){
                        $pending_months[] = $value;
                    }
                }
                $implodePendingMonths = implode(",", $pending_months);

		        $schoolPayment->balance_installation_amount = $balance_installation_amount;
		        // $schoolPayment->balance_monthly_fees_amount = $balance_monthly_fees_amount;
		        $schoolPayment->other_charges = $other_charges;
		        $schoolPayment->gst_amount = $gst_amount;
		        $schoolPayment->paid_months = $paid_months;
		        $schoolPayment->pending_months = $implodePendingMonths;
		        $schoolPayment->status = 1;
		        $schoolPayment->is_deleted = 0;
		        $schoolPayment->update();
    		} 
    	} 
    	// forgot session
        $request->session()->forget('secureInputData');                 
    	return view('school.payment.transaction',compact('paymentData'));
    }

    /**
     * Show screen for school user payment history
     *
     * @return json $response
     */
    public function officeStaffPaySchoolPayment(Request $request)
    {   
        $input = $request->all();
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $txnID = '';
        for ($i = 0; $i < $length; $i++) {
            $txnID .= $characters[rand(0, $charactersLength - 1)];
        }

        $schoolPaymentHistory = new SchoolPaymentHistory();
        // payment history
        $schoolPaymentHistory->user_id = Auth::user()->id;
        $schoolPaymentHistory->txnid = $txnID;
        $schoolPaymentHistory->school_id = $input['school_id'];
        $schoolPaymentHistory->payment_id = $input['payment_id'];
        $schoolPaymentHistory->payment_mode = $input['payment_mode'];
        $schoolPaymentHistory->paid_installation_amount = $input['blc_install_amount'];
        $schoolPaymentHistory->paid_monthly_fees_amount = $input['blc_monthly_fee_amount'];
        $schoolPaymentHistory->other_charges_amount = $input['other_chargers_amount'];
        $schoolPaymentHistory->gst_amount = $input['gst_amount'];
        $schoolPaymentHistory->concession_amount = $input['concession_amount'];
        $schoolPaymentHistory->remarks = $input['remarks'];
        $schoolPaymentHistory->paid_month = $input["selected_months"];
        $schoolPaymentHistory->total_paid_amount = $input['total_entered_amount'];
        $schoolPaymentHistory->cheque_no = $input['cheque_no'];
        $schoolPaymentHistory->check_date = $input['cheque_date'];
        $schoolPaymentHistory->cheque_bank_name = $input['cheque_bank_name'];
        $schoolPaymentHistory->payment_date = Carbon::now();
        $schoolPaymentHistory->status = 1;
        $schoolPaymentHistory->is_deleted = 0;
        $schoolPaymentHistory->save();

        $schoolPayment = SchoolPayment::find($input['payment_id']);

        // update amount to payment table
        $balance_installation_amount = $schoolPayment->balance_installation_amount - $input['blc_install_amount'];
        $balance_monthly_fees_amount = $schoolPayment->balance_monthly_fees_amount - $input['blc_monthly_fee_amount'];
        $other_charges = 0;
        $gst_amount = 0;
        $paid_months = $schoolPayment->paid_months.','.$input['selected_months'];
        $pendingMonthExplodeArray = explode(",", $schoolPayment->pending_months);
        $inputSelectedMonthsArray = explode(",", $input['selected_months']);
        $pending_months = [];
        foreach ($pendingMonthExplodeArray as $key => $value) {
            if(!in_array($value, $inputSelectedMonthsArray)){
                $pending_months[] = $value;
            }
        }
        $implodePendingMonths = implode(",", $pending_months);

        $schoolPayment->balance_installation_amount = $balance_installation_amount;
        // $schoolPayment->balance_monthly_fees_amount = $balance_monthly_fees_amount;
        $schoolPayment->other_charges = $other_charges;
        $schoolPayment->gst_amount = $gst_amount;
        $schoolPayment->paid_months = $paid_months;
        $schoolPayment->pending_months = $implodePendingMonths;
        $schoolPayment->status = 1;
        $schoolPayment->is_deleted = 0;
        $schoolPayment->update(); 

        // payment data
        $paymentData =  new \stdClass;
        $paymentData->txnid = $txnID;
        $paymentData->net_amount_debit = $input['total_entered_amount'];
        $paymentData->mode = $input['payment_mode'];
        $paymentData->status = 1;
        return view('school.payment.transaction',compact('paymentData'));       
    }
}
