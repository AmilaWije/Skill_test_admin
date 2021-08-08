<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Skill Test - Ceylon Linux Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!-- Css includes -->
    @include('Includes.styles')
</head>

<body>
    <!-- Navbar includes -->
    @include('Includes.navbar')
    <!-- Sidebar includes -->
    @include('Includes.sidebar')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Yield header -->
                @yield('header')
                <!-- Yield content -->
                @yield('content')
            </div>
            <!-- footer includes -->
            @include('Includes.footer')
        </div>
        <!-- Logout modal -->
        @include('Includes.modal')
    </div>
    <!-- Js includes  -->
    @include('Includes.scripts')
</body>

</html>
