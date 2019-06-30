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

    <title>Utilizadores</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">





    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/table.css">

    <link rel="stylesheet" type="text/css" href="css/modalDelete.css">


    <link href="css/logonav.css" rel="stylesheet">
    <link href="css/planta.css" rel="stylesheet">

    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
 .hidetext { -webkit-text-security: disc;  }
  </style>



  </head>

  <body id="page-top">

     <script type="text/javascript" src="js/jquery/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="js/edit_util.js"></script>
    <script src="js/delete_util.js"></script>
    <script src="js/verPassword.js"></script>
    
    

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
        

        
        <li class="nav-item ">
          <a class="nav-link" href="admin_tables.php">
            <i class="fas fa-fw fa-tree"></i>
            <span>Plantas</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="admin_projetos.php">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>Projetos</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin_users.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Utilizadores</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-user"></i>
              Adicionar Utilizador</div>
            <div class="card-body">
              <div class="form-group">
                  <p></p>
                      

                  <form class="form"  action="entry/registar.php">
                  
                        <button type="submit" class="btn btn-primary" >Criar Utilizador</button>
                  </form>
</div>
</div>
</div>





          <!-- Tabela com as plantas -->


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tabela dos Utilizadores</div>
            <div class="card-body">
              <div class="table-responsive">

                
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >

                  <thead bgcolor="#00a156">

                    <tr>
                      
                      <th>UserName:</th>
                      
                      <th>Password:</th>
                      
                      
                      <th>Email:</th>

                      <th></th>
                    </tr>
                  
                  </thead>
                  <tfoot bgcolor="#00a156">
                    <tr>
                      
                      <th>UserName</th>
                      
                      <th>Password</th>
                      
                      <th>Email</th>
                      
                     <th></th>
                     
                     
                    </tr>
                  </tfoot bgcolor="#00a156">
                  <tbody>

<?php  
$result = mysqli_query($connect,"SELECT * FROM users");

while($row = mysqli_fetch_array($result))
{
  ?>
<tr>  
       
     <td><?php echo $row["username"]; ?></td>
     <td class="hidetext"><?php echo $row["password"]; ?></td>
     <td><?php echo $row["email"]; ?></td>
     
     <td><center>



   
      
      <a href="#editUtilizadores" name="edit" class="edit_data" id="<?php echo $row["iduser"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit" style="color:yellow;">&#xE254;</i></a>

      <a href="#deleteutilizador" name="delete" class="delete_data" data-toggle="modal" id="<?php echo $row["iduser"]; ?>"><i class="material-icons" data-toggle="tooltip" title="Delete" style="color: red;">&#xE872;</i></a>
     
     </center></td>  
       
</tr> 
<?php  
}  
?> 
            
                    

                  </tbody>
                </table>
              </div>
              
 
              

            </div>
            
          </div>


          

        </div>






<!-- /.Modal para ver informação -->

<!-- /Modal para Editar-->




 <div id="editUtilizadores" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        
        <h4 class="modal-title" style="color: green;" id="tituloModal" name="tituloModal"></h4>
        <input type="hidden" name="titulo1" id="tituloInput">
      </div>
      <div class="modal-body">

        <div class="table-responsive">  
           <table class="table table-bordered">
                <tr>
        
                  <div class="form-group">
                  <td width="30%"><b>Username</b></td>
                  <td width="70%"><input type="text" class="form-control"  style="min-width:100%" name="username" id="usernameInput"></input></td>
                  
                  
              </div>
              </tr>
              <tr>
              <div class="form-group">
                  <td width="30%"><b>Password:</b></td>
                  <td  width="70%">
                  <input type="password" class="form-control" style="width:92%;" name="password" id="passwordInput"></input>
                  <a onclick="verPassword()"><i class="material-icons">remove_red_eye</i></a>
                </td>
                 
              </div>
              </tr>
              <tr>
              <div class="form-group">
                  <td width="30%"><b>Email:</b></td>
                  <td width="70%">
                  <input type="text" class="form-control"  style="min-width:100%" name="email" id="emailInput"></input></td>
                
                  
              </div>
              </tr>

              </table>  
      </div>
              
              <input type="button" name="insert" id="insert" value="Insert" class="btn btn-success" />
            
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Modal para apagar utilizadores -->





<div id="deleteutilizador" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>        
        <h4 class="modal-title">Tem a certeza ?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Quer mesmo apagar este Utilizador ? Este processo não pode ser desfeito.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        <button type="button" id="delete" class="btn btn-danger">Apagar</button>
      </div>
    </div>
  </div>
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
