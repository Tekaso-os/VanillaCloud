<?php
   ob_start();
   session_start();
?>
<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
   session_start();
?>
<html>
    <head>
        <header>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
            <link rel="stylesheet" type="text/css" href="css/site.css">
            <link rel="stylesheet" type="text/css" href="css/reset.css">
            <link rel="stylesheet" type="text/css" href="css/Padrao.css">
            <link rel="stylesheet" type="text/css" href="css/color.css">
        </header>
    </head>
    <body>
        <div id="disclogin">
            <h1 id="teste" class="azul center login-text">REGISTRAR</h1>
            <p id="loginerro" class="center azul"></p>
            <form id="formgostoso" action="PHP/registro.php" method="post">
            <div class="mb-3">
                <input name="usuario"type="text" class="form-control login azul preto borda-preta loginwidth" placeholder="Nome de usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input name="discord" type="text" class="form-control login azul preto borda-preta loginwidth" placeholder="user#1234" id="exampleInputEmail1" aria-describedby="">
            </div>
            <div class="mb-3">
                <input name="email"type="email" class="form-control login azul preto borda-preta loginwidth" placeholder="Endereço De Email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input name="senha" type="password" class="form-control azul preto borda-preta loginwidth" placeholder="Senha" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check lembreme">
                <input type="checkbox" class="form-check-input  preto borda-preta" id="exampleCheck1">
                <label class="form-check-label  azul" for="exampleCheck1">Lembre-me</label>
                
            </div>
            <p class="azul center">Não tem uma conta? <a href="/login/index.php">Registre-se.</a></p>
            <script>
                
                
                document.getElementById("loginerro").innerHTML = "<?php echo $_SESSION['login_erro'];?>";
                <?php $_SESSION['login_erro'] = ''; ?>
            </script>

            <button type="submit" id="login" class="btn btn-primary">Login</button>
            </form>
        </div>
        
    </body>
</html>