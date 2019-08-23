<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<title>BEC-Pricing</title>
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/bs-slider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ url('tuttee/css/font-awesome.css') }}"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,500i,700" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,500,600,700,800,900" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<script src="https://use.fontawesome.com/c7a7b2acb2.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="{{ url('tuttee/js/js.js')}}"></script>
   <script src="{{ url('tuttee/js/wow.min.js')}}"></script>
   <script>
              new WOW().init();
              </script> 
  <link rel="shortcut icon" type="text/css" href="{{url('tuttee/images/images/fav-ico.ico')}}">
</head>

<body>
<!-- Wrap all page content here -->
<div id="wrap" class="pricing-wr">
  <div class="nav-sec-wr">
     <header class="masthead">
    <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <a class="navbar-brand" href="{{route('/')}}"><img class="main-hd-logo" src="{{url('tuttee/images/logo.png')}}" alt="Bestshine Edu App"></a>
      </div>
      <div class="col-sm-6 help-div">
        <div class="pull-right  hidden-xs">    
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3><i class="fa fa-info-circle" aria-hidden="true"></i></h3></a>
          <ul class="dropdown-menu">
              <li><a href="{{route('contact')}}"><i class="fa fa-mobile" aria-hidden="true"></i></i>get in touch</a></li>
              <li><a href="http://bestshineeduapp.com/assets/BestShineEduAppPPT.pptx"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>download ppt</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</header>
  
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-spy="affix" data-offset-top="85"> <!-- data-spy="affix" data-offset-top="85" -->
        <div class="container">
           <div class="page-loader progress-container">
              <div class="progress-bar" id="myBar"></div>
            </div>
                  <ul class="nav navbar-nav nav-justified m-nav-ul">
                            <li><a href="{{route('/')}}" class="">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li> <a href="{{route('services')}}">Services</a></li>
                            <li class="dropdown">
                            <a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{route('features')}}">Features
                            <!-- <span class="v_algn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> --></a>
                            <!--<ul class="dropdown-menu">
                              <li><a href="#"></a></li>
                              <li><a href="#">Page 1-2</a></li>
                              <li><a href="#">Page 1-3</a></li>
                            </ul>-->
                            </li>
                            <li class="dropdown active">
                            <a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{route('pricing')}}">Pricing
                            <!-- <span class="v_algn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> --></a>
                            <!--<ul class="dropdown-menu">
                              <li><a href="#"></a></li>
                              <li><a href="#">Page 1-2</a></li>
                              <li><a href="#">Page 1-3</a></li>
                            </ul>-->
                            </li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Franchisee
                             <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                             <li><a href="{{route('Demo_form')}}">Demo Application</a></li>
                              <li><a href="{{route('schoolvisit')}}">School Visit Form</a></li>
                              <li><a href="http://localhost:8000/tuttee/BEC-BDO-APPLICATION.pdf" download>GET BDO Enquiury Form</a></li>
                              <li><a href="{{route('service_agreement')}}">Service Agreement</a></li>
                              <!-- <li><a href="{{route('franchiess')}}">Franchiess Enquiry</a></li> -->
                            </ul>
                          </li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                           <li><a href="{{route('home')}}" target="blank">Login <span><i class="fa fa-bars" aria-hidden="true"></i></span></a></li>
      </ul>

        </div>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div>
  </div>
<!--/.navbar -->
<!--  -->

  <!--  -->
  <div class="sub-page wrapper hidden-xs">
   
  </div>
<!-- <div class="divider"></div> -->
<section class="sec-1 pricing-sec-wr">
   <div class="container">
    <!-- test -->
      <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Micro</h3>
                            <div class="price-value">
                                <span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>5</span>
                                <span class="month">/Student <br>per Month</span>
                            </div>
                        </div>
                        <!-- <ul class="pricing-content">
                            <li><b>50 GB</b> Disk Space</li>
                            <li><b>50</b> Email Accounts</li>
                            <li><b>50 GB</b> Monthly Bandwidth</li>
                            <li><b>10</b> Subdomains</li>
                            <li><b>15</b> Domains</li>
                        </ul> -->
                        <b>* GST Applicable</b>
                        <a href="#pricing-plan" class="pricingTable-signup">view Features</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Basic</h3>
                            <div class="price-value">
                                <span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>10</span>
                                <span class="month">/Student <br>per Month</span>
                            </div>
                        </div>
                        <!-- <ul class="pricing-content">
                            <li><b>60 GB</b> Disk Space</li>
                            <li><b>60</b> Email Accounts</li>
                            <li><b>60 GB</b> Monthly Bandwidth</li>
                            <li><b>15</b> Subdomains</li>
                            <li><b>20</b> Domains</li>
                        </ul> -->
                         <b>* GST Applicable</b>
                        <a href="#pricing-plan" class="pricingTable-signup">view Features</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Standard</h3>
                            <div class="price-value">
                                <span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>15</span>
                                 <span class="month">/Student <br>per Month</span>
                            </div>
                        </div>
                         <b>* GST Applicable</b>
                        <a href="#pricing-plan" class="pricingTable-signup">view Features</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Premium</h3>
                            <div class="price-value">
                                <span class="amount"><i class="fa fa-inr" aria-hidden="true"></i>25</span>
                                 <span class="month">/Student <br>per Month</span>
                            </div>
                        </div>
                         <b>* GST Applicable</b>
                        <a href="#pricing-plan"  class="pricingTable-signup">view Features</a>
                    </div>
                </div>
            </div>

    <!-- test -->
      <div class="row">
        <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Pricing<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <p class="">
               We provide affordable and transparent price structure for our customers. Below are the charges as per the plan according to the available generous features. 
            </p>
        </div>
      </div>
  </div>
</section>
<section class="pad-t-3">

<div class="container">
    <div class="row" id="pricing-plan">
        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
            <div class="row">
              <div class="col-xs-3 my_planHeader my_plan-mic">
                  <!-- <img class="tab-img wow animated fadeInLeft" style="animation-delay: 0.2s"  src="{{url('tuttee/images/images/man-cycling.png')}}"> -->
                    <div class="my_planTitle">Micro</div>
                </div>
                <div class="col-xs-3 my_planHeader my_plan1">
                  <!-- <img class="tab-img wow animated fadeInLeft" style="animation-delay: 0.2s"  src="{{url('tuttee/images/images/man-cycling.png')}}"> -->
                    <div class="my_planTitle">Basic</div>
                    <!-- <div class="my_planPrice">Free</div> -->
                    <!-- <div class="my_planDuration"> </div> -->
                    
                </div>
                <div class="col-xs-3 my_planHeader my_plan2">
                  <!-- <img class="tab-img wow animated fadeInLeft" style="animation-delay: 0.4s"  src="{{url('tuttee/images/images/car.png')}}"> -->
                    <div class="my_planTitle">Standard</div>
                    <!-- <div class="my_planPrice">2€</div> -->
                  <!--   <div class="my_planDuration">per month</div> -->
                    
                </div>
                <div class="col-xs-3 my_planHeader my_plan3">
                  <!-- <img class="tab-img wow animated fadeInLeft" style="animation-delay: 0.6s" src="{{url('tuttee/images/images/flight.png')}}"> -->
                    <div class="my_planTitle">Premium</div>
                    <!-- <div class="my_planPrice">3.75€</div> -->
                   <!--  <div class="my_planDuration">per month</div> -->
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
           Web app login facility<br>
            1) admin management<br>
            2) User role management
            non teaching<br>
            3) Teaching staff
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
              <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i  class="fa "></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-times not-check"></i>
                    <br>
                    <i class="fa fa-times not-check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                    <i  class="fa "></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                     
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                   <i  class="fa "></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                     
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                     <i  class="fa "></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
            Mobile app login facility<br>
            1) Student<br>
            2) Teacher<br>
            3) Parent<br>
            4) Driver
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
              <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i  class="fa "></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-times not-check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-times not-check"></i>  
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                    <i  class="fa "></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-times not-check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                    <i class="fa"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                    <i class="fa"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                    <br>
                    <i class="fa fa-check my_check"></i>
                </div>
            </div>
        </div>
    </div>
        <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
            Dashboard
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
               <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                    <i class="fa fa-check my_check"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
           Master
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
              <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                    <i class="fa fa-check my_check"></i>
                </div>
                <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                    <i class="fa fa-check my_check"></i>
                </div>
            </div>
        </div>
    </div>
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Employee
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                   </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Student
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                     </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>        
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Student Attendance
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                   </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Employee Attendance
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Notification
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                     </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div> 
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Exam Timetable
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Class Timetable
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Teacher Timetable
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               User role
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Upload data manager
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                     </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Export manager
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Homework
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Post
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                  </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Gallery
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                   </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Text SMS
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Student leave request
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Feed back
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Share
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Fees
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Result
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Knowledge bank
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>     
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Report
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Voice SMS
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Bus tracking
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Library
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>               
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Transport managent
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                      <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                payroll
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Daily Expenditure
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Stock management
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
                Lab managent
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div> 
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               inventory management
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-times not-check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                       <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-times not-check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  
         <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               <b>Add-on</b>
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Online Test
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
               Neet Exam
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row my_featureRow">
            <div class="col-xs-12 col-sm-4 my_feature">
              Website
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="row">
                  <div class="col-xs-3 col-sm-3 my_planFeature my_plan-mic" data-toggle="tooltip" title="micro">
                    <i class="fa fa-check my_check"></i>
                </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan1" data-toggle="tooltip" title="Basic">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan2" data-toggle="tooltip" title="Standard">
                        <i class="fa fa-check my_check"></i>
                    </div>
                    <div class="col-xs-3 col-sm-3 my_planFeature my_plan3" data-toggle="tooltip" title="Premium">
                        <i class="fa fa-check my_check"></i>
                    </div>
                </div>
            </div>
        </div>  

</div>
<section>
  <div class="container add-on-wr">
        <div class="row">
        <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Add-on Services<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <div class="add-on-pricing-wr row card">
                                  <div class="plan-container col-md-4">
                                            <div class="plan-header plan-header-voice">
                                              <!-- <div class="icon-box"><i class="fa fa-users icon"></i></div> -->
                                              <h2>Voice message service</h2>
                                              
                                            </div>
                                            <div class="rate-wr text-center">
                                               <p class="add-on-rate text-center">30 paisa/per message</p>
                                            </div>
                                            <div class="plan-details">
                                              <!-- <ul>
                                                <li>Unlimited <span>Awesomeness</span></li>
                                                <li>Unlimited <span>Coolness</span></li>
                                                <li>Unlimited <span>Cuteness</span></li>
                                                <li>Unlimited <span>Freebies</span></li>
                                              </ul> -->
                                              <p class="col-md-12">We provide pre-recorded message services at 30 paise per message for any social campaigning, business promotions, marketing campaigns, latest updates etc., Voice message can be sent to multiple customers with track records. </p>
                                              <button><a style="color: white;text-decoration: none" href="{{route('contact')}}">Get Plan</a><!-- <i class="fa fa-arrow-right"></i> --></button>
                                            </div>
                                  </div>

                                  <div class="plan-container col-md-4">
                                            <div class="plan-header plan-header-sms">
                                              <!-- <div class="icon-box"><i class="fa fa-users icon"></i></div> -->
                                              <h2>SMS Service</h2>
                                              
                                            </div>
                                            <div class="rate-wr text-center">
                                               <p class="add-on-rate text-center">15 paisa/per sms</p>
                                            </div>
                                            <div class="plan-details">
                                              <!-- <ul>
                                                <li>Unlimited <span>Awesomeness</span></li>
                                                <li>Unlimited <span>Coolness</span></li>
                                                <li>Unlimited <span>Cuteness</span></li>
                                                <li>Unlimited <span>Freebies</span></li>
                                              </ul> -->
                                              <p class="col-md-12">We provide message services at 15 paise per message for any social campaigning, business promotions, marketing campaigns, latest updates etc., SMS with personalized text in either English or any regional language. You will also have the privilege of 13 paise per message if the total text message exceeds 5,00,000.  </p>
                                              <button><a style="color: white;text-decoration: none" href="{{route('contact')}}">Get Plan</a><!-- <i class="fa fa-arrow-right"></i> --></button>
                                            </div>
                                  </div>

                                  <div class="plan-container  col-md-4">
                                            <div class="plan-header plan-header-web">
                                              <!-- <div class="black-wr"></div> -->
                                              <div class="icon-box"></div>
                                              <h2>Web site</h2>
                                            </div>
                                            <div class="full-width-left">
                                                <div class="rate-wr col-md-6 col-sm-6 col-xs-12 text-center basic-wr-pricing">
                                                     <p class="add-on-rate text-center">Basic</p>
                                                     <div class="add-on-rate">
                                                       Rs:3000
                                                     </div>
                                                </div>
                                                <div class="rate-wr col-md-6 col-sm-6 col-xs-12 text-center standard-wr-pricing">
                                                   <p class="add-on-rate text-center">Standard</p>
                                                   <div class="add-on-rate">
                                                     Rs:5000
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="plan-details">
                                              <!-- <ul>
                                                <li>Unlimited <span>Awesomeness</span></li>
                                                <li>Unlimited <span>Coolness</span></li>
                                                <li>Unlimited <span>Cuteness</span></li>
                                                <li>Unlimited <span>Freebies</span></li>
                                              </ul> -->
                                              <p class="col-md-12">We also help to build websites according to the school requirements with two standard pricing formats, Basic designing at Rs 3,000 and Standard designing at Rs 5,000.</p>
                                               <button><a style="color: white;text-decoration: none" href="{{route('contact')}}">Get Plan</a><!-- <i class="fa fa-arrow-right"></i> --></button>
                                            </div>
                                  </div>
               </div>
        </div>
              <div class="add-on-pricing-wr upcoming-add-on-pricing-wr row card">
                                 <div class="plan-container up-plan-container col-md-4">
                                            <div class="plan-header plan-header-neet">
                                              <!-- <div class="icon-box"><i class="fa fa-users icon"></i></div> -->
                                              <h2>NEET</h2>
                                              <span class="new-gif-wr"><img src="{{url('tuttee/images/images/new-gif.gif')}}"></span>
                                              
                                            </div>
                                            <div class="rate-wr text-center">
                                               <p class="add-on-rate text-center"><!-- Coming soon --></p>
                                            </div>
                                            <div class="plan-details">
                                              <!-- <ul>
                                                <li>Unlimited <span>Awesomeness</span></li>
                                                <li>Unlimited <span>Coolness</span></li>
                                                <li>Unlimited <span>Cuteness</span></li>
                                                <li>Unlimited <span>Freebies</span></li>
                                              </ul> -->
                                              <p class="col-md-12">We also provide NEET exams model question papers along with answers. With just a simple signup you can practise and analyse your study pattern for the improvement. Feel free to contact us for your preparations. </p>
                                               <button><a style="color: white;text-decoration: none" href="{{route('contact')}}">Get Plan</a><!-- <i class="fa fa-arrow-right"></i> --></button>
                                            </div>
                                  </div>

                                  <div class="plan-container up-plan-container col-md-4">
                                            <div class="plan-header plan-header-online">
                                              <!-- <div class="icon-box"><i class="fa fa-users icon"></i></div> -->
                                              <h2>ONLINE TEST</h2>
                                               <span class="new-gif-wr"><img src="{{url('tuttee/images/images/new-gif.gif')}}"></span>
                                              
                                            </div>
                                            <div class="rate-wr text-center">
                                               <p class="add-on-rate text-center"><!-- Coming soon --></p>
                                            </div>
                                            <div class="plan-details">
                                              <!-- <ul>
                                                <li>Unlimited <span>Awesomeness</span></li>
                                                <li>Unlimited <span>Coolness</span></li>
                                                <li>Unlimited <span>Cuteness</span></li>
                                                <li>Unlimited <span>Freebies</span></li>
                                              </ul> -->
                                              <p class="col-md-12">Online test in multiple choice question formats along with answer keys are available for students, either subject wise or class wise. Tests are auto checked and results are provided immediately with reports.  </p>
                                              <button><a style="color: white;text-decoration: none" href="{{route('contact')}}">Get Plan</a><!-- <i class="fa fa-arrow-right"></i> --></button>
                                            </div>
                                  </div>        
               </div>
      </div>    
  </div>
</section>


</div>
 




<!-- 
<section class="pd-0">
  <div class="blu-bg-wr">
   <a href="#"> <img src="{{url('tuttee/images/images/sys-bg2.png')}}" class="blu-bg"></a>
 </div>
 
</section> -->





<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a></li>
</ul>
<footer class="container-fluid relative">
  <div class="container">
    <div class="row">
      <div class="get-in-touch col-md-6 r-side-br text-center">
      <!--   <h3>GET IN TOUCH....</h3> -->
        <span class="white sub-head">Subscribe to our newsletter</span>
         <form>
           <div class="input-group pad-t-3 mr-0-a">
              <input class="btn btn-lg" name="email" id="email" type="email" placeholder="E-mail" required="">
              <button class="btn sub-btn btn-primary btn-lg" type="submit"> Subscribe </button>
            </div>
         </form>
      </div>

      <div class="col-md-6 footer-blck text-center">
  

                <!--Grid column-->
                <div class="">
                  <span class="white sub-head">Get connected with us on !</span>
                    <!-- <h6 class="white text-center"><span class="sub-head">Get connected with us on !</span></h6> -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-12 text-center social-ic-ft">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0 animated wow fadeInRight" style="animation-delay: 0.2"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.6"> </i></a>
                    <!--Linkedin-->
                    <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text mr-lg-4 wow fadeInRight" style="animation-delay: 0.8"> </i></a>
                    <!--Instagram-->
                    <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text mr-lg-4 wow fadeInRight" style="animation-delay: 1"> </i></a>
                </div>
                <!--Grid column-->

  </div>
     
    </div>
    
    
  </div>
  <div class="footer-copyright text-center">
        <!--  -->
            © 2017 Copyright: <a href="{{route('/')}}"><strong style="color:#efbf0b;">Bestshine Education campus Pvt.Ltd</strong></a> All rights reserved.
        </div>
    </div>

</footer>
 <script src="{{ url('tuttee/js/particles/particles.js')}}"></script>
<script src="{{ url('tuttee/js/particles/app.js')}}"></script>         
   <script type="">
  $('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})

</script>  
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>     
</body>
</html>
