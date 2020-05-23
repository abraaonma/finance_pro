<div style="padding: 5px;">
    <form method="POST">
    <input type="text" name="id_dado" placeholder="Insira o ID do dado para exclusão"> 
    <input type="submit" name="excluir" value="EXCLUIR REGISTRO" class="button-list"><br>
<?php

    include_once('conect.php');

    if(isset($_POST['excluir']))
    {
               
        $id = $_POST['id_dado'];
        $del = 'DELETE FROM reg_fin WHERE id_fin = :id';
        $exc = $pdo->prepare($del);
        $exc->bindValue(":id", $id);
        $exc->execute();

        if($exc->rowCount())
        {
            header('Location: login.php');
        }
        else
        {
            echo '<label class="msg-error">Dado inexistente ou não excluído!</label>';
        }
    }
?>

</form>
<p>Registros Encontrados</p>
<?php

    
    
    $stmt = $pdo->query("SELECT * FROM reg_fin ORDER BY data_eve DESC");
    $stmt->execute();

    if($stmt->rowCount() > 0)
    {
        
        while ($row = $stmt->fetch()) 
        { 
            echo '<div class="reg"> <font style="padding-right: 25px; display: inline; width: 100px;"><strong> ID: '.$row['id_fin'].'</strong></font>' . $row['data_eve']. '<font style="float: right;"> R$ '. number_format($row['val_eve'], 2, ',', '.').'</font></div>';        
        }
    }
    
?>

</div>
