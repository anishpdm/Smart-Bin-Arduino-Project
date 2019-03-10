<?php
include_once './header.php';
?>

<script type="text/javascript">
    var defaultValue = 100;
    var x = 100;
    var value = 0;
    var temp;

    function getvalue(isUpdate) {
        // var test;
        console.log('Call')
        $.ajax({
            url: "graph.php",
            success: function(data) {
                temp = data;
                console.log('Data -' + temp);

            }

        });
        return temp;
        //return test;
    }


    FusionCharts.ready(function() {
        var fusioncharts = new FusionCharts({
            type: 'cylinder',
            dataFormat: 'json',
            id: 'fuelMeter-1',
            renderAt: 'chart-container',
            width: '200',
            height: '350',
            dataSource: {
                "chart": {
                    "theme": "fint",
                    "caption": "Smart Bin @ Providence College of Engineering",
                    "subcaption": " Chengannur",
                    "lowerLimit": "0",
                    "upperLimit": "100",
                    "lowerLimitDisplay": "Empty",
                    "upperLimitDisplay": "Full",
                    "numberSuffix": " %",
                    "showValue": "1",
                    "chartBottomMargin": "45",
                    "showValue": "0"
                },
                "value": value,
                "annotations": {
                    "origw": "400",
                    "origh": "190",
                    "autoscale": "1",
                    "groups": [{
                        "id": "range",
                        "items": [{
                            "id": "rangeBg",
                            "type": "rectangle",
                            "x": "$canvasCenterX-45",
                            "y": "$chartEndY-30",
                            "tox": "$canvasCenterX +45",
                            "toy": "$chartEndY-75",
                            "fillcolor": "#6caa03"
                        }, {
                            "id": "rangeText",
                            "type": "Text",
                            "fontSize": "11",
                            "fillcolor": "#333333",
                            "text": "0 %",
                            "x": "$chartCenterX-45",
                            "y": "$chartEndY-50"
                        }]
                    }]
                }

            },
            "events": {
                "rendered": function(evtObj, argObj) {

                    evtObj.sender.chartInterval = setInterval(function() {
                        console.log(getvalue())
                        evtObj.sender.feedData("&value=" + getvalue(true));
                    }, 1000);
                },
                //Using real time update event to update the annotation
                //showing available volume of Diesel
                "realTimeUpdateComplete": function(evt, arg) {
                    console.log(" realTimeUpdateComplete")
                    var annotations = evt.sender.annotations,
                        dataVal = evt.sender.getData(),
                        colorVal = (dataVal >= 70) ? "#FF0000" : ((dataVal >= 1) ? "#6caa03" : "#00aabb");
                    //Updating value
                    annotations && annotations.update('rangeText', {
                        "text": dataVal + " %"
                    });
                    //Changing background color as per value
                    annotations && annotations.update('rangeBg', {
                        "fillcolor": colorVal
                    });
                },
                "disposed": function(evt, arg) {
                    clearInterval(evt.sender.chartInterval);
                }
            }
        });
        fusioncharts.render();
    });
</script>


<body>


    <div class="container">

        <div class="row">
            <div class="col col-sm-4 col-4">

            </div>
            <div class="col col-sm-4 col-4">
                <h1>SMART BIN</h1>
                <div id="chart-container">Data will load here!</div>
            </div>

            <div class="col col-sm-4 col-4">

            </div>
        </div>

    </div>


</body>

</html> 