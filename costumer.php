<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php include('navbar.php')?>
    
<h1 align="center">Ny medlem</h1>
<form action="newuser.php" method="post" align="center">
<label for="customer_firstname">Namn:</label>
<input type="text" name="customer_firstname" id="customer_firstname" placeholder="Namn"><br>

<label for="customer_surname" id="customer_surname">Efternamn:</label>
<input type="text" name="customer_surname" id="customer_surname" placeholder="Efternamn"><br>

<label for="customer_email" id="customer_email">Email:</label>
<input type="email" name="customer_email" id="customer_email" placeholder="Email" required><br>

<label for="customer_password" id="customer_password" >Lösenord:</label>
<input type="password" name="customer_password" id="customer_password" placeholder="Lösenord" required><br>

<label for="customer_address" id="customer_address">Adress:</label>
<input type="text" name="customer_address" id="customer_address" placeholder="Adress"><br>

<label for="customer_zip" id="customer_zip">Postkod:</label>
<input type="text" name="customer_zip" id="customer_zip" placeholder="Postkod"><br>

<label for="customer_city" id="customer_city">Stad:</label>
<input type="text" name="customer_city" id="customer_city" placeholder="Stad"><br>

<input type="submit" name="add" style="background-color: green;">
    
</body>
</html>
