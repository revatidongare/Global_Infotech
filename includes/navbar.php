    <header>
            <div id="top-header">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 social-container">
                                <aside class="social-profile">
                                    <ul class="social-icon d-flex">
                                        <li class="social-facebook">
                                            <a class="gsf-link" title="Facebook" href="https://www.facebook.com/globalinfotechlonavla">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social-twitter">
                                            <a class="gsf-link" title="Twitter" href="https://twitter.com/pint75">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        
                                        <li class="social-vimeo">
                                            <a class="gsf-link" title="instagram" href="https://www.instagram.com/global_infotech_98/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        
                                        <li class="social-google-plus">
                                            <a class="gsf-link" title="Google+" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                            </div>

                            <div class="col-md-6 col-sm-12 social-container">
                                <div class="top-header-right float-right">
                                    <ul class="top-menu d-flex">
                                      
                                        <li class="toolbar-customer login-account">
                                            <a data-toggle="modal" data-target="#myModalForLogin">
                                                <i class="fa fa-lock" aria-hidden="true"></i>Login
                                            </a>
                                        </li>
                                        <li class="toolbar-customer log-out" >
                                            <a href="test_final.php">
                                                <i class="fa fa-unlock" aria-hidden="true"></i>Final Test
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-5">
                                <div class="index-logo">
                                    <a href="index.php" title="Global InfoTech">
                                        <img src="img/global.png" alt="img">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-10 d-none d-lg-block popup-over pull-right" align="right">
                                <div class="index-menu">
                                    <nav class="main-nav">
                                        <ul class="megamenu">
                                            <li >
                                                <a href="index.php">Home
                                                    <!-- <i class="fa fa-angle-down d-xs-none"></i> -->
                                                </a>
                                            </li>

                                            <li >
                                                <a href="about-us.php">About-Us
                                                    <!-- <i class="fa fa-angle-down d-xs-none"></i> -->
                                                </a>
                                            </li>
                                
                                            <li>
                                                <a href="courses.php">Courses
                                                    <!-- <i class="fa fa-angle-down d-xs-none"></i> -->
                                                </a>
                                            </li>

                                            <li>
                                                <a href="gallery.php">Gallery
                                                    <!-- <i class="fa fa-angle-down d-xs-none"></i> -->
                                                </a>
                                            </li>

                                            <li>
                                                <a href="certification.php">Certification</a>
                                            </li>

                                            <!-- <li class="dropdown">
                                                <a data-toggle="modal" data-target="#demo_test">Demo Test
                                                    <i class="fa fa-angle-down d-xs-none"></i>
                                                </a>  
                                               
                                            </li> -->

                                            <li>
                                                <a href="events.php">Events & Awards</a>
                                            </li>

                                            <li>
                                                <a href="placement.php">Placement</a>
                                            </li>

                                          <li >
                                                <a href="contact-us.php">Contact Us
                                                    <!-- <i class="fa fa-angle-down d-xs-none"></i> -->
                                                </a>
                                        </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-lg-2 col-7 icon-menu-sm">
                                <div class="hearder-icon home clearfix">

                                    <div class="header-block menu-block d-lg-none popup-over pull-right">
                                        <div data-toggle="dropdown" class="popup-title">
                                            <a href="#" title="user">
                                                <i class="fa fa-bars btn-menu"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

  <div class="modal" id="myModalForLogin">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                <form name="checkout" method="post" class="form-checkout text-center" action="includes/session.php" enctype="multipart/form-data" style=" padding-left: 2rem; padding-right: 2rem; padding-bottom: 1rem; padding-top: 1rem;">
         <div class="billing-fields">
          <div class="form-input">
           <div class="form-row">
             <p>Email &nbsp;
              <abbr class="required" title="required">*</abbr>
              </p>
            <span class="input-wrapper w-100 d-flex">
             <input type="email" name="email" class="input-text spr-form-input" placeholder="Email" required>
             <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
            </span>
           </div>

           <div class="form-row">
            <p>Password &nbsp;
              <abbr class="required" title="required">*</abbr>
              </p>
            <span class="input-wrapper w-100 d-flex">
             <input type="password" name="password" class="input-text spr-form-input" placeholder="Password" required>
             <!-- <i class="fa fa-unlock-alt" aria-hidden="true"></i> -->
            </span>

           </div >
           <button type="submit" name="login" class="btn-submit btn button-main m-1 border square font-weight-bolder" style="background-color: rgb(0, 86, 100); color: white;">Login</button>

           <!-- <button type="submit" name="login" style="background-color: rgb(0, 86, 100); color: white; " class="btn-submit btn button-main m-1 border square font-weight-bolder ">LogIn</button> -->
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
  
  <div class="modal" id="demo_test">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Demo Test</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form name="checkout" method="post" class="form-checkout text-center" action="includes/back.php" enctype="multipart/form-data" style="padding-left: 2rem; padding-right: 2rem; padding-bottom: 1rem; padding-top: 1rem;">
                                <div class="billing-fields">
                                    <div class="form-input">
                                        <div class="form-row">
                                            <b> <label for="name">Subject Name</label></b>
                                            <select name="subject_id" class="form-control" id="branch">
                                            <option value="" selected>Choose any..</option>
                                            <?php 
                                            $query = "SELECT * FROM `subject_master`";
                                            include 'config.php';
                                            $stmt=$conn->prepare($query);
                                            $stmt->execute();
                                            $result=$stmt->fetchAll();
                                            $conn=null;

                                            foreach ($result as $branch_row) {
                                            ?>
                                            <option value="<?php echo $branch_row['id'];?>" style="color: black;"><?php echo $branch_row['name'];?></option>
                                            <?php 
                                            } 
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <p>School / College Name
                                                <abbr class="required" title="required">*</abbr>
                                            </p>
                                            <span class="input-wrapper w-100">
                                                <input type="text" name="school" class="input-text spr-form-input" required>
                                                <!-- <input type="hidden" name="subject_id" value="<?php echo(1) ?> " class="input-text spr-form-input"> -->
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
                                        
                                         <button type="submit" name="demo_test" class="btn-submit btn button-main m-1 border square font-weight-bolder" style="background-color: rgb(0, 86, 100); color: white;">Start Test</button>
                                        
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
        </header>
