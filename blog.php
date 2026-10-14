<?php
      include_once("header.inc.php");
				$dataempty=false;
				
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

<section class="w3l-blog-breadcrum" >
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3 ">
      <h2 class="text-white">GD Goenka Blog</h2>
      <p class="text-white"><a  href="index.php" class="text-white">Home</a> &nbsp; / &nbsp; Blog</p>
    </div>
  </div>
</section>
  
<section class="w3l-feature-3 pt-5" id="blog">
	<div class="container">
<div class="col-lg-12 ">
					<h5 class="main_content_title">GD GOENKA <b>BLOG</b></h5>
				</div>

    
	  <div class="row">
	
	<!--<div class="col-lg-3 col-md-6 col-sm py-2">
				<a href="assets/images/gd/2d549eff-40df-493d-98e4-eea4ac23c9ea.jpg" class="hvr-float-shadow"><img src="assets/images/gd/2d549eff-40df-493d-98e4-eea4ac23c9ea.jpg" class="img-fluid"></a>
			</div>-->
			
  
</div>

	</div>


</section>

<!-- Blog start here-->

<section class="w3l-price-2" id="news">
    <div class="price-main py-1">
        <div class="container py-md-1">
          <!--blog row start -->
             <div class="pricing-style-w3ls row py-md-1">

              <!--php code -->
                <?php 
                if(!$dataempty)
								{
                  foreach($note_arr as $list){
                    ?>
               
              <!-- blog single component-->
                    <div class="w3l-faq-page col-lg-4 col-md-6 col-sm pl-3 pl-lg-5 mt-lg-0 mt-1">
                        
						
						<div class="events-top blog-des  mt-4">
                            
                            <div class="events-top-right">
                                <h6 class="pricehead"><?php echo $list['title'];?></h6>
                                    <p class="mb-2 mt-3"><?php echo $list['description'];?></p>
                                    <li><b><?php
										$date=$list['dt'];
										
										echo date("d-M-Y",strtotime($date));?></b></li>
                                    
									<div class="blog-img pt-2" >
									<?php if($list['image'] !='')
										{
											echo '<a href="assets/uploads/'. $list['image'].'" target="_blank"><img  src="assets/uploads/'. $list['image'].'" class="img-fluid"/></a>';
										}
										else
										{
											
										} ?>
									</div>
                            </div>
                       
                          </div>
               <!-- //blog single finish-->
                  </div>    
              <?php }?>
              </div>

              <?php
				 	}
					 else
					 {
						 
							 echo '<div class="alert alert-danger text-center " role="alert">
							There is NO any Event is Available!.
					   </div>';
						
					 }
					 ?>

					  <!--blog row end -->
					 
					 
        </div>
    </div>
</section>

<?php
    include_once("footer.inc.php");
 
 ?>