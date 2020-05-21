<?php

    include_once('conect.php');

    $query = 'DELETE FROM reg_fin';
    $exc_t = $pdo->prepare($query);
    $exc_t->execute();

    echo '<label class="msg-error">Todos os dados foram excluídos</label>';
?>