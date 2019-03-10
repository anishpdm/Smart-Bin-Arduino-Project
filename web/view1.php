<?php
include './header.php';
?>

<body style="background:lightblue">
    <form method="GET">
        <table class="table">
            <tr>
                <td>Enter the basketid</td>
                <td><input type="text" name="basketid" required></td>
            </tr>
            <tr>
                <td></td>
                <td><Button type="submit" class="btn-success" name="register">OK</Button></td>
            </tr>

        </table>
    </form>
</body>

</html>

<?php
if (isset($_GET['register'])) {
    $a = $_GET['basketid'];
    include './dbcon.php';
    $sql = "SELECT  `location`, `bin_lat`, `bin_long`, bs.status as status FROM `bin` b JOIN bin_status bs ON bs.bin_id=b.`bin_id`  WHERE b.`Basket_Number`=$a";

    $result = $con->query($sql);
    echo "<table class='table'><th>LATITUDE</th><th>LONGTITUDE</th><th>PLACE</th>  <th> Bin Status </th> ";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $s1 = $row['bin_lat'];
            $s2 = $row['bin_long'];
            $s3 = $row['location'];
            $s4 = $row['status'];

            echo "<tr><td>$s1  </td><td>   $s2   </td><td>$s3  </td>   <td> $s4%  </td> </tr>";
        }
    }
}
?> 