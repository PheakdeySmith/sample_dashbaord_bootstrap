<!DOCTYPE html>
<!-- saved from url=(0082)https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html -->
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Soft UI Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png') }}">

    <!-- Fonts and Icons -->
    <link href="{{ asset('backend/assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend/assets') }}/css/nucleo-icons.css" rel="stylesheet">
    <link href="{{ asset('backend/assets') }}/css/nucleo-svg.css" rel="stylesheet">

    <script src="{{ asset('backend/assets') }}/js/42d5adcbca.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Your custom styles -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link id="pagestyle" href="{{ asset('backend/assets') }}/css/soft-ui-dashboard.min.css" rel="stylesheet">
    {{-- <script defer="" data-site="demos.creative-tim.com" src="{{ asset('backend/assets') }}/js/nepcha-analytics.js"></script> --}}
</head>
<body class="g-sidenav-show  bg-gray-100">
    <!-- Extra details for Live View on GitHub Pages -->

    {{-- Start Sidebar --}}
    @include('backend.partials.sidebar')
    {{-- End Sidebar --}}


    {{-- Start Content --}}
    @yield('content')
    {{-- End Content --}}


    {{-- Start Footer --}}
    @include('backend.partials.footer')
    {{-- End Footer --}}


    <!--   Core JS Files   -->
    <script src="{{ asset('backend/assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/smooth-scrollbar.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/fullcalendar.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/choices.min.js"></script>
    <!-- Kanban scripts -->
    <script src="{{ asset('backend/assets') }}/js/dragula.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/jkanban.js"></script>
    <script src="{{ asset('backend/assets') }}/js/chartjs.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/threejs.js"></script>
    <script src="{{ asset('backend/assets') }}/js/orbit-controls.js"></script>
    <script src="{{ asset('backend/assets') }}/js/leaflet.js"></script>
    <script src="{{ asset('backend/assets') }}/js/nouislider.min.js"></script>

    @stack('scripts')

    {{-- <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script> --}}

    <script async="" defer="" src="{{ asset('backend/assets') }}/js/buttons.js"></script>
    <script src="{{ asset('backend/assets') }}/js/soft-ui-dashboard.min.js"></script>


</body>

</html>
