<?php
include("vt_ayar.php");
 
$sorgu=$vt->prepare('SELECT * FROM urunler');
$sorgu->execute();
$list=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>
 
<!doctype html>
<html lang="tr">
  <head>
    
    <meta charset="utf-8">
	<link href="stil.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 
 
 
 
 
 <body background="pc.jpg">
  


    <title>Yönetici Sayfası</title>
  </head>
  <body>
   
 
	  
	  <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
			 <table class="table table-bordered table-striped table-dark">
			 <tr>
			 
			 
			 <?php
$db=new PDO("mysql:hots=localhost;dbname=ozellikler;charset=utf8","root","");

     $query= $db->query("select * from turler");




?>
<table class="table table-bordered table-striped table-dark">
<td><a href="http://localhost/kullan%c4%b1c%c4%b1lar/kullanicilar.php" class="btn btn-info">Kullanıcılar</a></td>
			 	<td><a href="grafik.php" class="btn btn-info">Türe Göre Satış Grafiği</a></td>
				<td><a href="recetesizz.php" class="btn btn-info">Reçeteli Satış Grafiği</a></td>
				<td><a href="receteli.php" class="btn btn-info">Reçetesiz Satış Grafiği</a></td>
				<td><a href="toplam_satis.php" class="btn btn-info">Günlük Toplam Satış</a></td>
			 	<td><a href="ekle.php" class="btn btn-info">Kullanıcı Ekle</a></td>
</table>

</table>
			 
			 
			 
			 
			 
			 </td></tr>

		 <table class="table table-bordered table-striped thead table-dark">
			<tr>
			 <td>ID</td>
			 <td>Ad</td>
			 <td>Adet</td>
			 <td>Fiyat</td>
			 <td>Reçeteli</td>
			 <td>Reçetesiz</td>
			 <td>Son Kullanma Tarihi</td>
			 <td>Stok</td>
			 <td>Sil</td>

			 </tr>
			 
			 <?php
			 foreach($list as $person){?>
			 
			 	<tr>
			 	<td><?= $person->ID ?></td>
			 	<td><?= $person->Ad?></td>
			 	<td><?= $person->Adet?></td>
			 	<td><?= $person->Fiyat ?></td>
				<td><?= $person->Receteli ?></td>
				<td><?= $person->Recetesiz ?></td>
				<td><?= $person->Tarih ?></td>
				<td><?= $person->Stok ?></td>
			 	<td><a href="sil.php" class="btn btn-danger">Sil</a></td>
			 	</tr>
				 
			 <?php } ?>
 
			</table>  
		  </div>  
	  </div>
	  </div>
 
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crosso