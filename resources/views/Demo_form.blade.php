<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Edu app, education app, School web app, school mobile app, School app, school software, e- School app, smartphone school app, educational management app, cloud based school app" />
<meta name="description" content=" A School Management App development company in Chennai, Tamilnadu, India, best Mobile App integrated to Web Application, Integrated school management, School software, Web Designing, SMS/Text portal, NEET/IAS coaching." />
<title>BEC-Franchiess Enquiry</title>
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


<body class="franchiess-pg">
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
                          <li> <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('services')}}">Services</a>
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
                             <li class="dropdown active">
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
          <h2 class="cap head-h gray">DEMO APPLICATION FORM<!-- <span class="div-img-wr"><img src="{{url('tuttee/images/images/div-gif.gif')}}"></span> --><span class="heading-line mr-0-a"></span></h2>
          <div class="pad-t-3"></div>
          <!-- <p class="">
              Our school management application focuses on the core features like Transport management, HR management, School and student management with high security and graphical reports. We also offer a complete backup support for our customers with efficient people to provide prompt and professional support for all the problems and concerns at your end. 
            </p> -->
        </div>
        <div class="from-wr col-md-12">
            <div>
                  <form class="form-inline col-md-12" action="/action_page.php">
                    <div class="form-group col-md-4 col-xs-12">
                        <label for="usr">School Name:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                    
                     <div class="form-group col-md-4 col-xs-12">
                         <label class="pull-left" for="usr">School Logo</label>
                         <div class="logo-up">
                              <input type="file" name="pic" accept="image/*">
                              <!-- <input type="submit">  -->
                         </div>   
                      </div>
                     
                      <div class="form-group col-md-4 col-xs-12">
                        <label for="usr">School Code:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                        
                        <div class="form-group col-md-4 col-xs-12 checkbox">
                          <div class="form-group">
                           <label for="comment">Address:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                              </div>
                        </div>

                        <div class="form-group col-md-4 col-xs-12">
                        <label for="usr">Principal Name:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>

                      <div class="form-group col-md-4 col-xs-12">
                        <label for="usr">Contact No:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>

                      <div class="form-group col-md-4 col-xs-12">
                        <label for="usr">Office Contact No:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>

                         <div class="form-group col-md-4 col-xs-12">
                          <label for="email">Email ID:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                         <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">School Web site:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                          <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">Location:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                           <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">Student Strength:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                             <div class="form-group col-md-4 col-xs-12">
                            <label for="usr" class="pull-left">Board:</label>
                           <div class="">
                            <div class="">
                              <div class="form-group">
                                <select class="selectpicker form-control board-picker" title="Choose Board">
                                  <option class="color:#ccc">--select board--</option>
                                  <option>State board</option>
                                  <option>Central board</option>
                                  <option>Matriculation</option>
                                </select>
                              </div>
                            </div>
                            </div>
                          </div>

                           <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">No. of Classes:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                           <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">Demo  Duration:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                           <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">Software Incharge Name:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                           <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">Software Incharge Contact No:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                           <div class="form-group col-md-4 col-xs-12">
                            <label for="usr">Plan Type:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>

                        
                        
                        <div class="col-md-12 submit-btn-wr">
                              <center>
                                <button type="submit" class="btn btn-default">Submit</button>
                              </center>
                        </div>
                        
                        
                  </form>
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
