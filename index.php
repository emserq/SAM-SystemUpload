
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">

</head>
<body>
	<div class="wrapper fadeInDown">
	  	<div id="formContent">

	    <!-- Icon -->
	    <div class="fadeIn first">
	      <img src="images/user_icon.png" id="icon" alt="User Icon" />
	    </div>

		    <!-- Login Form -->
		    <form method="POST" action="index.php">
		      <input type="text" id="username" class="fadeIn second" name="email" placeholder="Username">
		      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
		      <input type="submit" name="login" class="fadeIn fourth" value="Login">


			    <?php
			       
			 	   include 'db_connection.php';

			       if (isset($_POST['login'])){

			        	$email = $_POST['email'];
			        	$password = $_POST['password'];
			        	

			        	$login ="SELECT*FROM login WHERE email= '$email' AND password = '$password'";

				        $result =mysqli_query($connect,$login);
				        $num = mysqli_num_rows($result);

					        if ($num == 1) {

						       $_SESSION['email'] = $email;
						       echo "<script> alert('Successfuly Logged in!'); window.location='cv.php' </script>";

					        }else{

					        echo "<script> alert('Login Failed. Please try again'); window.location='login.php' </script>";
					        }
			      	}	
			      
			    ?>

		    </form>
		</div>
	</div>
</body>
</html>