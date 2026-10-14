<?php
      include_once("header.inc.php");
				$dataempty=false;
				
				$sql="select * from admingallery order by id desc";
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

<section class="w3l-gallery-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3 ">
      <h2 class="text-white">Gallery</h2>
      <p class="text-white"><a  href="index.php" class="text-white">Home</a> &nbsp; / &nbsp; Gallery</p>
    </div>
  </div>
</section>
 
<section class="w3l-feature-3 py-5" id="gallery">
	<div class="container">
<div class="text-center ">
					<h5 class="main_content_title"> GALLERY</h5>
				</div>
	<div class="row">
  <div class="col-12">
    <div class="list-group list-group-horizontal-md" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">All</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Events</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Sports</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Activities</a>
    </div>
  </div>
  <div class="col-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
		
		  <div class="row  gallery2">
		
		   <?php 
                if(!$dataempty)
								{
                  foreach($note_arr as $list){
                    ?>	
			
				<div class="col-lg-3 col-md-6 col-sm py-2">
					<?php if($list['image'] !='')
										{
											echo '<a class="hvr-float-shadow" href="assets/uploads/'. $list['image'].'"><img  src="assets/uploads/'. $list['image'].'" class="img-fluid"/></a>';
										}
										else
										{
											
										} ?>
<!--				<a href="assets/images/2d549eff-40df-493d-98e4-eea4ac23c9ea.jpg" class="hvr-float-shadow"><img src="assets/images/2d549eff-40df-493d-98e4-eea4ac23c9ea.jpg" class="img-fluid"></a>-->
					
				<div class="text-center caption pt-2"> <?php echo $list['caption'];?> </div> 
			</div>
		  <?php }?>
			</div>
			 <?php
				 	}
					 else
					 {
						 
							 echo '<div class="alert alert-danger text-center " role="alert">
							There is NO any Gallery Image is Available!.
					   </div>';
						
					 }
					 ?>
		  
		
		</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
		
		  <?php
		  	$dataempty=false;
				
				$esql="select * from admingallery  where category='events' order by id desc";
				$eresult=mysqli_query($db->con,$esql);
				if(mysqli_num_rows($eresult)>0)
				{
					while($erows=mysqli_fetch_assoc($eresult))
					{
						$enote_arr[]=$erows;
					}		
				}
else
{
	$dataempty=true;
}
		  ?>
		<div class="row  gallery">
			 <?php 
                if(!$dataempty)
								{
                  foreach($enote_arr as $elist){
                    ?>	
			<div class="col-lg-3 col-md-6 col-sm py-2">
<!--				<a href="assets/images/3f63c32d-63ab-44e3-a465-f565425b0e82.jpg" class="hvr-float-shadow"><img src="assets/images/3f63c32d-63ab-44e3-a465-f565425b0e82.jpg" class="img-fluid"></a>-->
				<?php if($elist['image'] !='')
										{
											echo '<a class="hvr-float-shadow" href="assets/uploads/'. $elist['image'].'"><img  src="assets/uploads/'. $elist['image'].'" class="img-fluid"/></a>';
										}
										else
										{
											
										} ?>
				<div class="text-center caption pt-2"> <?php echo $elist['caption'];?> </div>
			</div>
			 <?php }?>
			
		</div>
		  <?php
				 	}
					 else
					 {
						 
							 echo '<div class="alert alert-danger text-center " role="alert">
							There is NO any Notice is Available!.
					   </div>';
						
					 }
					 ?>
		
	</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
		
		 <?php
		  	$dataempty=false;
				
				$ssql="select * from admingallery  where category='sports' order by id desc";
				$sresult=mysqli_query($db->con,$ssql);
				if(mysqli_num_rows($sresult)>0)
				{
					while($srows=mysqli_fetch_assoc($sresult))
					{
						$snote_arr[]=$srows;
					}		
				}
else
{
	$dataempty=true;
}
		  ?>
		<div class="row  gallery">
			 <?php 
                if(!$dataempty)
								{
                  foreach($snote_arr as $slist){
                    ?>	
			<div class="col-lg-3 col-md-6 col-sm py-2">
<!--				<a href="assets/images/3f63c32d-63ab-44e3-a465-f565425b0e82.jpg" class="hvr-float-shadow"><img src="assets/images/3f63c32d-63ab-44e3-a465-f565425b0e82.jpg" class="img-fluid"></a>-->
				<?php if($slist['image'] !='')
										{
											echo '<a class="hvr-float-shadow" href="assets/uploads/'. $slist['image'].'"><img  src="assets/uploads/'. $slist['image'].'" class="img-fluid"/></a>';
										}
										else
										{
											
										} ?>
				<div class="text-center caption pt-2"> <?php echo $slist['caption'];?> </div>
			</div>
			 <?php }?>
			
		</div>
		  <?php
				 	}
					 else
					 {
						 
							 echo '<div class="alert alert-danger text-center " role="alert">
							There is NO any Notice is Available!.
					   </div>';
						
					 }
					 ?>
		
		
		</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
		
		
		 <?php
		  	$dataempty=false;
				
				$asql="select * from admingallery  where category='activities' order by id desc";
				$aresult=mysqli_query($db->con,$asql);
				if(mysqli_num_rows($aresult)>0)
				{
					while($arows=mysqli_fetch_assoc($aresult))
					{
						$anote_arr[]=$arows;
					}		
				}
else
{
	$dataempty=true;
}
		  ?>
		<div class="row  gallery">
			 <?php 
                if(!$dataempty)
								{
                  foreach($anote_arr as $alist){
                    ?>	
			<div class="col-lg-3 col-md-6 col-sm py-2">
<!--				<a href="assets/images/3f63c32d-63ab-44e3-a465-f565425b0e82.jpg" class="hvr-float-shadow"><img src="assets/images/3f63c32d-63ab-44e3-a465-f565425b0e82.jpg" class="img-fluid"></a>-->
				<?php if($alist['image'] !='')
										{
											echo '<a class="hvr-float-shadow" href="assets/uploads/'. $alist['image'].'"><img  src="assets/uploads/'. $alist['image'].'" class="img-fluid"/></a>';
										}
										else
										{
											
										} ?>
				<div class="text-center caption pt-2"> <?php echo $alist['caption'];?> </div>
			</div>
			 <?php }?>
			
		</div>
		  <?php
				 	}
					 else
					 {
						 
							 echo '<div class="alert alert-danger text-center " role="alert">
							There is NO any Notice is Available!.
					   </div>';
						
					 }
					 ?>
		
		
		
		</div>
    </div>
  </div>
</div>
	</div>
</section>


<?php

include_once("footer.inc.php");

?>