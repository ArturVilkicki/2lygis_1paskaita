<?php
if(isset($_POST['submit'])){
	// The message
	$message = "Line 1\r\nLine 2\r\nLine 3";

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70, "\r\n");

	// Send
	mail('vilkicki.artur@gmail.com', 'My Subject', $message);
}
?>
<html>
<head>
	<title>Arturo puslapis!!!</title>
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">
  		<div class="row">
    		<div class="col">
    			<div align="center">
    				<img src="asmenine.jpg" width="400" height="400">
    			</div>
    		</div>
    		<div class="row">
  			<form method="post">
  				First name:<br>
  				<input type="text" name="firstname"><br>
  				Last name:<br>
  				<input type="text" name="lastname">
  				<input type="submit" name="submit" value="submit">
			</form>
  		</div>
    
  		</div>
  		<div class="row">
    		<div class="col">
    			<h2 align="center">Trumpas aprasymas:</h1>
    				<div align="center">
    					<i class="fas fa-address-book"></i>
    				</div>
    				
    			<p class="tekstoSpalva">Esu Artur Vilkicki, man 25 metai!!!!</p>
    		</div> 
  		</div>
  		<div class="row">
    		<div class="col">
    			<h2 align="center">Naujausi darbai:</h1>
    			<div align="center">
    				<a href="http://www.delfi.lt" target="_blank" align="center" class="btn btn-primary btn-lg active">Pirmas darbas</a>
    			</div>
    			<div align="center">
    				<a href="http://www.facebook.com" target="_blank" class="btn btn-primary btn-lg active">Antras darbas</a>
    			</div>
    			<div align="center">
    				<a href="http://www.kinozal.tv" target="_blank" class="btn btn-primary btn-lg active">Trecias darbas</a>
    			</div>
    			
    		</div> 
  		</div>
  		<div class="row">
    		<div class="col">
    			<h2 align="center">Kontaktine informacija:</h1>
    			<ul>
    				<li class="tekstoSpalva">Vardas Pavarde: Artur Vilkicki</li>
    				<li class="tekstoSpalva">Kontaktinis telefonas: +370000000</li>
    				<li class="tekstoSpalva"><a href="http://www.facebook.com" targer="_blank">nuoroda i facebook</li>
    			</ul>
    		</div> 
  		</div>
	</div>
</body>
</html>