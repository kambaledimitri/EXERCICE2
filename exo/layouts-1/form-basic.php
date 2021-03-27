<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:30 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
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
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Form</a></li>
					<li class="breadcrumb-item active">Basic elements</li>		
				</ol>
			</div>
		</div>

        <section class="main-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                       
                        <div class="card-body">
                            <form method="POST" action="layouts-1/Etudiant.php">
                           
                                   <div class="form-group">
										<label>File Input</label>
										<div class="fileinput-new" data-provides="fileinput">
										  <div class="fileinput-preview" data-trigger="fileinput" style="width: 150px; height:100px;"></div>
											<span class="btn btn-primary  btn-file">
												<span class="fileinput-new">Select</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" id="image" name="PHOTO">
											</span>
											<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
		
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="card">
                       
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            <label>Nom</label>
                                            <input type="text" placeholder="Nom" class="form-control">
                                            <label>Post-Nom</label>
                                            <input type="text" placeholder="Post-non" class="form-control">
                                            <label>Prenom</label>
                                            <input type="text" placeholder="Prenom" class="form-control">
                                            <label>Sexe</label>
                                            <select class="form-control" type="Text" name="Sexe">
                                                <option >HOMME</option>
                                                <option >FEMME</option>
                                            </select>
                                            
                                        </div>
                                       
                                            
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                            <label>Email address</label>
                                            <input type="email" placeholder="Enter email" class="form-control"name="email">
                                            <label>Telephone *</label>
                                            <input type="text" class="form-control" name="Telephone">
                                            <label>Promotion</label>
                                            <select class="form-control" type="Text" name="Promotion">
                                                <option >PREMIERE</option>
                                                <option >DEUXIEME</option>
                                                <option >TROISIEME</option>
                                                <option >QUATRIEME</option>
                                                <option >CINQIEME</option>
                                                <option >SIXIEME</option>
                                            </select>
                                            <label>Section</label>
                                            <select class="form-control" type="Text" name="Section">
                                                <option >LATIN-PHILO</option>
                                                <option >MATH-PHISIQUE</option>
                                                <option >BIOLOGIE-CHIMIE</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
                                <button type="submit" class="btn btn-sm btn-primary">ENREGISTRER</button>
                                <div class="card-body">
                                <table id="datatable2" class="table table-striped dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Name</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Description</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Price</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Status</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Added</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Action</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>Product 1</td>
                                            <td>Description for Product</td>
                                            <td>$ 12.20</td>
                                            <td class="text-center">
                                                <span class="label label-success">Stock</span>
                                            </td>
                                            <td>15/07/2018</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
												<button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
												<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                       
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