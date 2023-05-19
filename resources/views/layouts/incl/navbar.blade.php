
<div class="navbar">
    <!-- Open side - Naviation on mobile -->
    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
      <i class="material-icons">&#xe5d2;</i>
    </a>
    <!-- / -->

    <!-- Page title - Bind to $state's title -->
    <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>
    <!-- / -->

    <!-- navbar right -->
    <ul class="nav navbar-nav pull-right">
      <li class="nav-item dropdown pos-stc-xs">
        <a class="nav-link" href data-toggle="dropdown">
          <i class="material-icons">&#xe7f5;</i>
          <span class="label label-sm up warn">3</span>
        </a>
        <div ui-include="{{ asset('admin/views/blocks/dropdown.notification.html')}}"></div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link clear" href data-toggle="dropdown">
          <span class="avatar w-32">
            <img src="{{ asset('assets/uploads/avatar/') }}/{{ Auth::user()->avatar }}">
            <i class="on b-white bottom"></i>
          </span>
        </a>
        <div class="dropdown-menu pull-right dropdown-menu-scale">
            <a class="dropdown-item" href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}" ui-sref="app.page.profile">
              <span>Profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" ui-sref="access.signin" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons" ></i> Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
      </li>
      <li class="nav-item hidden-md-up">
        <a class="nav-link" data-toggle="collapse" data-target="#collapse">
          <i class="material-icons">&#xe5d4;</i>
        </a>
      </li>
    </ul>
    <!-- / navbar right -->
    <div class="collapse navbar-toggleable-sm" id="collapse">
        <div ui-include="{{ asset('admin/views/blocks/navbar.form.right.html')}}"></div>
        <form class="navbar-form form-inline pull-right pull-none-sm navbar-item v-m ng-pristine ng-valid ng-scope" role="search">
            <div class="form-group l-h m-a-0">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm p-x b-a rounded" name="search_name" value="{{ old('search_name') }}"ß placeholder="Search projects...">
                </div>
            </div>
        </form>
        <!-- link and dropdown -->
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href data-toggle="dropdown">
              <i class="fa fa-fw fa-plus text-muted"></i>
              <span>New</span>
            </a>
            <div ui-include="{{ asset('admin/views/blocks/dropdown.new.html')}}"></div>
          </li>
        </ul>
        <!-- / -->
    </div>

    <!-- navbar collapse -->

    <!-- / navbar collapse -->
</div>
