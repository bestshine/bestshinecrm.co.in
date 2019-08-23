@extends('layouts.app')

<!-- styles -->
@section('styles')
    
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ADD NEW EMPLOYEE</h4>
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

                    <form method="post" class="add-new-employer-form" action="{{ route('storeNewEmployer') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}

                        <h5>PERSONAL INFORMATION</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Full Name -->
                                <div class="form-group">
                                    <label>Full Name</Label>
                                    <input type="text" class="form-control" name="full_name" id="full-name" placeholder="Full Name" value="{{ old('full_name') }}" autocomplete="off">

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
                                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" autofocus>

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
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
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
                                    <input type="text" class="form-control" name="country" id="country" value="{{ old('country') }}" placeholder="Country" autofocus>

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
                                    <input type="text" class="form-control" name="state" id="state" value="{{ old('state') }}" placeholder="State" autofocus>

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
                                    <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}" placeholder="City" autofocus>

                                    <span class="city-validate"></span> 
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>                                                                                  
                        </div>

                        <h5>FRANCHISE LEVEL</h5>
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
                                <!-- Franchise Level -->
                                <div class="form-group franchise-level-div" style="display: none;">
                                    <label>Franchise Level</label>
                                    <select class="form-control" name="franchise_level" id="franchise-level">
                                        <option value=""> ---Select Franchise Level--- </option>
                                        <option value="state">State</option>
                                        <option value="region">Region</option>
                                        <option value="zone">Zone</option>
                                        <option value="district">District</option>
                                        <option value="taluk">Taluk</option>
                                    </select>                                    
                                    <span class="franchise-level-validate"></span> 
                                    @if ($errors->has('franchise_level'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('franchise_level') }}</strong>
                                        </span>
                                    @endif
                                </div>                            
                            </div>

                            <div class="col-md-4">
                                <!-- State -->
                                <div class="form-group state-div" style="display: none;">
                                    <label>State</label>
                                    <select class="form-control" name="franchise_level_state" id="franchise-level-state">
                                        <option value=""> ---Select State--- </option>
                                            @foreach($states as $state)
                                                @if (Request::old('state') == $state->id)
                                                    <option value="{{$state->id}}" selected>{{$state->state_name}}</option>
                                                @else
                                                    <option value="{{$state->id}}">{{$state->state_name}}</option>
                                                @endif
                                            @endforeach
                                    </select>

                                    <span class="franchise-level-state-validate"></span> 
                                    @if ($errors->has('franchise_level_state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('franchise_level_state') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>                                                        
                        </div> 

                        <div class="row">
                            <div class="col-md-3">
                                <!-- Region -->
                                <div class="form-group region-div" style="display: none;">
                                    <label>Region</label>
                                    <select class="form-control" name="franchise_level_region" id="franchise-level-region">
                                        <option value=""> ---Select Region--- </option>
                                    </select>

                                    <span class="franchise-level-region-validate"></span> 
                                    @if ($errors->has('franchise_level_region'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('franchise_level_region') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>
                            <div class="col-md-3">
                                <!-- Zone -->
                                <div class="form-group zone-div" style="display: none;">
                                    <label>Zone</label>
                                    <select class="form-control" name="franchise_level_zone" id="franchise-level-zone">
                                        <option value=""> ---Select Zone--- </option>
                                    </select>

                                    <span class="franchise-level-zone-validate"></span> 
                                    @if ($errors->has('franchise_level_zone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('franchise_level_zone') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>
                            <div class="col-md-3">
                                <!-- District -->
                                <div class="form-group district-div" style="display: none;">
                                    <label>District</label>
                                    <select class="form-control" name="franchise_level_district" id="franchise-level-district">
                                        <option value=""> ---Select District--- </option>
                                    </select>

                                    <span class="franchise-level-district-validate"></span> 
                                    @if ($errors->has('franchise_level_district'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('franchise_level_district') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                            </div>
                            <div class="col-md-3">
                                <!-- Taluk -->
                                <div class="form-group taluk-div" style="display: none;">
                                    <label>Taluk</label>
                                    <select class="form-control" name="franchise_level_taluk" id="franchise-level-taluk">
                                        <option value=""> ---Select Taluk--- </option>
                                    </select>

                                    <span class="franchise-level-taluk-validate"></span> 
                                    @if ($errors->has('franchise_level_taluk'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('franchise_level_taluk') }}</strong>
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
                                    <input type="text" class="form-control" name="account_holder_name" id="account-holder-name" placeholder="Account Holder Name" value="{{ old('account_holder_name') }}" autocomplete="off">

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
                                    <input type="text" class="form-control number-only" name="account_no" id="account-no" value="{{ old('account_no') }}" placeholder="Account No" autofocus>

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
                                    <input type="text" class="form-control number-only" name="confirm_account_no" id="confirm-account-no" value="{{ old('confirm_account_no') }}" placeholder="Confirm Account No" autofocus>

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
                                    <input type="text" class="form-control" name="ifsc_code" id="ifsc-code" placeholder="IFSC CODE" minlength="11" maxlength="11" value="{{ old('ifsc_code') }}" autocomplete="off">

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
                                    <input type="text" class="form-control" name="bank_name" id="bank-name" value="{{ old('bank_name') }}" placeholder="Bank Name" autofocus>

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
                                    <input type="text" class="form-control" name="branch_name" id="bank-name" value="{{ old('branch_name') }}" placeholder="Branch Name" autofocus>

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
                            <button class="btn btn-success add-employer" style="float: right;" type="button"><i class="icon-plus"></i> Add</button>
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
                var value = $(this).val();
                if(value != ""){
                    $(".franchise-level-div").css("display","block");
                }else{
                    alert("Please Select Vendor");
                    $('#franchise-level').prop('selectedIndex',0);
                    $(".franchise-level-div").css("display","none");
                    $('#franchise-level-state').prop('selectedIndex',0);
                    $(".state-div").css("display","none");
                    $('#franchise-level-region').empty();              
                    $('#franchise-level-region').append('<option value="">---Select Region---</option>');
                    $(".region-div").css("display","none");
                    $('#franchise-level-zone').empty();              
                    $('#franchise-level-zone').append('<option value="">---Select Zone---</option>');
                    $(".zone-div").css("display","none");
                    $('#franchise-level-district').empty();              
                    $('#franchise-level-district').append('<option value="">---Select District---</option>');
                    $(".district-div").css("display","none");
                    $('#franchise-level-taluk').empty();              
                    $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');
                    $(".taluk-div").css("display","none");                   
                }
            });

            // franchise_level
            $(document).on("change","#franchise-level",function() {
                var level = $(this).val();
                if(level != ""){
                    if(level == "state"){
                        $(".state-div").css("display","block");
                        $(".region-div").css("display","none");
                        $(".zone-div").css("display","none");
                        $(".district-div").css("display","none");
                        $(".taluk-div").css("display","none");
                    }
                    if(level == "region"){
                        $(".state-div").css("display","block");
                        $(".region-div").css("display","block");
                        $(".zone-div").css("display","none");
                        $(".district-div").css("display","none");
                        $(".taluk-div").css("display","none");                        
                    }
                    if(level == "zone"){
                        $(".state-div").css("display","block");
                        $(".region-div").css("display","block");                        
                        $(".zone-div").css("display","block");
                        $(".district-div").css("display","none");
                        $(".taluk-div").css("display","none");                         
                    }
                    if(level == "district"){
                        $(".state-div").css("display","block");
                        $(".region-div").css("display","block");                        
                        $(".zone-div").css("display","block");
                        $(".district-div").css("display","block");
                        $(".taluk-div").css("display","none");    
                    }
                    if(level == "taluk"){
                        $(".state-div").css("display","block");
                        $(".region-div").css("display","block");                        
                        $(".zone-div").css("display","block");
                        $(".district-div").css("display","block");
                        $(".taluk-div").css("display","block");
                    }                                                            
                }else{
                    alert("Please Select Level");
                    $('#franchise-level-state').prop('selectedIndex',0);
                    $(".state-div").css("display","none");
                    $('#franchise-level-region').empty();              
                    $('#franchise-level-region').append('<option value="">---Select Region---</option>');
                    $(".region-div").css("display","none");
                    $('#franchise-level-zone').empty();              
                    $('#franchise-level-zone').append('<option value="">---Select Zone---</option>');
                    $(".zone-div").css("display","none");
                    $('#franchise-level-district').empty();              
                    $('#franchise-level-district').append('<option value="">---Select District---</option>');
                    $(".district-div").css("display","none");
                    $('#franchise-level-taluk').empty();              
                    $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');
                    $(".taluk-div").css("display","none");                                                       
                }                
            });

            // state
            $(document).on("change","#franchise-level-state",function() {
                var vendor_id = $("#vendor").val();
                var state_id = $(this).val();
                $('#franchise-level-region').empty();
                $('#franchise-level-region').append('<option value="">---Select Region---</option>');  
                $('#franchise-level-zone').empty();              
                $('#franchise-level-zone').append('<option value="">---Select Zone---</option>');    
                $('#franchise-level-district').empty();              
                $('#franchise-level-district').append('<option value="">---Select District---</option>'); 
                $('#franchise-level-taluk').empty();              
                $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');                
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
                        $('#franchise-level-region').empty();
                        $('#franchise-level-region').append('<option value="">---Select Region---</option>');
                        $(data).each(function(index,value){
                            $('#franchise-level-region').append('<option value="' + value.id + '">' + value.region_name + '</option>');
                        });                        
                    },
                    error: function (data) { 
                        alert('Server Error');                       
                    }                    
                });
            });

            // region
            $(document).on("change","#franchise-level-region",function() {
                var vendor_id = $("#vendor").val();
                var state_id = $('#franchise-level-state').val();
                var region_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else{
                    $('#franchise-level-zone').empty();              
                    $('#franchise-level-zone').append('<option value="">---Select Zone---</option>');    
                    $('#franchise-level-district').empty();              
                    $('#franchise-level-district').append('<option value="">---Select District---</option>'); 
                    $('#franchise-level-taluk').empty();              
                    $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');
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
                            $('#franchise-level-zone').empty();
                            $('#franchise-level-zone').append('<option value="">---Select Zone---</option>');
                            $(data).each(function(index,value){
                                $('#franchise-level-zone').append('<option value="' + value.id + '">' + value.zone_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }
            });            

            // zone
            $(document).on("change","#franchise-level-zone",function() {
                var vendor_id = $('#vendor').val();
                var state_id = $('#franchise-level-state').val();
                var region_id = $('#franchise-level-region').val();
                var zone_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else{
                    $('#franchise-level-district').empty();              
                    $('#franchise-level-district').append('<option value="">---Select District---</option>'); 
                    $('#franchise-level-taluk').empty();              
                    $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');
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
                            $('#franchise-level-district').empty();
                            $('#franchise-level-district').append('<option value="">---Select District---</option>');
                            $(data).each(function(index,value){
                                $('#franchise-level-district').append('<option value="' + value.id + '">' + value.district_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }
            });             

            // district
            $(document).on("change","#franchise-level-district",function() {
                var vendor_id = $('#vendor').val();
                var state_id = $('#franchise-level-state').val();
                var region_id = $('#franchise-level-region').val();
                var zone_id = $('#franchise-level-zone').val();
                var district_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else if(zone_id == ""){
                    alert('please select zone');
                }else{
                    $('#franchise-level-taluk').empty();              
                    $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');
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
                            $('#franchise-level-taluk').empty();
                            $('#franchise-level-taluk').append('<option value="">---Select Taluk---</option>');
                            $(data).each(function(index,value){
                                $('#franchise-level-taluk').append('<option value="' + value.id + '">' + value.taluk_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });
                }
            });              

            // taluk
            $(document).on("change","#franchise-level-taluk",function() {
                var state_id = $('#franchise-level-state').val();
                var region_id = $('#franchise-level-region').val();
                var zone_id = $('#franchise-level-zone').val();
                var district_id = $("#franchise-level-district").val();
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

            // add new employer
            $(document).on("click",".add-employer",function() {
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

                var vendor = $('#vendor').val();
                if(vendor == ""){
                    $('.vendor-validate').html('The vendor field is required.');
                    $('.vendor-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.vendor-validate').html('');
                    $('.vendor-validate').removeClass('field-error');
                }

                if(vendor != ""){
                    var franchiseLevel = $('#franchise-level').val();
                    if(franchiseLevel == ""){
                        $('.franchise-level-validate').html('The franchise level field is required.');
                        $('.franchise-level-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-validate').html('');
                        $('.franchise-level-validate').removeClass('field-error');
                    } 
                }

                if(franchiseLevel == "state"){
                    var franchiseLevelState = $('#franchise-level-state').val();
                    if(franchiseLevelState == ""){
                        $('.franchise-level-state-validate').html('The franchise level state field is required.');
                        $('.franchise-level-state-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-state-validate').html('');
                        $('.franchise-level-state-validate').removeClass('field-error');
                    }
                }else{
                    // 
                }

                if(franchiseLevelRegion == "region"){
                    var franchiseLevelState = $('#franchise-level-state').val();
                    if(franchiseLevelState == ""){
                        $('.franchise-level-state-validate').html('The franchise level state field is required.');
                        $('.franchise-level-state-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-state-validate').html('');
                        $('.franchise-level-state-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelRegion = $('#franchise-level-region').val();
                    if(franchiseLevelRegion == ""){
                        $('.franchise-level-region-validate').html('The franchise level region field is required.');
                        $('.franchise-level-region-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-region-validate').html('');
                        $('.franchise-level-region-validate').removeClass('field-error');
                    }
                }else{
                    //  
                }

                if(franchiseLevel == "zone"){
                    var franchiseLevelState = $('#franchise-level-state').val();
                    if(franchiseLevelState == ""){
                        $('.franchise-level-state-validate').html('The franchise level state field is required.');
                        $('.franchise-level-state-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-state-validate').html('');
                        $('.franchise-level-state-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelRegion = $('#franchise-level-region').val();
                    if(franchiseLevelRegion == ""){
                        $('.franchise-level-region-validate').html('The franchise level region field is required.');
                        $('.franchise-level-region-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-region-validate').html('');
                        $('.franchise-level-region-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelZone = $('#franchise-level-zone').val();
                    if(franchiseLevelZone == ""){
                        $('.franchise-level-zone-validate').html('The franchise level zone field is required.');
                        $('.franchise-level-zone-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-zone-validate').html('');
                        $('.franchise-level-zone-validate').removeClass('field-error');
                    }
                }else{
                    // 
                }

                if(franchiseLevel == "district"){
                    var franchiseLevelState = $('#franchise-level-state').val();
                    if(franchiseLevelState == ""){
                        $('.franchise-level-state-validate').html('The franchise level state field is required.');
                        $('.franchise-level-state-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-state-validate').html('');
                        $('.franchise-level-state-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelRegion = $('#franchise-level-region').val();
                    if(franchiseLevelRegion == ""){
                        $('.franchise-level-region-validate').html('The franchise level region field is required.');
                        $('.franchise-level-region-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-region-validate').html('');
                        $('.franchise-level-region-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelZone = $('#franchise-level-zone').val();
                    if(franchiseLevelZone == ""){
                        $('.franchise-level-zone-validate').html('The franchise level zone field is required.');
                        $('.franchise-level-zone-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-zone-validate').html('');
                        $('.franchise-level-zone-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelDistrict = $('#franchise-level-district').val();
                    if(franchiseLevelDistrict == ""){
                        $('.franchise-level-district-validate').html('The franchise level district field is required.');
                        $('.franchise-level-district-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-district-validate').html('');
                        $('.franchise-level-district-validate').removeClass('field-error');
                    }
                }else{
                    // 
                }

                if(franchiseLevel == "taluk"){
                    var franchiseLevelState = $('#franchise-level-state').val();
                    if(franchiseLevelState == ""){
                        $('.franchise-level-state-validate').html('The franchise level state field is required.');
                        $('.franchise-level-state-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-state-validate').html('');
                        $('.franchise-level-state-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelRegion = $('#franchise-level-region').val();
                    if(franchiseLevelRegion == ""){
                        $('.franchise-level-region-validate').html('The franchise level region field is required.');
                        $('.franchise-level-region-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-region-validate').html('');
                        $('.franchise-level-region-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelZone = $('#franchise-level-zone').val();
                    if(franchiseLevelZone == ""){
                        $('.franchise-level-zone-validate').html('The franchise level zone field is required.');
                        $('.franchise-level-zone-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-zone-validate').html('');
                        $('.franchise-level-zone-validate').removeClass('field-error');
                    }                    
                    var franchiseLevelDistrict = $('#franchise-level-district').val();
                    if(franchiseLevelDistrict == ""){
                        $('.franchise-level-district-validate').html('The franchise level district field is required.');
                        $('.franchise-level-district-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-district-validate').html('');
                        $('.franchise-level-district-validate').removeClass('field-error');
                    }
                    var franchiseLevelTaluk = $('#franchise-level-taluk').val();
                    if(franchiseLevelTaluk == ""){
                        $('.franchise-level-taluk-validate').html('The franchise level taluk field is required.');
                        $('.franchise-level-taluk-validate').addClass('field-error');
                        formError = true;
                    }else{
                        $('.franchise-level-taluk-validate').html('');
                        $('.franchise-level-taluk-validate').removeClass('field-error');
                    }
                }else{
                    //
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
                        url: "{{ route('storeNewEmployer') }}",
                        data:$('.add-new-employer-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');

                                $('.custom-success-box strong').html(data.msg);                             
                                $('.custom-success-box').css('display','block');
                                $('.add-new-employer-form')[0].reset();                      
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
