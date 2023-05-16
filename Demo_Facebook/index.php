



<?php
	include 'confiquer.php';
	$notification = '';
	$notification_name = '';
	$notification_num = '';
	$notification_pass = '';
	$notification_pass2 = '';
	if(isset($_POST['sub'])){
		$fname = $_POST['fname'];
		// First name ascii code
		for($a=0; $a<strlen($fname); $a++){
            $fname_word = $fname[$a];
            $fname_ascii = ord($fname_word);
         }

		$lname = $_POST['lname'];
		// last name ascii code
		for($b=0; $b<strlen($lname); $b++){
            $lname_word = $lname[$b];
            $lname_ascii = ord($lname_word);
        }

		$pnum = $_POST['num'];
		// Phone number count
		$pnum_len = strlen($pnum);
		for($i=0; $i<$pnum_len; $i++){
			$count = $i;
		}
		$total_count = $count;
		
		$pass_1 = $_POST['pas_1'];
		$pass_1_len = strlen($pass_1);
		for($i=0; $i<=$pass_1_len; $i++){
			$pass_count = $i;
		}
		$pass_total_count = $pass_count;
		// echo $pass_total_count;

		$pass_2 = $_POST['pas_2'];
		$dob = $_POST['bdaymonth'];

		if(empty($fname) || empty($lname) || empty($pnum) || empty($pass_1) || empty($pass_2) || empty($dob)){
            $notification = "The field can not be empty.";
        }
		// || $fname_ascii<97 || $fname_ascii>122 || $lname_ascii<97 || $lname_ascii>122
		else{
			if($fname_ascii<65 || $fname_ascii>122 || $lname_ascii<65 || $lname_ascii>122){
                $notification_name = "Used (A-a) capital or small letter.";
            }
			else{
				if($total_count<10){
						$notification_num = "Used a valid number. ";
				}
				else{
					if ($pass_1 != $pass_2) {
						$notification_pass = "Your password do not match. Please try another.";
					}
					else{
						if($pass_total_count<8){
							$notification_pass2 = "Your password must be at least 8 characters long. Please try another.";
						}
						else{
							$sql = "INSERT INTO fb_user(firstname, lastname, phnnumber, password1, password2, dob) VALUES('$fname', '$lname', '$pnum', '$pass_1', '$pass_2', '$dob')";
							$sql_2 = mysqli_query($con, $sql);
							// echo "thanks";
							header("Location: http://localhost/php/Demo_Facebook/login.php");

						}
					}
						
				} 

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Demo Facebookt</title>
</head>
<body>
	<section>
	    <div class="main_div">
	        <h1>Sing Up</h1>
	        <p>It's quick and easy.</p>
			<span class="noti-1">
				<?php 
					echo $notification;
				?>
			</span>
	        <hr>
			<!-- $_SERVER['PHP_SELF'] -->
	        <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']?>">
				
			  	<input type="text" id="fname" name="fname" value="" placeholder="First Name" >
				<input type="text" id="lname" name="lname" value="" placeholder="Last Name" > <br>
				<span class="noti-1">
					<?php echo $notification_name; ?>
				</span>
				<input type="number" id="num" name="num" value="" placeholder="Mobile Number" > <br>
				<span class="noti-1">
					<?php echo $notification_num; ?>
				</span>
				<input type="password" id="pas_1" name="pas_1" value="" placeholder="New Password" > <br>
				<input type="password" id="pas_2" name="pas_2" value="" placeholder="Confirm Password"> <br>
				<span class="noti-1">
					<?php 
						echo $notification_pass;
						echo $notification_pass2;
					?>
				</span>
				<p>Date of birth</p>
				<input type="date" id="bdaymonth" name="bdaymonth" value="" > <br>
				<p>Gender</p>
				<input type="radio" name="gender" value="male" checked> Male
	  			<input type="radio" name="gender" value="female"> Female <br>
	  			<!-- <input type="submit" id="submit" value="Submit"> -->

	  			<div class="btn">
	  				<button type="submit" name="sub" herf="login.php">Sing Up</button>
	  			</div>
			</form>
	    </div>
    </section>
</body>
</html>