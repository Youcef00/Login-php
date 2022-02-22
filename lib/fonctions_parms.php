<?php



 /**
  *  prend en compte le paramètre $name passé en mode GET
  *   qui doit représenter un entier sans signe
  *  @return : valeur retenue, convertie en int.
  *   - si le paramètre est absent ou vide, renvoie  $defaultValue
  *   - si le paramètre est incorrect, déclenche une exception ParmsException
  *
  *
 function checkUnsignedInt(string $name, ?int $defaultValue=NULL, bool $mandatory=TRUE) : ?int {
   if ( ( !isset($_GET[$name]) || $_GET[$name] === "") && $defaultValue === NULL && $mandatory){
     throw new \ParmsException();
   }
   else if ( ( !isset($_GET[$name]) || $_GET[$name] === "") && $defaultValue === NULL && !$mandatory){
     return NULL;
   }
   else if (ctype_digit($_GET[$name])) {
     return (int) $_GET[$name];
   }
   else if ( !isset($_GET[$name]) || $_GET[$name] === "") {
     return $defaultValue;
   }
   else {
     throw new \ParmsException();}

  }
*/
  function checkNotNull(string $name) : ?string {
    if ( !isset($_POST[$name]) || $_POST[$name] === "") {
      return NULL;
    }
  else{
    return $_POST[$name];
  }
  }

 ?>
