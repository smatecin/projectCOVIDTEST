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




if ($hasil<8) {
	$status = "	Resiko Rendah";
}

else if ($hasil<15) {
	$status = "	Resiko Sedang";
}
else{
 $status = "Resiko Tinggi";
}




 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Self Risk Assesment Covid-19</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


  <div class="container">
    

    <table class="table table-striped">
                                    <thead>
                                    <tr>
                                      <th>Total Jawaban YA</th>
                                      <th>Hasil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                        <td><?php echo $hasil;?></td>
                                        <td><?php echo $status;?></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                   
  </div>  

  <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Disclaimer: sumber dari Asosiasi Klinik Indonesia & Group WA</p>
        

    </footer>



</html>





