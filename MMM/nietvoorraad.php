<!DOCTYPE HTML>
<html>
	<HEAD>
	<title> Order niet op voorraad</title>
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
		U ontvangt dit bericht omdat u bij ons een order heeft geplaatst voor een <?php echo $_POST["toestel"]; ?>.<br>
		Jammer genoeg hebben wij dit toestel niet op voorraad. Hierdoor is de verwachte levertijd van dit artikel <br>
		verschoven naar <?php echo $_POST["levertijd"]; ?>.<br>
		<br><br>
		Vanwege deze ongeplande vertraging in uw order wil ik u de volgende 3 keuzes aanbieden:<br>
		1. Order omzetten in een artikel welke wel bij ons op voorraad is.<br>
		2. Levering afwachten (u hoeft dan niets te doen en wij voegen een extra accessoire toe voor het ongemak)<br>
		3. Order annuleren. (wij storten dan het volledige aanbetaalde bedrag terug bij u op de rekening)<br>
		Onze excuses voor het ongemak en graag vernemen wij uw reactie.<br>
		<br><br>
		Indien u vragen heeft over deze mail dan kunt u altijd contact met ons opnemen via info@dual-sim.nl<br>
		U kunt ook van maandag tot en met vrijdag van 09.30 tot 17.00 uur bellen naar onze klantenservice op nummer 036-5240891.<br>
		Zorg er alstublieft voor dat u uw bestelnummer bij de hand heeft zodat we u zo goed en snel mogelijk van dienst kunnen zijn. <br>
		<br>
		Wij wensen u nog een prettige dag toe! <br>
		<br>
		<br>
		<?php echo $_POST["afzender"]; ?>, Team Dual Sim
	<br><br>
	<br><br>
</div>
</body>
</html>