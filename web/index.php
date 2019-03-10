<?php

session_start();
?>

<?php
if (isset($_POST["but"])) {
	$Username = $_POST["Username"];
	$password = $_POST["password"];

	if ($Username == "admin" && $password == "123") {

		$_SESSION['admin'] = "loggedin";
		echo "<script type='text/javascript'> window.location.href = 'http://localhost/smartbin/web/viewgraph.php'; </script>";
	} else {
		echo "Invalid Credentials";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Smart Bin | ADMIN Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Smart Bin | Administrator LogIn</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <br>
                <br>
                <form method="POST">
                    <input class="text" type="text" name="Username" placeholder="Username" required="">

                    <input class="text" type="password" name="password" placeholder="Password" required="">

                    <div class="wthree-text">

                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="LOGIN" name="but">
                    <a href="boylogin.php">Collector Boy LogIn </a>
                </form>
                <p> </p>
            </div>
        </div>
        <!-- copyright -->



        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html> 