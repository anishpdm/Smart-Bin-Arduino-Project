<?php
include './header.php';
?>

<body style="background:lightblue">
    <div class="container">
        <div class="row">
            <div class="col col-sm-2">

            </div>
            <div class="col col-sm-8">
                <form method="GET">
                    <table class="table">

                        <tr>
                            <td>Boy Name </td>
                            <td><input type="text" name="bname" required /></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="buser" required /></td>
                        </tr>
                        <tr>
                            <td>Password </td>
                            <td><input type="password" name="bpass" required /></td>
                        </tr>

                        <td></td>
                        <td><Button type="submit" class="btn-success" name="register">REGISTER </Button></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="col col-sm-2"></div>

        </div>
    </div>
</body>

</html>

<?php
if (isset($_GET['register'])) {
    $a = $_GET['bname'];
    $b = $_GET['buser'];
    $c = $_GET['bpass'];

    include './dbcon.php';
    $sql = "INSERT INTO `binboys`( `BoyName`, `Username`, `Password`) VALUES  ('$a','$b','$c')";

    if (($con->query($sql)) === true) {
        echo "<script type='text/javascript'> alert('Added')</script>";
    } else {
        echo $con->error;
    }
}
?> 