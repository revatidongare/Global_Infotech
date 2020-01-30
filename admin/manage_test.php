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

	<script>
    function getLocation() {
      var obj = document.getElementById("mySelect");
      var location = obj.options[obj.selectedIndex].value;

      if(location == 1){

        document.getElementById("location1").style.display = "block";
        document.getElementById("location2").style.display = "none";
        document.getElementById("location3").style.display = "none";
                
      }else if(location == 2){

        document.getElementById("location1").style.display = "none";
        document.getElementById("location2").style.display = "block";
        document.getElementById("location3").style.display = "none";
        
      }else if(location == 3){

        document.getElementById("location1").style.display = "none";
        document.getElementById("location2").style.display = "none";
        document.getElementById("location3").style.display = "block";
        
      }
    }

  </script>

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
									<option value="1">Subject</option>
									<option value="2">question</option>
								</select></p>
						</div>
						
					</div> -->
					 <div class="site-section site-section-sm">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-3 col-lg-3 mb-3 mx-auto">
              <form action="#">
                <div class="row form-group">
                  <div class="col-md-12 mb-2 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Select subject to view a question </label>
                    <select name="" id="mySelect" class="form-control myformcontrol">
                       	<option value="0">Select subject</option>
                        <option value="1">Questions Of C</option>
                        <option value="2">Questions Of C++</option>
                        <option value="3">Questions Of JAVA</option>
                        
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-3 col-lg-3 mb-3 mb-md-0 mx-auto ">
              <button type="button" style="background-color: rgb(0,99,120); color: white;" value="Send Message" class="btn btn-color pill px-4 py-2 conferencebutton" onclick="getLocation()" >View Table</button>
            </div>
           <!--  <div class="col-md-3 col-lg-3 mb-3 ">
							<a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_subject">+ Add Subject</a>
						</div> -->
						<div class="col-md-3 col-lg-3 mb-3 ">
							<a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_question">+ Add Question</a>
						</div>
          </div>
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
						Subject added successfully!
					</div>
					<?php
                    }
                     if($value == 6){
                      ?>
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						question added successfully!
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
						<div class="row mt-3" id="location1" >
							<div class="col-xl-12 col-md-10 mb-4 mx-auto">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th class="font-weight-bolder">ID</th>
														<th class="font-weight-bolder">Question</th>
														<th class="font-weight-bolder text-center">View</th>
														<th class="font-weight-bolder text-center">Update</th>
														<th class="font-weight-bolder text-center">Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php     
						                             $query = "SELECT * FROM `mcq_test` WHERE `chapter_id`= 1";
						                             include 'config.php';
						                             $stmt=$conn->prepare($query);
						                             $stmt->execute();
						                             $result=$stmt->fetchAll();
						                             $conn=null;
						                             $question_id=0;
						                                  
						                             foreach($result as $question){
						                        ?>

													<tr>
														<td><?php $question_id++ ; echo $question_id;?></td>
														<td><?php echo $question['question']; ?></td>
														<td class="text-center"><button class="btn btn-secondary" name="view" id="view" data-toggle="modal" data-target="#view_question" onclick="viewquestion(<?php echo $question['question_id']; ?>)">View</button></td>

														<td class="text-center"><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_question" onclick="viewquestion(<?php echo $question['question_id']; ?>)">Update</button></td>
														<td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $question['question_id'];?>&table_name=question_master">Delete</a></td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-3" id="location2" style="display: none;" >
							<div class="col-xl-12 col-md-10 mb-4 mx-auto">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th class="font-weight-bolder">ID</th>
														<th class="font-weight-bolder">Question</th>
														<th class="font-weight-bolder text-center">View</th>
														<th class="font-weight-bolder text-center">Update</th>
														<th class="font-weight-bolder text-center">Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php     
						                             $query = "SELECT * FROM `mcq_test` WHERE `chapter_id`= 2";
						                             include 'config.php';
						                             $stmt=$conn->prepare($query);
						                             $stmt->execute();
						                             $result=$stmt->fetchAll();
						                             $conn=null;
						                             $question_id=0;
						                                  
						                             foreach($result as $question){
						                        ?>

													<tr>
														<td><?php $question_id++ ; echo $question_id;?></td>
														<td><?php echo $question['question']; ?></td>
														<td class="text-center"><button class="btn btn-secondary" name="view" id="view" data-toggle="modal" data-target="#view_question" onclick="viewquestion(<?php echo $question['question_id']; ?>)">View</button></td>

														<td class="text-center"><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_question" onclick="viewquestion(<?php echo $question['question_id']; ?>)">Update</button></td>
														<td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $question['question_id'];?>&table_name=question_master">Delete</a></td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-3" id="location3" style="display: none;" >
							<div class="col-xl-12 col-md-10 mb-4 mx-auto">
								<div class="card shadow mb-4">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th class="font-weight-bolder">ID</th>
														<th class="font-weight-bolder">Question</th>
														<th class="font-weight-bolder text-center">View</th>
														<th class="font-weight-bolder text-center">Update</th>
														<th class="font-weight-bolder text-center">Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php     
						                             $query = "SELECT * FROM `mcq_test` WHERE `chapter_id`= 3";
						                             include 'config.php';
						                             $stmt=$conn->prepare($query);
						                             $stmt->execute();
						                             $result=$stmt->fetchAll();
						                             $conn=null;
						                             $question_id=0;
						                                  
						                             foreach($result as $question){
						                        ?>

													<tr>
														<td><?php $question_id++ ; echo $question_id;?></td>
														<td><?php echo $question['question']; ?></td>
														<td class="text-center"><button class="btn btn-secondary" name="view" id="view" data-toggle="modal" data-target="#view_question" onclick="viewquestion(<?php echo $question['question_id']; ?>)">View</button></td>

														<td class="text-center"><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_question" onclick="viewquestion(<?php echo $question['question_id']; ?>)">Update</button></td>
														<td class="text-center"><a class="btn btn-danger" href="delete.php?q=<?php echo $question['question_id'];?>&table_name=question_master">Delete</a></td>
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


	<!-- Add Subject modal -->
	<div class="modal fade" id="add_subject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>Add New Subject</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<input type="text" name="name" class="form-control" id="title" placeholder="Enter Subject name">
						</div>
						<div class="col-6">
								<b><label for="name">Main Image</label></b>
								<input type="file" name="image" class="form-control" value="choose image">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-theme" name="add_Subject">+ Add Subject</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Add question modal-->

	<div class="modal fade" id="add_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>Add New Question</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row" style="text-align: left;line-height:3rem;">
							<div class="col-6">
								<b><label for="name">Question </label></b>
								<textarea rows="3" type="text" name="question" class="form-control" id="title" placeholder="Enter question "></textarea>
								
							</div>
							<div class="col-6">
								<b> <label for="name">Subject Name</label></b>
								<select name="chapter" class="form-control" id="branch">
									<option value="" selected>Choose any..</option>
									<?php 
                               $query = "SELECT * FROM `Subject_master`";
                               include 'config.php';
                               $stmt=$conn->prepare($query);
                               $stmt->execute();
                               $result=$stmt->fetchAll();
                               $conn=null;

                      foreach ($result as $branch_row) {
                   ?>
									<option value="<?php echo $branch_row['Subject_id'];?>" style="color: black;"><?php echo $branch_row['name'];?></option>
									<?php 
                      } 
                  ?>
								</select>
							</div>
							<div class="col-6">
								<b> <label for="name">option 1</label></b>
								<input type="text" name="option1" class="form-control" placeholder="Enter Price">
							</div>
							<div class="col-6">
								<b><label for="name">option 2</label></b>
								<input type="text" name="option2" class="form-control" placeholder="Enter SKU">
							</div>
							<div class="col-6">
								<b><label for="name">option 3</label></b>
								<input type="text" name="option3" class="form-control" placeholder="Enter Expiry Date">
							</div>
							<div class="col-6">
								<b> <label for="name">option 4</label></b>
								<input type="text" name="option4" class="form-control" placeholder="Enter Descrption about question">
							</div>
							<div class="col-6">
								<b> <label for="name">answer</label></b>
								<input type="text" name="answer" class="form-control" placeholder="Enter Descrption about question">
							</div>
							
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-theme" name="add_question">+ Add question</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- view question modal -->

	<div class="modal fade" id="view_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>question Details</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row" style="line-height: 2rem;">

							
								<div class="col-12">
									<b><label for="name">Question </label></b>
									<input type="text" name="vquestion" class="form-control" id="vquestion" readonly>

								</div>
								<div class="col-6">
									<b> <label for="name">option 1</label></b>
									<input type="text" name="vprice" class="form-control" id="voption1" readonly>


								</div>
								<div class="col-6">
									<b><label for="name">option 2</label></b>
									<input type="text" name="vSKU" class="form-control" id="voption2" readonly>
								</div>
								<div class="col-6">
									<b><label for="name">option 3</label></b>
									<input type="text" name="vexpiry_date" class="form-control" id="voption3" readonly>
								</div>
								<div class="col-6">
									<b> <label for="name">option 4</label></b>
									<input type="text" name="vdescription" class="form-control" id="voption4" readonly>
								</div>

								<div class="col-12" >
									<b> <label for="name">Answer</label></b>
									<input type="text" name="vdescription" class="form-control" id="vanswer" readonly>
								</div>
							
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<!--     <button type="submit" class="btn btn-theme" name="add_question">+ Add question</button> -->
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- update Subject module -->
	<!-- <div class="modal fade" id="update_Subject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>Update Subject</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-row">
							<input type="text" name="name" class="form-control" id="name" placeholder="Enter Subject name" required>
							<input type="hidden" name="Subject_id" id="Subject_id">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-theme" name="update_Subjectname">+ Update Subject</button>
					</div>
				</form>
			</div>
		</div>
	</div> -->

	<!-- update question module -->
	<div class="modal fade" id="update_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 1000px; margin:10px auto;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><b>Update question</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="back.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row container" style="text-align:center;">
							<div class="col-md-6 mb-3 mb-md-0 mx-auto">
								<b><label for="name">Question</label></b>
								<input type="text" name="question" class="form-control" id="upquestion" >
								<input type="hidden" name="question_id" id="question_id">
								<input type="hidden" name="chapter_id" id="chapter_id">
							</div>
							<div class="col-md-6" style="padding-right: 1rem; padding-left: 1rem;">
								<b> <label for="name">Option 1</label></b>
								<input type="text" name="option1" class="form-control" id="upoption1" placeholder="Enter option 1">
							</div>
							<div class="col-md-6" style="padding-right: 1rem; padding-left: 1rem;">
								<b><label for="name">option 2</label></b>
								<input type="text" name="option2" class="form-control" id="upoption2" placeholder="Enter option 2">
							</div>
							<div class="col-6" style="padding-right: 1rem; padding-left: 1rem;">
								<b><label for="name">option 3</label></b>
								<input type="text" name="option3" class="form-control" id="upoption3" placeholder="option 3">
							</div>
							<div class="col-6" style="padding-right: 1rem; padding-left: 1rem;">
								<b> <label for="name">option 4</label></b>
								<input type="text" name="option4" class="form-control" id="upoption4" placeholder="Enter option 4">
							</div>
							<div class="col-6" style="padding-right: 1rem; padding-left: 1rem;">
								<b> <label for="name">Answer</label></b>
								<input type="text" name="answer" class="form-control" id="upanswer" placeholder="Enter answer">
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-theme" name="update_question">+ update question</button>
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
					id: id,
					update: "update_Subject"
				},
				success: function(result) {
					var data = JSON.parse(result)
					$("#name").val(data['name'])
					$("#Subject_id").val(data['Subject_id'])
				}
			});
		}

		function viewquestion(id) {
			$.ajax({
				url: "back.php",
				method: "POST",
				data: {
					id: id,
					view: "view_question"
				},
				success: function(result) {
					var data = JSON.parse(result)
					$("#vquestion").val(data['question'])
					$("#vquestion_id").val(data['question_id'])
					$("#voption1").val(data['option1'])
					$("#voption2").val(data['option2'])
					$("#voption3").val(data['option3'])
                    $("#voption4").val(data['option4'])	
                    $("#vanswer").val(data['answer'])
                    
                    $("#upquestion").val(data['question'])
					$("#question_id").val(data['question_id'])
					$("#chapter_id").val(data['chapter_id'])
					$("#upoption1").val(data['option1'])
					$("#upoption2").val(data['option2'])
					$("#upoption3").val(data['option3'])
					$("#upoption4").val(data['option4'])
					$("#upanswer").val(data['answer'])
					

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
