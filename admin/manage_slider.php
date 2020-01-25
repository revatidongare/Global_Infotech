<?php
  session_start();

  if(!isset($_SESSION['admin'])){
    header('location:../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Admin - Manage Slider</title>
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

        <!-- Begin Page Content -->
        <div class="container-fluid actualcontent mb-5">
          <!-- Page Heading -->
          <div class="row mt-3">
            <div class="col-xl-2 col-md-8 mb-4 mx-auto">
              <p class="colortheme" style="letter-spacing: 3px;">MANAGE SLIDER</p>

                 </div>
                    <!-- <div class="col-xl-2 col-md-2 mb-4 ">
                      <a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_product">+ Add Slide</a>
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
           Product added successfully!
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
          <div class="row mt-3" id="product">
            <div class="col-xl-12 col-md-10 mb-4 mx-auto">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th class="font-weight-bolder">ID</th>
                          <th class="font-weight-bolder">Image</th>
                          <th class="font-weight-bolder">Title</th>
                          <th class="font-weight-bolder">Description</th>
                          <th class="font-weight-bolder text-center">Active/Inactive</th>
                         <!--  <th class="font-weight-bolder text-center">View</th> -->
                          <th class="font-weight-bolder text-center">Update</th>
                          <!-- <th class="font-weight-bolder text-center">Delete</th> -->

                        </tr>
                      </thead>
                      <tbody>
                        <?php     
                             $query = "SELECT * FROM `slider`";
                             include 'config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                             $id=0;
                                  
                             foreach($result as $row){
                        ?>

                        <tr>
                          <td><?php $id++; echo $id;?></td>
                          <td ><img src="../img/slider/<?php echo $row['image']; ?>" style="width:150px;"></td>
                          <td><?php echo $row['title']; ?></td>
                          <td><?php echo $row['description']; ?></td>
                          
                          <td class="text-center">
                            <?php  
                                  $flag = $row['flag'];
                                  if($flag == 1){
                                    ?>
                                        <a class="btn btn-success" href="active.php?q=<?php echo $row['slider_id'];?>&table_name=slider&status=active" >Active</a>
                                    <?php
                                  }else{
                                    ?>
                                        <a class="btn btn-warning" href="active.php?q=<?php echo $row['slider_id'];?>&table_name=slider&status=inactive" >Inactive</a>
                                    <?php
                                  }
                             ?>
                          </td>
                                                 
                          <td class="text-center"><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_slider" onclick="sendUpdate(<?php echo $row['slider_id']; ?>)">Update</button></td>
                          
                         <!--  <td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $row['slider_id'];?>&table_name=slider">Delete</a></td> -->
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

  <!-- Add Slider modal-->
<!-- 
   <div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Add New Slider</b></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="back.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row" style="text-align: left;line-height:3rem;">
              <div class="col-12">
                 <b><label for="name">Title</label></b>
                <input type="text" name="title" class="form-control"  placeholder="Enter title">  
              </div>
                           
              <div class="col-12">
               <b> <label for="name">Descrption</label></b>
                <input type="text" name="description" class="form-control" placeholder="Enter Descrption ">
              </div>
              
             <div class="col-12">
                <b><label for="name">Slider Image</label></b>
                <input type="file" name="image" class="form-control">
            </div>
                         
        </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-theme" name="add_slider">+ Add Slider</button>
          </div>
           </form>
        </div>
      </div>
    </div>
 -->
    <!-- UPDATE SLIDER modal-->

   <div class="modal fade" id="update_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Update Slider</b></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="back.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row" style="text-align: left;line-height:3rem;">
              <div class="col-12">
                 <b><label for="name">Title</label></b>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">  
              </div>
                           
              <div class="col-12">
               <b> <label for="name">Descrption</label></b>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter Descrption ">
              </div>
              
             <div class="col-12">
                <b><label for="name">Slider Image</label></b>
                <input type="file" name="image" id="image" class="form-control">
                 <input type="hidden" name="slider_id" id="slider_id">
            </div>
                         
        </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-theme" name="update_slidername">Update Slider</button>
          </div>
           </form>
        </div>
      </div>
    </div>

 
  <?php include 'includes/script.php';?>
  
    <script>
    function sendUpdate(id) {
      $.ajax({
        url: "back.php",
        method: "POST",
        data: { id:id, update: "update_slider" },
        success: function(result) {
          var data = JSON.parse(result)
          $("#title").val(data['title'])
          $("#slider_id").val(data['slider_id'])
          $("#description").val(data['description'])
          $("#image").val(data['image'])
       
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
