<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<title>BEC-Services</title>
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
                          <li><a href="{{route('/')}}" class="">Home</a></li>
                          <li><a href="{{route('about')}}">About</a></li>
                          <li class="active"> <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('services')}}">Services</a>
                          </li>
                            <li class="dropdown">
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
<section class="sec-1">
   <div class="container">
      <div class="row">
         <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Application service<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <p class="">
              Our school management application focuses on the core features like Transport management, HR management, School and student management with high security and graphical reports. We also offer a complete backup support for our customers with efficient people to provide prompt and professional support for all the problems and concerns at your end. 
            </p>
        </div>
        <div class="col-md-6">
              

              <div class="text-center pad-t-3">
              <div class="row light-gray">
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/schools.png')}}">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 sr-list-wr">
                   <span class="sub-head">SCHOOL MANAGEMENT</span>
                   <div class="row"> 
                   <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Different core modules to manage each and every school data like Holidays, Events and Notifications along with student and staff details.</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Automatic registration number generation for the students. 
                    Manage multiple student profile in single instance with the ability to import and upload bulk data.</p>
                    </div></p>
                   </div>
                </div>
              </div>
            </div>

            <div class="text-center pad-t-3">
              <div class="row light-gray">
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/security.png')}}">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 sr-list-wr">
                   <span class="sub-head">HIGH SECURITY AUTHENTICATION</span>
                   <div class="row">
                      <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Role management with controlled access permissions</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Personalised dashboard for every user </p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Restricted user rights for parent, faculty, student and drivers </p></div></p>
                     <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Flexible MIS Reporting </p></div></p>
                   </div>
                </div>
              </div>
            </div>

               <div class="text-center pad-t-3">
              <div class="row light-gray">
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/edu.png')}}">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 sr-list-wr">
                   <span class="sub-head">STUDENT MANAGEMENT</span>
                   <div class="row">
                       <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Manage complete details of student’s attendance, report card, performance chart etc.,</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Create and Manage Homework, Assignments and Projects </p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Conduct online tests and assessments Either Subject wise or Class wise</p></div></p>
                     <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Post list of toppers and achievers for any specific assessment or sport event of the school.</p></div></p>
                   </div>
                </div>
              </div>
            </div>


        </div>

         <div class="col-md-6">
              <div class="text-center pad-t-3">
              <div class="row light-gray">
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-icon4.png')}}">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 sr-list-wr">
                   <span class="sub-head">GRAPHICAL REPORTS</span>
                   <div class="row">
                     <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Graphical reports on exam performance either class wise or subject wise can be generated.</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Reports can also be generated either in standard or custom format. </p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Reports can also be generated on the performances of the teachers, school inventory, daily expenses, employee attendance etc.,</p></div></p>
                   </div>
                </div>
              </div>
            </div>


            <div class="text-center pad-t-3">
              <div class="row light-gray">
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-icon6-2.png')}}">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 sr-list-wr">
                   <span class="sub-head">TRANSPORT MANAGEMENT</span>
                   <div class="row">
                      <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Our Flexible transport management modules assists in creating best route for the destination with pick up and drop point.</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Route wise and pickup-point wise student reports can also be generated.</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p> Automatic update of school bus student’s attendance.</p></div></p>
                   </div>
                </div>
              </div>
            </div>

            <div class="text-center pad-t-3">
              <div class="row light-gray">
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/hr.png')}}">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 sr-list-wr">
                   <span class="sub-head">HR MANAGEMENT</span>
                   <div class="row">
                     <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Manage complete employee details with attendance, payroll etc.,</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Update daily class work, assignments, homework and syllabus.</p> </div></p>
                     <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p> Employee leave approval and cancellation.</p></div></p>
                    <p><div class="col-md-1 col-sm-1 col-xs-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div> 
                    <div class="col-md-11 col-sm-11 col-xs-11"><p>Cumulative performance analysis of teaching staffs.</p></div></p>
                   </div>
                </div>
              </div>
            </div>

         
             
        </div>
      </div>
  </div>
</section>
<section class="sec-1 add-on-sr-wr">
   <div class="container">
      <div class="row">
        <div class="col-md-12 sec-1-wr text-center">
          <h2 class="cap head-h gray">Add-on Services<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <p class="">
            At BestShine Education Campus Pvt Ltd, we strive to deliver a lot of add on services like web designing, software development, NEET/IAS coaching, Voice/Text messaging portal, Job portal and school management software 
            
            </p>
        </div>
         <div class="col-md-4 text-center pad-t-3">
          <div class="text-center">
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-ic.png')}}">
            <span class="sub-head">Software Development</span>
            <p>
            Highly customizable school management software specific to the customer needs and specifications are developed by our professional and dynamic team. We also offer mobile integrity to the software app for effortless management. </p>
          </div>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div>
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-ic3.png')}}"> 
            <span class="sub-head">School management Software</span>
            <p>Ours is a ready to use complete cloud based mobile app integrated web application for school management that facilitates an all-round automated backend administration and data management.  </p>
          </div>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div>
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-ic2.png')}}">
            <span class="sub-head">Neet / IAS Exam</span>
            <p>We also provide NEET and IAS coaching with model question papers along with answers. Online tests and knowledge bank is also available for those who sign up for the program with just a simple registration process.</p>
          </div>
        </div>
          <div class="col-md-4 text-center pad-t-3">
          <div class="text-center">
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-ic4.png')}}">
            <span class="sub-head">Voice / Text sms Portal</span>
            <p>We provide both voice and text based cost effective messaging services for all types of social, marketing and promotion campaigns with excellent track records. Instant messages can be sent on the go to unlimited contacts from different groups at a time. </p>
          </div>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div>
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-ic5.png')}}"> 
            <span class="sub-head">Web Design</span>
            <p>Apart from the above said services we also provide website designing for our potential customers. We also strive to create a search engine friendly websites with rich and optimized keywords for the success of your business.  </p>
          </div>
        </div>
        <div class="col-md-4 text-center pad-t-3">
          <div>
            <img class="about-grid-img db mr-0-a" src="{{url('tuttee/images/images/service-ic6.png')}}">
            <span class="sub-head">Job Portal</span>
            <p>Services to handle vacancies in your school. Coming soon..</p>
          </div>
        </div>
       
      </div>
  </div>
</section>
<!-- <div class="abt-contact-img">
  <img src="{{url('tuttee/images/images/log-in-img.png')}}">
</div> -->
<!-- <div class="pad-t-3 divider"></div> -->

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
  <div class="footer-copyright text-center">
        <!--  -->
            © 2017 Copyright: <a href="#"><strong style="color:#efbf0b;">Bestshine Education campus Pvt.Ltd</strong></a> All rights reserved.
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
</body>
</html>
