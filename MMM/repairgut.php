<!DOCTYPE HTML>
<html>
	<HEAD>
	<title> Reparatie gelukt</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	
	</HEAD>
<body>
	<br><br>
	<br><br>

     <CENTER>
		<h1> De Magische Mailtje Machine (Afgekort de MMM)</h1>
		<li class="home"><a href="index.html">Homepagina</a></li>
        <li class="RMA"><a href="rma.html">RMA binnen</a></li>
        <li class="reparatie"><a href="repairgut.html">Reparatie gelukt</a></li>
		<li class="repfail"><a href="repairfail.html">Reparatie mislukt</a></li>
		<li class="nietvoorraad"><a href="nietvoorraad.html">Order niet op voorraad</a></li>
		<li class="RMAinsturen"><a href="RMAinsturen.html">RMA insturen instructies</a></li>
	 </CENTER>		
		<br><br>
		<br><br>
<div class="rma">
	<br><br>
	<br><br>
		Geachte <?php echo $_POST["gender"]; ?> <?php echo $_POST["name_customer"]; ?>,
		<br>
		<br>
		Middels deze email laten we u weten dat de reparatie van het volgende toestel in goede orde is ontvangen door ons:<br>
		<br>
		- <?php echo $_POST["toestel"]; ?><br>
		<br><br>
		Wij zullen het gerepareerde toestel terug sturen naar het volgende adres:<br>
		- <?php echo $_POST["adres"]; ?>
		<br><br>
		Wij willen u verzoeken om bovenstaande te controleren en wanneer de inhoud niet overeenkomt met hetgeen u naar ons toegestuurd heeft,<br>
		dit zo snel mogelijk aan ons te laten weten.<br>
		<br>
		Indien u vragen heeft over deze mail dan kunt u altijd contact met ons opnemen via info@dual-sim.nl<br>
		U kunt ook van maandag tot en met vrijdag van 09.30 tot 17.00 uur bellen naar onze klantenservice op nummer 036-5240891.<br>
		Zorg er alstublieft voor dat u uw bestelnummer bij de hand heeft zodat we u zo goed en snel mogelijk van dienst kunnen zijn. <br>
		<br>
		Ik hoop u zo voldoende geinformeerd te hebben. Mocht u nog vragen hebben dan vernemen wij deze graag.<br>
		Wij wensen u nog een prettige dag toe! <br>
		<br>
		<br>
		<?php echo $_POST["afzender"]; ?>, Team Dual Sim
	<br><br>
	<br><br>
</div>
</body>
</html>