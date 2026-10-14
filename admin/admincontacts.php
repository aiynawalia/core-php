<?php

$dataempty=false;
include_once("adminheader.inc.php");
$sql="select * from contact order by id desc";
$res=mysqli_query($db->con,$sql);
 if(mysqli_num_rows($res)>0)
{
	while($rows=mysqli_fetch_assoc($res))
	{
		$con_arr[]=$rows;
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
		
			
	
					<div class="col-md-12 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
                        <h2 class="text-center text-theme-color mm ">Contacted People List</h2>
							<div class="">
						<div class=" table-responsive">
							
							<table class="table stats-table ">
								<thead>
									<tr>
                                        <th>S.NO</th>
                                        <th>Date &amp; Time</th>
                                        <th>Name</th>
                                        <th>Message</th>
										<th>Email</th>
                                        <th>City</th>
                                        <th>Mobile</th>
									</tr>
								</thead>
								<tbody>
                                    <?php 
									if(!$dataempty)
								{
                                    $number=1;
                                    foreach($con_arr as $list){
                                    ?>
									<tr>
                                 
                                    <th scope="row"><?php echo $number; ?></th>
										<th scope="row"><?php echo $list['dt']; ?></th>
                                        <td><?php echo $list['con_name']; ?></td>
                                        <td><?php echo $list['msg']; ?></td>
                                        <td><?php echo $list['email']; ?></td>
                                        <td><?php echo $list['city']; ?></td>
                                        <td><?php echo $list['mobile']; ?></td>
										<!--<td><span class="label label-success">In progress</span></td>
										<td><h5>85% <i class="fa fa-level-up"></i></h5></td>-->
									</tr>
									
                                    <?php $number++;
                                    }}
									else
									{
										
											echo '<div class="alert alert-danger text-center " role="alert">
										   Conatcted people list is empty!.
									  </div>';
									   
									}
                                    ?>
								</tbody>
							</table>
								</div></div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
</section>
 <?php include_once("adminfooter.inc.php") ?>