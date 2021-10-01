<?= $this->extend('layout/index')?>

<?= $this-> section('css')?>

<link rel="stylesheet" type="text/css" href="<?= base_url();?>/template/bootstrap/css/bootstrap.min.css" />
<link href="<?= base_url();?>/template/css/main.css" rel="stylesheet">
<link href="<?= base_url();?>/template/css/font-style.css" rel="stylesheet">
<link href="<?= base_url();?>/template/css/flexslider.css" rel="stylesheet">

<?= $this->endSection();?>

<?= $this-> section('js')?>
<script type="text/javascript" src="<?= base_url();?>/template/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>/template/bootstrap/js/bootstrap.min.js"></script>

<!-- <script type="text/javascript" src="<?= base_url();?>/template/js/lineandbars.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript" src="<?= base_url();?>/template/js/dash-charts.js"></script>
<script type="text/javascript" src="<?= base_url();?>/template/js/gauge.js"></script>

<!-- NOTY JAVASCRIPT -->
<script type="text/javascript" src="<?= base_url();?>/template/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="<?= base_url();?>/template/js/noty/layouts/top.js"></script>
<script type="text/javascript" src="<?= base_url();?>/template/js/noty/layouts/topLeft.js"></script>
<script type="text/javascript" src="<?= base_url();?>/template/js/noty/layouts/topRight.js"></script>
<script type="text/javascript" src="<?= base_url();?>/template/js/noty/layouts/topCenter.js"></script>

<!-- You can add more layouts if you want -->
<script type="text/javascript" src="<?= base_url();?>/template/js/noty/themes/default.js"></script>
<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script src="<?= base_url();?>/template/js/jquery.flexslider.js" type="text/javascript"></script>

<script type="text/javascript" src="<?= base_url();?>/template/js/admin.js"></script>
<?= $this->endSection();?>


<?= $this->section('content')?>

<!-- FIRST ROW OF BLOCKS -->
<div class="row">

   <!-- USER PROFILE BLOCK -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Profil</dtitle>
         <hr>
         <div class="thumbnail">
            <img src="<?= base_url();?>/template/images/face80x80.jpg" alt=" " class="img-circle">
         </div><!-- /thumbnail -->
         <h3>Muhammad Taufikurrahman</h3>
         <h3>175100200111018</h3>
         <br>
         <div class="info-user">
            <span aria-hidden="true" class="li_user fs1"></span>
            <span aria-hidden="true" class="li_settings fs1"></span>
            <span aria-hidden="true" class="li_mail fs1"></span>
            <span aria-hidden="true" class="li_key fs1"></span>
         </div>
      </div>
   </div>

   <!-- DONUT CHART BLOCK -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Data Baterai</dtitle>
         <hr>
         <div id="load"></div>
         <h2>45%</h2>
      </div>
   </div>

   <!-- DONUT CHART BLOCK -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Data Baterai</dtitle>
         <hr>
         <div id="space"></div>
         <h2>65%</h2>
      </div>
   </div>

   <!-- GRAPH CHART - lineandbars.js file -->
   <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
         <dtitle>Data Sensor INA 1</dtitle>
         <hr>
         <div class="section-graph">
            <div id="importantchart"></div>
            <br>
            <div class="graph-info">
               <i class="graph-arrow"></i>
               <canvas id="myChart" width="400" height="400"></canvas>
            </div>
         </div>
      </div>
   </div>

</div><!-- /row -->

<?= $this->endSection();?>

<?= $this->section('chart-js')?>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
<?= $this->endSection();?>