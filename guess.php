<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess a number</title>
</head>
<body>
<?php

$x   = rand(1, 10);
$num = '';

if (isset($_POST['submit'])) {
    $num = $_POST['num'];

        if ($num < $x) 
        {
            echo " The number is lower! <br />";
        } elseif ($num > $x) 
            {
            echo " The number is higher! <br />";
        } elseif ($num == $x) 
            {
            echo "You guessed the number! <br />";
        }
        }





?>
<p>
<form action="" method="post">
<input type="text" name="num">
<button type="submit" name="submit">Guess</button>
</form>
</p>
</body>
</html>