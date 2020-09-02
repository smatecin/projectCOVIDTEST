

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Simply Bootstrap Slider for text item &amp; image</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<style>
ol.carousel-indicators {
  position: relative;
  top: 10px;
}
ol.carousel-indicators > li {
  background-color: grey;
}
ol.carousel-indicators > li.active {
  background-color: green;
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-0">
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class=""></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
<li data-target="#myCarousel" data-slide-to="5"></li>
<li data-target="#myCarousel" data-slide-to="6"></li>
<li data-target="#myCarousel" data-slide-to="7"></li>
<li data-target="#myCarousel" data-slide-to="8"></li>
</ol>



<form method="POST" action="hasil.php">
<div class="carousel-inner" role="listbox">
<div class="item active">
<h4>1.Apakah anda mengalami batuk, pilek dan nyeri tenggorokan?</h4>
  <input class="form-check-input" type="radio" name="pert1" value="YA">
  <label class="form-check-label" >YA</label>
  <input class="form-check-input" type="radio" name="pert1" value="TIDAK">
  <label class="form-check-label" >TIDAK</label>
</div>

<div class="item ">
<h4>2.Apakah suhu tubuh anda diatas 38' Celcius? </h4>
 <input class="form-check-input" type="radio" name="pert2" value="YA">
  <label class="form-check-label" >YA</label>
  <input class="form-check-input" type="radio" name="pert2" value="TIDAK">
  <label class="form-check-label" >TIDAK</label>
</div>

<div class="item ">
<h4>3.Apakah anda mengalami nyeri sendi? </h4>

    <input class="form-check-input" type="radio" name="pert3" value="YA">
  <label class="form-check-label" >YA</label>
  <input class="form-check-input" type="radio" name="pert3" value="TIDAK">
  <label class="form-check-label" >TIDAK</label>
</div>

<div class="item ">
<h4>4. Apakah anda mengalami sesak nafas? </h4>
  <input class="form-check-input" type="radio" name="pert4" value="YA">
  <label class="form-check-label" >YA</label>
  <input class="form-check-input" type="radio" name="pert4" value="TIDAK">
  <label class="form-check-label" >TIDAK</label>
</div>

<div class="item ">
<h4>5.Apakah anda pernah melakukan perjalanan ke luar negeri dalam dua bulan terakhir? </h4>
  <input class="form-check-input" type="radio" name="pert5" value="YA">
  <label class="form-check-label" >YA</label>
  <input class="form-check-input" type="radio" name="pert5" value="TIDAK">
  <label class="form-check-label" >TIDAK</label>
</div>



<div class="item ">
<h4>HASIL?</h4>
<input class="btn btn-primary" type="submit" name="hasil" value="Hasil">
</div>

</form>








</div>


<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script>
  $('.carousel').carousel({
   interval: 0
  });
 </script>       

</body>
</html>
