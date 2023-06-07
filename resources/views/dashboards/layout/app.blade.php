<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboards') }}/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{ asset('dashboards') }}/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

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
    <script src="{{ asset('dashboards') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('dashboards') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboards') }}/js/sidebarmenu.js"></script>
    <script src="{{ asset('dashboards') }}/js/app.min.js"></script>
    <script src="{{ asset('dashboards') }}/libs/simplebar/dist/simplebar.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</body>

@yield('scriptJS')

</html>