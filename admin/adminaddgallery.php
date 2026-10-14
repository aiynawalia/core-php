<?php
$empcat=false;
include_once('adminheader.inc.php');
	if(isset($_POST["s1"]))
	{
		if($_POST["category"])
		{
			
		
	
        $caption=get_user_field($db->con,$_POST["caption"]);
		
		 $category=get_user_field($db->con,$_POST["category"]);
	
		$fname=$_FILES["f1"]["name"];
		$temp=$_FILES["f1"]["tmp_name"];
		//$folder="../assets/uploads/".$fname;
		$error=$_FILES["f1"]["error"];
		if($error==4)
		{
			$sql="insert into admingallery(caption,image,category,dt) values('$caption','','$category',current_timestamp())";
		}
		else
		{
			$sql="insert into admingallery(caption,image,category,dt) values('$caption','$fname','$category',current_timestamp())";
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
		else
		{
			echo $empcat=true;
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
                        <a href="admingallery.php" class="btn btn-primary " >
							VIEW GALLERY</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">ADD GALLERY IMAGE</h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
                               

  <div class="form-group">Enter  Image
  <input type="file" name="f1"  class="">
			</div>
									
	<div class="form-group">Choose Category
  		<select name="category" required>
			<option value="">Choose Category</option>
			<option value="events">events</option>
			<option value="sports">sports</option>
			<option value="activities">activities</option>
			
		</select>
			</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image Caption</label>
    <input type="text" class="form-control" required name="caption" placeholder="Image Caption">
  </div>

  
		
	<div class="row">
		<div class="col-md-2 col-sm">
  		<button type="submit" name="s1" class="btn btn-primary">Submit</button></div>
		<div class="col-md-10 col-sm">
			<?php
			if($empcat)
			echo '<div class="alert alert-danger" role="alert">
  Please Choose a Category first!
</div>'; ?>							
		</div>
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
 
