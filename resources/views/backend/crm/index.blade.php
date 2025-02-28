@extends('backend.layouts.app')
@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
            id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-2 ">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">CRM</li>
                    </ol>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)"
                                onfocusout="defocused(this)" data-sharkid="__0" data-sharklabel="dobDay">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/authentication/signin/illustration.html"
                                class="nav-link text-body font-weight-bold px-0" target="_blank">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('backend/assets') }}/image/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                    alt="user image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('backend/assets') }}/image/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card overflow-hidden">
                                <div class="card-header p-3 pb-0">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Visitors</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        5,927
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </h5>
                                </div>
                                <div class="card-body p-0">
                                    <div class="chart">
                                        <canvas id="chart-line-1" class="chart-canvas" height="125"
                                            style="display: block; box-sizing: border-box; height: 100px; width: 251px;"
                                            width="313"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-sm-0 mt-4">
                            <div class="card overflow-hidden">
                                <div class="card-header p-3 pb-0">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Income</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        $130,832
                                        <span class="text-success text-sm font-weight-bolder">+90%</span>
                                    </h5>
                                </div>
                                <div class="card-body p-0">
                                    <div class="chart">
                                        <canvas id="chart-line-2" class="chart-canvas" height="125"
                                            style="display: block; box-sizing: border-box; height: 100px; width: 251px;"
                                            width="313"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-sm-0 mt-4">
                            <div class="card border h-100">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="javascript:;">
                                        <i class="fa fa-plus text-secondary text-sm mb-1" aria-hidden="true"></i>
                                        <h6 class="text-secondary"> New tab </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card widget-calendar h-100">
                                <!-- Card header -->
                                <div class="card-header p-3 pb-0">
                                    <h6 class="mb-0">Calendar</h6>
                                    <div class="d-flex">
                                        <div class="p text-sm font-weight-bold mb-0 widget-calendar-day">Friday</div>
                                        <span>,&nbsp;</span>
                                        <div class="p text-sm font-weight-bold mb-1 widget-calendar-year">2025</div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body p-3">
                                    <div data-toggle="widget-calendar"
                                        class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                        <div class="fc-view-harness fc-view-harness-passive">
                                            <div class="fc-dayGridMonth-view fc-view fc-daygrid">
                                                <table role="grid" class="fc-scrollgrid ">
                                                    <thead role="rowgroup">
                                                        <tr role="presentation"
                                                            class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                            <th role="presentation">
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller" style="overflow: visible;">
                                                                        <table role="presentation" class="fc-col-header "
                                                                            style="width: 769px;">
                                                                            <colgroup></colgroup>
                                                                            <thead role="presentation">
                                                                                <tr role="row">
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-sun">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Sunday"
                                                                                                class="fc-col-header-cell-cushion">Sun</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-mon">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Monday"
                                                                                                class="fc-col-header-cell-cushion">Mon</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-tue">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Tuesday"
                                                                                                class="fc-col-header-cell-cushion">Tue</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-wed">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Wednesday"
                                                                                                class="fc-col-header-cell-cushion">Wed</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-thu">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Thursday"
                                                                                                class="fc-col-header-cell-cushion">Thu</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-fri">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Friday"
                                                                                                class="fc-col-header-cell-cushion">Fri</a>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th role="columnheader"
                                                                                        class="fc-col-header-cell fc-day fc-day-sat">
                                                                                        <div
                                                                                            class="fc-scrollgrid-sync-inner">
                                                                                            <a aria-label="Saturday"
                                                                                                class="fc-col-header-cell-cushion">Sat</a>
                                                                                        </div>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody role="rowgroup">
                                                        <tr role="presentation"
                                                            class="fc-scrollgrid-section fc-scrollgrid-section-body ">
                                                            <td role="presentation">
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller" style="overflow: visible;">
                                                                        <div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural"
                                                                            style="width: 769px;">
                                                                            <table role="presentation"
                                                                                class="fc-scrollgrid-sync-table"
                                                                                style="width: 769px;">
                                                                                <colgroup></colgroup>
                                                                                <tbody role="presentation">
                                                                                    <tr role="row">
                                                                                        <td aria-labelledby="fc-dom-2"
                                                                                            role="gridcell"
                                                                                            data-date="2020-11-29"
                                                                                            class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="November 29, 2020"
                                                                                                        id="fc-dom-2"
                                                                                                        class="fc-daygrid-day-number">29</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-success fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            All
                                                                                                                            day
                                                                                                                            conference
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-4"
                                                                                            role="gridcell"
                                                                                            data-date="2020-11-30"
                                                                                            class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="November 30, 2020"
                                                                                                        id="fc-dom-4"
                                                                                                        class="fc-daygrid-day-number">30</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-6"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-01"
                                                                                            class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 1, 2020"
                                                                                                        id="fc-dom-6"
                                                                                                        class="fc-daygrid-day-number">1</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Meeting
                                                                                                                            with
                                                                                                                            Mary
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-8"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-02"
                                                                                            class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 2, 2020"
                                                                                                        id="fc-dom-8"
                                                                                                        class="fc-daygrid-day-number">2</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Cyber
                                                                                                                            Week
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-10"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-03"
                                                                                            class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 3, 2020"
                                                                                                        id="fc-dom-10"
                                                                                                        class="fc-daygrid-day-number">3</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Winter
                                                                                                                            Hackaton
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-12"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-04"
                                                                                            class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 4, 2020"
                                                                                                        id="fc-dom-12"
                                                                                                        class="fc-daygrid-day-number">4</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-14"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-05"
                                                                                            class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 5, 2020"
                                                                                                        id="fc-dom-14"
                                                                                                        class="fc-daygrid-day-number">5</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row">
                                                                                        <td aria-labelledby="fc-dom-16"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-06"
                                                                                            class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 6, 2020"
                                                                                                        id="fc-dom-16"
                                                                                                        class="fc-daygrid-day-number">6</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-18"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-07"
                                                                                            class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 7, 2020"
                                                                                                        id="fc-dom-18"
                                                                                                        class="fc-daygrid-day-number">7</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                        style="top: 0px; left: 0px; right: -109.85px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Digital
                                                                                                                            event
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 29px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-20"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-08"
                                                                                            class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 8, 2020"
                                                                                                        id="fc-dom-20"
                                                                                                        class="fc-daygrid-day-number">8</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 29px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-22"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-09"
                                                                                            class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 9, 2020"
                                                                                                        id="fc-dom-22"
                                                                                                        class="fc-daygrid-day-number">9</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-24"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-10"
                                                                                            class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 10, 2020"
                                                                                                        id="fc-dom-24"
                                                                                                        class="fc-daygrid-day-number">10</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-primary fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Marketing
                                                                                                                            event
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-26"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-11"
                                                                                            class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 11, 2020"
                                                                                                        id="fc-dom-26"
                                                                                                        class="fc-daygrid-day-number">11</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-28"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-12"
                                                                                            class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 12, 2020"
                                                                                                        id="fc-dom-28"
                                                                                                        class="fc-daygrid-day-number">12</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row">
                                                                                        <td aria-labelledby="fc-dom-30"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-13"
                                                                                            class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 13, 2020"
                                                                                                        id="fc-dom-30"
                                                                                                        class="fc-daygrid-day-number">13</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-32"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-14"
                                                                                            class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 14, 2020"
                                                                                                        id="fc-dom-32"
                                                                                                        class="fc-daygrid-day-number">14</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-34"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-15"
                                                                                            class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 15, 2020"
                                                                                                        id="fc-dom-34"
                                                                                                        class="fc-daygrid-day-number">15</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-36"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-16"
                                                                                            class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 16, 2020"
                                                                                                        id="fc-dom-36"
                                                                                                        class="fc-daygrid-day-number">16</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-38"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-17"
                                                                                            class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 17, 2020"
                                                                                                        id="fc-dom-38"
                                                                                                        class="fc-daygrid-day-number">17</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-40"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-18"
                                                                                            class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 18, 2020"
                                                                                                        id="fc-dom-40"
                                                                                                        class="fc-daygrid-day-number">18</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-42"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-19"
                                                                                            class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 19, 2020"
                                                                                                        id="fc-dom-42"
                                                                                                        class="fc-daygrid-day-number">19</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Dinner
                                                                                                                            with
                                                                                                                            Family
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row">
                                                                                        <td aria-labelledby="fc-dom-44"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-20"
                                                                                            class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 20, 2020"
                                                                                                        id="fc-dom-44"
                                                                                                        class="fc-daygrid-day-number">20</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-46"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-21"
                                                                                            class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 21, 2020"
                                                                                                        id="fc-dom-46"
                                                                                                        class="fc-daygrid-day-number">21</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-48"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-22"
                                                                                            class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 22, 2020"
                                                                                                        id="fc-dom-48"
                                                                                                        class="fc-daygrid-day-number">22</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-50"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-23"
                                                                                            class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 23, 2020"
                                                                                                        id="fc-dom-50"
                                                                                                        class="fc-daygrid-day-number">23</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-event-harness"
                                                                                                        style="margin-top: 0px;">
                                                                                                        <a
                                                                                                            class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                            <div
                                                                                                                class="fc-event-main">
                                                                                                                <div
                                                                                                                    class="fc-event-main-frame">
                                                                                                                    <div
                                                                                                                        class="fc-event-title-container">
                                                                                                                        <div
                                                                                                                            class="fc-event-title fc-sticky">
                                                                                                                            Black
                                                                                                                            Friday
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="fc-event-resizer fc-event-resizer-end">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-52"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-24"
                                                                                            class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 24, 2020"
                                                                                                        id="fc-dom-52"
                                                                                                        class="fc-daygrid-day-number">24</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-54"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-25"
                                                                                            class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 25, 2020"
                                                                                                        id="fc-dom-54"
                                                                                                        class="fc-daygrid-day-number">25</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-56"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-26"
                                                                                            class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 26, 2020"
                                                                                                        id="fc-dom-56"
                                                                                                        class="fc-daygrid-day-number">26</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row">
                                                                                        <td aria-labelledby="fc-dom-58"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-27"
                                                                                            class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 27, 2020"
                                                                                                        id="fc-dom-58"
                                                                                                        class="fc-daygrid-day-number">27</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-60"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-28"
                                                                                            class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 28, 2020"
                                                                                                        id="fc-dom-60"
                                                                                                        class="fc-daygrid-day-number">28</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-62"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-29"
                                                                                            class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 29, 2020"
                                                                                                        id="fc-dom-62"
                                                                                                        class="fc-daygrid-day-number">29</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-64"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-30"
                                                                                            class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 30, 2020"
                                                                                                        id="fc-dom-64"
                                                                                                        class="fc-daygrid-day-number">30</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-66"
                                                                                            role="gridcell"
                                                                                            data-date="2020-12-31"
                                                                                            class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="December 31, 2020"
                                                                                                        id="fc-dom-66"
                                                                                                        class="fc-daygrid-day-number">31</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-68"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-01"
                                                                                            class="fc-day fc-day-fri fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 1, 2021"
                                                                                                        id="fc-dom-68"
                                                                                                        class="fc-daygrid-day-number">1</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-70"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-02"
                                                                                            class="fc-day fc-day-sat fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 2, 2021"
                                                                                                        id="fc-dom-70"
                                                                                                        class="fc-daygrid-day-number">2</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row">
                                                                                        <td aria-labelledby="fc-dom-72"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-03"
                                                                                            class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 3, 2021"
                                                                                                        id="fc-dom-72"
                                                                                                        class="fc-daygrid-day-number">3</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-74"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-04"
                                                                                            class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 4, 2021"
                                                                                                        id="fc-dom-74"
                                                                                                        class="fc-daygrid-day-number">4</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-76"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-05"
                                                                                            class="fc-day fc-day-tue fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 5, 2021"
                                                                                                        id="fc-dom-76"
                                                                                                        class="fc-daygrid-day-number">5</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-78"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-06"
                                                                                            class="fc-day fc-day-wed fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 6, 2021"
                                                                                                        id="fc-dom-78"
                                                                                                        class="fc-daygrid-day-number">6</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-80"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-07"
                                                                                            class="fc-day fc-day-thu fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 7, 2021"
                                                                                                        id="fc-dom-80"
                                                                                                        class="fc-daygrid-day-number">7</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-82"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-08"
                                                                                            class="fc-day fc-day-fri fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 8, 2021"
                                                                                                        id="fc-dom-82"
                                                                                                        class="fc-daygrid-day-number">8</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td aria-labelledby="fc-dom-84"
                                                                                            role="gridcell"
                                                                                            data-date="2021-01-09"
                                                                                            class="fc-day fc-day-sat fc-day-past fc-day-other fc-daygrid-day">
                                                                                            <div
                                                                                                class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div
                                                                                                    class="fc-daygrid-day-top">
                                                                                                    <a aria-label="January 9, 2021"
                                                                                                        id="fc-dom-84"
                                                                                                        class="fc-daygrid-day-number">9</a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom"
                                                                                                        style="margin-top: 0px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-daygrid-day-bg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card p-3">
                                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                                    style="background-image: url(&#39;{{ asset('backend/assets') }}/image/ivancik.jpg&#39;);">
                                    <span class="mask bg-gradient-dark"></span>
                                    <div class="card-body position-relative z-index-1 h-100 p-3">
                                        <h6 class="text-white font-weight-bolder mb-3">Hey John!</h6>
                                        <p class="text-white mb-3">Wealth creation is an evolutionarily recent
                                            positive-sum game. It is all about who take the opportunity first.</p>
                                        <a class="btn btn-round btn-outline-white mb-0" href="javascript:;">
                                            Read More
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="card mt-4">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Categories</h6>
                                </div>
                                <div class="card-body p-3">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                        <title>spaceship</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-1720.000000, -592.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(4.000000, 301.000000)">
                                                                        <path
                                                                            d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                        </path>
                                                                        <path
                                                                            d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                        </path>
                                                                        <path
                                                                            d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                            opacity="0.598539807"></path>
                                                                        <path
                                                                            d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                            opacity="0.598539807"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                                            sold</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                        <title>settings</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2020.000000, -442.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(304.000000, 151.000000)">
                                                                        <polygon opacity="0.596981957"
                                                                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                        </polygon>
                                                                        <path
                                                                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                            opacity="0.596981957"></path>
                                                                        <path
                                                                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                                                    <span class="text-xs">123 closed, <span class="font-weight-bold">15
                                                            open</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                        <title>box-3d-50</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2319.000000, -291.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(603.000000, 0.000000)">
                                                                        <path
                                                                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                        </path>
                                                                        <path
                                                                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                            opacity="0.7"></path>
                                                                        <path
                                                                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                            opacity="0.7"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                                                    <span class="text-xs">1 is active, <span class="font-weight-bold">40
                                                            closed</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="card mt-4">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ asset('backend/assets') }}/image/kal-visuals-square.jpg" alt="kal"
                                                class="border-radius-lg shadow w-100">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="text-muted text-sm font-weight-bold">
                                                Today is Martina's birthday. Wish her the best of luck!
                                            </p>
                                            <a href="javascript:;" class="btn btn-sm bg-gradient-dark mb-0">Send
                                                message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Transactions</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    <small>23 - 30 March 2021</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                                                <span class="text-xs">27 March 2020, at 12:30 PM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold ms-auto">
                                            - $ 2,500
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Apple</h6>
                                                <span class="text-xs">23 March 2020, at 04:30 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            + $ 2,000
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Partner #22213</h6>
                                                <span class="text-xs">19 March 2020, at 02:50 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            + $ 1,400
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-sm-0 mt-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Revenue</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    <small>01 - 07 June 2021</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">via PayPal</h6>
                                                <span class="text-xs">07 June 2021, at 09:00 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            + $ 4,999
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 pb-0 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-up"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Partner #90211</h6>
                                                <span class="text-xs">07 June 2021, at 05:50 AM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto">
                                            + $ 700
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-2">
                                </li>
                                <li class="list-group-item border-0 justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">Services</h6>
                                                <span class="text-xs">07 June 2021, at 07:10 PM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold ms-auto">
                                            - $ 1,800
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>2025,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 720px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 441px;"></div>
        </div>
    </main>

@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/crm.js') }}"></script>
@endpush


