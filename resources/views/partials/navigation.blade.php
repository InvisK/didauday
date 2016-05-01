<div class="white r box-shadow-z0 m-b navbar-md">
    <div class="navbar">
        <div class="container">
            <a data-toggle="collapse" data-target="#navbar-3" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                <i class="material-icons"></i>
            </a>
            <!-- brand -->
            <a class="navbar-brand">
                <img src="{{URL::asset('assets/app/images/logo.jpg')}}" alt=".">
                <span class="hidden-folded inline">Đi Đâu Đây ?</span>
            </a>
            <!-- / brand -->

            <!-- nabar right -->
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" href="" data-toggle="dropdown">
                        <i class="material-icons"></i>
                        <span class="label label-sm up warn">3</span>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu pull-right w-xl animated fadeInUp no-bg no-border no-shadow">
                        <div class="scrollable" style="max-height: 220px">
                            <ul class="list-group list-group-gap m-a-0">
                                <li class="list-group-item black lt box-shadow-z0 b">
          <span class="pull-left m-r">
            <img src="{{URL::asset('assets/ui_kit/assets/images/a0.jpg')}}" alt="..." class="w-40 img-circle">
          </span>
          <span class="clear block">
            Use awesome <a href="" class="text-primary">animate.css</a><br>
            <small class="text-muted">10 minutes ago</small>
          </span>
                                </li>
                                <li class="list-group-item black lt box-shadow-z0 b">
          <span class="pull-left m-r">
            <img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}" alt="..." class="w-40 img-circle">
          </span>
          <span class="clear block">
            <a href="" class="text-primary">Joe</a> Added you as friend<br>
            <small class="text-muted">2 hours ago</small>
          </span>
                                </li>
                                <li class="list-group-item dark-white text-color box-shadow-z0 b">
          <span class="pull-left m-r">
            <img src="{{URL::asset('assets/ui_kit/assets/images/a2.jpg')}}" alt="..." class="w-40 img-circle">
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
                    <a href="" class="nav-link dropdown-toggle clear" data-toggle="dropdown" aria-expanded="false">
              <span class="hidden-md-down nav-text m-r-sm text-right">
                <span class="block l-h-1x _500">Hạ Trùng Vương</span>
                <small class="block l-h-1x text-muted"><i class="material-icons text-md"></i> Hồ Chí Minh, VN</small>
              </span>
              <span class="avatar w-32">
                <img src="{{URL::asset('assets/ui_kit/assets/images/a1.jpg')}}" alt="...">
                <i class="away b-white left"></i>
              </span>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-scale">
                        <a class="dropdown-item" ui-sref="app.inbox.list">
                            <span>Inbox</span>
                            <span class="label warn m-l-xs">3</span>
                        </a>
                        <a class="dropdown-item" ui-sref="app.page.profile">
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" ui-sref="app.page.setting">
                            <span>Settings</span>
                            <span class="label primary m-l-xs">3/9</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" ui-sref="app.docs">
                            Need help?
                        </a>
                        <a class="dropdown-item" ui-sref="access.signin">Sign out</a>
                    </div>
                </li>
            </ul>
            <!-- / navbar right -->
            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="navbar-3">
                <!-- search form -->
                <form class="navbar-form form-inline  pull-none-sm navbar-item v-m" role="search">
                    <div class="form-group l-h m-a-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control p-x b-a rounded" placeholder="Nhập từ khóa bất kì...">
                        </div>
                    </div>
                    <div class="form-group l-h m-a-0">
                        <div class="input-group input-group-sm">
                            <select id="single" class="form-control select2" ui-jp="select2"
                                    ui-options="{theme: 'bootstrap'}">

                                <optgroup label="Chủ đề phổ biến">
                                    <option value="AK">Ăn uống</option>
                                    <option value="HI" disabled="disabled">Thể thao</option>
                                </optgroup>
                                <optgroup label="Khu vực">
                                    <option value="CA">Hồ Chí Minh</option>
                                    <option value="NV">Hà Nội</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group l-h m-a-0">
                        <div class="input-group input-group-sm">
                              <span class="input-group-btn">
                                <button type="submit" class="btn white b-a rounded no-shadow"><i
                                            class="fa fa-search"></i></button>
                              </span>
                        </div>
                    </div>
                </form>
                <!-- / search form -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
</div>