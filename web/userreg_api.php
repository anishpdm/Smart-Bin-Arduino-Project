<?php
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $name = $_POST["name"];

    $mobile= $_POST["mobile"];


    include './dbcon.php';
     $sql = "INSERT INTO `users`(`name`, `mobile`, `email`, `password`) VALUES ('$name','$mobile','$email','$password') ";

    $result = $con->query($sql);
    if ($result===TRUE) {

        $r['status'] = "success";
    } else {
        $r['status'] = "error";
    }

    echo json_encode($r);
}
 

?>