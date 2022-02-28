<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Kalkulator BMI</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;900&family=League+Gothic&display=swap" rel="stylesheet">
</head>

<body>
.
<div class="panel">
<?php 
 	echo "<b>Witaj ".$_SESSION['user']						
	 .'! [ <a href="logout.php">Wyloguj się!</a> ]</b>' ;
	
	echo "<p><b>E-mail: ".$_SESSION['email'];

?>
</div>
<script src="index.js">
</script>

<div class="container">
	<div class="position-relative">
		<img src="pozdro.jpg">

		</div>
	</div>
    <h1>BMI Calculator</h1>

	<div class="input">
	
	
	<input type="text" id="height" placeholder="Podaj swój wzrost">
   
	<div id="waga">
	
  
  <input type="text" id="weight" placeholder="Podaj swoją wage">

  
	</div>

	<div id="oblicz">
	<button id="btn">Oblicz</button>
	</div>
  
    <div id="result"></div>
</div>
 <a href src="index2.html">pondro</a>

</body>
</html>