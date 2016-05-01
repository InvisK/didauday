@extends('layouts.main')

@section('title', 'didauday.vn')

@section('content')
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0"></li>
            </ol>
            <div class="carousel-inner " role="listbox">
                <div class="carousel-item active ">
                    <div class="col-lg-4 nopadding">
                        <img src="{{URL::asset('assets/app/images/banner1.jpg')}}" alt="First slide">
                    </div>
                    <div class="col-lg-4 nopadding">
                        <img src="{{URL::asset('assets/app/images/banner2.jpg')}}" alt="First slide">
                    </div>
                    <div class="col-lg-4 nopadding">
                        <img src="{{URL::asset('assets/app/images/banner3.jpg')}}" alt="First slide">
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
            <div class="col-lg-2">
                <div class="navside white r box-shadow-z0 m-b">
                    <div class="navbar">
                        <!-- brand -->
                        <a class="navbar-brand">
                            <span class="hidden-folded inline">Chuyên Mục</span>
                        </a>
                        <!-- / brand -->
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
            </div>
            <div class="col-lg-10">
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
                                    <span class="hidden-folded inline">Trang Chủ</span>

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
                                    phù hợp túi tiền nhé ^^</p>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="row gutter-0 white ">
                    <div class="col-lg-12 margin-top-fixed-content gutter-10 box-shadow-z2 ">
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <a class="pull-right text-white _800">15%</a>
                                        <a href="" class="pull-left text-u-c label label-md danger">Food</a>
                                    </div>
                                    <img src="{{URL::asset('assets/app/images/testimage.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage2.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage3.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage4.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage2.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage3.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage4.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
                                    <img src="{{URL::asset('assets/app/images/testimage2.jpg')}}" class="w-full">
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">[Cửa Hàng] Bún cua hà nội</a></div>
                                    <div class="m-b h-3x">
                                        <div class="m-b-sm">Liked:</div>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}"
                                                        class="w-32 rounded"></a>
                                        <a href=""><img src="{{URL::asset('assets/ui_kit/assets/images/a3.jpg')}}"
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
    <style>
        .carousel img {
            width: 365px;
            height: 270px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }

        .gutter-10.row {
            margin-right: -5px;
            margin-left: -5px;
        }

        .gutter-10 > [class^="col-"], .gutter-10 > [class^=" col-"] {
            padding-right: 5px;
            padding-left: 5px;
        }

        .gutter-0.row {
            margin-right: -0px;
            margin-left: -0px;
        }

        .gutter-0 > [class^="col-"], .gutter-0 > [class^=" col-"] {
            padding-right: 0px;
            padding-left: 0px;
        }

        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }

        .margin-top-fixed-layout {
            margin-top: 20px;
        }

        .margin-top-fixed-content {
            margin-top: 10px;
        }
    </style>
@stop
