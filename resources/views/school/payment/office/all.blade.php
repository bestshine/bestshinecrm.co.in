@extends('layouts.app')

<!-- styles -->
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
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
                <h4 class="card-title">SCHOOL PAYMENT</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <!-- Screen Shot -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="school_id" id="school-id" placeholder="SCHOOL ID" autofocus>                                    
                                <span class="school-id-validate"></span> 
                                @if ($errors->has('school_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                @endif                             
                            </div>     
                            <!-- show role added error -->
                            <div class="alert alert-danger alert-dismissable fade in custom-error-box1" style="display: none;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong></strong>
                            </div>                                                       
                        </div>                                
                        <div class="col-md-1">
                            <button class="btn btn-info search-school" style="float: right;" type="button"><i class="icon-search"></i> Search</button>                                
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">                            
                            <div class="articles"></div>
                        </div>
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>    
    <script type="text/javascript">
        $(document).ready(function() {            
            // search school id details
            $(document).on("click",".search-school",function() {
                var formError = false;
                var schoolID = $('#school-id').val();
                if(schoolID == ""){
                    $('.school-id-validate').html('The school id field is required.');
                    $('.school-id-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-id-validate').html('');
                    $('.school-id-validate').removeClass('field-error');                    
                }
                if(formError == false){
                    $.ajax({   
                        url: '{{ route("searchSchoolPayment") }}', 
                        dataType: 'json',
                        data:{
                            _token: $('input[name="_token"]').val(),
                            school_id: schoolID
                        },   
                        type: 'POST',
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function (data) {  
                            console.log(data);
                            $('.loading').css("display","none");
                            $('.articles').html('');
                            if(data.html != "not-found"){
                                $('.custom-error-box1 strong').html('');
                                $('.custom-error-box1').css('display','none');
                                $('.articles').html(data.html);
                                // restrict only numbers 
                                $('.number-only').forceNumeric();
                                $("#cheque-date").datepicker({ 
                                    format: "yyyy-mm-dd",
                                    autoclose: true, 
                                    todayHighlight: true
                                }).datepicker();                                
                            }else{
                                $('.custom-error-box1 strong').html("School Not Found");
                                $('.custom-error-box1').css('display','block');
                            }
                        },
                        error: function (data) { 
                            console.log('server Error');                    
                        }
                    });                     
                }
            }); 

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

            // payment type onchange
            $(document).on("change","#payment-mode",function() {
                var mode = $(this).val();
                if(mode == "cash"){
                    $('input[name=cheque_no]').val('');
                    $('input[name=cheque_date]').val('');
                    $('input[name=cheque_bank_name]').val('');                    
                    $(".cheque-info").css("display","none");
                }else if(mode == "cheque"){
                    $(".cheque-info").css("display","block");
                }else{
                    $('input[name=cheque_no]').val('');
                    $('input[name=cheque_date]').val('');
                    $('input[name=cheque_bank_name]').val('');                      
                    $(".cheque-info").css("display","none");
                }
            });                      

            // pay now
            // $(document).on("click",".pay-now",function() {
            //     var formError = false;

            //     var blcInstallAmount = $('input[name=blc_install_amount]').val();
            //     if(blcInstallAmount == ""){
            //         formError = true;
            //     }

            //     var blcMonthlyFeeAmount = $('input[name=blc_monthly_fee_amount]').val();
            //     if(blcMonthlyFeeAmount == ""){
            //         formError = true;
            //     }

            //     var otherChargesAmount = $('input[name=other_chargers_amount]').val();
            //     if(otherChargesAmount == ""){
            //         formError = true;
            //     }     

            //     var paymentMode = $('#payment-mode').val();
            //     if(paymentMode == ""){                  
            //         formError = true;
            //     }else{
            //         if(paymentMode == "cheque"){ 
            //             var chequeNo = $('input[name=cheque_no]').val();
            //             var chequeDate = $('input[name=cheque_date]').val();
            //             var chequeBankName = $('input[name=cheque_bank_name]').val();
            //             if(chequeNo == ""){
            //                 formError = true;
            //             }
            //             if(chequeDate == ""){
            //                 formError = true;
            //             }
            //             if(chequeBankName == ""){
            //                 formError = true;
            //             }
            //         }
            //     }                         

            //     // Actual Amounts
            //     var actualInstallAmount = parseFloat($('.install-amt').html());
            //     var actualMonthlyAmount = parseFloat($('.monthly-amt').html());
            //     var actualOtherAmount = parseFloat($('.oth-chrg-amt').html());
            //     var actualTotalAmount = parseFloat($('.total-amt').html());

            //     if(formError == true){
            //         $('.show-validate').html('Please enter all form data');
            //         $('.show-validate').addClass('field-error');                    
            //     }else{                                   
            //         if(parseFloat(blcInstallAmount) > 0 && parseFloat(blcMonthlyFeeAmount) >= 0 && parseFloat(otherChargesAmount) >= 0){
            //             var otherError = false;
            //             if(!(parseFloat(actualInstallAmount) >= parseFloat(blcInstallAmount))){
            //                 otherError = true;
            //             }

            //             if(!(parseFloat(actualMonthlyAmount) == parseFloat(blcMonthlyFeeAmount))){
            //                 otherError = true;
            //             }

            //             if(!(parseFloat(actualOtherAmount) == parseFloat(otherChargesAmount))){
            //                 otherError = true;
            //             }

            //             // if(!(parseFloat(actualGSTAmount) >= parseFloat(gstAmount))){
            //             //     otherError = true;
            //             // }
            //             if(otherError == false){
            //                 $('.show-validate').html('');
            //                 $('.show-validate').removeClass('field-error');                             
            //                 var totalEnteredAmount = 0;
            //                 totalEnteredAmount = parseFloat(blcInstallAmount) + parseFloat(blcMonthlyFeeAmount) + parseFloat(otherChargesAmount);      

            //                 // calculate gst amount
            //                 var gstPercentage = $('.actual-amounts').attr("data-gst-percentage");  
            //                 var gstAmount = parseFloat(totalEnteredAmount*gstPercentage)/100;
            //                 $('.gst-amt').html(gstAmount);                              
            //                 $('input[name=gst_amount]').val(gstAmount); 
            //                 var finalEnteredAmount = parseFloat(totalEnteredAmount+gstAmount);
            //                 var concessionAmount = $('input[name=concession_amount]').val();
            //                 var smartFinalAmount = parseFloat(finalEnteredAmount - concessionAmount);
            //                 $('#total-entered-amount').val(parseFloat(smartFinalAmount));
            //                 $('.school-payment-form').submit();
            //             }else{
            //                 $('.show-validate').html('Please enter correct data');
            //                 $('.show-validate').addClass('field-error');                             
            //             }                                                                                           
            //         }else{
            //             $('.show-validate').html('Please enter correct data');
            //             $('.show-validate').addClass('field-error');                         
            //         }                                        
            //     }
            // });     

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

                var paymentMode = $('#payment-mode').val();
                if(paymentMode == ""){                  
                    formError = true;
                }else{
                    if(paymentMode == "cheque"){ 
                        var chequeNo = $('input[name=cheque_no]').val();
                        var chequeDate = $('input[name=cheque_date]').val();
                        var chequeBankName = $('input[name=cheque_bank_name]').val();
                        if(chequeNo == ""){
                            formError = true;
                        }
                        if(chequeDate == ""){
                            formError = true;
                        }
                        if(chequeBankName == ""){
                            formError = true;
                        }
                    }
                }                         

                // Actual Amounts
                var actualInstallAmount = parseFloat($('.install-amt').html());
                var actualMonthlyAmount = parseFloat($('.monthly-amt').html());
                var actualOtherAmount = parseFloat($('.oth-chrg-amt').html());
                var actualTotalAmount = parseFloat($('.total-amt').html());

                if(formError == true){
                    $('.show-validate').html('Please enter all form data');
                    $('.show-validate').addClass('field-error');                    
                }else{                                   
                    // if(parseFloat(blcInstallAmount) > 0 && parseFloat(blcMonthlyFeeAmount) >= 0 && parseFloat(otherChargesAmount) >= 0){
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
                            totalEnteredAmount = parseFloat(blcInstallAmount) + parseFloat(blcMonthlyFeeAmount) + parseFloat(otherChargesAmount);      

                            // calculate gst amount
                            var gstPercentage = $('.actual-amounts').attr("data-gst-percentage");  
                            var gstAmount = parseFloat(totalEnteredAmount*gstPercentage)/100;
                            $('.gst-amt').html(gstAmount);                              
                            $('input[name=gst_amount]').val(gstAmount); 
                            var finalEnteredAmount = parseFloat(totalEnteredAmount+gstAmount);
                            var concessionAmount = $('input[name=concession_amount]').val();
                            var smartFinalAmount = parseFloat(finalEnteredAmount - concessionAmount);
                            $('#total-entered-amount').val(parseFloat(smartFinalAmount));
                            $('.school-payment-form').submit();
                            // alert("Submit");
                        }else{
                            $('.show-validate').html('Please enter correct data');
                            $('.show-validate').addClass('field-error');                             
                        }                                                                                           
                    }else{
                        $('.show-validate').html('Please enter correct data');
                        $('.show-validate').addClass('field-error');                         
                    }                                        
                }
            });                                             
        });       
    </script>
@stop