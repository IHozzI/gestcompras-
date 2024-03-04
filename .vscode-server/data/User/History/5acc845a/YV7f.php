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
        class GraphicGoogle{
    
    public $gData;
    public $options;

    public function __construct(){  
    }


    public function getDataJson($url,$key,$valueList, $col=""){
      //providing a url to a json webservice, a value for the tag ($key) and a $value for the values, the data will be available to be used in a chart

      // Takes raw data from the request
      $json = file_get_contents($url);
      //echo $url;
      //print_r($_COOKIE);
      //echo $json ;
      $json=str_replace('\n',"",$json);
      //echo $json ;
      // Converts it into a PHP object
      $gData = json_decode($json,true);
      //print_r($gData);
      if ($col!=""){
        $ls="";
        $sep="";
        foreach($gData as $element){
          $list[$element[$col]]=$element[$col];
        }
        foreach($list as $k){
            //echo "$k";
            $ls.=$sep.$k;
            $sep=",";
          }
        
        //print_r($list);
        //echo "<br>-------------------<br>";
        foreach($gData as $element){
          foreach($list as $l){
            $aux[$element[$key]][$l]=0;
          }         
        }
        foreach($gData as $element){
          $aux[$element[$key]][$key]=$element[$key];
          $aux[$element[$key]][$element[$col]]=$aux[$element[$key]][$element[$col]]+$element[$valueList];
        }
        //print_r($aux);
        $gData=$aux;
        $valueList=$ls;
        $vl=$list;
      } else{
        $vl=explode(",", $valueList);
      }
      $valueList=str_replace("'", "", $valueList);
      //echo "<br>vl=";
      //print_r($vl);
      $valueList=str_replace(",", "','", $valueList);
      //echo "<br>lista :$valueList<br><br>";
      //print_r($this->$gData);
      $this->gData="[['" . $key . "','" . $valueList . "'],";
      foreach($gData as $element){
        $values="";
        $sep="";
        foreach($vl as $serie){
          if(isset($element[$serie])){
            $values.=$sep. $element[$serie];
            $sep=",";
          }
          
        }  
        if (isset($element[$key])){
          $this->gData.="['" . str_replace("'", "",$element[$key]) . "'," . str_replace("'", "",$values) . "]";
        }
        
      }
      $this->gData=str_replace("][", "],[", $this->gData);
      $this->gData.="]";
      //echo $this->gData;
    }


    public function setOptions($options){
      //reads chart options in accordance with google charts. $option is a string with options like this example "{ title: 'My activities', is3D: true,}"
      $this->options=$options;

    }


    public function includes(){
      //is a mandatory inclusion for google graphics javascript
      return ' <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
    }
 
  public function geochart($id,$script=1){
      //draws a pie chart with the given data and as per the given options
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
          google.charts.load('current', {'packages':['geochart']});
          google.charts.setOnLoadCallback(drawRegionsMap);

          function drawRegionsMap() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;
            
            var chart = new google.visualization.GeoChart(document.getElementById('<?=$id?>'));

            chart.draw(data, options);
          }
          <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
  
  
  public function gauge($id,$script=1){
      //draws a graph with pressure gauges with the given data and according to the given options. $id is the HTML code
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
          google.charts.load('current', {'packages':['gauge']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;
            
            var chart = new google.visualization.Gauge(document.getElementById('<?=$id?>'));

            chart.draw(data, options);
            
            setInterval(function() {
              data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
              chart.draw(data, options);
            }, 13000);
            setInterval(function() {
              data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
              chart.draw(data, options);
            }, 5000);
            setInterval(function() {
              data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
              chart.draw(data, options);
            }, 26000);
          }
          <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
  
  public function comboChart($id,$script=1){
      //Draws a combo tchart with the given data and according to the given options. $id is the HTML code
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawVisualization);

          function drawVisualization() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;
            
            var chart = new google.visualization.ComboChart(document.getElementById('<?=$id?>'));

            chart.draw(data, options);
          }
          <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
  
  public function candlestickChar($id,$script=1){
      //draws a pie chart with the given data and as per the given options
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;
            
            var chart = new google.visualization.CandlestickChart(document.getElementById('<?=$id?>'));

            chart.draw(data, options);
          }
          <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
  
   public function corechart($id,$script=1){
      //draws a area chart with the given data and according to the given options. $id is the HTML code
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;
            
            var chart = new google.visualization.AreaChart(document.getElementById('<?=$id?>'));

            chart.draw(data, options);
          }
          <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
  
  public function barchart($id,$script=1){
      //draws a pie chart with the given data and as per the given options
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
        
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;
            
            var chart = new google.charts.Bar(document.getElementById('<?=$id?>'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
  
  
    public function piechart($id,$script=1){
      //draws a pie chart with the given data and as per the given options
      if ($script==1){
        ?>
        <script type="text/javascript">
        <?php
      }
      ?>
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable(<?=$this->gData?>);

            var options = <?=$this->options?>;

            var chart = new google.visualization.PieChart(document.getElementById('<?=$id?>'));

            chart.draw(data, options);
          }
          <?php
        if ($script==1){
          ?>
          </script>
          <?php
        }
    }
}

?>
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
