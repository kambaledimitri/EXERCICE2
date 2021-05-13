<div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <?php     
                             $service = $db->prepare('SELECT * FROM utilisateur WHERE ID=:ID');
                            $service->execute(array(
                            'ID' => $_SESSION['user']['ID']
                            ));  
                            $don=$service->fetchAll(PDO::FETCH_OBJ);
                            foreach($don as $s):  
                        ?>
                        <img alt="profile" class="margin-b-10" src="images/<?=$s->PHOTO;?>" width="80">
                        <?php endforeach ?>
                        <p class="lead margin-b-0 toggle-none"> 
                        <?php 
                                if ($_SESSION['user']['USERNAME'] !== array()) {
                                   $users = $_SESSION['user']['USERNAME'];
                                   echo "$users";
                                }
                             ?>
                             </p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <li class="nav-heading"><span>MAIN</span></li>
						<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Dashboard <span class="badge badge-pill badge-danger float-right mr-2">1.0</span></span></a></li>						
                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-th-large"></i> <span class="toggle-none">Widgets <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column " aria-expanded="false">
								
                                <li class="nav-item"><a class="nav-link" href="widgets-data.html">Widgets Data</a></li>
                            </ul>
                        </li>
						 <li class="nav-heading"><span>FORMS, TABLE & LAYOUTS</span></li>

                        <li class="nav-item">
                            <a  class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-cogs"></i> <span class="toggle-none">UI elements <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="ui-jquery-elements.html">Jquery UI</a></li>
								
                                <li class="nav-item"><a class="nav-link" href="ui-icons.html">Icons</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-cards.html">Cards</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-tabs.html">Tabs</a></li>
								
                                <li class="nav-item"><a class="nav-link" href="ui-tip-pop.html">Tooltip & Popovers</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-sweetalerts.html">Sweet Alters</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-alertify.html">Alertify Alters</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-modals.html">Modals</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-shopping-cart"></i> <span class="toggle-none">PUBLICATIONS<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="ARTICLE_.php">ARTICLE</a></li>
                                <li class="nav-item"><a class="nav-link" href="utilisateur_.php">UTILISATEUR</a></li>
                                <li class="nav-item"><a class="nav-link" href="ecommerce-products.html">All Products</a></li>
                               
                            </ul>
                        </li>						
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-file"></i> <span class="toggle-none">INSCRIPTIONS<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                               <li class="nav-item"><a class="nav-link" href="reservation.php">RESERVE</a></li>
							</ul>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                               <li class="nav-item"><a class="nav-link" href="ETUDIANT_.php">ETUDIANTS</a></li>
							</ul>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-table"></i> <span class="toggle-none">Tables <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                               <li class="nav-item"><a class="nav-link" href="table-data.php">Data Tables</a></li>
							</ul>
                        </li>
						
						
						<li class="nav-heading"><span>EXAMPLES</span></li>
												
						<li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-briefcase"></i> <span class="toggle-none">Corporate <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="corporate-add.html">Add Pages</a></li>
                                <li class="nav-item"><a class="nav-link" href="corporate-pages.html">All Pages</a></li>
                            </ul>
                        </li>
						
						
                        <li class="nav-heading"><span>OTHERS</span></li>
						
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-folder"></i> <span class="toggle-none">Sample Pages <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="page-blank.html">Blank Page</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-forget-password.html">Forget Password</a></li>
								 <li class="nav-item"><a class="nav-link" href="page-gallery.html">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-timeline.html">Timeline</a></li>
                             </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        