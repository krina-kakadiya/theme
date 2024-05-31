
    <div class="header-left">
        <a href="dashboard" class="logo">
            <img src="{{ asset('admin/img/logo.png') }}" width="40" height="40" alt="Logo">
        </a>
        <a href="dashboard" class="logo2">
            <img src="{{ asset('admin/img/logo2.png') }}" width="40" height="40" alt="Logo">
        </a>
    </div>


    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <div class="page-title-box">
        <h3>Dreamguy's Technologies</h3>
    </div>


    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>

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

    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="fa-solid fa-ellipsis-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile">My Profile</a>
            <a class="dropdown-item" href="password">Change Password</a>
            <a class="dropdown-item" href="/">Logout</a>
        </div>
    </div>

