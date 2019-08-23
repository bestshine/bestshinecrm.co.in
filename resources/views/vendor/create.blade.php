@extends('layouts.app')

<!-- styles -->
@section('styles')
    
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ADD NEW VENDOR</h4>
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

                    <form method="post" class="add-new-vendor-form" action="{{ route('storeNewVendor') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}

                        <!-- Company Name -->
                        <div class="form-group">
                            <label>Company Name</Label>
                            <input type="text" class="form-control" name="company_name" id= "company_name" placeholder="Company Name" value="{{ old('company_name') }}" autocomplete="off">

                            <span class="company-name-validate"></span> 
                            @if ($errors->has('company_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_name') }}</strong>
                                </span>
                            @endif                            
                        </div>

                        <!-- Company Website Address -->
                        <div class="form-group">
                            <label for="website_address" class="control-label">Company Website Address</label>
                            <input id="website_address" type="text" class="form-control" name="website_address" value="{{ old('website_address') }}" placeholder="Company Website Address" autofocus>

                            <span class="website-address-validate"></span> 
                            @if ($errors->has('website_address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('website_address') }}</strong>
                                </span>
                            @endif
                        </div>

                        <!-- Company Product Details -->
                        <div class="form-group">
                            <label for="product_details" class="control-label">Company Product Details</label>
                            <input id="product_details" type="text" class="form-control" name="product_details" value="{{ old('product_details') }}" placeholder="Company Product Details" autofocus>

                            <span class="product-details-validate"></span> 
                            @if ($errors->has('product_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('product_details') }}</strong>
                                </span>
                            @endif
                        </div>                        

                        <!-- Status -->
                        <div class="form-group">
                            <label>Status</label><br>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" name="status" value="1">
                                    <em data-on="on" data-off="off"></em>
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success add-vendor" style="float: right;" type="button"><i class="icon-plus"></i> Add</button>
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
    <script type="text/javascript">
        $(document).ready(function() {

            // add new users
            $(document).on("click",".add-vendor",function() {
                var formError = false;

                var companyName = $('input[name=company_name]').val();
                if(companyName == ""){
                    $('.company-name-validate').html('The company name field is required.');
                    $('.company-name-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.company-name-validate').html('');
                    $('.company-name-validate').removeClass('field-error');                    
                }

                var companyWebsiteAddress = $('input[name=website_address]').val();
                if(companyWebsiteAddress == ""){
                    $('.website-address-validate').html('The website address field is required.');
                    $('.website-address-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.website-address-validate').html('');
                    $('.website-address-validate').removeClass('field-error');                                                       
                }

                var companyProductDetails = $('input[name=product_details]').val();
                if(companyProductDetails == ""){
                    $('.product-details-validate').html('The product details field is required.');
                    $('.product-details-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.product-details-validate').html('');
                    $('.product-details-validate').removeClass('field-error'); 
                }                

                if(formError == false){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('storeNewVendor') }}",
                        data:$('.add-new-vendor-form').serialize(),
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');

                                $('.custom-success-box strong').html(data.msg);                             
                                $('.custom-success-box').css('display','block');
                                $('.add-new-vendor-form')[0].reset();
      
                                // setTimeout(function(){ loadUnSeenNotifications(); }, 3000);                        
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
