<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encontra_doctor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Conexão falhou: " . $conn->connect_error); }

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.html");
    exit();
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
