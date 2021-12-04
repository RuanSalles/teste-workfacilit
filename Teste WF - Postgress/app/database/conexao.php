<?php
$username = 'postgres';
$password = 'ruansalles';

try {
    $conn = new PDO('pgsql:host=localhost;dbname=projeto', $username, $password);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}

$conn = $conn->prepare("SELECT * FROM mensagens");
$conn->execute(); 

$result = $conn->fetchAll(PDO::FETCH_ASSOC);
