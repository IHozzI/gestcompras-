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
            background-color: #f2f2f2;
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
                      <label for="numeroFatura">Número da Fatura:</label>
                      <input type="hidden" id="numeroFatura" name="numeroFatura" required>
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

          <!-- ADICIIONAR LINHA -->
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
                      <input type="text" class="form-control" > 
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Preço unitário</label>
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>IVA</label>
                      <select class="form-control select2" style="width: 100%;" id="CodigoArtigo" name="CodigoArtigo">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class=row>
                  <div class="col-md-9">
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-info" id="bnew" data-bs-toggle="modal" data-bs-target="#frmIU" data-do="i"><i class="fa-solid fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
          <!-- FIM ADICIIONAR LINHA -->

          <!-- LINHAS -->
            <div class="card">
              <div class="card-header">
                <h2>Linhas</h2>
              </div>
                  <!-- Aqui você pode adicionar mais campos conforme necessário -->

                <table>
                  <thead>
                    <tr>
                      <th>Artigos</th>
                      <th>Quantidade</th>
                      <th>Preço</th>
                      <th>IVA</th>
                      <th>Totalidade</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Aqui você pode adicionar as linhas da fatura com os itens comprados -->
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                  </tbody>
                </table>
              
             <!-- Alterar Dentro -->
    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
   function adicionafatura(){

    var CodigoArtigo=document.getElementById('CodigoArtigo')
      var dados = {
        CodigoArtigo: CodigoArtigo,
        Quantidade: responsePayload.picture,
        Preco: responsePayload.email
        TaxadeIva: responsePayload.email
        CodFatura: responsePayload.email
      };
      $.post('valida.php', dados, function(retorna) {
        if (retorna == 0) {
          var msg = "O/A " + responsePayload.name + " não tem acesso ao sistema!";
          document.getElementById('msg').innerHTML = msg;
        } else {
          //alert ("não deu erro não não")
          //console.log(retorna);
          window.location.href = retorna
        }
      });
    } 
</script>
</body>
</html>

