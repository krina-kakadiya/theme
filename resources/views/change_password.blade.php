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
    <title>Change Password - HRMS admin template</title>

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

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">


</head>

<body class="account-page">
    <!-- Main Wrapper -->

    <div class="main-wrapper">
        <div class="account-content">
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="dashboard"><img src="{{ asset('admin/img/logo2.png') }}" alt="Dreamguy's Technologies"></a>
            </div>
            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Change Password</h3>
                    <form>
                        <div class="input-block mb-3">
                            <label for="old_password" class="col-form-label">Old password</label>
                            <input type="password" name="old_password" id="old_password" class="form-control"
                                placeholder="Old Password">
                        </div>
                        <div class="input-block mb-3">
                            <label for="new_password" class="col-form-label">New password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control"
                                placeholder="New Password">
                        </div>
                        <div class="input-block mb-3">
                            <label for="con_password" class="col-form-label">Confirm password</label>
                            <input type="password" name="con_password" id="con_password" class="form-control"
                                placeholder="Confirm Password">
                        </div>
                        <div class="submit-section mb-4">
                            <button type="submit" class="btn btn-primary submit-btn">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Main Wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

</body>

</html>
