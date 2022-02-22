<?php
spl_autoload_register(function ($className) {
     include ("lib/{$className}.class.php");
 });

try {
  require('lib/initDataLayer.php');
  require('lib/fonctions_parms.php');

  $login = checkNotNull('login');
  $password = checkNotNull('password');
  $nom = checkNotNull('nom');
  $prenom = checkNotNull('prenom');


   $res = $data->createUser($login, $password, $nom, $prenom);
   if ($res){
     require('views/pageCreateOK.php');
     exit();
   } else {
     $erreurCreation = true;
     require('views/pageLog.php');
     exit();
   }
 } catch (ParmsException $e) {
   echo $e;
 }

?>
