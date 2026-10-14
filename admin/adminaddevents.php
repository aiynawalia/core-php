<?php

include_once('adminheader.inc.php');
	if(isset($_POST["s1"]))
	{
	
        $name=get_user_field($db->con,$_POST["name"]);
        $des=get_user_field($db->con,$_POST["des"]);
		 $date=get_user_field($db->con,$_POST["date"]);
		$fname=$_FILES["f1"]["name"];
		$temp=$_FILES["f1"]["tmp_name"];
		//$folder="../assets/uploads/".$fname;
		$error=$_FILES["f1"]["error"];
		if($error==4)
		{
			$sql="insert into adminevent(title,image,description,dt) values('$name','','$des','$date')";
		}
		else
		{
			$sql="insert into adminevent(title,image,description,dt) values('$name','$fname','$des','$date')";
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
                        <a href="adminevents.php" class="btn btn-primary " >
							GO TO VIEW EVENTS</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">ADD EVENTS</h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
                                <div class="form-group">
    <label for="exampleInputPassword1">Event Title</label>
	  <input type="text" class="form-control" required name="name" placeholder="Enter Event Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Event Description</label>
	  <textarea class="form-control" required rows="10" name="des" placeholder="Enter Event Description"></textarea>
  </div>
		<div class="form-group">Enter Event Image
  <input type="file" name="f1"  class="">
			</div>
									<div class="form-group">Enter Event Date
  								<input type="date" name="date" required class="">
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
 
