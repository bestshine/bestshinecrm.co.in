@extends('layouts.app')

<!-- styles -->
@section('styles')
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
                <h4 class="card-title">EDIT SCHOOL</h4>
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

                    <form method="post" class="update-school-form" action="{{ route('updateSchool') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <h5>SCHOOL INFORMATION</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- School Name -->
                                <div class="form-group">
                                    <label>School Name</Label>
                                    <input type="text" class="form-control" name="school_name" id="full-name" placeholder="School Name" value="{{ $edit->school_name }}" autocomplete="off">

                                    <span class="school-name-validate"></span> 
                                    @if ($errors->has('school_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_name') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                
                            </div>

                            <div class="col-md-4">
                                <!-- School ID -->
                                <div class="form-group">
                                    <label>School ID</Label>
                                    <input type="text" class="form-control" name="school_id" id="school-id" placeholder="School ID" value="{{ $edit->school_id }}" autocomplete="off">

                                    <span class="school-id-validate"></span> 
                                    @if ($errors->has('school_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_id') }}</strong>
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
                                    <select class="form-control" name="country" id="country">
                                        <option value=""> ---Select Country--- </option>
                                        <option value="India" @if($edit->country == "India") selected @endif>India</option>
                                    </select>                                    
                                    <span class="country-validate"></span> 
                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                                         
                            </div>                            
                            <div class="col-md-4">
                                <!-- School Category -->
                                <div class="form-group">
                                    <label>School Category</label>
                                    <select class="form-control" name="school_category" id="school-category">
                                        <option value=""> ---Select School Category--- </option>
                                        <option value="Demo" @if($edit->school_category == "Demo") selected @endif>Demo</option>
                                        <option value="Regular" @if($edit->school_category == "Regular") selected @endif>Regular</option>
                                    </select>                                    
                                    <span class="school-category-validate"></span> 
                                    @if ($errors->has('school_category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_category') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                                         
                            </div>
                            <div class="col-md-4">
                                <!-- Plan Type -->
                                <div class="form-group">
                                    <label>Plan Type</label>
                                    <select class="form-control" name="plan_type" id="plan-type">
                                        <option value=""> ---Select Plan Type--- </option>
                                        <option value="Micro" @if($edit->plan_type == "Micro") selected @endif>Micro</option>
                                        <option value="Basic" @if($edit->plan_type == "Basic") selected @endif>Basic</option>
                                        <option value="Standard" @if($edit->plan_type == "Standard") selected @endif>Standard</option>
                                        <option value="Premium" @if($edit->plan_type == "Premium") selected @endif>Premium</option>
                                    </select>                                    
                                    <span class="plan-type-validate"></span> 
                                    @if ($errors->has('plan_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('plan_type') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                                         
                            </div>                            
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success update-school" style="float: right;" type="button"><i class="icon-edit"></i> Update</button>
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

            // update employer
            $(document).on("click",".update-school",function() {
                var formError = false;

                var schoolName = $('input[name=school_name]').val();
                if(schoolName == ""){
                    $('.school-name-validate').html('The name field is required.');
                    $('.school-name-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-name-validate').html('');
                    $('.school-name-validate').removeClass('field-error');                    
                }

                var schoolID = $('input[name=school_id]').val();
                if(schoolID == ""){
                    $('.school-id-validate').html('The school ID field is required.');
                    $('.school-id-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-id-validate').html('');
                    $('.school-id-validate').removeClass('field-error');                    
                }                

                var email = $('input[name=email]').val();
                if(email == ""){
                    $('.email-validate').html('The email field is required.');
                    $('.email-validate').addClass('field-error');
                    formError = true;
                }else{
                    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

                    if (filter.test(email)) {
                        $('.email-validate').html('');
                        $('.email-validate').removeClass('field-error');
                    }
                    else {
                        $('.email-validate').html('The email is invalid.');
                        $('.email-validate').addClass('field-error');
                        formError = true;
                    }
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

                var country = $('#country').val();
                if(country == ""){
                    $('.country-validate').html('The country field is required.');
                    $('.country-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.country-validate').html('');
                    $('.country-validate').removeClass('field-error');
                }

                var schoolCategory = $('#school-category').val();
                if(schoolCategory == ""){
                    $('.school-category-validate').html('The school category field is required.');
                    $('.school-category-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-category-validate').html('');
                    $('.school-category-validate').removeClass('field-error');
                } 

                var schoolPlanType = $('#plan-type').val();
                if(schoolPlanType == ""){
                    $('.plan-type-validate').html('The plan type field is required.');
                    $('.plan-type-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.plan-type-validate').html('');
                    $('.plan-type-validate').removeClass('field-error');
                }                                                  

                if(formError == false){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('updateSchool') }}",
                        data:$('.update-school-form').serialize(),
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
