<?php
/*
  Si la variable globale $erreurCreation est définie, un message d'erreur est affiché
  dans un paragraphe de classe 'message'
*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="styles/log.css">

  </head>
  <body>

    <?php

     if (isset($erreurCreation) && $erreurCreation){
       echo '
<script type"text/javascript">
  r = window.alert("Le compte n\'a pas pu étre créé");
</script>
       ';
     echo
     '<script type="text/javascript">
    window.location.href = "https://log-php-test.000webhostapp.com/index.php";

</script>
';

   }

    ?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="createUser.php">
			<h1>Créer un compte</h1>

      <input type="text" name="nom" id="nom" required="required" placeholder="Nom de famille" autofocus/>
			<input type="text" name="prenom" id="prenom" required="required" placeholder="Prénom" autofocus/>
			<input type="text" name="login" id="login" required="required" placeholder="Login" autofocus/>
			<input type="password" name="password" id="password" required="required" placeholder="Mot de passe" />
			<button type="submit" name="valid" value="bouton_valid" id="toggle">S'inscrire</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="">
			<h1>Authentifiez-vous</h1>

			<input type="text" name="login" id="login" required="required" placeholder="Login" autofocus/>
      <input type="password" name="password" id="password" required="required" placeholder="Mot de passe" />
			<!--<a href="#">Forgot your password?</a>-->
			<button type="submit" name="valid" value="bouton_valid">Connexion</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bonjour</h1>
				<p>Pour rester connecter avec nous veuillez vous connecter sur votre espace personnel</p>
				<button class="ghost" id="signIn">Connexion</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Salut!</h1>
				<p>Entrez vos informations personnelles et commencez votre voyage avec nous</p>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created by Youcef MOUKEUT
		</p>
</footer>
  </body>
    <script src="scripts/log.js"></script>
</html>
