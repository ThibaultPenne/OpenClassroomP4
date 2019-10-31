
<?php $title = 'Les commentaires'; ?>


<!-- --------------------------- -->


<?php ob_start(); ?>


            <!-- ---------- La NavBar ---------- -->

            <?php ob_start(); ?>
                <li id="homeLinkLi" class="nav-item">
                    <a id="homeLink" class="nav-link" href="adminVue.php"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a id="chapLink" class="nav-link" href="chapsAdminVue.php"><i class="fas fa-copy mr-2"></i>Chapitres</a>
                </li>
                <li class="nav-item active">
                    <a id="comLink" class="nav-link" href="comsAdminVue.php"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
                </li>
            <?php $menuNavbarAdmin = ob_get_clean(); ?>


            <!-- -------------- Le traitement des commentaires -------------- -->


            <section id="dashBoard" class="pb-5">
                <div class="container-fluid">


                    <!-- ---------- Le Titre ---------- -->

                    <div id="dashboardTitle" class="py-5 m-auto">
                        <h1 class="">Le traitement des commentaires</h1>
                        <p class="col-md-8 col-lg-6 m-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. </p>
                    </div>

                    <!-- ---------- Les 3 Tableaux ---------- -->

                    <!-- 1 seule row -->
                    <div id="tablesComsPage" class="row">

                        <!-- Le Contenair des 3 Tableaux -->
                        <div id="tablesAdminContenair" class="col-sm-12 col-md-11 col-lg-9 mb-4 p-3 m-auto">

                            <!-- ------------- Menu des Tableaux -------------- -->

                            <div class="row menu-traitement m-auto">
                                <button class="mx-4 my-1 btn btn-warning tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnCours" aria-expanded="false" aria-controls="collapseEnCours">
                                    En attente
                                </button>
                                <button class="mx-4 my-1 btn btn-success tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnLigne" aria-expanded="false" aria-controls="collapseEnLigne">
                                    Validés
                                </button>
                                <button class="mx-4 my-1 btn btn-danger tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseCorbeille" aria-expanded="false" aria-controls="collapseExample">
                                    Corbeille
                                </button>
                            </div>

                            <!-- ------------- En attente -------------- -->

                            <div class="collapse colapse-forms" id="collapseEnCours">
                                <div class="card-body">
                                    <span class="badge badge-warning mb-2">Commentaires en attente de traitment (en ligne)</span>
                                    <table id="table001" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre</th>
                                                <th class="colByeBye3" scope="col">Pseudo</th>
                                                <th scope="col">Date</th>
                                                <th class="colByeBye2" scope="col">Heure</th>
                                                <th scope="col">Signalé</th>
                                                <th scope="col">Traitements</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Com #20 ----- -->

                                            <tr id="co20" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo20" data-parent="#table001">
                                                <th scope="row">co20</th>    
                                                <td>5</td>
                                                <td class="colByeBye3">Senku</td>
                                                <td>05/10/19</td>
                                                <td class="colByeBye2" class="colByeBye">15:10</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Valider</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo20" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Hahaaaa ne t'inquiète pas Byakuya, on va surement bientôt comprendre le pourquoi du comment !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #19 ----- -->

                                            <tr id="co19" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo19" data-parent="#table001">
                                                <th scope="row">co19</th>
                                                <td>5</td>
                                                <td class="colByeBye3">Byakuya</td>
                                                <td>05/10/19</td>
                                                <td class="colByeBye2">10:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Valider</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo19" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Je reste pour par par un peu plus reservé que Senku mais j'attend la suite avec impatience.
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #18 ----- -->

                                            <tr id="co18" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo18" data-parent="#table001">
                                                <th scope="row">co18</th>    
                                                <td>5</td>
                                                <td class="colByeBye3">Senku</td>
                                                <td>04/10/19</td>
                                                <td class="colByeBye2">20:32</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Valider</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo18" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        5e chapitre, toujours fidèle au poste et ce n'est pas prêt de changer ! Incroyable, merci pour ce chapitre !
                                                    </div>
                                                </td>
                                            </tr>

                                             <!-- ------ Com #17 ----- -->

                                            <tr id="co17" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo17" data-parent="#table001">
                                                <th scope="row">co17</th>
                                                <td>5</td>
                                                <td class="colByeBye3">Kevin</td>
                                                <td>04/10/19</td>
                                                <td class="colByeBye2">19:13</td>
                                                <td>Visiteur</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Valider</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo17" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Euu encore une histoire de merde écrite par un conard de merde...
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="container fermer-btn">
                                        <button type="button" class="btn" data-toggle="collapse" data-target="#collapseEnCours">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ------------- Validés -------------- -->

                            <div class="collapse colapse-forms" id="collapseEnLigne">
                                <div class="card-body">
                                    <span class="badge badge-success mb-2">Commentaires validés</span>
                                    <table id="table002" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre #</th>
                                                <th class="colByeBye3" scope="col">Pseudo</th>
                                                <th scope="col">Date</th>
                                                <th class="colByeBye2" scope="col">Heure</th>
                                                <th scope="col">Signalé</th>
                                                <th scope="col">Traitement</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Com #15 ----- -->

                                            <tr id="co15" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo15" data-parent="#table001">
                                                <th scope="row">co15</th>
                                                <td>ch04</td>
                                                <td class="colByeBye3">Asta</td>
                                                <td>28/09/19</td>
                                                <td class="colByeBye2">19:10</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo15" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Jean Forteroche épouse moi !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #14 ----- -->

                                            <tr id="co14" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo14" data-parent="#table001">
                                                <th scope="row">co14</th>    
                                                <td>ch04</td>
                                                <td class="colByeBye3">Petit nuage</td>
                                                <td>27/09/19</td>
                                                <td class="colByeBye2">22:45</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo14" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Mouais bof bof quand même...
                                                    </div>
                                                </td>
                                            </tr>

                                             <!-- ------ Com #13 ----- -->

                                            <tr id="co13" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo13" data-parent="#table001">
                                                <th scope="row">co13</th>
                                                <td>ch04</td>
                                                <td class="colByeBye3">Senku</td>
                                                <td>27/09/19</td>
                                                <td class="colByeBye2">18:39</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo13" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Okay là, on passe à un autre level !!!
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #11 ----- -->

                                            <tr id="co11" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo11" data-parent="#table001">
                                                <th scope="row">co11</th>    
                                                <td>ch03</td>
                                                <td class="colByeBye3">Bruce Lee</td>
                                                <td>23/09/19</td>
                                                <td class="colByeBye2">20:33</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo11" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Le calme avant la tempête. Méfiez vous de l'eau qui dort.
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #10 ----- -->

                                            <tr id="co10" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo10" data-parent="#table001">
                                                <th scope="row">co10</th>
                                                <td>ch03</td>
                                                <td class="colByeBye3">Aaliyah</td>
                                                <td>21/09/19</td>
                                                <td class="colByeBye2">09:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo10" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        J'aime profondément la douceur qui ressort du personnage féminin principal.
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #09 ----- -->

                                            <tr id="co09" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo09" data-parent="#table001">
                                                <th scope="row">co09</th>    
                                                <td>ch03</td>
                                                <td class="colByeBye3">Senku</td>
                                                <td>20/09/19</td>
                                                <td class="colByeBye2">18:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo09" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Encore moi ! Le personnage secondaire m'intringue tellement ! Merci pour le chapitre !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #07 ----- -->

                                            <tr id="co07" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo07" data-parent="#table001">
                                                <th scope="row">co07</th>
                                                <td>ch02</td>
                                                <td class="colByeBye3">Yoshimitsu</td>
                                                <td>18/09/19</td>
                                                <td class="colByeBye2">11:55</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo07" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Je vous remercie humblement pour ce chapitre.
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- ------ Com #06 ----- -->

                                            <tr id="co06" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo06" data-parent="#table001">
                                                <th scope="row">co06</th>    
                                                <td>ch02</td>
                                                <td class="colByeBye3">Yozuria</td>
                                                <td>15/09/19</td>
                                                <td class="colByeBye2">20:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo06" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Heheee trop mignon le renard !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #05 ----- -->

                                            <tr id="co05" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo05" data-parent="#table001">
                                                <th scope="row">co05</th>
                                                <td>ch02</td>
                                                <td class="colByeBye3">Senku</td>
                                                <td>13/09/19</td>
                                                <td class="colByeBye2">18:05</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo05" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        De retour pour ce 2e chapitre, je me pose beaucoup de questions ! Vivement la suite !
                                                        Thanks pour le chapitre !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #03 ----- -->

                                            <tr id="co03" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo03" data-parent="#table001">
                                                <th scope="row">co03</th>    
                                                <td>ch01</td>
                                                <td class="colByeBye3">Senku</td>
                                                <td>11/09/19</td>
                                                <td class="colByeBye2">21:21</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo03" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Je pense que l'image n'aide pas forcément à l'immersion mais bon. Super chapitre, merci !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #02 ----- -->

                                            <tr id="co02" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo02" data-parent="#table001">
                                                <th scope="row">co02</th>
                                                <td>ch01</td>
                                                <td class="colByeBye3">Itachi</td>
                                                <td>07/09/19</td>
                                                <td class="colByeBye2">12:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo02" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Hehehe ce roman s'annone incroyable ! Super idée !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #01 ----- -->

                                            <tr id="co01" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo01" data-parent="#table001">
                                                <th scope="row">co01</th>    
                                                <td>ch01</td>
                                                <td class="colByeBye3">Inozuka</td>
                                                <td>06/09/19</td>
                                                <td class="colByeBye2">19:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo01" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Super merci !
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="container fermer-btn">
                                        <button type="button" class="btn" data-toggle="collapse" data-target="#collapseEnLigne">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ------------- Supprimés -------------- -->

                            <div class="collapse colapse-forms" id="collapseCorbeille">
                                <div class="card-body">
                                    <span class="badge badge-danger mb-2">Commentaires supprimés</span>
                                    <span id="deleteAllBtn" type="button" class="badge badge-danger ml-3 mb-2">Vider tout le tableau</span>
                                    <table id="table003" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre #</th>
                                                <th class="colByeBye3" scope="col">Pseudo</th>
                                                <th scope="col">Date</th>
                                                <th class="colByeBye2" scope="col">Heure</th>
                                                <th scope="col">Signalé</th>
                                                <th scope="col">Traitement</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Com #16 ----- -->

                                            <tr id="co16" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo16" data-parent="#table001">
                                                <th scope="row">co16</th>    
                                                <td>ch04</td>
                                                <td class="colByeBye3">Gros Fessier</td>
                                                <td>29/09/19</td>
                                                <td class="colByeBye2">02:20</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Restaurer</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo16" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Je me sens seule dans mon lit ce soir, rejoignez moi sur seuledansmonlit.com ...
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- ------ Com #12 ----- -->

                                            <tr id="co12" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo12" data-parent="#table001">
                                                <th scope="row">co12</th>    
                                                <td>ch03</td>
                                                <td class="colByeBye3">Red Head</td>
                                                <td>24/09/19</td>
                                                <td class="colByeBye2">22:14</td>
                                                <td>Visiteur</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Restaurer</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>                                        
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo12" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        Va te faire enculer Jean Forteroche !!!
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #08 ----- -->

                                            <tr id="co08" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo08" data-parent="#table001">
                                                <th scope="row">co08</th>
                                                <td>ch02</td>
                                                <td class="colByeBye3">Hitler</td>
                                                <td>15/09/19</td>
                                                <td class="colByeBye2">23:22</td>
                                                <td>Visiteur</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Restaurer</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo08" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        J'aime que les blondes et les blonds !
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Com #04 ----- -->

                                            <tr id="co04" class="tabGroup2 tabGroups" data-toggle="collapse" data-target="#demo04" data-parent="#table001">
                                                <th scope="row">co04</th>    
                                                <td>ch01</td>
                                                <td class="colByeBye3">Eegfzg</td>
                                                <td>10/09/19</td>
                                                <td class="colByeBye2">02:30</td>
                                                <td>Auto</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Restaurer</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Ligne cachée -->
                                            <tr id="demo04" class="collapse"> 
                                                <td colspan="7" class="hiddenRow demos">
                                                    <div class="card">
                                                        sldknflzenflkzenl ezkjfkez ejzfpj ezf e ipejf ezp epizjf 
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="container fermer-btn">
                                        <button type="button" class="btn" data-toggle="collapse" data-target="#collapseCorbeille">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ----------------------------------- -->

                        </div> <!-- Fin du Contenair des 3 Tableaux -->

                    </div> <!-- Fin de la row -->


                    <!-- ------------------------------------------------------------------- -->

                </div> <!-- Fin du container-fluid -->

            </section> <!-- Fin de la section Dashboard -->

           
<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>





