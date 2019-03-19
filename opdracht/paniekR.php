<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 22 - Forms -->

<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$antwoorden = array($_POST["vraag1"], $_POST["vraag2"], $_POST["vraag3"], $_POST["vraag4"], $_POST["vraag5"], $_POST["vraag6"], $_POST["vraag7"], $_POST["vraag8"]);
	 ?>


	<div id='container'>
		<?php require "menu.php"; ?>
		<div class='content'>
			<h2 class="title">Er heerst paniek...</h2>
			<span class='story'>
				Er heerst paniek in het Koningkrijk <?php echo $antwoorden[3-1]; ?> Koning <?php echo $antwoorden[2-1]; ?> is ten eide raad en als Koning <?php echo $antwoorden[2-1]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $antwoorden[6-1] ?>. <br> <br> "<?php echo $antwoorden[6-1] ?> het is een ramp! Het is een schande!" <br> <br> "Sire, Majesteit, Uwe Luidrichtigheid, wat is er aan de hand?" <br> <br> "Mijn <?php echo $antwoorden[1-1] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $antwoorden[5-1] ?> voor hem gekocht" <br> <br> "Majesteit, uw <?php echo $antwoorden[1-1] ?> komt vast vanzelf weer terug." <br> <br> "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $antwoorden[8-1] ?> leeren?" <br> <br> "Maar Sire, daar kunt u toch uw <?php echo $antwoorden[7-1] ?> voor gebruiken?" <br> <br> "<?php echo $antwoorden[6-1] ?> je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." <br> <br> "Mij <?php echo $antwoorden[4-1] ?>, Sire."
			</span>
		</div>
		<?php require "footer.php"; ?>
	</div>
</body>
</html>