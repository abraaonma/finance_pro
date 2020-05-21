<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <form method="POST" class="login-box">
        <img src="img/paper.png" alt="">
        <div class="logo">FINANCE</div>
        <input type="text" placeholder="Digite seu email" name="matricula" ><br>
        <input type="password" placeholder="Digite sua senha" name="senha" ><br>
        <input type="submit" name="login" value="LOGIN" class="button-primary"> <br> 
        <!--<a href="cadastro.php">Cadastro</a><br>-->

            <?php
                if(isset($_POST['login'])){
                    include_once('logando.php');
                }
            ?>
        
        <br><label class="copyright">@copyright 2020</label>
    </form>
</body>
</html>