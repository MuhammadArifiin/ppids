<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="{{ url('image/png') }}" sizes="16x16" href="{{ url('admin/plugins/images/favicon.png') }}">
    <link href="{{ url('admin/plugins/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ url('admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
    <link href="{{ url('admin/css/style.min.css') }}" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('admin.aside')
        @yield('content')
        @include('admin.footer')

    </div>

    <script src="{{ url('admin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('admin/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('admin/js/app-style-switcher.js') }}"></script>
    <script src="{{ url('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('admin/js/waves.js') }}"></script>
    <script src="{{ url('admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ url('admin/js/custom.js') }}"></script>
    <script src="{{ url('admin/plugins/bower_components/chartist/dist/chartist.min.js') }}"></script>
    <script
        src="{{ url('admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
    </script>
    <script src="{{ url('admin/js/pages/dashboards/dashboard1.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
    @yield('scripts')
</body>

</html>