window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        animationEnabled: true,
        title: {
            text: "Web Development Phases"
        },
        subtitles: [{
            text: "Phase values may vary",
            fontSize: 16
        }],
        data: [{
            type: "pie",
            indexLabelFontSize: 18,
            radius: 80,
            indexLabel: "{label} - {y}",
            yValueFormatString: "###0.0\"%\"",
            click: explodePie,
            dataPoints: [
                { y: 10, label: "Promotion" },
                { y: 25, label: "Analysis"},
                { y: 20, label: "Design" },
                { y: 20, label: "Testing" },
                { y: 25, label: "Communication" },
            ]
        }]
    });
    chart.render();
    
    function explodePie(e) {
        for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
            if(i !== e.dataPointIndex)
                e.dataSeries.dataPoints[i].exploded = false;
        }
    }
     
    }