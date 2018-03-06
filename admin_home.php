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
        <nav class="site-header py-1">
            <div class="container d-flex flex-column flex-md-row-reverse justify-content-start text-uppercase">
                <?php
                session_start();
                session_destroy();
                echo "<a href=home.php>Logout</a>";
                ?>
            </div>
        </nav>
        <br>
        <div class="container marketing">
            <div class="featurette">
                <div class="col-md10">
                    <h2 class="text-center text-uppercase">Administrator System</h2>
                    <hr>
                    <br>
                    <h4 class="lead text-center"><a href="User_Mainfunction.php">User Management</a></h4>
                    <h4 class="lead text-center"><a href="product_Mainfunction.php">Product Management</a></h4>
                </div>
            </div>
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