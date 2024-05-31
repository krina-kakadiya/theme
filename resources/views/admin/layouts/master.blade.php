<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">
<head>
@include('admin.layouts.header')
</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            @include('admin.layouts.head')
            @include('admin.layouts.sidebar')
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>
</body>
</html>
