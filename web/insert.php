<?php
if(isset($_GET['q'])){
 echo $a=$_GET['q'];

if($a<=10 && $a>=0 )
{


 $FindPercentage= ( (10-$a)/10) *100;
include './dbcon.php';
     $sql= "INSERT INTO `bin_status`( `bin_id`, `status`) VALUES (9,'$FindPercentage')";

    if(($con->query($sql))===TRUE){
        echo "SUCCESS";
      


            $NewSql= "SELECT  count(`id`) as c FROM `smsnotification` WHERE date=date(now())";

            $result = $con->query( $NewSql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo  $count= $row["c"];
if($count<=3)
{
                    // SMS will send 
                    echo "SMS will send soon ";

                    $inssql= "INSERT INTO `smsnotification`( `date`, `percentage`) VALUES (now(),  $FindPercentage)";

                    if(($con->query($inssql))===TRUE){ 
                    }


}



                }
             } else {
                echo "0 results";
}
            
        //$matter="http://enterprise.smsgupshup.com/GatewayAPI/rest?method=SendMessage&send_to=8129880122&msg=Urgently%20clean%20the%20bin%20At%20Location%20PANDALAM.%0AThank%20You&msg_type=TEXT&userid=$SMSUser&auth_scheme=plain&password=$SMSPass&v=1.1&format=text";
// echo  file_get_contents($matter);            
        }



}

else {
   echo "Invalid";
}


    }
   

?>