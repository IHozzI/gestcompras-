<?php
//@session_start();
ini_set("error_reporting", E_ALL);

require __DIR__ . '/../config.php';
require __DIR__ . '/../autoload.php';
//require __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\db\Database;
use classes\db\TableBD;


//Create an object 
$table= new TableBD();

//Set the path for the html template
$table->setTemplate(_CAMINHO_MANUTENCAO . "TableBD.html");

//Set title of the list
$table->setTitle("Lista de Artigos da Fatura");

//select the table in the datebase
//SELECT `CodigodaListadeArtigos`, `Preco`, `Quantidade`, `TaxadeIva`, `Numero`, `CodigoArtigo`,'CodFatura' FROM `ListaArtigosFac` WHERE 1
$table->prepareTable("ListaArtigosFac");

//list of fields for list, new, edit and import records
$table->setFieldsAtive("CodigodaListadeArtigos, Preco, Quantidade, TaxadeIva, Numero, CodigoArtigo",'list');
$table->setFieldsAtive("Preco, Quantidade, TaxadeIva, Numero, CodigoArtigo, CodFatura", 'new');
$table->setFieldsAtive("Preco, Quantidade, TaxadeIva, Numero, CodigoArtigo, CodFatura", 'edit');
$table->setFieldsAtive("Preco, Quantidade, TaxadeIva, Numero, CodigoArtigo, CodFatura", 'csv');

//define field name passw as a password, hidding the file 
//$table->setFieldPass("passw",0, "md5");

//define lists of values to supplay to a field
$table->setFieldList("CodigoArtigo",1," SELECT `CodigoArtigo`, concat(Familias.Nome, ' - ', Artigos.`Nome`) FROM `Artigos` inner join Familias on Artigos.CodigoFamilia=Familias.CodigoFamilia");
$table->setFieldList("CodFatura",1," SELECT `Numero`, concat(`Data`, ' - ',  `NIF`) FROM `Fatura` order data");
$table->setFieldList("acTaxadeIvative",2,"23=>23,13=>13,6=>6");

//the fiekd to be present as an image
//$table->setImageField("photo","../fotos/thumbs/",30);

//Link each record on the listo to external page passing the key value
//$table->setLinkPage("/public/perfil.php");

//Labels for fields
//$table->setLabel('NumerodeTelefone',"Telefone");
//$table->setLabel('ValorTotal',"Valor Total");
//$table->setLabel('passw',"Password");

//defines a criterion for the viewing action, where criterion is an sql (where) criterion that equals fields with values
//$table->setCriterio("type='Admin'");

//Do what is necessary to maintain the table in an html page. Lists the data and allows you to insert new ones, edit and delete records. Use a 'do' parameter to make decisions
$table->showHTML();


?>
