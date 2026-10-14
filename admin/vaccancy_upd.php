<?php

include_once('adminheader.inc.php');
$id=$_GET['id'];
$sql="select * from adminvaccancy where id=$id";
$result=mysqli_query($db->con,$sql);

	$rows=mysqli_fetch_assoc($result);
	

	if(isset($_POST["s1"]))
	{
		$id=$_GET['id'];
        $vpost=get_user_field($db->con,$_POST["vpost"]);
        $subject=get_user_field($db->con,$_POST["subject"]);
        $qualification=get_user_field($db->con,$_POST["qualification"]);
		
			$sql="update  adminvaccancy set post='$vpost',subject='$subject',qualification='$qualification' where id=$id"; 
			
			$res=mysqli_query($db->con,$sql);
			if($res)
			{
				?><script>alert("data is Updated Successfully")</script><?php
				header("location:adminvaccancy.php");
				die();
			}
			else{
				?> <script>alert("Error Occured!")</script><?php
			}
			
	
		
	}
?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		
			
	
					<div class="col-md-12 stats-info stats-last widget-shadow">
                        
						<div class="stats-last-agile">
							<div class="text-right">
                        <a href="adminvaccancy.php" class="btn btn-primary " >
							VIEW VACCANCY DISPLAY</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">UPDATE VACCANCY DISPLAY  </h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInputPassword1">Post Name</label>
	  <input name="vpost" class="form-control"  value="<?php echo $rows['post']; ?>">
  </div>

  

  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input name="subject" class="form-control"  value="<?php echo $rows['subject']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Class</label>
    <input name="qualification" class="form-control"  value="<?php echo $rows['qualification']; ?>">
  </div>
		
							
	<div class="p-2">
  <button type="submit" name="s1" class="btn btn-primary">UPDATE VACCANCY DATA</button>
		</div>
</form>
								<div class="text-center">
<!--									<input type="submit" class="btn btn-primary" name="submit" value="SUBMIT" >-->
								</div>
							</div>
                            </div>
		</div>
		</div>
</section>

                            
</section>
 <?php include_once("adminfooter.inc.php"); ?>
 
