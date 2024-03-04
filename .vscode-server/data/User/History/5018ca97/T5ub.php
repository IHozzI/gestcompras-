<?php
require "ligacao.php";

$Data=$_GET["Data"]; $NIF=$_GET["NIF"]; $CodigoProcedimento=$_GET["CodigoProcedimento"];
$sql = "INSERT INTO `Fatura`(`Data`, `NIF`, `CodigoProcedimento`) VALUES (?, ?, ?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("sii", $Data, $NIF, $CodigoProcedimento);
if ($stmt->execute() === TRUE) {
  $last_id = $conn->insert_id;
  echo "O novo registo foi criado com o id: $last_id";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo $sql. "<br>";
print_r($_GET);
?>