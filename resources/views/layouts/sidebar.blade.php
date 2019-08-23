<!-- / main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
  	<div class="main-menu-content">
	    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            @if(Auth::User()->role->first()->name == "admin")
                <li class="active nav-item"><a href="{{ route('dashboard') }}"><span class="menu-title">Dashboard</span></a></li>
                <li class="active nav-item"><a href="{{ route('vendorList') }}"><span class="menu-title">Vendor</span></a></li>   
                <li class="active nav-item"><a href="{{ route('addNewFranchise') }}"><span class="menu-title">Franchise</span></a></li>                         
                <li class="active nav-item"><a href="{{ route('schoolList') }}"><span class="menu-title">School</span></a></li>             
                <li class="active nav-item"><a href="{{ route('employerList') }}"><span class="menu-title">Employee</span></a></li>
                <li class="active nav-item"><a href="{{ route('officeEmployerList') }}"><span class="menu-title">Office Staff</span></a></li>   

                <!-- Collection -->
               <li class="active nav-item"><a href=""><span class="menu-title">Collection</span></a>
                    <ul class="menu-content">   
                        <li>
                            <a href="{{ route('overAllSchoolPayment') }}" class="menu-item">Over All Payment</a>
                        </li>                                                
                    </ul>
                </li>                                             
            @endif

            @if(Auth::User()->role->first()->name == "employer")
                <li class="active nav-item"><a href="{{ route('dashboard') }}"><span class="menu-title">Dashboard</span></a></li>
            @endif

            @if(Auth::User()->role->first()->name == "office-staff")
                <li class="active nav-item"><a href="{{ route('dashboard') }}"><span class="menu-title">Dashboard</span></a></li>
                <li class="active nav-item"><a href="{{ route('officeStaffSchoolPayment') }}"><span class="menu-title">Collection</span></a></li>                 
                <li class="active nav-item"><a href="{{ route('customerCareList') }}"><span class="menu-title">Customer Care</span></a></li>
                <li class="active nav-item"><a href="{{ route('serviceDocumentList') }}"><span class="menu-title">Service Agreement</span></a></li>                
            @endif 

            @if(Auth::User()->role->first()->name == "school")
                @php 
                    $school  =  App\Models\School::where('user_id',Auth::user()->id)->first(); 
                    $schoolSlug  = $school->school_id; 
                @endphp
                <li class="active nav-item"><a href="{{ route('dashboard') }}"><span class="menu-title">Dashboard</span></a></li>
                <!-- Collection -->
                <li class="active nav-item"><a href=""><span class="menu-title">Payment</span></a>
                    <ul class="menu-content">                          
                        <li>
                            <a href="{{ route('schoolPayment') }}" class="menu-item">Pay</a>
                        </li>
                        <li>
                            <a href="{{ route('schoolPaymentHistory',$schoolSlug) }}" class="menu-item">Payment History</a>
                        </li>                        
                    </ul>
                </li>
                <li class="active nav-item"><a href="{{ route('customerCareList') }}"><span class="menu-title">Customer Care</span></a></li>                                
            @endif                                    
	    </ul>
  	</div>
</div>
