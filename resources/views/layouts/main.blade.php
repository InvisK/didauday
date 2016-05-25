<!DOCTYPE html>
<html lang="en" ng-app="didauday">
<head>
    <meta charset="utf-8"/>
    <title>DiDauDay</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{ asset('public/assets/ui_kit/assets/images/logo.png')}}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196"
          href="{{ asset('public/assets/ui_kit/assets/images/logo.png')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('public/assets/uikit/css/animate.min.css')}}"
          type="text/css"/>
    <link rel="stylesheet" href="{{ asset('public/assets/uikit/css/glyphicons/glyphicons.css')}}"
          type="text/css"/>
    <link rel="stylesheet"
          href="{{ asset('public/assets/app/css/font-awesome/css/font-awesome.min.css')}}"
          type="text/css"/>
    <link rel="stylesheet"
          href="{{ asset('public/assets/uikit/css/material-design-icons/material-design-icons.css')}}"
          type="text/css"/>

    <link rel="stylesheet"
          href="{{ asset('public/assets/app/css/bootstrap/dist/css/bootstrap.css')}}"
          type="text/css"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="{{ asset('public/assets/uikit/css/app.css')}}" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="{{ asset('public/assets/uikit/css/font.css')}}" type="text/css"/>

    @yield('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/app/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/app/css/style-home.css')}}">
</head>

<body class="">
    <div class="body-wrap">
    <!-- Search -->
    <div class="white box-shadow-z0" id="search">
        <div class="navbar">
            <div class="container">
                <a data-toggle="collapse" data-target="#navbar-3" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                    <i class="material-icons"></i>
                </a>
                <!-- brand -->
                <a class="navbar-brand">
                    <img src="{{ asset('public/assets/app/images/logo.jpg')}}" alt=".">
                    <span class="hidden-folded inline">Đi Đâu Đây ?</span>
                </a>


                <!-- / brand -->

                <!-- nabar right -->
                @if(Auth::user())
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item dropdown pos-stc-xs">
                            <a class="nav-link" href="" data-toggle="dropdown">
                                <i class="material-icons"></i>
                                <span class="label label-sm up warn">3</span>
                            </a>
                            <!-- dropdown -->
                            <div class="dropdown-menu pull-right w-xl animated fadeInUp no-bg no-border no-shadow ng-scope">
                                <div class="scrollable" style="max-height: 220px">
                                    <ul class="list-group list-group-gap m-a-0">
                                        <li class="list-group-item black lt box-shadow-z0 b">
          <span class="pull-left m-r">
            <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
          </span>
          <span class="clear block">
            Use awesome <a href="" class="text-primary">animate.css</a><br>
            <small class="text-muted">10 minutes ago</small>
          </span>
                                        </li>
                                        <li class="list-group-item black lt box-shadow-z0 b">
          <span class="pull-left m-r">
            <img src="../assets/images/a1.jpg" alt="..." class="w-40 img-circle">
          </span>
          <span class="clear block">
            <a href="" class="text-primary">Joe</a> Added you as friend<br>
            <small class="text-muted">2 hours ago</small>
          </span>
                                        </li>
                                        <li class="list-group-item dark-white text-color box-shadow-z0 b">
          <span class="pull-left m-r">
            <img src="../assets/images/a2.jpg" alt="..." class="w-40 img-circle">
          </span>
          <span class="clear block">
            <a href="" class="text-primary">Danie</a> sent you a message<br>
            <small class="text-muted">1 day ago</small>
          </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / dropdown -->
                        </li>
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle clear" data-toggle="dropdown">
              <span class="hidden-md-down nav-text m-r-sm text-right">
                <span class="block l-h-1x _500">{!! Auth::user()->name !!}</span>
                <small class="block l-h-1x text-muted"><i class="material-icons text-md"></i> Los Angeles, CA</small>
              </span>
              <span class="avatar w-50">
                <img src="{!! Auth::user()->avatar !!}" alt="..." height="40">
                <i class="away b-white left"></i>
              </span>
                            </a>
                            <div class="dropdown-menu pull-right dropdown-menu-scale ng-scope">
                                <a class="dropdown-item" ui-sref="app.inbox.list" href="#/app/inbox/inbox/">
                                    <span>Inbox</span>
                                    <span class="label warn m-l-xs">3</span>
                                </a>
                                <a class="dropdown-item" ui-sref="app.page.profile" href="#/app/page/profile">
                                    <span>Profile</span>
                                </a>
                                <a class="dropdown-item" ui-sref="app.page.setting" href="#/app/page/setting">
                                    <span>Settings</span>
                                    <span class="label primary m-l-xs">3/9</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" ui-sref="app.docs" href="#/app/docs">
                                    Need help?
                                </a>
                                <a class="dropdown-item" ui-sref="access.signin" href="{{ url('/logout') }}">Sign out</a>
                            </div>
                        </li>
                    </ul>
                    @else()
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu text-color w-lg animated fadeInUp pull-right">
                                <!-- search form -->
                                <form class="navbar-form form-inline navbar-item m-l v-m ng-pristine ng-valid ng-scope"
                                      role="search">
                                    <div class="form-group l-h m-a-0">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Search projects...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn white b-a no-shadow"><i
                                                            class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <!-- / search form -->
                            </div>
                              <a class="nav-link" href="" data-toggle="modal" data-target="#location_code_create_modal">
                                 <span>Test Modal</span>
                             </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{!! URL::route('facebook.login') !!}" onclick="window.open(this.href, 'mywin',
'left=400,top=100,width=600,height=500,toolbar=1,resizable=0'); return false;" target="_blank" data-toggle="dropdown" aria-expanded="false">
                                <button class="btn btn-outline rounded b-primary text-primary">Login with Facebook</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                            <span class="hidden-xs-down btn btn-sm rounded btn-outline b-danger text-u-c _600">
                                Sign Up
                            </span>
                            <span class="hidden-sm-up ">
                                <i class="material-icons"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                @endif()
                <!-- / navbar right -->
                <!-- navbar collapse -->
                <div class="collapse navbar-toggleable-sm" id="navbar-3">
                    <!-- search form -->
                    <form class="navbar-form form-inline " role="search">
                        <div id="services" class="input-group">
                            <select id="select3-single-input-sm" class="form-control  select2-multiple">
                                <optgroup label="Chủ đề phổ biến">
                                    <option value="CA">Ăn uống</option>
                                    <option value="NV">Thể thao</option>
                                    <option value="OR">Công nghệ</option>
                                    <option value="WA">Làm đẹp</option>
                                </optgroup>
                                <optgroup label="Khu vực">
                                    <option value="AZ">Hồ Chí Minh</option>
                                    <option value="CO">Hà Nội</option>
                                    <option value="ID">Đà Nẵng</option>
                                    <option value="MT">Hải Phòng</option>
                                    <option value="NE">Cần Thơ</option>
                                    <option value="NM">Bình Dương</option>
                                    <option value="ND">Huế</option>
                                    <option value="UT">Hà Tĩnh</option>
                                    <option value="WY">Đà Lạt</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                        <div id="inpSearch">
                            <div class="input-group">
                                <input type="text" name="inputSearch" class="input-search"
                                       placeholder="Nhập từ khóa muốn tìm kiếm">
                            </div>
                        </div>
                        <div id="btnSearch">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- / search form -->
                </div>
                <!-- / navbar collapse -->
            </div>
        </div>
    </div>
    <!-- End Search -->

    <!-- Menu -->
    <div id="menu" class="white r box-shadow-z0">
        <div class="navbar ng-scope">
            <a data-toggle="collapse" data-target="#navbar-5" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                <i class="material-icons"></i>
            </a>


            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm col-lg-11 col-lg-offset-1" id="navbar-5">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav navbar-nav-inline text-center pull-left m-r text-primary-hover">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                <span class="nav-text">
                  <i class="material-icons"></i>
                  <span class="text-xs">Video</span>
                </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                <span class="nav-text">
                  <i class="material-icons"></i>
                  <span class="text-xs">Music</span>
                </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                <span class="nav-text">
                  <i class="material-icons"></i>
                  <span class="text-xs">Photo</span>
                </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                <span class="nav-text">
                  <i class="material-icons"></i>
                  <span class="text-xs">Blog</span>
                </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                <span class="nav-text">
                  <i class="material-icons"></i>
                  <span class="text-xs">Shop</span>
                </span>
                        </a>
                    </li>
                </ul>
                <!-- / link and dropdown -->

            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
    <!-- End Menu -->

    @yield('content')
    </div>
    <div class="margin-top-fixed-layout">
        <div class="white r box-shadow-z0 m-b p-md">
            <div class="footer p-a p-x-md">
                <div class="row">
                    <div class="col-md-2 clearfix">
                        <!-- brand -->
                        <a class="navbar-brand">
                            <img src="{{ asset('public/assets/app/images/logo.jpg')}}" alt=".">
                            <span class="hidden-folded inline">Đi Đâu Đây ?</span>
                        </a>
                        <!-- / brand -->
                    </div>
                    <div class="col-md-10">
                        <div class="text-md-right text-sm-left p-y">
                            <span class="text-muted">Get in touch</span>
                            <span class="h6 m-r-md">contacts@company.com</span>

                            <span class="text-muted">Free call</span>
                            <span class="h6">200-345-980</span>
                        </div>
                    </div>
                </div>
                <div class="b b-b m-t-sm m-b-md"></div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h6 class="text-u-c m-b">About us</h6>
                        <div class="m-b-md">
                            <p class="text-muted">Bootstrap 4 web application ui kit for your next project, with 9
                                categories, 6 layouts and 100+ components.</p>
                            <div class="m-v-lg">
                                <a href="" class="btn btn-icon btn-social rounded btn-sm indigo">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="" class="btn btn-icon btn-social rounded btn-sm blue">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="" class="btn btn-icon btn-social rounded btn-sm red">
                                    <i class="fa fa-google-plus"></i>
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="text-u-c m-b">Latest posts</h6>
                        <div class="post-list m-b-md text-primary-hover">
                            <div class="post-item clearfix m-b">
                                <a href="" class="pull-left m-r">
                                    <img src="{{ asset('public/assets/ui_kit/assets/images/b0.jpg')}}"
                                         class="w-xxs">
                                </a>
                                <div class="clear">
                                    <div class="post-title _600"><a href="">Quodsi ipsam hostm undique atque absolutam</a>
                                    </div>
                                    <div class="post-meta text-muted text-xs">
                                        <em>8/7 2015</em>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item clearfix m-b">
                                <a href="" class="pull-left m-r">
                                    <img src="{{ asset('public/assets/ui_kit/assets/images/b1.jpg')}}"
                                         class="w-xxs">
                                </a>
                                <div class="clear">
                                    <div class="post-title _600"><a href="">Cum salvum esse flentes sui ose sleseo</a></div>
                                    <div class="post-meta text-muted text-xs">
                                        <em>8/7 2015</em>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="text-u-c m-b">Tweets</h6>
                        <div class="m-b-md">
                            <em class="text-muted text-xs m-b-sm block">April, 8, 2015</em>
                            <p>Morbi nec <a href="" class="text-primary">@Jonathan</a> George nunc condimentum ipsum dolor
                                sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="text-u-c m-b">Photo</h6>
                        <div class="clearfix m-b-md">
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b2.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b3.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b4.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b5.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b6.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b7.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b8.jpg')}}" alt="."
                                        class="w-xxs"></a>
                            <a href="" class="pull-left"><img
                                        src="{{ asset('public/assets/ui_kit/assets/images/b9.jpg')}}" alt="."
                                        class="w-xxs"></a>
                        </div>
                    </div>
                </div>

                <div class="row m-b m-t-lg footer-bottom">
                    <div class="col-sm-8">
                        <div class="nav text-sm">
                            <a class="nav-link m-r" href="">
                                <span>Home</span>
                            </a>
                            <a class="nav-link m-r" href="">
                                <span>Shop</span>
                            </a>
                            <a class="nav-link m-r" href="">
                                <span>Blog</span>
                            </a>
                            <a class="nav-link m-r" href="">
                                <span>Service</span>
                            </a>
                            <a class="nav-link m-r" href="">
                                <span>About us</span>
                            </a>
                            <a class="nav-link m-r" href="">
                                <span>Contact</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-sm-right text-xs-left">
                            <small class="text-muted">© Copyright 2015. All rights reserved.</small>
                        </div>
                    </div>
                </div>
                <div class="icon-control">
                    <a href="#" class="scrollup"><img src="{{ asset('public/assets/app/images/icon/icon2.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    @include('location_code.index')
    <script src="{{ asset('public/assets/app/js/libs/jquery.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/assets/app/js/libs/tether.min.js')}}"></script>
    <script src="{{ asset('public/assets/app/js/libs/bootstrap.js')}}"></script>
    <!-- core -->
    <script src="{{ asset('public/assets/app/js/libs/underscore-min.js')}}"></script>
    <script
            src="{{ asset('public/assets/app/js/libs/jquery.storageapi.min.js')}}"></script>
    <script src="{{ asset('public/assets/app/js/libs/pace.min.js')}}"></script>

    <script src="{{ asset('public/assets/uikit/js/config.lazyload.js')}}"></script>

    <script src="{{ asset('public/assets/uikit/js/palette.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-load.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-jp.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-include.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-device.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-form.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-nav.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-screenfull.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-scroll-to.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ui-toggle-class.js')}}"></script>

    <!-- ajax -->
    <script src="{{ asset('public/assets/app/js/libs/jquery.pjax.js')}}"></script>
    <script src="{{ asset('public/assets/uikit/js/ajax.js')}}"></script>

    @yield('script')
    <script src="{{ asset('public/assets/app/js/libs/angular.min.js')}}"></script>
    <script src="{{ asset('public/assets/app/js/myscript.js')}}"></script>
    <script src="{{ asset('public/assets/app/js/ngscript.js')}}"></script>
    <script src="{{ asset('public/assets/app/js/ng_code.js')}}"></script>


    <script type="text/javascript">
        if (window.location.hash && window.location.hash == '#_=_') {
            if (window.history && history.pushState) {
                window.history.pushState("", document.title, window.location.pathname);
            } else {
                // Prevent scrolling by storing the page's current scroll offset
                var scroll = {
                    top: document.body.scrollTop,
                    left: document.body.scrollLeft
                };
                window.location.hash = '';
                // Restore the scroll offset, should be flicker free
                document.body.scrollTop = scroll.top;
                document.body.scrollLeft = scroll.left;
            }
        }

    </script>
   <!--  <script type="text/javascript">

        $(document).ready(function() {
            initFacebookConnect();
        });

        var fbTimer, fbChildWindow;
        function fbPolling() {
            if(fbChildWindow && fbChildWindow.closed) {
                // The popup has been closed, stop the timer and reload window.
                clearInterval(fbTimer);
                window.location.href = window.location.href;
            }
        }
        function initFacebookConnect() {
            $('#connect-fb').click(function(event) {
                event.preventDefault();

                var url = $(this).attr('href');
                fbChildWindow = window.open(url, 'Facebook', 'status=1, resizable=0');
                fbTimer = setInterval('fbPolling()', 1000);
            });
        }
    </script> -->
    <script>
        window.close();
        window.opener.location.reload();
    </script>
</body>
</html>