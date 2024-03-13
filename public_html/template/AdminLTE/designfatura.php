<?php require "../../ligacao.php";?>
<?php 
if(isset($_REQUEST['Numero'])){
  //ler uma fatura
  $sql = "SELECT `Numero`, `Data`, `NIF`, `CodigoProcedimento` FROM `Fatura` WHERE Numero = ?;";
  $stmt=$conn->prepare($sql);
  $stmt->bind_param("i", $_REQUEST['Numero']);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_array(MYSQLI_ASSOC);

  $dtFac=$row['Data'];
  $nif=$row['NIF'];
  $proc=$row['CodigoProcedimento'];
  $bn="hidden";
  $numero=$_REQUEST['Numero'];
  //print_r($row) ;
  //$result = $conn->query($sql);
  //if ($result->num_rows > 0) 
  //{ 
  //while($row = $result->fetch_assoc()) 
    //{

}else{
  //criar uma fatura
  $dtFac="";
  $nif="";
  $proc="";
  $bn="";
  $numero="";
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Fatura</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/template/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/template/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/template/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/template/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/AdminLTE/dist/css/adminlte.min.css">

  <style>

      
   
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #fff;
        }
       
      
     
    </style>
</head>




<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?php include 'menu.php';?>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <?php include 'menu_esquerda.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>Fatura</h2>
          <!-- CABEÇALHO DA FATURA -->
            <div class="card">
              <div class="card-header">
                <h2>Cabeçalho da Fatura</h2>
              </div>
              <div class="card-body">
                <form action="/admin/faturaNova.php" method="get">
                  <div>
                      <label for="CodFatura">Número da Fatura:</label>
                      <input type="text" id="CodFatura" name="CodFatura" value="<?=$numero;?>">
                  </div>
                  <div>
                      <label for="dataFatura">Data:</label>
                      <input type="date" id="Data" name="Data" value="<?=$dtFac?>" required>
                  </div>
                  <div class="form-group">
                    <label>NIF do Cliente</label>
                    <select class="form-control select2" style="width: 100%;" id="NIF" name="NIF" >
                    <option >Escolha um Fornecedor</option>
                    <?php
                      $sql = "SELECT `NIF`, `Nome` FROM `Fornecedores` order BY Nome";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) { 
                        while($row = $result->fetch_assoc()) {
                          if($row['NIF']==$nif){
                            $txt = "Selected";
                          }else{
                            $txt = "";
                          }
                      ?>
                      <option <?=$txt;?> value="<?=$row['NIF'];?>"><?= $row['Nome'];?> </option>

                      <?php
                        }
                      }
                      ?>
                    </select>
                  </div>       
                  <div class="form-group">
                    <label>Procedimento</label>
                    <select class="form-control select2" style="width: 100%;" id="CodigoProcedimento" name="CodigoProcedimento">
                      <option selected="selected" value="">Escolha um procedimento</option>
                    <?php
                      $sql = "SELECT `Codigoprocedimento`, `Nome` FROM `Procedimento` ORDER BY Nome";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) { 
                        while($row = $result->fetch_assoc()) {
                          if($row['Codigoprocedimento']==$proc){
                            $txt = "Selected";
                          }else{
                            $txt = "";
                          }
                      ?>  
                    <option <?=$txt;?> value="<?=$row['Codigoprocedimento'];?>"><?=$row['Nome'];?></option>
                    <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <button <?=$bn?> type="submit">Nova Fatura</button>
                </form>
              </div>
            </div>
          <!-- FIM CABEÇALHO DA FATURA -->

          <!-- ADICIONAR LINHA -->
            <div class="card">
              <div class="card-header">
                <h2>Adicionar Linha</h2>
              </div>
              <div class="card-body">
                <form action="/admin/faturaNovaLinha.php" method="get">
                  <div class="form-group">
                      <label>Artigo</label>
                      <select class="form-control select2" style="width: 100%;" id="CodigoArtigo" name="CodigoArtigo">
                            <option selected="selected" value="">Escolha um artigo</option>
                            <?php
                              $sql = "SELECT `CodigoArtigo`, `Nome`, `CodigoFamilia` FROM `Artigos` ORDER BY Nome;";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) 
                              { 
                              while($row = $result->fetch_assoc()) 
                                {
                            ?>  
                                <option value="<?=$row['CodigoArtigo'];?>"><?=$row['Nome'];?></option>
                            <?php
                                }
                              }
                            ?>
                        </select>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Quantidade</label>
                        <input id="Quantidade" type="text" class="form-control" > 
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Preço unitário</label>
                        <input id="Preco" type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>IVA</label>
                        <select class="form-control select2" style="width: 100%;" id="TaxadeIva" name="TaxadeIva">
                          <option value="1.05">5%</option>
                          <option value="1.16">16%</option>
                          <option value="1.32">32%</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class=row>
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-info" onclick="adicionarlinha()"><i class="fa-solid fa-plus">Gravar</i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <!-- FIM ADICIONAR LINHA -->

          <!-- LINHAS -->
            <div class="card">
              <div class="card-header">
                <h2>Linhas</h2>
              </div>
              <div class="card-body">
                  <!-- Aqui você pode adicionar mais campos conforme necessário -->
                <table>
                  <thead>
                    <tr>
                      <th>Artigos</th>
                      <th>Quantidade</th>
                      <th>Preço</th>
                      <th>IVA</th>
                      <th>Total</th>
                      <th>Ação</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                  $sql = "SELECT `CodigodaListadeArtigos`,   ListaArtigosFac.`CodigoArtigo`, Artigos.Nome , 
                                `Quantidade`, `Preco`, `TaxadeIva`,(TaxadeIva-1)*100 AS iva, 
                                Quantidade*Preco*TaxadeIva as totallinha, `CodFatura` FROM `ListaArtigosFac` 
                          INNER JOIN Artigos ON ListaArtigosFac.CodigoArtigo=Artigos.CodigoArtigo WHERE `CodFatura`=?;";
                  $stmt=$conn->prepare($sql);
                  $stmt->bind_param("i", $numero);
                  $stmt->execute();
                  $result = $stmt->get_result();
              
                  $row = $result->fetch_all(MYSQLI_ASSOC);
                  //print_r($row);
                  foreach($row as $linha){
                   ?>
                   <tr>
                      <td><?=$linha['Nome'];?></td>
                      <td><?=$linha['Quantidade'];?></td>
                      <td><?=$linha['Preco'];?>€</td>
                      <td><?=$linha['TaxadeIva'];?>%</td>
                      <td><?=$linha['totallinha'];?>€</td>
                      <td>Icone para apagar</td>
                    </tr>
                   <?php

                  }
                  ?>
                    <!-- Aqui você pode adicionar as linhas da fatura com os itens comprados -->

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- COL 12 -->
          </div>
          <!-- ROW -->
        </div>
        <!-- /.row -->
      </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- 
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/template/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/template/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/template/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/template/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="/template/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/template/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/template/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/template/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/template/AdminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
<script>

    function adicionarlinha(){
      //alert("erro")

        var CodigoArtigo=document.getElementById('CodigoArtigo').value
        var Quantidade=document.getElementById('Quantidade').value
        var Preco=document.getElementById('Preco').value
        var TaxadeIva=document.getElementById('TaxadeIva').value
        var CodFatura=document.getElementById('CodFatura').value
          var dados = {
            CodigoArtigo: CodigoArtigo,
            Quantidade:Quantidade,
            Preco: Preco,
            TaxadeIva: TaxadeIva,
            CodFatura: CodFatura,
          
          };
          //alert(dados.CodigoArtigo)
          //alert(dados.Quantidade)
          //alert(dados.Preco)
          //alert(dados.TaxadeIva)
          //alert(dados.CodFatura)
          $.post('/admin/faturaNovaLinha.php', dados, function(retorna) {
            if (retorna == 0) {
              //Ocorreu um erro
              alert("Ocorreu um erro")
              //document.getElementById('msg').innerHTML = msg;
            } else {
              //alert (retorna)
              //Apagar os valores  
              document.getElementById('CodigoArtigo').value=""
              document.getElementById('Quantidade').value=""
              document.getElementById('Preco').value=""
              document.getElementById('TaxadeIva').value=""x  
              document.getElementById('CodFatura').value=""
              //Atualizar as linhas
              atualizarLinha()
            }
          });
        } 

        function atualizarLinha(){
      //alert("erro")

        var CodFatura=document.getElementById('CodFatura').value
          var dados = {
            CodFatura: CodFatura,          
          };

          //alert(dados.CodFatura)
          $.post('/admin/FaturaAtualizarLinha', dados, function(retorna) {
            if (retorna == 0) {
              //Ocorreu um erro
              alert("Ocorreu um erro")
              //document.getElementById('msg').innerHTML = msg;
            } else {
              alert (retorna)
              //Atualizar as linhas

            }
          });
        } 

</script>
</body>
</html>