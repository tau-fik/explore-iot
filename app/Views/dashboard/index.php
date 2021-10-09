<?= $this->extend('layout/index') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/template/bootstrap/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>/template/css/main.css" rel="stylesheet">
<link href="<?= base_url(); ?>/template/css/font-style.css" rel="stylesheet">
<link href="<?= base_url(); ?>/template/css/flexslider.css" rel="stylesheet">

<?= $this->endSection(); ?>

<?= $this->section('js') ?>
<script type="text/javascript" src="<?= base_url(); ?>/template/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/bootstrap/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>


<script type="text/javascript" src="<?= base_url(); ?>/template/js/dash-charts.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/js/gauge.js"></script>

<!-- NOTY JAVASCRIPT -->
<script type="text/javascript" src="<?= base_url(); ?>/template/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/js/noty/layouts/top.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/js/noty/layouts/topLeft.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/js/noty/layouts/topRight.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/js/noty/layouts/topCenter.js"></script>

<!-- You can add more layouts if you want -->
<script type="text/javascript" src="<?= base_url(); ?>/template/js/noty/themes/default.js"></script>
<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script src="<?= base_url(); ?>/template/js/jquery.flexslider.js" type="text/javascript"></script>

<script type="text/javascript" src="<?= base_url(); ?>/template/js/admin.js"></script>
<?= $this->endSection(); ?>


<?= $this->section('content') ?>

<?php
foreach ($statis_ina1 as $i) {
   $time_ina1[] = $i['time'];
   $volt1[] = $i['data_volt'];
   $arus1[] = $i['data_arus'];
   $last_volt1 = $i['data_volt'];
   $last_arus1 = $i['data_arus'];
}

foreach ($statis_ina2 as $i) {
   $time_ina2[] = $i['time'];
   $volt2[] = $i['data_volt'];
   $arus2[] = $i['data_arus'];
   $last_volt2 = $i['data_volt'];
   $last_arus2 = $i['data_arus'];
}

foreach ($statis_anemo as $a) {
   $time_anemo[] = $a['time'];
   $anemo[] = $a['data_anemometer'];
   $last_anemo = $a['data_anemometer'];
}
$energi = $statis_baterai->data_baterai;
$space = 100 - $energi;
?>

<!-- FIRST ROW OF BLOCKS -->
<div class="row my-4">

   <!-- GRAPH CHART - lineandbars.js file -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Sensor INA 1</dtitle>
         <hr>
         <div class="section-graph">
            <canvas id="ina1Chart"></canvas>
            <br>
            <div class="graph-info">
               <h5><?= $last_volt1; ?> V | <?= $last_arus1; ?> A</h5>
            </div>
         </div>
      </div>
   </div>

   <!-- GRAPH CHART - lineandbars.js file -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Sensor INA 2</dtitle>
         <hr>
         <div class="section-graph">
            <canvas id="ina2Chart"></canvas>
            <br>
            <div class="graph-info">
               <h5><?= $last_volt2; ?> V | <?= $last_arus2; ?> A</h5>
            </div>
         </div>
      </div>
   </div>

   <!-- GRAPH CHART - lineandbars.js file -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Anemo Meter</dtitle>
         <hr>
         <div class="section-graph">
            <canvas id="anemoChart"></canvas>
            <br>
            <div class="graph-info">
               <h5><?= $last_anemo; ?> m/s</h5>
            </div>
         </div>
      </div>
   </div>

   <!-- GRAPH CHART - lineandbars.js file -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Batre</dtitle>
         <hr>
         <div class="section-graph">
            <canvas id="batChart"></canvas>
            <br>
            <div class="graph-info">
               <h5><?= $energi ?> %</h5>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="row my-4">


</div>
<!-- /row -->



<?= $this->endSection(); ?>

<?= $this->section('chart-js') ?>
<script>
   //ina1 chart
   var barChartData = {
      labels: <?= json_encode($time_ina1) ?>,

      datasets: [{
            label: "tegangan",
            backgroundColor: "pink",
            borderColor: "red",
            borderWidth: 1,
            data: <?= json_encode($volt1) ?>
         },
         {
            label: "arus",
            backgroundColor: "lightblue",
            borderColor: "blue",
            borderWidth: 1,
            data: <?= json_encode($arus1) ?>
         }
      ]
   };

   var chartOptions = {
      responsive: true,
      legend: {
         position: "top"
      },
      title: {
         display: false,
         text: "Chart.js Bar Chart"
      },
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero: true
            }
         }]
      }
   }

   var ctx = document.getElementById("ina1Chart").getContext("2d");
   window.myBar = new Chart(ctx, {
      type: "line",
      data: barChartData,
      options: chartOptions
   });

   //ina2 chart
   var barChartData = {
      labels: <?= json_encode($time_ina2) ?>,

      datasets: [{
            label: "tegangan",
            backgroundColor: "pink",
            borderColor: "red",
            borderWidth: 1,
            data: <?= json_encode($volt2) ?>
         },
         {
            label: "arus",
            backgroundColor: "lightblue",
            borderColor: "blue",
            borderWidth: 1,
            data: <?= json_encode($arus2) ?>
         }
      ]
   };

   var chartOptions = {
      responsive: true,
      legend: {
         position: "top"
      },
      title: {
         display: false,
         text: "Chart.js Bar Chart"
      },
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero: true
            }
         }]
      }
   }

   var ctx = document.getElementById("ina2Chart").getContext("2d");
   window.myBar = new Chart(ctx, {
      type: "line",
      data: barChartData,
      options: chartOptions
   });

   //anemo
   var barChartData = {
      labels: <?= json_encode($time_anemo) ?>,

      datasets: [{
         label: "m/s",
         backgroundColor: "pink",
         borderColor: "red",
         borderWidth: 1,
         data: <?= json_encode($anemo) ?>
      }]
   };

   var chartOptions = {
      responsive: true,
      legend: {
         position: "top"
      },
      title: {
         display: false,
         text: "Chart.js Bar Chart"
      },
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero: true
            }
         }]
      }
   }

   var ctx = document.getElementById("anemoChart").getContext("2d");
   window.myBar = new Chart(ctx, {
      type: "line",
      data: barChartData,
      options: chartOptions
   });


   //bat chart
   var chartProgress = document.getElementById("batChart");
   if (chartProgress) {
      var myChartCircle = new Chart(chartProgress, {
         type: 'doughnut',
         data: {
            labels: ["Energi", 'null'],
            datasets: [{
               label: "Population (millions)",
               backgroundColor: ["lightblue", "pink"],
               borderColor: ["blue", "red"],
               data: [<?= $energi ?>, <?= $space ?>]
            }]
         },
         plugins: [{
            beforeDraw: function(chart) {
               var width = chart.chart.width,
                  height = chart.chart.height,
                  ctx = chart.chart.ctx;

               ctx.restore();
               var fontSize = (height / 150).toFixed(2);
               ctx.font = fontSize + "em sans-serif";
               ctx.fillStyle = "#9b9b9b";
               ctx.textBaseline = "middle";

               var text = "<?= $energi ?>%",
                  textX = Math.round((width - ctx.measureText(text).width) / 2),
                  textY = height / 2;

               ctx.fillText(text, textX, textY);
               ctx.save();
            }
         }],
         options: {
            legend: {
               display: false,
            },
            responsive: true,
            maintainAspectRatio: false,
            cutoutPercentage: 85
         }

      });


   }
</script>
<?= $this->endSection(); ?>