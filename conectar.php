<?php

    declare(strict_types=1);

    $con = null;

    try {
        //$con = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
        $con = new PDO('sqlite:cadastro');
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    return $con;
    
?>