<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_POST['numero'];
    if($numero <= 10){
        echo "<h1> Tabuada do $numero</h1><br>";
        for($i = 0; $i <= 10; $i++){
            echo "<h3>$numero x $i = ".($numero*$i)."</h3>";
        }
    }
    else if($numero >= 10){
        echo "<h1> Tabuada do $numero</h1><br>";
        for($i = 0; $i <= $numero; $i++){
            echo "<h3>$numero x $i = ".($numero*$i)."</h3>";
        }
    }
    ?>
</body>
</html>