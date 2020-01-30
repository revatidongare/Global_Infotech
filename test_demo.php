<!DOCTYPE html>
<html lang="zxx">
<?php include 'includes/head.php'; ?>
<title>Tests</title>

<body class="home-3">
    <div class="all">

<?php include 'includes/navbar.php'; ?>
        <main>
            <div class="page-title-breadcrumbs">
                <div class="breadcrumbs-container container">
                    <div class="breadcrumbs_wrapper">
                        <div class="page-title-container">
                            <h1 class="text-center">Demo Tests</h1>
                        </div>

                        <!-- <div class="breadcrumbs-container text-center">
                            <ul class="breadcrumbs primary-font">
                                <li>
                                    <a href="#">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-sep">/</li>
                                <li>
                                    <span>About Us</span>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

             <section>
                <div class="section meet-our-team">
                    <div class="container">
                        <div class="title text-center">
                            <div class="page-title color">
                                
                                <div class="title title-icon">
                                    <h2 class="title-h2">Test your knowledge </h2>
                                    </div>
                            </div>
                        </div>

                        <div class="row m-top text-center">
                            <div class=" col-lg-4 col-sm-6">
                                <div class="item clearfix">
                                    <div class="item-img">
                                        <img class="img-fluid" src="img/skill-india.jpg" data-toggle="modal" data-target="#student_data1" alt="img">
                                    </div>

                                    <div class="item-content">
                                        <div class="user-info">
                                            <h4 class="user-name">
                                                <a href="" data-toggle="modal" data-target="#student_data1"  class="title-black">C</a>
                                            </h4>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class=" col-lg-4 col-sm-6">
                                <div class="item clearfix">
                                    <div class="item-img">
                                        <img class="img-fluid" src="img/skill-india.jpg" data-toggle="modal" data-target="#student_data2" alt="img">
                                    </div>

                                    <div class="item-content">
                                        <div class="user-info">
                                            <h4 class="user-name">
                                                <a href="" data-toggle="modal" data-target="#student_data2" class="title-black">C++</a>
                                                
                                            </h4>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class=" col-lg-4 col-sm-6">
                                <div class="item clearfix">
                                    <div class="item-img">
                                       <img class="img-fluid" src="img/skill-india.jpg" data-toggle="modal" data-target="#student_data3" alt="img">
                                    </div>

                                    <div class="item-content">
                                        <div class="user-info">
                                            <h4 class="user-name">
                                                <a href="" data-toggle="modal" data-target="#student_data3" class="title-black">JAVA</a>
                                            </h4>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                       </div>
                </div>
            </section>
           
            </div>

<div class="modal" id="student_data1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form name="checkout" method="post" class="form-checkout text-center" action="includes/back.php" enctype="multipart/form-data" style="padding-left: 2rem; padding-right: 2rem; padding-bottom: 1rem; padding-top: 1rem;">
                                <div class="billing-fields">
                                    <div class="form-input">
                                        <div class="form-row">
                                            <p>School / College Name
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="school" class="input-text spr-form-input" required>
                                                <input type="hidden" name="subject_id" value="<?php echo(1) ?> " class="input-text spr-form-input">
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <p>Full name&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="name" class="input-text spr-form-input"  required>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <p>Phone&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="number" name="phone" class="input-text spr-form-input" required>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                         <p>Email &nbsp;
                                          <abbr class="required" title="required">*</abbr>
                                          </p>
                                        <span class="input-wrapper w-100 d-flex">
                                         <input type="email" name="email" class="input-text spr-form-input" placeholder="Email" required>
                                         </span>
                                       </div>

                                         <button type="submit" name="student_data" class="btn-submit btn button-main m-1 border square font-weight-bolder" style="background-color: rgb(0, 86, 100); color: white;">Start Test</button>
                                        
                                    </div>
                                </div>
                               
                                  
                            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>

<div class="modal" id="student_data2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form name="checkout" method="post" class="form-checkout text-center" action="includes/back.php" enctype="multipart/form-data" style="padding-left: 2rem; padding-right: 2rem; padding-bottom: 1rem; padding-top: 1rem;">
                                <div class="billing-fields">
                                    <div class="form-input">
                                        <div class="form-row">
                                            <p>School / College Name
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="school" class="input-text spr-form-input" required>
                                                <input type="hidden" name="subject_id" value="<?php echo(2) ?> " class="input-text spr-form-input">
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <p>Full name&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="name" pattern="[A-Za-z ]*" class="input-text spr-form-input"  required>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <p>Phone&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" pattern="[0-9]{10}" max="10" name="phone" class="input-text spr-form-input" required>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                         <p>Email &nbsp;
                                          <abbr class="required" title="required">*</abbr>
                                          </p>
                                        <span class="input-wrapper w-100 d-flex">
                                         <input type="email" name="email" class="input-text spr-form-input" placeholder="Email" required>
                                         </span>
                                       </div>

                                         <button type="submit" name="student_data" class="btn-submit btn button-main m-1 border square font-weight-bolder" style="background-color: rgb(0, 86, 100); color: white;">Start Test</button>
                                        
                                    </div>
                                </div>
                               
                                  
                            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>

<div class="modal" id="student_data3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form name="checkout" method="post" class="form-checkout text-center" action="includes/back.php" enctype="multipart/form-data" style="padding-left: 2rem; padding-right: 2rem; padding-bottom: 1rem; padding-top: 1rem;">
                                <div class="billing-fields">
                                    <div class="form-input">
                                        <div class="form-row">
                                            <p>School / College Name
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="school" class="input-text spr-form-input" required>
                                                <input type="hidden" name="subject_id" value="<?php echo(3) ?> " class="input-text spr-form-input">
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <p>Full name&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="name" class="input-text spr-form-input"  required>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <p>Phone&nbsp;
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="number" name="phone" class="input-text spr-form-input" required>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                         <p>Email &nbsp;
                                          <abbr class="required" title="required">*</abbr>
                                          </p>
                                        <span class="input-wrapper w-100 d-flex">
                                         <input type="email" name="email" class="input-text spr-form-input" placeholder="Email" required>
                                         </span>
                                       </div>

                                         <button type="submit" name="student_data" class="btn-submit btn button-main m-1 border square font-weight-bolder" style="background-color: rgb(0, 86, 100); color: white;">Start Test</button>
                                        
                                    </div>
                                </div>
                               
                                  
                            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div>

        </main>

        <?php include 'includes/footer.php'; ?>
    </div>

    <!-- Back-To-Top Button -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
<?php include 'includes/script.php'; ?>
</body>

</html>