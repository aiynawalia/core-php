
<?php
      include_once("header.inc.php");
				$dataempty=false;
				
				$sql="select * from adminmedia order by id desc";
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

<section class="w3l-media-breadcrum" >
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3 ">
      <h2 class="text-white">Media Release</h2>
      <p class="text-white"><a  href="index.php" class="text-white">Home</a> &nbsp; / &nbsp; Media Release</p>
    </div>
  </div>
</section>
  
<section class="w3l-feature-3 py-5" id="media">
	<div class="container">
<div class="col-lg-12 ">
					<h5 class="main_content_title"> MEDIA RELEASE</h5>
				</div>

    
	  <div class="row  gallery">

	  <?php 
                if(!$dataempty)
								{
                  foreach($note_arr as $list){
                    ?>	
	  
			<div class="col-lg-3 col-md-6 col-sm py-2 media-inner">

			<?php if($list['image'] !='')
										{
											echo '<a class="hvr-float-shadow" href="assets/uploads/'. $list['image'].'"><img  src="assets/uploads/'. $list['image'].'" class="img-fluid"/></a>';
										}
										else
										{
											
										} ?>

				<!-- <a href="assets/images/PHOTO-2021-01-27-20-18-37.jpg" class="hvr-float-shadow"><img src="assets/images/PHOTO-2021-01-27-20-18-37.jpg" class="img-fluid"></a> -->
			<div class="text-center  caption"> <?php echo $list['caption'];?> </div> 
			</div>
			<?php }?>
			
			
  
</div>
<?php
				 	}
					 else
					 {
						 
							 echo '<div class="alert alert-danger text-center " role="alert">
							There is NO any Media Release is Available!.
					   </div>';
						
					 }
					 ?>

	</div>


</section>

<?php

include_once("footer.inc.php");

?>