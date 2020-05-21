<div class="total">
    <?php
        include_once('conect.php');
        
        $soma = 'SELECT SUM(val_eve) FROM reg_fin';
        $result = $pdo->prepare($soma);
        $result->execute();
        $total = $result->fetch();
        
        if($total[0]){

            echo '<strong>Total:</strong> <font style="float:right;">R$ '.number_format($total[0], 2, ',' , '.').'</font>';
        
        }else{
            echo 'Sem registros no momento.';
        }
    ?>
</div>