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
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="product_Mainfunction.php">List Product</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="product_insert.php">Add Product</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="product_delete.php">Delete Prpduct</a>
                <a class="py-2 d-none d-md-inline-block text-uppercase text-muted" href="product_update.php">Edit Product</a>
            </div>
        </nav>
        <div class="container marketing">
            <h2 class="featurette-heading text-center text-uppercase">Add Product</h2>
            <hr>
            <br><br>
        <?php
            if (!isset($_POST['send'])) {
        ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group row d-flex justify-content-center">
                    <label for="example-text-input" class="col-2 col-form-label text-uppercase">Product ID :</label>
                    <div class="col-3">
                        <input class="form-control" type="text" name="id" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="example-text-input" class="col-2 col-form-label text-uppercase">Product Code :</label>
                    <div class="col-3">
                        <input class="form-control" type="text" name="pid" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="example-text-input" class="col-2 col-form-label text-uppercase">Product Name :</label>
                    <div class="col-3">
                        <input class="form-control" type="text" name="pname" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="example-text-input" class="col-2 col-form-label text-uppercase">Product Amount :</label>
                    <div class="col-3">
                        <input class="form-control" type="text" name="pamount" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="example-text-input" class="col-2 col-form-label text-uppercase">Product Quantity :</label>
                    <div class="col-3">
                        <input class="form-control" type="text" name="pquantity" id="example-text-input">
                    </div>
                </div>
                <br><br>
                <div class="form-group row d-flex justify-content-center">
                    <button type="submit" name="send" class="btn btn-primary py-2 d-none d-md-inline-block text-uppercase">Submit</button>
                </div>
            </form>
            <hr class="featurette-divider">
            <footer>
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>Copyright &copy;2018 Pattra Enzyme Soap.</p>
            </footer>
        </div>
        <?php 
            }else {
                $id = $_POST['id'];
                $pid = $_POST['pid'];
                $pname = $_POST['pname'];
                $pamount = $_POST['pamount'];
                $pquantity = $_POST['pquantity'];
    
                $link = mysqli_connect("localhost", "root");
                mysqli_set_charset($link, 'utf8');
                $sql = "use pattradb";
                $result = mysqli_query($link, $sql);
                $sql = "Insert into producttb values('$id', '$pid', '$pname', '$pamount', '$pquantity');";
                $result = mysqli_query($link, $sql);
                if ($result)
            {
            echo "Update product information successfully<br>";
            mysqli_close($link);
            }
            else
            {
            echo "Product information cannot be update<br>";
            }
            echo "<a href=product_insert.php>Back</a><br>";
            }
        ?>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/holder.min.js" type="text/javascript"></script>
        <script src="js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
        <script src="js/jquery-slim.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/tether.min.js" type="text/javascript"></script>
    </body>
</html>>