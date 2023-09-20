<?php
session_start();
ob_start();
include_once 'connection.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-ico">
    <title>Crud Completa Login</title>
</head>

<body>
	<div id="header">
	Seja bem vindo!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Sair</a><br/>
		<br/>
		<a href='view.php'>Veja e inclua novos produtos</a>
		<br/><br/>
	<?php	
	} else {
		echo "Você deve estar logado para visualizar esta página.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a> | <a href=''>Recuperar Senha</a>";
	}
	?>
	<div id="footer">
		Created by <a href="https://www.linkedin.com/in/aidanolima/" title="Áidano Lima">Áidano Lima</a>
	</div>
</body>
</html>
