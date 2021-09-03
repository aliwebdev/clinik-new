<?php
     
     $dataPoints1 = array(
         array("label"=> "Yanvar", "y"=> 2400 ),
         array("label"=> "Fevral", "y"=> 1800 ),
         array("label"=> "Mart", "y"=> 1200 ),
         array("label"=> "Aprel", "y"=> 4200 ),
         array("label"=> "May", "y"=> 1500 ),
         array("label"=> "Iyun", "y"=> 2500 ),
         array("label"=> "Iyul", "y"=> 1900 ),
         array("label"=> "Avgust", "y"=> 2200 ),
         array("label"=> "Sentiar", "y"=> 2500 ),
         array("label"=> "Oktiabr", "y"=> 1800 ),
         array("label"=> "Noyabr", "y"=> 2000 ),
         array("label"=> "Dekabr", "y"=> 2500 )
     );
      
     $dataPoints2 = array(
         array("label"=> "Yanvar", "y"=> 59841 ),
         array("label"=> "Fevral", "y"=> 92345 ),
         array("label"=> "Mart", "y"=> 22912 ),
         array("label"=> "Aprel", "y"=> 49623 ),
         array("label"=> "May", "y"=> 35196 ),
         array("label"=> "Iyun", "y"=> 46926 ),
         array("label"=> "Iyul", "y"=> 23942 ),
         array("label"=> "Avgust", "y"=> 49262 ),
         array("label"=> "Sentiar", "y"=> 93462 ),
         array("label"=> "Oktiabr", "y"=> 42962 ),
         array("label"=> "Noyabr", "y"=> 25926 ),
         array("label"=> "Dekabr", "y"=> 34692 )
     );
      
     ?>
     <!DOCTYPE HTML>
     <html>
     <head>  
     <script>
     window.onload = function () {
      
     var chart = new CanvasJS.Chart("chartContainer", { 
         theme: "light2",
         title: {
             text: "Be'morlar va Daromad Statistikasi"
         },
         subtitles: [{
             text: "(daromad - mln so'm da/be'morlar - kishi)"
         }],
         legend:{
             cursor: "pointer",
             itemclick: toggleDataSeries
         },
         toolTip: {
             shared: true
         },
         data: [
         {
             type: "stackedArea",
             name: "Be'morlar soni",
             showInLegend: true,
             yValueFormatString: "#,##0",
             dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
         },
         {
             type: "stackedArea",
             name: "Daromad",
             showInLegend: true,
             yValueFormatString: "#,##0",
             dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
         }]
     });
      
     chart.render();
      
     function toggleDataSeries(e){
         if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
             e.dataSeries.visible = false;
         }
         else{
             e.dataSeries.visible = true;
         }
         chart.render();
     }
      
     }
     </script>
     </head>
     <body>
     <div id="chartContainer" class="statDir" style="height: 500px; width: 100%; padding-top: 50px;"></div>
     </body>
     </html>                              