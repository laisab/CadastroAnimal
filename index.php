<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
<div class="div-form">
	
	<h1>Formulário de Login</h1>
			<h2 class="text-center">Área restrita</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form action="php/valida.php" method="post">
        <fieldset>
            <p><label for="usuario">Usuário:</label></p>
            <input type="text"  name="usuario" placeholder="Digite o seu usuário" size="30" />
            <p><label for="senha">Senha:</label></p>
            <input type="password" name="senha" placeholder="Digite a sua senha" size="30"/>
            <input type="submit" name="acessar" value="Acessar" />
            <h4>Você ainda não possui uma conta?</h4>
			<a href="php/cadastrar.php">Clique aqui e crie uma grátis</a>
            
        </fieldset>
    </form>
			</div>
		</div>			
		
	</body>
</html>