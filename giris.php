<html>

 <head><link rel="stylesheet" href="style.css"></head>
 <body background="android_stock-1366x768.jpg">
<?php 

if(isset($_POST["ad"])&& (isset($_POST["sifre"]))){
	if($_POST["ad"]=="ktk" && $_POST["sifre"]=="5535"){
		include("paylasim.php");
		header('refresh:0; url=paylasim.php');
		}
		else
		echo "<hr>Kullanıcı adı veya şifre yanlış<hr>";
		}

?>
<center>

<form method="post">
<input type="text" name="ad" id="aad" placeholder="Kullanici Adi"></input><br/>

<input type="password" name="sifre" id="pass" placeholder="Sifreniz"></input><br/>
<button type="submit" id="yolla" name="gonder" value="Giris">Giris</button>

</form>

</center>
</body>
</html>