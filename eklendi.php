<?php
$servername="localhost";
$username="root";
$password="";
$dbname="giris";

$connect= new mysqli ($servername,$username,$password,$dbname);

if($connect->connect_error){
	die ("Bağlantı hatası oluştu");
}
  $name=$_POST["kadi"];
  $email=$_POST["eposta"];
  $pass=$_POST["sifre"];
   $ekle ="insert into kullanici(kadi,eposta,sifre) values('$name','$email','$pass')";
   
   if($connect->query($ekle)){
	   header("Refresh: 1; url=liste.php");
   }else{
	   "kayıt yapıalamdı";
   }
?>