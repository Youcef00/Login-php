<?php
  /*
    Utilise le contenu de $_SESSION (en particulier $_SESSION['ident'])
  */
  if ( ! isset($_SESSION['ident'])){  // si la page était protégée, on ne devrait même pas faire ce test
      require('views/pageErreur.php');
      exit();
  }
  $personne = $_SESSION['ident'];
  $avatarURL = "images/avatar.png";
  //$avatarURL = "getAvatar.php?login={$personne->login}";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta charset="UTF-8"/>
    <title>Page à accès contrôlé</title>
    <link rel="stylesheet" type="text/css" href="style_authent.css" />
  </head>
<body>
<header>
<h1>

<?php

echo "<img class=\"avatar\" src=\"$avatarURL\" />";
echo "{$personne->prenom} {$personne->nom}";

?>
</h1>
</header>
<p>Bienvenue!</p>
<article >

<div class="hover13 column">
  <div>
    <figure><a href="https://dayspedia.com/time/online/?lang=fr"><img src="images/horloge.jpg" alt="horloge" /></a></figure>
    <span>Horloge Live</span>
  </div>
  <div>
    <figure><a href="https://www.fnac.com/livre.asp"><img src="images/livres.jpeg" alt="livres" /></a></figure>
    <span>Livres à Fnac</span>
  </div>
  <div>
    <figure><a href="https://starwars.fandom.com/wiki/Padawan"><img src="images/padawan.jpg" alt="padawan" /></a></figure>
    <span>Star Wars Padawan</span>
  </div>
</article>


<footer>
  <a href="logout.php">
  <button  class="ghost">Déconnexion</button></a>

<!--  <a href="formUpload.php"><button  class="ghost">Changer d'avatar</button></a>  -->
</footer>
</body>
<script src="scripts/accueil.js">

</script>
</html>
