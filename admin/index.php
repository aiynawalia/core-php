<?php
$dataempty=false;
include_once("adminheader.inc.php");
$sql="select * from adminsignup order by id desc";
$result=mysqli_query($db->con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($rows=mysqli_fetch_assoc($result))
	{
		$note_arr[]=$rows;
	}
}
else
{
	$dataempty=true;
}
?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		
	<div class="table-agile-info">
  <div class="panel panel-default">
	
					<!-- <div class="col-md-12 stats-info stats-last widget-shadow">
						<div class="stats-last-agile"> -->
                        <h2 class="text-center text-theme-color">Admin User List</h2>
						<div class="table-responsive">
							<table class="table  stats-table table-responsive">
								<thead>
									<tr>
										<th>S.NO</th>
										<th>CREATE ADMIN DATA &amp; TIME</th>
										<th>ADMIN NAME</th>
										<th>ADMIN EMAIL</th>
										<th>ADMIN MOBILE</th>
										
									</tr>
								</thead>
								<tbody>
								<?php
								if(!$dataempty)
								{

								
									$number=1;
									
									foreach($note_arr as $list){
									?>
									<tr>
										<th scope="row"><?php echo $number; ?></th>
										<td><?php echo $list['dt']; ?></td>
										<td><?php echo $list['adminname']; ?></td>
										<td><?php echo $list['adminemail']; ?></td>
										<td><?php echo $list['adminmobile']; ?></td>
										
									</tr>
									
									<?php
									$number++; }}
									else
									{
										
											echo '<div class="alert alert-danger text-center " role="alert">
										   There is NO any Admin User created yet!.
									  </div>';
									   
									}
									?>
								</tbody>
							</table>
								</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
</section>
 <?php include_once("adminfooter.inc.php") ?>