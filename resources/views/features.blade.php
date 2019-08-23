<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<title>BEC-Features</title>
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
<div id="wrap">
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
                          <li ><a href="{{route('/')}}" class="">Home</a></li>
                          <li><a href="{{route('about')}}">About</a></li>
                          <li> <a href="{{route('services')}}">Services</a></li>
                          <li class="dropdown active">
                            <a class="dropdown-toggle disabled" data-toggle="dropdown" href="{{route('features')}}">Features
                            <!-- <span class="v_algn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> --></a>
                            <!--<ul class="dropdown-menu">
                              <li><a href="#"></a></li>
                              <li><a href="#">Page 1-2</a></li>
                              <li><a href="#">Page 1-3</a></li>
                            </ul>-->
                          </li>
                          <li class="dropdown">
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
                           <li><a href="{{route('home')}}"  target="blank">Login <span><i class="fa fa-bars" aria-hidden="true"></i></span></a></li>
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
<section class="sec-1">
   <div class="container">
      <div class="row">
        <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Application Features<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <p class="">
               BestShine Edu App allows school administrators, teachers and parents to stay connected at all times via real time messaging. BestShine has comprehensive features ranging from user control management to multimedia messaging support. BestShine communication platform for your school helps in strengthening your school's reputation and brand. Parents connected with teachers are highly appreciative of school and get thoroughly involved in the studies of their child. By use this app Parent can make their child success with real time updates.
            </p>
        </div>
      </div>
  </div>
</section>

<section class="pad-t-3 fea-tab-wr">
 
 <div class="container">
       <div id="feature-tab" class="container">  
            <ul class="nav nav-tabs">
                  <li class="active">
                    <a  href="#1" data-toggle="tab">All</a>
                  </li>
                  <li><a href="#2" data-toggle="tab">Management</a>
                  </li>
                  <li><a href="#3" data-toggle="tab">Teacher</a>
                  </li>
                  <li><a href="#4" data-toggle="tab">Parent</a>
                  </li>
                   <li><a href="#5" data-toggle="tab">Student</a>
                  </li>
                  <li><a href="#6" data-toggle="tab">Driver</a>
                  </li>
            </ul>

      <div class="tab-content">
                <div class="tab-pane active" id="1">
                       <div class="col-md-12 home-feature-sec">
           <div class="pad-t-3 hidden-xs hidden-md">
          
          </div>
          <div class="col-md-12 text-center">
           <!--  <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2> -->
            <div class="pad-t-3">
              
            </div>
          </div>
            <ul>
              <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Admission Management</span>
                  <img src="{{url('tuttee/images/images/fe-img.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <span href=""><div class="fe-text db">Admission Management</div></span>
                          <p>Our Admission Management has made the entire Admissions process unimaginably easy and swift. The solution is designed to cater all the requirements of Admission Management.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Student Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-2.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <span><div class="fe-text db">Student Management</div></span>
                          <p>To maintain detailed student profile with changes and transformations. Schools can manage the student and parent details easily with view and edit option.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Staff Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-3.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Staff Management</div></a>
                          <p>An effective way to manage teaching or non teaching staff details. It can view or edit them quickly when they needed the entire employee details.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Fee Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-4.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Fee Management</div></a>
                          <p>No more queues to pay school fees. Pay all fees from your app or online via credit or debit card, net-banking or wallet. Our Smart fee module with e-fee payment receipt.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Attendance</span>
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Attendance</div></a>
                          <p>Our Student Attendance Module covers all the aspects related to attendance. Reports are available readily for the school and parents of individual students.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Homework</span>
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Homework</div></a>
                          <p>Assignments and homeworks can be assigned and allotted to the students using Teacher Mobile Application with real time update to parent and student.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Result Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Result Management</div></a>
                          <p>Online result management modules makes to get the complete exam schedule. See results as soon as they are published with obtained grades.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Notifications Alerts</span>
                  <img src="{{url('tuttee/images/images/fe-img-9.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Notifications Alerts</div></a>
                          <p>Smart messaging system of Bestshine Edu App delivering high volume of messages quickly & efficiently. Is one of the most expressive things to tell updates priorly.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Library Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-10.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Library Management</div></a>
                          <p>School library is an integral for teaching &apm; learning of student outcomes. A collection recorded data or books arranged for ease of use.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Report Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-11.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Report Management</div></a>
                          <p>BestShine provides highly supple and can be easily customized as per your school’s requirement, It is provided with flexible Admin panel.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Timetable</span>
                  <img src="{{url('tuttee/images/images/fe-img-12.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Timetable</div></a>
                          <p>Daily time-table will be visible to parents and students. All changes to the same will be reflected in real-time manner. It is very easy and simple to manage.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Feedback</span>
                  <img src="{{url('tuttee/images/images/fe-img-13.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Feedback</div></a>
                          <p>Teacher can send and receive feedback from / to parent according to the student performance. parent also can send and receive feedback for his children performance.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Leave Request</span>
                  <img src="{{url('tuttee/images/images/fe-img-14.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Leave Request</div></a>
                          <p>Parents can send request for student's reasonable leave by submitting the leave request form to teacher. Teacher can Approve or Deny the leave request.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Bus Tracking</span>
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Bus Tracking</div></a>
                          <p>Bestshine Edu App Mobile App allows Parent/Student to track their School Bus Live Status with user - friendly map feature and well designed interface.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Photo Gallery</span>
                  <img src="{{url('tuttee/images/images/fe-img-15.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Photo Gallery</div></a>
                          <p>By using this BestShine Edu App, now captured many moments for posterity so take a look through your school photo album to see what has been going on.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Share</span>
                  <img src="{{url('tuttee/images/images/fe-img-16.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Share</div></a>
                          <p>Better communication with easy to use tools for sharing the information with the student, parent, teacher or each other through their mobile app.</p>
                    </div>
                </div>
              </li> <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Master Table</span>
                  <img src="{{url('tuttee/images/images/fe-img-17.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Master Table</div></a>
                          <p>By using this Master table, for creating a new school or maintaining a school with Session, Class, Section, Subject, Exam Type, Staff Type, Notification, Events.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">User Role</span>
                  <img src="{{url('tuttee/images/images/fe-img-18.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">User Role</div></a>
                          <p>Adding a cluster role to a user for all projects. Removing a cluster role from a user for all projects. Adding a role to a group. Removing a role to a group</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Post</span>
                  <img src="{{url('tuttee/images/images/fe-img-19.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Post</div></a>
                          <p>Instant share of school picture and highlight certain things as school toppers, events on Mobile App. Upload the picture, Add Description.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Data Manager</span>
                  <img src="{{url('tuttee/images/images/fe-img-20.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href=""><div class="fe-text db">Data Manager</div></a>
                          <p>Data manager is able to manipulate & spread the data efficiently & effectively. Enter multiple student or employee profile in a single instance with unique id's.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Knowledge Bank</span>
                  <img src="{{url('tuttee/images/images/fe-img-21.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href=""><div class="fe-text db">Knowledge Bank</div></a>
                          <p>parent and Student can check day by day question and answers for his subject. Teacher can create aptitude questions and answers for every subject.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Voice SMS</span>
                  <img src="{{url('tuttee/images/images/fe-img-22.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Voice SMS</div></a>
                          <p>BestShine provides a facility to send recorded voice sms to parent by regarding a message & upload in app. A call will go to all parent at a time.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">School profile</span>
                  <img src="{{url('tuttee/images/images/school-profile.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">School profile</div></a>
                          <p>Gives an insight of your School data along with the motto, values, achievements etc., precisely.</p>
                    </div>
                </div>
              </li>

              
            </ul>
        </div>
                </div>
                <div class="tab-pane" id="2">
                       <div class="col-md-12 home-feature-sec">
           <div class="pad-t-3 hidden-xs hidden-md">
          
          </div>
          <div class="col-md-12 text-center">
           <!--  <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2> -->
            <div class="pad-t-3">
              <div class="" style="text-align: left;">
                  <span class="sub-head" style="color:#f5a136;">BENEFITS OF MANAGEMENT</span>
                  <p>The management Module assist to evaluate the performance of Employees as well as students graphically from time to time with updated records. Features like Admission process, Library and Laboratory inventory, payroll, Daily expenditure etc., are also available to effortlessly systematize and automate monotonous task of administrating your institution department wise.</p>
                </div>
            </div>
          </div>
            <ul>
              <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Admission Management</span>
                  <img src="{{url('tuttee/images/images/fe-img.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <span href=""><div class="fe-text db">Admission Management</div></span>
                          <p>Our Admission Management has made the entire Admissions process unimaginably easy and swift. The solution is designed to cater all the requirements of Admission Management.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Student Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-2.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <span><div class="fe-text db">Student Management</div></span>
                          <p>To maintain detailed student profile with changes and transformations. Schools can manage the student and parent details easily with view and edit option.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Staff Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-3.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Staff Management</div></a>
                          <p>An effective way to manage teaching or non teaching staff details. It can view or edit them quickly when they needed the entire employee details.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Fee Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-4.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Fee Management</div></a>
                          <p>No more queues to pay school fees. Pay all fees from your app or online via credit or debit card, net-banking or wallet. Our Smart fee module with e-fee payment receipt.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Attendance</span>
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Attendance</div></a>
                          <p>Our Student Attendance Module covers all the aspects related to attendance. Reports are available readily for the school and parents of individual students.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Homework</span>
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Homework</div></a>
                          <p>Assignments and homeworks can be assigned and allotted to the students using Teacher Mobile Application with real time update to parent and student.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Result Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Result Management</div></a>
                          <p>Online result management modules makes to get the complete exam schedule. See results as soon as they are published with obtained grades.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Notifications Alerts</span>
                  <img src="{{url('tuttee/images/images/fe-img-9.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Notifications Alerts</div></a>
                          <p>Smart messaging system of Bestshine Edu App delivering high volume of messages quickly & efficiently. Is one of the most expressive things to tell updates priorly.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Library Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-10.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Library Management</div></a>
                          <p>School library is an integral for teaching &apm; learning of student outcomes. A collection recorded data or books arranged for ease of use.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Report Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-11.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Report Management</div></a>
                          <p>BestShine provides highly supple and can be easily customized as per your school’s requirement, It is provided with flexible Admin panel.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Timetable</span>
                  <img src="{{url('tuttee/images/images/fe-img-12.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Timetable</div></a>
                          <p>Daily time-table will be visible to parents and students. All changes to the same will be reflected in real-time manner. It is very easy and simple to manage.</p>
                    </div>
                </div>
              </li>
             
            
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Bus Tracking</span>
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Bus Tracking</div></a>
                          <p>Bestshine Edu App Mobile App allows Parent/Student to track their School Bus Live Status with user - friendly map feature and well designed interface.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Photo Gallery</span>
                  <img src="{{url('tuttee/images/images/fe-img-15.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Photo Gallery</div></a>
                          <p>By using this BestShine Edu App, now captured many moments for posterity so take a look through your school photo album to see what has been going on.</p>
                    </div>
                </div>
              </li>
              <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Master Table</span>
                  <img src="{{url('tuttee/images/images/fe-img-17.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Master Table</div></a>
                          <p>By using this Master table, for creating a new school or maintaining a school with Session, Class, Section, Subject, Exam Type, Staff Type, Notification, Events.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">User Role</span>
                  <img src="{{url('tuttee/images/images/fe-img-18.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">User Role</div></a>
                          <p>Adding a cluster role to a user for all projects. Removing a cluster role from a user for all projects. Adding a role to a group. Removing a role to a group</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Post</span>
                  <img src="{{url('tuttee/images/images/fe-img-19.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Post</div></a>
                          <p>Instant share of school picture and highlight certain things as school toppers, events on Mobile App. Upload the picture, Add Description.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Data Manager</span>
                  <img src="{{url('tuttee/images/images/fe-img-20.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href=""><div class="fe-text db">Data Manager</div></a>
                          <p>Data manager is able to manipulate & spread the data efficiently & effectively. Enter multiple student or employee profile in a single instance with unique id's.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Knowledge Bank</span>
                  <img src="{{url('tuttee/images/images/fe-img-21.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href=""><div class="fe-text db">Knowledge Bank</div></a>
                          <p>parent and Student can check day by day question and answers for his subject. Teacher can create aptitude questions and answers for every subject.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Voice SMS</span>
                  <img src="{{url('tuttee/images/images/fe-img-22.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Voice SMS</div></a>
                          <p>BestShine provides a facility to send recorded voice sms to parent by regarding a message & upload in app. A call will go to all parent at a time.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">School profile</span>
                  <img src="{{url('tuttee/images/images/school-profile.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">School profile</div></a>
                          <p>Gives an insight of your School data along with the motto, values, achievements etc., precisely.</p>
                    </div>
                </div>
              </li>

              
            </ul>
        </div>
                </div>
                <div class="tab-pane" id="3">
                       <div class="col-md-12 home-feature-sec">
           <div class="pad-t-3 hidden-xs hidden-md">
          
          </div>
          <div class="col-md-12 text-center">
           <!--  <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2> -->
            <div class="pad-t-3">
              <div class="" style="text-align: left;">
                  <span class="sub-head" style="color:#f5a136;">BENIFITS OF TEACHERS</span>
                  <p>Teachers on the other hand, are empowered to have complete access to the student data. It also enables them to give instant alerts to parents and students regarding the events and activities in the school, create and evaluate Homework, circulars, holidays, syllabus etc., Options to upload screenshots and photos of the class activity, homework and events are also available. </p>
                </div>
            </div>
          </div>
            <ul>
             
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Attendance</span>
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Attendance</div></a>
                          <p>Our Student Attendance Module covers all the aspects related to attendance. Reports are available readily for the school and parents of individual students.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Homework</span>
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Homework</div></a>
                          <p>Assignments and homeworks can be assigned and allotted to the students using Teacher Mobile Application with real time update to parent and student.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Result Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Result Management</div></a>
                          <p>Online result management modules makes to get the complete exam schedule. See results as soon as they are published with obtained grades.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Notifications Alerts</span>
                  <img src="{{url('tuttee/images/images/fe-img-9.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Notifications Alerts</div></a>
                          <p>Smart messaging system of Bestshine Edu App delivering high volume of messages quickly & efficiently. Is one of the most expressive things to tell updates priorly.</p>
                    </div>
                </div>
              </li>
             
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Timetable</span>
                  <img src="{{url('tuttee/images/images/fe-img-12.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Timetable</div></a>
                          <p>Daily time-table will be visible to parents and students. All changes to the same will be reflected in real-time manner. It is very easy and simple to manage.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Feedback</span>
                  <img src="{{url('tuttee/images/images/fe-img-13.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Feedback</div></a>
                          <p>Teacher can send and receive feedback from / to parent according to the student performance. parent also can send and receive feedback for his children performance.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Leave Request</span>
                  <img src="{{url('tuttee/images/images/fe-img-14.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Leave Request</div></a>
                          <p>Parents can send request for student's reasonable leave by submitting the leave request form to teacher. Teacher can Approve or Deny the leave request.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Bus Tracking</span>
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Bus Tracking</div></a>
                          <p>Bestshine Edu App Mobile App allows Parent/Student to track their School Bus Live Status with user - friendly map feature and well designed interface.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Photo Gallery</span>
                  <img src="{{url('tuttee/images/images/fe-img-15.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Photo Gallery</div></a>
                          <p>By using this BestShine Edu App, now captured many moments for posterity so take a look through your school photo album to see what has been going on.</p>
                    </div>
                </div>
              </li>
               
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Post</span>
                  <img src="{{url('tuttee/images/images/fe-img-19.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Post</div></a>
                          <p>Instant share of school picture and highlight certain things as school toppers, events on Mobile App. Upload the picture, Add Description.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Knowledge Bank</span>
                  <img src="{{url('tuttee/images/images/fe-img-21.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href=""><div class="fe-text db">Knowledge Bank</div></a>
                          <p>parent and Student can check day by day question and answers for his subject. Teacher can create aptitude questions and answers for every subject.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">School profile</span>
                  <img src="{{url('tuttee/images/images/school-profile.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">School profile</div></a>
                          <p>Gives an insight of your School data along with the motto, values, achievements etc., precisely.</p>
                    </div>
                </div>
              </li>

              
            </ul>
        </div>
                </div>
                <div class="tab-pane" id="4">
                       <div class="col-md-12 home-feature-sec">
                         <div class="pad-t-3 hidden-xs hidden-md">
                        
                        </div>
                        <div class="col-md-12 text-center">
                         <!--  <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2> -->
                          <div class="pad-t-3">
                                <div class="" style="text-align: left;">
                                    <span class="sub-head" style="color:#f5a136;">BENIFITS FOR PARENT</span>
                                    <p>As a parent you will have access to all information regarding the wards, anytime from anywhere. It also keeps you updated on day-to-day school and class activities, scholastic and co-curricular performance, homework, assignments, circulars and remarks from school and teachers. You will also have the privilege to communicate with teachers and school management through messages.</p>
                                 </div>
                          </div>
                        </div>
                          <ul>
              
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Fee Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-4.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Fee Management</div></a>
                          <p>No more queues to pay school fees. Pay all fees from your app or online via credit or debit card, net-banking or wallet. Our Smart fee module with e-fee payment receipt.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Attendance</span>
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Attendance</div></a>
                          <p>Our Student Attendance Module covers all the aspects related to attendance. Reports are available readily for the school and parents of individual students.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Homework</span>
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Homework</div></a>
                          <p>Assignments and homeworks can be assigned and allotted to the students using Teacher Mobile Application with real time update to parent and student.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Result Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Result Management</div></a>
                          <p>Online result management modules makes to get the complete exam schedule. See results as soon as they are published with obtained grades.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Notifications Alerts</span>
                  <img src="{{url('tuttee/images/images/fe-img-9.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Notifications Alerts</div></a>
                          <p>Smart messaging system of Bestshine Edu App delivering high volume of messages quickly & efficiently. Is one of the most expressive things to tell updates priorly.</p>
                    </div>
                </div>
              </li>
              
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Timetable</span>
                  <img src="{{url('tuttee/images/images/fe-img-12.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Timetable</div></a>
                          <p>Daily time-table will be visible to parents and students. All changes to the same will be reflected in real-time manner. It is very easy and simple to manage.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Feedback</span>
                  <img src="{{url('tuttee/images/images/fe-img-13.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Feedback</div></a>
                          <p>Teacher can send and receive feedback from / to parent according to the student performance. parent also can send and receive feedback for his children performance.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Leave Request</span>
                  <img src="{{url('tuttee/images/images/fe-img-14.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Leave Request</div></a>
                          <p>Parents can send request for student's reasonable leave by submitting the leave request form to teacher. Teacher can Approve or Deny the leave request.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Bus Tracking</span>
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Bus Tracking</div></a>
                          <p>Bestshine Edu App Mobile App allows Parent/Student to track their School Bus Live Status with user - friendly map feature and well designed interface.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Photo Gallery</span>
                  <img src="{{url('tuttee/images/images/fe-img-15.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Photo Gallery</div></a>
                          <p>By using this BestShine Edu App, now captured many moments for posterity so take a look through your school photo album to see what has been going on.</p>
                    </div>
                </div>
              </li>
               
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">School profile</span>
                  <img src="{{url('tuttee/images/images/school-profile.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">School profile</div></a>
                          <p>Gives an insight of your School data along with the motto, values, achievements etc., precisely.</p>
                    </div>
                </div>
              </li>

              
            </ul>
                    </div>
                </div>
                <div class="tab-pane" id="5">
                       <div class="col-md-12 home-feature-sec">
                         <div class="pad-t-3 hidden-xs hidden-md">
                        
                        </div>
                        <div class="col-md-12 text-center">
                         <!--  <h2 class="cap head-h black">Some feature<span class="db"><img src="{{url('tuttee/images/images/element-h-line.png')}}" class="some-fea-img"></span> </h2> -->
                          <div class="pad-t-3">
                              <div class="" style="text-align: left;">
                                 <span class="sub-head" style="color:#f5a136;">BENIFITS OF STUDENTS</span>
                                  <p>Students have the higher advantage of getting updates on their day to day homework, class timetables, assignments/projects, knowledge bank, marks and remarks on their exam schedules and performance. Above all with the real time mobile GPS tracking facility you can track the vehicle and its route to and from the home/school. </p>
                           </div>
                          </div>
                        </div>
                          <ul>
             
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Fee Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-4.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Fee Management</div></a>
                          <p>No more queues to pay school fees. Pay all fees from your app or online via credit or debit card, net-banking or wallet. Our Smart fee module with e-fee payment receipt.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Attendance</span>
                  <img src="{{url('tuttee/images/images/fe-img-5.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Attendance</div></a>
                          <p>Our Student Attendance Module covers all the aspects related to attendance. Reports are available readily for the school and parents of individual students.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Smart Homework</span>
                  <img src="{{url('tuttee/images/images/fe-img-6.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Smart Homework</div></a>
                          <p>Assignments and homeworks can be assigned and allotted to the students using Teacher Mobile Application with real time update to parent and student.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Result Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-7.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Result Management</div></a>
                          <p>Online result management modules makes to get the complete exam schedule. See results as soon as they are published with obtained grades.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Notifications Alerts</span>
                  <img src="{{url('tuttee/images/images/fe-img-9.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Notifications Alerts</div></a>
                          <p>Smart messaging system of Bestshine Edu App delivering high volume of messages quickly & efficiently. Is one of the most expressive things to tell updates priorly.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Library Management</span>
                  <img src="{{url('tuttee/images/images/fe-img-10.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Library Management</div></a>
                          <p>School library is an integral for teaching &apm; learning of student outcomes. A collection recorded data or books arranged for ease of use.</p>
                    </div>
                </div>
              </li>
              
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Timetable</span>
                  <img src="{{url('tuttee/images/images/fe-img-12.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Timetable</div></a>
                          <p>Daily time-table will be visible to parents and students. All changes to the same will be reflected in real-time manner. It is very easy and simple to manage.</p>
                    </div>
                </div>
              </li>
              
               
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Bus Tracking</span>
                  <img src="{{url('tuttee/images/images/fe-img-8.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Bus Tracking</div></a>
                          <p>Bestshine Edu App Mobile App allows Parent/Student to track their School Bus Live Status with user - friendly map feature and well designed interface.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Photo Gallery</span>
                  <img src="{{url('tuttee/images/images/fe-img-15.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Photo Gallery</div></a>
                          <p>By using this BestShine Edu App, now captured many moments for posterity so take a look through your school photo album to see what has been going on.</p>
                    </div>
                </div>
              </li>
               
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Knowledge Bank</span>
                  <img src="{{url('tuttee/images/images/fe-img-21.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href=""><div class="fe-text db">Knowledge Bank</div></a>
                          <p>parent and Student can check day by day question and answers for his subject. Teacher can create aptitude questions and answers for every subject.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Voice SMS</span>
                  <img src="{{url('tuttee/images/images/fe-img-22.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">Voice SMS</div></a>
                          <p>BestShine provides a facility to send recorded voice sms to parent by regarding a message & upload in app. A call will go to all parent at a time.</p>
                    </div>
                </div>
              </li>
               <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">School profile</span>
                  <img src="{{url('tuttee/images/images/school-profile.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <a href="#"><div class="fe-text db">School profile</div></a>
                          <p>Gives an insight of your School data along with the motto, values, achievements etc., precisely.</p>
                    </div>
                </div>
              </li>
            </ul>
                    </div>
                </div>

                <div class="tab-pane" id="6">
                       <div class="col-md-12 home-feature-sec">
                         <div class="pad-t-3 hidden-xs hidden-md">
                        
                        </div>
                        <div class="col-md-12 text-center">
                        
                         <!--  <div class="pad-t-3">
                              <div class="" style="text-align: left;">
                                 <span class="sub-head" style="color:#f5a136;">BENIFITS FOR STUDENT</span>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                           </div>
                          </div> -->
                        </div>
                         <ul>
              <li>
                <div class="col-md-3 col-sm-5 col-xs-12 img-wr-fe animated wow bounceInDown" style="animation-delay: 0.05s;">
                  <span class="sub-head fea-t db">Bus Attendance</span>
                  <img src="{{url('tuttee/images/images/fe-img-23.png')}}" alt="pr" class="fe-image">
                  <div class="img-overlay">
                          <span href=""><div class="fe-text db">Bus Attendance</div></span>
                          <p>A provision to update Students school bus attendance in real time is also available. You can view the boarding status of your child to and from the school at the time of transportation.</p>
                    </div>
                </div>
              </li>
               
            </ul>
                    </div>
                </div>
      </div>
  </div>
 </div>

</section>
<!-- <section class="sec-1">
   <div class="container">
      <div class="row">
        <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Lorem Ipsum is simply dummy<span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <p class="">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div>
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/edu.png')}}">
            <span class="sub-head">Lorem Ipsum</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
          </div>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div>
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/edu.png')}}">
            <span class="sub-head">Lorem Ipsum</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
          </div>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div class="text-center">
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/edu.png')}}">
            <span class="sub-head">Lorem Ipsum</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
          </div>
        </div>
      </div>
  </div>
</section>
 -->
<div class="pad-t-3 divider"></div>

<!-- 
<section class="pd-0">
  <div class="blu-bg-wr">
   <a href="#"> <img src="{{url('tuttee/images/images/sys-bg2.png')}}" class="blu-bg"></a>
 </div>
 
</section> -->





<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a></li>
</ul>
<div class="contact-side-btn">

 <a href="{{route('contact')}}">
   <b style="color:white;">C<br>
o<br>
n<br>
t<br>
  a<br>
c<br>
t<br></b>  
<span>
<em>
  <i class="fa fa-phone-square" aria-hidden="true"></i>+91-63 803 52 803
</em>
<br>
<em>
 <i class="fa fa-envelope" aria-hidden="true"></i>info@bestshineeduapp.com
</em>

</span>
<br>

  </a>
</div>
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
<!--   <div class="cd-pricing-switcher">


<input type="radio" name="duration" value="monthly" id="monthly" checked="">
<label for="monthly">havi</label>
<input type="radio" name="duration" value="quarterly" id="quarterly">
<label for="quarterly">3 hó (-10%)</label>
<input type="radio" name="duration" value="halfyear" id="halfyear">
<label for="halfyear">6 hó (-15%)</label>
<input type="radio" name="duration" value="yearly" id="yearly">
<label for="yearly">12 hó (-20%)</label>


</div> -->
  <div class="footer-copyright text-center">
        <!--  -->
            © 2017 Copyright: <a href="#"><strong style="color:#efbf0b;">Bestshine Education campus Pvt.Ltd</strong></a> All rights reserved.
        </div>
    </div>

</footer>
 <script src="{{ url('tuttee/js/particles/particles.js')}}"></script>
<script src="{{ url('tuttee/js/particles/app.js')}}"></script>         
      
<!-- <script src="js/particles/stats.js"></script> -->
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
</body>
</html>
