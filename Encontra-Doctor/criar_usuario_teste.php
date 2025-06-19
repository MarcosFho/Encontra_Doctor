<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "encontra_doctor";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Dados do usuário de teste
$nome = "Usuário Teste";
$email = "teste@teste.com";
$senha = "123456"; // Senha em texto plano
$senha_hash = password_hash($senha, PASSWORD_DEFAULT); // Criar hash da senha
$tipo_usuario = "paciente";

// Verificar se o usuário já existe
$check_sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    echo "Usuário de teste já existe!<br>";
    echo "Email: teste@teste.com<br>";
    echo "Senha: 123456";
} else {
    // Inserir usuário de teste
    $sql = "INSERT INTO usuarios (nome, email, senha, tipo_usuario) 
            VALUES ('$nome', '$email', '$senha_hash', '$tipo_usuario')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário de teste criado com sucesso!<br>";
        echo "Email: teste@teste.com<br>";
        echo "Senha: 123456";
    } else {
        echo "Erro ao criar usuário: " . $conn->error;
    }
}

$conn->close();
?> 