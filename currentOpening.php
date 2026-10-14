<?php
$dataempty=false;
    include_once("header.inc.php");
	


$sql="select * from adminvaccancy order by id desc";
$result=mysqli_query($db->con,$sql);
if(!$result || mysqli_num_rows($result) == 0) //imp. command
{
  $dataempty=true;
}
else
{
  while($rows=mysqli_fetch_assoc($result))
	{
		$note_arr[]=$rows;
	}

}
?>
 

<!-- Banner start here-->
<section class="w3l-vaccant-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3 ">
      <h2 class="text-white">Current Opening</h2>
      <p class="text-white"><a  class="text-white" href="index.php">Home</a> &nbsp; / &nbsp; Current Opening</p>
    </div>
  </div>
</section>
<!-- current opening detail start here-->
<section class="vacancy-detail text-center py-5">
  <div class="container-fluid">

  <h2 class="text-capitalize pb-4">current opening</h2>
<div class="detail-table col-lg-12 col-md-12 col-sm-12 col-xl-12">
<?php
	  if(!$dataempty)
								{ ?>
	<div class="table-responsive">
  
	<table class="table table-hover table-bordered">
  <thead>
    <tr class="text-capitalize text-white bg-blue">
      <td scope="col">s.No.</td>
      <td scope="col">Post</td>
      <td scope="col">subject</td>
      <td scope="col">qualification</td>
    </tr>
  </thead>
  <tbody>
	  <?php

								
									$number=1;
									
									foreach($note_arr as $list){
									?>
	  
    <tr>
      <th scope="row"><?php echo $number; ?></th>
										
										<td><?php echo $list['post'];?></td>
										
										
                                        <td><?php echo $list['subject'];?></td>
                                        <td><?php echo $list['qualification'];?></td>
      
    </tr>
    <?php
									$number++; }
									?>
  </tbody>
		</table>
                   
    
    </div>
</div>
<a href="assets/pdf/gdgoenka-appform.pdf" target="_blank" class="btn btn-secondary btn-theme4">Apply Now</a>
  </div>

  <?php
                    }
                    else
                    {
                      
                        echo '<div class="alert alert-danger text-center " role="alert">
                         There is not any vaccancy is available yet!.
                      </div>';
                       
                    }
                    ?>
</section>
<?php
include_once("footer.inc.php");
?>