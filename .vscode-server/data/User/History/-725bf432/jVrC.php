<?php
$servername = "localhost";
$username = "gestcompras";
$password = "5hZauMkA2ZhiZa7";
$db= "turma12r";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Falhou a ligação: " . $conn->connect_error);
}
//echo "Ligação bem sucedida";

?>