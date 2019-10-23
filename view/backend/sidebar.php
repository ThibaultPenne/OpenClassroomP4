

<!-- ------------------------ La SideBar ---------------------------- -->

<nav id="sidebar">

    <div class="sidebar-header">
        <div class="sidebar-brand-icon">
            <i id="iconSmileAdmin" class="fas fa-laugh-wink"></i>
        </div>
        <h3>JEAN <sup>FORTEROCHE</sup></h3>
        <strong>JF</strong>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a id="adminDropdown" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-home"></i>
                Admin
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="adminVue.php">Home</a>           
                </li>
                <li>
                    <a href="chapsAdminVue.php">Chapitres</a>
                    
                </li>
                <li>
                    <a href="comsAdminVue.php">Commentaires</a>
                    
                </li>
            </ul>
        </li>
        <li>
            <a id="blogDropdown" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-book"></i>
                Blog
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li> <a href="../frontend/indexVue.php">Accueil</a></li>
                <li><a href="../frontend/chapitresVue.php">Chapitres</a></li>
            </ul>
        </li>
    </ul>
    <div id="reduireBtnContenair" class="container">
        <button data-toggle="collapse" type="button" id="sidebarCollapse" class="btn btn-info">
            <strong><i class="fas fa-arrow-alt-circle-right"></i></strong>
            <span><i class="fas fa-arrow-alt-circle-left"></i>Réduire</span>
        </button>
    </div>
</nav>