<!DOCTYPE html>
<html>

<head>
    <title>De Zoete Inval</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>De Zoete Inval</h1>
    </header>

    <section id="hreflijst">
        <a href="contact.php" class="hover-link">Contact</a>
        <a href="klantenkaartaanvraag.php" class="hover-link">Klantenkaart aanvragen</a>
        <a href="index.html" class="hover-link">Home</a>

    </section>
    
	<section id="sparen">
	<h2>Waar kun je voor sparen?</h2>
	<p>750 punten - muffin naar keuze.</p>
	<p>1000 punten -Cake special.</p>
	<p>1200 punten - Roomboter cake.</p>
	<p>3000 punten - Appeltaart.</p>
	<p>3000 punten - € 8,50 korting op een taart naar keuze.</p>
	<p>3000 punten - slagroomtaart voor 6-8 personen.</p>
	<p></p>
	<p>Bij elke €0,25 spaar je 1 punt.</p>
</section>

    <main>
		<section>
		<div class="klantenkaartaanvraag">
			<h1>Vraag een klantenkaart aan</h1>
			<p>Telefoonnummer: +31 (6) 0458-515365</p>
			<p>Of stuur ons een bericht: </p>
			<form action="backend/contactController.php" method="post">

				<!-- Vertel de controller wat we gaan doen -->
				<input type="hidden" name="action" value="send">
				
				<div class="form-group">
					<label for="senderName">Naam</label>
					<input type="text" name="senderName" id="senderName">
				</div>
				<div class="form-group">
					<label for="senderEmail">E-mailadres</label>
					<input type="text" name="senderEmail" id="senderEmail">
				</div>
				<div class="form-group">
					<label for="message">Bericht</label>
					<textarea name="message" cols="30" rows="10" id="message"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Verzend formulier">
				</div>

			</form>

		</div>
</section>
	</main>

</body>

    <footer>
        <div class="footer-content">
          <p>&copy; Kerkstraat 12 in Landgraaf, Nederland</p>
          <p>Email: <a href="mailto:DeZoeteInval@hotmail.com">DeZoeteInval@hotmail.com</a></p>
          <p>Telefoonnummer: +31 (6) 0458-515365</p>
        </div>
      </footer>
      


</html>
