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
    <link rel="apple-touch-icon" href="<?php echo asset('public/assets/ui_kit/assets/images/logo.png'); ?>">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196"
          href="<?php echo asset('public/assets/ui_kit/assets/images/logo.png'); ?>">

    <!-- style -->
    <link rel="stylesheet" href="<?php echo asset('public/assets/app/css/animate.min.css'); ?>"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo asset('public/assets/app/css/glyphicons/glyphicons.css'); ?>"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo asset('public/assets/app/css/font-awesome/css/font-awesome.min.css'); ?>"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo asset('public/assets/app/css/material-design-icons/material-design-icons.css'); ?>"
          type="text/css"/>

    <link rel="stylesheet"
          href="<?php echo asset('public/assets/app/css/bootstrap/dist/css/bootstrap.min.css'); ?>"
          type="text/css"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="<?php echo asset('public/assets/app/css/app.css'); ?>" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="<?php echo asset('public/assets/app/css/font.css'); ?>" type="text/css"/>
    <!--Slick Slider-->
    <link href="<?php echo asset('public/assets/app/temp/css/slick.css'); ?>" rel="stylesheet" type="text/css"
          media="screen"/>
    <link href="<?php echo asset('public/assets/app/temp/css/slick-theme.css'); ?>" rel="stylesheet" type="text/css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/assets/app/temp/css/select2.min.css'); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/assets/app/temp/css/select2-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('public/assets/app/temp/css/bootstrap-switch.min.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/assets/app/temp/css/plugins.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/assets/app/temp/css/style.css'); ?>">
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
                    <img src="<?php echo asset('public/assets/app/images/logo.jpg'); ?>" alt=".">
                    <span class="hidden-folded inline">Đi Đâu Đây ?</span>
                </a>
                <!-- / brand -->

                <!-- nabar right -->
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
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="" data-toggle="dropdown" aria-expanded="false">
                            <span>Login</span>
                        </a>
                        <!-- dropdown -->
                        <div class="dropdown-menu w-xl animated fadeInUp pull-right p-a-0 ng-scope">
                            <div class="box-color m-a-0">
                                <div class="box-header b-b p-y-sm">
                                    <strong>Sign in</strong>
                                </div>
                                <div class="box-body">
                                    <form role="form" class="ng-pristine ng-valid">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="checkbox">
                                            <label class="md-check">
                                                <input type="checkbox"><i></i> Remember me
                                            </label>
                                        </div>
                                        <div class="m-t m-b-xs">
                                            <button type="submit" class="btn btn-sm primary text-u-c p-x _600">Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- / dropdown -->
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

    <div class="container">
        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0"></li>
            </ol>
            <div class="carousel-inner " role="listbox">
                <div class="carousel-item active ">
                    <div class="col-lg-4 nopadding">
                        <img src="<?php echo asset('public/assets/app/images/banner1.jpg'); ?>" alt="First slide">
                    </div>
                    <div class="col-lg-4 nopadding">
                        <img src="<?php echo asset('public/assets/app/images/banner2.jpg'); ?>" alt="First slide">
                    </div>
                    <div class="col-lg-4 nopadding">
                        <img src="<?php echo asset('public/assets/app/images/banner3.jpg'); ?>" alt="First slide">
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row margin-top-fixed-layout">
            <!--<div class="col-lg-2">
                <div class="navside white r box-shadow-z0 m-b">
                    <div class="navbar">

                        <a class="navbar-brand">
                            <span class="hidden-folded inline">Chuyên Mục</span>
                        </a>

                    </div>
                    <div flex>
                        <ul class="nav" ui-nav>
                            <li>
                                <a>
                                    <span class="nav-icon">
                                        <i class="material-icons">
                                            play_circle_outline
                                            <span ui-include="'../assets/images/i_a.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Danh sách địa điểm</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="nav-icon">
                                        <i class="material-icons">
                                            crop_original
                                            <span ui-include="'../assets/images/i_c.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Bản đồ</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="nav-icon">
                                        <i class="material-icons">
                                            subject
                                            <span ui-include="'../assets/images/i_d.svg'"></span>
                                        </i>
                                    </span>
                                    <i class="nav-label"><b class="label label-sm ">2</b></i>
                                    <span class="nav-text">Blog</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="nav-label hidden-folded"><b class="label label-xs no-bg b-a">NEW</b></i>
                                    <span class="nav-icon">
                                        <i class="material-icons">
                                            card_travel
                                            <span ui-include="'../assets/images/i_e.svg'"></span>
                                        </i>
                                    </span>
                                    <span class="nav-text">Shop</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12" ng-controller="HomeController">
                <div class="row gutter-0">
                    <div class="white r box-shadow-z0 m-b navbar-md">
                        <div class="row">
                            <div class="navbar">
                                <a data-toggle="collapse" data-target="#navbar-5"
                                   class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                                    <i class="material-icons"></i>
                                </a>
                                <!-- brand -->
                                <a class="navbar-brand">
                                    <span class="hidden-folded inline">Ăn uống</span>
                                </a>
                                <div class="collapse navbar-toggleable-sm" id="navbar-2">
                                    <form class="navbar-form form-inline navbar-item m-l v-m" role="search">
                                        <div class="form-group l-h m-a-0">
                                            <div class="btn-group dropdown">
                                                <button class="btn white  dropdown-toggle" data-toggle="dropdown">
                                                    Tin mới nhất
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-scale">
                                                    <a class="dropdown-item">Đánh giá</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Lượt xem</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Xác minh</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- / search form -->
                                </div>
                                <!-- / brand -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="p-x-1">Hàng nghìn khuyến mãi hot mới mỗi ngày, thỏa sức khám phá mà còn lại
                                    phù hợp túi tiền nhé ^^
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-0 white margin-top-14">
                    <div class="col-lg-12 margin-top-fixed-content gutter-10 box-shadow-z2">
                        <div class="col-lg-3" ng-repeat="sv in services">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('{{sv.image}}'); ?>"
                                         class="w-full" ng-click="modal('detail',sv.id)" ui-toggle-class="zoom" ui-target="#animate">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">{{ sv.name }}</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="m-a-a" class="modal fade animate ng-scope in " data-backdrop="true">
                    <div class="modal-dialog modal-lg" id="animate" ui-class="zoom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body text-center p-lg">
                                <div class="col-lg-6">
                                    <div class="img-modal">
                                        <img src="<?php echo asset('{{detail.image}}'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 right-ct">
                                    <div class="content-md">
                                        <h4>{{ detail.name }}</h4>
                                        <div class="text-muted m-b-xs">
                                            <span class="km">Khuyến mãi 15%</span>
                                            <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                            <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                        </div>
                                        <div class="content-km">
                                            <p>
                                                {{detail.content}}
                                            </p>
                                            <p>Chương trình khuyến mãi bắt đầu:</p>
                                            <p>Từ ngày: <strong>28/05/2016</strong></p>
                                            <p>Đến ngày: <strong>01/06/2016</strong></p>
                                            <div class="getcode">
                                                <a class="btn btn-sm danger rounded">Nhận code ngay</a>
                                            </div>
                                            <div class="other-img">
                                                <p>Một số hình ảnh khác:</p>
                                                <img src="http://placehold.it/84x84" alt="">
                                                <img src="http://placehold.it/84x84" alt="">
                                                <img src="http://placehold.it/84x84" alt="">
                                                <img src="http://placehold.it/84x84" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div><!-- /.modal-content -->
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row gutter-0 margin-top-15">
                    <div class="white r box-shadow-z0 m-b navbar-md">
                        <div class="row">
                            <div class="navbar">
                                <a data-toggle="collapse" data-target="#navbar-5"
                                   class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                                    <i class="material-icons"></i>
                                </a>
                                <!-- brand -->
                                <a class="navbar-brand">
                                    <span class="hidden-folded inline">Du lịch </span>
                                </a>
                                <div class="collapse navbar-toggleable-sm" id="navbar-2">
                                    <form class="navbar-form form-inline navbar-item m-l v-m" role="search">
                                        <div class="form-group l-h m-a-0">
                                            <div class="btn-group dropdown">
                                                <button class="btn white  dropdown-toggle" data-toggle="dropdown">
                                                    Tin mới nhất
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-scale">
                                                    <a class="dropdown-item">Đánh giá</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Lượt xem</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Xác minh</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- / search form -->
                                </div>
                                <!-- / brand -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class=" p-x-1">Hàng nghìn khuyến mãi hot mới mỗi ngày, thỏa sức khám phá mà còn lại
                                    phù hợp túi tiền nhé ^^
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-0 white margin-top-14">
                    <div class="col-lg-12 margin-top-fixed-content gutter-10 box-shadow-z2 ">
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage2.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage3.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage4.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row gutter-0 margin-top-15">
                    <div class="white r box-shadow-z0 m-b navbar-md">
                        <div class="row">
                            <div class="navbar">
                                <a data-toggle="collapse" data-target="#navbar-5"
                                   class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                                    <i class="material-icons"></i>
                                </a>
                                <!-- brand -->
                                <a class="navbar-brand">
                                    <span class="hidden-folded inline">Điện thoại - Máy tính </span>
                                </a>
                                <div class="collapse navbar-toggleable-sm" id="navbar-2">
                                    <form class="navbar-form form-inline navbar-item m-l v-m" role="search">
                                        <div class="form-group l-h m-a-0">
                                            <div class="btn-group dropdown">
                                                <button class="btn white  dropdown-toggle" data-toggle="dropdown">
                                                    Tin mới nhất
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-scale">
                                                    <a class="dropdown-item">Đánh giá</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Lượt xem</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item">Xác minh</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- / search form -->
                                </div>
                                <!-- / brand -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class=" p-x-1">Hàng nghìn khuyến mãi hot mới mỗi ngày, thỏa sức khám phá mà còn lại
                                    phù hợp túi tiền nhé ^^
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-0 white margin-top-14">
                    <div class="col-lg-12 margin-top-fixed-content gutter-10 box-shadow-z2 ">
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage2.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage3.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="<?php echo asset('public/assets/app/images/testimage4.jpg'); ?>"
                                         class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a href=""><img
                                                src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg'); ?>"
                                                class="w-32 rounded"></a>
                                        <a class="btn btn-sm danger rounded"><i class="fa fa-plus"></i> 99</a>
                                    </div>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="m-a-a" class="modal fade animate ng-scope in " data-backdrop="true" ng-controller="HomeController">
        <div class="modal-dialog modal-lg" id="animate" ui-class="zoom">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center p-lg">
                    <div class="col-lg-6">
                        <div class="img-modal">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 right-ct">
                        <div class="content-md">
                            <h4>{{ ten }}</h4>
                            <div class="text-muted m-b-xs">
                                <span class="km">Khuyến mãi 15%</span>
                                <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                            </div>
                            <div class="content-km">
                                <p>
                                    Nhân dịp khai trương cửa hàng, chúng tôi xin mang tới cho quý khách hàng chương trình khuyến mãi đặc biệt cho các mặt hàng như
                                    Bún bò, bánh tráng cuốn, phở tái....
                                </p>
                                <p>Chương trình khuyến mãi bắt đầu:</p>
                                <p>Từ ngày: <strong>28/05/2016</strong></p>
                                <p>Đến ngày: <strong>01/06/2016</strong></p>
                                <div class="getcode">
                                    <a class="btn btn-sm danger rounded">Nhận code ngay</a>
                                </div>
                                <div class="other-img">
                                    <p>Một số hình ảnh khác:</p>
                                    <img src="http://placehold.it/84x84" alt="">
                                    <img src="http://placehold.it/84x84" alt="">
                                    <img src="http://placehold.it/84x84" alt="">
                                    <img src="http://placehold.it/84x84" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>
</div>
<div class="container margin-top-fixed-layout">
    <div class="white r box-shadow-z0 m-b p-md">
        <div class="footer p-a p-x-md">
            <div class="row">
                <div class="col-md-2 clearfix">
                    <!-- brand -->
                    <a class="navbar-brand">
                        <img src="<?php echo asset('public/assets/app/images/logo.jpg'); ?>" alt=".">
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
                                <img src="<?php echo asset('public/assets/ui_kit/assets/images/b0.jpg'); ?>"
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
                                <img src="<?php echo asset('public/assets/ui_kit/assets/images/b1.jpg'); ?>"
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
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b2.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b3.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b4.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b5.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b6.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b7.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b8.jpg'); ?>" alt="."
                                class="w-xxs"></a>
                        <a href="" class="pull-left"><img
                                src="<?php echo asset('public/assets/ui_kit/assets/images/b9.jpg'); ?>" alt="."
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
                <a href="#" class="scrollup"><img src="<?php echo asset('public/assets/app/temp/img/icon/icon2.png'); ?>" alt=""></a>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo asset('public/assets/app/js/libs/jquery.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo asset('public/assets/app/js/libs/tether.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/bootstrap.js'); ?>"></script>
<!-- core -->
<script src="<?php echo asset('public/assets/app/js/libs/underscore-min.js'); ?>"></script>
<script
    src="<?php echo asset('public/assets/app/js/libs/jquery.storageapi.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/pace.min.js'); ?>"></script>

<script src="<?php echo asset('public/assets/app/js/libs/ui/config.lazyload.js'); ?>"></script>

<script src="<?php echo asset('public/assets/app/js/libs/ui/palette.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-load.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-jp.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-include.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-device.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-form.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-nav.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-screenfull.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-scroll-to.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ui-toggle-class.js'); ?>"></script>

<script src="<?php echo asset('public/assets/app/lib/angular.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/temp/js/ngscript.js'); ?>"></script>


<!-- ajax -->
<script src="<?php echo asset('public/assets/app/js/libs/jquery.pjax.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/js/libs/ui/ajax.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/temp/js/jquery.uniform.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/temp/js/bootstrap-switch.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/temp/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/temp/js/jquery.pulsate.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/app/temp/js/app.min.js'); ?>"></script>

<script src="<?php echo asset('public/assets/app/temp/js/components-select2.min.js'); ?>"></script>

<!--Slick Slider-->
<script src="<?php echo asset('public/assets/app/temp/js/slick/slick.min.js'); ?>" type="text/javascript"></script>

<script src="<?php echo asset('public/assets/app/temp/js/myscript.js'); ?>"></script>

</body>
</html>