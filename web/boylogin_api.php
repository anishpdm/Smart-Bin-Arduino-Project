<?php
if (isset($_POST["Username"])) {
    $Username = $_POST["Username"];
    $password = $_POST["password"];

    
    include './dbcon.php';
     $sql = "SELECT * FROM `binboys` WHERE `Username`='$Username' and `Password`='$password' ";

    $result = $con->query($sql);
    if ($result->num_rows > 0) {

       $r['status']="success";

    } else {
        $r['status']="error";
    }

    echo json_encode($r);



}


?>