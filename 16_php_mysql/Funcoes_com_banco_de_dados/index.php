<?php

    function connectionDAO($host, $user, $pass, $db) {
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            // Define o modo de erro do PDO para exceção
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão realizada com sucesso!<br>";
            return $conn;
        } catch (PDOException $e) {
            echo "Erro na conexão!<br>";
            echo "Erro: " . $e->getMessage();
            return null;
        }
    }

    function createDatabaseDAO($conn, $dbName){
        $stmt = $conn->prepare("CREATE DATABASE $dbName");
        $stmt->execute();
        echo("Database $dbname criado com sucesso!");
    }

    function deleteDBDAO($conn, $dbname){
        $stmt = $conn->prepare("DROP DATABASE $dbname");
        $stmt->execute();
        echo("Database $dbname excluído com sucesso!");
    }

    $connection = connectionDAO("localhost", "Bruno Stoelbenn", "brunogremist@02", "curso_php");
    CreateDatabaseDAO($connection, "Agenda");

    

