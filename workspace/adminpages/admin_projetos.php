<?php 
session_start();
require_once("connect.php");
if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}


?>





<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projetos</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/table.css">

    <link rel="stylesheet" type="text/css" href="css/modalDelete.css">


    <link href="css/logonav.css" rel="stylesheet">
    <link href="css/planta.css" rel="stylesheet">

    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





  </head>

  <body id="page-top">

     <script type="text/javascript" src="js/jquery/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/select.js"></script>
    <script src="js/edit.1.js"></script>
    <script src="js/delete.1.js"></script>
    
    
    

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" ><img src="imgs/logo.png" class="logo"></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          
              
            
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        
        
        <li class="nav-item active">
          <a class="nav-link" href="admin_tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Plantas</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="admin_projetos.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Projetos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_users.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Utilizadores</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


        

         


          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-tree"></i>
              Adicionar Projetos</div>
            <div class="card-body">
              <div class="form-group">
                  
                        <div class="text-center">
  <a  class="btn btn-primary" data-toggle="modal" data-target="#projeto">Criar Projeto</a>
</div>





<!--Insert Modal-->

<div id="projeto" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    <header class="w3-container w3-blue"> 
   
   <center><h2>Criar Projeto</h2></center>
  </header>

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        
      </div>

      
        <div class="w3-section w3-container">
          <label><b>Nome do projeto</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Introduzir nome do projeto" name="usrname" required>
          <label><b>Latitude</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Introduzir latitude" name="psw" required>
          <div class="w3-section ">
          <label><b>Longitude</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Introduzir longitude" name="psw" required>
          <div class="w3-section ">
          <label><b>Orientador</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Introduza o nome do orientador" name="psw" required>
        </div>
      </div>
</div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="options text-right">
                  <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
        
      </div>

    </div>
  </div>
</div>






                      


                          
                      
                  
                      

              </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    
            
            
        <!-- /.container-fluid -->

        

      </div>
      <!-- /.content-wrapper -->

    </div>







        





          


         













        

</div>
      <!-- /.content-wrapper -->


    </div>


    <!-- /#wrapper -->



    <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para sair ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Logout" abaixo se estiver pronto para terminar a sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>




