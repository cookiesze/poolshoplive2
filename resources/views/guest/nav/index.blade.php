<!--Start Main Header-->
<header class="main-header header-style2 stricky">
    <div class="inner-container clearfix">
        <div class="logo-box-style2 float-left">
            <a href="/">
                <img src="{{ asset('assets/uploads/logo/1679862863_Golden_-1.png') }}" style="height: 48px" class="edit-image" alt="">
            </a>
        </div>
        <div class="main-menu-box float-right">
            <nav class="main-menu style2 clearfix">
                <div class="navbar-header clearfix">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="{{ (request()->is('/')) ? 'current' : '' }}"><a href="/">Home</a></li>
                        <li class="{{ (request()->is('guest/about_us')) ? 'current' : '' }}"><a href="{{ url('/guest/about_us') }}">About Us</a>
                        </li>
                        <li class="{{ (request()->is('guest/product')) ? 'current' : '' }}"><a href="{{ url('/guest/product') }}">Products</a>
                        </li>
                        </li>
                        <li class="{{ (request()->is('guest/post')) ? 'current' : '' }}"><a href="{{ url('/guest/post') }}">News</a>
                        </li>
                        <li class="{{ (request()->is('guest/contact_us')) ? 'current' : '' }}"><a href="{{ url('/guest/contact_us') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="mainmenu-right style2">
                <div class="outer-search-box">
                    <div class="seach-toggle"><i class="fa fa-search"></i></div>
                    <ul class="search-box">
                        <li>
                            <form method="GET" action="{{ url('/guest/post/') }}">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="ค้นหาข่าว" name="search_name" value="{{ old('search_name') }}" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Main Header-->
