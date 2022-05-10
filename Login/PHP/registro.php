<?php
// Inclui o arquivo de configuração
include('config.php');

$erro = '';
$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE email = ?');
$pdo_verifica->execute( array( $_POST['email'] ) );

// Captura os dados da linha
$user = $pdo_verifica->fetch();
if(empty($user)){
    if($erro == ''){
        $pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (email, senha, user, discord) VALUES (?, ?, ?, ?)');
        $pdo_insere->execute( array( $_POST['email'],  crypt( $_POST['senha'] ), $_POST['usuario'],$_POST['discord']) );
        header('location: ../index.php');
    }
}else{
    $erro = 'Dados já existem no banco de dados';
    $_SESSION['login_erro'] = $erro;
    header('location: ../registrar.php');
}

// if($user == $_POST['usuario']){
//     $error = 'usuario já esta registrado';
// }

?>