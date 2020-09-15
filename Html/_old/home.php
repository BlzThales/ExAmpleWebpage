<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
	<!-- Imports -->
		<link rel="stylesheet" type="text/css" href="../Css/HomeDefault.css">
		
	<?php 
		if($_POST['logInButton'] ){ 
			session_unset();     
			session_destroy();  
		}  
		if($_POST['registerButton'] ){ 
			echo('<script type="text/javascript">alert("Usuário Cadastrado!");</script>');
			session_unset();     
			session_destroy();  
		}
		if(!($_SESSION)){  
			header("Location:login.php");  
		} 
	?>
</head>

<body style="background-color :black">

				
	
	<div class="HeaderDefault">
		<img id="logoImage" src="../Images/logoDefault.png" id="backgroundImage" alt="Company Logo">
		<a href="#Home"    class="HeaderDefault"> Home </a>
		<a href="#AboutUs" class="HeaderDefault"> Quem Somos </a>
		<a href="#Contact" class="HeaderDefault"> Contato </a>
			
	</div>
	
	<div class="BodyDefault">
	
		<br/><br/>
		<h1> Lorem Ipsum </h1>
		
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis lorem ornare quam rhoncus fringilla.
			Aliquam ultricies hendrerit ligula, ut iaculis eros gravida vitae. Vestibulum suscipit massa mauris, vel lacinia 
			tellus tincidunt nec. Donec dictum, est vel porttitor sagittis, magna purus tincidunt libero, in convallis enim erat nec nisl.
			Nulla sit amet ante placerat, hendrerit sem eu, blandit enim. Etiam hendrerit blandit iaculis. Mauris dapibus quis nisi a vehicula.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat, ex vitae hendrerit hendrerit, ex metus consequat ante, 
			eget mattis erat dolor id metus. Aenean lacinia nulla sed risus aliquam vehicula. Integer dapibus orci in dapibus porta. Sed erat est,
			imperdiet eget orci eget, ullamcorper ultrices erat. Sed placerat turpis eu mi cursus lobortis. Nulla facilisi. Integer auctor velit risus, 
			non vestibulum erat pharetra in. 
		</p>
	
	</div>


</body>

</html>