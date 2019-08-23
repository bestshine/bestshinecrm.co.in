<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Employer;
use App\Models\OfficeEmployer;
use App\Models\School;
use App\Models\SchoolFeeDetail;
use App\Models\SchoolPayment;
use App\Models\ServiceDocument;
use Auth;

class DashboardController extends Controller
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
     * Show the dashboard page.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {	
        if(Auth::User()->role->first()->name == "admin"){
            $appCount = [];
            $appCount['school'] = School::where('status',1)->where('is_deleted',0)->count();
            $appCount['vendor'] = Vendor::where('status',1)->where('is_deleted',0)->count();
            $appCount['franchise'] = Employer::where('status',1)->where('is_deleted',0)->count();
            $appCount['offemployer'] = OfficeEmployer::where('status',1)->where('is_deleted',0)->count();
            return view('dashboard',compact('appCount'));
        }else if(Auth::User()->role->first()->name == "school"){
            $school =School::where('user_id',Auth::User()->id)->first();
            $schoolFeeDetails =SchoolFeeDetail::where('school_id',$school->id)->first();
            $serviceDoc =ServiceDocument::where('school_id',$school->id)->first();
            // calculate balance service fee amount
            $balanceServiceFeeAmount = 0;
            $schoolPayments = SchoolPayment::where('school_id',$school->id)->first();
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
            return view('dashboard',compact('school','schoolFeeDetails','serviceDoc','balanceServiceFeeAmount'));
        }else{
            return view('dashboard');            
        }
    }

    public function getNextMonth($tstamp) {
        return (strtotime('+1 months', strtotime(date('Y-m-01', $tstamp)))); 
    }             
}
