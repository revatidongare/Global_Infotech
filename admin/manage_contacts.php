<?php
  session_start();

  if(!isset($_SESSION['admin'])){
    header('location:../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Admin - Manage Contacts</title>
  <?php include 'includes/head.php';?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" class="maincontent">

        <!-- Topbar -->
        <?php include 'includes/navbar.php';?>
        <!-- End of Topbar -->
<style type="text/css">
  .bb{
    background-color:rgba(0, 86, 100,0.85);
   color: #fff;
  }
   .hh:hover {     
    background-color:rgba(0, 86, 100,1);
   color: #fff;
      }
</style>
        <!-- Begin Page Content -->
        <div class="container-fluid actualcontent mb-5">
          <!-- Page Heading -->
          <div class="row mt-3">
            <div class="col-xl-8 col-md-8 mb-4 mx-auto">
              <p class="colortheme" style="letter-spacing: 3px;">Manage Contacts</p>

           </div>
              <!-- <div class="col-xl-2 col-md-2 mb-4 ">
                <a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_contact">+ Add Gift contact</a>
              </div> -->
          </div>
          <!--Alert Script-->
          <?php 
                  if(isset($_GET['q'])){
                    $value = $_GET['q'];

                    if($value == 1){
                      ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Category added successfully!
          </div>
          <?php
                    }
                     if($value == 6){
                      ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           contact added successfully!
          </div>
          <?php
                    }
                    if($value == 'updated'){
                      ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             Updated successfully!
          </div>
          <?php
                    }
                    if($value == 'deleted'){
                      ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             Deleted successfully!
          </div>
          <?php
                    }
                    if($value == 2 || ($value == 'notupdated') || ($value=='notdeleted')){
                      ?>
          <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Error!
          </div>
          <?php
                    }
                  }
                ?>
          <div class="row mt-3" id="contact">
            <div class="col-xl-12 col-md-10 mb-4 mx-auto">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th class="font-weight-bolder">ID</th>
                          <th class="font-weight-bolder">Name</th>
                          <th class="font-weight-bolder">Email</th>
                          <th class="font-weight-bolder">Message</th>
                          <th class="font-weight-bolder text-center">Mark as seen</th>
                          <th class="font-weight-bolder text-center">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php     
                             $query = "SELECT * FROM `contact` WHERE 1";
                             include 'config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  $id=0 ;
                             foreach($result as $contact){
                        ?>

                        <tr>

                          <td><?php $id++; echo $id;?></td>
                          <td><?php echo $contact['name']; ?></td>
                          <td><?php echo $contact['email']; ?></td>
                          <td><?php echo $contact['subject']; ?></td>
                           <td class="text-center">
                            <?php  
                                  $seen = $contact['seen'];
                                  if($seen == 0){
                                    ?>
                                        <a class="btn btn-warning" href="active.php?q=<?php echo $contact['id'];?>&table_name=contact&status=mark_as_seen" >Mark As Seen</a>
                                    <?php
                                  }else{
                                    ?>
                                       
                                       <h4 style="color:rgb(0,150,135);">Seen</h4>
                                    <?php
                                  }
                             ?>
                          </td>
                         
                          
                          <td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $contact['id'];?>&table_name=contact">Delete</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- Single Item -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      <?php include 'includes/footer.php';?>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

  <?php include 'includes/script.php';?>
  
    <script>
   function sendUpdate(id) {
            $.ajax({
                url: "back.php",
                method: "POST",
                data: {
                    id:id,
                    update: "update_gift"
                },
                success: function(result) {
                    var data = JSON.parse(result)
                    $("#name").val(data['name'])
                    $("#contact_id").val(data['contact_id'])
                                      
                }
            });
        }

  </script>

  <script type="text/javascript">
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 4000);

  </script>

</body>

</html>
