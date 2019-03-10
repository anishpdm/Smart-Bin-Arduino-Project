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
                            <td>Basket Number</td>
                            <td><input type="text" name="basketid" required /></td>
                        </tr>
                        <tr>
                            <td>latitude</td>
                            <td><input type="text" name="latitude" required /></td>
                        </tr>
                        <tr>
                            <td>longitude</td>
                            <td><input type="text" name="longitude" required /></td>
                        </tr>
                        <tr>
                            <td>place</td>
                            <td><input type="text" name="place" required /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><Button type="submit" class="btn-success" name="register">ENTER</Button></td>
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
    $a = $_GET['basketid'];
    $b = $_GET['latitude'];
    $c = $_GET['longitude'];
    $d = $_GET['place'];
    include './dbcon.php';
    $sql = "INSERT INTO `bin`( `location`, `bin_lat`, `bin_long`, `Basket_Number`)   VALUES ('$d','$b','$c','$a')";

    if (($con->query($sql)) === true) {
        echo "<script type='text/javascript'> alert('Added')</script>";
    } else {
        echo $con->error;
    }
}
?> 