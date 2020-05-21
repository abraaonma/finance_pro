<?php
    if(isset($_POST['registrar']))
    {
        
        if(empty($_POST['data']) || empty($_POST['vlr']))
        {

          echo '<label class="msg-error">Inclua a data do evento e valor correspondente!</label>';

        }
        else
        {
            include_once('conect.php');
        
            $data = $_POST['data'];
            $vlr = $_POST['vlr'];
               
            $query = 'INSERT INTO reg_fin (data_eve, val_eve) VALUE (:datas, :vals)';
            $reg = $pdo->prepare($query);
            $reg->bindValue(':datas', $data);
            $reg->bindValue(':vals', $vlr);
            $reg->execute();
        }
    }
?>