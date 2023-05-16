
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <div id="main-wrapper">
         @include('admin.includes.nav')       
        <!-- END:  -->

        @include('admin.includes.header')
        <!-- END: -->

        <!--  -->
        @include('admin.includes.sidebar')
        <!-- END: -->

        <div class="content-body">
            @yield('content')          
            <!-- END:  -->
        </div>

        <!--  -->
        @include('admin.includes.footer')
        <!-- END:  -->
    </div>

    <script src="{{asset('assets/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/gleek.js')}}"></script>
    <script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

</body>

</html>