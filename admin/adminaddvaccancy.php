<?php

include_once('adminheader.inc.php');
	if(isset($_POST["s1"]))
	{
	
        $vpost=get_user_field($db->con,$_POST["vpost"]);
		$subject=get_user_field($db->con,$_POST["subject"]);
		$qualification=get_user_field($db->con,$_POST["qualification"]);
		$sql="insert into adminvaccancy(post,subject,qualification,dt) values('$vpost','$subject','$qualification',current_timestamp())";
			
		
			$res=mysqli_query($db->con,$sql);
			if($res)
			{
				?><script>alert("data is Inserted")</script><?php
			}
			else{
				?> <script>alert("Error Occured")</script><?php
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
						VACCANCY DISPLAY</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">ADD VACCANCY</h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
                                <div class="form-group">
    <label for="exampleInputPassword1">Post Name</label>
	  <input type="text" class="form-control" required name="vpost" placeholder="Enter Post Name">
  </div>

 

  <div class="form-group">
    <label for="exampleInputPassword1">Enter Subject</label>
    <input type="text" class="form-control" required name="subject" placeholder="Enter Subject">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Enter Qualification</label>
    <input type="text" class="form-control" required name="qualification" placeholder="Enter Qualification">
  </div>
		
									<div>
  <button type="submit" name="s1" class="btn btn-primary">Submit</button>
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
 
