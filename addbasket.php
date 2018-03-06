<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "css/view.css">
    </head>
    <body>
        <div class="container">
            <header><img src="img/logo.png" alt="Logo" style="width:100px; high:100px;"></header>
            <nav>
            <h1>Shopping List</h1>
            </nav>
        </div>
        <?php
            if(isset($_POST['data']))
                {
                    $data=$_POST['data'];

                    echo $data;
                }
        echo "<h2><a href=user_fruit.php>Shopping More</a></h2>";
        ?>
    </body>
</html>