@extends('layouts.app')

<!-- styles -->
@section('styles')
<style type="text/css">
	.p-30 {padding: 30px!important; } 
	/*   margin bottom  */
	.m-b-0 {margin-bottom: 0px!important;} 	
	.media-text-right{
		text-align: right;
	}
	.media-body p {
	    color: #99abb4;
	    line-height: 15px;
	}	
	.dash-images{
		width: 50px;
	}
</style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        @if(Auth::User()->role->first()->name == "admin")
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/school.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $appCount['school'] }}</h2>
                                <p class="m-b-0">Schools</p>
                            </div>
                        </div>
                    </div> 
                </div>                
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/vendor.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $appCount['vendor'] }}</h2>
                                <p class="m-b-0">Vendors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/employee.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $appCount['franchise'] }}</h2>
                                <p class="m-b-0">Franchise</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/off-emp.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $appCount['offemployer'] }}</h2>
                                <p class="m-b-0">Office Employee</p>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>        
        @endif

        @if(Auth::User()->role->first()->name == "school")
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/student.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $schoolFeeDetails->student_strength }}</h2>
                                <p class="m-b-0">Total Students</p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/money.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $schoolFeeDetails->monthly_fees }} Rs</h2>
                                <p class="m-b-0">Service Charges Student / Month </p>
                            </div>
                        </div>
                    </div>
                </div>                              
                <div class="col-md-4">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <img class="dash-images" src="{{ asset('images/rupee-indian.png') }}">
                            </div>
                            <div class="media-body media-text-right">
                                <h2>{{ $balanceServiceFeeAmount }} Rs</h2>
                                <p class="m-b-0">Service Fee's Pending Amount</p>
                            </div>
                        </div>
                    </div> 
                </div>                                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="service-doc" style="text-align: center;">
                        @if($serviceDoc)
                            <a class="btn btn-info btn-flat" href="{{ asset('service/document/')}}/{{ $serviceDoc->documents }}"><i class="icon-download"></i> Service Agreement</a>                        
                        @else
                            <a class="btn btn-info btn-flat" href="javascript:void(0)"><i class="icon-download"></i> Service Agreement</a>                        
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
