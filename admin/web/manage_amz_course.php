<?php
include_once('header.php')
?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
   include_once('navbar.php') 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
			<div class="col-12 mr-auto">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">Manage Amazon KDP Course</h4>
							<a href="#" data-toggle="modal" data-target="#staticBackdrop" class="btn popup-with-form btn-primary"><i class="fa fa-plus-circle"></i> New Amazon Course</a>
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-12">          
			<div class="col-12">
				  <div class="box">
					<div class="box-body">
					<div class="table-responsive">
							  <table id="example2" class="table mb-0 w-p100">
								<thead>
									<tr>
										<th>----</th>
										<th>Amazon Tittle</th>
										<th>Description</th>
										<th>Price</th>
                                        <th>Course URL</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php
								$sql = $conn->query("SELECT * FROM amazon");
								if($sql->num_rows>0){
											$num=1;
								while($row=$sql->fetch_assoc()){     
								?>  
								<tbody>
									<tr>
										<td><?php echo $num++;?></td>
										<td><?php echo $row ['amazon_title'] ?></td>
										<td><?php   echo $row ['description'] ?></td>
										<td>&#8358;<?php echo number_format($row['prices'],2) ?></td>
                                        <td><?php echo $row ['url'] ?></td>
										<td>
										<div class="dropdown no-arrow">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a href="view_company.php?id=<?php echo $row['course_id'];?>&status=update" class="btn btn-info btn-circle btn-flat">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="delete.php?id=<?=  $row['course_id']; ?>&status=delete" class="btn btn-del btn-danger btn-circle btn-flat" id="del-warning">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        </div>
                                    </div>
										</td>
									</tr>	
									
								</tbody>			  
								<?php }}else { ?>
								<tr>
									<td colspan='6'>
										<span style="color:red;"> No result found!!</span>
									</td>
								</tr>
								<?php } ?>

							</table>
							</div>              
					</div>
				  </div>
				</div>

			</div>
			<!-- /.col-->
		  </div>
		  <!-- ./row -->
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><h4 class="box-title">Create New Amazon Course<br>
				  </h4></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<!-- /.box-header -->
				<div class="box-body">
				  <form method="POST" action="action.php">
					  <div class="form-group">
							<label class="control-label" for="inputEmail">Amazon title</label>
							<input type="text" class="form-control"  name="amazon_title" placeholder="Amazon Market" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Course Price</label>
							<input type="number" class="form-control"  name="prices" placeholder="N 30,000.00" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Course Url</label>
							<input type="url" class="form-control"  name="url" placeholder="https://expertnaire.com" required="">
						</div>
					<label class="control-label" for="inputEmail">Amazon Description</label>
					<textarea class="textarea" id="editor1" name="description"  placeholder="Place Your Description here"
							  style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name="create_amz_course" class="btn btn-primary">Create</button>
					</div>
				  </form>
			  </div>
      </div>
     
    </div>
  </div>
</div>
  <!-- Control Sidebar -->
 
<?php  
include_once('scripts.php')
?>
	
</body>
</html>

