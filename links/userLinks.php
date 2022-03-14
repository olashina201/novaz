<?php 
 
include ("../cpanel/link.php");

$uml =  $_SESSION['US_mail'] ;

$qry  = mysqli_query($link, "SELECT * FROM user WHERE email = '$uml' ");
$dprw = mysqli_fetch_array($qry); 

?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light h2"><strong> Novazarc</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 " >
        <div class="image"  >
          <img src="../upreg/<?php echo $dprw['uimg'] ?>"alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION['US_ln']; ?></a>
        </div>
      </div>

     <?php 
       if($_SESSION['US_lv'] == 2)
          { ?>
          
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">          
          </li>
         
          
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="profile" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="add-listing" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Listings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ads" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                My Ads
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="payhistory" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Payment History
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logout
              </p>
            </a>
          </li>


          <li class="nav-item" style="display: none;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                My Referrals
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" >
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Tree View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Referrals</p>
                </a>
              </li>
              
            </ul>
          </li>
  
      </nav>
            <?php 
          }
       else
       { ?>
          
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">          
            </li>
           
            
            <li class="nav-item">
              <a href="dashboard" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
             <li class="nav-item">
              <a href="profile" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  My Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="add-listing" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                Listings
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="ads" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  My Ads
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="payhistory" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Payment History
                </p>
              </a>
            </li>
  
            <li class="nav-item">
              <a href="payhistory" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Expired Ads
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="logout" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
  
  
            <li class="nav-item" style="display: none;">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  My Referrals
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" >
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Tree View</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Referrals</p>
                  </a>
                </li>
                
              </ul>
            </li>
    
        </nav>
          <?php 
       }
       
     ?>
      

    </div>
    <!-- /.sidebar -->
  </aside>