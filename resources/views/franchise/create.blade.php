@extends('layouts.app')

<!-- styles -->
@section('styles')

@stop

@section('content')

<div class="app-content content container-fluid">
    <div class="content-wrapper">
<!--         <div class="loading">
            <div id="loader"></div>
        </div> -->
        
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ADD NEW FRANCHISE</h4>
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

                    <form method="post" class="add-new-franchise-form" action="{{ route('storeNewFranchise') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Vendor -->
                                <div class="form-group">
                                    <label>Vendor</Label>
                                    <select class="form-control" name="vendor" id="vendor">
                                        <option value=""> ---Select Company--- </option>
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

                            <div class="col-md-6">
                                <!-- State -->
                                <div class="form-group">
                                    <label for="website_address" class="control-label">State</label>
                                    <select class="form-control" name="state" id="state">
                                        <option value=""> ---Select State--- </option>
                                            @foreach($states as $state)
                                                @if (Request::old('state') == $state->id)
                                                    <option value="{{$state->id}}" selected>{{$state->state_name}}</option>
                                                @else
                                                    <option value="{{$state->id}}">{{$state->state_name}}</option>
                                                @endif
                                            @endforeach
                                    </select>

                                    <span class="state-validate"></span> 
                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>                                                        
                            </div>                                                        
                        </div> 

                        <!-- Second set -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Region -->
                                <div class="form-group">
                                    <label>Region</Label>
                                    <select class="form-control" name="region" id="region">
                                        <option value=""> ---Select Region--- </option>
                                    </select>

                                    <span class="region-validate"></span> 
                                    @if ($errors->has('region'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('region') }}</strong>
                                        </span>
                                    @endif                            
                                </div>
                                <button class="btn btn-info add-region" style="float: left;" type="button"> Add</button>                                                                
                            </div>

                            <div class="col-md-6">
                                <!-- Zone -->
                                <div class="form-group">
                                    <label for="zone" class="control-label">Zone</label>
                                    <select class="form-control" name="zone" id="zone">
                                        <option value=""> ---Select Zone--- </option>
                                    </select>

                                    <span class="zone-validate"></span> 
                                    @if ($errors->has('zone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('zone') }}</strong>
                                        </span>
                                    @endif
                                </div>  
                                <button class="btn btn-info add-zone" style="float: left;" type="button"> Add</button>              
                            </div>                                                        
                        </div>                                              

                        <!-- Third Set -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- District -->
                                <div class="form-group">
                                    <label>District</Label>
                                    <select class="form-control" name="district" id="district">
                                        <option value=""> ---Select District--- </option>
                                    </select>

                                    <span class="district-validate"></span> 
                                    @if ($errors->has('district'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </span>
                                    @endif                            
                                </div>
                                <button class="btn btn-info add-district" style="float: left;" type="button"> Add</button>                                 
                            </div>

                            <div class="col-md-6">
                                <!-- Taluk -->
                                <div class="form-group">
                                    <label for="taluk" class="control-label">Taluk</label>
                                    <select class="form-control" name="taluk" id="taluk">
                                        <option value=""> ---Select Taluk--- </option>
                                    </select>

                                    <span class="taluk-validate"></span> 
                                    @if ($errors->has('taluk')) 
                                        <span class="help-block">
                                            <strong>{{ $errors->first('taluk') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button class="btn btn-info add-taluk" style="float: left;" type="button"> Add</button>                                             
                            </div>                                                        
                        </div> 

                        <div class="form-group">
                            <button class="btn btn-success add-franchise" style="float: right;" type="button"><i class="icon-plus"></i> Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Region -->
<div class="modal fade" id="regionModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD REGION</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="add-new-region-form" action="{{ route('storeNewRegion') }}">
                    <!-- CSRF field -->
                    {{csrf_field()}}
                    <input type="hidden" name="selected_vendor_id" id="selected-vendor-id">
                    <input type="hidden" name="selected_state_id" id="selected-state-id">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- New Region -->
                            <div class="form-group">
                                <label>Region</label>
                                <input type="text" name="new_region" id="new-region" placeholder="New Region">
                                <span class="new-region-validate"></span> 
                                @if ($errors->has('newregion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newregion') }}</strong>
                                    </span>
                                @endif                            
                            </div>
                            <button class="btn btn-info submit-new-region" style="float: left;" type="button"> Add</button>
                        </div>
                    </div>                                                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- New Zone -->
<div class="modal fade" id="zoneModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD ZONE</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="add-new-zone-form" action="{{ route('storeNewZone') }}">
                    <!-- CSRF field -->
                    {{csrf_field()}}
                    <input type="hidden" name="selected_vendor_id" id="selected-vendor-id">
                    <input type="hidden" name="selected_state_id" id="selected-state-id">
                    <input type="hidden" name="selected_region_id" id="selected-region-id">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- New Zone -->
                            <div class="form-group">
                                <label>Zone</label>
                                <input type="text" name="new_zone" id="new-zone" placeholder="New Zone">
                                <span class="new-zone-validate"></span> 
                                @if ($errors->has('newzone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newzone') }}</strong>
                                    </span>
                                @endif                            
                            </div>
                            <button class="btn btn-info submit-new-zone" style="float: left;" type="button"> Add</button>
                        </div>
                    </div>                                                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- New District -->
<div class="modal fade" id="districtModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD DISTRICT</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="add-new-district-form" action="{{ route('storeNewDistrict') }}">
                    <!-- CSRF field -->
                    {{csrf_field()}}
                    <input type="hidden" name="selected_vendor_id" id="selected-vendor-id">
                    <input type="hidden" name="selected_state_id" id="selected-state-id">
                    <input type="hidden" name="selected_region_id" id="selected-region-id">
                    <input type="hidden" name="selected_zone_id" id="selected-zone-id">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- New District -->
                            <div class="form-group">
                                <label>District</label>
                                <input type="text" name="new_district" id="new-district" placeholder="New District">
                                <span class="new-district-validate"></span> 
                                @if ($errors->has('newdistrict'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newdistrict') }}</strong>
                                    </span>
                                @endif                            
                            </div>
                            <button class="btn btn-info submit-new-district" style="float: left;" type="button"> Add</button>
                        </div>
                    </div>                                                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- New Taluk -->
<div class="modal fade" id="talukModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD TALUK</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="add-new-taluk-form" action="{{ route('storeNewDistrict') }}">
                    <!-- CSRF field -->
                    {{csrf_field()}}
                    <input type="hidden" name="selected_vendor_id" id="selected-vendor-id">
                    <input type="hidden" name="selected_state_id" id="selected-state-id">
                    <input type="hidden" name="selected_region_id" id="selected-region-id">
                    <input type="hidden" name="selected_zone_id" id="selected-zone-id">
                    <input type="hidden" name="selected_district_id" id="selected-district-id">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- New Taluk -->
                            <div class="form-group">
                                <label>Taluk</label>
                                <input type="text" name="new_taluk" id="new-taluk" placeholder="New Taluk">
                                <span class="new-taluk-validate"></span> 
                                @if ($errors->has('newtaluk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newtaluk') }}</strong>
                                    </span>
                                @endif                            
                            </div>
                            <button class="btn btn-info submit-new-taluk" style="float: left;" type="button"> Add</button>
                        </div>
                    </div>                                                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- scripts -->
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            // state
            $(document).on("change","#state",function() {
                var vendor_id = $("#vendor").val();
                var state_id = $(this).val();
                $('#region').empty();
                $('#region').append('<option value="">---Select Region---</option>');  
                $('#zone').empty();              
                $('#zone').append('<option value="">---Select Zone---</option>');    
                $('#district').empty();              
                $('#district').append('<option value="">---Select District---</option>'); 
                $('#taluk').empty();              
                $('#taluk').append('<option value="">---Select Taluk---</option>');                

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
                        $('#region').empty();
                        $('#region').append('<option value="">---Select Region---</option>');
                        $(data).each(function(index,value){
                            $('#region').append('<option value="' + value.id + '">' + value.region_name + '</option>');
                        });                        
                    },
                    error: function (data) { 
                        alert('Server Error');                       
                    }                    
                });
            });

            // region
            $(document).on("change","#region",function() {
                var vendor_id = $("#vendor").val();
                var state_id = $('#state').val();
                var region_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else{
                    $('#zone').empty();              
                    $('#zone').append('<option value="">---Select Zone---</option>');    
                    $('#district').empty();              
                    $('#district').append('<option value="">---Select District---</option>'); 
                    $('#taluk').empty();              
                    $('#taluk').append('<option value="">---Select Taluk---</option>');
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
                            $('#zone').empty();
                            $('#zone').append('<option value="">---Select Zone---</option>');
                            $(data).each(function(index,value){
                                $('#zone').append('<option value="' + value.id + '">' + value.zone_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }
            });            

            // zone
            $(document).on("change","#zone",function() {
                var vendor_id = $('#vendor').val();
                var state_id = $('#state').val();
                var region_id = $('#region').val();
                var zone_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else{
                    $('#district').empty();              
                    $('#district').append('<option value="">---Select District---</option>'); 
                    $('#taluk').empty();              
                    $('#taluk').append('<option value="">---Select Taluk---</option>');
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
                            $('#district').empty();
                            $('#district').append('<option value="">---Select District---</option>');
                            $(data).each(function(index,value){
                                $('#district').append('<option value="' + value.id + '">' + value.district_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }
            });             

            // district
            $(document).on("change","#district",function() {
                var vendor_id = $('#vendor').val();
                var state_id = $('#state').val();
                var region_id = $('#region').val();
                var zone_id = $('#zone').val();
                var district_id = $(this).val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else if(zone_id == ""){
                    alert('please select zone');
                }else{
                    $('#taluk').empty();              
                    $('#taluk').append('<option value="">---Select Taluk---</option>');
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
                            $('#taluk').empty();
                            $('#taluk').append('<option value="">---Select Taluk---</option>');
                            $(data).each(function(index,value){
                                $('#taluk').append('<option value="' + value.id + '">' + value.taluk_name + '</option>');
                            });                        
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });
                }
            });              

            // taluk
            $(document).on("change","#taluk",function() {
                var state_id = $('#state').val();
                var region_id = $('#region').val();
                var zone_id = $('#zone').val();
                var district_id = $("#district").val();
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

            // add new region
            $(document).on("click",".add-region",function() {
                var state_id = $('#state').val();
                if(state_id == ""){
                    alert('please select state');
                }else{
                    $('#regionModal').modal('show');
                }
            });            
            $(document).on("click",".submit-new-region",function() {
                var formError = false;
                var newRegion = $("#new-region").val();
                if(newRegion == ""){
                    $('.new-region-validate').html('The region name field is required.');
                    $('.new-region-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.new-region-validate').html('');
                    $('.new-region-validate').removeClass('field-error');                    
                }

                if(formError == false){
                    var vendor_id = $("#vendor").val();
                    var state_id = $("#state").val();
                    $(".add-new-region-form").find("#selected-vendor-id").val(vendor_id);
                    $(".add-new-region-form").find("#selected-state-id").val(state_id);
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewRegion') }}",
                        data:$('.add-new-region-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.add-new-region-form')[0].reset();                     
                                $('#regionModal').modal('hide');
                                console.log(data.msg); 
                            }else{
                                console.log(data.msg); 
                            }
                        },
                        error: function (data) { 
                            alert('Server Error');                       
                        }                    
                    });                    
                }                
            });

            // add new zone
            $(document).on("click",".add-zone",function() {
                var state_id = $('#state').val();
                var region_id = $('#region').val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else{
                    $('#zoneModal').modal('show');
                }
            });            
            $(document).on("click",".submit-new-zone",function() {
                var formError = false;
                var newZone = $("#new-zone").val();
                if(newZone == ""){
                    $('.new-zone-validate').html('The zone name field is required.');
                    $('.new-zone-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.new-zone-validate').html('');
                    $('.new-zone-validate').removeClass('field-error');                    
                }

                if(formError == false){
                    var vendor_id = $("#vendor").val();
                    var state_id = $("#state").val();
                    var region_id = $("#region").val();
                    $(".add-new-zone-form").find("#selected-vendor-id").val(vendor_id);
                    $(".add-new-zone-form").find("#selected-state-id").val(state_id);
                    $(".add-new-zone-form").find("#selected-region-id").val(region_id);
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewZone') }}",
                        data:$('.add-new-zone-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.add-new-zone-form')[0].reset();                     
                                $('#zoneModal').modal('hide');
                                console.log(data.msg);                          
                            }else{
                                console.log(data.msg);
                            }
                        },
                        error: function (data) { 
                            alert('Server Error');                        
                        }                    
                    });                    
                }                
            }); 

            // add new district
            $(document).on("click",".add-district",function() {
                var state_id = $('#state').val();
                var region_id = $('#region').val();
                var zone_id = $('#zone').val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else if(zone_id == ""){
                    alert('please select zone');
                }else{
                    $('#districtModal').modal('show');
                }
            });
            $(document).on("click",".submit-new-district",function() {
                var formError = false;
                var newDistrict = $("#new-district").val();
                if(newDistrict == ""){
                    $('.new-district-validate').html('The district name field is required.');
                    $('.new-district-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.new-district-validate').html('');
                    $('.new-district-validate').removeClass('field-error');                    
                }

                if(formError == false){
                    var vendor_id = $("#vendor").val();
                    var state_id = $("#state").val();
                    var region_id = $("#region").val();
                    var zone_id = $("#zone").val();
                    $(".add-new-district-form").find("#selected-vendor-id").val(vendor_id);
                    $(".add-new-district-form").find("#selected-state-id").val(state_id);
                    $(".add-new-district-form").find("#selected-region-id").val(region_id);
                    $(".add-new-district-form").find("#selected-zone-id").val(zone_id);
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewDistrict') }}",
                        data:$('.add-new-district-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.add-new-district-form')[0].reset();                     
                                $('#districtModal').modal('hide');
                                console.log(data.msg);                          
                            }else{
                                console.log(data.msg);
                            }
                        },
                        error: function (data) { 
                            alert('Server Error');                        
                        }                    
                    });                    
                }                
            }); 

            // add new taluk
            $(document).on("click",".add-taluk",function() {
                var state_id = $('#state').val();
                var region_id = $('#region').val();
                var zone_id = $('#zone').val();
                var district_id = $("#district").val();
                if(state_id == ""){
                    alert('please select state');
                }else if(region_id == ""){
                    alert('please select region');
                }else if(zone_id == ""){
                    alert('please select zone');
                }else if(district_id == ""){
                    alert('please select district');
                }else{
                    $('#talukModal').modal('show');
                }
            });
            $(document).on("click",".submit-new-taluk",function() {
                var formError = false;
                var newTaluk = $("#new-taluk").val();
                if(newTaluk == ""){
                    $('.new-taluk-validate').html('The taluk name field is required.');
                    $('.new-taluk-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.new-taluk-validate').html('');
                    $('.new-taluk-validate').removeClass('field-error');                    
                }

                if(formError == false){
                    var vendor_id = $("#vendor").val();
                    var state_id = $("#state").val();
                    var region_id = $("#region").val();
                    var zone_id = $("#zone").val();
                    var district_id = $("#district").val();
                    $(".add-new-taluk-form").find("#selected-vendor-id").val(vendor_id);
                    $(".add-new-taluk-form").find("#selected-state-id").val(state_id);
                    $(".add-new-taluk-form").find("#selected-region-id").val(region_id);
                    $(".add-new-taluk-form").find("#selected-zone-id").val(zone_id);
                    $(".add-new-taluk-form").find("#selected-district-id").val(district_id);
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewTaluk') }}",
                        data:$('.add-new-taluk-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.add-new-taluk-form')[0].reset();                     
                                $('#talukModal').modal('hide');
                                console.log(data.msg);                          
                            }else{
                                console.log(data.msg);
                            }
                        },
                        error: function (data) { 
                            alert('Server Error');                        
                        }                    
                    });                    
                }                
            });                                                            
            
            // add new franchise
            $(document).on("click",".add-franchise",function() {
                var formError = false;

                var vendorName = $("#vendor").val();
                if(vendorName == ""){
                    $('.vendor-validate').html('The vendor name field is required.');
                    $('.vendor-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.vendor-validate').html('');
                    $('.vendor-validate').removeClass('field-error');                    
                }

                var state_id = $('#state').val();
                if(state_id == ""){
                    $('.state-validate').html('The state field is required.');
                    $('.state-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.state-validate').html('');
                    $('.state-validate').removeClass('field-error');
                }

                var region_id = $('#region').val();
                if(region_id == ""){
                    $('.region-validate').html('The region field is required.');
                    $('.region-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.region-validate').html('');
                    $('.region-validate').removeClass('field-error');
                }

                var zone_id = $('#zone').val();
                if(zone_id == ""){
                    $('.zone-validate').html('The zone field is required.');
                    $('.zone-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.zone-validate').html('');
                    $('.zone-validate').removeClass('field-error');
                }

                var district_id = $('#district').val();
                if(district_id == ""){
                    $('.district-validate').html('The zone field is required.');
                    $('.district-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.district-validate').html('');
                    $('.district-validate').removeClass('field-error');
                }    

                var taluk_id = $('#taluk').val();
                if(taluk_id == ""){
                    $('.taluk-validate').html('The taluk field is required.');
                    $('.taluk-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.taluk-validate').html('');
                    $('.taluk-validate').removeClass('field-error');
                }                                         

                if(formError == false){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewFranchise') }}",
                        data:$('.add-new-franchise-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');

                                $('.custom-success-box strong').html(data.msg);                             
                                $('.custom-success-box').css('display','block');
                                $('.add-new-franchise-form')[0].reset();                       
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
