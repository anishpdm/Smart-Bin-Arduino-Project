<?php
 // session_start();
?>

<?php


?>

<html>

<head>
    <meta charset="UTF-8">
    <title>
        SMART BIN
    </title>
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
    <!--//<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  


    <script type='text/javascript' src='js/jquery-1.6.2.min.js'></script>

    <script type='text/javascript' src='js/jquery-ui.min.js'></script>
    <style>
        BODY {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #000000;
            font-size: 13px;
        }

        #map {
            width: 100%;
            height: 100%;
            z-index: 0;
        }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTXJXVICQ4ATZuHHejBjLPLLD1n-Kfvx0" />
    </script>

    <script type='text/javascript'>
        //This javascript will load when the page loads.
        jQuery(document).ready(function($) {

            //Initialize the Google Maps
            var geocoder;
            var map;
            var markersArray = [];
            var infos = [];

            geocoder = new google.maps.Geocoder();

            var myOptions = {
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            //Load the Map into the map div
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            map = new google.maps.Map(document.getElementById("map"), myOptions);

            //Initialize a variable that the auto-size the map to whatever you are plotting
            var bounds = new google.maps.LatLngBounds();
            //Initialize the encoded string       
            var encodedString;
            //Initialize the array that will hold the contents of the split string
            var stringArray = [];
            //Get the value of the encoded string from the hidden input
            encodedString = document.getElementById("encodedString").value;
            //Split the encoded string into an array the separates each location
            stringArray = encodedString.split("****");


            var x;
            for (x = 0; x < stringArray.length; x = x + 1) {
                var addressDetails = [];
                var marker;
                //Separate each field
                addressDetails = stringArray[x].split("&&&");
                //Load the lat, long data
                var lat = new google.maps.LatLng(addressDetails[1], addressDetails[2]);
                //Create a new marker and info window
                marker = new google.maps.Marker({
                    map: map,
                    position: lat,
                    //Content is what will show up in the info window
                    content: addressDetails[0]
                });

                //Pushing the markers into an array so that it's easier to manage them
                //
                markersArray.push(marker);
                google.maps.event.addListener(marker, 'click', function() {
                    closeInfos();
                    var info = new google.maps.InfoWindow({
                        content: this.content
                    });
                    //On click the map will load the info window
                    info.open(map, this);
                    infos[0] = info;
                });

                //Extends the boundaries of the map to include this new location///
                bounds.extend(lat);
            }
            //Takes all the lat, longs in the bounds variable and autosizes the map
            map.fitBounds(bounds);

            //Manages the info windows
            function closeInfos() {
                if (infos.length > 0) {
                    infos[0].set("marker", null);
                    infos[0].close();
                    infos.length = 0;
                }
            }

        });
    </script>

</head> 