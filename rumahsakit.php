<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RS RUJUKAN - Checkup Covid-19</title>
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
              <li class="nav-item "><a class="nav-link" href="kasus.php">Kasus</a></li> 
              <li class="nav-item active"><a class="nav-link" href="rumahsakit.php">Rumahsakit Rujukan</a></li>
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
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/banner/rs.png">
            </div>
          </div>
          <div class="col-lg-5 pt-7">
            <div class="hero-banner__content">
              <h1>Rumah Sakit Rujukan</h1>
              <p>Rumah sakit rujukan ini dapat membantu masyarakat dalam menemukan rumah sakit atau Puskesmas yang ada di daerah (Yogyakarta) dimana rumah sakit atau puskesmas tersebut sudah mendapatkan verifikasi dari Kementrian Kesehatan dalam menangani kasus COVID-19.</p>              
            </div>
          </div>
        </div>
      </div>
         <center><img width="200px" src="https://media.giphy.com/media/Ws45dwz1GX8fzvHXdC/giphy.gif"></center>
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

        <h1 style="text-align: center;">Rumah Sakit Rujukan</h1>
        <p style="text-align: center;">Rumah sakit rujukan ini dapat membantu masyarakat dalam menemukan rumah sakit atau Puskesmas yang ada di daerah (Yogyakarta) dimana rumah sakit atau puskesmas tersebut sudah mendapatkan verifikasi dari Kementrian Kesehatan dalam menangani kasus COVID-19.</p>
        
 

 <div class="card mt-3">
            <div class="card-header  text-white" style="background-color: rgb(65 ,47 ,179);">
              <b>Data Rumah Sakit Rujukan COVID-19 di Indonesia</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <th>No.</th>
                      <th>Nama Rumah Sakit</th>
                      <th>Alamat</th>
                      <th>Region</th>
                      <th>Provinsi</th>
                      <th>Call</th>
                    </thead>
                  <tbody>
                    <tr>
                      <td><img width="50px" src="img/Preloader.svg"></td>
                      <td id="data-kasus"><img width="50px" src="img/Preloader.svg"></td> 
                      <td><img width="50px" src="img/Preloader.svg"></td>
                       <td><img width="50px" src="img/Preloader.svg"></td>
                        <td><img width="50px" src="img/Preloader.svg"></td>
                    </tr>
                  </tbody>
                </table>
            </div>
      </div>
        </div>
           
 
</section>


    

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
     
      setInterval(function(){
        semuaData();
        dataNegara();
      },3000);
   
      function semuaData(){
        $.ajax({
          url : 'https://dekontaminasi.com/api/id/covid19/hospitals',
          success : function(data){
              try{
                var json = data;
                var kasus = data.name;
                var meninggal = data.address;
                var sembuh = data.region;

              $('#data-kasus').html(kasus);
              $('#data-mati').html(meninggal);
              $('#data-sembuh').html(sembuh);

              }catch{
                alert('error');
              }
          }
        });
      }
     

       
  });
</script>