<?php
	$title = "Create Account";
	require_once "./template/header.php";
    require "./functions/database_functions.php";
    $conn = db_connect();

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
   
        $pass=$_POST['pass'];
        
        $sql = "INSERT INTO `admin`(`name`, `pass`) VALUES ('$name','$pass')";

        $result = mysqli_query($conn, $sql);
		if($result){
			echo "<alert> Your Account was created successfully! </alert>";
		
		} else {
			echo "<alert> Your Account was not created please try again </alert>";
            mysqli_error($conn);
		}
        
        mysqli_close($conn);
    }
?>

<form class="form-horizontal" method="post">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Username</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
			<input type="submit" name="submit" class="btn btn-primary">
		</div>
</form>