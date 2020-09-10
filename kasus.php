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
  <link rel="stylesheet" href="vendors/aos/css/aos.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="css/style.css">
 
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
 <section class="hero-banner mb-30px ">
      <div class="container">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="20">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/banner/curva.png">
            </div>
          </div>
          <div class="col-lg-5 pt-7">
            <div class="hero-banner__content">
              <h1>Kasus COVID-19</h1>
              <p>Di Indonesia, kasus terkonfirmasi positif COVID-19 pertama kali terdektesi pada Senin, 2 Maret 2020. Sejak itu, jumlah yang terkonfirmasi COVID-19 semakin bertambah dari hari ke hari.</p>              
            </div>
            <center><img width="200px" src="https://media.giphy.com/media/Ws45dwz1GX8fzvHXdC/giphy.gif" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom"></center>
          </div>
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
   <div class="container" >

        <h1 style="text-align: center;" data-aos="zoom-in">Kasus Covid-19 Terkini</h1>
        <p style="text-align: center;" data-aos="zoom-in">Berikut adalah jumlah kasus Positif, Meninggal, dan Sembuh seluruh dunia</p>
       
  <div class="row">
    <div class="col-md-4" >
        <div class="bg-danger box text-white">
          <div class="row">
            <div class="col-md-6" data-aos="fade-down">
              <h5>Positif</h5>
              <h4 id="data-kasus"><td><img width="50px" src="img/Preloader.svg"></h4>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4" data-aos="fade-up" >
              <img src="img/sad.svg" style="width: 100px">
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-6" data-aos="fade-up">
              <h5>Meninggal</h5>
              <h4 id="data-mati"><td><img width="50px" src="img/Preloader.svg"></h4>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4 " data-aos="fade-down">
              <img src="img/cry.svg" style="width: 100px">
            </div>
          </div>
        </div>
    </div>

<div class="col-md-4">
        <div class="bg-success box text-white">
          <div class="row">
            <div class="col-md-6" data-aos="fade-down">
              <h5>Sembuh</h5>
              <h4 id="data-sembuh"><td><img width="50px" src="img/Preloader.svg"></h4>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4" data-aos="fade-up">
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
              <h5 id="data-id" ><td><img width="50px" src="img/Preloader.svg"></h5>
            </div>
            <div class="col-md-4">
              <img src="img/indonesia.svg" style="width: 150px">
            </div>
            <div class="col-md-5">
              <h2>Terkini</h2>
              <h5 id="data-terkini"><td><img width="50px" src="img/Preloader.svg"></h5>
                 <h6 style="color: white">Update Realtime tiap Pukul 16.00 WIB</h6>

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
                
                    <thead>
                      <th>No.</th>
                      <th>Nama Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </thead>
                  <tbody id="table-data">
                    <tr>
                      <td><img width="50px" src="img/Preloader.svg"></td>
                      <td><img width="50px" src="img/Preloader.svg"></td> 
                      <td><img width="50px" src="img/Preloader.svg"></td>
                       <td><img width="50px" src="img/Preloader.svg"></td>
                        <td><img width="50px" src="img/Preloader.svg"></td>
                    </tr>

                  </tbody>
                </table>
            </div>
          </div>
      </div></section>
   



 
  
  <!-- ================ start footer Area ================= -->
  <footer class="footer-area" style="padding: 10px 0px 10px">

  

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold" style="color: white;">Hotline COVID-19<br>
        Kemenkes RI </h6>
        <h2> <i class="fas fa-phone mr-3"></i> Tlp. 199 ext 9 </h2>
        <h6 class="text-uppercase font-weight-bold" style="color: white;">Website Mitigasi COVID-19 UMY </h6>
        <h2> <a href="https://covid-19.umy.ac.id/">Covid-19.umy.ac.id</a></h2>

      </div>
      
      <div class="col-sm-4 footer_widget hide_footer_widget">

        <h4 class="widget_title">Kontak</h4>
        <table>
                <tr>
                  <td width="120">Telp</td>
                  <td>: +62 274 387656 (hunting)</td>
                </tr>
                <tr>
                  <td>Faks</td>
                  <td>: +62 274 387646</td>
                </tr>
                <tr>
                  <td>Admisi</td>
                                                                        <td>: +62 274 387649 </td>
                                                                </tr>
                <tr>
                  <td>&nbsp;</td>
                                                                        <td>&nbsp; +62 274 387656 Ext. 199 & 200 (hunting)</td>
                </tr>
                <tr>
                  <td>Humas</td>
                  <td>: +62 274 387656 Ext. 115</td>
                </tr>
                <tr>
                  <td>Surel</td>
                  <td>: bhp@umy.ac.id</td>
                </tr>
              </table>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

       
            <h4 class="widget_title">Alamat</h4>
            <section  class="footer_widget_content">
              Kampus Terpadu UMY<br>
              Jl. Brawijaya,<br>
              Kasihan, Bantul<br>
              Yogyakarta 55183<br>
              <a href="https://goo.gl/MmskEh">Lihat di Peta Google</a>
            </section>
        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Smatecin All rights reserved
  </div>
  <!-- Copyright -->

</footer>
        
  <!-- ================ End footer Area ================= -->
</body>

</html>
 <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

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



