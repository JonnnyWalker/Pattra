<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/carousel.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <img class="rounded mx-auto d-block" src="img/logo.png" alt="Responsive image">
        <br>
        <nav class="site-header py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="admin_home.php">Home</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="User_Mainfunction.php">User List</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="user_insert.php">Add User</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="user_delete.php">Delete User</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="user_update.php">Edit User</a>
            </div>
        </nav>
        <div class="container marketing">
            <h2 class="featurette-heading text-center text-uppercase">Delete User</h2>
            <hr>
            <br><br>
            <?php
                if (!isset($_POST['send'])) {
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group row d-flex justify-content-center">
                    <label for="example-text-input" class="col-2 col-form-label text-uppercase">User ID :</label>
                    <div class="col-3">
                        <input class="form-control" type="text" name="id_val" id="example-text-input">
                    </div>
                </div>
                <br><br>
                <div class="form-group row d-flex justify-content-center">
                    <button type="submit" name="send" class="btn btn-primary py-2 d-none d-md-inline-block text-uppercase">Submit</button>
                </div>
            </form>
            <?php
                }else{
                    $id_val = $_POST['id_val'];
    
                    $link = mysqli_connect("localhost", "root");
                    mysqli_set_charset($link, 'utf8');
                    $sql = "use pattradb";
                    $result = mysqli_query($link, $sql);
                    $sql = "Delete From usertb where id = '$id_val' ";
                    $result = mysqli_query($link, $sql);
                    if ($result)
                {
                    echo "<br><div class='col-md10'><h2 class='featurette text-center text-uppercase'>User Data Delete Successfully</h2></div>";
                    mysqli_close($link);
                }
                else
                {
                    echo "<br><div class='col-md10'><h2 class='featurette text-center text-uppercase'>User Data Cannot be Delete</h2></div>";
                }
                }
            ?>
            <hr class="featurette-divider">
            <footer>
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>Copyright &copy;2018 Pattra Enzyme Soap.</p>
            </footer>
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