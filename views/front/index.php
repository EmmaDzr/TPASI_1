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
              <form action="../back/auth.php" method="POST">
                  <h1>Connexion</h1>

                  <label><b>Nom d'utilisateur</b></label>
                  <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                  <label><b>Mot de passe</b></label>
                  <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                  <input type="submit" id='submit' value='LOGIN' >
                  <?php
                  if(isset($_GET['erreur']))
                  {
                      $err = $_GET['erreur'];
                      if($err==1 || $err==2)
                          echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                  }
                  ?>
              </form>
          </div>
      </body>
  </html>
