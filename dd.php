<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KASUS - Checkup Covid-19</title>
  <link rel="icon" href="img/icon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="css/style.css">
  <!-- BOOTSTRAP CSS -->
    <link href="data/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="data/css/newstyle.css" rel="stylesheet"/>
    <link href="data/css/skin-modes.css" rel="stylesheet"/>

    <!--HORIZONTAL CSS-->
    <link href="data/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet" />

    <!--C3.JS CHARTS CSS -->
    <link href="data/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!--MORRIS CSS -->
    <link href="data/plugins/morris/morris.css" rel="stylesheet"/>

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="data/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="data/css/icons.css" rel="stylesheet"/>

    <!-- SIDEBAR CSS -->
    <link href="data/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="data/colors/color1.css" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101162957-2" type="d70a932c05458c89bc35185d-text/javascript"></script>
<script type="d70a932c05458c89bc35185d-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101162957-2');
</script>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
              <li class="nav-item active"><a class="nav-link" href="kasus.php">Kasus</a></li> 
              <li class="nav-item"><a class="nav-link" href="rumahsakit.php">Rumahsakit Rujukan</a></li>
              <li class="nav-item"><a class="nav-link" href="checkup.php">Checkup!</a></li>
            </ul>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Kasus COVID-19</h1>
        <p>Di Indonesia, kasus terkonfirmasi positif COVID-19 pertama kali terdektesi pada
              Senin, 2 Maret 2020. Sejak itu, jumlah yang terkonfirmasi COVID-19 semakin bertambah dari hari ke hari. </p>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

  
  <!--================ Offer section start =================-->
  <style type="text/css">
  .box{
    padding: 30px 40px;
    border-radius: 4px;
  }
  h5 {
    color: white;
  }
   h4 {
    color: white;
  }
  h2 {
    color: white;
  }
</style>
  <section class="section-margin">
   <div class="container">

        <h1 style="text-align: center;">Kasus Covid-19 Terkini</h1>
        <p style="text-align: center;">Berikut adalah jumlah kasus Positif, Meninggal, dan Sembuh seluruh dunia</p>
        </nav>
  <div class="row">
    <div class="col-md-4">
        <div class="bg-danger box text-white">
          <div class="row">
            <div class="col-md-6">
              <h5>Positif</h5>
              <h4 id="data-kasus"></h4>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4">
              <img src="img/sad.svg" style="width: 100px">
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-6">
              <h5>Meninggal</h5>
              <h4 id="data-mati"></h4>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4">
              <img src="img/cry.svg" style="width: 100px">
            </div>
          </div>
        </div>
    </div>

<div class="col-md-4">
        <div class="bg-success box text-white">
          <div class="row">
            <div class="col-md-6">
              <h5>Sembuh</h5>
              <h4 id="data-sembuh"></h4>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4">
              <img src="img/happy.svg" style="width: 100px">
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-12 mt-3">
        <div class="bg box text-black" style="background-color: rgb(65 ,47 ,179);">
          <div class="row">
            <div class="col-md-3">
              <h2>INDONESIA</h2>
              <h5 id="data-id" >x</h5>
            </div>
            <div class="col-md-4">
              <img src="img/indonesia.svg" style="width: 150px">
            </div>
            <div class="col-md-5">
              <h2>Terkini</h2>
              <h5 id="data-terkini">x</h5>
            </div>
          </div>
        </div>
    </div>
        </div>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <div class="card mt-3">
            <div class="card-header  text-white" style="background-color: rgb(65 ,47 ,179);">
              <b>Data Kasus Corona Virus diIndonesia Bedasarkan Provinsi</b>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                    <thead>
                      <th>No.</th>
                      <th>Nama Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </thead>
                  <tbody id="table-data">
                    
                  </tbody>
                </table>
            </div>
          </div>
      </div>
    
</div>

<!-- ROW-2 OPEN -->
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
                <div class="card overflow-hidden bg-white work-progress">
                  <div class="card-header">
                    <h3 class="card-title">Statistik Kasus Coronavirus di Indonesia</h3>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <canvas id="total-coversations" class="h-160 chart-dropshadow-info"></canvas>
                    </div>
                    <div class="row mt-6">
                      <div class="col text-center">
                        <h5 class="font-weight-normal mt-2">POSITIF</h5>
                        <h3 class="text-xxl mb-1 social-content  number-font">165,887</h3>
                        <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
                        
                      </div>
                      <div class="col text-center">
                        <h5 class="font-weight-normal mt-2">SEMBUH</h5>
                        <h3 class="text-xxl mb-1 social-content danger number-font">120,900</h3>
                        <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
                        
                      </div>
                      <div class="col text-center">
                        <h5 class="font-weight-normal mt-2">MENINGGAL</h5>
                        <h3 class="text-xxl mb-1 social-content  number-font">7,169</h3>
                        <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
                      
                      </div>
                      <div class="chart-wrapper">
                      <canvas id="deals" class="chart-dropshadow-success" hidden></canvas>
                    </div>
                    </div>
                  </div>
                </div>
              </div><!-- COL END -->
              
            </div>
            <!-- ROW-2 CLOSED -->

    

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    
<center> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Smatecin All rights reserved   </center>
        

  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
<script>
  $(document).ready(function(){
      semuaData();
      dataNegara();
      dataProvinsi();
      setInterval(function(){
        semuaData();
        dataNegara();
      },3000);
   
      function semuaData(){
        $.ajax({
          url : 'https://coronavirus-19-api.herokuapp.com/all',
          success : function(data){
              try{
                var json = data;
                var kasus = data.cases;
                var meninggal = data.deaths;
                var sembuh = data.recovered;

              $('#data-kasus').html(kasus);
              $('#data-mati').html(meninggal);
              $('#data-sembuh').html(sembuh);

              }catch{
                alert('error');
              }
          }
        });
      }
      function dataNegara(){
         $.ajax({
          url : 'https://coronavirus-19-api.herokuapp.com/countries',
          success : function(data){
              try{
                var json = data;
                var html = [];
                if (json.length > 0) {
                  var i;
                  for (i = 0; i < json.length; i++) {
                    var dataNegara = json[i];
                    var namaNegara = dataNegara.country;

                    if(namaNegara == 'Indonesia'){
                      var kasus = dataNegara.cases;
                      var kasushariini = dataNegara.todayCases;
                      var mati = dataNegara.deaths;
                      var matihariini = dataNegara.todayDeaths;
                      var sembuh = dataNegara.recovered;
                      $('#data-id').html(
                        'Positif : ' +kasus+ ' Orang <br> Meninggal : '+mati+' Orang <br> Sembuh : '+sembuh+' Orang');
                      $('#data-terkini').html(
                        'Positif : ' +kasushariini+ ' Orang <br> Meninggal : '+matihariini+' Orang');

                    }
                  
                  }
                }

              }catch{
                alert('error');
              }
          }
        });
        }

        function dataProvinsi(){

           $.ajax({
          url : 'curl.php',
          type : 'GET',
          success : function(data){
              try{
                $('#table-data').html(data);
                $('#example').DataTable({
                    "scrollY": "500px",
                    "scrollCollapse": true,
                } );
                $('.dataTables_length').addClass('bs-select');

              }catch{
                alert('error');
              }
          }
        });
      }
  });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
   $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 4, "asc" ]]
    } );
} );

    </script>


