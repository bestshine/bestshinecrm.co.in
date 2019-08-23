<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->  
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link href="{{asset('css/app-assets/bootstrap.css')}}" rel="stylesheet">
    <!-- font icons-->
    <link href="{{asset('css/app-assets/icomoon.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-assets/fonts/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-assets/pace.css')}}" rel="stylesheet">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link href="{{asset('css/app-assets/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-assets/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-assets/colors.css')}}" rel="stylesheet">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link href="{{asset('css/app-assets/vertical-menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-assets/vertical-overlay-menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/app-assets/palette-gradient.css')}}" rel="stylesheet">
    <!-- END Page Level CSS-->
    <!-- yield styles -->
    @yield('styles')
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <div id="app">
        <!-- navbar-fixed-top-->
        <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="navbar-brand nav-link">
                                <img alt="branding logo" src="{{asset('site_images/logo/robust-logo-light.png')}}" data-expand="{{asset('site_images/logo/robust-logo-light.png')}}" data-collapse="{{asset('site_images/logo/robust-logo-small.png')}}" class="brand-logo">
                                <!-- <img alt="branding logo" src="{{asset('site_images/logo/robust-logo-light.png')}}" data-expand="{{asset('site_images/crm_logo.png')}}" data-collapse="{{asset('site_images/crm_logo.png')}}" class="brand-logo"> -->
                            </a>
                        </li>
                        <li class="nav-item hidden-md-up float-xs-right">
                            <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-container content container-fluid">
                    <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                        <ul class="nav navbar-nav">
                            <li class="nav-item hidden-sm-down">
                                <a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a>
                            </li>
<!--                             <li class="nav-item hidden-sm-down">
                                <a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a>
                            </li>
                            <li class="nav-item hidden-sm-down">
                                <a href="#" target="_blank" class="btn btn-success upgrade-to-pro">Upgrade to PRO $24</a>
                            </li> -->
                        </ul>
                        <ul class="nav navbar-nav float-xs-right">
<!--                             <li class="dropdown dropdown-language nav-item">
                                <a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-gb"></i><span class="selected-language">English</span></a>
                                <div aria-labelledby="dropdown-flag" class="dropdown-menu">
                                    <a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a>
                                    <a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a>
                                    <a href="#" class="dropdown-item"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                                    <a href="#" class="dropdown-item"><i class="flag-icon flag-icon-de"></i> German</a>
                                </div>
                            </li> -->
                            <!-- Notification -->
                            <span ng-app="myApp" ng-controller="notifyCtrl">
                                <li class="dropdown dropdown-notification nav-item" ng-click="notifyCount()">
                                    @php   
                                        $notifications = [];                      
                                    @endphp
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i>
                                        <span class="tag tag-pill tag-default tag-danger tag-default tag-up notify-count">{{ Auth::user()->notify_count }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                        <li class="dropdown-menu-header">
                                            <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">0 New</span></h6>
                                        </li>
                                        <li class="list-group scrollable-container notify">
                                            @foreach($notifications as $notification)
                                                <a href="javascript:void(0)" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">{{ $notification->title }}</h6>
                                                            <p class="notification-text font-small-3 text-muted"> {{ $notification->content }}</p>
                                                            <small>
                                                                <time  class="media-meta text-muted">
                                                                    {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                                                                </time>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </a>                                        
                                            @endforeach
                                        </li>
                                        <li class="dropdown-menu-footer">
                                            <a href="{{ route('dashboard') }}" class="dropdown-item text-muted text-xs-center">Read all notifications</a>
                                        </li>
                                    </ul>
                                </li>
                            </span>

                            <!-- Mail Notification -->
                            <li class="dropdown dropdown-notification nav-item">
                                <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                    <i class="ficon icon-mail6"></i>
                                    <span class="tag tag-pill tag-default tag-info tag-default tag-up">0</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                                    </li>
                                    <li class="list-group scrollable-container">
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('site_images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                                                    <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user nav-item">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{asset('site_images/person/person.png')}}" alt="avatar"><i></i></span><span class="user-name">{{ ucwords(Auth::user()->name) }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('editUser') }}" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a>
                                    <!-- <a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a>
                                    <a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a> -->
                                    <!-- <a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"  onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="icon-power3"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
          </div>
        </nav>

        @include('layouts.sidebar')
        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- angular js -->
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{asset('js/app-assets/tether.min.js')}}"></script>
    <!-- <script src="{{asset('js/app-assets/bootstrap.min.js')}}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/js/perfect-scrollbar.jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{asset('js/app-assets/unison.min.js')}}"></script>
    <script src="{{asset('js/app-assets/blockUI.min.js')}}"></script>
    <script src="{{asset('js/app-assets/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('js/app-assets/screenfull.min.js')}}"></script>
    <script src="{{asset('js/app-assets/pace.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('js/app-assets/chart.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{asset('js/app-assets/app-menu.js')}}"></script>
    <script src="{{asset('js/app-assets/app.js')}}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="{{asset('js/app-assets/dashboard-lite.js')}}"></script> -->

    <!-- common.js -->
    <!-- <script src="{{ asset('js/common/common.js') }}"></script> -->
        
    <script type="text/javascript">
        // hide loader
        // setTimeout(function(){ $('.loading').css("display","none"); }, 3000);        

        var app = angular.module('myApp', []);
        app.controller('notifyCtrl', function($scope) {
            $scope.notifyCount = function() {
                var notifyCount = $(".notify-count").html();
                if(notifyCount != 0){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('updateNotifyCount') }}",
                        data:{
                            _token: $('input[name="_token"]').val()                    
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                    
                        success: function(data){
                            $(".notify-count").html(0);
                        },
                        error: function (data) { 
                            console.log('Server Error');                      
                        }                    
                    });                
                }
            };
        }); 

        // loadUnSeenNotifications
        function loadUnSeenNotifications(){
            $.ajax({
                type: "GET",
                async: false,
                url: "{{ route('getLatestNotifications') }}",
                beforeSend: function() {
                    $('.loading').css("display","block");
                },                    
                success: function(data){
                    $(".list-group.scrollable-container.notify").html('');
                    var append = "";
                    $(data.notifications).each(function(index, item){
                        append += '<a href="javascript:void(0)" class="list-group-item"><div class="media"><div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div><div class="media-body"><h6 class="media-heading">'+item.title+'</h6><p class="notification-text font-small-3 text-muted">'+item.content+'</p><small><time class="media-meta text-muted">'+item.created_at+'</time></small></div></div></a>';
                    });

                    $(".list-group.scrollable-container.notify").html(append);
                    $(".notify-count").html(data.unSeenCount);
                },
                error: function (data) { 
                    console.log('Server Error');                      
                }                    
            });        
        }        
    </script>
    <!-- yield scripts -->
    @yield('scripts')
</body>
</html>
