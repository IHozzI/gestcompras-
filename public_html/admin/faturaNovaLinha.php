<?php
require "../ligacao.php";

$CodigoArtigo= filter_input(INPUT_POST, 'CodigoArtigo', FILTER_SANITIZE_STRING);
$Quantidade= filter_input(INPUT_POST, 'Quantidade', FILTER_SANITIZE_STRING);
$Preco= filter_input(INPUT_POST, 'Preco', FILTER_SANITIZE_STRING);
$TaxadeIva= filter_input(INPUT_POST, 'TaxadeIva', FILTER_SANITIZE_STRING);
$CodFatura= filter_input(INPUT_POST, 'CodFatura', FILTER_SANITIZE_STRING); 
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