<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan Laravel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{ asset('/adminLTE/css/fontawesome-free/css/all.min.css') }} ">


    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('/adminLTE/css/adminlte.min.css') }} ">

    <link rel="stylesheet" href=" {{ asset('/adminLTE/css/dataTables.bootstrap4.min.css') }} ">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">

<div class="wrapper">

    <!-- Navbar -->
    @include('partials.navbar')
    <!-- /.navbar -->



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
        <img src=" {{ asset('/adminLTE/images/AdminLTELogo.png') }} "
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src=" {{ asset('/adminLTE/images/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        @include('partials.sidebar')
        <!-- /.sidebar-menu -->

    </div>
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Content Open -->
    @yield('content')
    <!-- Content Close -->
    
</div>
<!-- /.content-wrapper -->


<!-- footer -->
@include('partials.footer')
<!-- footer -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->  


<!-- jQuery -->
<script src=" {{ asset('/adminLTE/js/jquery.min.js') }}"></script>

<!-- AdminLTE App -->
<script src=" {{ asset('/adminLTE/js/adminlte.min.js') }}"></script>


<!-- Datatable plugin -->
@stack('scripts')


</body>
</html>
