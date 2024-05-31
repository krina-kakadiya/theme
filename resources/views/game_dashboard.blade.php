<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <title>Game Data</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/all.min.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/material.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap4.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="dashboard" class="logo">
                    <img src="{{ asset('admin/img/logo.png') }}" width="40" height="40" alt="Logo">
                </a>
                <a href="dashboard" class="logo2">
                    <img src="{{ asset('admin/img/logo2.png') }}" width="40" height="40" alt="Logo">
                </a>
            </div>
            <!-- /Logo -->

            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Dreamguy's Technologies</h3>
            </div>
            <!-- /Header Title -->

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>

            <!-- Header Menu -->
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ asset('admin/img/profiles/avatar-02.jpg') }}" alt="User Image">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="password">Change Password</a>
                        <a class="dropdown-item" href="/">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="password">Change Password</a>
                    <a class="dropdown-item" href="/">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul class="sidebar-vertical">
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li>
                            <a href="dashboard"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                        </li>
                        <li class="active">
                            <a href="games"><i class="la la-gamepad"></i> <span> Game Data</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- <h3 class="page-title">Welcome Admin!</h3> -->
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Table</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Add Data modal content -->
                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                    style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Game Data Form</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="games" method="post">
                                <div class="modal-body p-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="fname"
                                                    id="fname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="lname"
                                                    id="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Position</label>
                                                <input type="text" class="form-control" name="position"
                                                    id="position" placeholder="Position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="office" class="form-label">Office</label>
                                                <input type="text" class="form-control" name="office"
                                                    id="office" placeholder="Office">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="age" class="form-label">Age</label>
                                                <input type="text" class="form-control" name="age"
                                                    id="age" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="salary" class="form-label">Salary</label>
                                                <input type="text" class="form-control" name="salary"
                                                    id="salary" placeholder="Salary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-0">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h4 class="card-title mb-0">Game Datatable</h4>
                                <button type="button" class="btn btn-custom"
                                    data-bs-toggle="modal" data-bs-target="#con-close-modal">Add Data</button>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="datatable table table-hover table-stripped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>$170,750</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>$86,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>$433,060</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>$162,700</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>$372,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>$137,500</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>$327,900</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>$205,500</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>$103,600</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>$90,560</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>$342,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>$470,600</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>$313,500</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>$385,750</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>$198,500</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>$725,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>$237,500</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>$132,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>$217,500</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>$345,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>$675,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>$106,450</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>$85,600</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>$1,200,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>$92,575</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>$357,650</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>$206,850</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>$850,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>$163,000</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="hidden" value="off" name="auto_backup_db">
                                                        <input type="checkbox" checked="checked"
                                                            name="auto_backup_db">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-xl text-info m-r-10"
                                                        data-bs-toggle="modal" data-bs-target="#con-close-modal"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-xl text-danger"><i
                                                            class="fa fa-trash"></i></a>
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
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Theme Settings JS -->
    <script src="{{ asset('admin/js/layout.js') }}"></script>
    <script src="{{ asset('admin/js/theme-settings.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

</body>

</html>