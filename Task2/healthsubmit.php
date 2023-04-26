<?php
session_start();

    include_once 'server.php';

    $age = $_POST['age'];
    $gender = $_POST["gender"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $allergy = $_POST["allergy"];
    $condition = $_POST["condition"];

    $sql = "UPDATE users SET 
        age = '$age',
        gender = '$gender',
        height = '$height',
        weight = '$weight',
        allergy = '$allergy',
        conditions = '$condition'
        WHERE username = '".$_SESSION["username"]."'";
    mysqli_query($db, $sql);

    header("Location: account.php");