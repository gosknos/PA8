
    window.onload = function () {
    var dataPointsTemp = [];
    var dataPointsHumidite = [];
    var chart = new CanvasJS.Chart("chartContainer",{
        title:{
            text:"Evolution de la température sur les dernières 24 heures"
        },
        axisX:{      
            title: "Temps (h)",
            interlacedColor: "azure",
            tickColor: "azure",
            titleFontColor: "rgb(0,75,141)"
                },
        axisY: {
            title: "Température",
            interlacedColor: "azure",
            tickColor: "azure",
            titleFontColor: "rgb(0,75,141)"
        },
        data: [{
            type: "line",
            dataPoints : dataPointsTemp,
        }]
    });
    $.getJSON("http://localhost/databee.php", function(data) {  
        $.each(data, function(key, value){
            dataPointsTemp.push({x: parseInt(value.heure), y: parseInt(value.temperature)});
        });
        chart.render();
    });


    var chartHumidite = new CanvasJS.Chart("chartHumidite",{
        title:{
            text:"Evolution de l'humidité sur les dernières 24 heures"
        },
        axisX:{      
            title: "Temps (h)",
            interlacedColor: "azure",
            tickColor: "azure",
            titleFontColor: "rgb(0,75,141)"
                },
        axisY: {
            title: "Humidité",
            interlacedColor: "azure",
            tickColor: "azure",
            titleFontColor: "rgb(0,75,141)"
        },
        data: [{
            type: "line",
            dataPoints : dataPointsHumidite,
        }]
    });
    $.getJSON("http://localhost/databee.php", function(data) {  
        $.each(data, function(key, value){
            dataPointsHumidite.push({x: parseInt(value.heure), y: parseInt(value.humidite)});
        });
        chartHumidite.render();
    });
    }