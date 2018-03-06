<?php
    $link = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($link, 'utf8');
    $sql = "Create Database pattradb " .
            "Character Set utf8 " .
            "Collate utf8_unicode_ci;";
    $sql = "Create Database pattradb;";
    $result = mysqli_query($link, $sql);
    if ($result)
    {
        echo "Successfully create database1 <br>";
    }
    else
    {
        echo "Cannot create database1 <br>";
    }
    $sql = "Use pattradb;";
    $result = mysqli_query($link, $sql);
    $sql = "Create Table usertb(id Int(3), username Varchar(25), password Varchar(10), email Varchar(20), Primary Key (id));";
    $result = mysqli_query($link, $sql);
    if ($result)
    {
        echo "Successfully create table1";
    }
    else
    {
        echo "Cannot create table1";
    }
    $sql = "Use pattradb;";
    $result = mysqli_query($link, $sql);
    $sql = "Create Table producttb(id Int(3), pid Varchar(10), pname Varchar(25), pamount Varchar(10), pquantity Varchar(10), Primary Key (id));";
    $result = mysqli_query($link, $sql);
    if ($result)
    {
        echo "Successfully create table2";
    }
    else
    {
        echo "Cannot create table2";
    }
    mysqli_close($link);
?>