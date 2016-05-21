<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="<?php echo asset('public/assets/uikit/css/animate.min.css'); ?>"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo asset('public/assets/uikit/css/glyphicons/glyphicons.css'); ?>"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo asset('public/assets/app/css/font-awesome/css/font-awesome.min.css'); ?>"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo asset('public/assets/uikit/css/material-design-icons/material-design-icons.css'); ?>"
          type="text/css"/>

    <link rel="stylesheet"
          href="<?php echo asset('public/assets/app/css/bootstrap/dist/css/bootstrap.min.css'); ?>"
          type="text/css"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="<?php echo asset('public/assets/uikit/css/app.css'); ?>" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="<?php echo asset('public/assets/uikit/css/font.css'); ?>" type="text/css"/>
    <!--Slick Slider-->
    <link href="<?php echo asset('public/assets/metronic/css/slick.css'); ?>" rel="stylesheet" type="text/css"
          media="screen"/>
    <link href="<?php echo asset('public/assets/metronic/css/slick-theme.css'); ?>" rel="stylesheet" type="text/css"
          media="screen"/>

    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/assets/metronic/css/select2.min.css'); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('public/assets/metronic/css/select2-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('public/assets/metronic/css/bootstrap-switch.min.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/assets/metronic/css/plugins.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/assets/app/css/style-home.css'); ?>">
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
    <div ui-view="" class="app-body ng-scope" id="view"><!-- uiView:  --><div ui-view="" class="ng-scope">
            <div class="item ng-scope" id="profile">
                <div class="item-bg">
                    <img src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg');?>" class="blur opacity-3">
                </div>
                <div class="p-a-md">
                    <div class="row m-t">
                        <div class="col-sm-7">
                            <a href="" class="pull-left m-r-md">
                                <span class="avatar w-96">
                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg');?>">
                                  <i class="on b-white"></i>
                                </span>
                            </a>
                            <div class="clear m-b">
                                <h3 class="m-a-0 m-b-xs">Jean Reyes</h3>
                                <p class="text-muted"><span class="m-r">UX/UI Director</span> <small><i class="fa fa-map-marker m-r-xs"></i>London, UK</small></p>
                                <div class="block clearfix m-b">
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook indigo"></i>
                                    </a>
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter light-blue"></i>
                                    </a>
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus red"></i>
                                    </a>
                                    <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin cyan-600"></i>
                                    </a>
                                </div>
                                <a href="" class="btn btn-sm warn btn-rounded m-b">Follow</a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <p class="text-md profile-status" ng-init="user.status='I am feeling good!'" ng-binding="user.status">I am feeling good!</p>
                            <button class="btn btn-sm white" data-toggle="collapse" data-target="#editor">Edit</button>
                            <div class="collapse box m-t-sm" id="editor">
                                <textarea class="form-control no-border ng-pristine ng-untouched ng-valid" rows="2" ng-model="user.status" placeholder="Type something..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dker p-x ng-scope">
                <div class="row">
                    <div class="col-sm-6 col-sm-push-6">
                        <div class="p-y text-center text-sm-right">
                            <a href="" class="inline p-x text-center">
                                <span class="h4 block m-a-0">2k</span>
                                <small class="text-xs text-muted">Người theo dõi</small>
                            </a>
                            <a href="" class="inline p-x b-l b-r text-center">
                                <span class="h4 block m-a-0">250</span>
                                <small class="text-xs text-muted">Đang theo dõi</small>
                            </a>
                            <a href="" class="inline p-x text-center">
                                <span class="h4 block m-a-0">89</span>
                                <small class="text-xs text-muted">Khuyến mãi</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-pull-6">
                        <div class="p-y-md clearfix nav-active-primary">
                            <ul class="nav nav-pills nav-sm">
                                <li class="nav-item active">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_1">Quản lý tài khoản</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_2">Đăng tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_3">Bạn bè</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="tab" data-target="#tab_4">Lịch sử</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding ng-scope">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane p-v-sm active" id="tab_1">
                                <div ui-view="" class="ng-scope">
                                    <div class="">
                                        <div class="col-sm-3 col-lg-2">
                                            <div class="p-y">
                                                <div class="nav-active-border left b-primary">
                                                    <ul class="nav nav-sm">
                                                        <li class="nav-item">
                                                            <a class="nav-link block active" href="" data-toggle="tab" data-target="#tab-1" aria-expanded="true">Profile</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link block" href="" data-toggle="tab" data-target="#tab-2" aria-expanded="false">Account Settings</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link block" href="" data-toggle="tab" data-target="#tab-3" aria-expanded="false">Emails</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link block" href="" data-toggle="tab" data-target="#tab-4" aria-expanded="false">Notifications</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link block" href="" data-toggle="tab" data-target="#tab-5" aria-expanded="false">Security</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-lg-10 light lt bg-auto">
                                            <div class="tab-content pos-rlt">
                                                <div class="tab-pane active" id="tab-1" aria-expanded="true">
                                                    <div class="p-a-md _600">Public profile</div>
                                                    <form role="form" class="p-a-md col-md-6 ng-pristine ng-valid">
                                                        <div class="form-group">
                                                            <label>Profile picture</label>
                                                            <div class="form-file">
                                                                <input type="file">
                                                                <button class="btn white">Upload new picture</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>URL</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Location</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Available for hire
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-info m-t">Update</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab-2" aria-expanded="false">
                                                    <div class="p-a-md _600">Account settings</div>
                                                    <form role="form" class="p-a-md col-md-6 ng-pristine ng-valid">
                                                        <div class="form-group">
                                                            <label>Client ID</label>
                                                            <input type="text" disabled="" class="form-control" value="d6386c0651d6380745846efe300b9869">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Secret Key</label>
                                                            <input type="text" disabled="" class="form-control" value="3f9573e88f65787d86d8a685aeb4bd13">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>App Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>App URL</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-info m-t">Update</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab-3" aria-expanded="false">
                                                    <div class="p-a-md _600">Emails</div>
                                                    <form role="form" class="p-a-md col-md-6 ng-pristine ng-valid">
                                                        <p>E-mail me whenever</p>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone posts a comment
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone follow me
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-info m-t">Update</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab-4" aria-expanded="false">
                                                    <div class="p-a-md _600">Notifications</div>
                                                    <form role="form" class="p-a-md col-md-6 ng-pristine ng-valid">
                                                        <p>Notice me whenever</p>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone seeing my profile page
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone follow me
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="ui-check">
                                                                <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-info m-t">Update</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab-5" aria-expanded="false">
                                                    <div class="p-a-md _600">Security</div>
                                                    <div class="p-a-md">
                                                        <div class="clearfix m-b-lg">
                                                            <form role="form" class="col-md-6 p-a-0 ng-pristine ng-valid">
                                                                <div class="form-group">
                                                                    <label>Old Password</label>
                                                                    <input type="password" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>New Password</label>
                                                                    <input type="password" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>New Password Again</label>
                                                                    <input type="password" class="form-control">
                                                                </div>
                                                                <button type="submit" class="btn btn-info m-t">Update</button>
                                                            </form>
                                                        </div>

                                                        <p><strong>Delete account?</strong></p>
                                                        <button type="submit" class="btn btn-danger m-t" data-toggle="modal" data-target="#modal">Delete Account</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- .modal -->
                                    <div id="modal" class="modal fade animate black-overlay ng-scope" data-backdrop="false">
                                        <div class="row-col h-v">
                                            <div class="row-cell v-m">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content flip-y">
                                                        <div class="modal-body text-center">
                                                            <p class="p-y m-t"><i class="fa fa-remove text-warning fa-3x"></i></p>
                                                            <p>Are you sure to delete your account?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn white p-x-md" data-dismiss="modal">No</button>
                                                            <button type="button" class="btn btn-danger p-x-md" data-dismiss="modal">Yes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / .modal -->
                                </div>
                            </div>
                            <div class="tab-pane p-v-sm" id="tab_2">
                                <div class="streamline b-l m-b m-l">
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">2 minutes ago</div>
                                            <p>Check your Internet connection</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">9:30</div>
                                            <p>Meeting with tech leader</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-success">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">8:30</div>
                                            <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Wed, 25 Mar</div>
                                            <p>Finished task <a href="" class="text-info">Testing</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 10 Mar</div>
                                            <p>Trip to the moon</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sat, 5 Mar</div>
                                            <p>Prepare for presentation</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sun, 11 Feb</div>
                                            <p><a href="" class="text-info">Jessi</a> assign you a task <a href="" class="text-info">Mockup Design</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 17 Jan</div>
                                            <p>Follow up to close deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-v-sm" id="tab_3">
                                <div class="row row-sm ng-scope">
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg');?>" alt="...">
                                                  <i class="on b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Crystal Guerrero</a></div>
                                                <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a1.jpg');?>" alt="...">
                                                  <i class="on b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">James Garcia</a></div>
                                                <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a2.jpg');?>" alt="...">
                                                  <i class="away b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Jean Schneider</a></div>
                                                <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a3.jpg');?>" alt="...">
                                                  <i class="busy b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Joe Holmes</a></div>
                                                <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a4.jpg');?>" alt="...">
                                                  <i class="on b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Judith Garcia</a></div>
                                                <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a5.jpg');?>" alt="...">
                                                  <i class="on b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Judy Woods</a></div>
                                                <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a6.jpg');?>" alt="...">
                                                  <i class="on b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">OlsJesse Russell</a></div>
                                                <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a7.jpg');?>" alt="...">
                                                  <i class="away b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Richard Carr</a></div>
                                                <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 avatar">
                                                  <img src="<?php echo asset('public/assets/ui_kit/assets/images/a8.jpg');?>" alt="...">
                                                  <i class="busy b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Sara King</a></div>
                                                <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 circle amber avatar">
                                                  D
                                                  <i class="busy b-white bottom"></i>
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Douglas Torres</a></div>
                                                <small class="text-muted text-ellipsis">Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 circle blue">
                                                  J
                                                </span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Jeremy Scott</a></div>
                                                <small class="text-muted text-ellipsis">Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <div class="list-item box r m-b">
                                            <a herf="" class="list-left">
                                                <span class="w-40 circle green">M</span>
                                            </a>
                                            <div class="list-body">
                                                <div class="text-ellipsis"><a href="">Melissa Garza</a></div>
                                                <small class="text-muted text-ellipsis">Blogger</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-v-sm" id="tab_4">
                                <div class="row m-b">
                                    <div class="col-xs-6">
                                        <small class="text-muted">Cell Phone</small>
                                        <div class="_500">1243 0303 0333</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="text-muted">Family Phone</small>
                                        <div class="_500">+32(0) 3003 234 543</div>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-6">
                                        <small class="text-muted">Reporter</small>
                                        <div class="_500">Coch Jose</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="text-muted">Manager</small>
                                        <div class="_500">James Richo</div>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">Bio</small>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <div>
                            <div class="box">
                                <div class="box-header">
                                    <h3>Who to follow</h3>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list no-border p-b">
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                                            <span class="w-40 avatar">
                                              <img src="<?php echo asset('public/assets/ui_kit/assets/images/a4.jpg');?>" alt="...">
                                              <i class="on b-white bottom"></i>
                                            </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Chris Fox</a></div>
                                            <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                                            <span class="w-40 avatar">
                                              <img src="<?php echo asset('public/assets/ui_kit/assets/images/a5.jpg');?>" alt="...">
                                              <i class="on b-white bottom"></i>
                                            </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Mogen Polish</a></div>
                                            <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                                            <span class="w-40 avatar">
                                              <img src="<?php echo asset('public/assets/ui_kit/assets/images/a6.jpg');?>" alt="...">
                                              <i class="busy b-white bottom"></i>
                                            </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Joge Lucky</a></div>
                                            <small class="text-muted text-ellipsis">Art director, Movie Cut</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                                            <span class="w-40 avatar">
                                              <img src="<?php echo asset('public/assets/ui_kit/assets/images/a7.jpg');?>" alt="...">
                                              <i class="away b-white bottom"></i>
                                            </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Folisise Chosielie</a></div>
                                            <small class="text-muted text-ellipsis">Musician, Player</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <a herf="" class="list-left">
                                            <span class="w-40 circle green avatar">
                                              P
                                              <i class="away b-white bottom"></i>
                                            </span>
                                        </a>
                                        <div class="list-body">
                                            <div><a href="">Peter</a></div>
                                            <small class="text-muted text-ellipsis">Musician, Player</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box info dk">
                                <div class="box-body">
                                    <a href="" class="pull-left m-r">
                                        <img src="<?php echo asset('public/assets/ui_kit/assets/images/a0.jpg');?>" class="img-circle w-40">
                                    </a>
                                    <div class="clear">
                                        <a href="">@Mike Mcalidek</a>
                                        <small class="block text-muted">2,415 followers / 225 tweets</small>
                                        <a href="" class="btn btn-sm btn-rounded btn-info m-t-xs"><i class="fa fa-twitter m-t-xs"></i> Follow</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h2>Latest Tweets</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                    <li class="list-item">
                                        <div class="list-body">
                                            <p>Wellcome <a href="" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
                                            <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 minuts ago</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-body">
                                            <p>Morbi nec <a href="" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                                            <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 1 hour ago</small>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-body">
                                            <p><a href="" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                                            <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 hours ago</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</div>
<div class="margin-top-fixed-layout">
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
                <a href="#" class="scrollup"><img src="<?php echo asset('public/assets/app/images/icon/icon2.png'); ?>" alt=""></a>
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

<script src="<?php echo asset('public/assets/uikit/js/config.lazyload.js'); ?>"></script>

<script src="<?php echo asset('public/assets/uikit/js/palette.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-load.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-jp.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-include.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-device.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-form.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-nav.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-screenfull.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-scroll-to.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ui-toggle-class.js'); ?>"></script>

<script src="<?php echo asset('public/assets/ui_kit/html/scripts/app.js'); ?>"></script>

<!-- ajax -->
<script src="<?php echo asset('public/assets/app/js/libs/jquery.pjax.js'); ?>"></script>
<script src="<?php echo asset('public/assets/uikit/js/ajax.js'); ?>"></script>
<!-- Metronic -->
<script src="<?php echo asset('public/assets/metronic/js/jquery.uniform.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/metronic/js/bootstrap-switch.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/metronic/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/metronic/js/jquery.pulsate.min.js'); ?>"></script>
<script src="<?php echo asset('public/assets/metronic/js/app.min.js'); ?>"></script>

<script src="<?php echo asset('public/assets/metronic/js/components-select2.min.js'); ?>"></script>

<!--Slick Slider-->
<script src="<?php echo asset('public/assets/metronic/js/slick.min.js'); ?>" type="text/javascript"></script>
<!--<script src="--><?php //echo asset('public/assets/app/lib/angular.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo asset('public/assets/app/js/ngscript.js'); ?><!--"></script>-->
<script src="<?php echo asset('public/assets/app/js/myscript.js'); ?>"></script>
</body>
</html>