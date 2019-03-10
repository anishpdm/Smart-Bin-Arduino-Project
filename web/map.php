<?php //
//


 include './header.php';
 include './dbcon.php';
 $sql="SELECT `latitude`, `longitude` FROM `bin` ORDER BY `id` DESC LIMIT 1 " ;

    $result=$con->query($sql);
        
        if($result->num_rows>0){
        while($row=$result->fetch_assoc())
    {
            $point_b_lat=$row['latitude'];
            $point_b_lng=$row['longitude'];
        
    }
        }
    else{
        echo $con->error;
    }

$point_a_lat= $_SESSION['lat'];
        $point_a_lng= $_SESSION['long']
?>

<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8H8qxbmZZEk3-26q8oNrmEd8MxPOCCiw">
    </script>
<script type="text/javascript">
  var directionDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var myOptions = {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    directionsDisplay.setMap(map);

    var start = <?php echo "'$point_a_lat,$point_a_lng'";  ?>;
    var end = <?php echo "'$point_b_lat,$point_b_lng'";  ?>;
    var request = {
      origin:start, 
      destination:end,
      travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        var myRoute = response.routes[0];
        var txtDir = '';
        for (var i=0; i<myRoute.legs[0].steps.length; i++) {
          txtDir += myRoute.legs[0].steps[i].instructions+"<br />";
        }
        document.getElementById('directions').innerHTML = txtDir;
      }
    });
  }
</script>
</head>
<body onload="initialize()">
<!--<div id="directions" style="width:500px;height:500px;float:left"></div>-->
<div id="map_canvas" style="width:500px;height:500px;"></div>
</body>
</html>
