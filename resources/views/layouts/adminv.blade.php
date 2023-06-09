<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

  <!-- style -->
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/animate.css/animate.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/glyphicons/glyphicons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/material-design-icons/material-design-icons.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('admin/theme/assets/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/styles/app.css')}}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/styles/font.css')}}" type="text/css" />
</head>

<body>
  <div class="app" id="app">



  <!-- aside -->
  <div id="aside" class="app-aside modal fade nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" layout="column">
  	  <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'../assets/images/logo.svg'"></div>
        	<img src="../assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">Flatkit</span>
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
                  <a href="dashboard.html" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label rounded label-sm primary">5</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Apps</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="inbox.html" >
                        <span class="nav-text">Inbox</span>
                      </a>
                    </li>
                    <li>
                      <a href="contact.html" >
                        <span class="nav-text">Contacts</span>
                      </a>
                    </li>
                    <li>
                      <a href="calendar.html" >
                        <span class="nav-text">Calendar</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Layouts</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="headers.html" >
                        <span class="nav-text">Header</span>
                      </a>
                    </li>
                    <li>
                      <a href="asides.html" >
                        <span class="nav-text">Aside</span>
                      </a>
                    </li>
                    <li>
                      <a href="footers.html" >
                        <span class="nav-text">Footer</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="widget.html" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Widgets</span>
                  </a>
                </li>

                <li class="nav-header hidden-folded">
                  <small class="text-muted">Components</small>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label label-sm accent">8</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe429;
                        <span ui-include="'../assets/images/i_4.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">UI kit</span>
                  </a>
                  <ul class="nav-sub nav-mega nav-mega-3">
                    <li>
                      <a href="arrow.html" >
                        <span class="nav-text">Arrow</span>
                      </a>
                    </li>
                    <li>
                      <a href="box.html" >
                        <span class="nav-text">Box</span>
                      </a>
                    </li>
                    <li>
                      <a href="button.html" >
                        <span class="nav-text">Button</span>
                      </a>
                    </li>
                    <li>
                      <a href="color.html" >
                        <span class="nav-text">Color</span>
                      </a>
                    </li>
                    <li>
                      <a href="dropdown.html" >
                        <span class="nav-text">Dropdown</span>
                      </a>
                    </li>
                    <li>
                      <a href="grid.html" >
                        <span class="nav-text">Grid</span>
                      </a>
                    </li>
                    <li>
                      <a href="icon.html" >
                        <span class="nav-text">Icon</span>
                      </a>
                    </li>
                    <li>
                      <a href="label.html" >
                        <span class="nav-text">Label</span>
                      </a>
                    </li>
                    <li>
                      <a href="list.html" >
                        <span class="nav-text">List Group</span>
                      </a>
                    </li>
                    <li>
                      <a href="modal.html" >
                        <span class="nav-text">Modal</span>
                      </a>
                    </li>
                    <li>
                      <a href="nav.html" >
                        <span class="nav-text">Nav</span>
                      </a>
                    </li>
                    <li>
                      <a href="progress.html" >
                        <span class="nav-text">Progress</span>
                      </a>
                    </li>
                    <li>
                      <a href="social.html" >
                        <span class="nav-text">Social</span>
                      </a>
                    </li>
                    <li>
                      <a href="sortable.html" >
                        <span class="nav-text">Sortable</span>
                      </a>
                    </li>
                    <li>
                      <a href="streamline.html" >
                        <span class="nav-text">Streamline</span>
                      </a>
                    </li>
                    <li>
                      <a href="timeline.html" >
                        <span class="nav-text">Timeline</span>
                      </a>
                    </li>
                    <li>
                      <a href="map.vector.html" >
                        <span class="nav-text">Vector Map</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label"><b class="label no-bg">9</b></span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3e8;
                        <span ui-include="'../assets/images/i_5.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Pages</span>
                  </a>
                  <ul class="nav-sub nav-mega">
                    <li>
                      <a href="profile.html" >
                        <span class="nav-text">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="setting.html" >
                        <span class="nav-text">Setting</span>
                      </a>
                    </li>
                    <li>
                      <a href="search.html" >
                        <span class="nav-text">Search</span>
                      </a>
                    </li>
                    <li>
                      <a href="faq.html" >
                        <span class="nav-text">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a href="gallery.html" >
                        <span class="nav-text">Gallery</span>
                      </a>
                    </li>
                    <li>
                      <a href="invoice.html" >
                        <span class="nav-text">Invoice</span>
                      </a>
                    </li>
                    <li>
                      <a href="price.html" >
                        <span class="nav-text">Price</span>
                      </a>
                    </li>
                    <li>
                      <a href="blank.html" >
                        <span class="nav-text">Blank</span>
                      </a>
                    </li>
                    <li>
                      <a href="signin.html" >
                        <span class="nav-text">Sign In</span>
                      </a>
                    </li>
                    <li>
                      <a href="signup.html" >
                        <span class="nav-text">Sign Up</span>
                      </a>
                    </li>
                    <li>
                      <a href="forgot-password.html" >
                        <span class="nav-text">Forgot Password</span>
                      </a>
                    </li>
                    <li>
                      <a href="lockme.html" >
                        <span class="nav-text">Lockme Screen</span>
                      </a>
                    </li>
                    <li>
                      <a href="404.html" >
                        <span class="nav-text">Error 404</span>
                      </a>
                    </li>
                    <li>
                      <a href="505.html" >
                        <span class="nav-text">Error 505</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="'../assets/images/i_6.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Form</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="form.layout.html" >
                        <span class="nav-text">Form Layout</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.element.html" >
                        <span class="nav-text">Form Element</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.validation.html" >
                        <span class="nav-text">Form Validation</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.select.html" >
                        <span class="nav-text">Select</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.editor.html" >
                        <span class="nav-text">Editor</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.picker.html">
                        <span class="nav-text">Picker</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.wizard.html">
                        <span class="nav-text">Wizard</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.dropzone.html" class="no-ajax" >
                        <span class="nav-text">File Upload</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe896;
                        <span ui-include="'../assets/images/i_7.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Tables</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="static.html" >
                        <span class="nav-text">Static table</span>
                      </a>
                    </li>
                    <li>
                      <a href="datatable.html" >
                        <span class="nav-text">Datatable</span>
                      </a>
                    </li>
                    <li>
                      <a href="footable.html" >
                        <span class="nav-text">Footable</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label hidden-folded">
                      <b class="label label-sm info">N</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe1b8;
                        <span ui-include="'../assets/images/i_8.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Charts</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="chart.html" >
                        <span class="nav-text">Chart</span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-text">Echarts</span>
                      </a>
                      <ul class="nav-sub">
                        <li>
                          <a href="echarts-line.html" >
                            <span class="nav-text">line</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-bar.html" >
                            <span class="nav-text">Bar</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-pie.html" >
                            <span class="nav-text">Pie</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-scatter.html" >
                            <span class="nav-text">Scatter</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-radar-chord.html" >
                            <span class="nav-text">Radar &amp; Chord</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-gauge-funnel.html" >
                            <span class="nav-text">Gauges &amp; Funnel</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-map.html" >
                            <span class="nav-text">Map</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-header hidden-folded">
                  <small class="text-muted">Help</small>
                </li>

                <li class="hidden-folded" >
                  <a href="docs.html" >
                    <span class="nav-text">Documents</span>
                  </a>
                </li>

              </ul>
          </nav>
      </div>
      <div flex-no-shrink class="b-t">
        <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Jean Reyes</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->

  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->

            <!-- Page title - Bind to $state's title -->
            <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <!-- navbar right -->
            <ul class="nav navbar-nav pull-right">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->

            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="collapse">
              <div ui-include="'../views/blocks/navbar.form.right.html'"></div>
              <!-- link and dropdown -->
              <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href data-toggle="dropdown">
                    <i class="fa fa-fw fa-plus text-muted"></i>
                    <span>New</span>
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-a text-xs">
        <div class="pull-right text-muted">
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="../">About</a>
          <span class="text-muted">-</span>
          <a class="nav-link label accent" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h2>Basic form</h2>
            <small>Individual form controls receive some global styling. All textual &lt;input>, &lt;textarea>, and &lt;select> elements with .form-control are set to width: 100%; by default. Wrap labels and controls in .form-group for optimum spacing.</small>
          </div>
          <div class="box-divider m-a-0"></div>
          <div class="box-body">
            <form role="form">
                <div class="form-group col-xs-6">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group col-xs-6">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
              <a type="submit" class="btn white m-b">Submit</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- ############ PAGE END-->
@include('layouts.incl.ui')
    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->

  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->

<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="{{ asset('admin/theme/assets/libs/jquery/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap -->
  <script src="{{ asset('admin/theme/assets/libs/jquery/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{ asset('admin/theme/assets/libs/jquery/underscore/underscore-min.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/libs/jquery/PACE/pace.min.js') }}"></script>

  <script src="{{ asset('admin/theme/assets/scripts/config.lazyload.js') }}"></script>

  <script src="{{ asset('admin/theme/assets/scripts/palette.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-load.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-jp.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-include.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-device.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-form.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-nav.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-screenfull.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-scroll-to.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ui-toggle-class.js') }}"></script>

  <script src="{{ asset('admin/theme/assets/scripts/app.js') }}"></script>

  <!-- ajax -->
  <script src="{{ asset('admin/theme/assets/libs/jquery/jquery-pjax/jquery.pjax.js') }}"></script>
  <script src="{{ asset('admin/theme/assets/scripts/ajax.js') }}"></script>
<!-- endbuild -->
</body>
</html>
