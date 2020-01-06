<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GlobalInfotech - Gallery</title>
      <?php include'gallery-head.php'?>
   </head>
   <body>
      <div class="super_container">
         <!-- Header -->
         <?php include'nav.php'?>
         <!-- Menu -->
         <div class="menu_container menu_mm">
            <!-- Menu Close Button -->
            <div class="menu_close_container">
               <div class="menu_close"></div>
            </div>
            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
               <div class="menu menu_mm">
                  <ul class="menu_list menu_mm">
                     <li class="menu_item menu_mm"><a href="index.html">Home</a></li>
                     <li class="menu_item menu_mm"><a href="#">About us</a></li>
                     <li class="menu_item menu_mm"><a href="#">Courses</a></li>
                     <li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
                     <li class="menu_item menu_mm"><a href="news.html">News</a></li>
                     <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
                  </ul>
                  <!-- Menu Social -->
                  <div class="menu_social_container menu_mm">
                     <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                     </ul>
                  </div>
                  <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
               </div>
            </div>
         </div>
         <!-- Home -->
         <div class="home">
            <div class="home_background_container prlx_parent">
               <div class="home_background prlx" style="background-image:url(images/banner3.jpg)"></div>
            </div>
            <div class="home_content">
               <h1> Our gallery</h1>
            </div>
         </div>
         <section class="section-padding-100-0">
      <div class="container p-3">



<div class="fg-gallery">
    <img src="images/course/1.jpeg" alt="">
    <img src="images/course/3.jpeg" alt="">
    <img src="images/course/4.png" alt="">
    <img src="images/course/5.jpeg" alt="">
    <img src="images/course/10.jpg" alt="">
    <img src="images/course/6.jpg" alt="">
    <img src="images/course/7.jpg" alt="">
    <img src="images/course/8.png" alt="">
    <img src="images/course/9.png" alt="">
    
    
   
</div>

</div>

</section>


         <!-- Popular -->
         
         <!-- Footer -->
         <?php include'footer.php'?>
      </div>
      <script>
var a = new FgGallery('.fg-gallery', {
    cols: 4,
    style: {
        border: '10px solid #fff',
        height: '180px',
        borderRadius: '5px',
        boxShadow: '0 2px 10px -5px #858585',
    }
})

var a = new FgGallery('.ns', {
    cols: 3,
    style: {
        border: '0 solid #fff',
        height: '240px',
        borderRadius: '5px',
    }
})
    </script>
     
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="styles/bootstrap4/popper.js"></script>
      <script src="styles/bootstrap4/bootstrap.min.js"></script>
      <script src="plugins/greensock/TweenMax.min.js"></script>
      <script src="plugins/greensock/TimelineMax.min.js"></script>
      <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
      <script src="plugins/greensock/animation.gsap.min.js"></script>
      <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
      <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
      <script src="plugins/easing/easing.js"></script>
      <script src="js/courses_custom.js"></script>
   </body>
</html>