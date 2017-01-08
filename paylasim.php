<html>
<body background="android_stock-1366x768.jpg">

</body>

<style type="text/css">

img{
	border: 0px solid #000;
	width:250px;
	height:250px;
	margin:5px;
	border-radius:500px;
	box-shadow: 3px 3px 3px #333;
}
img:hover{
	opacity:0.5;
}

</style>

<hr>
</form>
<?php




	

$yol = "image/";
$ac = opendir($yol);

while ($a = readdir($ac)){
	if($a != "." && $a != ".." && $a != "Arka"){
		echo "<a href='image/$a'><img src='image/{$a}'/></a>";
	}
}
?>
<center>
</center>

</html>