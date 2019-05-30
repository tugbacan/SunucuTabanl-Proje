<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Kullanıcı Ekle Sayfası</title>
<link href="style.css" rel="stylesheet">
<body background="pc.jpg">
</head>
<body>
<div id="kayit">
<form method="POST" action="eklendi.php">
<h1>Kullanıcı Ekle</h1>
<table>
    <tr>
	    <td>Kullanıcı Adı:</td><td> <input type="text" id="kadi" name="kadi"/></td>
		</tr>
		<tr>
	    <td>Kullanıcı Eposta:</td><td> <input type="text" id="eposta" name="eposta"/></td>
		</tr>
		<tr>
		 <td>Şifre</td><td> <input type="password" id="sifre" name="sifre"</td>
		<tr>
		<td></td><td><a href="eklendi.php"/><input type="submit" id="button" value="Ekle"/></td>
		
		</tr>
	</table>
	</form>
	</div>
</body>
</html>
