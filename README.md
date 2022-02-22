# Login-PHP

## Présentation
Ceci est site web d'authentification fait en **PHP** et **PostgreSQL** de base mais pour la mise en ligne du site j'ai dû utiliser **MySQL** y'a pas de changement majeur avec ce projet j'ai pu exploiter le sytème des sessions et le stockage des mots de passe des utilisateurs est crypté en hash code ``blowfish`` donc même dans la base le mot de passe n'est pas visible voici un exemple d'un utilisateur dont le mot de passe est ``1010``
| login | password | nom | prenom |
|--|--|--|--| 
| youcef00 | $2y$10$IWjKOnHO/ml.qqw.6IBim.K4rmPjVr.uW3F0CR2NadBUSv0ms/R0e | moukeut| youcef |

Un petit detail sympa c'est que j'ai regroupé l'inscription et l'authentification dans la méme page et j'ai gérer la transition entre ces deux la que par du **CSS** et un petit peu de **JS**

Lien vers le site web: [Clique ici.](https://login-php-2.herokuapp.com/index.php)
