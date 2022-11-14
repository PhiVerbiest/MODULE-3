<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    $adress_1 = $_POST['adress_1'];
    $adress_2 = $_POST['adress_2'];
    $city = $_POST['city'];
    
    $zipcode = $_POST['zip'];

    $price = $_POST['price'];
    $card_number = $_POST['card_number'];
    $expire_date = $_POST['expire_date'];
    $card_code = $_POST['card_code'];

    $xexly = "Xexly";
    
    //Datebase Create

    // $conn = new mysqli('localhost', 'root', '', 'webshop_5_php');
    // if ($conn->connect_error){
    //     die('Connection Failed  : '.$conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("insert into formulier(voorNaam, achterNaam, passWord, gender, vehicle, comments)
    //     values(?, ?, ?, ?, ?, ?)");
    //     $stmt->bind_param("ssssss",$voorNaam, $achterNaam, $passWord, $gender, $vehicle, $comments);
    //     $stmt->execute();
    //     $stmt->close();
    //     $conn->close();
    // }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bedanktphp.css">
    <title>Informatie bestelling</title>
</head>
<body>
    <p>Beste: <span><?php echo $firstname; ?><span> <?php echo $lastname; ?></span></span></p>
        <br>
    <p>Bedankt voor uw bestelling bij <span style=><?php echo $xexly; ?></span></p>
    <p>Hieronder volgt een samenvatting van uw bestelling:</p>
        <br>
    <table style="width:60%">
        <tr>
            <th>Bestelling id: 08/11/2022</th>
            <th>Besteldatum</th>
        </tr>
        <tr>
            <th>Prijs</th>
            <th>1 Item besteld</th>
        </tr>
    </table>
        <br>
    <p>Wij zullen uw product(en) leveren op het volgende adres:</p>
        <br>
    <p>Adress 1: <span><?php echo $adress_1; ?></span></p>
    <p>Adress 2: <span><?php echo $adress_2; ?></span></p>
        <br>
    <p>Postcode: <span><?php echo $zipcode ?></span></p><p>Stad/Dorp: <span><?php echo $city; ?></span></p>
    
    
</body>
</html>

