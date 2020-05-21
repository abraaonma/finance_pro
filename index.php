<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 

</head>
<body>

<form method="post" class="form-box">
<img src="img/paper.png" alt="">
        <div class="logo">FINANCE</div>
  
  <?php
    
    session_start();
    echo '<label class="msg-reg">Olá, '. $_SESSION['nome_usuario'].'!</label>';

  ?>

  <div class="container">
    <label for="date"><b>Data do evento</b></label>
    <input type="date" name="data" />

    <label for="currency"><b>Valor do evento</b></label>
    <input type="number" step="0.01" placeholder="R$ 0.00" name="vlr" />
        
    <button type="submit" class="button-primary" name="registrar">REGISTRAR</button>
    <a href="logout.php"><button type="button" class="button-list">SAIR</button></a>

  </div>

  <div class="container">
  <!--<button type="submit" class="button-list" name="limpardados">APAGAR TODOS OS DADOS</button> --><br>
    <label class="copyright">@copyright 2020</label>
  </form>
</div>

<div class="box-right">
    
  <?php
    if(isset($_POST['limpardados'])){
      include_once('excluirdados.php');
    }
    ?>

  <?php
    if(isset($_POST['registrar'])){
        include_once('registro.php');
    }
    ?>
  <?php 
    include_once('soma.php');
    include_once('totalreg.php'); 
    ?>

</div>

</body>
</html>