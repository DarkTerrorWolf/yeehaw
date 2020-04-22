<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YeeHaw!</title>
</head>
<body>
<p>"Welcome please enter a number"</p>
<?php
/*$total = 100;
for($i=1;$i<=100;$i++){
    if($i%3==0 and $i%5==0){
        echo "Hee Haw! <br>";
    }
    else if($i%3==0){
        echo"Hee!<br>";
    }
    else if ($i%5==0){
        echo"Haw!<br>";
    }
    else{
        echo"$i <br>";
    }
}*/



$total = $_POST["input"];
yeeHaw(1,$total);
function yeeHaw($i,$total){
    if($total>$i){
        if($i%3==0 and $i%5==0){
            echo "Hee Haw! <br>";
            yeeHaw($i+1,$total);
        }
        else if($i%3==0){
            echo"Hee!<br>";
            yeeHaw($i+1,$total);
        }
        else if ($i%5==0){
            echo"Haw!<br>";
            yeeHaw($i+1,$total);
        }
        else{
            echo"$i <br>";
            yeeHaw($i+1,$total);
        }
    }
}
?>
<div>

<form method="post">
    <label class="form-check-label">Number of times:</label>
    <input class="form-check-input"  name="input" id="input">

    <button type="submit" class="btn btn-primary">Start</button>
</form>
</div>
<p>
</p>
</body>
</html>

