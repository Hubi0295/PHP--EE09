<html>
<head>
<meta charset="UTF-8"/>
<link rel="Stylesheet" href="styl2.css"/>
<title>Klub Wedkowania</title>
</head>
<body>
<div id="baner">
<h2>Wędkuj z nami!</h2>
</div>
<div id="lewy">
<img src="ryba2.jpg" alt="Szczupak"/>
</div>
<div id="prawy">
<h3>Ryby spokojnego żeru(białe)</h3></br>
<?php
	$db= mysqli_connect("localhost","root","","wedkowanie");
	$zapytanie="SELECT id, nazwa, wystepowanie from ryby WHERE styl_zycia=2;";
	$q= mysqli_query($db, $zapytanie);
	while($row=mysqli_fetch_array($q)){
		echo $row['id']." ".$row['nazwa']." Występuje w ".$row['wystepowanie'];
		echo "</br>";
	}

?>
<ol>
	<li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
	<li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
</ol>
</div>
<div id="stopka">
<p>Stronę wykonał: PESEL</p>
</div>
</body>
</html>