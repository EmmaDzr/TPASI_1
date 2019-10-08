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
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];

            $admin_usr = "admin";
            $admin_pwd = "21232f297a57a5a743894a0e4a801fc3"
            $database = new database_();
            $dbh = $database->connection();
            $admin = $dbh->query('SELECT login, password FROM apprenti WHERE login='.$admin_usr);
            $password = $admin->fetchColumn(1);
            if (strcmp($admin_pwd, $password) == 0)
            {
                header('location: ../front/page_formateur.php');
            }
            else
            {
                header('location: ../front/page_apprenti.php');
            }
            $database->disconnection($dbh);
        }
        ?>
    </form>
</div>
</body>
</html>
