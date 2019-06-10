<?php
    include './dbcon.php';
    $r=array();
    $sql="UPDATE `Accept` SET  `AcceptStatus`=1 WHERE `BinId`=9";
    $result=$con->query($sql);
    if($result===TRUE)
       {
         $r["status"]="success";
        
       }
       else{
        $r["status"]="Failed";
   
       }
       echo json_encode($r);
?>