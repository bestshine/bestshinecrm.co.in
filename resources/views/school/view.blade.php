@extends('layouts.app')

<!-- styles -->
@section('styles')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .mrgbtn10{
            margin-bottom: 10px;
        }
    </style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">VIEW SCHOOL</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <h5 style="float: left;">BASIC INFO</h5>
                    <a href="{{ route('editSchool',$view->id) }}" class="btn btn-warning" style="float: right;margin-bottom: 0;"> Edit</a>
                    <div style="clear: both;"></div>
                    <hr>
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>NAME</b> : {{ $view->school_name }}</div>
                        <div class="col-md-3"><b>ID</b> : {{ $view->school_id }}</div>
                        <div class="col-md-3"><b>EMAIL</b> : {{ $view->email }}</div>
                        <div class="col-md-3"><b>CONTACT NO</b> : {{ $view->contact_no }}</div>
                    </div>
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>CONTACT NO (OPTIONAL)</b> : {{ $view->contact_no_optional }}</div>
                        <div class="col-md-3"><b>COUNTRY</b> : {{ $view->country }}</div>
                        <div class="col-md-3"><b>CATEGORY</b> : {{ $view->school_category }}</div>
                        <div class="col-md-3"><b>PLAN TYPE</b> : {{ $view->plan_type }}</div>
                    </div> 
                    <div class="row mrgbtn10">
                        <div class="col-md-4"><b>ADDRESS</b> : {{ $view->address }}</div>
                    </div>                     
                    <hr>
                    <h5>FEES INFO</h5>                          
                    <hr>
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>VENDOR</b> : {{ $vendor->name }}</div>
                        <div class="col-md-3"><b>EMPLOYER NAME</b> : {{ $employer->full_name }}</div>
                        <div class="col-md-3"><b>EMPLOYER ID</b> : {{ $employer->emp_id }}</div>
                        <div class="col-md-3"><b>EMAIL</b> : {{ $employer->email }}</div>
                    </div> 
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>CONTACT NO</b> : {{ $employer->contact_no }}</div>
                        <div class="col-md-3"><b>CONTACT NO (OPTIONAL)</b> : {{ $employer->school_name }}</div>
                        <div class="col-md-4"><b>ADDRESS</b> : {{ $employer->address }}</div>
                    </div>       
                    <hr>           
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>AGREEMENT DATE</b> : {{ $feeDetails->agreement_date }}</div>
                        <div class="col-md-3"><b>STAMP NO</b> : {{ $feeDetails->stamp_no }}</div>
                        <div class="col-md-3"><b>AGREEMENT SIGN</b> : {{ $feeDetails->agreement_sign }}</div>
                    </div>     
                    <hr>                            
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>INSTALLATION AMT</b> : <b>RS -</b> {{ $feeDetails->installation_total_amount }}</div>
                        <div class="col-md-3"><b>STUDENT STRENGTH</b> : {{ $feeDetails->student_strength }}</div>
                        <div class="col-md-3"><b>FEES (PER / STUDENT)</b> : <b>RS -</b> {{ $feeDetails->monthly_fees }}</div>
                        <div class="col-md-3"><b>GST PERCENTAGE</b> : {{ $feeDetails->gst_percentage }}%</div>
                    </div>  
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>PAYMENT STRAT DATE</b> : {{ $feeDetails->payment_start_month }}</div>
                        <div class="col-md-3"><b>PAYMENT END DATE</b> : {{ $feeDetails->payment_end_month }}</div>
                        <div class="col-md-3"><b>PER SMS COST</b> : <b>RS -</b> {{ $feeDetails->per_sms_amount }}</div>
                        <div class="col-md-3"><b>TEXT SMS COST</b> : {{ $feeDetails->text_sms_count }} </div>
                    </div>
                    <div class="row mrgbtn10">
                        <div class="col-md-3"><b>VOICE SMS COST</b> : {{ $feeDetails->voice_sms_count }} </div>
                    </div>                    
                    <hr>
                    <h5>EDIT FEE DETAILS</h5>
                    <hr>  

                    <!-- show success -->
                    <div class="alert alert-success alert-dismissable fade in custom-success-box" style="display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong>
                    </div>

                    <!-- show error -->
                    <div class="alert alert-danger alert-dismissable fade in custom-error-box" style="display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong>
                    </div>

                    <!-- Fee details form -->
                    <form method="post" class="update-fees-form" action="{{ route('storeNewSchool') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}

                        <input type="hidden" name="fee_id" value="{{ $feeDetails->id }}">

                        <div class="row">
                            <div class="col-md-3">
                                <!-- INSTALLATION Amount -->
                                <div class="form-group">
                                    <label>Installation Amount</label> 
                                    <input type="text" class="form-control number-only" name="installation_amt" id="installation-charges" placeholder="Installation Amount" value="{{ $feeDetails->installation_total_amount }}" autofocus>

                                    <span class="install-amt-validate"></span> 
                                    @if ($errors->has('other_charges'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('other_charges') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div>                            
                            <div class="col-md-3">
                                <!-- Student Strength -->
                                <div class="form-group">
                                    <label>Student Strength</label>
                                    <input type="text" class="form-control number-only" name="student_strength" id="student-strength" placeholder="Student Strength" value="{{ $feeDetails->student_strength }}" autofocus>

                                    <span class="student-strength-validate"></span> 
                                    @if ($errors->has('student_strength'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('student_strength') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div> 
                            <div class="col-md-3">
                                <!-- Monthly Fees -->
                                <div class="form-group">
                                    <label>Monthly Fees (Per / Student )</label>
                                    <input type="text" class="form-control number-only" name="monthly_fees" id="monthly-fees" placeholder="Monthly Fees (Per / Student )" value="{{ $feeDetails->monthly_fees }}" autofocus>

                                    <span class="monthly-fees-validate"></span> 
                                    @if ($errors->has('monthly_fees'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('monthly_fees') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                            
                            </div>  
                            <div class="col-md-3">
                                <!-- Payment End Month -->
                                <div class="form-group">
                                    <label>Payment End Month</label> 
                                    <input type="text" class="form-control" name="payment_end_month" id="payment-end-month" placeholder="Payment End Month" value="{{ $feeDetails->payment_end_month }}" autofocus>

                                    <span class="payment-end-month-validate"></span> 
                                    @if ($errors->has('payment_end_month'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('payment_end_month') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div>
                        </div>  

                        <div class="row">    
                            <div class="col-md-3">
                                <!-- Sms Per Cost -->
                                <div class="form-group">
                                    <label>Sms Per Cost </label> 
                                    <input type="text" class="form-control number-only" name="per_sms_amount" id="per_-ms-amount" placeholder="Sms Per Cost" value="{{ $feeDetails->per_sms_amount }}" autofocus>

                                    <span class="per-sms-amount-validate"></span> 
                                    @if ($errors->has('per_sms_amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('per_sms_amount') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div>                                                                   
                            <div class="col-md-3">
                                <!-- Text Sms -->
                                <div class="form-group">
                                    <label>Text Sms Count</label> 
                                    <input type="text" class="form-control number-only" name="text_sms_count" id="text-sms-count" placeholder="Text Sms Count" value="{{ $feeDetails->text_sms_count }}" autofocus>

                                    <span class="text-sms-validate"></span> 
                                    @if ($errors->has('text_sms_count'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('text_sms_count') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div> 
                            <div class="col-md-3">
                                <!-- Voice Sms -->
                                <div class="form-group">
                                    <label>Voice Sms Count</label> 
                                    <input type="text" class="form-control number-only" name="voice_sms_count" id="voice-sms-count" placeholder="Voice Sms Count" value="{{ $feeDetails->voice_sms_count }}" autofocus>

                                    <span class="voice-sms-validate"></span> 
                                    @if ($errors->has('voice_sms_count'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('voice_sms_count') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div>
                            <div class="col-md-3">
                                <!-- Other Charges -->
                                <div class="form-group">
                                    <label>Other Charges</label> 
                                    <input type="text" class="form-control number-only" name="other_charges" id="other-charges" placeholder="Other Charges" autofocus>

                                    <span class="other-charges-validate"></span> 
                                    @if ($errors->has('other_charges'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('other_charges') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div>                             
                        </div> 
                        <div class="form-group">
                            <button class="btn btn-success update-fee" style="float: right;" type="button"><i class="icon-pencil"></i> Update</button>
                        </div>                         
                    </form>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- scripts -->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- forceNumeric.js -->
    <script src="{{ asset('js/forceNumeric.js') }}"></script> 
    <script type="text/javascript">
        $(document).ready(function() {

            // restrict only numbers 
            $('.number-only').forceNumeric();

            $("#payment-end-month").datepicker({ 
                format: "yyyy-mm-dd",
                autoclose: true, 
                todayHighlight: true
            }).datepicker(); 

            // update employer
            $(document).on("click",".update-fee",function() {
                var formError = false;

                var installationAmount = $('input[name=installation_amt]').val();
                if(installationAmount == ""){
                    $('.install-amt-validate').html('The installation amount field is required.');
                    $('.install-amt-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.install-amt-validate').html('');
                    $('.install-amt-validate').removeClass('field-error');
                } 

                var studentStrength = $('input[name=student_strength]').val();
                if(studentStrength == ""){
                    $('.student-strength-validate').html('The student strength field is required.');
                    $('.student-strength-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.student-strength-validate').html('');
                    $('.student-strength-validate').removeClass('field-error');
                } 

                var monthlyFees = $('input[name=monthly_fees]').val();
                if(monthlyFees == ""){
                    $('.monthly-fees-validate').html('The monthly fees field is required.');
                    $('.monthly-fees-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.monthly-fees-validate').html('');
                    $('.monthly-fees-validate').removeClass('field-error');
                } 

                var paymentEndMonth = $('#payment-end-month').val();
                if(paymentEndMonth == ""){
                    $('.payment-end-month-validate').html('The payment end month field is required.');
                    $('.payment-end-month-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.payment-end-month-validate').html('');
                    $('.payment-end-month-validate').removeClass('field-error');
                }                                                                

                // var perSmsAmount = $('input[name=per_sms_amount]').val();
                // if(perSmsAmount == ""){
                //     $('.per-sms-amount-validate').html('The sms amount field is required.');
                //     $('.per-sms-amount-validate').addClass('field-error');
                //     formError = true;
                // }else{
                //     $('.per-sms-amount-validate').html('');
                //     $('.per-sms-amount-validate').removeClass('field-error');
                // } 

                // var textSmsAmount = $('input[name=text_sms_count]').val();
                // if(textSmsAmount == ""){
                //     $('.text-sms-validate').html('The text sms amount field is required.');
                //     $('.text-sms-validate').addClass('field-error');
                //     formError = true;
                // }else{
                //     $('.text-sms-validate').html('');
                //     $('.text-sms-validate').removeClass('field-error');
                // }                

                // var voiceSmsAmount = $('input[name=voice_sms_count]').val();
                // if(voiceSmsAmount == ""){
                //     $('.voice-sms-validate').html('The voice sms amount field is required.');
                //     $('.voice-sms-validate').addClass('field-error');
                //     formError = true;
                // }else{
                //     $('.voice-sms-validate').html('');
                //     $('.voice-sms-validate').removeClass('field-error');
                // }

                if(formError == false){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('updateSchoolFeeDetails') }}",
                        data:$('.update-fees-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');

                                $('.custom-success-box strong').html(data.msg);                             
                                $('.custom-success-box').css('display','block');                    
                            }else{
                                $('.custom-success-box strong').html('');
                                $('.custom-success-box').css('display','none');

                                $('.custom-error-box strong').html(data.msg);
                                $('.custom-error-box').css('display','block');
                            }
                        },
                        error: function (data) { 
                            console.log('Server Error');

                            $('.custom-success-box strong').html('');
                            $('.custom-success-box').css('display','none');

                            $('.custom-error-box strong').html('Server Error Please Wait...');
                            $('.custom-error-box').css('display','block');                        
                        }                    
                    });                    
                }
            });            
        });                
    </script>
@stop
