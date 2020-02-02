<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header('location:../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Admin - Manage Test</title>
	<?php include 'includes/head.php';?>
</head>

<body id="page-top">
	<style type="text/css">
		.bb {
			background-color: rgba(0, 128, 128, 0.85);
			color: #fff;
		}

		.hh:hover {
			background-color: rgba(0, 128, 128, 1);
			color: #fff;
		}
		.col-6{
			padding-right: 1rem;
			 padding-left: 1rem;
		}
		.col-12{
			padding-right: 1rem;
			 padding-left: 1rem;
		}

	</style>

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
					<!-- <div class="row mt-3">
						<div class="col-xl-8 col-md-8 mb-4 mx-auto">
							<p class="colortheme" style="letter-spacing: 3px;">MANAGE
								<select class=" p-2 colortheme" id="tt">
									<option value="0">Select table</option>
									<option value="1">key</option>
									<option value="2">key</option>
								</select></p>
						</div>
						
					</div> -->
					 <div class="site-section site-section-sm">
        <div class="container">
          <div class="row text-center">
           <!--  <div class="col-md-3 col-lg-3 mb-3 mx-auto">
              <form action="#">
                <div class="row form-group">
                  <div class="col-md-12 mb-2 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Select key to view a key </label>
                    <select name="" id="mySelect" class="form-control myformcontrol">
                       	<option value="0">Select key</option>
                        <option value="1">keys Of C</option>
                        <option value="2">keys Of C++</option>
                        <option value="3">keys Of JAVA</option>
                        
                    </select>
                  </div>
                </div>
              </form>
            </div> -->
           <!--  <div class="col-md-3 col-lg-3 mb-3 mb-md-0 mx-auto ">
              <button type="button" style="background-color: rgb(0,99,120); color: white;" value="Send Message" class="btn btn-color pill px-4 py-2 conferencebutton" onclick="getLocation()" >View Table</button>
            </div> -->
           <!--  <div class="col-md-3 col-lg-3 mb-3 ">
							<a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_key">+ Add key</a>
						</div> -->
						<div class="col-md-6 col-lg-6 mb-6" >
							<label class="font-weight-bold" for="fullname">Manage Test key with respect to School Name</label>
						</div>
						
						<div class="col-md-6 col-lg-6 mb-6 ">
							<a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_key">+ Add Test Key</a>
						</div>
          </div>
        </div>
      </div><br>

					<!--Alert Script-->
					<?php 
                  if(isset($_GET['q'])){
                    $value = $_GET['q'];

                    if($value == 1){
                      ?>
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						key added successfully!
					</div>
					<?php
                    }
                     if($value == 6){
                      ?>
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						key added successfully!
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
						<div class="row mt-3">
							<div class="col-xl-12 col-md-10 mb-4 mx-auto">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th class="font-weight-bolder">ID</th>
														<th class="font-weight-bolder">School Name</th>
														<th class="font-weight-bolder">Test Key</th>
														<th class="font-weight-bolder text-center">Update</th>
														<th class="font-weight-bolder text-center">Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php     
						                             $query = "SELECT * FROM `key_table`";
						                             include 'config.php';
						                             $stmt=$conn->prepare($query);
						                             $stmt->execute();
						                             $result=$stmt->fetchAll();
						                             $conn=null;
						                             $id=0;
						                                  
						                             foreach($result as $key){
						                        ?>

													<tr>
														<td><?php $id++ ; echo $id;?></td>
														<td><?php echo $key['school']; ?></td>
														<td><?php echo $key['test_key']; ?></td>
														
														<td class="text-center"><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_key" onclick="updatekey(<?php echo $key['key_id']; ?>)">Update</button></td>
														<td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $key['key_id'];?>&table_name=key_table">Delete</a></td>
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

	<!-- Add key modal-->

	<div class="modal fade" id="add_key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>Add New key</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row" style="line-height: 2rem; padding: 2rem;">
							<div class="col-12">
								<b><label for="name">School / college Name </label></b>
								<input type="text" name="school" class="form-control" placeholder="Enter School/College Name ">
								
							</div>
							<div class="col-12">
								<b> <label for="name">Test Key</label></b>
								<input type="text" name="test_key" class="form-control" placeholder="Enter Test key">
							</div>
							
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-theme" name="add_key">+ Add key</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- update key module -->
	<div class="modal fade" id="update_key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>Update key</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row" style="line-height:2.5rem;" >
							<div class="col-12"> 
								<b><label for="name">School / college Name </label></b>
							<input type="text" name="school" class="form-control" id="school" placeholder="Enter School/college Name" required>
							<input type="hidden" name="key_id" id="key_id">
							</div>
							<div class="col-12"> 
								<b> <label for="name">Test Key</label></b>
							<input type="text" name="test_key" class="form-control" id="test_key" placeholder="Enter Test key" required>
							</div>
							
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-theme" name="update_key">+ Update key</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	
	<?php include 'includes/script.php';?>

	<script>
		function updatekey(id) {
			$.ajax({
				url: "back.php",
				method: "POST",
				data: {
					id: id,
					update: "key"
				},
				success: function(result) {
					var data = JSON.parse(result)
					$("#school").val(data['school'])
					$("#test_key").val(data['test_key'])
					$("#key_id").val(data['key_id'])
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
