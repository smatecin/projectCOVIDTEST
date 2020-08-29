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

  

  <link rel="stylesheet" href="css/style.css">
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
            <div class="card mt-3">
            <div class="card-header  text-white" style="background-color: rgb(65 ,47 ,179);">
              <b>Data Kasus Corona Virus diIndonesia Bedasarkan Provinsi</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
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
              }catch{
                alert('error');
              }
          }
        });
      }
  });
</script>
