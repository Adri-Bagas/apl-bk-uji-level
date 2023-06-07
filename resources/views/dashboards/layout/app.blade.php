<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboard') }}/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/styles.min.css" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar -->
        @include('dashboards.component.sidebar')

        <div class="body-wrapper">
            <!--  Header -->
            @include('dashboards.component.navbar')

            @yield('main-content')
        </div>
    </div>
    <script src="{{ asset('dashboard') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('dashboard') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/sidebarmenu.js"></script>
    <script src="{{ asset('dashboard') }}/js/app.min.js"></script>
    <script src="{{ asset('dashboard') }}/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>