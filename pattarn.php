




<?php
    if(isset($_POST)){
       $number = $_POST['num'];
    }
    for($k=1; $k<=$number; $k++){
        for($l=1; $l<=$k; $l++){
            echo " * ";
        }
        echo "<br>";
    }


    for($i=$number-1; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
            echo " * ";
        }
        echo "<br>";
    }

    for($a=$number; $a>=1; $a--){
        // echo $a;
        for($b=1; $b<=$a-1; $b++){
            echo "&nbsp;&nbsp;"; 
        }
        for($c=$number; $c>=$a; $c--){
            echo "*";
        }
        echo "<br>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="login_form" method = "POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="number" id="num" name="num" value="" placeholder="Number" >
        <br>
        <button type="submit" name="sub">Submit</button>
    </form>
</body>
</html>