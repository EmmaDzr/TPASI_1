<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="CSS/style.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title> Projet Alternant </title>
  </head>

      <body>
          <div id="container">
              <form>
                <?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'tp_1';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

    if($username !== "" && $password !== "")
        {
          $requete = "SELECT count(*) FROM apprenti where
          login = '".$username."' and password = '".$password."' ";
          $exec_requete = mysqli_query($db,$requete);
          $reponse      = mysqli_fetch_array($exec_requete);
          $count = $reponse['count(*)'];
          if($count!=0) // nom d'utilisateur et mot de passe correctes
          {
             $_SESSION['username'] = $login;
             header('Location: ../front/page_apprenti.php');
          }
          else
          {
             header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
          }
        }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ../front/index.php');
}
mysqli_close($db); // fermer la connexion
?>
              </form>
          </div>
      </body>
  </html>
