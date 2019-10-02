<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../../css/style.css" />
    <title> Projet Alternant </title>
  </head>

  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Deconnexion</a>
    <a class="navbar-brand" href="#">TP</a>
  </nav>


      <body>
          <form class="sign-in-htm" action="./api/user/login.php" method="POST">
            <div class="group">
              <label for="user" class="label">Identifiant</label>
              <input id="username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Mot de Passe</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
          </form>
          </div>
      </body>
  </html>
