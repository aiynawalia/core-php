<?php

include_once('adminheader.inc.php');
	if(isset($_POST["s1"]))
	{
	
		$name=get_user_field($db->con,$_POST["name"]);
		$fname=$_FILES["f1"]["name"];
		$temp=$_FILES["f1"]["tmp_name"];
		//$folder="../assets/uploads/".$fname;
		$error=$_FILES["f1"]["error"];
		if($error==4)
		{
			$sql="insert into adminnotice(name,image,dt) values('$name','',current_timestamp())";
		}
		else
		{
			$sql="insert into adminnotice(name,image,dt) values('$name','$fname',current_timestamp())";
			move_uploaded_file($temp,"../assets/uploads/$fname");
		}
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
                        <a href="adminimpnotices.php" class="btn btn-primary " >
							GO TO VIEW NOTICES</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">ADD Important Notices</h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInputPassword1">Notice Text</label>
	  <textarea class="form-control"  name="name" required placeholder="Enter Notice Text"></textarea>
  </div>
		<div class="form-group">
  <input type="file" name="f1" class="">
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
 
