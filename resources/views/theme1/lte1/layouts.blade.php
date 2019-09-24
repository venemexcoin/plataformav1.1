<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset("fron/$theme/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("fron/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- CSS personales y de paginas  -->
  <link href="{{asset("fron/css/app.css")}}">


  @yield("styles")

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <!--Header -->
    @include("theme1/$theme1/header")
    <!--./Header -->
    <!--ASIDE -->
    @include("theme1/$theme1/aside")
    <!--ASIDE -->

     <!-- Main content -->
    
        @if(session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                    <div class="alert-success">
                        {{ session('info') }}
                    </div>
                    </div>
                </div>
            </div>
        @endif
        <br/>
        <br/>
                <div class="container">
               <!-- contenido -->
                @yield("content")
               <!-- /.contenido -->
                </div>


</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset("fron/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("fron/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("fron/$theme/dist/js/adminlte.min.js")}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@yield('scripts')
<!-- CSS personales y de paginas  -->
<script src="{{asset("fron/js/app.js")}}"></script>


</body>
</html>




