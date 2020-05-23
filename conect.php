<?php
    $servername = "";
    $username = "";
    $password = "";
    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=datacu83_finance", $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>
