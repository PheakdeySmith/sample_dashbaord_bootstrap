@extends('backend.layouts.app')
@section('content')

    <main class="main-content max-height-vh-100 h-100 ps ps--active-y">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl ">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-3 text-dark" href="javascript:;">
                                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>shop </title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1716.000000, -439.000000)" fill="#252f40"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(0.000000, 148.000000)">
                                                    <path
                                                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                    </path>
                                                    <path
                                                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Account</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Settings</li>
                    </ol>
                    <h6 class="font-weight-bolder">Settings</h6>
                </nav>
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-auto">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <ul class="navbar-nav justify-content-end ms-auto">
                        <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid mt-4">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-8">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab"
                                    href="https://demos.creative-tim.com/soft-ui-dashboard-pro/examples/pages/account/settings.html"
                                    role="tab" aria-selected="true">
                                    Messages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                    href="https://demos.creative-tim.com/soft-ui-dashboard-pro/examples/pages/account/billing.html"
                                    role="tab" aria-selected="false">
                                    Social
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                    href="https://demos.creative-tim.com/soft-ui-dashboard-pro/examples/pages/account/invoice.html"
                                    role="tab" aria-selected="false">
                                    Notifications
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                    href="https://demos.creative-tim.com/soft-ui-dashboard-pro/examples/pages/account/security.html"
                                    role="tab" aria-selected="false">
                                    Backup
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-3 py-3">
            <div class="row mb-5">
                <div class="col-lg-3">
                    <div class="card position-sticky top-1">
                        <ul class="nav flex-column bg-white border-radius-lg p-3">
                            <li class="nav-item">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#profile">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 40 40"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>spaceship</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(4.000000, 301.000000)">
                                                            <path class="color-background"
                                                                d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                opacity="0.598539807"></path>
                                                            <path class="color-background"
                                                                d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                opacity="0.598539807"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#basic-info">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 40 44"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="color-background"
                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                opacity="0.603585379"></path>
                                                            <path class="color-background"
                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Basic Info</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#password">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 42 42"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>box-3d-50</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(603.000000, 0.000000)">
                                                            <path class="color-background"
                                                                d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                opacity="0.7"></path>
                                                            <path class="color-background"
                                                                d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                opacity="0.7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Change Password</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#2fa">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 40 44"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>switches</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 149.000000)">
                                                            <path class="color-background"
                                                                d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"
                                                                opacity="0.6"></path>
                                                            <path class="color-background"
                                                                d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">2FA</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#accounts">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 42 44"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>time-alarm</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -440.000000)" fill="#923DFA"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(603.000000, 149.000000)">
                                                            <path class="color-background"
                                                                d="M18.8086957,4.70034783 C15.3814926,0.343541521 9.0713063,-0.410050841 4.7145,3.01715217 C0.357693695,6.44435519 -0.395898667,12.7545415 3.03130435,17.1113478 C5.53738466,10.3360568 11.6337901,5.54042955 18.8086957,4.70034783 L18.8086957,4.70034783 Z"
                                                                opacity="0.6"></path>
                                                            <path class="color-background"
                                                                d="M38.9686957,17.1113478 C42.3958987,12.7545415 41.6423063,6.44435519 37.2855,3.01715217 C32.9286937,-0.410050841 26.6185074,0.343541521 23.1913043,4.70034783 C30.3662099,5.54042955 36.4626153,10.3360568 38.9686957,17.1113478 Z"
                                                                opacity="0.6"></path>
                                                            <path class="color-background"
                                                                d="M34.3815652,34.7668696 C40.2057958,27.7073059 39.5440671,17.3375603 32.869743,11.0755718 C26.1954189,4.81358341 15.8045811,4.81358341 9.13025701,11.0755718 C2.45593289,17.3375603 1.79420418,27.7073059 7.61843478,34.7668696 L3.9753913,40.0506522 C3.58549114,40.5871271 3.51710058,41.2928217 3.79673036,41.8941824 C4.07636014,42.4955431 4.66004722,42.8980248 5.32153275,42.9456105 C5.98301828,42.9931963 6.61830436,42.6784048 6.98113043,42.1232609 L10.2744783,37.3434783 C16.5555112,42.3298213 25.4444888,42.3298213 31.7255217,37.3434783 L35.0188696,42.1196087 C35.6014207,42.9211577 36.7169135,43.1118605 37.53266,42.5493622 C38.3484064,41.9868639 38.5667083,40.8764423 38.0246087,40.047 L34.3815652,34.7668696 Z M30.1304348,25.5652174 L21,25.5652174 C20.49574,25.5652174 20.0869565,25.1564339 20.0869565,24.6521739 L20.0869565,15.5217391 C20.0869565,15.0174791 20.49574,14.6086957 21,14.6086957 C21.50426,14.6086957 21.9130435,15.0174791 21.9130435,15.5217391 L21.9130435,23.7391304 L30.1304348,23.7391304 C30.6346948,23.7391304 31.0434783,24.1479139 31.0434783,24.6521739 C31.0434783,25.1564339 30.6346948,25.5652174 30.1304348,25.5652174 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Accounts</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#notifications">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 44 43"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>megaphone</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2168.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(452.000000, 300.000000)">
                                                            <path class="color-background"
                                                                d="M35.7958333,0.273166667 C35.2558424,-0.0603712374 34.5817509,-0.0908856664 34.0138333,0.1925 L19.734,7.33333333 L9.16666667,7.33333333 C4.10405646,7.33333333 0,11.4373898 0,16.5 C0,21.5626102 4.10405646,25.6666667 9.16666667,25.6666667 L19.734,25.6666667 L34.0138333,32.8166667 C34.5837412,33.1014624 35.2606401,33.0699651 35.8016385,32.7334768 C36.3426368,32.3969885 36.6701539,31.8037627 36.6666942,31.1666667 L36.6666942,1.83333333 C36.6666942,1.19744715 36.3370375,0.607006911 35.7958333,0.273166667 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M38.5,11 L38.5,22 C41.5375661,22 44,19.5375661 44,16.5 C44,13.4624339 41.5375661,11 38.5,11 Z"
                                                                opacity="0.601050967"></path>
                                                            <path class="color-background"
                                                                d="M18.5936667,29.3333333 L10.6571667,29.3333333 L14.9361667,39.864 C15.7423448,41.6604248 17.8234451,42.4993948 19.6501416,41.764381 C21.4768381,41.0293672 22.3968823,38.982817 21.7341667,37.1286667 L18.5936667,29.3333333 Z"
                                                                opacity="0.601050967"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#sessions">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 40 40"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957"
                                                                points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background"
                                                                d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                opacity="0.596981957"></path>
                                                            <path class="color-background"
                                                                d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Sessions</span>
                                </a>
                            </li>
                            <li class="nav-item pt-2">
                                <a class="nav-link text-body" data-scroll=""
                                    href="{{ route('setting') }}#delete">
                                    <div class="icon me-2">
                                        <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 45 40"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>shop </title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(0.000000, 148.000000)">
                                                            <path class="color-background"
                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                opacity="0.598981585"></path>
                                                            <path class="color-foreground"
                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="text-sm">Delete Account</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 mt-lg-0 mt-4">
                    <!-- Card Profile -->
                    <div class="card card-body" id="profile">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-auto col-4">
                                <div class="avatar avatar-xl position-relative">
                                    <img src="{{ asset('backend/assets') }}/image/bruce-mars.jpg" alt="bruce"
                                        class="w-100 border-radius-lg shadow-sm">
                                </div>
                            </div>
                            <div class="col-sm-auto col-8 my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1 font-weight-bolder">
                                        Alec Thompson
                                    </h5>
                                    <p class="mb-0 font-weight-bold text-sm">
                                        CEO / Co-Founder
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                <label class="form-check-label mb-0">
                                    <small id="profileVisibility">
                                        Switch to invisible
                                    </small>
                                </label>
                                <div class="form-check form-switch ms-2">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked=""
                                        onchange="visible()" data-sharkid="__0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Basic Info -->
                    <div class="card mt-4" id="basic-info">
                        <div class="card-header">
                            <h5>Basic Info</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">First Name</label>
                                    <div class="input-group">
                                        <input id="firstName" name="firstName" class="form-control" type="text"
                                            placeholder="Alec" required="required" onfocus="focused(this)"
                                            onfocusout="defocused(this)" data-sharkid="__1" data-sharklabel="firstName">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Last Name</label>
                                    <div class="input-group">
                                        <input id="lastName" name="lastName" class="form-control" type="text"
                                            placeholder="Thompson" required="required" onfocus="focused(this)"
                                            onfocusout="defocused(this)" data-sharkid="__2" data-sharklabel="lastName">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <label class="form-label mt-4">I'm</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                        aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-control choices__input"
                                                name="choices-gender" id="choices-gender" hidden="" tabindex="-1"
                                                data-choice="active">
                                                <option value="Male">Male</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item=""
                                                    data-id="1" data-value="Male" data-custom-properties="null"
                                                    aria-selected="true">Male</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                                type="text" class="choices__input choices__input--cloned" autocomplete="off"
                                                autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="false" placeholder="">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--choices-gender-item-choice-1"
                                                    class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                    role="option" data-choice="" data-id="1" data-value="Female"
                                                    data-select-text="Press to select" data-choice-selectable=""
                                                    aria-selected="true">Female</div>
                                                <div id="choices--choices-gender-item-choice-2"
                                                    class="choices__item choices__item--choice is-selected choices__item--selectable"
                                                    role="option" data-choice="" data-id="2" data-value="Male"
                                                    data-select-text="Press to select" data-choice-selectable="">Male
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-5 col-5">
                                            <label class="form-label mt-4">Birth Date</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                <div class="choices__inner"><select class="form-control choices__input"
                                                        name="choices-month" id="choices-month" hidden="" tabindex="-1"
                                                        data-choice="active">
                                                        <option value="2">February</option>
                                                    </select>
                                                    <div class="choices__list choices__list--single">
                                                        <div class="choices__item choices__item--selectable" data-item=""
                                                            data-id="1" data-value="2" data-custom-properties="null"
                                                            aria-selected="true">February
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <input type="text" class="choices__input choices__input--cloned"
                                                        autocomplete="off" autocapitalize="off" spellcheck="false"
                                                        role="textbox" aria-autocomplete="list" aria-label="false"
                                                        placeholder="">
                                                    <div class="choices__list" role="listbox">
                                                        <div id="choices--choices-month-item-choice-1"
                                                            class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                            role="option" data-choice="" data-id="1" data-value="4"
                                                            data-select-text="Press to select" data-choice-selectable=""
                                                            aria-selected="true">April</div>
                                                        <div id="choices--choices-month-item-choice-2"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="2" data-value="8"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            August</div>
                                                        <div id="choices--choices-month-item-choice-3"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="3" data-value="12"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            December</div>
                                                        <div id="choices--choices-month-item-choice-4"
                                                            class="choices__item choices__item--choice is-selected choices__item--selectable"
                                                            role="option" data-choice="" data-id="4" data-value="2"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            February</div>
                                                        <div id="choices--choices-month-item-choice-5"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="5" data-value="1"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            January</div>
                                                        <div id="choices--choices-month-item-choice-6"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="6" data-value="7"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            July</div>
                                                        <div id="choices--choices-month-item-choice-7"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="7" data-value="6"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            June</div>
                                                        <div id="choices--choices-month-item-choice-8"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="8" data-value="3"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            March</div>
                                                        <div id="choices--choices-month-item-choice-9"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="9" data-value="5"
                                                            data-select-text="Press to select" data-choice-selectable="">May
                                                        </div>
                                                        <div id="choices--choices-month-item-choice-10"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="10" data-value="11"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            November</div>
                                                        <div id="choices--choices-month-item-choice-11"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="11" data-value="10"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            October</div>
                                                        <div id="choices--choices-month-item-choice-12"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="12" data-value="9"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            September</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-3">
                                            <label class="form-label mt-4">&nbsp;</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                <div class="choices__inner"><select class="form-control choices__input"
                                                        name="choices-day" id="choices-day" hidden="" tabindex="-1"
                                                        data-choice="active">
                                                        <option value="1">1</option>
                                                    </select>
                                                    <div class="choices__list choices__list--single">
                                                        <div class="choices__item choices__item--selectable" data-item=""
                                                            data-id="1" data-value="1" data-custom-properties="null"
                                                            aria-selected="true">1</div>
                                                    </div>
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <input type="text" class="choices__input choices__input--cloned"
                                                        autocomplete="off" autocapitalize="off" spellcheck="false"
                                                        role="textbox" aria-autocomplete="list" aria-label="false"
                                                        placeholder="">
                                                    <div class="choices__list" role="listbox">
                                                        <div id="choices--choices-day-item-choice-1"
                                                            class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                                            role="option" data-choice="" data-id="1" data-value="1"
                                                            data-select-text="Press to select" data-choice-selectable=""
                                                            aria-selected="true">1</div>
                                                        <div id="choices--choices-day-item-choice-2"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="2" data-value="2"
                                                            data-select-text="Press to select" data-choice-selectable="">2
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-3"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="3" data-value="3"
                                                            data-select-text="Press to select" data-choice-selectable="">3
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-4"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="4" data-value="4"
                                                            data-select-text="Press to select" data-choice-selectable="">4
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-5"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="5" data-value="5"
                                                            data-select-text="Press to select" data-choice-selectable="">5
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-6"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="6" data-value="6"
                                                            data-select-text="Press to select" data-choice-selectable="">6
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-7"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="7" data-value="7"
                                                            data-select-text="Press to select" data-choice-selectable="">7
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-8"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="8" data-value="8"
                                                            data-select-text="Press to select" data-choice-selectable="">8
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-9"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="9" data-value="9"
                                                            data-select-text="Press to select" data-choice-selectable="">9
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-10"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="10" data-value="10"
                                                            data-select-text="Press to select" data-choice-selectable="">10
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-11"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="11" data-value="11"
                                                            data-select-text="Press to select" data-choice-selectable="">11
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-12"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="12" data-value="12"
                                                            data-select-text="Press to select" data-choice-selectable="">12
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-13"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="13" data-value="13"
                                                            data-select-text="Press to select" data-choice-selectable="">13
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-14"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="14" data-value="14"
                                                            data-select-text="Press to select" data-choice-selectable="">14
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-15"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="15" data-value="15"
                                                            data-select-text="Press to select" data-choice-selectable="">15
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-16"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="16" data-value="16"
                                                            data-select-text="Press to select" data-choice-selectable="">16
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-17"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="17" data-value="17"
                                                            data-select-text="Press to select" data-choice-selectable="">17
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-18"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="18" data-value="18"
                                                            data-select-text="Press to select" data-choice-selectable="">18
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-19"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="19" data-value="19"
                                                            data-select-text="Press to select" data-choice-selectable="">19
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-20"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="20" data-value="20"
                                                            data-select-text="Press to select" data-choice-selectable="">20
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-21"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="21" data-value="21"
                                                            data-select-text="Press to select" data-choice-selectable="">21
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-22"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="22" data-value="22"
                                                            data-select-text="Press to select" data-choice-selectable="">22
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-23"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="23" data-value="23"
                                                            data-select-text="Press to select" data-choice-selectable="">23
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-24"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="24" data-value="24"
                                                            data-select-text="Press to select" data-choice-selectable="">24
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-25"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="25" data-value="25"
                                                            data-select-text="Press to select" data-choice-selectable="">25
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-26"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="26" data-value="26"
                                                            data-select-text="Press to select" data-choice-selectable="">26
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-27"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="27" data-value="27"
                                                            data-select-text="Press to select" data-choice-selectable="">27
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-28"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="28" data-value="28"
                                                            data-select-text="Press to select" data-choice-selectable="">28
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-29"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="29" data-value="29"
                                                            data-select-text="Press to select" data-choice-selectable="">29
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-30"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="30" data-value="30"
                                                            data-select-text="Press to select" data-choice-selectable="">30
                                                        </div>
                                                        <div id="choices--choices-day-item-choice-31"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="31" data-value="31"
                                                            data-select-text="Press to select" data-choice-selectable="">31
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-4">
                                            <label class="form-label mt-4">&nbsp;</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                <div class="choices__inner"><select class="form-control choices__input"
                                                        name="choices-year" id="choices-year" hidden="" tabindex="-1"
                                                        data-choice="active">
                                                        <option value="2020">2020</option>
                                                    </select>
                                                    <div class="choices__list choices__list--single">
                                                        <div class="choices__item choices__item--selectable" data-item=""
                                                            data-id="1" data-value="2020" data-custom-properties="null"
                                                            aria-selected="true">2020
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <input type="text" class="choices__input choices__input--cloned"
                                                        autocomplete="off" autocapitalize="off" spellcheck="false"
                                                        role="textbox" aria-autocomplete="list" aria-label="false"
                                                        placeholder="">
                                                    <div class="choices__list" role="listbox">
                                                        <div id="choices--choices-year-item-choice-1"
                                                            class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                            role="option" data-choice="" data-id="1" data-value="1900"
                                                            data-select-text="Press to select" data-choice-selectable=""
                                                            aria-selected="true">1900</div>
                                                        <div id="choices--choices-year-item-choice-2"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="2" data-value="1901"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1901</div>
                                                        <div id="choices--choices-year-item-choice-3"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="3" data-value="1902"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1902</div>
                                                        <div id="choices--choices-year-item-choice-4"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="4" data-value="1903"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1903</div>
                                                        <div id="choices--choices-year-item-choice-5"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="5" data-value="1904"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1904</div>
                                                        <div id="choices--choices-year-item-choice-6"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="6" data-value="1905"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1905</div>
                                                        <div id="choices--choices-year-item-choice-7"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="7" data-value="1906"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1906</div>
                                                        <div id="choices--choices-year-item-choice-8"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="8" data-value="1907"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1907</div>
                                                        <div id="choices--choices-year-item-choice-9"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="9" data-value="1908"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1908</div>
                                                        <div id="choices--choices-year-item-choice-10"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="10" data-value="1909"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1909</div>
                                                        <div id="choices--choices-year-item-choice-11"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="11" data-value="1910"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1910</div>
                                                        <div id="choices--choices-year-item-choice-12"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="12" data-value="1911"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1911</div>
                                                        <div id="choices--choices-year-item-choice-13"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="13" data-value="1912"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1912</div>
                                                        <div id="choices--choices-year-item-choice-14"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="14" data-value="1913"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1913</div>
                                                        <div id="choices--choices-year-item-choice-15"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="15" data-value="1914"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1914</div>
                                                        <div id="choices--choices-year-item-choice-16"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="16" data-value="1915"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1915</div>
                                                        <div id="choices--choices-year-item-choice-17"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="17" data-value="1916"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1916</div>
                                                        <div id="choices--choices-year-item-choice-18"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="18" data-value="1917"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1917</div>
                                                        <div id="choices--choices-year-item-choice-19"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="19" data-value="1918"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1918</div>
                                                        <div id="choices--choices-year-item-choice-20"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="20" data-value="1919"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1919</div>
                                                        <div id="choices--choices-year-item-choice-21"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="21" data-value="1920"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1920</div>
                                                        <div id="choices--choices-year-item-choice-22"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="22" data-value="1921"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1921</div>
                                                        <div id="choices--choices-year-item-choice-23"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="23" data-value="1922"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1922</div>
                                                        <div id="choices--choices-year-item-choice-24"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="24" data-value="1923"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1923</div>
                                                        <div id="choices--choices-year-item-choice-25"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="25" data-value="1924"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1924</div>
                                                        <div id="choices--choices-year-item-choice-26"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="26" data-value="1925"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1925</div>
                                                        <div id="choices--choices-year-item-choice-27"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="27" data-value="1926"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1926</div>
                                                        <div id="choices--choices-year-item-choice-28"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="28" data-value="1927"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1927</div>
                                                        <div id="choices--choices-year-item-choice-29"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="29" data-value="1928"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1928</div>
                                                        <div id="choices--choices-year-item-choice-30"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="30" data-value="1929"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1929</div>
                                                        <div id="choices--choices-year-item-choice-31"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="31" data-value="1930"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1930</div>
                                                        <div id="choices--choices-year-item-choice-32"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="32" data-value="1931"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1931</div>
                                                        <div id="choices--choices-year-item-choice-33"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="33" data-value="1932"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1932</div>
                                                        <div id="choices--choices-year-item-choice-34"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="34" data-value="1933"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1933</div>
                                                        <div id="choices--choices-year-item-choice-35"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="35" data-value="1934"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1934</div>
                                                        <div id="choices--choices-year-item-choice-36"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="36" data-value="1935"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1935</div>
                                                        <div id="choices--choices-year-item-choice-37"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="37" data-value="1936"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1936</div>
                                                        <div id="choices--choices-year-item-choice-38"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="38" data-value="1937"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1937</div>
                                                        <div id="choices--choices-year-item-choice-39"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="39" data-value="1938"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1938</div>
                                                        <div id="choices--choices-year-item-choice-40"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="40" data-value="1939"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1939</div>
                                                        <div id="choices--choices-year-item-choice-41"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="41" data-value="1940"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1940</div>
                                                        <div id="choices--choices-year-item-choice-42"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="42" data-value="1941"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1941</div>
                                                        <div id="choices--choices-year-item-choice-43"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="43" data-value="1942"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1942</div>
                                                        <div id="choices--choices-year-item-choice-44"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="44" data-value="1943"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1943</div>
                                                        <div id="choices--choices-year-item-choice-45"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="45" data-value="1944"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1944</div>
                                                        <div id="choices--choices-year-item-choice-46"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="46" data-value="1945"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1945</div>
                                                        <div id="choices--choices-year-item-choice-47"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="47" data-value="1946"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1946</div>
                                                        <div id="choices--choices-year-item-choice-48"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="48" data-value="1947"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1947</div>
                                                        <div id="choices--choices-year-item-choice-49"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="49" data-value="1948"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1948</div>
                                                        <div id="choices--choices-year-item-choice-50"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="50" data-value="1949"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1949</div>
                                                        <div id="choices--choices-year-item-choice-51"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="51" data-value="1950"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1950</div>
                                                        <div id="choices--choices-year-item-choice-52"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="52" data-value="1951"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1951</div>
                                                        <div id="choices--choices-year-item-choice-53"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="53" data-value="1952"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1952</div>
                                                        <div id="choices--choices-year-item-choice-54"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="54" data-value="1953"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1953</div>
                                                        <div id="choices--choices-year-item-choice-55"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="55" data-value="1954"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1954</div>
                                                        <div id="choices--choices-year-item-choice-56"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="56" data-value="1955"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1955</div>
                                                        <div id="choices--choices-year-item-choice-57"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="57" data-value="1956"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1956</div>
                                                        <div id="choices--choices-year-item-choice-58"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="58" data-value="1957"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1957</div>
                                                        <div id="choices--choices-year-item-choice-59"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="59" data-value="1958"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1958</div>
                                                        <div id="choices--choices-year-item-choice-60"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="60" data-value="1959"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1959</div>
                                                        <div id="choices--choices-year-item-choice-61"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="61" data-value="1960"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1960</div>
                                                        <div id="choices--choices-year-item-choice-62"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="62" data-value="1961"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1961</div>
                                                        <div id="choices--choices-year-item-choice-63"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="63" data-value="1962"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1962</div>
                                                        <div id="choices--choices-year-item-choice-64"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="64" data-value="1963"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1963</div>
                                                        <div id="choices--choices-year-item-choice-65"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="65" data-value="1964"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1964</div>
                                                        <div id="choices--choices-year-item-choice-66"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="66" data-value="1965"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1965</div>
                                                        <div id="choices--choices-year-item-choice-67"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="67" data-value="1966"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1966</div>
                                                        <div id="choices--choices-year-item-choice-68"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="68" data-value="1967"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1967</div>
                                                        <div id="choices--choices-year-item-choice-69"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="69" data-value="1968"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1968</div>
                                                        <div id="choices--choices-year-item-choice-70"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="70" data-value="1969"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1969</div>
                                                        <div id="choices--choices-year-item-choice-71"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="71" data-value="1970"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1970</div>
                                                        <div id="choices--choices-year-item-choice-72"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="72" data-value="1971"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1971</div>
                                                        <div id="choices--choices-year-item-choice-73"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="73" data-value="1972"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1972</div>
                                                        <div id="choices--choices-year-item-choice-74"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="74" data-value="1973"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1973</div>
                                                        <div id="choices--choices-year-item-choice-75"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="75" data-value="1974"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1974</div>
                                                        <div id="choices--choices-year-item-choice-76"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="76" data-value="1975"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1975</div>
                                                        <div id="choices--choices-year-item-choice-77"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="77" data-value="1976"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1976</div>
                                                        <div id="choices--choices-year-item-choice-78"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="78" data-value="1977"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1977</div>
                                                        <div id="choices--choices-year-item-choice-79"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="79" data-value="1978"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1978</div>
                                                        <div id="choices--choices-year-item-choice-80"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="80" data-value="1979"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1979</div>
                                                        <div id="choices--choices-year-item-choice-81"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="81" data-value="1980"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1980</div>
                                                        <div id="choices--choices-year-item-choice-82"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="82" data-value="1981"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1981</div>
                                                        <div id="choices--choices-year-item-choice-83"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="83" data-value="1982"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1982</div>
                                                        <div id="choices--choices-year-item-choice-84"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="84" data-value="1983"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1983</div>
                                                        <div id="choices--choices-year-item-choice-85"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="85" data-value="1984"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1984</div>
                                                        <div id="choices--choices-year-item-choice-86"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="86" data-value="1985"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1985</div>
                                                        <div id="choices--choices-year-item-choice-87"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="87" data-value="1986"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1986</div>
                                                        <div id="choices--choices-year-item-choice-88"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="88" data-value="1987"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1987</div>
                                                        <div id="choices--choices-year-item-choice-89"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="89" data-value="1988"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1988</div>
                                                        <div id="choices--choices-year-item-choice-90"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="90" data-value="1989"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1989</div>
                                                        <div id="choices--choices-year-item-choice-91"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="91" data-value="1990"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1990</div>
                                                        <div id="choices--choices-year-item-choice-92"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="92" data-value="1991"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1991</div>
                                                        <div id="choices--choices-year-item-choice-93"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="93" data-value="1992"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1992</div>
                                                        <div id="choices--choices-year-item-choice-94"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="94" data-value="1993"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1993</div>
                                                        <div id="choices--choices-year-item-choice-95"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="95" data-value="1994"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1994</div>
                                                        <div id="choices--choices-year-item-choice-96"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="96" data-value="1995"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1995</div>
                                                        <div id="choices--choices-year-item-choice-97"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="97" data-value="1996"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1996</div>
                                                        <div id="choices--choices-year-item-choice-98"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="98" data-value="1997"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1997</div>
                                                        <div id="choices--choices-year-item-choice-99"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="99" data-value="1998"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1998</div>
                                                        <div id="choices--choices-year-item-choice-100"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="100" data-value="1999"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            1999</div>
                                                        <div id="choices--choices-year-item-choice-101"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="101" data-value="2000"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2000</div>
                                                        <div id="choices--choices-year-item-choice-102"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="102" data-value="2001"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2001</div>
                                                        <div id="choices--choices-year-item-choice-103"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="103" data-value="2002"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2002</div>
                                                        <div id="choices--choices-year-item-choice-104"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="104" data-value="2003"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2003</div>
                                                        <div id="choices--choices-year-item-choice-105"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="105" data-value="2004"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2004</div>
                                                        <div id="choices--choices-year-item-choice-106"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="106" data-value="2005"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2005</div>
                                                        <div id="choices--choices-year-item-choice-107"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="107" data-value="2006"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2006</div>
                                                        <div id="choices--choices-year-item-choice-108"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="108" data-value="2007"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2007</div>
                                                        <div id="choices--choices-year-item-choice-109"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="109" data-value="2008"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2008</div>
                                                        <div id="choices--choices-year-item-choice-110"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="110" data-value="2009"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2009</div>
                                                        <div id="choices--choices-year-item-choice-111"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="111" data-value="2010"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2010</div>
                                                        <div id="choices--choices-year-item-choice-112"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="112" data-value="2011"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2011</div>
                                                        <div id="choices--choices-year-item-choice-113"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="113" data-value="2012"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2012</div>
                                                        <div id="choices--choices-year-item-choice-114"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="114" data-value="2013"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2013</div>
                                                        <div id="choices--choices-year-item-choice-115"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="115" data-value="2014"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2014</div>
                                                        <div id="choices--choices-year-item-choice-116"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="116" data-value="2015"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2015</div>
                                                        <div id="choices--choices-year-item-choice-117"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="117" data-value="2016"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2016</div>
                                                        <div id="choices--choices-year-item-choice-118"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="118" data-value="2017"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2017</div>
                                                        <div id="choices--choices-year-item-choice-119"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="119" data-value="2018"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2018</div>
                                                        <div id="choices--choices-year-item-choice-120"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="120" data-value="2019"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2019</div>
                                                        <div id="choices--choices-year-item-choice-121"
                                                            class="choices__item choices__item--choice is-selected choices__item--selectable"
                                                            role="option" data-choice="" data-id="121" data-value="2020"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            2020</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label mt-4">Email</label>
                                    <div class="input-group">
                                        <input id="email" name="email" class="form-control" type="email"
                                            placeholder="example@email.com" onfocus="focused(this)"
                                            onfocusout="defocused(this)" data-sharkid="__3" data-sharklabel="email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label mt-4">Confirmation Email</label>
                                    <div class="input-group">
                                        <input id="confirmation" name="confirmation" class="form-control" type="email"
                                            placeholder="example@email.com" onfocus="focused(this)"
                                            onfocusout="defocused(this)" data-sharkid="__4" data-sharklabel="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label mt-4">Your location</label>
                                    <div class="input-group">
                                        <input id="location" name="location" class="form-control" type="text"
                                            placeholder="Sydney, A" onfocus="focused(this)" onfocusout="defocused(this)"
                                            data-sharkid="__5">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label mt-4">Phone Number</label>
                                    <div class="input-group">
                                        <input id="phone" name="phone" class="form-control" type="number"
                                            placeholder="+40 735 631 620" onfocus="focused(this)"
                                            onfocusout="defocused(this)" data-sharkid="__6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <label class="form-label mt-4">Language</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                        aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-control choices__input"
                                                name="choices-language" id="choices-language" hidden="" tabindex="-1"
                                                data-choice="active">
                                                <option value="English">English</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item=""
                                                    data-id="1" data-value="English" data-custom-properties="null"
                                                    aria-selected="true">English</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                                type="text" class="choices__input choices__input--cloned" autocomplete="off"
                                                autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="false" placeholder="">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--choices-language-item-choice-1"
                                                    class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                                    role="option" data-choice="" data-id="1" data-value="English"
                                                    data-select-text="Press to select" data-choice-selectable=""
                                                    aria-selected="true">English</div>
                                                <div id="choices--choices-language-item-choice-2"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="2" data-value="French"
                                                    data-select-text="Press to select" data-choice-selectable="">French
                                                </div>
                                                <div id="choices--choices-language-item-choice-3"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="3" data-value="Spanish"
                                                    data-select-text="Press to select" data-choice-selectable="">Spanish
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mt-4">Skills</label>
                                    <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner is-filled"><input class="form-control choices__input"
                                                id="choices-skills" type="text" value="vuejs,angular,react"
                                                placeholder="Enter something" hidden="" tabindex="-1" data-choice="active"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            <div class="choices__list choices__list--multiple">
                                                <div class="choices__item choices__item--selectable" data-item=""
                                                    data-id="1" data-value="vuejs" data-custom-properties="null"
                                                    aria-selected="true" data-deletable="">vuejs<button type="button"
                                                        class="choices__button" aria-label="Remove item: &#39;vuejs&#39;"
                                                        data-button="">Remove
                                                        item</button></div>
                                                <div class="choices__item choices__item--selectable" data-item=""
                                                    data-id="2" data-value="angular" data-custom-properties="null"
                                                    aria-selected="true" data-deletable="">angular<button type="button"
                                                        class="choices__button" aria-label="Remove item: &#39;angular&#39;"
                                                        data-button="">Remove item</button></div>
                                                <div class="choices__item choices__item--selectable" data-item=""
                                                    data-id="3" data-value="react" data-custom-properties="null"
                                                    aria-selected="true" data-deletable="">react<button type="button"
                                                        class="choices__button" aria-label="Remove item: &#39;react&#39;"
                                                        data-button="">Remove
                                                        item</button></div>
                                            </div><input type="text" class="choices__input choices__input--cloned"
                                                autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="false" data-sharkid="__7">
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Change Password -->
                    <div class="card mt-4" id="password">
                        <div class="card-header">
                            <h5>Change Password</h5>
                        </div>
                        <div class="card-body pt-0">
                            <label class="form-label">Current password</label>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Current password"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-sharkid="__8">
                            </div>
                            <label class="form-label">New password</label>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="New password"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-sharkid="__9">
                            </div>
                            <label class="form-label">Confirm new password</label>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Confirm password"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-sharkid="__10">
                            </div>
                            <h5 class="mt-5">Password requirements</h5>
                            <p class="text-muted mb-2">
                                Please follow this guide for a strong password:
                            </p>
                            <ul class="text-muted ps-4 mb-0 float-start">
                                <li>
                                    <span class="text-sm">One special characters</span>
                                </li>
                                <li>
                                    <span class="text-sm">Min 6 characters</span>
                                </li>
                                <li>
                                    <span class="text-sm">One number (2 are recommended)</span>
                                </li>
                                <li>
                                    <span class="text-sm">Change it often</span>
                                </li>
                            </ul>
                            <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update password</button>
                        </div>
                    </div>
                    <!-- Card Change Password -->
                    <div class="card mt-4" id="2fa">
                        <div class="card-header d-flex">
                            <h5 class="mb-0">Two-factor authentication</h5>
                            <span class="badge badge-success ms-auto">Enabled</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="my-auto">Security keys</p>
                                <p class="text-secondary text-sm ms-auto my-auto me-3">No Security Keys</p>
                                <button class="btn btn-sm btn-outline-dark mb-0" type="button">Add</button>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <p class="my-auto">SMS number</p>
                                <p class="text-secondary text-sm ms-auto my-auto me-3">+4012374423</p>
                                <button class="btn btn-sm btn-outline-dark mb-0" type="button">Edit</button>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <p class="my-auto">Authenticator app</p>
                                <p class="text-secondary text-sm ms-auto my-auto me-3">Not Configured</p>
                                <button class="btn btn-sm btn-outline-dark mb-0" type="button">Set up</button>
                            </div>
                        </div>
                    </div>
                    <!-- Card Accounts -->
                    <div class="card mt-4" id="accounts">
                        <div class="card-header">
                            <h5>Accounts</h5>
                            <p class="text-sm">Here you can setup and manage your integration settings.</p>
                        </div>
                        <div class="card-body pt-0">
                            <div class="d-flex">
                                <img class="width-48-px" src="{{ asset('backend/assets') }}/image/logo-slack.svg"
                                    alt="logo_slack">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Slack</h5>
                                        <a class="text-sm text-body" href="javascript:;">Show less <i
                                                class="fas fa-chevron-up text-xs ms-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                                <div class="form-check form-switch my-auto">
                                    <input class="form-check-input" checked="" type="checkbox" id="flexSwitchCheckDefault1"
                                        data-sharkid="__11">
                                </div>
                            </div>
                            <div class="ps-5 pt-3 ms-3">
                                <p class="mb-0 text-sm">You haven't added your Slack yet or you aren't authorized.
                                    Please add our Slack Bot to your account by clicking on <a
                                        href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/account/javascript">here</a>.
                                    When you've added the bot, send your verification code that you have received.</p>
                                <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4 is-filled">
                                    <p class="text-sm font-weight-bold my-auto ps-sm-2">Verification Code</p>
                                    <input class="form-control form-control-sm ms-sm-auto mt-sm-0 mt-2 w-sm-15 w-40"
                                        type="text" value="1172913" data-bs-toggle="tooltip" data-bs-placement="top"
                                        aria-label="Copy!" data-bs-original-title="Copy!" onfocus="focused(this)"
                                        onfocusout="defocused(this)" data-sharkid="__12">
                                </div>
                                <div class="d-sm-flex bg-gray-100 border-radius-lg p-2 my-4">
                                    <p class="text-sm font-weight-bold my-auto ps-sm-2">Connected account</p>
                                    <h6 class="text-sm ms-auto me-3 my-auto">hello@creative-tim.com</h6>
                                    <button class="btn btn-sm bg-gradient-danger my-sm-auto mt-2 mb-0" type="button"
                                        name="button">Delete</button>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <img class="width-48-px" src="{{ asset('backend/assets') }}/image/logo-spotify.svg"
                                    alt="logo_spotify">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Spotify</h5>
                                        <p class="mb-0 text-sm">Music</p>
                                    </div>
                                </div>
                                <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                                <div class="form-check form-switch my-auto">
                                    <input class="form-check-input" checked="" type="checkbox" id="flexSwitchCheckDefault2"
                                        data-sharkid="__13">
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <img class="width-48-px" src="{{ asset('backend/assets') }}/image/logo-atlassian.svg"
                                    alt="logo_atlassian">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Atlassian</h5>
                                        <p class="mb-0 text-sm">Payment vendor</p>
                                    </div>
                                </div>
                                <p class="text-sm text-secondary ms-auto me-3 my-auto">Enabled</p>
                                <div class="form-check form-switch my-auto">
                                    <input class="form-check-input" checked="" type="checkbox" id="flexSwitchCheckDefault3"
                                        data-sharkid="__14">
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <img class="width-48-px" src="{{ asset('backend/assets') }}/image/logo-asana.svg"
                                    alt="logo_asana">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Asana</h5>
                                        <p class="mb-0 text-sm">Organize your team</p>
                                    </div>
                                </div>
                                <div class="form-check form-switch ms-auto my-auto">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault4"
                                        data-sharkid="__15">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Notifications -->
                    <div class="card mt-4" id="notifications">
                        <div class="card-header">
                            <h5>Notifications</h5>
                            <p class="text-sm">Choose how you receive notifications. These notification settings apply
                                to the things you’re watching.</p>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="ps-1" colspan="4">
                                                <p class="mb-0">Activity</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">Email</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">Push</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">SMS</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <span class="text-dark d-block text-sm">Mentions</span>
                                                    <span class="text-xs font-weight-normal">Notify when another user
                                                        mentions you in a comment</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault11" data-sharkid="__16">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault12" data-sharkid="__17">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault13" data-sharkid="__18">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <span class="text-dark d-block text-sm">Comments</span>
                                                    <span class="text-xs font-weight-normal">Notify when another user
                                                        comments your item.</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault14" data-sharkid="__19">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault15" data-sharkid="__20">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault16" data-sharkid="__21">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <span class="text-dark d-block text-sm">Follows</span>
                                                    <span class="text-xs font-weight-normal">Notify when another user
                                                        follows you.</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault17" data-sharkid="__22">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault18" data-sharkid="__23">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault19" data-sharkid="__24">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <p class="text-sm mb-0">Log in from a new device</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault20" data-sharkid="__25">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault21" data-sharkid="__26">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked="" type="checkbox"
                                                        id="flexSwitchCheckDefault22" data-sharkid="__27">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Card Sessions -->
                    <div class="card mt-4" id="sessions">
                        <div class="card-header pb-3">
                            <h5>Sessions</h5>
                            <p class="text-sm">This is a list of devices that have logged into your account. Remove
                                those that you do not recognize.</p>
                        </div>
                        <div class="card-body pt-0">
                            <div class="d-flex align-items-center">
                                <div class="text-center w-5">
                                    <i class="fas fa-desktop text-lg opacity-6"></i>
                                </div>
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <p class="text-sm mb-1">
                                            Bucharest 68.133.163.201
                                        </p>
                                        <p class="mb-0 text-xs">
                                            Your current session
                                        </p>
                                    </div>
                                </div>
                                <span class="badge badge-success badge-sm my-auto ms-auto me-3">Active</span>
                                <p class="text-secondary text-sm my-auto me-3">EU</p>
                                <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">See more
                                    <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex align-items-center">
                                <div class="text-center w-5">
                                    <i class="fas fa-desktop text-lg opacity-6"></i>
                                </div>
                                <p class="my-auto ms-3">Chrome on macOS</p>
                                <p class="text-secondary text-sm ms-auto my-auto me-3">US</p>
                                <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">See more
                                    <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex align-items-center">
                                <div class="text-center w-5">
                                    <i class="fas fa-mobile text-lg opacity-6"></i>
                                </div>
                                <p class="my-auto ms-3">Safari on iPhone</p>
                                <p class="text-secondary text-sm ms-auto my-auto me-3">US</p>
                                <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">See more
                                    <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Delete Account -->
                    <div class="card mt-4" id="delete">
                        <div class="card-header">
                            <h5>Delete Account</h5>
                            <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be
                                certain.</p>
                        </div>
                        <div class="card-body d-sm-flex pt-0">
                            <div class="d-flex align-items-center mb-sm-0 mb-4">
                                <div>
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault0"
                                            data-sharkid="__28">
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <span class="text-dark font-weight-bold d-block text-sm">Confirm</span>
                                    <span class="text-xs d-block">I want to delete my account.</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-secondary mb-0 ms-auto" type="button"
                                name="button">Deactivate</button>
                            <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button">Delete
                                Account</button>
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
    </main>

@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/setting.js') }}"></script>
@endpush
