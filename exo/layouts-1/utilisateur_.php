
<?php 
  include 'bd/connection.php';
 
 $recuperation = $db->query('SELECT * FROM utilisateur');

 ?>
 <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:30 GMT -->
        <?php include('parts/head.php')?>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
        <?php include('parts/topbar.php')?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<?php include('parts/right.php')?>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <?php include('parts/navigation.php')?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			  <h2>Basic elements</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Publication</a></li>
					<li class="breadcrumb-item active">Utilisateur</li>		
				</ol>
			</div>
		</div>

        <section class="main-content">                            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                           
                            <div class="float-right mt-10">
								<a href="#" class="btn btn-success margin-r-5 btn-rounded box-shadow btn-icon"data-toggle="modal" data-target="#loginModal"><i class="fa fa-plus"></i> Add Member</a>
						    </div>
                        </div>
                                <div class="card-body">
                                <table id="datatable2" class="table table-striped dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>#</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Nom</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Nom d'utilsateur</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Email</strong>
                                            </th>                                            
                                            <th class="text-center">
                                                <strong>Telephone</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Mot de passe</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php while ($ligne = $recuperation->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td><?=$ligne['ID'];?></td>
                                            <td><?=$ligne['NOM'];?></td>
                                            <td><?=$ligne['USERNAME'];?></td>
                                            <td><?=$ligne['EMAIL'];?></td>
                                            <td><?=$ligne['TELEPHONE'];?></td>
                                            <td><?=(md5($ligne['TELEPHONE']));?></td>
                                            <td class="text-center">
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
               
            </div>
            

            <?php include('parts/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->
        <div class="modal fade" id="loginModal">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
					  </div>
					  <div class="modal-body">
                            <form  method="POST" action="TEAM.php" enctype="multipart/form-data">
                                
                            <label>Nom</label>
                            <label>Nom</label>
                                            <input type="text" placeholder="Nom" name="Nom">
                                            <label>Post-Nom</label>
                                            <input type="text" placeholder="Post-nom" name="Post_nom">
                                            <label>Nom d'utilisateur</label>
                                            <input type="text" placeholder="Username" name="Nomutilisateur">
                                            <label>Email address</label>
                                            <label>Email address</label>
                                            <input type="email" placeholder="Enter email" name="Email">
                                            <label>Telephone *</label>
                                            <input type="text" name="Telephone">
                                            <label>mot de passe</label>
                                            <input type="password" class="form-control" id="firstname" name="pwd">
                                          
                                           
                                            <label>IMAGE</label>
										<div class="fileinput-new" data-provides="fileinput">
										  <div class="fileinput-preview" data-trigger="fileinput" style="width: 100px; height:80px;"></div>
											<span class="btn btn-primary  btn-file">
												<span class="fileinput-new">Select</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" name="IMAGE">
											</span>
											<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-lg" value="ENREGISTRER" name="enregistrer">
										</div>
                                                
                                    </div>
										
									</div>
                                    <input type="submit" class="btn btn-primary btn-lg" value="ENREGISTRER" name="enregistrer">
                                        </div>
                                    </div>
                                
                            </form>
                            
                           
					  </div>
					</div>
				  </div>
				</div>

        <!--Common plugins-->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
       
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:30 GMT -->
</html>