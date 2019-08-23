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
                <h4 class="card-title">ADD NEW SCHOOL</h4>
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

                    <form method="post" class="add-new-school-form" action="{{ route('storeNewSchool') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}

                        <h5>SCHOOL INFORMATION</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- School Name -->
                                <div class="form-group">
                                    <label>School Name</Label>
                                    <input type="text" class="form-control" name="school_name" id="full-name" placeholder="School Name" value="{{ old('school_name') }}" autocomplete="off">

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
                                    <input type="text" class="form-control" name="school_id" id="school-id" placeholder="School ID" value="{{ old('school_id') }}" autocomplete="off">

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
                                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" autofocus>

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
                                    <input type="text" class="form-control number-only" name="contact_no" id="contact-no" value="{{ old('contact_no') }}" placeholder="Contact No" maxlength="10" autofocus>

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
                                    <input type="text" class="form-control number-only" name="contact_no_optional" id="contact-no-optional" value="{{ old('contact_no') }}" placeholder="Contact No (Optional)" maxlength="10" autofocus>
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- Address -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea  name="address" id="address" rows="4" cols="50" style="resize: none;"></textarea>

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
                                        <option value="India">India</option>
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
                                        <option value="Demo">Demo</option>
                                        <option value="Regular">Regular</option>
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
                                        <option value="Micro">Micro</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Premium">Premium</option>
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
                                <!-- State -->
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control" name="school_state" id="school-state">
                                        <option value=""> ---Select State--- </option>
                                            @foreach($states as $state)
                                                @if (Request::old('state') == $state->id)
                                                    <option value="{{$state->id}}" selected>{{$state->state_name}}</option>
                                                @else
                                                    <option value="{{$state->id}}">{{$state->state_name}}</option>
                                                @endif
                                            @endforeach
                                    </select>

                                    <span class="school-state-validate"></span> 
                                    @if ($errors->has('school_state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_state') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>                            
                            <div class="col-md-4">
                                <!-- Region -->
                                <div class="form-group">
                                    <label>Region</label>
                                    <select class="form-control" name="school_region" id="school-region">
                                        <option value=""> ---Select Region--- </option>
                                    </select>

                                    <span class="school-region-validate"></span> 
                                    @if ($errors->has('school_region'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_region') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>                    
                        </div>    

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Zone -->
                                <div class="form-group">
                                    <label>Zone</label>
                                    <select class="form-control" name="school_zone" id="school-zone">
                                        <option value=""> ---Select Zone--- </option>
                                    </select>

                                    <span class="school-zone-validate"></span> 
                                    @if ($errors->has('school_zone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_zone') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>                            
                            <div class="col-md-4">
                                <!-- District -->
                                <div class="form-group">
                                    <label>District</label>
                                    <select class="form-control" name="school_district" id="school-district">
                                        <option value=""> ---Select District--- </option>
                                    </select>

                                    <span class="school-district-validate"></span> 
                                    @if ($errors->has('school_district'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_district') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>
                            <div class="col-md-4">
                                <!-- Taluk -->
                                <div class="form-group">
                                    <label>Taluk</label>
                                    <select class="form-control" name="school_taluk" id="school-taluk">
                                        <option value=""> ---Select Taluk--- </option>
                                    </select>

                                    <span class="school-taluk-validate"></span> 
                                    @if ($errors->has('school_taluk'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_taluk') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>                                                                                
                        </div> 

                        <h5>FRANCHISE ASSIGNMENT</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Search Box -->
                                <div class="form-group">
                                    <label>Employer ID</label>
                                    <input type="text" class="form-control" name="search_emp_id" id="contact-no-optional" placeholder="Employer ID Here" autofocus>
                                    <span class="search-emp-id-validate"></span> 
                                </div>                               
                            </div> 
                            <div class="col-md-2">
                                <!-- Search Button -->
                                <button class="btn btn-primary search-emp-id" style="margin-top: 27px;" type="button"><i class="icon-search"></i> Search</button>
                            </div> 
                            <div class="col-md-6">
                                <input type="hidden" name="assign_emp_id" id="assign-emp-id-field">
                                <span class="assign-emp-id-field-validate"></span>
                                <div class="append-div"></div>
                            </div>                                                        
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success add-school" style="float: right;" type="button"><i class="icon-plus"></i> Add</button>
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
    <!-- forceNumeric.js -->
    <script src="{{ asset('js/forceNumeric.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // restrict only numbers 
            $('.number-only').forceNumeric();

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

            // state
            $(document).on("change","#school-state",function() {
                var vendor_id = $("#vendor").val();
                if(vendor_id != ""){
                    var state_id = $(this).val();
                    $('#school-region').empty();
                    $('#school-region').append('<option value="">---Select Region---</option>');  
                    $('#school-zone').empty();              
                    $('#school-zone').append('<option value="">---Select Zone---</option>');    
                    $('#school-district').empty();              
                    $('#school-district').append('<option value="">---Select District---</option>'); 
                    $('#school-taluk').empty();              
                    $('#school-taluk').append('<option value="">---Select Taluk---</option>');                
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('getRegionData') }}",
                        data:{
                            _token : $('input[name="_token"]').val(),
                            vendor_id: vendor_id,
                            state_id: state_id
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            $('#school-region').empty();
                            $('#school-region').append('<option value="">---Select Region---</option>');
                            $(data).each(function(index,value){
                                $('#school-region').append('<option value="' + value.id + '">' + value.region_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });
                }else{
                    alert("Please Select Vendor");
                    $('#school-state').prop('selectedIndex',0);
                }
            });

            // region
            $(document).on("change","#school-region",function() {
                var vendor_id = $("#vendor").val();
                var state_id = $('#school-state').val();
                var region_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else{
                    $('#school-zone').empty();              
                    $('#school-zone').append('<option value="">---Select Zone---</option>');    
                    $('#school-district').empty();              
                    $('#school-district').append('<option value="">---Select District---</option>'); 
                    $('#school-taluk').empty();              
                    $('#school-taluk').append('<option value="">---Select Taluk---</option>');
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('getZoneData') }}",
                        data:{
                            _token : $('input[name="_token"]').val(),
                            vendor_id: vendor_id,
                            state_id: state_id,
                            region_id: region_id
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            $('#school-zone').empty();
                            $('#school-zone').append('<option value="">---Select Zone---</option>');
                            $(data).each(function(index,value){
                                $('#school-zone').append('<option value="' + value.id + '">' + value.zone_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }
            });            

            // zone
            $(document).on("change","#school-zone",function() {
                var vendor_id = $('#vendor').val();
                var state_id = $('#school-state').val();
                var region_id = $('#school-region').val();
                var zone_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else{
                    $('#school-district').empty();              
                    $('#school-district').append('<option value="">---Select District---</option>'); 
                    $('#school-taluk').empty();              
                    $('#school-taluk').append('<option value="">---Select Taluk---</option>');
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('getDistrictData') }}",
                        data:{
                            _token : $('input[name="_token"]').val(),
                            vendor_id: vendor_id,
                            state_id: state_id,
                            region_id: region_id,
                            zone_id: zone_id
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            $('#school-district').empty();
                            $('#school-district').append('<option value="">---Select District---</option>');
                            $(data).each(function(index,value){
                                $('#school-district').append('<option value="' + value.id + '">' + value.district_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }
            });             

            // district
            $(document).on("change","#school-district",function() {
                var vendor_id = $('#vendor').val();
                var state_id = $('#school-state').val();
                var region_id = $('#school-region').val();
                var zone_id = $('#school-zone').val();
                var district_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else if(zone_id == ""){
                    alert('please select zone');
                }else{
                    $('#school-taluk').empty();              
                    $('#school-taluk').append('<option value="">---Select Taluk---</option>');
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('getTalukData') }}",
                        data:{
                            _token : $('input[name="_token"]').val(),
                            vendor_id: vendor_id,
                            state_id: state_id,
                            region_id: region_id,
                            zone_id: zone_id,
                            district_id: district_id
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            $('#school-taluk').empty();
                            $('#school-taluk').append('<option value="">---Select Taluk---</option>');
                            $(data).each(function(index,value){
                                $('#school-taluk').append('<option value="' + value.id + '">' + value.taluk_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });
                }
            });              

            // taluk
            $(document).on("change","#school-taluk",function() {
                var state_id = $('#school-state').val();
                var region_id = $('#school-region').val();
                var zone_id = $('#school-zone').val();
                var district_id = $("#school-district").val();
                var taluk_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else if(zone_id == ""){
                    alert('please select zone');
                }else if(district_id == ""){
                    alert('please select district');
                }else{

                }
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
            $(document).on("click",".add-school",function() {
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

                var vendor = $('#vendor').val();
                if(vendor == ""){
                    $('.vendor-validate').html('The vendor field is required.');
                    $('.vendor-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.vendor-validate').html('');
                    $('.vendor-validate').removeClass('field-error');
                }

                var schoolState = $('#school-state').val();
                if(schoolState == ""){
                    $('.school-state-validate').html('The school state field is required.');
                    $('.school-state-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-state-validate').html('');
                    $('.school-state-validate').removeClass('field-error');
                }
                 
                var schoolRegion = $('#school-region').val();
                if(schoolRegion == ""){
                    $('.school-region-validate').html('The school region field is required.');
                    $('.school-region-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-region-validate').html('');
                    $('.school-region-validate').removeClass('field-error');
                }

                var schoolZone = $('#school-zone').val();
                if(schoolZone == ""){
                    $('.school-zone-validate').html('The school zone field is required.');
                    $('.school-zone-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-zone-validate').html('');
                    $('.school-zone-validate').removeClass('field-error');
                }

                var schoolDistrict = $('#school-district').val();
                if(schoolDistrict == ""){
                    $('.school-district-validate').html('The school district field is required.');
                    $('.school-district-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-district-validate').html('');
                    $('.school-district-validate').removeClass('field-error');
                } 

                var schoolTaluk = $('#school-taluk').val();
                if(schoolTaluk == ""){
                    $('.school-taluk-validate').html('The school taluk field is required.');
                    $('.school-taluk-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-taluk-validate').html('');
                    $('.school-taluk-validate').removeClass('field-error');
                }                     

                var assignEmp = $('#assign-emp-id-field').val();
                if(assignEmp == ""){
                    $('.assign-emp-id-field-validate').html('The Employer assignment is required.');
                    $('.assign-emp-id-field-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.assign-emp-id-field-validate').html('');
                    $('.assign-emp-id-field-validate').removeClass('field-error');
                }  

                if(formError == false){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewSchool') }}",
                        data:$('.add-new-school-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');

                                $('.custom-success-box strong').html(data.msg);                             
                                $('.custom-success-box').css('display','block');
                                $('.add-new-school-form')[0].reset();                      
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
