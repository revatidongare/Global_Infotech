<?php 
    
    if (isset($_GET['f'])) {
            if($_GET['f'] == 101){
            echo '<script> alert(" This test is taken try another..")</script>';
            }        
    }
 ?>
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
                            <h1 class="text-center">Final Tests</h1>
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

             <section class="container">
                
                 <div class="section meet-our-team">
                    <div class="container">
                        <div class="title text-center">
                            <div class="page-title color">
                                
                                <div class="title title-icon">
                                    <h2 class="title-h2">Test your knowledge </h2>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="text-align: center;">
                    <div id="review" class="col-sm-8">
                                <form method="post" action="includes/back.php" class="new-review-form">
                                    <fieldset class="spr-form-contact">
                                        <div class="spr-form-contact-name">
                                           <select name="subject_id" class="form-control" required>
                                            <option value="" selected>Select Subject</option>
                                            <?php 
                                            $query = "SELECT * FROM `subject_master`";
                                            include 'includes/config.php';
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
                                        <br>
                                         <div class="spr-form-contact-name">
                                           <select name="school" class="form-control" required>
                                            <option value="" selected>Select School</option>
                                            <?php 
                                            $query1 = "SELECT * FROM `key_table`";
                                            include 'includes/config.php';
                                            $stmt1=$conn->prepare($query1);
                                            $stmt1->execute();
                                            $result1=$stmt1->fetchAll();
                                            $conn=null;

                                            foreach ($result1 as $row) {
                                            ?>
                                            <option value="<?php echo $row['school'];?>" style="color: black;"><?php echo $row['school'];?></option>
                                            <?php 
                                            } 
                                            ?>
                                            </select>
                                        </div>
                                            <br>                                  
                                        <div class="spr-form-contact-name">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="spr-form-contact-email">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="spr-form-contact-phone">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" name="phone" placeholder="Phone" required>
                                        </div>
                                        <div class="spr-form-contact-subject">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" name="test_key" placeholder="Test Key" required>
                                        </div>
                                    </fieldset>


                                    <div class="submit">
                                        <button class="add-to-cart" type="submit" name="final_test">
                                            <span class="btn view button-main">Submit Now</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                </div>
                        
                    </div>
                </div>
            </section>
           
            </div>

        </main>
        <br><br>
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