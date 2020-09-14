<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
	<!-- CSS Imports -->
		<link rel="stylesheet" type="text/css" href="../Css/LoginMenu.css">
		
	<!-- Scripts -->
		<script>
			function showRegisterMenu() {
				var target = document.getElementById("registerMenu");
					target.style.display = "block";
				target = document.getElementById("loginMenu");
					target.style.display = "hidden";			
			}
		</script>
	
		<?php 
			include_once("../Php/User.php" );
			
			$user = NEW User();
			if(!empty($_POST["login"]))
				$user->logInUser( $_POST["loginUserField"], $_POST["loginPasswordField"]);
			
			if(!empty($_POST["register"])){
				if($_POST["registerPasswordField"] == $_POST["confirmPasswordField"])				
					$user->createNewUser($_POST["registerUserField"], $_POST["registerPasswordField"]);
				else
					echo('<script type="text/javascript">alert("Senhas Cadastradas são Diferentes");</script>');
			}
		?>
</head>

<body style="background-color :black">

	<div class="LoginMenu" id="loginMenu"> 
	<form name="login" method="post" action="">
	
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
			<input type="submit" name="login" value="Entrar" id="login">			
		</div>
		
		<div> <!-- Login form row 4 -->
			<a href="#register" onclick="showRegisterMenu()">Registrar nova Conta</a>
		</div>		
		
	</form>
	</div>
	
	<div class="LoginMenu" id="registerMenu" style="display: none;"> 
	<form name="register" method="post" action="">
	
		<div> 
			<img id="logoImage" src="../Images/logoDefault.png" alt="Company Logo"> 
			<br/><br/>
		</div>
		
		<div> <!-- Login form row 1 --> 
			Novo Login : 
			<input type="text" name="registerUserField">		
		</div>
		
		<div> <!-- Login form row 2 -->
			Nova Senha : 
			<input type="password" name="registerPasswordField" >
		</div>
		
		<div> <!-- Login form row 3 -->
			Confirme sua Senha : 
			<input type="password" name="confirmPasswordField" >
		</div>
		
		<div> <!-- Login form row 4 -->
			<input type="submit" name="register" value="Regristar" id="register">			
		</div>	
		
	</form>
	</div>
	
	

</body>

</html>