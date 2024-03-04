<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../template/AdminLTE/index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="ion ion-person-add"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="/logout.php" class="dropdown-item">
            <!-- Message Start -->
            logout
            <!-- Message End -->
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/template/AdminLTE/index.php" class="brand-link">
      <img src="/imagens/logoGest.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">GestCompras</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$_SESSION["Imagem"];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION["Nome"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/template/AdminLTE/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          
         
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Procedimentos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aquisição de Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado do Procedimento</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Faturas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/template/AdminLTE/designfatura.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Fatura</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lançar Faturas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fatura por Fornecedor</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabelas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/gerirArtigos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Artigos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirFamilias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Familias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirFornecedores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirProcedimento.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Procedimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirFatura.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faturas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirutilizadores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Utilizadores</p>
                </a>
              </li>
            </ul>
          </li>
         
        
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="tbTitle">DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead  class="titleTable">
                  <tr>
                    <th>Rendering engine</th>
                    <th>
                      <button type="button" class="btn btn-info" id="bnew" data-bs-toggle="modal" data-bs-target="#frmIU" data-do="i"><i class="fa-solid fa-plus"></i></button>
                      <button type="button" class="btn btn-info" id="bcsv" data-bs-toggle="modal" data-bs-target="#frmCSV" data-do="c"><i class="fa-solid fa-inbox"></i></button>
                    </th>
                    
                  </tr>
                  </thead>
                  <tbody  id="bodyTable">
                  <tr>
                    <td>Trident</td>
                    <td>
                      <a href='' title='ver' class="bsee"><button type="button" class="btn btn-outline-info" data-do="e"><i class="fa-solid fa-eye"></i></button></a>
                      <button type="button" class="btn btn-outline-info bedit" data-bs-toggle="modal" data-bs-target="#frmIU" data-do="e"><i class="fa-solid fa-pencil"></i></button>
                      <button type="button" class="btn btn-outline-info bdel" data-bs-toggle="modal" data-bs-target="#frmD" data-do="d"><i class="fa-solid fa-trash"></i></button>
                    </td>
                    
                  </tr>


                  
                  </tfoot>
                </table>
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

<!-- The Modal Inserir ou Actualizar-->
<div class="modal" id="frmIU">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post">
        <input type="hidden" id="do" name="do" value="ci">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title" id="frmIOTitulo">Add/Update</h1>
          <button type="button" class="close" data-bs-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3 class="tbTitle">Some text to enable scrolling..</h3>
          <div class="row">
            <div class="col-sm-12" id="frmIOH3">
              <div class="text">
                <div class="form-group">
                  <label id="textL">Text input:</label>
                  <input type="text" class="form-control required" id="txtTarefa" value="">
                </div>
              </div>
              <div class="password">
                <div class="form-group">
                  <label id="passL">Pass input:</label>
                  <input type="password" class="form-control required" id="passN" value="">
                </div>
              </div>
              <div class="select">
                <div class="form-group">
                  <label id="selectL">List:</label>
                  <select class="form-select" id="selectLst">
                      <option value="icon-atom"  >ÁtomoXXX [icon-atom]</option>
                    </select>
                </div>
              </div>
              <div class="date">
                <div class="form-group">
                  <label id="dataL">Date:</label>
                  <input type="date" class="form-control required" name="txtData" id="txtData" value="txtData">
                </div>
              </div>
              <div class="textArea">
                <div class="form-group">
                  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
                  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
                  <label id="textAreaL">Text area:</label>
                  <textarea id="textAreaN">...</textarea>

                </div>
              </div>
              <div class="check">
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                        <input type="checkbox" id="checkN" checked>checkbox sample<br>
                      </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="form-group">
            <p id="teste"></p>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" aria-hidden="true" type="submit">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal delete-->
<div class="modal fade" id="frmD">
  <div class="modal-dialog">
    <form action="" method="post">
      <input type="hidden" name="do" value="cd">
      <input type="hidden" id="deleteKey" name="id" value="">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="perguntaT">
          <p>Do you want delete the record?</p>
          <p id="delId"></p>
          <p id="delText"></p>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Yes</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- The Modal import-->
<div class="modal" id="frmCSV">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post">
        <input type="hidden" name="do" value="csv">
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title" id="frmITitulo">Import</h1>
          <button type="button" class="close" data-bs-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h3 class="tbTitle">Table Title</h3>
          <p> The fields must be imported on this order: <code id="importLst">First,Secund,Third,Last</code></p>
          <p> You may add a <code>,</code> on the end of the line</p>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="comment">Lines to be added:</label>
                <textarea class="form-control" rows="10" id="txtCSV" name="txtCSV"></textarea>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="checkbox" id="doUpdate" name="doUpdate" >
                <label for="comment">Se existe o registo actualiza-o:</label>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="form-group">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" aria-hidden="true" type="submit">Import</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- Control Sidebar -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/template/AdminLTE/index.php" class="brand-link">
      <img src="/imagens/logoGest.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">GestCompras</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$_SESSION["Imagem"];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION["Nome"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/template/AdminLTE/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          
         
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Procedimentos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aquisição de Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado do Procedimento</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Faturas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/template/AdminLTE/designfatura.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Fatura</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lançar Faturas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fatura por Fornecedor</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabelas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/gerirArtigos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Artigos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirFamilias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Familias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirFornecedores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirProcedimento.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Procedimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirFatura.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faturas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gerirutilizadores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Utilizadores</p>
                </a>
              </li>
            </ul>
          </li>
         
        
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/template/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!--script src="/template/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script id="textAreaS">
  //caixa de mensagens
  $(document).ready(function() {
    $('#textAreaN').summernote();
  });
</script>

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
</body>
</html>
