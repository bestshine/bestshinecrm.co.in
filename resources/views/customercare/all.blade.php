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
        .custom-box{
            border: 1px solid #3BAFDA;
            text-align: center;
            padding: 15px;              
        }
        .custom-box p{
            margin:0px;             
        }        
        .div-box{
            border: 1px solid #3BAFDA;
            padding: 15px;      
            cursor:pointer; 
            margin-top: 10px;           
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
                <h4 class="card-title">ISSUE LIST</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="row">
                        <div class="col-md-2 select-div">
                            <div class="click-box active-div" data-id="new-issue">NEW ISSUE</div>
                        </div>
                        <div class="col-md-2 select-div">
                            <div class="click-box" data-id="process-issue">PROCESS ISSUE</div>
                        </div> 
                        <div class="col-md-2 select-div">
                            <div class="click-box" data-id="hold-issue">HOLD ISSUE</div>
                        </div> 
                        <div class="col-md-2 select-div">
                            <div class="click-box" data-id="close-issue">CLOSE ISSUE</div>
                        </div>                                                   
                        <div class="col-md-2 select-div">
                            <div class="click-box" data-id="re-issue">RE ISSUE</div>
                        </div>                                                
                        <div class="col-md-2 select-div">
                            <div class="click-box" data-id="report-issue">REPORT</div>
                        </div>
                    </div>
                    <div class="new-issue">
                        @foreach($newIssues as $newIssue)
                            <div class="div-box">
                                <p><b>CATEGORY : </b>{{ $newIssue->category }}</p>
                                <p><b>PRIORITY LEVEL : </b>{{ $newIssue->priority }}</p>
                                <p><b>SUBJECT : </b>{{ $newIssue->subject }}</p>
                                <p><b>DESCRIPTION : </b>{{ $newIssue->description }}</p>
                                <a href="{{ route('getCustomerCareDetails',$newIssue->track_id) }}">Read more >></a>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <div class="process-issue" style="display: none;">
                        <div class="row">
                            @foreach($processIssues as $processIssue)
                                <div class="div-box">
                                    <p><b>CATEGORY : </b>{{ $processIssue->category }}</p>
                                    <p><b>PRIORITY LEVEL : </b>{{ $processIssue->priority }}</p>
                                    <p><b>SUBJECT : </b>{{ $processIssue->subject }}</p>
                                    <p><b>DESCRIPTION : </b>{{ $processIssue->description }}</p>
                                    <a href="{{ route('getCustomerCareDetails',$processIssue->track_id) }}">Read more >></a>
                                </div>
                            @endforeach
                        </div>                         
                    </div>  
                    <div class="hold-issue" style="display: none;">
                        <div class="row">
                            @foreach($holdIssues as $holdIssue)
                                <div class="div-box">
                                    <p><b>CATEGORY : </b>{{ $holdIssue->category }}</p>
                                    <p><b>PRIORITY LEVEL : </b>{{ $holdIssue->priority }}</p>
                                    <p><b>SUBJECT : </b>{{ $holdIssue->subject }}</p>
                                    <p><b>DESCRIPTION : </b>{{ $holdIssue->description }}</p>
                                    <a href="{{ route('getCustomerCareDetails',$holdIssue->track_id) }}">Read more >></a>
                                </div>
                            @endforeach
                        </div>                         
                    </div> 
                    <div class="close-issue" style="display: none;">
                        <div class="row">
                            @foreach($closeIssues as $closeIssue)
                                <div class="div-box">
                                    <p><b>CATEGORY : </b>{{ $closeIssue->category }}</p>
                                    <p><b>PRIORITY LEVEL : </b>{{ $closeIssue->priority }}</p>
                                    <p><b>SUBJECT : </b>{{ $closeIssue->subject }}</p>
                                    <p><b>DESCRIPTION : </b>{{ $closeIssue->description }}</p>
                                    <a href="{{ route('getCustomerCareDetails',$closeIssue->track_id) }}">Read more >></a>
                                </div>
                            @endforeach
                        </div>                         
                    </div>                                                          
                    <div class="re-issue" style="display: none;">
                        <div class="row">
                            @foreach($reIssues as $reIssue)
                                <div class="div-box">
                                    <p><b>CATEGORY : </b>{{ $reIssue->category }}</p>
                                    <p><b>PRIORITY LEVEL : </b>{{ $reIssue->priority }}</p>
                                    <p><b>SUBJECT : </b>{{ $reIssue->subject }}</p>
                                    <p><b>DESCRIPTION : </b>{{ $reIssue->description }}</p>
                                    <a href="{{ route('getCustomerCareDetails',$reIssue->track_id) }}">Read more >></a>
                                </div>
                            @endforeach
                        </div>                         
                    </div>
                    <div class="report-issue" style="display: none;">
                        <div class="row custom-box">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <p>NEW ISSUE - {{ $overAllReport['newIssueCount'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <p>PROCESS ISSUE - {{ $overAllReport['processingIssueCount'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <p>HOLD ISSUE - {{ $overAllReport['holdIssueCount'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <p>CLOSED ISSUE - {{ $overAllReport['closeIssueCount'] }}</p>
                            </div>
                            <div class="col-md-2">
                                <p>RE ISSUE - {{ $overAllReport['reIssueCount'] }}</p>
                            </div>  
                            <div class="col-md-1"></div>                          
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
                    $(".re-issue").css("display","none");
                    $(".process-issue").css("display","none");
                    $(".hold-issue").css("display","none");
                    $(".close-issue").css("display","none");
                    $(".report-issue").css("display","none");
                }
                if(id == "re-issue"){
                    $(".re-issue").css("display","block");
                    $(".new-issue").css("display","none");
                    $(".process-issue").css("display","none");
                    $(".hold-issue").css("display","none");     
                    $(".close-issue").css("display","none");               
                    $(".report-issue").css("display","none");
                }
                if(id == "process-issue"){
                    $(".process-issue").css("display","block");
                    $(".new-issue").css("display","none");
                    $(".re-issue").css("display","none");
                    $(".hold-issue").css("display","none"); 
                    $(".close-issue").css("display","none");                   
                    $(".report-issue").css("display","none");
                }    
                if(id == "hold-issue"){
                    $(".hold-issue").css("display","block");
                    $(".new-issue").css("display","none");
                    $(".re-issue").css("display","none");
                    $(".process-issue").css("display","none");  
                    $(".close-issue").css("display","none");                  
                    $(".report-issue").css("display","none");
                }
                if(id == "close-issue"){
                    $(".close-issue").css("display","block");
                    $(".new-issue").css("display","none");
                    $(".re-issue").css("display","none");
                    $(".process-issue").css("display","none");                    
                    $(".hold-issue").css("display","none");                    
                    $(".report-issue").css("display","none");
                }                                             
                if(id == "report-issue"){
                    $(".report-issue").css("display","block");
                    $(".new-issue").css("display","none");
                    $(".re-issue").css("display","none");
                    $(".process-issue").css("display","none");
                    $(".hold-issue").css("display","none");
                    $(".close-issue").css("display","none");                    
                }                
            });                                
        });                
    </script>
@stop
