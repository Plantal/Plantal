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
     <link href="css/mapa.css" rel="stylesheet">
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   

<script type="text/javascript" src="js/jquery/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="js/insertProjeto.js"></script>
    <script src="js/googlemap.js"></script>
    <script src="js/deleteProjeto.js"></script>
   <!--  <script src="js/editProjeto.js"></script> -->
    



  </head>

  <body id="page-top">

     
    

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
         <li class="nav-item active">
          <a class="nav-link" href="admin_projeto.php">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>Projetos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_users.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Utilizadores</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


        

         


          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-project-diagram"></i>
              Adicionar Projetos</div>
            <div class="card-body">
              <div class="form-group">
                  
                        
  <a  class="btn btn-primary" data-toggle="modal" data-target="#projeto">Criar Projeto</a>






<!--Insert Modal-->

<div class="modal fade" id="projeto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel">Criar Projeto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome projeto:</label>
            <input type="text" class="form-control" id="nomeInput">
          </div>
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">Latitude:</label>
            <input type="text" class="form-control" id="latitudeInput">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Longitude:</label>
            <input type="text" class="form-control" id="longitudeInput">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Orientador:</label>
            <select id="orientadorInput" name="tipofolha" class="form-control">
                        <option value=""></option>
                        <?php echo $options; ?>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="options text-right">
                  <button id="addProjeto" class="btn btn-info">Criar Projeto<i class="fas fa-sign-in ml-1"></i></button>
              </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>






                     


                          
                      
                  
                      

              </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    
</div>
<!-- /#mapa -->

<div class="inline" style="display: inline-block; width: 100%;">
<div class="table-responsive" style="float: left; width: 40%; margin-top: 30px; height: 500px;">
  <table class="table" >
    <caption>Lista de Projetos</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Orientador</th>  
      <th scope="col">Ações</th>  

    </tr>
  </thead>

  <tbody>

<?php  
$result = mysqli_query($connect,"SELECT idProjeto, nome, username FROM projeto, users WHERE projeto.userId = users.iduser ");



while($row = mysqli_fetch_array($result))
{
  ?>
<tr>  
     <td><?php echo('<a href="viewProjetos.php?idProjeto='.$row["idProjeto"].'">'.$row["nome"].'</a>');?></td>  
     <td><?php echo $row["username"]; ?></td>
     
     
     <td><center>

      

      
      
      <a  data-toggle="modal" data-target="#editarProj" name="edit" class="edit_data" id="<?php echo $row["idProjeto"]; ?>" ><i class="material-icons"  title="Edit" style="color:yellow;">&#xE254;</i></a>

      <a href="#myModal" name="delete" class="delete_data"   id="<?php echo $row["idProjeto"]; ?>"><i class="material-icons"  title="Delete" style="color: red;">&#xE872;</i></a>
     
     </center></td>  
       
</tr> 
<?php  
}  
?> 
</tbody>


  </table>



  
</div>


<div class="modal fade" id="editarProj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel">Criar Projeto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome do projeto:</label>
            <input type="text" class="form-control" id="nomeInput">
          </div>
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">Latitude:</label>
            <input type="text" class="form-control" id="latitudeInput">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Longitude:</label>
            <input type="text" class="form-control" id="longitudeInput">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Orientador:</label>
            <select id="orientadorInput" name="tipofolha" class="form-control">
                        <option value=""></option>
                        <?php echo $options; ?>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="options text-right">
                  <button id="addProjeto" class="btn btn-info">Alterar Projeto<i class="fas fa-sign-in ml-1"></i></button>
              </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal para editar projetos -->











<!-- Modal para apagar projetos -->

<div id="myModal" class="modal fade">
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
        <p>Quer mesmo apagar esta projeto ? Este processo não pode ser desfeito.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        <button type="button" id="delete" class="btn btn-danger">Apagar</button>
      </div>
    </div>
  </div>
</div>    






<?php 
      require 'projeto.php';
      $pro = new projeto;
      $coll = $pro->getProjetosBlankLatLng();
      $coll = json_encode($coll, true);
      echo '<div id="data"  style="display: none;">' . $coll . '</div>';

      $allData = $pro->getAllProjetos();
      $allData = json_encode($allData, true);
      echo '<div id="allData"  style="display: none;">' . $allData . '</div>';      
     ?>
    <div id = "mapid" style="width: 60%; float: right;"></div>
</div>






      
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx67Sngc8Ij0vkQDl2Uy9Ffwc6Eb_GPxo&callback=loadMap">
    </script>

        
        

      
      <!-- /.content-wrapper -->

 



    </div>


</div>


 </div>

<div class="form-group">

        

</div>
      <!-- /.content-wrapper -->


    </div>


    <!-- /#wrapper -->


    <footer class="sticky-footer" style="padding-top: 30px;" >
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




