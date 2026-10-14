<?php

include_once('adminheader.inc.php');
	if(isset($_POST["s1"]))
	{
	
        $name=get_user_field($db->con,$_POST["name"]);
		$marks=get_user_field($db->con,$_POST["marks"]);
		$clas=get_user_field($db->con,$_POST["clas"]);
		$fname=$_FILES["f1"]["name"];
		$temp=$_FILES["f1"]["tmp_name"];
		//$folder="../assets/uploads/".$fname;
		$error=$_FILES["f1"]["error"];
		if($error==4)
		{
			$sql="insert into adminstud(name,image,marks,clas,dt) values('$name','','$marks','$clas',current_timestamp())";
		}
		else
		{
			$sql="insert into adminstud(name,image,marks,clas,dt) values('$name','$fname','$marks','$clas',current_timestamp())";
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
                        <a href="adminstud.php" class="btn btn-primary " >
							GO TO STUDENT DISPLAY</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">ADD BRILLIANT STUDENT DISPLAY</h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
                                <div class="form-group">
    <label for="exampleInputPassword1">Student Name</label>
	  <input type="text" class="form-control" required name="name" placeholder="Enter Student Name">
  </div>

  <div class="form-group">Enter Event Image
  <input type="file" name="f1"  class="">
			</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Student Marks</label>
    <input type="text" class="form-control" required name="marks" placeholder="Enter Marks">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Student Class</label>
    <input type="text" class="form-control" required name="clas" placeholder="Enter Class">
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
 
