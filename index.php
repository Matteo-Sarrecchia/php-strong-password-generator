<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-strong-password-generator</title>

    <?php include "function.php"; ?>

    <style>
       body{
        border: 1px solid black;
       }

    </style>
</head>
<body class="container text-center my-5 bg-primary-subtle rounded" >

<h1>Strong Password Generator</h1>
<h2>Genera un passord sicura</h2>

<div class="container border border-primary p-3 bg-light rounded bg-primary">
    <form>
        <div class="d-flex justify-content-around mb-3">
            <label for="password">Lunghezza Password:</label>
            <input type="text" name="password" value="<?php echo $_GET['password']; ?>">
        </div>
        <input type="submit" value="GENERA PASSWORD">
    </form>
</div>



<div class="border border-primary p-3 bg-light rounded my-3">
    <?php echo randomString($valoreIntGet) ?>    
</div>



</body>
</html>