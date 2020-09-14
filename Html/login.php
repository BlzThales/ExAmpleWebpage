<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
	<!-- Imports -->
		<link rel="stylesheet" type="text/css" href="../Css/LoginMenu.css">
		
		<?php 
			include_once("../Php/User.php" );
			
			//echo ('<script type="text/javascript">alert("test")</script>');
			if($_POST["logInButton"]){
				$username = $_POST["loginUserField"];
				$password = $_POST["loginPasswordField"];
				//echo('<script type="text/javascript">alert("'.$username.$password.'");</script>');
				$login = NEW User();
				$login->logInUser( $username, $password);
			}
		?>
</head>

<body style="background-color :black">

	<div class="LoginMenu"> 
	<form name="loginForm" method="post" action="" >
	
		<div> 
			<img id="logoImage" src="../Images/logoDefault.png" alt="Company Logo"> 
			<br/><br/>
		</div>
		
		<div> <!-- Login form row 1 --> 
			Login : 
			<input type="text" name="loginUserField">		
		</div>
		
		<div> <!-- Login form row 2 -->
			Senha : 
			<input type="password" name="loginPasswordField" >
		</div>
		
		<div> <!-- Login form row 3 -->
			<input type="submit" name="logInButton" value="Entrar" id="LoginButton">			
		</div>
		
		<div> <!-- Login form row 4 -->
			<input type="submit" name="registerButton" value="Registrar-se" id="LoginButton">		
		</div>
		
	</form>
	</div>

</body>

</html>