 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-chevron-double-left"></span>
        </button>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="./assets/images/logo-mini.svg" alt="logo" />
          </a>
        </div>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-logout d-none d-md-block mr-3">
            <a class="nav-link" href="#">Status</a>
          </li>

          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-home-circle"></i>
            </a>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>

      </div>
  </nav>
  
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
          <div class="header-left">
         <a href="../add_member.php">   <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Nos tuniques </button></a>
         <a href="../librairie.php">   <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Nos Vestes </button></a>
          </div>
          <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
            <div class="d-flex align-items-center">
              <a href="#">
                <p class="m-0 pr-3">Admin panel</p>
              </a>
              <a class="pl-3 mr-4" href="#">
                <p class="m-0">Baruvi</p>
              </a>
            </div>
            <a href="../add_on_lib.php"> 
              <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                <i class="mdi mdi-plus-circle"></i> Ajouter Veste 
              </button> 
            </a>
          </div>
    
        
<?php require "../cores/db.php"; ?>
        
        