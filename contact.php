<!DOCTYPE html>
<html>

<head>
    <title>De Zoete Inval</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactcss.css"

</head>

<body>

    <header>
	<img src="img/logo.png" alt="logo">
    </header>

    <section id="hreflijst">
        <a href="contact.php" class="hover-link">Contact</a>
        <a href="Klantenkaartaanvraag.php" class="hover-link">Klantenkaart aanvragen</a>
        <a href="index.html" class="hover-link">Home</a>

    </section>
    
    <main>
		<div class="voorcontact">
			<h1>Neem contact op</h1>
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
	</main>

    <footer>
        <p>&copy; Kerkstraat 12 in Landgraaf, Nederland</p>
        <p>DeZoeteInval@hotmail.com</p>
        <p>+31 (6) 0458-515365</p>
    </footer>
</body>
</html>
