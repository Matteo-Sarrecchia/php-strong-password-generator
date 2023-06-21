<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>
<body class="container my-5" >
    
<form>
    <label for="password">Lunghezza Password</label>
    <input type="text" name="password" value="<?php echo $_GET['password']; ?>">
    <input type="submit" value="GENERA PASSWORD">
</form>

<?php
var_dump ($_GET);
echo "<br />";


// genera stringa random 
$randString = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 10);
echo "<br />";
echo $randString;

?>


</body>
</html>