<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
  <link href="{{ asset('admin/theme/assets/custom.css') }}" rel="stylesheet" />


  <script src="https://cdn.tiny.cloud/1/4ucvvl87nyhyln5eyny6wjf70jh8hsrsas390xgor2gc9ysx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous">



  @yield('styles')
</head>
<body>
  <div class="app" id="app">
      <!-- ############ LAYOUT START-->
      <!-- aside -->
      <div id="aside" class="app-aside modal fade nav-dropdown">
        @include('layouts.incl.aside')
      </div>
      <!-- / -->
      <!-- content -->
      <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow">
          <!-- navbar -->
          @include('layouts.incl.navbar')
          <!-- end navbar -->
        </div>
        <div class="app-footer">
          <!-- footer -->
          @include('layouts.incl.footer')
          <!-- end footer -->
        </div>
        <div ui-view class="app-body" id="view">
          <!-- ############ PAGE START-->
          @yield('content')
          <!-- ############ PAGE END-->
        </div>
      </div>
        <!-- ui -->
        @include('layouts.incl.ui')
          <!-- ############ LAYOUT END-->

  </div> <!-- class="app" -->
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


    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
 })
</script>
<script>
    ('input.del_btn').on('click', function() {
    let id = $(this).data('id');
    $.post('delete.php', { id: id })
     .done(function () {
         alert('Your picture has been deleted');
     })
     .fail(function () {
         alert('failure');
     });
});
</script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>
<!-- endbuild -->
</body>
</html>
