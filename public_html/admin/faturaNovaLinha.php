<?php
require "../ligacao.php";

$CodigoArtigo=$_GET["CodigoArtigo"]; $Quantidade=$_GET["Quantidade"]; 
$Preco=$_GET["Preco"]; $TaxadeIva=$_GET["TaxadeIva"]; $CodFatura=$_GET["CodFatura"];
$sql = "INSERT INTO `ListaArtigosFac`(`CodigoArtigo`, `Quantidade`, `Preco`, `TaxadeIva`, `CodFatura`) 
        VALUES (?,?,?,?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("iiddi", $CodigoArtigo, $Quantidade, $Preco, $TaxadeIva, $CodFatura);
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