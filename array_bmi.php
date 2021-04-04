<?php
include 'class_bmipasien.php';
$list1 = ['nama'=>'Dimas','gender'=>'Laki-Laki','umur'=>20,'berat'=>60,'tinggi'=>165];
$list2 = ['nama'=>'Annisa','gender'=>'Perempuan','umur'=>19,'berat'=>43,'tinggi'=>155];
$list3 = ['nama'=>'Putri','gender'=>'Perempuan','umur'=>21,'berat'=>40,'tinggi'=>160];
$list4 = ['nama'=>$list4->nama,'gender'=>$list4->jns_klm,'umur'=>$list4->umur,'berat'=>$list4->berat,'tinggi'=>$list4->tinggi];
$ar_bmi = [$list1,$list2,$list3,$list4];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center mb-5 p-2">Data BMI Pasien</h2>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Gender</th>
            <th scope="col">Umur</th>
            <th scope="col">Berat(Kg)</th>
            <th scope="col">Tinggi(cm)</th>
            <th scope="col">BMI</th>
            <th scope="col">Hasil</th>
          </tr>
        </thead>
        <tbody>
        <?php
              $nomor = 1;
              foreach($ar_bmi as $ns){
                  echo '<tr><td>'.$nomor.'</td>';
                  echo '<td>'.$ns['nama'].'</td>';
                  echo '<td>'.$ns['gender'].'</td>';
                  echo '<td>'.$ns['umur'].'</td>';
                  echo '<td>'.$ns['berat'].'</td>';
                  echo '<td>'.$ns['tinggi'].'</td>';
                  $bmi = $ns["berat"] / (($ns["tinggi"]/100)**2);
                  echo '<td>'.number_format($bmi,1).'</td>';
                  $status = new bmiPasien();
                  echo '<td>'.$status->statusBMI($bmi).'</td>';
                  echo '<tr/>';
                  $nomor++;
              }
        ?>
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>