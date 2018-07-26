<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.2/jquery/bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 07:30:06 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>

    <body data-ma-theme="green">
        <main class="main">

            @include('partials.header')

            @include('partials.super_admin_nav')

            @yield('content')

        </main>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

        <script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jqvmap/dist/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/salvattore/dist/salvattore.min.js') }}"></script>
        <script src="{{ asset('vendors/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>

        <!-- Vendors: Data tables -->
        <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>

        <script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

        <!-- Charts and maps-->
        <script src="{{ asset('demo/js/flot-charts/curved-line.js') }}"></script>
        <script src="{{ asset('demo/js/flot-charts/dynamic.js') }}"></script>
        <script src="{{ asset('demo/js/flot-charts/line.js') }}"></script>
        <script src="{{ asset('demo/js/flot-charts/chart-tooltips.js') }}"></script>
        <script src="{{ asset('demo/js/other-charts.js') }}"></script>
        <script src="{{ asset('demo/js/jqvmap.js') }}"></script>

        <!-- App functions and actions -->
        <script src="{{ asset('js/app.min.js') }}"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.2/jquery/bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 07:31:15 GMT -->
</html>
