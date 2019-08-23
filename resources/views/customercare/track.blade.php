@extends('layouts.app')

<!-- styles -->
@section('styles')
    <style type="text/css">
        .chart-box{
            border: 1px solid #3BAFDA;
            padding: 15px;       
            overflow-y: auto;
            height: 500px;             
        }
        .school-text{
            background-color: rgb(42, 211, 169);
            /*width: 150px;*/
            padding: 12px;
            margin: 5px;
            border-radius: 9px;
            font-size: 12px;            
        }
        .school-text p{
            margin-bottom:5px;         
        }        
        .staff-text{
            background-color: #f2f2fb;
            /*width: 150px;*/
            padding: 12px;
            margin: 5px;
            border-radius: 9px;
            font-size: 12px;            
        }
        .staff-text p{
            margin-bottom:5px;          
        }              
    </style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ISSUE DETAILS</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="row">
                        <div class="col-md-3"><b>TRACK ID : </b>{{ $details->track_id }}</div>
                        @php $school = App\Models\School::where('id',$details->school_id)->first(); @endphp
                        <div class="col-md-3"><b>SCHOOL NAME : </b>{{ $school->school_name }}</div>
                        <div class="col-md-3"><b>ISSUE STATUS : </b>@if($details->status == 0) Initiate @elseif($details->status == 1) Processing @elseif($details->status == 2) Hold @else Closed @endif</div>
                        <div class="col-md-3"><b>CATEGORY : </b>{{ $details->category }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3"><b>PRIORITY LEVEL : </b>{{ $details->priority }}</div>
                        <div class="col-md-3"><b>SUBJECT : </b>{{ $details->subject }}</div>
                        <div class="col-md-6"><b>DESCRIPTION : </b>{{ $details->description }}</div>
                    </div> 
                    <hr>  
                    <div class="row">
                        <div class="col-md-12">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">                    
                            @if(Auth::User()->role->first()->name == "school")
                                <!-- Reply status -->
                                <form method="post" class="reply-issue-form" action="{{ route('replyIssue') }}" enctype="multipart/form-data">
                                    <!-- CSRF field -->
                                    {{csrf_field()}}
                                    <input type="hidden" name="care_id" value="{{ $details->id }}">
                                    <input type="hidden" name="role" value="school">
                                    <input type="hidden" name="close_duration" value="">
                                    <h5>UPDATE STATUS</h5>
                                    <hr>

                                    <!-- Reply Status -->
                                    <div class="form-group">
                                        <label>Reply Status</label>
                                        <select class="form-control" name="reply_status" id="reply-status">
                                            <option value=""> ---Reply Status--- </option>
                                            <option value="Thank You">Thank You</option>
                                            <option value="Re-Issue">Re-Issue</option>
                                        </select>                                    
                                        <span class="reply-status-validate"></span> 
                                        @if ($errors->has('reply_status'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('reply_status') }}</strong>
                                            </span>
                                        @endif                             
                                    </div> 

                                    <!-- Reply Message -->
                                    <div class="form-group">
                                        <label>Reply Message</label>
                                        <textarea  name="comments" id="comments" rows="4" cols="50" style="resize: none;"></textarea>                                                                      
                                        <span class="comments-validate"></span> 
                                        @if ($errors->has('comments'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('comments') }}</strong>
                                            </span>
                                        @endif                             
                                    </div> 

                                    <div class="form-group">
                                        <button class="btn btn-success update-issue" style="float: right;" type="button"><i class="icon-pencil"></i> Update</button>
                                    </div>                                                         
                                </form>
                            @endif
                            @if(Auth::User()->role->first()->name == "office-staff")
                                <!-- Reply status -->
                                <form method="post" class="reply-issue-form" action="{{ route('replyIssue') }}" enctype="multipart/form-data">
                                    <!-- CSRF field -->
                                    {{csrf_field()}}
                                    <input type="hidden" name="care_id" value="{{ $details->id }}">
                                    <input type="hidden" name="role" value="office-staff">
                                    <h5>UPDATE STATUS</h5>
                                    <hr>
                                    <!-- Request Closed Duration -->
                                    <div class="form-group">
                                        <label>Request Closed Duration</label>
                                        <select class="form-control" name="close_duration" id="close-duration">
                                            <option value=""> ---Select Request Closed Duration--- </option>
                                            <option value="None">None</option>
                                            <option value="One Hour">One Hour</option>
                                            <option value="One Day">One Day</option>
                                            <option value="Two Or Three Days">Two Or Three Days</option>
                                            <option value="One Week">One Week</option>
                                            <option value="One Month">One Month</option>
                                        </select>                                    
                                        <span class="close-duration-validate"></span> 
                                        @if ($errors->has('close_duration'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('close_duration') }}</strong>
                                            </span>
                                        @endif                             
                                    </div> 

                                    <!-- Reply Status -->
                                    <div class="form-group">
                                        <label>Reply Status</label>
                                        <select class="form-control" name="reply_status" id="reply-status">
                                            <option value=""> ---Reply Status--- </option>
                                            <option value="Process">Process</option>
                                            <option value="Hold">Hold</option>
                                            <option value="Closed">Closed</option>
                                        </select>                                    
                                        <span class="reply-status-validate"></span> 
                                        @if ($errors->has('reply_status'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('reply_status') }}</strong>
                                            </span>
                                        @endif                             
                                    </div>                                    

                                    <!-- Comments -->
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea  name="comments" id="comments" rows="4" cols="50" style="resize: none;"></textarea>                                                                      
                                        <span class="comments-validate"></span> 
                                        @if ($errors->has('comments'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('comments') }}</strong>
                                            </span>
                                        @endif                             
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success update-issue" style="float: right;" type="button"><i class="icon-pencil"></i> Update</button>
                                    </div>                              
                                </form>
                            @endif
                        </div>  
                        <h5>CHART DETAILS</h5>
                        <div class="col-md-8 chart-box">
                            <div class="row">
                                <div class="col-md-6 school-text" style="float: left;">
                                    <a download="{{ asset('issue/images/')}}/{{ $details->images }}" href="{{ asset('issue/images/')}}/{{ $details->images }}"><img src="{{ asset('issue/images/')}}/{{ $details->images }}" style="width: 30%;"></a>
                                    <p>{{ $details->description }}</p>
                                    <p>{{ $details->created_at }}</p>
                                </div>
                                @foreach($notes as $note)
                                    @if($note->updated_by_id == Auth::user()->id)
                                        <div class="col-md-6 school-text" style="float: left;">
                                    @else
                                        <div class="col-md-6 staff-text" style="float: right;">               
                                    @endif
                                        <p><b>Status : </b>{{ $note->reply_status }}</p>
                                        <p>{{ $note->comments }}</p>
                                        <p>{{ $note->created_at }}</p> 
                                    </div>                                   
                                @endforeach                                                         
                            </div>
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
            
            // add new employer
            $(document).on("click",".update-issue",function() {
                var formError = false;

                var role = $('input[name=role]').val();
                if(role == ""){
                    $('.role-validate').html('The category field is required.');
                    $('.category-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.role-validate').html('');
                    $('.role-validate').removeClass('field-error');                    
                }

                var closeDuration = $('#close-duration').val();
                if(closeDuration == ""){
                    $('.close-duration-validate').html('The close duration field is required.');
                    $('.close-duration-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.close-duration-validate').html('');
                    $('.close-duration-validate').removeClass('field-error');
                }

                var replyStatus = $('#reply-status').val();
                if(replyStatus == ""){
                    $('.reply-status-validate').html('The reply status field is required.');
                    $('.reply-status-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.reply-status-validate').html('');
                    $('.reply-status-validate').removeClass('field-error');
                }

                var comments = $('#comments').val();
                if(comments == ""){
                    $('.comments-validate').html('The comments field is required.');
                    $('.comments-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.comments-validate').html('');
                    $('.comments-validate').removeClass('field-error');                    
                }                                                                                                  

                if(formError == false){
                    $('.reply-issue-form').submit()                    
                }
            });            
        });                
    </script>
@stop
