<?php
require "ligacao.php";

$nome=$_GET["nome"]; $email=$_GET["email"]; $nivel=$_GET["nivel"];
$sql = "INSERT INTO Utilizadores (nome, email, nivel)
VALUES (?, ?, ?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ssi", $nome, $email, $nivel);
if ($stmt->execute() === TRUE) {
  $last_id = $conn->insert_id;
  echo "O novo registo foi criado com o id: $last_id";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>