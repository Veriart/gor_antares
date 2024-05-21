<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="/vendor/assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="/vendor/assets/css/styles.css" />

    {{-- <link rel="stylesheet" href="/vendor/assets/css/sweetalert2.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css">

    <title>GOR Antares</title>
    <!-- jvectormap  -->
    <link rel="stylesheet" href="/vendor/assets/css/jquery-jvectormap.css">
    <!-- Font Awesome  -->
    <link
        href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css"
        rel="stylesheet">

    {{-- Datatables Buttons --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <link href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.bootstrap5.css">

    <link rel="stylesheet" href="/vendor/assets/css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="/vendor/assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="text-nowrap logo-img mx-auto">
                    {{-- <img src="/vendor/assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
                    <img src="/vendor/assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" /> --}}
                    <h3 class="dark-logo fw-bold arena-f mb-0">{{ gymnasium()->name }}</h3>
                    <h3 class="light-logo fw-bold arena-f mb-0">{{ gymnasium()->name }}</h3>
                </a>
                <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                    <i class="ti ti-x"></i>
                </a>
            </div>

            <div class="scroll-sidebar" data-simplebar>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="mb-0">

                        <!-- ============================= -->
                        <!-- Home -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold-duotone"
                                class="nav-small-cap-icon fs-5"></iconify-icon>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="/admin" aria-expanded="false">
                                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                                    <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu ps-1">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="/admin/gymnasium"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                                    <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu ps-1">Data GOR</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold-duotone"
                                class="nav-small-cap-icon fs-5"></iconify-icon>
                            <span class="hide-menu">Lapangan</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="/admin/field"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                                    <iconify-icon icon="iconoir:basketball-field" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu ps-1">Data Lapangan</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="admin/type-field"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                                    <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu ps-1">Tipe Lapangan</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="/admin/transaction"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                                    <iconify-icon icon="iconoir:basketball-field" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu ps-1">Sewa Lapangan</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>

            <div class=" fixed-profile mx-3 mt-3">
                <div class="card bg-primary-subtle mb-0 shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="/vendor/assets/images/profile/user-1.jpg" width="45" height="45"
                                    class="img-fluid rounded-circle" alt="spike-img" />
                                <div>
                                    <h5 class="mb-1">Mike</h5>
                                    <p class="mb-0">Admin</p>
                                </div>
                            </div>
                            <a href="authentication-login.html" class="position-relative" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Logout">
                                <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <div class="body-wrapper">
                <div class="container-fluid">
                    <!--  Header Start -->
                    <header class="topbar sticky-top">
                        <div class="with-vertical">
                            <!-- ---------------------------------- -->
                            <!-- Start Vertical Layout Header -->
                            <!-- ---------------------------------- -->
                            <nav class="navbar navbar-expand-lg p-0">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                            href="javascript:void(0)">
                                            <div class="nav-icon-hover-bg rounded-circle ">
                                                <iconify-icon icon="solar:list-bold-duotone"
                                                    class="fs-7 text-dark"></iconify-icon>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="d-block d-lg-none">
                                    {{-- <img src="/vendor/assets/images/logos/logo-light.svg" class="dark-logo"
                                        alt="Logo-Dark" />
                                    <img src="/vendor/assets/images/logos/logo-dark.svg" class="light-logo"
                                        alt="Logo-light" /> --}}
                                    <h3 class="dark-logo fw-bold arena-f mb-0">{{ gymnasium()->name }}</h3>
                                    <h3 class="light-logo fw-bold arena-f mb-0">{{ gymnasium()->name }}</h3>
                                </div>


                                <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                                    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="p-2">
                                        <i class="ti ti-dots fs-7"></i>
                                    </span>
                                </a>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <ul
                                            class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                            <li class="nav-item">
                                                <a class="nav-link nav-icon-hover moon dark-layout"
                                                    href="javascript:void(0)">
                                                    <iconify-icon icon="solar:moon-line-duotone"
                                                        class="moon fs-7"></iconify-icon>
                                                </a>
                                                <a class="nav-link nav-icon-hover sun light-layout"
                                                    href="javascript:void(0)">
                                                    <iconify-icon icon="solar:sun-2-line-duotone"
                                                        class="sun fs-7"></iconify-icon>
                                                </a>
                                            </li>
                                            <!-- ------------------------------- -->
                                            <!-- start notification Dropdown -->
                                            <!-- ------------------------------- -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link position-relative nav-icon-hover"
                                                    href="javascript:void(0)" id="drop2"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="nav-icon-hover-bg rounded-circle ">
                                                        <iconify-icon icon="solar:bell-bing-line-duotone"
                                                            class="fs-7 text-dark"></iconify-icon>
                                                    </div>
                                                    <div class="pulse">
                                                        <span class="heartbit border-success"></span>
                                                        <span class="point text-bg-success"></span>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                                    aria-labelledby="drop2">
                                                    <div class="d-flex align-items-center px-7 py-3">
                                                        <h3 class="mb-0 fs-5">Notifications</h3>
                                                        <span class="badge bg-warning ms-3">5 new</span>
                                                    </div>

                                                    <div class="message-body" data-simplebar>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="/vendor/assets/images/profile/user-2.jpg"
                                                                    alt="user" width="45"
                                                                    class="rounded-circle" />
                                                            </span>
                                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                                <h5 class="mb-0 fs-3 fw-normal">
                                                                    Roman Joined the Team!
                                                                </h5>
                                                                <span
                                                                    class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate
                                                                    him</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="/vendor/assets/images/profile/user-3.jpg"
                                                                    alt="user" width="45"
                                                                    class="rounded-circle" />
                                                            </span>
                                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                                <h5 class="mb-0 mt-1 fs-3 fw-normal">
                                                                    New message received
                                                                </h5>
                                                                <span
                                                                    class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma
                                                                    sent you new
                                                                    message</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="/vendor/assets/images/profile/user-4.jpg"
                                                                    alt="user" width="45"
                                                                    class="rounded-circle" />
                                                            </span>
                                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                                <h5 class="mb-0 mt-1 fs-3 fw-normal">
                                                                    New Payment received
                                                                </h5>
                                                                <span
                                                                    class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Check
                                                                    your
                                                                    earnings</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="/vendor/assets/images/profile/user-5.jpg"
                                                                    alt="user" width="45"
                                                                    class="rounded-circle" />
                                                            </span>
                                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                                <h5 class="mb-0 fs-3 fw-normal">
                                                                    New message received
                                                                </h5>
                                                                <span
                                                                    class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma
                                                                    sent you new
                                                                    message</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="/vendor/assets/images/profile/user-6.jpg"
                                                                    alt="user" width="45"
                                                                    class="rounded-circle" />
                                                            </span>
                                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                                <h5 class="mb-0 fs-3 fw-normal">
                                                                    Roman Joined the Team!
                                                                </h5>
                                                                <span
                                                                    class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate
                                                                    him</span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="py-6 px-7 mb-1">
                                                        <button class="btn btn-primary w-100">
                                                            See All Notifications
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- ------------------------------- -->
                                            <!-- end notification Dropdown -->
                                            <!-- ------------------------------- -->

                                            <!-- ------------------------------- -->
                                            <!-- start profile Dropdown -->
                                            <!-- ------------------------------- -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link position-relative ms-6" href="javascript:void(0)"
                                                    id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="d-flex align-items-center flex-shrink-0">
                                                        <div class="user-profile me-sm-3 me-2">
                                                            <img src="/vendor/assets/images/profile/user-1.jpg"
                                                                width="45" class="rounded-circle"
                                                                alt="spike-img">
                                                        </div>
                                                        <span class="d-sm-none d-block"><iconify-icon
                                                                icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

                                                        <div class="d-none d-sm-block">
                                                            <h6 class="fw-bold fs-4 mb-1 profile-name">
                                                                Mike Nielsen
                                                            </h6>
                                                            <p class="fs-3 lh-base mb-0 profile-subtext">
                                                                Admin
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                                    aria-labelledby="drop1">
                                                    <div class="profile-dropdown position-relative" data-simplebar>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between pt-3 px-7">
                                                            <h3 class="mb-0 fs-5">User Profile</h3>
                                                            <button type="button" class="border-0 bg-transparent"
                                                                aria-label="Close">
                                                                <iconify-icon icon="solar:close-circle-line-duotone"
                                                                    class="fs-7 text-muted"></iconify-icon>
                                                            </button>
                                                        </div>

                                                        <div class="d-flex align-items-center mx-7 py-9 border-bottom">
                                                            <img src="/vendor/assets/images/profile/user-1.jpg"
                                                                alt="user" width="90"
                                                                class="rounded-circle" />
                                                            <div class="ms-4">
                                                                <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
                                                                <span class="text-muted">super admin</span>
                                                            </div>
                                                        </div>

                                                        <div class="message-body">
                                                            <a href="page-user-profile.html"
                                                                class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                <span
                                                                    class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
                                                                    <iconify-icon icon="solar:wallet-2-line-duotone"
                                                                        class="fs-7"></iconify-icon>
                                                                </span>
                                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                                    <h5 class="mb-0 mt-1 fs-4 fw-normal">
                                                                        My Profile
                                                                    </h5>
                                                                    <span
                                                                        class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Account
                                                                        Settings</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="py-6 px-7 mb-1">
                                                            <a href="authentication-login.html"
                                                                class="btn btn-primary w-100">Log Out</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- ------------------------------- -->
                                            <!-- end profile Dropdown -->
                                            <!-- ------------------------------- -->
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- ---------------------------------- -->
                            <!-- End Vertical Layout Header -->
                            <!-- ---------------------------------- -->
                        </div>
                    </header>
                    <!--  Header End -->
                    @yield('content')
                    {{-- @include('admin.component.template_dashboard') --}}
                </div>
            </div>

            @include('admin.component.theme_setting')

        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
    <script src="/vendor/assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="/vendor/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/assets/js/simplebar.min.js"></script>
    <script src="/vendor/assets/js/app.init.js"></script>
    <script src="/vendor/assets/js/theme.js"></script>
    <script src="/vendor/assets/js/app.min.js"></script>
    <script src="/vendor/assets/js/sidebarmenu.js"></script>
    <script src="/vendor/assets/js/feather.min.js"></script>

    {{-- Sweet Alert --}}
    {{-- <script src="/vendor/assets/js/sweetalert2.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>

    {{-- Data Table Buttons --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.colVis.min.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="/vendor/assets/js/jquery-jvectormap.min.js"></script>
    {{-- <script src="/vendor/assets/js/apexcharts.min.js"></script> --}}
    <script src="/vendor/assets/js/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/vendor/assets/js/dashboard.js"></script>

    {{-- <script src="/vendor/assets/js/sweet-alert.init.js"></script> --}}
    @stack('script')
    @include('admin.component.sweet')
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['excel', 'colvis']
                }
            }
        });
    </script>
</body>

</html>
