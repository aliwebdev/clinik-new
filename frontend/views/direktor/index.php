<div class="myCards">
<div class="row">
    <div class="col-md-9"></div>
    <div class="row col-md-3"><br>
        <div class="col-md-12"><br>
            <label for="" class="costPicker">Sa'na bo'yicha qidirish</label>
        </div>
        <div class="col-md-8" style="display: flex;flex-direction: row;">
            <input type="date" class="col-md-12 form-control"><span><button class="btn btn-outline-info">Qidirish</button></span>
        </div>
    </div>
</div>
<h3>Bugungi hisobotlar</h3>
<div class="row cardHolder">
<div class="col-md-1"></div>
<div class="col-md-4">
    <div class="col-md-12 row myCard">
        <div class="col-md-4"><div class="iconHolder"><i class="fas fa-wallet"></i></div></div>
        <div class="dataHolder col-md-8"><h5>23,000,000 so'm</h5></div>
    </div>
</div>
<div class="col-md-2"></div>
<div class="col-md-4">
    <div class="col-md-12 row myCard">
        <div class="col-md-4"><div class="iconHolder"><i class="fas fa-heartbeat"></i></div></div>
        <div class="dataHolder col-md-8"><h5>340 be'mor</h5></div>
    </div>
</div>
<div class="col-md-1"></div>
</div>

<h3>Kechagi hisobotlar</h3>
<div class="row cardHolder">
<div class="col-md-1"></div>
<div class="col-md-4">
    <div class="col-md-12 row myCard">
        <div class="col-md-4"><div class="iconHolder"><i class="fas fa-wallet"></i></div></div>
        <div class="dataHolder col-md-8"><h5>23,000,000 so'm</h5></div>
    </div>
</div>
<div class="col-md-2"></div>
<div class="col-md-4">
    <div class="col-md-12 row myCard">
        <div class="col-md-4"><div class="iconHolder"><i class="fas fa-heartbeat"></i></div></div>
        <div class="dataHolder col-md-8"><h5>340 be'mor</h5></div>
    </div>
</div>
<div class="col-md-1"></div>
</div>

<h3>Sa'na bo'yicha qidirilgan hisobotlar</h3>
<div class="row cardHolder">
<div class="col-md-1"></div>
<div class="col-md-4">
    <div class="col-md-12 row myCard">
        <div class="col-md-4"><div class="iconHolder"><i class="fas fa-wallet"></i></div></div>
        <div class="dataHolder col-md-8"><h5>00,000,000 so'm</h5></div>
    </div>
</div>
<div class="col-md-2"></div>
<div class="col-md-4">
    <div class="col-md-12 row myCard">
        <div class="col-md-4"><div class="iconHolder"><i class="fas fa-heartbeat"></i></div></div>
        <div class="dataHolder col-md-8"><h5>000 be'mor</h5></div>
    </div>
</div>

</div>
   

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
         array("label"=> "Sentabr", "y"=> 2500 ),
         array("label"=> "Oktabr", "y"=> 1800 ),
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
         array("label"=> "Sentabr", "y"=> 93462 ),
         array("label"=> "Oktabr", "y"=> 42962 ),
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
             text: "Bemorlar va daromad statistikasi"
         },
         subtitles: [{
             text: "(daromad - mln so'm da/Bemorlar - kishi)"
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
             name: "Bemorlar soni",
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
        <br>
     <div id="chartContainer" class="statDir" style="height: 400px; width: 100%; margin-bottom: 90px; "></div><br><br>
                       