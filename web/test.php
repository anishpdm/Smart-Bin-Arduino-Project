<?php
 function distance($lat1, $lon1, $lat2, $lon2)
{

    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    

 
        return ($miles * 1.609344);
   
}


$baseLat= "9.1530";
$baseLong= "76.7356";


$sql = "SELECT  `location`, `bin_lat`, `bin_long`,bin_id FROM `bin`  ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $s1 = $row['bin_lat'];
        $s2 = $row['bin_long'];
        $BinId=$row['bin_id'];
        $Location =$row['location'];

        $d= distance($baseLat, $baseLong, 9.2251, 76.6785);


       
    }
}




?>