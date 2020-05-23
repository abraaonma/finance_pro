<?php
    include_once('conect.php');
        if(isset($_POST['login']))
        {
        $matricula = $_POST['matricula'];
        $senha = $_POST['senha'];

        if(empty($matricula) || empty($senha))
        {
            echo '<label class="msg-error">Preencha os campos acima.</label>';
        }
        else
        {
            $query = 'SELECT * FROM usuario WHERE matricula_usuario = :matricula AND senha_usuario = :senha';
            $cons = $pdo->prepare($query);
            $cons->bindValue(":matricula", $matricula);
            $cons->bindValue(":senha", $senha);
            $cons->execute();

            if($cons->rowCount() > 0)
            {
                $result = $cons->fetch();
                session_start();
                $_SESSION['nome_usuario'] = $result['nome_usuario'];
                //$endereco = 'index.php';
                header("Location: login.php");
            }
            else
            {
                echo '<label class="msg-error">Matrícula ou senha inválidas!</label>';
            }
        }
    }
?>
