<?php
$dataempty=false;
include_once("adminheader.inc.php");
$sql="select * from adminevent order by id desc";
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
		
			
	
					<div class="col-md-12 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
							<div class="text-right">
                        <a href="adminaddevents.php" class="btn btn-primary " >
							ADD EVENT</a>
                        </div>
                        <h2 class="text-center text-theme-color" style="padding-bottom:30px;">EVENTS</h2>
						<div class="table-responsive">
							<table class="table stats-table ">
								<thead>
									<tr>
										<th>S.NO</th>
										<th>Date </th>
										<th> Title</th>
                                        <th> Image </th>
										<th> Description </th>
										<th>EDIT</th>
										<th>DELETE</th>
										
									</tr>
								</thead>
								<?php
								
								
								?>
								<tbody>
								<?php
								if(!$dataempty)
								{

								
									$number=1;
									
									foreach($note_arr as $list){
									?>
									<tr valign="middle">
										<th scope="row"><?php echo $number; ?></th>
										<td><?php
										$date=$list['dt'];
										
										echo date("d-M-Y",strtotime($date));?></td>
										<td><?php echo $list['title'];?></td>
										<!--<img style="height:100px;"  src="<?php echo $list['image'] ?>" class="w-100 img-fluid " alt="">-->
										<td>
										<?php if($list['image'] !='')
										{
											echo '<img style="height:100px;" src="../assets/uploads/'. $list['image'].'" class="img-fluid"/>';
										}
										else
										{
											
										} ?>
										</td>
                                        <td><p><?php echo $list['description'];?></p></td>
										<td><a class="btn btn-success" href="event_upd.php?id=<?php echo $list['id'];?>">EDIT</a></td>
										<td><!--<a class="btn btn-success" href="notice_del.php?id=<?php //echo $list['id'];?>">DELETE</a>-->
										<button class="btn btn-danger" onClick="delc(<?php echo $list['id'];?>)" >DELETE</button></td>
										<!--delete confirmation -->
										<script>
											function delc(delid)
											{
												if(confirm("Do you want to delete this data?"))
													{
														window.location.href='event_del.php?id='+delid+'';
														return true;
														
													}
											}
										</script>
										
									</tr>
									<?php
									$number++; }}
									else
									{
										
											echo '<div class="alert alert-danger text-center " role="alert">
										   There is NO any Event is Available!.
									  </div>';
									   
									}
									?>
								</tbody>
							</table></div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
</section>
 <?php include_once("adminfooter.inc.php") ?>