<?php
    include './dbcon.php';
    $r=array();
    $sql="SELECT b.`location` FROM `bin` b JOIN Accept a ON a.BinId=b.`bin_id` WHERE a.AcceptStatus=0";
    $result=$con->query($sql);
    if($result->num_rows>0)
       {
         $r["status"]="success";
         while($row=$result->fetch_assoc())
           {
             $r["datas"][]=$row;
           }
       }
       else{
        $r["status"]="no bin Available to Clean";
 
       }
       echo json_encode($r);
?>