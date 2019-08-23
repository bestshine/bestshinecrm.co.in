@extends('layouts.app')

<!-- styles -->
@section('styles')
    
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">EDIT EMPLOYEE</h4>
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

                    <form method="post" class="update-employer-form" action="{{ route('updateEmployer') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{ $edit->id }}">

                        <h5>PERSONAL INFORMATION</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Full Name -->
                                <div class="form-group">
                                    <label>Full Name</Label>
                                    <input type="text" class="form-control" name="full_name" id="full-name" placeholder="Full Name" value="{{ $edit->full_name }}" autocomplete="off">

                                    <span class="full-name-validate"></span> 
                                    @if ($errors->has('full_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                
                            </div>

                            <div class="col-md-4">
                                <!-- Email -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{ $edit->email }}" placeholder="Email" autofocus>

                                    <span class="email-validate"></span> 
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- Gender -->
                                <div class="form-group">
                                    <label>Gender</Label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value=""> ---Select Gender--- </option>
                                        <option value="Male" @if($edit->gender == "Male") selected @endif>Male</option>
                                        <option value="Female" @if($edit->gender == "Female") selected @endif>Female</option>
                                    </select>                                    
                                    <span class="gender-validate"></span> 
                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                
                            </div>                                                        
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Contact No -->
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="number" class="form-control" name="contact_no" id="contact-no" value="{{ $edit->contact_no }}" placeholder="Contact No" autofocus>

                                    <span class="contact-no-validate"></span> 
                                    @if ($errors->has('contact_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_no') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div> 

                            <div class="col-md-4">
                                <!-- Contact No -->
                                <div class="form-group">
                                    <label>Contact No (Optional)</label>
                                    <input type="number" class="form-control" name="contact_no_optional" id="contact-no-optional" value="{{ $edit->contact_no_optional }}" placeholder="Contact No (Optional)" autofocus>
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- Address -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea  name="address" id="address" rows="4" cols="50" style="resize: none;">{{ $edit->address }}</textarea>

                                    <span class="address-validate"></span> 
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>                                                                                  
                        </div> 

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Country -->
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{ $edit->country }}" placeholder="Country" autofocus>

                                    <span class="country-validate"></span> 
                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div> 

                            <div class="col-md-4">
                                <!-- State -->
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state" id="state" value="{{ $edit->state }}" placeholder="State" autofocus>

                                    <span class="state-validate"></span> 
                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- City -->
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{ $edit->city }}" placeholder="City" autofocus>

                                    <span class="city-validate"></span> 
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>                                                                                  
                        </div>                         

                        <h5>BANK DETAILS</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Account Holder Name -->
                                <div class="form-group">
                                    <label>Account Holder Name</Label>
                                    <input type="text" class="form-control" name="account_holder_name" id="account-holder-name" placeholder="Account Holder Name" value="{{ $edit->account_holder_name }}" autocomplete="off">

                                    <span class="account-holder-name-validate"></span> 
                                    @if ($errors->has('account_holder_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('account_holder_name') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                
                            </div>

                            <div class="col-md-4">
                                <!-- Account No -->
                                <div class="form-group">
                                    <label>Account No</label>
                                    <input type="text" class="form-control" name="account_no" id="account-no" value="{{ $edit->account_no }}" placeholder="Account No" autofocus>

                                    <span class="account-no-validate"></span> 
                                    @if ($errors->has('account_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('account_no') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- Confirm Account No -->
                                <div class="form-group">
                                    <label>Confirm Account No</label>
                                    <input type="text" class="form-control" name="confirm_account_no" id="confirm-account-no" value="{{ old('confirm_account_no') }}" placeholder="Confirm Account No" autofocus>

                                    <span class="confirm-account-no-validate"></span> 
                                    <span class="compare-account-no-validate"></span> 
                                    @if ($errors->has('confirm_account_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('confirm_account_no') }}</strong>
                                        </span>
                                    @endif
                                </div>                                
                            </div>                                                        
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- IFSC CODE -->
                                <div class="form-group">
                                    <label>IFSC CODE</Label>
                                    <input type="text" class="form-control" name="ifsc_code" id="ifsc-code" placeholder="IFSC CODE" minlength="11" maxlength="11" value="{{ $edit->ifsc_code }}" autocomplete="off">

                                    <span class="ifsc-code-validate"></span> 
                                    @if ($errors->has('ifsc_code'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ifsc_code') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                
                            </div>

                            <div class="col-md-4">
                                <!-- Bank Name -->
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="text" class="form-control" name="bank_name" id="bank-name" value="{{ $edit->bank_name }}" placeholder="Bank Name" autofocus>

                                    <span class="bank-name-validate"></span> 
                                    @if ($errors->has('bank_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bank_name') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- Branch Name -->
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control" name="branch_name" id="bank-name" value="{{ $edit->branch_name }}" placeholder="Branch Name" autofocus>

                                    <span class="branch-name-validate"></span> 
                                    @if ($errors->has('branch_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('branch_name') }}</strong>
                                        </span>
                                    @endif
                                </div>                                
                            </div>                                                        
                        </div>                                                                                               
                        <div class="form-group">
                            <button class="btn btn-success update-employer" style="float: right;" type="button"><i class="icon-edit"></i> Update</button>
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
    <!-- role.js -->
    <!-- <script src="{{ asset('js/role/role.js') }}"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {            

            // update new employer
            $(document).on("click",".update-employer",function() {
                var formError = false;

                var fullName = $('input[name=full_name]').val();
                if(fullName == ""){
                    $('.full-name-validate').html('The name field is required.');
                    $('.full-name-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.full-name-validate').html('');
                    $('.full-name-validate').removeClass('field-error');                    
                }

                var email = $('input[name=email]').val();
                if(email == ""){
                    $('.email-validate').html('The email field is required.');
                    $('.email-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.email-validate').html('');
                    $('.email-validate').removeClass('field-error');
                }

                var gender = $('#gender').val();
                if(gender == ""){
                    $('.gender-validate').html('The gender field is required.');
                    $('.gender-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.gender-validate').html('');
                    $('.gender-validate').removeClass('field-error');
                } 

                var contactNo = $('input[name=contact_no]').val();
                if(contactNo == ""){
                    $('.contact-no-validate').html('The contact number field is required.');
                    $('.contact-no-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.contact-no-validate').html('');
                    $('.contact-no-validate').removeClass('field-error');
                }

                var address = $('#address').val();
                if(address == ""){
                    $('.address-validate').html('The address field is required.');
                    $('.address-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.address-validate').html('');
                    $('.address-validate').removeClass('field-error');
                } 

                var country = $('input[name=country]').val();
                if(country == ""){
                    $('.country-validate').html('The country field is required.');
                    $('.country-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.country-validate').html('');
                    $('.country-validate').removeClass('field-error');
                }  

                var state = $('input[name=state]').val();
                if(state == ""){
                    $('.state-validate').html('The state field is required.');
                    $('.state-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.state-validate').html('');
                    $('.state-validate').removeClass('field-error');
                }  

                var city = $('input[name=city]').val();
                if(city == ""){
                    $('.city-validate').html('The city field is required.');
                    $('.city-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.city-validate').html('');
                    $('.city-validate').removeClass('field-error');
                }         

                var accountHolderName = $('input[name=account_holder_name]').val();
                if(accountHolderName == ""){
                    $('.account-holder-name-validate').html('The account holder name field is required.');
                    $('.account-holder-name-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.account-holder-name-validate').html('');
                    $('.account-holder-name-validate').removeClass('field-error');
                }                                                                                                    
                var accountNumber = $('input[name=account_no]').val();
                if(accountNumber == ""){
                    $('.account-no-validate').html('The account number field is required.');
                    $('.account-no-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.account-no-validate').html('');
                    $('.account-no-validate').removeClass('field-error');
                }

                var confirmAccountNumber = $('input[name=confirm_account_no]').val();
                if(confirmAccountNumber == ""){
                    $('.confirm-account-no-validate').html('The confirm account number field is required.');
                    $('.confirm-account-no-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.confirm-account-no-validate').html('');
                    $('.confirm-account-no-validate').removeClass('field-error');
                }

                if(accountNumber != "" && confirmAccountNumber != ""){
                    if(accountNumber != confirmAccountNumber){
                        $('.compare-account-no-validate').html('The account number mismatched.');
                        $('.compare-account-no-validate').addClass('field-error');
                    }else{
                        $('.compare-account-no-validate').html('');
                        $('.compare-account-no-validate').removeClass('field-error');                        
                    }
                }

                var ifscCode = $('input[name=ifsc_code]').val();
                if(ifscCode == ""){
                    $('.ifsc-code-validate').html('The ifsc code field is required.');
                    $('.ifsc-code-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.ifsc-code-validate').html('');
                    $('.ifsc-code-validate').removeClass('field-error');
                }

                var bankName = $('input[name=bank_name]').val();
                if(bankName == ""){
                    $('.bank-name-validate').html('The bank name field is required.');
                    $('.bank-name-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.bank-name-validate').html('');
                    $('.bank-name-validate').removeClass('field-error');
                }

                var branchName = $('input[name=branch_name]').val();
                if(branchName == ""){
                    $('.branch-name-validate').html('The branch name field is required.');
                    $('.branch-name-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.branch-name-validate').html('');
                    $('.branch-name-validate').removeClass('field-error');
                }                                                                                         

                if(formError == false){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('updateEmployer') }}",
                        data:$('.update-employer-form').serialize(),
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
