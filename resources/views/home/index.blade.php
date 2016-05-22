@extends('layouts.main')

@section('title', 'didauday.vn')

@section('css')
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
@stop

@section('script')
        <!-- Metronic -->
        <script src="<?php echo asset('public/assets/metronic/js/jquery.uniform.min.js'); ?>"></script>
        <script src="<?php echo asset('public/assets/metronic/js/bootstrap-switch.min.js'); ?>"></script>
        <script src="<?php echo asset('public/assets/metronic/js/select2.full.min.js'); ?>"></script>
        <script src="<?php echo asset('public/assets/metronic/js/jquery.pulsate.min.js'); ?>"></script>
        <script src="<?php echo asset('public/assets/metronic/js/app.min.js'); ?>"></script>

        <script src="<?php echo asset('public/assets/metronic/js/components-select2.min.js'); ?>"></script>

        <!--Slick Slider-->
        <script src="<?php echo asset('public/assets/metronic/js/slick.min.js'); ?>" type="text/javascript"></script>
@stop

@section('content')


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
                                    <img src="@{{sv.image}}"
                                         class="w-full" ng-click="modal('detail',sv.id)" ui-toggle-class="zoom" ui-target="#animate">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="h-1x"><a href="" class="_800">@{{ sv.name }}</a></div>
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
                <div id="m-a-a" class="modal fade animate ng-scope in detail-modal" data-backdrop="true">
                    <div class="modal-dialog modal-lg" id="animate" ui-class="zoom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body text-center p-lg">
                                <div class="col-lg-6">
                                    <div class="img-modal">
                                        <img src="@{{ detail.image }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 right-ct">
                                    <div class="content-md">
                                        <h4>@{{ detail.name }}</h4>
                                        <div class="text-muted m-b-xs">
                                            <span class="km">Khuyến mãi 15%</span>
                                            <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                            <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                        </div>
                                        <div class="content-km">
                                            <p>
                                                @{{detail.content}}
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

@stop
