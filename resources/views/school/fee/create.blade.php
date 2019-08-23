@extends('layouts.app')

<!-- styles -->
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .emp-details-box{
            padding: 10px 10px 40px 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ADD NEW SCHOOL FEE DETAILS</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
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

                    <form method="post" class="add-school-fee-form" action="{{ route('storeSchoolFeeDetails') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}
                        
                        <h5>SCHOOL INFORMATION</h5>
                        <hr>
                        <div class="row"> 
                            <div class="col-md-4">
                                <!-- Vendor -->
                                <div class="form-group">
                                    <label>Vendor</label>
                                    <select class="form-control" name="vendor" id="vendor">
                                        <option value=""> ---Select Vendor--- </option>
                                        @foreach($vendors as $vendor)
                                            @if (Request::old('vendor') == $vendor->id)
                                                <option value="{{$vendor->id}}" selected>{{$vendor->name}}</option>
                                            @else
                                                <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                            @endif
                                        @endforeach                                        
                                    </select>                                    
                                    <span class="vendor-validate"></span> 
                                    @if ($errors->has('vendor'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('vendor') }}</strong>
                                        </span>
                                    @endif                               
                                </div>                                
                            </div>                                                       
                            <div class="col-md-4">
                                <!-- School -->
                                <div class="form-group">
                                    <label>School</label>
                                    <select class="form-control" name="school" id="school">
                                        <option value=""> ---Select School--- </option>
                                            @foreach($schools as $school)
                                                @if (Request::old('school') == $school->id)
                                                    <option value="{{$school->id}}" selected>{{$school->school_name}}</option>
                                                @else
                                                    <option value="{{$school->id}}">{{$school->school_name}}</option>
                                                @endif
                                            @endforeach
                                    </select>

                                    <span class="school-validate"></span> 
                                    @if ($errors->has('school_state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_state') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>                                                
                        </div>   

                        <h5>AGREEMENT DETAILS</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Agreement date -->
                                <div class="form-group">
                                    <label>Agreement Date</label>
                                    <input type="text" class="form-control" name="agreement_date" id="agreement-date" placeholder="Agreement Date" autofocus>

                                    <span class="agreement-date-validate"></span> 
                                    @if ($errors->has('school_state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_state') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                               
                            </div> 
                            <div class="col-md-4">
                                <!-- Stamp No -->
                                <div class="form-group">
                                    <label>Stamp No</label>
                                    <input type="text" class="form-control" name="stamp_no" id="stamp-no" placeholder="Stamp No" autofocus>

                                    <span class="stamp-no-validate"></span> 
                                    @if ($errors->has('stamp_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stamp_no') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                               
                            </div> 
                            <div class="col-md-4">
                                <!-- Agreement Sign -->
                                <div class="form-group">
                                    <label>Agreement Sign</label>
                                    <select class="form-control" name="agreement_sign" id="agreement-sign">
                                        <option value=""> ---Select Option--- </option>
                                        <option value="Yes"> Yes </option>
                                        <option value="No"> No </option>
                                    </select>                                    

                                    <span class="agreement-sign-validate"></span> 
                                    @if ($errors->has('agreement_sign'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('agreement_sign') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                               
                            </div>
                        </div>

                        <h5>PAYMENT DETAILS</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Total Amount -->
                                <div class="form-group">
                                    <label>Total Amount</label>
                                    <input type="text" class="form-control number-only" name="total_amount" id="total-amount" placeholder="Total Amount" autofocus>

                                    <span class="total-amount-validate"></span> 
                                    @if ($errors->has('total_amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('total_amount') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                               
                            </div> 
                            <div class="col-md-4">
                                <!-- Student Strength -->
                                <div class="form-group">
                                    <label>Student Strength</label>
                                    <input type="text" class="form-control number-only" name="student_strength" id="student-strength" placeholder="Student Strength" autofocus>

                                    <span class="student-strength-validate"></span> 
                                    @if ($errors->has('student_strength'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('student_strength') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div> 
                            <div class="col-md-4">
                                <!-- GST -->
                                <div class="form-group">
                                    <label>GST Percentage (%)</label>
                                    <input type="text" class="form-control number-only" name="gst_percentage" id="gst-percentage" placeholder="GST Percentage" value="18" autofocus>

                                    <span class="gst-percentage-validate"></span> 
                                    @if ($errors->has('gst_percentage'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gst_percentage') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                               
                            </div>                             
                        </div>  

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Monthly Fees -->
                                <div class="form-group">
                                    <label>Monthly Fees (Per / Student )</label>
                                    <input type="text" class="form-control number-only" name="monthly_fees" id="monthly-fees" placeholder="Monthly Fees (Per / Student )" autofocus>

                                    <span class="monthly-fees-validate"></span> 
                                    @if ($errors->has('monthly_fees'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('monthly_fees') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                               
                            </div>                            
                            <div class="col-md-4">
                                <!-- Payment Start Month -->
                                <div class="form-group">
                                    <label>Payment Start Month</label> 
                                    <input type="text" class="form-control" name="payment_start_month" id="payment-start-month" placeholder="Payment Start Month" autofocus>

                                    <span class="payment-start-month-validate"></span> 
                                    @if ($errors->has('payment_start_month'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('payment_start_month') }}</strong>
                                        </span>
                                    @endif   
                                </div>                           
                            </div> 
                            <div class="col-md-4">
                                <!-- Payment End Month -->
                                <div class="form-group">
                                    <label>Payment End Month</label> 
                                    <input type="text" class="form-control" name="payment_end_month" id="payment-end-month" placeholder="Payment End Month" autofocus>

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
                                    <label>Per Sms Cost </label> 
                                    <input type="text" class="form-control number-only" name="per_sms_amount" id="per_-ms-amount" placeholder="Per Sms Cost" autofocus>

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
                                    <input type="text" class="form-control number-only" name="text_sms_count" id="text-sms-count" placeholder="Text Sms Count" autofocus>

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
                                    <input type="text" class="form-control number-only" name="voice_sms_count" id="voice-sms-count" placeholder="Voice Sms Count" autofocus>

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
                                </div>                           
                            </div>                                               
                        </div>                                               

                        <div class="form-group">
                            <button class="btn btn-success add-school-fees" style="float: right;" type="button"><i class="icon-plus"></i> Add</button>
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

            $("#agreement-date").datepicker({ 
                format: "yyyy-mm-dd",
                autoclose: true, 
                todayHighlight: true
            }).datepicker();

            $("#payment-start-month").datepicker({ 
                format: "yyyy-mm-dd",
                autoclose: true, 
                todayHighlight: true
            }).datepicker();

            $("#payment-end-month").datepicker({ 
                format: "yyyy-mm-dd",
                autoclose: true, 
                todayHighlight: true
            }).datepicker();            

            // vendor
            $(document).on("change","#vendor",function() {
                $('#school-state').prop('selectedIndex',0);
                $('#school-region').empty();              
                $('#school-region').append('<option value="">---Select Region---</option>');
                $('#school-zone').empty();              
                $('#school-zone').append('<option value="">---Select Zone---</option>');
                $('#school-district').empty();              
                $('#school-district').append('<option value="">---Select District---</option>');
                $('#school-taluk').empty();              
                $('#school-taluk').append('<option value="">---Select Taluk---</option>');
            });                                                  

            // search emp id
            $(document).on("click",".search-emp-id",function() {
                var empID = $('input[name=search_emp_id]').val();
                if(empID == ""){
                    $('.search-emp-id-validate').html('The employer id field is required.');
                    $('.search-emp-id-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.search-emp-id-validate').html('');
                    $('.search-emp-id-validate').removeClass('field-error');
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('getEmployerDataByID') }}",
                        data:{
                            _token : $('input[name="_token"]').val(),
                            empID: empID
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            $('.append-div').empty();
                            $("#assign-emp-id-field").val("");
                            if(data != " "){
                                // show details of assign employer data
                                $(".append-div").html('<div class="emp-details-box"><p><b>Name : </b>'+data.full_name+'</p><p><b>Email : </b>'+data.email+'</p><p><b>Contact No : </b>'+data.contact_no+'</p><button class="btn btn-warning assign-emp-id" data-assign-id="'+data.id+'" style="float: right;" type="button"><i class="icon-post"></i> Assign</button></div>'); 
                            }else{
                                $(".append-div").html('<div class="emp-details-box">Sorry !!! Employer not found in given id.</div>'); 
                            }                       
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                                                           
                }                
            });

           
            $(document).on("click",".assign-emp-id",function() {
                var assignEmpID = $(this).attr("data-assign-id");
                $("#assign-emp-id-field").val(assignEmpID);
            });

            // add new employer
            $(document).on("click",".add-school-fees",function() {
                var formError = false;

                var vendor = $('#vendor').val();
                if(vendor == ""){
                    $('.vendor-validate').html('The vendor field is required.');
                    $('.vendor-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.vendor-validate').html('');
                    $('.vendor-validate').removeClass('field-error');
                }

                var school = $('#school').val();
                if(school == ""){
                    $('.school-validate').html('The school field is required.');
                    $('.school-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-validate').html('');
                    $('.school-validate').removeClass('field-error');
                }                

                var agreementDate = $('input[name=agreement_date]').val();
                if(agreementDate == ""){
                    $('.agreement-date-validate').html('The agreement date field is required.');
                    $('.agreement-date-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.agreement-date-validate').html('');
                    $('.agreement-date-validate').removeClass('field-error');
                }

                var stampNo = $('input[name=stamp_no]').val();
                if(stampNo == ""){
                    $('.stamp-no-validate').html('The stamp no field is required.');
                    $('.stamp-no-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.stamp-no-validate').html('');
                    $('.stamp-no-validate').removeClass('field-error');
                }

                var agreementSign = $('#agreement-sign').val();
                if(agreementSign == ""){
                    $('.agreement-sign-validate').html('The agreement sign option field is required.');
                    $('.agreement-sign-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.agreement-sign-validate').html('');
                    $('.agreement-sign-validate').removeClass('field-error');
                } 

                var totalAmount = $('input[name=total_amount]').val();
                if(totalAmount == ""){
                    $('.total-amount-validate').html('The total amount field is required.');
                    $('.total-amount-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.total-amount-validate').html('');
                    $('.total-amount-validate').removeClass('field-error');
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

                var gstPercentage = $('input[name=gst_percentage]').val();
                if(gstPercentage == ""){
                    $('.gst-percentage-validate').html('The gst percentage field is required.');
                    $('.gst-percentage-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.gst-percentage-validate').html('');
                    $('.gst-percentage-validate').removeClass('field-error');
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

                var paymentStartMonth = $('#payment-start-month').val();
                if(paymentStartMonth == ""){
                    $('.payment-start-month-validate').html('The payment start month field is required.');
                    $('.payment-start-month-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.payment-start-month-validate').html('');
                    $('.payment-start-month-validate').removeClass('field-error');
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
                        url: "{{ route('storeSchoolFeeDetails') }}",
                        data:$('.add-school-fee-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');

                                $('.custom-success-box strong').html(data.msg);                             
                                $('.custom-success-box').css('display','block');
                                $('.add-school-fee-form')[0].reset();                      
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
