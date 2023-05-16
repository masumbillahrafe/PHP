




<?php
include 'confiquer.php';
// include 'index.php';
$notification = '';
if(isset($_POST['log'])){
  $login_number = $_POST['num_log'];
  $login_pass = $_POST['pas_log'];
  // print_r($_POST);

  if(empty($login_number) || empty($login_pass)){
            $notification = "The field can not be empty.";
  }
  else{
    $sql = "SELECT * FROM `fb_user` WHERE `phnnumber` = $login_number AND `password1` = $login_pass";
    $data = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($data);
    // print_r($data);
    
    if($data){
        header("Location: http://localhost/php/Demo_Facebook/home.php");
    }
    else{
      $notification =  "Something is wrong please try again!";
    }
    
  }
}





?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Untitled.jpg">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./style.css">

    

    <title>Facebook Login</title>
</head>
<body>
	<section class="login d-flex justify-content-center  align-items-center">
        <div class="container">
            <div class="row justify-content-center  align-items-center">
                <div class="col-xl-6">
                     <img class="image" src="Screenshot 2023-05-06 213817.png" alt="Girl in a jacket" > 
                </div>
                <div class="col-xl-6">
                  <div class="login_div">
                    <form class="login_form" method = "POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                      <input type="number" id="num" name="num_log" value="" placeholder="Mobile Number" > <br>
                      <input type="password" id="pas_1" name="pas_log" value="" placeholder="Password" > <br>
                     
                      <span class="noti-1">
                            <?php 
                              echo $notification;
                            ?>
                      </span> <br>
                      <button type="submit" name="log">Log in</button> <br>
                    </form>
                    <hr>
                    <a class="d-flex justify-content-center  align-items-center" href="index.php">Create New Account</a>
                  </div>
                </div>
    
            </div>
        </div>
    </section>
</body>
</html>