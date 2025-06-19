<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "encontra_doctor";
$port = 3306;

// Verifica se os campos foram preenchidos
if (!isset($_POST['email']) || !isset($_POST['senha'])) {
    header("Location: login.html?error=campos_vazios");
    exit();
}

$conn = new mysqli($servername, $username, $password, $dbname, $port);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    header("Location: login.html?error=conexao");
    exit();
}

$email = $conn->real_escape_string($_POST['email']);
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

$senha_digitada = "123456"; // senha do usuário de teste

if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();
    echo "Usuário encontrado!<br>";
    echo "Hash da senha: " . $row['senha'] . "<br>";
    if (password_verify($senha_digitada, $row['senha'])) {
        echo "Senha confere!";
        $_SESSION['usuario'] = $row['nome'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
        header("Location: painel_consultas.html");
        exit();
    } else {
        echo "Senha NÃO confere!";
        header("Location: login.html?error=senha_incorreta");
        exit();
    }
} else {
    echo "Usuário NÃO encontrado!";
    header("Location: login.html?error=usuario_nao_encontrado");
    exit();
}

$conn->close();
?>
