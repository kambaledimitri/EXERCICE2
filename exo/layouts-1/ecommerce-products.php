<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:46 GMT -->
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
		
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Products</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
					<li class="breadcrumb-item active">Products</li>
				</ol></div></div>

        <section class="main-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
					 <div class="card-header card-default">
							<div class="float-right mt-10">
								<a href="javascript: void(0);" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Add New Product</a>
                            </div>
							Products
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
						
                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
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
                                            <td>00015</td>
                                            <td>Product 15</td>
                                            <td>Description for Product</td>
                                            <td>$ 116.20</td>
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
                    </div>
                </div>
            </div>

            

            <?php include('parts/footer.php')?>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End 	 						-->
		<!-- ============================================================== -->



        <!-- Common Plugins-->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable1').dataTable();
            });
        </script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:46 GMT -->
</html>