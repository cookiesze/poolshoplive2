
    <!-- fluid app aside -->
  <div class="left navside dark dk" layout="column">
      <div class="navbar no-radius">
      <!-- brand -->
      <a class="navbar-brand">
          <img src="{{ asset('assets/uploads/logo/1679862863_Golden_-1.png')}}" alt=".">
      </a>
      <!-- / brand -->
    </div>
    <div flex class="hide-scroll">
        <nav class="scroll nav-light">

            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>

              <li>
                <a href="{{ url('/admin/dashboard') }}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="{{ asset('admin/theme/assets/images/i_0.svg')}}"></span>
                    </i>
                  </span>
                  <span style="color: black;" class="nav-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Systems</small>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8eb;
                    </i>
                  </span>
                  <span class="nav-text">Slideshow</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/slideshow') }}" >
                      <span class="nav-text">All Slideshow</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-slideshow') }}" >
                      <span class="nav-text">Adds Slideshow</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="fa fa-youtube-play"></i>
                  </span>
                  <span class="nav-text">Videos</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/videos') }}" >
                      <span class="nav-text">All Videos</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-video') }}" >
                      <span class="nav-text">Adds Videos</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="fa fa-map-marker"></i>
                  </span>
                  <span class="nav-text">Contact</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/contact_us') }}" >
                      <span class="nav-text">All Contact</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-contact') }}" >
                      <span class="nav-text">Adds Contact</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="fa fa-star"></i>
                  </span>
                  <span class="nav-text">Brands</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/brands') }}" >
                      <span class="nav-text">All Brands</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-brands') }}" >
                      <span class="nav-text">Adds Brands</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="fa fa-star"></i>
                  </span>
                  <span class="nav-text">Logos</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/logo') }}" >
                      <span class="nav-text">All logo</span>
                    </a>
                  </li>
                  <!--
                  <li>
                    <a href="{{ url('/admin/create-logo') }}" >
                      <span class="nav-text">Adds logo</span>
                    </a>
                  </li>
                -->
                </ul>
              </li>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Blog Systems</small>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons " viewBox="0 0 48 48">&#xe906;</i>
                  </span>
                  <span class="nav-text">Tags</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/tags') }}" >
                      <span class="nav-text">All Tags</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-tags') }}" >
                      <span class="nav-text">Adds Tags</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!--<b class="label rounded label-sm primary"></b>-->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3e8;</i>
                  </span>
                  <span class="nav-text">News</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/posts') }}" >
                      <span class="nav-text">All News</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-post') }}" >
                      <span class="nav-text">Adds News</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-header hidden-folded">
                <small class="text-muted">Products Systems</small>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label">
                    <!-- <b class="label label-sm accent">8</b> -->
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;</i>
                  </span>
                  <span class="nav-text">Categories Products</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/categories') }}" >
                      <span class="nav-text">All Categories</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-category') }}" >
                      <span class="nav-text">Adds Category</span>
                    </a>
                  </li>
                </ul>
              </li>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-chevron-circle-down"></i>
                  </span>
                  <span class="nav-label"><b class="label no-bg">9</b></span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe896;</i>
                  </span>
                  <span class="nav-text">Products</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/products') }}" >
                      <span class="nav-text">All Products</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-products') }}" >
                      <span class="nav-text">Adds Products</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        </nav>
    </div>
    <div flex-no-shrink class="b-t">
      <div class="nav-fold">
            <a href="#">
                <span class="pull-left">
                <img src="{{ asset('admin/theme/assets/images/a0.jpg')}}" alt="..." class="w-40 img-circle">
                </span>
                <span class="clear hidden-folded p-x">
                <span class="block _500">{{ Auth::user()->name }}</span>
                <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
                </span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                <small class="label red" title="Active"><i class="material-icons" ></i> Sign out</small>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
      </div>
    </div>
  </div>
