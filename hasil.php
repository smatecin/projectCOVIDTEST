<?php
$pert1=$_POST['satu'];
$pert2=$_POST['dua'];
$pert3=$_POST['tiga'];
$pert4=$_POST['empat'];
$pert5=$_POST['lima'];
$pert6=$_POST['enam'];
$pert7=$_POST['tujuh'];
$pert8=$_POST['delapan'];
$pert9=$_POST['sembilan'];
$pert10=$_POST['sepuluh'];
$pert11=$_POST['sebelas'];
$pert12=$_POST['duabelas'];
$pert13=$_POST['tigabelas'];
$pert14=$_POST['empatbelas'];
$pert15=$_POST['limabelas'];
$pert16=$_POST['enambelas'];
$pert17=$_POST['tujuhbelas'];
$pert18=$_POST['delapanbelas'];
$pert19=$_POST['sembilanbelas'];
$pert20=$_POST['duapuluh'];
$pert21=$_POST['duasatu'];
$hasil=0;

if ($pert1 == "1"){
 $hasil++;
  }
if ($pert2 == "1"){
 $hasil++;
  }
  if ($pert3 == "1"){
 $hasil++;
  }
  if ($pert4 == "1"){
 $hasil++;
  }
  if ($pert5 == "1"){
 $hasil++;
  }
  if ($pert6 == "1"){
 $hasil++;
  }
  if ($pert7 == "1"){
 $hasil++;
  }
  if ($pert8 == "1"){
 $hasil++;
  }
  if ($pert9 == "1"){
 $hasil++;
  }
  if ($pert10 == "1"){
 $hasil++;
  }
  if ($pert11 == "1"){
 $hasil++;
  }
  if ($pert12 == "1"){
 $hasil++;
  }
  if ($pert13 == "1"){
 $hasil++;
  }
  if ($pert14 == "1"){
 $hasil++;
  }
  if ($pert15 == "1"){
 $hasil++;
  }
  if ($pert16 == "1"){
 $hasil++;
  }
  if ($pert17 == "1"){
 $hasil++;
  }
  if ($pert18 == "1"){
 $hasil++;
  }
  if ($pert19 == "1"){
 $hasil++;
  }
  if ($pert20 == "1"){
 $hasil++;
  }
  if ($pert21 == "1"){
 $hasil++;
  }
  ?>

<style type="text/css">
  .box{
    align-items: center;
    padding: 30px 40px;
    border-radius: 5px;
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
  <link rel="stylesheet" href="css/bootstrap.min.css">

<?php
if ($hasil<8) {?>
  
       <section id="home" class="home"><center><div class="col-md-4" >
  <br><img src="img/hsl/rendah.png" style="width: 100%" >
  <br>
  <br>
        
        
       <h4 class="section-intro__title text-center" style="color: #000000 ">
        Terimakasih sudah menjadi bagian dari pencegahan COVID-19.
        Datamu sangat membantu analisa kami untuk mengetahui potensi risiko penyebaran Covid-19 di lingkungan kamu.</h4><br><br>
        <div class="bg-success box text-white center" align="center" >
            <div class="col-md-12 " align="center">
              <h4><u>Anda Resiko Rendah</u></h4><br><br>
              <h5>Tinggal dirumah aja, cuci tangan dengan sabun, makan-makanan bergizi dan lakukan olahraga secara teratur</h5>
            </div>
            
        
        </div>
    </div></center></section>
  
    <?php
}

//Sedang
else if ($hasil<15) {?>

<center><div class="col-md-4" >
  <br><img src="img/hsl/sedang.png" style="width: 100%">
  <br>
  <br>
  <h4 class="section-intro__title text-center" style="color: #000000 ">
        Terimakasih sudah menjadi bagian dari pencegahan COVID-19.
        Datamu sangat membantu analisa kami untuk mengetahui potensi risiko penyebaran Covid-19 di lingkungan kamu.</h4><br><br>
        <div class="bg-warning box text-white center" align="center">
            <div class="col-md-12 " align="center">
              <h4><u>Anda Resiko Sedang</u></h4><br><br>
              <h5>Sebagai tindakan pencegahan, diminta untuk tinggal di rumah selama 14 hari untuk mencegah penyebaran. Anda disarankan untuk tidak keluar ke tempat publik, tinggal dirumah saja dan tidak boleh ada tamu.</h5>
            </div>
            
        
        </div>
    </div></center>
<?php
}




//Tinggi
else{
  ?>
<center><div class="col-md-4" >
  <br><img src="img/hsl/tinggi.png" width="100%"><br><br>
  <h4 class="section-intro__title text-center" style="color: #000000 ">
        Terimakasih sudah menjadi bagian dari pencegahan COVID-19.
        Datamu sangat membantu analisa kami untuk mengetahui potensi risiko penyebaran Covid-19 di lingkungan kamu.</h4><br><br>
        <div class="bg-danger box text-white center" align="center">
       
            <div class="col-md-12 " align="center">
              <h4><u>Anda Resiko Tinggi</u></h5><br><br>
              <h5>Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.</h5>
            </div>
            <br>
       <script>
function goBack() {
  window.history.back();
window.history.back();
    
}
</script>      
    <a onclick="goBack()" class="btn btn-success btn-lg">Self Checkup Lagi</a><br><br>
    <a href="rumahsakit.php" class="btn btn-primary btn-lg">Rumahsakit Rujukan!</a>
        </div>
    </div>
   
  </center>
    <?php
}

?>
<br><br><br><br><br>
<br><br> <center>
<a href="#">Back to top</a></center>








