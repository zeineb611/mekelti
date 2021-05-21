<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mekelti<sup></sup></div>
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

    

    <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i class=""></i>
            <span>Admins</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gérer Les admins</h6>
                <a class="collapse-item" href="ajouterAdmin.php">Ajouter un Admin</a>
                <a class="collapse-item" href="afficherAdmin.php">Afficher Les Admins</a>
            </div>
        </div>



        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClients" aria-expanded="true" aria-controls="collapseClients">
            <i class=""></i>
            <span>Clients</span>
        </a>
        <div id="collapseClients" class="collapse" aria-labelledby="headingClients" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gérer les clients:</h6>
                <a class="collapse-item" href="ajouterClient.php">Ajouter un Client</a>
                <a class="collapse-item" href="afficherClients.php">Afficher Les clients</a>

            </div>
        </div>

    </li>

    <li class="nav-item">

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLivraison" aria-expanded="true" aria-controls="collapseLivraison">
    <i class=""></i>
    <span>Livraisons</span>
</a>
<div id="collapseLivraison" class="collapse" aria-labelledby="headingLivraison" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Gérer Les livraisons</h6>
        <a class="collapse-item" href="ajouterLivraison.php">Ajouter une livraison</a>
        <a class="collapse-item" href="afficherLivraisons.php">Afficher les livraisons</a>
    </div>
</div> 


<li class="nav-item">

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCommande" aria-expanded="true" aria-controls="collapseCommande">
    <i class=""></i>
    <span>Commandes</span>
</a>
<div id="collapseCommande" class="collapse" aria-labelledby="headingCommande" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Gérer Les Commandes</h6>
        <a class="collapse-item" href="ajouterCommande.php">Ajouter une Commande</a>
        <a class="collapse-item" href="afficherCommandes.php">Afficher les Commandes</a>
    </div>
</div>


    <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseEvents">
                 <i class=""></i>
                 <span>Événements</span>
             </a>
             <div id="collapseEvents" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Events:</h6>
                     <a class="collapse-item" href="AjouterEvent.php">Ajouter Event</a>
                     <a class="collapse-item" href="ModifierEvent.php">Modifier Event</a>

                 </div>
             </div>
         </li>

         <!--//Go Gestion event.php-->
         <!--Go Gestion lieus.php-->

         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLieus" aria-expanded="true" aria-controls="collapseLieus">
                 <i class=""></i>
                 <span>Lieus</span>
             </a>
             <div id="collapseLieus" class="collapse" aria-labelledby="headingLieus" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom lieus:</h6>
                     <a class="collapse-item" href="AjouterLieu.php">Ajouter Lieu</a>
                     <a class="collapse-item" href="ModifierLieu.php">Modifier Lieu</a>

                 </div>
             </div>
     </li>
  

     <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecommentaire" aria-expanded="true" aria-controls="collapsecommentaire">
                 <i class=""></i>
                 <span>Commentaire</span>
             </a>
             <div id="collapsecommentaire" class="collapse" aria-labelledby="headingcommentaire" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom commentaire:</h6>
                     <a class="collapse-item" href="consultercommentaires.php">Satistique commentaire</a>
                     <a class="collapse-item" href="AjouterArticle.php">Ajouter commentaire</a>

                 </div>
             </div>
     </li>
     <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselike" aria-expanded="true" aria-controls="collapselike">
                 <i class=""></i>
                 <span>like</span>
             </a>
             <div id="collapselike" class="collapse" aria-labelledby="headinglike" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom like:</h6>
                     <a class="collapse-item" href="statistiqueslikes.php">Satistique like</a>
                   

                 </div>
             </div>
     </li>

     <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproduit" aria-expanded="true" aria-controls="collapseproduit">
                 <i class=""></i>
                 <span>Produit</span>
             </a>
             <div id="collapseproduit" class="collapse" aria-labelledby="headingproduit" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom like:</h6>
                     <a class="collapse-item" href="ajouterproduit2.php">afficher produit</a>
                   

                 </div>
             </div>
     </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>
<!-- End of Sidebar -->
