<?php 

	include 'include/header.php';
	include 'dbconnect.php';
 ?>


<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
 	<h1 class="h3 mb-0 text-gray-800">Brand List</h1>
 	<a href="item_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Brand</a>
 </div>


  <!-- DataTales Example -->
        <div class="card shadow mb-4">
        	<div class="card-header py-3">
        		<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        	</div>
        	<div class="card-body">
        		<div class="table-responsive">
        			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        				<thead>
        					<tr>
        						<th>#</th>
        						<th>Brand Name</th>
        						
        					
        						<th>Option</th>
        					</tr>
        				</thead>
        				<tfoot>
        					<tr>
        						<th>#</th>
        						<th>Brand Name</th>
        						
        						
        						<th>Option</th>
        					</tr>
        				</tfoot>
        				<tbody>

        					<?php 

        						$sql="SELECT * FROM brands";
        						$stmt = $pdo->prepare($sql);
        						$stmt ->execute();

        						// var_dump($stmt);

        						$brands=$stmt->fetchAll();
        						// var_dump($brands);

        						$j=1;
        						foreach ($brands as $brand) {
        							// var_dump($brands);     						

        					 ?>

        					 
        					 <tr>
        					 	
        					 	<td><?php echo $j++; ?></td>
        					 	<td><?php echo $brand['name']; ?></td>
        					 	
        					 	<td>
        					 		<a href="#" class="btn btn-outline-primary btn-sm">Detail</a>
        					 		<a href="#" class="btn btn-outline-warning btn-sm">Edit</a>
        					 		<a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
        					 	</td>
        					 </tr>

        					 <?php } ?>

        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>


 <?php 

 include 'include/footer.php';

  ?>