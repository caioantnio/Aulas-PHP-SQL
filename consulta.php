<?php
include "conecta.php";

echo "<br><b>Mostrando todos os registros</b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario";
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<p style= 'background-Color:lightblue';> id: " . $registro["id"] . " - Nome: " . $registro["nome"] .
            " " . $registro["senha"] . " - Email: " . $registro["email"] .
            "</p>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

echo "<br><b>Nomes que começam com 'c'</b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario WHERE nome LIKE 'c%';";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"] . " - Nome: " . $registro["nome"] .
            " " . $registro["senha"] . " - Email: " . $registro["email"] .
            "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

echo "<br><b>Ordernar registros por email</b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario order by email;";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"] . " - Nome: " . $registro["nome"] .
            " " . $registro["senha"] . " - Email: " . $registro["email"] .
            "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

echo "<br><b>Verificar se existe usuário='Caju' e senha='123' e mostrar seu email. Caso não exista, mostrar uma mensagem.</b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario where nome='Caju' and senha='123'";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "Email: " . $registro["email"] . "</p>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
