<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurent Table Booking System</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
    <!-- Meta tags -->
    <!--stylesheets-->
    <link href="/dist/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <!-- Calendar -->
    <link rel="stylesheet" href="/dist/css/jquery-ui.css" />
    <!-- //Calendar -->
    <link href="/dist/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
    <!-- Time-script-CSS -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')

    <h1 class="header-w3ls">
        {{ $title ?? '' }}
    </h1>
    <div class="appointment-w3">
        @yield('content')
    </div>

    <!-- js -->
    <script type='text/javascript' src='/dist/js/jquery-2.2.3.min.js'></script>
    <!-- //js -->
    <!-- Calendar -->
    <script src="/dist/js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <!-- Time -->
    <script type="text/javascript" src="/dist/js/wickedpicker.js"></script>
    <script type="text/javascript">
        $('.timepicker,.timepicker1').wickedpicker({
            twentyFour: false
        });
    </script>
    <!-- //Time -->

</body>

</html>
