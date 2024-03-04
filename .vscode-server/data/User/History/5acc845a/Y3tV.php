<?php
@session_start();
if (isset($_SESSION["Processo"])){
  
}else{

  header("Location: /login.html");

}



?>
<?php require "../../ligacao.php";?>
<!DOCTYPE html>
<html lang="pt">
<?php include 'header.php';?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/imagens/logoGest.png" alt="GestComprasLogo" height="200" width="200">
  </div>

  <!-- Navbar -->
  <?php include 'menu.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'menu_esquerda.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Painel Principal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Painel Principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
      $sql = "SELECT `Nome`,SUM(`ValorTotal`) as total FROM `Procedimento` GROUP BY `Nome`;";
      //$sql = "SELECT `Quantidade`*`Preco`*(1+`TaxadeIva`) FROM `ListaArtigosFac`;";
      $result = $conn->query($sql);
      $numProcesso = $result->num_rows;
      $valorTotal = 0;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {  
          $valorTotal = $valorTotal + $row['total'];
        }
      } 
    ?>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$numProcesso;?></h3>

                <p>Número de contratos ativos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Execução dos contratos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=number_format($valorTotal,2);?>€</h3>

                <p>Valor Total dos Contratos</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>350</h3>
 
                <p>Valor Faturado</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        use classes\graphic\GraphicGoogle;

//Create the class
$gr = new GraphicGoogle();
$grb = new GraphicGoogle();
$gra = new GraphicGoogle();
$grc = new GraphicGoogle();
$grcb = new GraphicGoogle();
$grg = new GraphicGoogle();
$grp = new GraphicGoogle();

//send the options for the graphic - see google graphics for more details
$opt="{
  title: 'As minhas atividades',
  is3D: true,
}";
$gr->setOptions($opt);

$opt="{
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };";
$grb->setOptions($opt);

$opt="{
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };";
$gra->setOptions($opt);
$opt="{
      legend:'none'
    }";
$grc->setOptions($opt);

$opt="{
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {3: {type: 'line'}}
        }";
$grcb->setOptions($opt);

$opt="{
          width: 400, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        }";
$grg->setOptions($opt);

$opt="{}";
$grp->setOptions($opt);


//send the data using json web service
$gr->getDataJson("https://esmonserrate.org/public//stats/criadores","name","num");
$grb->getDataJson("https://esmonserrate.org/public//stats/criadores/2ultimos","name","Dois Anos antes,Ultimo Ano,Ano Atual");
$gra->getDataJson("https://esmonserrate.org/public//stats/artigos/meses/seccao","dataMes","num","title");
//$gra->getDataJson("https://esmonserrate.org/public/stats/artigos/meses","dataMes","num");
$grc->getDataJson("https://esmonserrate.org/public//stats/criadores/2ultimos","name","Três Anos antes,Dois Anos antes,Ultimo Ano,Ano Atual");
$grcb->getDataJson("https://esmonserrate.org/public//stats/criadores/2ultimos","name","Três Anos antes,Dois Anos antes,Ultimo Ano,Ano Atual");
$grg->getDataJson("https://esmonserrate.org/public//stats/artigos/local","pp","num");
$grp->getDataJson("https://esmonserrate.org/public//stats/mapa","Country","Popularity");
//$gr->setData($dataForGrp);

//HTML with 2 call for tha classe
?>
<html>
  <head>
    <?php echo $gr->includes(); ?>   
  </head>
  <body>
    <?php echo $grp->geochart('GeoChart'); ?> 
    <div id="GeoChart" style="width: 900px; height: 500px;"></div>
    <?php echo $grg->gauge('gauge'); ?> 
    <div id="gauge" style="width: 100%; height: 130px"></div>
    <?php echo $grcb->comboChart('ComboChart'); ?> 
    <div id="ComboChart" style="width: 900px; height: 500px;"></div>
    <?php echo $grc->candlestickChar('candlestickChar'); ?> 
    <div id="candlestickChar" style="width: 900px; height: 500px;"></div>
    <?php echo $gra->corechart('areachart'); ?> 
    <div id="areachart" style="width: 900px; height: 500px;"></div>
    <?php echo $gr->piechart('piechart'); ?> 
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <?php echo $grb->barchart('barchart'); ?> 
     <div id="barchart" style="width: 900px; height: 500px;"></div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
