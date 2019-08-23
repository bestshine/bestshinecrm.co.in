@extends('layouts.app')

<!-- styles -->
@section('styles')
    <style type="text/css">
        .click-box{
            border: 1px solid #3BAFDA;
            text-align: center;
            padding: 15px;      
            cursor:pointer;     
        }
        .active-div{
            background: #3BAFDA;
            color: #fff;
        }        
    </style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">POST NEW ISSUE</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 select-div">
                            <div class="click-box active-div" data-id="new-issue">NEW ISSUE</div>
                        </div>
                        <div class="col-md-3 select-div">
                            <div class="click-box" data-id="track-issue">TRACK ISSUE</div>
                        </div>                        
                        <div class="col-md-3"></div>
                    </div>
                    <div class="new-issue">

                        @if (\Session::has('success'))
                            @php $msg = Session::get("success"); @endphp
                            <!-- show success -->
                            <div class="alert alert-success alert-dismissable fade in custom-success-box">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{!! $msg["msg"] !!}</strong>
                            </div>
                        @endif 

                        @if (\Session::has('error'))
                            @php $msg = Session::get("success"); @endphp
                            <!-- show error -->
                            <div class="alert alert-danger alert-dismissable fade in custom-error-box">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{!! \Session::get("msg") !!}</strong>
                            </div>                                               
                        @endif 

                        <form method="post" class="issue-form" action="{{ route('storeNewIssue') }}" enctype="multipart/form-data">
                            <!-- CSRF field -->
                            {{csrf_field()}}

                            <h5>ISSUE DETAILS</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Category -->
                                    <div class="form-group">
                                        <label>Category</Label>
                                        <select class="form-control" name="category" id="category">
                                            <option value=""> ---Select Category--- </option>
                                            <option value="Bug">Bug</option>
                                            <option value="Feature">Feature</option>
                                            <option value="Support">Support</option>
                                        </select>                                    
                                        <span class="category-validate"></span> 
                                        @if ($errors->has('category'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                        @endif                             
                                    </div>                                
                                </div>

                                <div class="col-md-6">
                                    <!-- Subject -->
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" autofocus>

                                        <span class="subject-validate"></span> 
                                        @if ($errors->has('subject'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subject') }}</strong>
                                            </span>
                                        @endif
                                    </div>                            
                                </div>                                                        
                            </div>                       

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Description -->
                                    <div class="form-group">
                                        <label>Description</Label>
                                        <textarea  name="description" id="description" rows="4" cols="78" style="resize: none;"></textarea>
                                        <span class="description-validate"></span> 
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>                                                               
                                </div>
                                <div class="col-md-6">
                                    <!-- Priority Level -->
                                    <div class="form-group">
                                        <label>Priority Level</Label>
                                        <select class="form-control" name="priority_level" id="priority-level">
                                            <option value=""> ---Select Priority Level--- </option>
                                            <option value="Normal">Normal</option>
                                            <option value="Urgent">Urgent</option>
                                        </select>                                    
                                        <span class="priority-level-validate"></span> 
                                        @if ($errors->has('priority_level'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('priority_level') }}</strong>
                                            </span>
                                        @endif                             
                                    </div>                                
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Screen Shot -->
                                    <div class="form-group">
                                        <label>Screen Shot Attached</Label>
                                        <input type="file" class="form-control" name="screen_shot_images[]" id="screen-shot-images" multiple="" autofocus>                                    
                                        <span class="images-validate"></span> 
                                        @if ($errors->has('screen_shot_images'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('screen_shot_images') }}</strong>
                                            </span>
                                        @endif                             
                                    </div>                                
                                </div>                                
                            </div>                        

                            <div class="form-group">
                                <button class="btn btn-success post-issue" style="float: right;" type="button"><i class="icon-forward"></i> Post</button>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="track-issue" style="display: none;">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                                <!-- Screen Shot -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="track_id" id="track-id" placeholder="TRACK ID" autofocus>                                    
                                    <span class="track-id-validate"></span> 
                                    @if ($errors->has('track_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('track_id') }}</strong>
                                        </span>
                                    @endif                             
                                </div>                                
                            </div>                                
                            <div class="col-md-1">
                                <button class="btn btn-info search-issue" style="float: right;" type="button"><i class="icon-search"></i> Search</button>                                
                            </div>
                            <div class="col-md-4"></div>
                        </div> 
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-5">
                                <!-- success -->
                                <div class="alert alert-success alert-dismissable fade in custom-success-box" style="display: none;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong></strong>
                                </div>

                                <!-- error -->
                                <div class="alert alert-danger alert-dismissable fade in custom-error-box" style="display: none;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong></strong>
                                </div>   
                            </div>                   
                            <div class="col-md-4"></div>
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
    <script type="text/javascript">
        $(document).ready(function() {

            // show details
            $(document).on("click",".click-box",function() {
                $(".select-div").find(".active-div").removeClass("active-div");
                $(this).addClass("active-div");                
                var id = $(this).attr("data-id");
                if(id == "new-issue"){
                    $(".new-issue").css("display","block");
                    $(".track-issue").css("display","none");
                }
                if(id == "track-issue"){
                    $(".new-issue").css("display","none");
                    $(".track-issue").css("display","block");
                }
            });  

            // search track id details
            $(document).on("click",".search-issue",function() {
                var formError = false;
                var trackID = $('#track-id').val();
                if(trackID == ""){
                    $('.track-id-validate').html('The track id field is required.');
                    $('.track-id-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.track-id-validate').html('');
                    $('.track-id-validate').removeClass('field-error');                    
                }
                if(formError == false){
                    $.ajax({   
                        url: '{{ route("checkTrackID") }}', 
                        dataType: 'json',
                        data:{
                            _token: $('input[name="_token"]').val(),
                            trackID: trackID
                        },   
                        type: 'POST',
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function (data) {  
                            $('.loading').css("display","none");
                            if(data.status == 1){
                                $('.custom-error-box strong').html('');
                                $('.custom-error-box').css('display','none');
                                var link = "{{ route('getCustomerCareDetails',null)}}/"+trackID;
                                var html = data.msg + "... Use <a href='"+link+"'>link</a> for track issue";
                                $('.custom-success-box strong').html(html);
                                $('.custom-success-box').css('display','block');
                            }else{
                                $('.custom-success-box strong').html('');
                                $('.custom-success-box').css('display','none');

                                $('.custom-error-box strong').html(data.msg);
                                $('.custom-error-box').css('display','block');
                            }
                        },
                        error: function (data) { 
                            console.log('server Error');                    
                        }
                    });                     
                }
            });                               
            
            // add new employer
            $(document).on("click",".post-issue",function() {
                var formError = false;

                var category = $('#category').val();
                if(category == ""){
                    $('.category-validate').html('The category field is required.');
                    $('.category-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.category-validate').html('');
                    $('.category-validate').removeClass('field-error');                    
                }

                var subject = $('input[name=subject]').val();
                if(subject == ""){
                    $('.subject-validate').html('The subject field is required.');
                    $('.subject-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.subject-validate').html('');
                    $('.subject-validate').removeClass('field-error');
                }

                var description = $('#description').val();
                if(description == ""){
                    $('.description-validate').html('The description field is required.');
                    $('.description-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.description-validate').html('');
                    $('.description-validate').removeClass('field-error');                    
                }                

                var priorityLevel = $('#priority-level').val();
                if(priorityLevel == ""){
                    $('.priority-level-validate').html('The priority level field is required.');
                    $('.priority-level-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.priority-level-validate').html('');
                    $('.priority-level-validate').removeClass('field-error');
                } 

                var images = $('#screen-shot-images').val();
                if(images == ""){
                    $('.images-validate').html('The images field is required.');
                    $('.images-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.images-validate').html('');
                    $('.images-validate').removeClass('field-error');
                }                                                                                         

                if(formError == false){
                    $('.issue-form').submit()                    
                }
            });            
        });                
    </script>
@stop
