<?php
  session_start();

  if(!isset($_SESSION['admin'])){
    header('location:../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Admin - Manage Gifts</title>
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
              <p class="colortheme" style="letter-spacing: 3px;">MANAGE GIFT PRODUCT</p>

           </div>
              <div class="col-xl-2 col-md-2 mb-4 ">
                <a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_product">+ Add Gift Product</a>
              </div>
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
                          <th class="font-weight-bolder">Product Name</th>
                          <th class="font-weight-bolder text-center">Stock</th>
                          <th class="font-weight-bolder text-center">Active/Inactive</th>
                          <th class="font-weight-bolder text-center">View</th>
                          <th class="font-weight-bolder text-center">Update</th>
                          <th class="font-weight-bolder text-center">Update Image</th>
                          <th class="font-weight-bolder text-center">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php     
                             $query = "SELECT * FROM `gift_product` WHERE `deleted`= 0 ";
                             include 'config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  $id=0 ;
                             foreach($result as $product){
                        ?>

                        <tr>

                          <td><?php $id++; echo $id;?></td>
                          <td><?php echo $product['name']; ?></td>
                           <td class="text-center">
                            <?php  
                                  $stock = $product['stock'];
                                  if($stock == 1){
                                    ?>
                                        <a class="btn btn-info" href="active.php?q=<?php echo $product['product_id'];?>&table_name=gift_product&status=stock" >IN Stock</a>
                                    <?php
                                  }else{
                                    ?>
                                        <a class="btn btn-danger" href="active.php?q=<?php echo $product['product_id'];?>&table_name=gift_product&status=stockout" >Stock Out</a>
                                    <?php
                                  }
                             ?>
                          </td>
                          <td class="text-center">
                            <?php  
                                  $flag = $product['flag'];
                                  if($flag == 1){
                                    ?>
                                        <a class="btn btn-success" href="active.php?q=<?php echo $product['product_id'];?>&table_name=gift_product&status=active" >Active</a>
                                    <?php
                                  }else{
                                    ?>
                                        <a class="btn btn-warning" href="active.php?q=<?php echo $product['product_id'];?>&table_name=gift_product&status=inactive" >Inactive</a>
                                    <?php
                                  }
                             ?>
                          </td>
                          <td class="text-center"><button class="btn btn-secondary" name="update" id="update" data-toggle="modal" data-target="#view_product" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">View</button></td>
                          
                          <td class="text-center"><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_gift" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">Update</button></td>

                          <td class="text-center">
                                                    <button class="btn bb hh" name="update" id="update" data-toggle="modal" data-target="#update_image1" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">Image 1</button>

                                                    <button class="btn bb hh" name="update" id="update" data-toggle="modal" data-target="#update_image2" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">Image2</button>

                                                    <button class="btn bb hh" name="update" id="update" data-toggle="modal" data-target="#update_image3" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">Image3</button>
                                                    
                                                    <button class="btn bb hh" name="update" id="update" data-toggle="modal" data-target="#update_image4" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">Image4</button>

                                                    <button class="btn bb hh" name="update" id="update" data-toggle="modal" data-target="#update_image5" onclick="sendUpdate(<?php echo $product['product_id']; ?>)">Image5</button>

                                                </td>

    
                          
                          <td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $product['product_id'];?>&table_name=gift_product">Delete</a></td>
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

  <!-- Add Gifts modal-->

   <div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Add New Product</b></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="back.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row" style="text-align: left;line-height:3rem;">
              <div class="col-6">
                 <b><label for="name">Product name</label></b>
                <input type="text" name="name" class="form-control" placeholder="Enter Product name">  
              </div>
              <div class="col-6">
               <b> <label for="name">Price</label></b>
                <input type="text" name="price" class="form-control"  placeholder="Enter Price">
              </div>
               <div class="col-6">
                <b><label for="name">SKU</label></b>
                <input type="text" name="SKU" class="form-control" placeholder="Enter SKU">
              </div>
              <div class="col-6">
               <b><label for="name">Expiry Date</label></b>
                <input type="text" name="expiry_date" class="form-control" placeholder="Enter Expiry Date">
              </div>
              <div class="col-6">
               <b> <label for="name">Descrption</label></b>
                <input type="text" name="description" class="form-control" placeholder="Enter Descrption about Product">
              </div>
              
             <div class="col-6">
                <b><label for="name">Main Image</label></b>
                <input type="file" name="image1" class="form-control" value="choose image1">
            </div>
             <div class="col-6">
              <b><label for="name">Side Image 1</label></b>
              <input type="file" name="image2" class="form-control">
            </div>
             <div class="col-6">
              <b><label for="name">Side Image 2</label></b>
              <input type="file" name="image3" class="form-control">
            </div>
             <div class="col-6">
              <b><label for="name">Side Image 3</label></b>
              <input type="file" name="image4" class="form-control">
            </div>
             <div class="col-6">
              <b><label for="name">Side Image 4</label></b>
              <input type="file" name="image5" class="form-control">
            </div>
            </div>                       
        </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-theme" name="add_gift">+ Add Product</button>
          </div>
           </form>
        </div>
      </div>
    </div>

  <!-- Update Gift modal-->
   <div class="modal fade" id="update_gift" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Update GIFT</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="back.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row" style="text-align: left;line-height:3rem;">
                            <div class="col-6">
                                <b><label for="name">Product name</label></b>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product name">
                                <input type="hidden" name="product_id" id="product_id">
                            </div>
                            <div class="col-6">
                                <b> <label for="name">Price</label></b>
                                <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
                            </div>
                            <div class="col-6">
                                <b><label for="name">SKU</label></b>
                                <input type="text" name="SKU" class="form-control" id="SKU" placeholder="Enter SKU">
                            </div>
                            <div class="col-6">
                                <b><label for="name">Expiry Date</label></b>
                                <input type="text" name="expiry_date" class="form-control" id="expiry_date" placeholder="Enter Expiry Date">
                            </div>
                            <div class="col-6">
                                <b> <label for="name">Descrption</label></b>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Enter Descrption about Product">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-theme" name="update_giftname">update GIFT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
   <!-- update image1 -->
     <div class="modal fade" id="update_image1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Update Image 1</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="back.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-row">
                            <b><label for="name">Main Image</label></b>
                            <input type="file" name="image1" class="form-control" id="image1" placeholder="Enter Category name" required>
                            <input type="hidden" name="image1_id" id="image1_id">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-theme" name="giftimage1">UPDATE IMAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- update image2 -->
      <div class="modal fade" id="update_image2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Update Image 2</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="back.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-row">
                            <b><label for="name">Side Image 2</label></b>
                            <input type="file" name="image2" class="form-control" id="image2" placeholder="Enter Category name" required>
                            <input type="hidden" name="image2_id" id="image2_id">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-theme" name="giftimage2">UPDATE IMAGE</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <!-- update image3 -->
     <div class="modal fade" id="update_image3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Update Image 3</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="back.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-row">
                            <b><label for="name">Side Image 3</label></b>
                            <input type="file" name="image3" class="form-control" id="image3" placeholder="Enter Category name" required>
                            <input type="hidden" name="image3_id" id="image3_id">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-theme" name="giftimage3">UPDATE IMAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- update image4 -->
     <div class="modal fade" id="update_image4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Update Image 4</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="back.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-row">
                            <b><label for="name">Side Image 4</label></b>
                            <input type="file" name="image4" class="form-control" id="image4" placeholder="Enter Category name" required>
                            <input type="hidden" name="image4_id" id="image4_id">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-theme" name="giftimage4">UPDATE IMAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- update image5 -->
     <div class="modal fade" id="update_image5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Update Image 5</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="back.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-row">
                            <b><label for="name">Side Image 5</label></b>
                            <input type="file" name="image5" class="form-control" id="image5" placeholder="Enter Category name" required>
                            <input type="hidden" name="image5_id" id="image5_id">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-theme" name="giftimage5">UPDATE IMAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  <!-- view Product modal -->

  <div class="modal fade" id="view_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>Product Details</b></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="back.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row" style="line-height: 2rem;">

              <div class="col-6">
                
                  <div class="col-md-4">
                     <b><label for="name">Side Image 1</label></b>
                  
                    <img id="vimage2" src="" height="100" width="150">
                  </div>
                  <div class="col-md-6">
                    <b><label for="name">Side Image 2</label></b>
                  
                    <img id="vimage3" src="" height="100" width="150">
                  </div>
                  <div class="col-md-4">
                    <b><label for="name">Side Image 3</label></b>
                                        <img id="vimage4" src="" height="100" width="150">
                  
                  </div>
                  <div class="col-md-6">
                    <b><label for="name">Side Image 4</label></b>
                                        <img id="vimage5" src="" height="100" width="150">
                  
                  </div>
                

                    <div class="col-6">
                      <b><label for="name">Main Image</label></b>
                                        <img id="vimage1" src="" height="200" width="300">
                    </div>

              </div>
              <div class="col-6">
                <div class="col-12">
                  <b><label for="name">Product name</label></b>
                  <input type="text" name="vname" class="form-control" id="vname" readonly>

                </div>
                <div class="col-12">
                  <b> <label for="name">Price</label></b>
                  <input type="text" name="vprice" class="form-control" id="vprice" readonly>


                </div>
                <div class="col-12">
                  <b><label for="name">SKU</label></b>
                  <input type="text" name="vSKU" class="form-control" id="vSKU" readonly>
                </div>
                <div class="col-12">
                  <b><label for="name">Expiry Date</label></b>
                  <input type="text" name="vexpiry_date" class="form-control" id="vexpiry_date" readonly>
                </div>
                <div class="col-12">
                  <b> <label for="name">Descrption</label></b>
                  <input type="text" name="vdescription" class="form-control" id="vdescription" readonly>
                </div>

                <div class="col-12">
                  <!-- <b> <label for="name" id="vimage3">Category</label></b> -->
                  <!--  <input type="text" name="vname" class="form-control" id="vname" placeholder="Enter Product name"> -->
                </div>
              </div>


            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <!--     <button type="submit" class="btn btn-theme" name="add_product">+ Add Product</button> -->
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
                data: {
                    id:id,
                    update: "update_gift"
                },
                success: function(result) {
                    var data = JSON.parse(result)
                    $("#name").val(data['name'])
                    $("#product_id").val(data['product_id'])
                    $("#price").val(data['price'])
                    $("#SKU").val(data['SKU'])
                    $("#description").val(data['description'])
                    $("#expiry_date").val(data['expiry_date'])
                    $("#image1_id").val(data['product_id'])
                    $("#image2_id").val(data['product_id'])
                    $("#image3_id").val(data['product_id'])
                    $("#image4_id").val(data['product_id'])
                    $("#image5_id").val(data['product_id'])
//for view
                    $("#vname").val(data['name'])
                    $("#vproduct_id").val(data['product_id'])
                    $("#vprice").val(data['price'])
                    $("#vSKU").val(data['SKU'])
                    $("#vdescription").val(data['description'])
                    $("#vexpiry_date").val(data['expiry_date'])         
                    var vimage1 = "../img/gifts/" + data['image1'];
                    $("#vimage1").attr('src', vimage1);
                    $("#vimage1").attr('alt', "image not found");
                    var vimage2 = "../img/gifts/" + data['image2'];
                    $("#vimage2").attr('src', vimage2);
                    $("#vimage2").attr('alt', "image not found");
                    var vimage3 = "../img/gifts/" + data['image3'];
                    $("#vimage3").attr('src', vimage3);
                    $("#vimage3").attr('alt', "image not found");
                    var vimage4 = "../img/gifts/" + data['image4'];
                    $("#vimage4").attr('src', vimage4);
                    $("#vimage4").attr('alt', "image not found");
                    var vimage5 = "../img/gifts/" + data['image5'];
                    $("#vimage5").attr('src', vimage5);
                    $("#vimage5").attr('alt', "image not found");
                    
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
