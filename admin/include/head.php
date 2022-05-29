 <?php session_start();
if ($_SESSION["exist_admin"]!="oui") {
      header("location:/FPO-fifel/includes/login.php");
      exit();}
 ?>
      <header class="header" id="header">
        
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            

            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">   
                <div>
                    <a href="/FPO-fifel/index.php" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">FPO-FIFEL</span>
                    </a>

                    <div class="nav__list">
                        
                        
                        <a href="/FPO-fifel/admin/pages/lister/lister_dépenses.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Gestion des fournisseur</span>
                        </a>
                        
                        <a href="/FPO-fifel/admin/pages/lister/lister_catégorie.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Gestion des catégories</span>
                        </a>

                        <a href="http://localhost/FPO-fifel/admin/pages/lister/lister_entrer.php" class="nav__link">
                            <i class='bx bxl-foursquare nav__icon' ></i>
                            <span class="nav__name"> Gestion des produits</span>
                        </a>

                        <a href="/FPO-fifel/admin/pages/lister/lister_sortie.php" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Gestion des Sortis</span>
                        </a>

                        <a href="/FPO-fifel/admin/pages/lister/lister_client.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Gestion des clients</span>
                        </a>

                        <a href="/FPO-fifel/admin/pages/lister/lister_utilisateur.php" class="nav__link">
                            <i class='bx bx-upside-down nav__icon' ></i>
                            <span class="nav__name">Gestion des administrateur </span>
                        </a>

                        <a href="/FPO-fifel/admin/pages/lister/lister_défectueux.php" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Gestion des produits <br> défectueux</span>
                        </a>

                    </div>
                </div>

                <a href="/FPO-fifel/admin/include/logout.php"class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Déconnexion</span>
                </a>
            </nav>
        </div>
  