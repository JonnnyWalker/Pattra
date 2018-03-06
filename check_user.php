<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/carousel.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container marketing">
            <?php
                $username = $_POST['username'];
                $password = $_POST['password'];

                $link = mysqli_connect("localhost", "root");
                mysqli_set_charset($link, 'utf8');
                $sql = "use pattradb";
                $result = mysqli_query($link, $sql);
                $encrypted_mypassword=sha1($password);

                $sql = "select count(*) from usertb where username='$username' and " . "password='$encrypted_mypassword' ";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_row($result);

                if (($username == "admin") && ($password == "1234"))
                {
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;
                    header ("Location: admin_home.php");
                    exit();
                }
                elseif ($row[0] = 1)
                {
                    header("Location: user_home.php");
                    exit();
                }
                else
                {
                echo "<h4>Username or Password Incorrect</h4><br>";
                echo "<h4><a href=login_form.html>Back</a></h4><br>";
                }
                ?>
        </div>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/holder.min.js" type="text/javascript"></script>
        <script src="js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
        <script src="js/jquery-slim.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/tether.min.js" type="text/javascript"></script>
    </body>
</html>