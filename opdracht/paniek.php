<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id='container'>
		<?php require "menu.php"; ?>

		<div class='content' id='one' class='one'>
			<h2 class="title">Er heerst paniek...</h2>
			<div class='vragen'>
				<p class="q">Welk dier zou je nooit als huisdier willen?</p> <br> <!-- 1 -->
				<p class="q">Wie is de belangrijkste persoon in je leven?</p> <br><!-- 2 -->
				<p class="q">In welk land wil je graag wonen?</p> <br><!-- 3 -->
				<p class="q">Wat doe je als je je verveelt?</p> <br><!-- 4 -->
				<p class="q">Met welk speelgoed speelde je als kind het meest?</p> <br><!-- 5 -->
				<p class="q">Bij welke docent spijbel je het liefst?</p> <br><!-- 6 -->
				<p class="q">Als je €100.000 had, wat zou je dan kopen?</p> <br><!-- 7 -->
				<p class="q">Wat is jou favorite bezigheid?</p> <br><!-- 8 -->
			</div>

			<div class='antwoorden'>
				<form method="post" action="<?php echo htmlspecialchars('paniekR.php');?>">
					
					<input class="a" type="text" name="vraag1" required><span class="error">* <?php //echo $errors[0];?><br>
					<input class="a" type="text" name="vraag2" required><span class="error">* <?php //echo $errors[1];?><br>
					<input class="a" type="text" name="vraag3" required><span class="error">* <?php //echo $errors[2];?><br>
					<input class="a" type="text" name="vraag4" required><span class="error">* <?php //echo $errors[3];?><br>
					<input class="a" type="text" name="vraag5" required><span class="error">* <?php //echo $errors[4];?><br>
					<input class="a" type="text" name="vraag6" required><span class="error">* <?php //echo $errors[5];?><br>
					<input class="a" type="text" name="vraag7" required><span class="error">* <?php //echo $errors[6];?><br>
					<input class="a" type="text" name="vraag8" required><span class="error">* <?php //echo $errors[7];?><br>
					<input class="a" type="submit" name="submit" value="Submit">
				</form>	
			</div>
		</div> 
		<?php require "footer.php"; ?>
	</div>
</body>
</html>