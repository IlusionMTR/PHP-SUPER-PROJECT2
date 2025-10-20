<?php
session_start();
$usuario= $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';
if($usuario=== 'admin'&& $senha === 'admin') {
$_SESSION['usuario'] = $usuario;
echo"Login bem-sucedido! Seja bem-vindo! <a href='produtos.php'>Ir para produtos</a>";
} else{
echo"Usuário ou senha incorretos. <a href='index.php'>Tentar novamente</a>";
}

$_SESSION['tema'] = $_POST['tema'];
?>
