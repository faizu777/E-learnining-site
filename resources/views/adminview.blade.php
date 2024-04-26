<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/src/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/src/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/src/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/src/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/src/assets/css/img.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/src/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/src/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/src/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">

    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                    data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="">
                    <img src="/src//assets/images/logo.svg" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="">
                    <img src="/src//assets/images/logo-mini.svg" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text"> Welcome Admin <span class="text-black fw-bold">
                            @if (session()->has('user'))
                                {{ session('user')->username }}
                            @endif
                        </span></h1>
                    <h3 class="welcome-sub-text">Your performance summary this week </h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown"
                        href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                        aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">Select category</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                                <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                            </div>
                        </a>
                        
                        
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                        <span class="input-group-addon input-group-prepend border-right">
                            <span class="icon-calendar input-group-text calendar-icon"></span>
                        </span>
                        <input type="text" class="form-control">
                    </div>
                </li>
                <li class="nav-item">
                    <form class="search-form" action="#">
                        <i class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#"
                        data-bs-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                        aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-success float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-success"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                <p class="fw-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-success"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                <p class="fw-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-success"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                <p class="fw-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="icon-mail icon-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                        aria-labelledby="countDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-success float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="#" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="#" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="#" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="img-xs rounded-circle" src="src/assets/images/profile-Transparent.png" alt="Profile image"> </a>
                        <span class = " text text-success"><h4> Profile</h4></span>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                          
                            @if (session()->has('user'))
                                <p class="mb-1 mt-3 font-weight-semibold"> {{ session('user')->username }}</span></p>
                                <p class="fw-light text-muted mb-0">{{ session('user')->email }}</p>
                            @endif

                        </div>
                        <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-account-outline text-success me-2"></i> My
                            Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-message-text-outline text-success me-2"></i>
                            Messages</a>
                        <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-calendar-check-outline text-success me-2"></i>
                            Activity</a>
                        <a class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-help-circle-outline text-success me-2"></i>
                            FAQ</a>
                        <a href ="{{ route('logout') }}" class="dropdown-item"><i
                                class="dropdown-item-icon mdi mdi-power text-success me-2"></i>Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section"
                        role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                        aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                    aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-success todo-list-add-btn"
                                    id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-success me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-success me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                            All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src=#face1.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face2.jpg" alt="image"><span class="offline"></span>
                            </div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face3.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face4.jpg" alt="image"><span class="offline"></span>
                            </div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face5.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="#" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->


        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard
                    </a>
                </li>
                <li class="nav-item nav-category">UI Elements</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-floor-plan"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="/src/pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="/src/pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="/src/pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">Forms and Datas</li>
                <li class="nav-item">

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                        aria-controls="charts">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">ChartJs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false"
                        aria-controls="tables">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/src/pages/tables/basic-table.html">Basic
                                    table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false"
                        aria-controls="icons">
                        <i class="menu-icon mdi mdi-layers-outline"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/src/pages/icons/mdi.html">Mdi icons</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">pages</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('RegisterPage') }}"> Add User
                                </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">help</li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="menu-icon mdi mdi-file-document"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                            href="#overview" role="tab" aria-controls="overview"
                                            aria-selected="true">Teacher</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#aud"
                                            role="tab" aria-selected="false">Courses </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            href="#demographics" role="tab" aria-selected="false">More</a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab"
                                            href="#addteacher" role="tab" aria-selected="false"><button
                                                class="btn btn-success btn-lg text-white mb-0 me-0" type="button"><i
                                                    class="mdi mdi-account-plus"></i>Add Teacher</button></a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab"
                                            href="#addcourse" role="tab" aria-selected="false"><button
                                                class="btn btn-success btn-lg text-white mb-0 me-0" type="button"><i
                                                    class="mdi mdi-account-plus"></i>Add Course</button></a>
                                    </li>
                                </ul>
                                <div>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i
                                                class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                            Print</a>
                                        <a href="#" class="btn btn-success text-white me-0"><i
                                                class="icon-download"></i> Export</a>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-content tab-content-basic">

                                <div class="tab-pane fade show" id="addteacher" role="tabpanel"
                                    aria-labelledby="addteacher">
                                    <!--Add Teacher-->
                                    <div class="container-scroller">
                                        <div class="container-fluid page-body-wrapper full-page-wrapper">
                                            <div class="content-wrapper d-flex align-items-center auth px-0">
                                                <div class="row w-100 mx-0">
                                                    <div class="col-lg-8 mx-auto">

                                                        <center>
                                                            <h3 class="fw-bold">Add Teacher</h3>
                                                            @if (session()->has('success'))
                                                                <div class="alert alert-success">
                                                                    {{ session('success') }}
                                                                </div>
                                                            @endif
                                                            @if (session()->has('teachererror'))
                                                                <div class="alert alert-danger">
                                                                    {{ session('teachererror') }}
                                                                </div>
                                                            @endif

                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">Teacher Added Failed
                                                                </div>
                                                            @endif



                                                        </center>
                                                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                                            <form class="pt-3" method="POST" action="/Addteacher">
                                                                <div class="text from-group text-warning">Fill ID When
                                                                    you Update Teacher</div>
                                                                <div class="form-group ">
                                                                    <input type="number"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Teacher ID" name="id">

                                                                </div>
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputEmail1"
                                                                        placeholder="Teacher name" name="name"
                                                                        required>
                                                                    @error('name')
                                                                        <span class="text text-danger"> {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Teacher address" name="address"
                                                                        required>
                                                                    @error('address')
                                                                        <span class="text text-danger"> {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Teacher ID_NO" name="idno"
                                                                        required>
                                                                    @error('idno')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Teacher Course" name="course"
                                                                        required>
                                                                    @error('course')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Teacher Salary" name="salary"
                                                                        required>
                                                                    @error('salary')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Teacher Status ex-active"
                                                                        name="status" required>
                                                                    @error('status')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="mt-3">
                                                                    <input type="submit" value="submit"
                                                                        class="btn btn-block btn-primary btn-lg font-weight-medium " />


                                                                    <input type="button" value="Update"
                                                                        class="btn btn-block btn-primary btn-lg font-weight-medium " />
                                                            </form>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- content-wrapper ends -->
                                        </div>
                                        <!-- page-body-wrapper ends -->
                                        <!-- Add-wrapper ends -->
                                    </div>
                                </div>
                            </div>
                            <!-- Add-course starts -->
                            <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show" id="addcourse" role="tabpanel"
                                    aria-labelledby="addteacher">

                                    <div class="container-scroller">
                                        <div class="container-fluid page-body-wrapper full-page-wrapper">
                                            <div class="content-wrapper d-flex align-items-center auth px-0">
                                                <div class="row w-100 mx-0">
                                                    <div class="col-lg-8 mx-auto">
                                                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                                                            <center>
                                                                <h3 class="fw-bold">Add Course</h3>
                                                                @if (session()->has('courseerror'))
                                                                    <div class="alert alert-danger">
                                                                        {{ session('courseerror') }}
                                                                    </div>
                                                                @endif


                                                                @error('course')
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('course') }}</div>
                                                                @enderror

                                                                @if (session()->has('addcourse'))
                                                                    <div class="alert alert-success">
                                                                        {{ session('addcourse') }}

                                                                    </div>
                                                                @endif

                                                            </center>
                                                            <form class="pt-3" method="POST" action="/AddCourse"
                                                                enctype="multipart/form-data">

                                                                <div class="container">
                                                                    <img class="card-img-top" id="uploadedImage"
                                                                        src="#" alt="Upload Image">
                                                                </div>
                                                                <br>
                                                                <div class="card-body">
                                                                    <input type="file" id="uploadInput"
                                                                        class="btn btn-success w-100" name="image">

                                                                    @if (session()->has('imgrequired'))
                                                                        <span
                                                                            class=" text text-danger">{{ session('imgrequired') }}</span>
                                                                    @endif
                                                                    @if ($errors->has('msg'))
                                                                        <span class="text text-danger">
                                                                            {{ $errors->first('msg') }} </span>
                                                                    @endif
                                                                </div>
                                                                <br>

                                                                <div class="text from-group text-warning">Fill ID When
                                                                    you Update Course</div>
                                                                <div class="form-group ">
                                                                    <input type="number"
                                                                        class="form-control form-control-lg rounded"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Course ID" name="cid">
                                                                    @error('cid')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg rounded"
                                                                        id="exampleInputEmail1"
                                                                        placeholder="Course name" name="cname"
                                                                        required>
                                                                    @error('cname')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number"
                                                                        class="form-control form-control-lg rounded"
                                                                        id="exampleInputPassword1"
                                                                        placeholder=" Course Price" name="cprice"
                                                                        required>
                                                                    @error('cprice')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-select" name="tid">
                                                                        <option value="0"> Teacher ID </option>
                                                                        @foreach ($teachers as $teacher)
                                                                            <option
                                                                                value="{{ $teacher->Teacher_id }}">
                                                                                {{ $teacher->Teacher_id }}
                                                                            </option>
                                                                        @endforeach


                                                                    </select>

                                                                    @error('tid')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg rounded"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Course Time " name="ctime"
                                                                        required>
                                                                    @error('ctime')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number"
                                                                        class="form-control form-control-lg rounded"
                                                                        id="exampleInputPassword1"
                                                                        placeholder=" Course Duration "
                                                                        name="cduration" required>
                                                                    @error('cduration')
                                                                        <span class="text text-danger">
                                                                            {{ $message }} </span>
                                                                    @enderror
                                                                </div>


                                                                <div class="mt-3">
                                                                    <input type="submit" value="submit"
                                                                        class="btn btn-block btn-primary btn-lg font-weight-medium " />
                                                                    <input type="submit" value="Update"
                                                                        class="btn btn-block btn-primary btn-lg font-weight-medium " />
                                                                </div>



                                                                <div
                                                                    class="my-2 d-flex justify-content-between align-items-center">



                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- content-wrapper ends -->
                                        </div>
                                        <!-- page-body-wrapper ends -->

                                        <!-- Add-wrapper ends -->
                                    </div>
                                </div>
                                <!-- course starts -->
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show" id="aud" role="tabpanel"
                                        aria-labelledby="aud">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Course Table</h4>
                                                    <p class="card-description">
                                                    <h5>No of Courses</h5>
                                                    <h4> {{ $No_Course }}</h4>
                                                    </p>
                                                    <br>
                                                    <div class="container float-right">
                                                        @if (session()->has('deletecourse'))
                                                            @if (session('deletecourse') == 'Course Imagae not found')
                                                                <span
                                                                    class="alert alert-danger">{{ session('deletecourse') }}</span>
                                                            @else
                                                                <span
                                                                    class="alert alert-success">{{ session('deletecourse') }}</span>
                                                            @endif


                                                        @endif
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Course ID
                                                                    </th>
                                                                    <th>
                                                                        Course Name
                                                                    </th>
                                                                    <th>
                                                                        Course Price
                                                                    </th>
                                                                    <th>
                                                                        Teacher ID
                                                                    </th>
                                                                    <th>
                                                                        Course Time
                                                                    </th>
                                                                    <th>
                                                                        Course Duration
                                                                    </th>
                                                                    <th>
                                                                        Delete
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($courses as $Course)
                                                                    <tr>
                                                                        <td> {{ $Course->C_id }} </td>
                                                                        <td> {{ $Course->Course_name }} </td>
                                                                        <td> {{ $Course->Course_Price }} </td>
                                                                        <td> {{ $Course->Teacher_id }} </td>
                                                                        <td> {{ $Course->Course_Time }} </td>
                                                                        <td> {{ $Course->Course_Duration }} </td>
                                                                        <td> <a
                                                                                href="{{ route('deletecourse', $Course->C_id) }}"><button
                                                                                    class="btn btn-danger ">
                                                                                    Delete</button></a></td>

                                                                    </tr>
                                                                @endforeach
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
                        <!-- Course ends-->
                        <!--Add Course ends-->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="statistics-title">No of Teachers</p>
                                            <h3 class="rate-percentage">{{ $No_Teacher }}</h3>

                                        </div>
                                        <div>
                                            <p class="statistics-title">Page Views</p>
                                            <h3 class="rate-percentage">7,682</h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                        </div>
                                        <div>
                                            <p class="statistics-title">New Sessions</p>
                                            <h3 class="rate-percentage">68.8</h3>
                                            <p class="text-danger d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Avg. Time on Site</p>
                                            <h3 class="rate-percentage">2m:35s</h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">New Sessions</p>
                                            <h3 class="rate-percentage">68.8</h3>
                                            <p class="text-danger d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Avg. Time on Site</p>
                                            <h3 class="rate-percentage">2m:35s</h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-18 d-flex flex-column">
                                    <div class="row flex-grow">

                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Teachers Table
                                                                </h4>
                                                                <p class="card-subtitle card-subtitle-dash">You have
                                                                    {{ $No_Teacher }} Teachers </p>
                                                            </div>
                                                            @if (session()->has('deleteteacher'))
                                                                <span
                                                                    class="alert alert-success">{{ session('deleteteacher') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </th>
                                                                        <th>Teacher id</th>
                                                                        <th>Teacher Name</th>
                                                                        <th>Teacher Address</th>
                                                                        <th>Teacher_ID_NO</th>
                                                                        <th>Teacher Course </th>
                                                                        <th>Teacher Salary </th>
                                                                        <th>Status</th>
                                                                        <th>Delete </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($teachers as $teacher)
                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    class="form-check form-check-flat mt-0">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            aria-checked="false"><i
                                                                                            class="input-helper"></i></label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h6> {{ $teacher->Teacher_id }} </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6> {{ $teacher->Teacher_name }} </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6> {{ $teacher->Teacher_Address }}
                                                                                </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->Teacher_ID_NO }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->Teacher_Course_name }}
                                                                                </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->Teacher_Salary }}</h6>
                                                                            </td>
                                                                            @if ($teacher->Teacher_Status == 'active')
                                                                                <td>
                                                                                    <h6 class="text text-success">
                                                                                        {{ $teacher->Teacher_Status }}
                                                                                    </h6>
                                                                                </td>
                                                                            @else
                                                                                <td>
                                                                                    <h6 class="text text-danger">
                                                                                        {{ $teacher->Teacher_Status }}
                                                                                    </h6>
                                                                                </td>
                                                                            @endif

                                                                            <td><a
                                                                                    href="{{ route('deleteteacher', $teacher->Teacher_id) }}"><button
                                                                                        class="btn btn-danger ">
                                                                                        Delete</button></a></td>
                                                                        </tr>
                                                                    @endforeach

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
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Free 24/7 customer
                        support, updates, and more with Faizan Khan </span>
                    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
                        reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/src/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/src/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/src/assets/js/off-canvas.js"></script>
    <script src="/src/assets/js/hoverable-collapse.js"></script>
    <script src="/src/assets/js/template.js"></script>
    <script src="/src/assets/js/settings.js"></script>
    <script src="/src/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/src/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/src/assets/js/dashboard.js"></script>

    <script src="/src/assets/js/uploadimg.js"></script>
    <!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>

</html>
