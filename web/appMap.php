<?php
include './app_header.php';
?>

<body>
    <div id='input'>

        <?php
 // $servername="localhost";
        //    $dbusername="glidemaster_web";
        //    $dbpassword="glidemaster_web";
        //    $dbname="GlideMaster_Website";
        //Connect to the MySQL database that is holding your data, replace the x's with your data
        mysql_connect("localhost", "root", "") or
            die("Could not connect: " . mysql_error());
        mysql_select_db("smartwastebin");

        //Initialize your first couple variables
        $encodedString = ""; //This is the string that will hold all your location data
        $x = 0; //This is a trigger to keep the string tidy

        //Now we do a simple query to the database
        $result = mysql_query("SELECT * FROM `bin` WHERE 1");

        //Multiple rows are returned
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
            //This is to keep an empty first or last line from forming, when the string is split
            if ($x == 0) {
                $separator = "";
            } else {
                //Each row in the database is separated in the string by four *'s
                $separator = "****";
            }
            //Saving to the String, each variable is separated by three &'s
            //this is for the shows the details in the map
            $encodedString = $encodedString . $separator .
                "<p class='content'> " .
                //            " <br> <b>Lat:</b> ".$row[1].
                //            "<br><b>Long:</b> ".$row[2].
                "<br><b>Bin Number : </b>" . $row[4] .
                "<br><b>Location : </b>" . $row[1] .

                "</p>&&&" . $row[2] . "&&&" . $row[3];
            $x = $x + 1;
        }
        ?>

        <input type="hidden" id="encodedString" name="encodedString" value="<?php echo $encodedString; ?>" />
    </div>
    <div id="map"></div>
</body>

</html> 