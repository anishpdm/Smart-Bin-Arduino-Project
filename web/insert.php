<?php
if(isset($_GET['q'])){
 echo $a=$_GET['q'];

if($a<=18 && $a>=0 )
{


 $FindPercentage= ( (18-$a)/18) *100;
include './dbcon.php';
     $sql= "INSERT INTO `bin_status`( `bin_id`, `status`) VALUES (9,'$FindPercentage')";

    if(($con->query($sql))===TRUE){
        echo "SUCCESS";
      


          echo  $NewSql= "SELECT  count(`id`) as c FROM `smsnotification` WHERE date=date(now())";

            $result = $con->query( $NewSql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo  $count= $row["c"];
if($count<=3)
{
                    // SMS will send 
                    echo "SMS will send soon ";

                    // 
if($FindPercentage>=75)
{

    $SMs="http://logixspace.com/smspack/messaging.php?userid=5389300010&password=AUNHOCRG1V&msg=Dear%20Waste%20Collector,%20Please%20clear%20the%20bin%20at%20location:%20Providence%20College&phone=8921844207";
   
echo file_get_contents($SMs);    
$SMs1="http://logixspace.com/smspack/messaging.php?userid=5389300010&password=AUNHOCRG1V&msg=Dear%20Waste%20Collector,%20Please%20clear%20the%20bin%20at%20location:%20Providence%20College&phone=9061367496";
   
echo file_get_contents($SMs1);               
$inssql= "INSERT INTO `smsnotification`( `date`, `percentage`) VALUES (now(),  $FindPercentage)";

                    if(($con->query($inssql))===TRUE){ 
                    }
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