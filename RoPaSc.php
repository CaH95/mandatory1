<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock Paper Scissors</title>
</head>
<body>
<form action="" method="post">
<input type="radio" name="RoPaSc" value="1">Rock <br>
<input type="radio" name="RoPaSc" value="2">Paper <br>
<input type="radio" name="RoPaSc" value="3">Scissors <br>

<button type="submit" name="submit">Choose</button>
</form>

            <?php
            $rand=rand(1,3);

            if(isset($_POST["RoPaSc"])){

                if($rand == $_POST["RoPaSc"]) {
                    echo "Draw!";
                }
                 elseif ($rand == 2 && $_POST["RoPaSc"] == "1") {
                    echo "You lost...";
                 }
                 elseif ($rand == 3 && $_POST["RoPaSc"] == "2") {
                    echo "You lost...";
                 }
                 elseif ($rand == 1 && $_POST["RoPaSc"] == "3"){
                     echo "You lost...";
                 }
                 else {
                     echo "You won!";
                 }
            }

            ?>
        </body>
    </html>