<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ozellikler";

$connect= new mysqli ($servername,$username,$password,$dbname);

if($connect->connect_error){
	die ("Bağlantı hatası oluştu");
}
  $ıd=$_GET["ID"];
  
  

  
   $sil =("delete from urunler where ID='$ıd'");
   
   if($connect->query($sil)){
	   header("Refresh: 1; url=liste.php");
   }else{
	   "kayıt silinemedi";
   }
?>