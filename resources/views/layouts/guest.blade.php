<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Skill Test - Ceylon Linux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Css includes -->
    @include('Includes.styles')
</head>

<body class="account-body accountbg">
    <!-- Log In page -->
    <div class="container">
        @yield('content')
        <!--end row-->
    </div>
    <!-- Js includes  -->
    @include('Includes.scripts')
</body>

</html>
