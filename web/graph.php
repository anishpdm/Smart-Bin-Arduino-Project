<?php

include './dbcon.php';
$sql = "select * from bin_status order by `bin_status_id` DESC limit 1";

$result = $con->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
            $s2 = $row['status'];
            echo $s2;
        }
} else {
    echo $con->error;
}

 