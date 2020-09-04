<html>
    <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <link rel="icon" href="{{ asset('/assets/admin/images/favicon.ico') }}" type="image/x-icon">
   <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="{{ asset('assets/admin/') }}/js/jquery-3.3.1.min.js"></script> -->
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/css/jquery-ui-git.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Form validation -->
    <script type="text/javascript" src="{{ asset('assets/admin/') }}/js/validation.js"></script>
    <!-- ajax request -->
    <script src="{{ asset('assets/admin/') }}/js/formValidation.js"></script>
    
    </head>
    <body class="app sidebar-mini pace-done">
    <!-- header -->
    @include('layouts.admin.header')
    <!-- sidebar -->
    @include('layouts.admin.sidebar')
     <!-- content -->
    @yield('content')	     
    <script src="{{ asset('assets/admin/') }}/js/jquery-ui-git.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('assets/admin/') }}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('assets/admin/') }}/js/plugins/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
    </body>
</html>