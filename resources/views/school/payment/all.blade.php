@extends('layouts.app')

<!-- styles -->
@section('styles')
    <style type="text/css">
        .payment-school-details p{
            font-weight: bold;
            margin-bottom: 2px;
            text-transform: uppercase;
            font-size: 12px;
        }
        .payment-school-details hr{
            margin-top: 0rem;
            margin-bottom: 0.5rem;            
        }
        .payment-franchise-details p{
            font-weight: bold;
            margin-bottom: 2px;
            text-transform: uppercase;
            font-size: 12px;            
        }
        .payment-franchise-details hr{
            margin-top: 0rem;
            margin-bottom: 0.5rem;            
        }        
        .payment-detail-box{
            border: 1px solid #ddd;
            padding: 10px;
        }
        .payment-detail-box button{
            text-align: center;
            
        }
        .txt-cntr{
            text-align: center;
        }
        .txt-cntr p{
            font-weight: bold;
            margin-bottom: 2px;
            text-transform: uppercase;
            font-size: 12px; 
            padding: 10px 0;               
        }
        .txt-cntr hr{
            margin-top: 0rem;
            margin-bottom: 0.5rem;            
        }      
        .total-amt{
            border-top: 1px solid #ddd;
        }          
        .txt-cntr input{
            width: 70%;
            margin: 0 auto;
            margin-bottom: 5px;
        }
        .box-dash p{
            margin: 0 0 0 2px;
            text-align: center;
            padding: 10px 0;
        }
        .field-error{
            float: none;
        }
        .mr-10{
            margin-right: 10px;
        }
    </style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">SCHOOL PAYMENT DETAILS</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 payment-school-details">
                            <h5>SCHOOL INFO </h5>
                            <hr>
                            <p>SCHOOL NAME : {{ $school->school_name }} </p>
                            <p>SCHOOL ID : {{ $school->school_id }}</p>
                            <p>CATEGORY : {{ $school->school_category }}</p>
                            <p>PLAN TYPE : {{ $school->plan_type }}</p>
                            <p>EMAIL : {{ $school->email }}</p>
                            <p>CONTACT NO : {{ $school->contact_no }}</p>
                            <p>ADDRESS : {{ $school->address }}</p>
                        </div>
                        <div class="col-md-4 payment-franchise-details">
                            <h5>COMPANY INFO </h5>
                            <hr>
                            <p>BESTSHINE EDUCATION CAMPUS PRIVATE LIMITED</p>
                            <p>EMAIL : info@bestshieeduapp.com - support@bestshieeduapp.com</p>
                            <p>CONTACT NO : 9840652803</p>
                            <p>ADDRESS : Chennai,Tamilnadu - 600078</p>

<!--                             <p>VENDOR NAME : {{ $vendor->name }} </p>
                            <p>EMPLOYER ID : {{ $employer->emp_id }}</p>
                            <p>FULL NAME : {{ $employer->full_name }}</p>
                            <p>EMAIL : {{ $employer->email }}</p>
                            <p>CONTACT NO : {{ $employer->contact_no }}</p>
                            <p>ADDRESS : {{ $employer->address }}</p> -->
                        </div> 
                        <div class="col-md-2"></div>                       
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>                       
                        <div class="col-md-10">
                            <!-- show user actions success -->
                            <div class="alert alert-success alert-dismissable fade in custom-success-box" style="display: none;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong></strong>
                            </div>

                            <!-- show user actions error -->
                            <div class="alert alert-danger alert-dismissable fade in custom-error-box" style="display: none;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong></strong>
                            </div>                             
                            <div class="payment-detail-box">                            
                            <form method="post" class="school-payment-form" action="{{ route('paySchoolPayment') }}">                            
                                <!-- CSRF field -->
                                {{csrf_field()}}   
                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                <input type="hidden" name="payment_mode" value="Online">
                                <input type="hidden" name="selected_months">
                                <div class="row">

                                    <!-- Monthly Fee Calculation -->
                                    @php 
                                        $monthDuration = App\Models\SchoolFeeDetail::where('school_id',$payment->school_id)->first();
                                        $startMonth = $monthDuration->payment_start_month;
                                        $endMonth = $monthDuration->payment_end_month;
                                        $studentStrength = $monthDuration->student_strength;
                                        $monthlyFees = $monthDuration->monthly_fees;
                                        $gstPercentage = $monthDuration->gst_percentage;
                                        $paidMonths = $payment->paid_months;
                                        $pendingMonths = $payment->pending_months;
                                        $paidMonthsArray = explode(",",$paidMonths);
                                        $pendingMonthsArray = explode(",",$pendingMonths);
                                        $start    = (new DateTime($startMonth))->modify('first day of this month');
                                        $end      = (new DateTime($endMonth))->modify('first day of next month');
                                        $interval = DateInterval::createFromDateString('1 month');
                                        $period   = new DatePeriod($start, $interval, $end);
                                        $yearWithMonthPeriod = [];
                                        $yearPeriod = [];
                                        foreach ($period as $dt) {
                                            $yearWithMonth = $dt->format("m-Y");
                                            if(!in_array($yearWithMonth, $yearWithMonthPeriod)){
                                                $yearWithMonthPeriod[] = $yearWithMonth;
                                            }
                                            $year = $dt->format("Y");
                                            if(!in_array($year, $yearPeriod)){
                                                $yearPeriod[] = $year;
                                            }                                            
                                        }                               
                                    @endphp

                                    <!-- Amount Calculation -->
                                    @php 
                                        $totalAmount = $payment->balance_installation_amount + $payment->balance_monthly_fees_amount + $payment->other_charges; 
                                    @endphp

                                    <div class="col-md-5 txt-cntr">
                                        <p>TITLE</p>
                                        <hr>
                                        <p style="text-align: left;">1.BALANCE INSTALLATION AMOUNT</p>
                                        <p style="text-align: left;">2.<a class="show-month-dialog" href="javascript:void(0)" title="Show Months">(SELECT MONTH)</a> FEES <span> (PREVIOUS MON AMT - {{ $balanceServiceFeeAmount }} RS) </span></p>
                                        <p style="text-align: left;">3.OTHER CHARGES</p>
                                        <p style="text-align: left;">4.GST ({{ $gstPercentage }}%)</p>
                                        <p style="text-align: right;">TOTAL</p>
                                    </div>
                                    <div class="col-md-2 box-dash">
                                        <p>-</p>
                                        <p>-</p>
                                        <p>-</p>
                                        <p>-</p>
                                        <p>-</p>
                                        <p>-</p>
                                    </div>
                                    <span class="actual-amounts" data-gst-percentage="{{ $gstPercentage }}" data-student-strength="{{ $studentStrength }}" data-monthly-fees="{{ $monthlyFees}}">
                                    <div class="col-md-5 txt-cntr">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>AMOUNT (RS)</p>
                                                <hr>                                                
                                                <p class="install-amt">{{ $payment->balance_installation_amount }}</p>
                                                <p class="monthly-amt">{{ $payment->balance_monthly_fees_amount }}</p>
                                                <p class="oth-chrg-amt">{{ $payment->other_charges }}</p>
                                                <p class="gst-amt">0</p>
                                                <p class="total-amt">{{ $totalAmount }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>PAID AMOUNT (RS)</p>
                                                <hr>                                                  
                                                <input type="text" class="form-control number-only" name="blc_install_amount" id="blc-install-amount" placeholder="10.00" autofocus>
                                                <input type="text" class="form-control number-only" name="blc_monthly_fee_amount" id="blc-monthly-fee-amount" placeholder="10.00" value="{{ $payment->balance_monthly_fees_amount }}" readonly="" autofocus>
                                                <input type="text" class="form-control number-only" name="other_chargers_amount" id="other-chargers-amount" placeholder="10.00" value="{{ $payment->other_charges }}" readonly="" autofocus>
                                                <input type="text" class="form-control gst-amt number-only" name="gst_amount" id="gst-amount" readonly autofocus>
                                                <input type="text" class="form-control total-amt number-only" name="total_entered_amount" id="total-entered-amount" readonly="" autofocus>                                                
                                            </div>                                            
                                        </div>                            
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="validate-div" style="text-align: center;">
                                            <span class="show-validate"></span>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button class="btn btn-info pay-now" type="button"> Pay Now</button>
                                    </div>
                                    <div class="col-md-5"></div>
                                </div>                                
                            </form>  
                            </div>                          
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Month -->
<div class="modal fade" id="showMonthModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <h4 class="modal-title">Payment Months</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="text-align: center;">
                        @foreach($yearPeriod as $year)
                            <h5>Period : {{ $year }}</h5>
                            @php 
                                $var1 = "01-$year"; 
                                $var2 = "02-$year"; 
                                $var3 = "03-$year"; 
                                $var4 = "04-$year"; 
                                $var5 = "05-$year"; 
                                $var6 = "06-$year"; 
                                $var7 = "07-$year"; 
                                $var8 = "08-$year"; 
                                $var9 = "09-$year"; 
                                $var10 = "10-$year"; 
                                $var11 = "11-$year"; 
                                $var12 = "12-$year"; 
                            @endphp                                
                            <div class="form-group">
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var1}}" type="checkbox" @if(!in_array($var1,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var1,$paidMonthsArray)) checked="" disabled="" @endif @endif>January
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var2}}" type="checkbox" @if(!in_array($var2,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var2,$paidMonthsArray)) checked="" disabled="" @endif @endif>February
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var3}}" type="checkbox" @if(!in_array($var3,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var3,$paidMonthsArray)) checked="" disabled="" @endif @endif>March
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var4}}" type="checkbox" @if(!in_array($var4,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var4,$paidMonthsArray)) checked="" disabled="" @endif @endif>April
                                </label>                                                              
                            </div>

                            <div class="form-group">
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var5}}" type="checkbox" @if(!in_array($var5,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var5,$paidMonthsArray)) checked="" disabled="" @endif @endif>May
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var6}}" type="checkbox" @if(!in_array($var6,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var6,$paidMonthsArray)) checked="" disabled="" @endif @endif>June
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var7}}" type="checkbox" @if(!in_array($var7,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var7,$paidMonthsArray)) checked="" disabled="" @endif @endif>Jully
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var8}}" type="checkbox" @if(!in_array($var8,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var8,$paidMonthsArray)) checked="" disabled="" @endif @endif>August
                                </label>                                                              
                            </div>

                            <div class="form-group">
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var9}}" type="checkbox" @if(!in_array($var9,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var9,$paidMonthsArray)) checked="" disabled="" @endif @endif>September
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var10}}" type="checkbox" @if(!in_array($var10,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var10,$paidMonthsArray)) checked="" disabled="" @endif @endif>October
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var11}}" type="checkbox" @if(!in_array($var11,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var11,$paidMonthsArray)) checked="" disabled="" @endif @endif>November
                                </label>
                                <label class="checkbox-inline mr-10">
                                    <input class="checkbox-click" name="checkbox_months" value="{{$var12}}" type="checkbox" @if(!in_array($var12,$yearWithMonthPeriod)) disabled="" @else @if(in_array($var12,$paidMonthsArray)) checked="" disabled="" @endif @endif>December
                                </label>                                                              
                            </div>                             
                        @endforeach 
                        <div class="form-group">                            
                            <span class="month-select-validate"></span>                                             
                        </div>
                        <button class="btn btn-info apply" type="button"> Apply</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>                          
            </div>
        </div>
    </div>
</div>
@endsection

<!-- scripts -->
@section('scripts')
    <!-- forceNumeric.js -->
    <script src="{{ asset('js/forceNumeric.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {     
            // restrict only numbers 
            $('.number-only').forceNumeric();

            $(document).on("click",".show-month-dialog",function() {
                $('#showMonthModal').modal('show');
                $('#showMonthModal').modal({backdrop: 'static', keyboard: false});
            });

            $(document).on("click",".apply",function() {
                var numberOfSelectedMonths = $("input[name='checkbox_months']:checked").length;
                if(numberOfSelectedMonths == 0){
                    $('.month-select-validate').html('Please select month');
                    $('.month-select-validate').addClass('field-error');                      
                }else{
                    $('.month-select-validate').html('');
                    $('.month-select-validate').removeClass('field-error');                      
                    var selectedMonths = [];
                    $.each($("input[name='checkbox_months']:checked").not("[disabled]"), function(){            
                        selectedMonths.push($(this).val());
                    });
                    console.log(selectedMonths);
                    $("input[name='selected_months']").val(selectedMonths);
                    var calculateTotalStudentFees = parseFloat($(".actual-amounts").attr("data-student-strength")) * parseFloat($(".actual-amounts").attr("data-monthly-fees"));
                    var totalMonthlyFees = parseFloat(calculateTotalStudentFees) * parseFloat(selectedMonths.length);
                    $(".monthly-amt").html(parseFloat(totalMonthlyFees));
                    $("#blc-monthly-fee-amount").val(parseFloat(totalMonthlyFees));
                    var actualTotalAmount = parseFloat($('.install-amt').html())+parseFloat($('.monthly-amt').html())+parseFloat($('.oth-chrg-amt').html());
                    $('.total-amt').html(parseFloat(actualTotalAmount));   
                    $('#showMonthModal').modal('hide');
                }           
            });            

            // pay now
            $(document).on("click",".pay-now",function() {
                var formError = false;

                var blcInstallAmount = $('input[name=blc_install_amount]').val();
                // if(blcInstallAmount == ""){
                //     formError = true;
                // }

                var blcMonthlyFeeAmount = $('input[name=blc_monthly_fee_amount]').val();
                if(blcMonthlyFeeAmount == ""){
                    formError = true;
                }

                var otherChargesAmount = $('input[name=other_chargers_amount]').val();
                // if(otherChargesAmount == ""){
                //     formError = true;
                // }                   

                // Actual Amounts
                var actualInstallAmount = parseFloat($('.install-amt').html());
                var actualMonthlyAmount = parseFloat($('.monthly-amt').html());
                var actualOtherAmount = parseFloat($('.oth-chrg-amt').html());
                var actualTotalAmount = parseFloat($('.total-amt').html());
                if(!$.isNumeric(actualOtherAmount)){
                    actualOtherAmount = 0;
                }
                if(formError == true){
                    $('.show-validate').html('Please enter all form data');
                    $('.show-validate').addClass('field-error');                    
                }else{                                 
                    // if(parseFloat(blcInstallAmount) >= 0 && parseFloat(blcMonthlyFeeAmount) >= 0 && parseFloat(otherChargesAmount) >= 0){
                    if(parseFloat(blcInstallAmount) >= 0 && parseFloat(blcMonthlyFeeAmount) >= 0){
                        var otherError = false;
                        if(!(parseFloat(actualInstallAmount) >= parseFloat(blcInstallAmount))){
                            otherError = true;
                        }

                        if(!(parseFloat(actualMonthlyAmount) == parseFloat(blcMonthlyFeeAmount))){
                            otherError = true;
                        }

                        // if(!(parseFloat(actualOtherAmount) == parseFloat(otherChargesAmount))){
                        //     otherError = true;
                        // }

                        // if(!(parseFloat(actualGSTAmount) >= parseFloat(gstAmount))){
                        //     otherError = true;
                        // }
                        if(otherError == false){
                            $('.show-validate').html('');
                            $('.show-validate').removeClass('field-error');                             
                            var totalEnteredAmount = 0;                         
                            totalEnteredAmount = parseFloat(blcInstallAmount) + parseFloat(blcMonthlyFeeAmount) + parseFloat(actualOtherAmount);      

                            // calculate gst amount
                            var gstPercentage = $('.actual-amounts').attr("data-gst-percentage");  
                            var gstAmount = parseFloat(totalEnteredAmount*gstPercentage)/100;
                            $('.gst-amt').html(gstAmount);                              
                            $('input[name=gst_amount]').val(gstAmount); 
                            var finalEnteredAmount = parseFloat(totalEnteredAmount+gstAmount);
                            $('#total-entered-amount').val(parseFloat(finalEnteredAmount));
                            $('.school-payment-form').submit();
                        }else{
                            $('.show-validate').html('Please enter correct data');
                            $('.show-validate').addClass('field-error');                             
                        }                                                                                           
                    }else{
                        console.log("second error");
                        $('.show-validate').html('Please enter correct data');
                        $('.show-validate').addClass('field-error');                         
                    }                                        
                }
            });            
        });                
    </script>
@stop
