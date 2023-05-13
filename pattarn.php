




<?php

    if(isset($_POST)){
       $number = $_POST['num'];
    }

    // Pattern Number 1 --
    echo "Pattern Number 1" . "<br>";

    for($a=1; $a<=$number; $a++){
        for($b=1; $b<=$number; $b++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    


    // Pattern Number 2 --
    echo "Pattern Number 2" . "<br>";

    for($a=1; $a<=$number; $a++){
        for($b=1; $b<=$a; $b++){
            echo "*";
        }
        echo "<br>";
    }
    for($c=$number-1; $c>=1; $c--){
        for($d=1; $d<=$c; $d++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";



    // Pattern Number 3 --
    echo "Pattern Number 3" . "<br>";

    for($a=$number; $a>=1; $a--){
        for($b=1; $b<=$a-1; $b++){
            echo "&nbsp;&nbsp;"; 
        }
        for($c=$number; $c>=$a; $c--){
            echo "*";
        }
        echo "<br>";
    }
    for($d=1; $d<=$number; $d++){
        for($e=1; $e<=$d; $e++){
            echo "&nbsp;&nbsp;";
        }
        for($f=$number; $f>=$e; $f--){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";



    // Pattern Number 4 --
    echo "Pattern Number 4" . "<br>";

    for($a=$number; $a>=1; $a--){
        for($b=1; $b<=$a-1; $b++){
            echo "&nbsp;&nbsp;"; 
        }
        for($c=$number; $c>=$a; $c--){
            echo "*";
        }
        for($d=$number-$a; $d>=1; $d--){
            echo "*";
        }
        echo "<br>";
    }
    for($e=1; $e<=$number; $e++){
        for($f=1; $f<=$e; $f++){
            echo "&nbsp;&nbsp;";
        }
        for($g=$number; $g>=$f; $g--){
            echo "*";
        }
        for($g=($number-$e)-1; $g>=1; $g--){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";



    // Pattern Number 5 --
    echo "Pattern Number 5" . "<br>";

    for($a=$number; $a>=1; $a--){
        for($b=0; $b<=$a-1; $b++){
            echo "*"; 
        }
        for($c=$number-1; $c>=$a; $c--){
            echo "&nbsp;&nbsp;";
        }
        for($d=$number-$a; $d>=1; $d--){
            echo "&nbsp;&nbsp;";
        }
        for($e=$a; $e>=1; $e--){
            echo "*";
        }
        echo "<br>";
    }
    for($f=1; $f<=$number-1; $f++){
        for($g=0; $g<=$f; $g++){
            echo "*";
        }
        for($h=$number-1; $h>=$g; $h--){
            echo "&nbsp;&nbsp;";
        }
        for($i=($number-$f)-1; $i>=1; $i--){
            echo "&nbsp;&nbsp;";
        }
        for($j=$number; $j<=$f+$number; $j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>". "plz enter your number.";

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
