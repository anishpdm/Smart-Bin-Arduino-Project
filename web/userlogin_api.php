<?php
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    include './dbcon.php';
     $sql = "SELECT * FROM `users` WHERE `email`='$email' and `password`='$password' ";

    $result = $con->query($sql);
    if ($result->num_rows > 0) {

        $r['status'] = "success";
    } else {
        $r['status'] = "error";
    }

    echo json_encode($r);
}
 

?>