@extends('layouts.home.app')

<!-- styles -->
@section('styles')
<style type="text/css">
    .home-heading{
        text-align: center;
    }
    .home-logo img{
        margin: 0px auto;
        width: 100%;
        /*border-radius: 50%;*/
        padding: 18px;
    }   
    .home-title{
        font-weight: bold;
    }   
    .home-logo{
        height: 120px;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        text-align: center;
        /*background-color: #e7e2e2;*/
    }
    .form-section{
        box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.3);
        margin-bottom: 1.875rem;
        border-radius: 0;
        padding: 30px 20px 10px 20px;
        /*margin-top: 80px;      */
    }
    .vertical-adjust{
        display: table;
        text-align: center;
        width: 100%;
        height: 620px;        
    }
    .vertical-center{
        display: table-cell;
        vertical-align: middle;       
    }    
</style>
@stop

@section('content')
<div class="container">
    <div class="vertical-adjust">
        <div class="vertical-center">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="col-sm-6 col-sm-offset-3" id="login-cnt">
                    <!-- show login success -->
                    <div class="alert alert-success alert-dismissable fade in custom-success-box" style="display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong>
                    </div>

                    <!-- show login error -->
                    <div class="alert alert-danger alert-dismissable fade in custom-error-box" style="display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong>
                    </div>

                    <div class="form-section">
                        <div class="home-logo">
                            <img src="http://bestshineeduapp.com/tuttee/images/logo.png">
                        </div>                

                        <form class="form-horizontal" id="login-form" method="POST" action="{{ route('postLogin') }}">
                            {{ csrf_field() }}

                            <div class="form-group">                        
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" autofocus>

                                    <span class="email-validate"></span> 
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>     
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    
                                    <span class="password-validate"></span> 
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif                            
                                </div>
                            </div>

            <!--                 <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary login">
                                            Login
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                       <!--  <a class="btn btn-link" href="{{ route('forgot') }}">
                                            Forgot Password?
                                        </a> -->                        
                                    </div>                                    
                                </div>
                            </div>
                        </form>
                    </div>
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
        $(document).on("click",".login",function(event) {
            var formError = false;
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

            var password = $('input[name=password]').val();
            if(password == ""){
                $('.password-validate').html('The password field is required.');
                $('.password-validate').addClass('field-error');
                formError = true;
            }else{
                $('.password-validate').html('');
                $('.password-validate').removeClass('field-error');                    
            }

            if(formError == false){

                // ajax setup
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({   
                    url: '{{ route("postLogin") }}', 
                    dataType: 'json',
                    data:{
                        _token: $('input[name="_token"]').val(),
                        email: email,
                        password: password
                    },   
                    type: 'POST',
                    beforeSend: function() {
                        $('.loading').css("display","block");
                    },                    
                    success: function (data) {  
                        $('.loading').css("display","none");
                        console.log(data);
                        if(data.status == 1){
                            $('.custom-error-box strong').html('');
                            $('.custom-error-box').css('display','none');

                            $('.custom-success-box strong').html(data.msg);
                            $('.custom-success-box').css('display','block');
                            setTimeout(function(){ window.location.href = data.url; }, 1000);
                        }else{
                            $('.custom-success-box strong').html('');
                            $('.custom-success-box').css('display','none');

                            $('.custom-error-box strong').html(data.msg);
                            $('.custom-error-box').css('display','block');
                        }
                    },
                    error: function (data) { 
                        console.log('server Error');
                        $('.custom-error-box strong').html('Server Error Please Wait...');
                        $('.custom-error-box').css('display','block');                        
                    }
                });                
            }   
        });
    });     
    </script>
@stop
