
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
                <a href="{{ url('/home') }}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="{{ asset('admin/theme/assets/images/i_0.svg')}}"></span>
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-header">
                <p style="color: #fcc100" class="">Systems</p>
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
                    <i  class="fa fa-youtube-play"></i>
                  </span>
                  <span class="nav-text">เว็บส่วนตัว</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{ url('/admin/videos') }}" >
                      <span class="nav-text"> - ตั้งค่าเว็นไชต์ส่วนตัว</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/admin/create-video') }}" >
                      <span class="nav-text"> - เซลล์เพจสินค้า</span>
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
                  <span class="nav-text">คลังข้อมูล</span>
                </a>
                <ul class="nav-sub">
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - ภาพโปรโมท</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - รูปทริปท่องเที่ยว</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - คลังรูป (สินค้า)</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - คลังวิดีโอ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - Artwork</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - แคปชั่น</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/videos') }}" >
                          <span class="nav-text"> - Presentation</span>
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
                <img src="{{ asset('assets/uploads/avatar/') }}/{{ Auth::user()->avatar }}" alt="..." class="w-40 img-circle">
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
