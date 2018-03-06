<?php
$link = mysqli_connect("localhost", "root", "");
if ($link)
{
    echo "Connect successfully <br>";
    echo "Connection number = $link->thread_id";
    mysqli_close($link);
}
else
{
    die('Could not connect: ' . mysqli_error());
}
?>