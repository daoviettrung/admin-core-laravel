<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Dashboard</title>
    {{ HTML::style('asset/admin/css/font-face.css') }}
    {{ HTML::style('asset/admin/css/theme.css') }}
    {{ HTML::style('asset/admin/vendor/bootstrap/bootstrap.min.css') }}
    {{ HTML::style('asset/admin/vendor/font-awesome/css/fontawesome-all.min.css') }}
    @yield('style')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            @include('admin.layouts.menu-sidebar.blade.php')
            @include('admin.layouts.header')
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
