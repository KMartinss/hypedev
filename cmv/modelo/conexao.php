<?php
class Conexao
{
    function conectar()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=hypebd', "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão com banco realizada com sucesso!";
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}