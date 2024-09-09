<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Once Upon A Time - @yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/img/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/img/logo.png')}}">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    @yield('style') 
</head>

<body>
    @yield('content')  
</body>

<script src="../../../vendors/popper/popper.min.js"></script>
<script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../../../vendors/anchorjs/anchor.min.js"></script>
<script src="../../../vendors/is/is.min.js"></script>
<script src="../../../vendors/fontawesome/all.min.js"></script>
<script src="../../../vendors/lodash/lodash.min.js"></script>
<script src="../../../vendors/list.js/list.min.js"></script>
<script src="../../../vendors/feather-icons/feather.min.js"></script>
<script src="../../../vendors/dayjs/dayjs.min.js"></script>
<script src="../../../assets/js/phoenix.js"></script>

</html>




