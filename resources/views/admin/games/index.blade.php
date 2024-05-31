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
                            <a href="{{route('games.index')}}"><i class="la la-gamepad"></i> <span> Game Data</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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
                                <h4 class="modal-title">Add Game Data</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="addGameDataForm" action="games" method="POST" action="{{route('games.store')}}">
                                @csrf
                                <div class="modal-body p-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="game_name" class="form-label">Game Name</label>
                                                <input type="text" class="form-control" name="game_name"
                                                    id="game_name" placeholder="Game Name">
                                                    <div class="invalid-feedback">Please provide a game name.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="game_code" class="form-label">Game Code</label>
                                                <input type="text" class="form-control" name="game_code"
                                                    id="game_code" placeholder="Game Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="interstitial_ads" class="form-label">Interstitial Ads</label>
                                                <input type="text" class="form-control" name="interstitial_ads"
                                                    id="interstitial_ads" placeholder="Interstitial Ads">
                                                    <div class="invalid-feedback">Please provide a Interstitial name.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="banner_ads" class="form-label">Banner Ads</label>
                                                <input type="text" class="form-control" name="banner_ads"
                                                    id="banner_ads" placeholder="Banner Ads">
                                                    <div class="invalid-feedback">Please provide a banner name.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="native_ads" class="form-label">Native Ads</label>
                                                <input type="text" class="form-control" name="native_ads"
                                                    id="native_ads" placeholder="Native Ads">
                                                    <div class="invalid-feedback">Please provide a native name.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="video_ads" class="form-label">Video Ads</label>
                                                <input type="text" class="form-control" name="video_ads"
                                                    id="video_ads" placeholder="Video Ads">
                                                    <div class="invalid-feedback">Please provide a video name.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal"><a href="{{ URL::previous() }}">Close</a></button>
                                    <button type="submit" class="btn btn-primary waves-effect" onclick="return validateForm()">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.modal -->


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
                                                <th>Game Name</th>
                                                <th>Game Code</th>
                                                <th>Interstitial Ads</th>
                                                <th>Banner Ads</th>
                                                <th>Native Ads</th>
                                                <th>Video Ads</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($games as $g)
                                                <tr>
                                                    <td>{{$g->game_name}}</td>
                                                    <td>{{$g->game_code}}</td>
                                                    <td>{{$g->interstitial_ads}}</td>
                                                    <td>{{$g->banner_ads}}</td>
                                                    <td>{{$g->native_ads}}</td>
                                                    <td>{{$g->video_ads}}</td>
                                                    <td>
                                                        <a href="#" class="text-xl text-info m-r-10"
                                                            data-bs-toggle="modal" data-bs-target="#game-edit-modal{{$g->id}}"><i
                                                                class="fa fa-edit"></i></a>
{{--                                                        <a href="#" class="text-xl text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$g->id}}"><i--}}
{{--                                                                class="fa fa-trash"></i></a>--}}
                                                    </td>
                                                </tr>
                                                 <!-- Edit Data modal content -->
                                                    <div id="game-edit-modal{{$g->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                                                            style="display: none;">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Game Data</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ route('games.update', ['game' => $g->id]) }}" method="POST">

                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="modal-body p-4">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="game_name" class="form-label">Game Name</label>
                                                                                    <input type="text" class="form-control" name="game_name"
                                                                                        id="game_name" placeholder="Game Name" value="{{$g->game_name}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="game_code" class="form-label">Game Code</label>
                                                                                    <input type="text" class="form-control" name="game_code"
                                                                                        id="game_code" placeholder="Game Code" value="{{$g->game_code}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="interstitial_ads" class="form-label">Interstitial Ads</label>
                                                                                    <input type="text" class="form-control" name="interstitial_ads"
                                                                                        id="interstitial_ads" placeholder="Interstitial Ads" value="{{$g->interstitial_ads}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="banner_ads" class="form-label">Banner Ads</label>
                                                                                    <input type="text" class="form-control" name="banner_ads"
                                                                                        id="banner_ads" placeholder="Banner Ads" value="{{$g->banner_ads}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="native_ads" class="form-label">Native Ads</label>
                                                                                    <input type="text" class="form-control" name="native_ads"
                                                                                        id="native_ads" placeholder="Native Ads" value="{{$g->native_ads}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label for="video_ads" class="form-label">Video Ads</label>
                                                                                    <input type="text" class="form-control" name="video_ads"
                                                                                        id="video_ads" placeholder="Video Ads" value="{{$g->video_ads}}">
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
                                                    </div>
                                                <!-- /.modal -->

                                                {{-- delete model --}}
                                                    <div class="modal fade" id="deleteModal{{$g->id}}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content modal-bg-dark">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Games</h5>
                                                                </div>
                                                                <form action="{{ route('games.destroy', ['game' => $g->id]) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                {{--End Model --}}
                                            @endforeach
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

    </div>
    <!-- /Main Wrapper -->
    <script>
        function validateForm() {
            let form = document.getElementById('addGameDataForm');
            let isValid = true;

            form.querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
            form.querySelectorAll('.invalid-feedback').forEach(el => {
                el.textContent = '';
            });

            function validateInput(input, errorMessage) {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                    input.nextElementSibling.textContent = errorMessage;
                }
            }
            validateInput(form.game_name, 'Please provide a game name.');
            validateInput(form.interstitial_ads, 'Please provide an Interstitial name.');
            validateInput(form.banner_ads, 'Please provide a banner name.');
            validateInput(form.native_ads, 'Please provide a native name.');
            validateInput(form.video_ads, 'Please provide a video name.');

            if (isValid) {
                form.classList.add('was-validated');
            }

            return isValid;
        }
    </script>


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
