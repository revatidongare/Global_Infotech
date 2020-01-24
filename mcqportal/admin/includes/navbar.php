<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixedtopbar">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link barsnone rounded-circle mr-3">
            <i class="fa fa-bars colortheme"></i>
          </button>

           <a class="btn btn-link rounded-circle mr-3 barsshow colortheme" href="manage_products.php">
            Home
          </a>
          <a class="btn btn-link rounded-circle mr-3 barsshow colortheme" >Registered Users</a>
          <span style="color:black; font-style:bold;"><?php 
           $q = "SELECT COUNT(`email`) AS `count` FROM `user`";
            include 'config.php';
            $stmt=$conn->prepare($q);
            $stmt->execute();
            $row = $stmt->fetch();
            echo $row['count'];
            $conn=null;
           ?>
          </span>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">  
            
      
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item">
              <a class="nav-link" href="manage_products.php">
                <span class="mr-2 d-lg-inline text-gray-600 small">ADMIN</span>
              </a>
            </li>

          </ul>

        </nav>