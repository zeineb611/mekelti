     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
             <div class="sidebar-brand-icon rotate-n-15">
                 <i class="fas fa-laugh-wink"></i>
             </div>
             <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="index.php">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Interface
         </div>

        
         <!--Go Gestion blog.php-->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="true" aria-controls="collapseBlogs">
                 <i class=""></i>
                 <span>Blogs</span>
             </a>
             <div id="collapseBlogs" class="collapse" aria-labelledby="headingBlogs" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Blogs:</h6>
                     <a class="collapse-item" href="AjouterArticle.php">Ajouter Article</a>
                     <a class="collapse-item" href="editerarticle.php">Editer Article</a>
                     <a class="collapse-item" href="consultercommentaires.php">Consulter commentaires</a>
                     <a class="collapse-item" href="statistiquescomments.php">Statistiques</a>
                     <a class="collapse-item" href="statistiqueslikes.php">Statistiques Likes</a>
                   
                 </div>
             </div>
         </li>

         <!--//Go Gestion blog.php-->


         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Addons
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                 <i class="fas fa-fw fa-folder"></i>
                 <span>Pages</span>
             </a>
             <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Login Screens:</h6>
                     <a class="collapse-item" href="login.html">Login</a>
                     <a class="collapse-item" href="register.php">Register</a>
                     <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                     <!-- <div class="collapse-divider"></div>
                     <h6 class="collapse-header">Other Pages:</h6>
                     <a class="collapse-item" href="404.html"> Blogs</a>
                     <a class="collapse-item" href="blank.html">Events</a>
                     <a class="collapse-item" href="blank.html">Users</a>
                     <a class="collapse-item" href="blank.html">Delivery</a> -->


                 </div>
             </div>
         </li>

         <!-- Nav Item - Charts -->
         <!--  <li class="nav-item">
             <a class="nav-link" href="charts.php">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Charts</span></a>
         </li> -->

         <!-- Nav Item - Tables -->
         <!-- <li class="nav-item">
             <a class="nav-link" href="tables.php">
                 <i class="fas fa-fw fa-table"></i>
                 <span>Tables</span></a>
         </li> -->

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

         <!-- Sidebar Message -->
         <!--  <div class="sidebar-card">
             <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
             <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
             <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
         </div>
          -->
     </ul>
     <!-- End of Sidebar -->