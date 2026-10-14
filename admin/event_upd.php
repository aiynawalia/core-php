<?php

include_once('adminheader.inc.php');
$id=$_GET['id'];
$sql="select * from adminevent where id=$id";
$result=mysqli_query($db->con,$sql);

	$rows=mysqli_fetch_assoc($result);
	

	if(isset($_POST["s1"]))
	{
		$id=$_GET['id'];
		$title=get_user_field($db->con,$_POST["title"]);
		$description=get_user_field($db->con,$_POST["description"]);
		$date=get_user_field($db->con,$_POST["date"]);

		$old_img=$_POST["old_img"];
		
		$fname=$_FILES["f1"]["name"];
		if($fname !='')
		{
			$ufname=$_FILES["f1"]["name"];
			//$folder="../assets/uploads/".$ufname;
		}
		else
		{
			$ufname=$old_img;
			//$folder=$ufname;
		}
		$temp=$_FILES["f1"]["tmp_name"];
		
		
				/*$sql="insert into adminnotice(name,image,dt) values('$name','$folder',current_timestamp())";*/
			
			$sql="update  adminevent set title='$title',image='$ufname',description='$description',dt='$date' where id=$id"; 
			move_uploaded_file($temp,"../assets/uploads/$ufname");
			$res=mysqli_query($db->con,$sql);
			if($res)
			{
				?><script>alert("data is Updated Successfully")</script><?php
				header("location:adminevents.php");
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
                        <a href="adminevents.php" class="btn btn-primary " >
							 VIEW EVENTS</a>
                        </div>
                         <h2 class="text-center text-theme-color mb-5 ">UPDATE EVENTS</h2>
                        	<div class="mt-2">
                        
								<form method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInputPassword1">Event Title</label>
	  <input name="title" class="form-control" value="<?php echo $rows['title']; ?>">
  </div>
		<div class="form-group">
  <input type="file" name="f1"  class="">
	<input type="hidden" name="old_img" value="<?php echo $rows['image']; ?>">
	<span class="text-info">If you not choose the file , it would be remain same as existing file.</span>		
			</div>

			<div class="form-group">
    <label for="exampleInputPassword1">Event Description</label>
	  <textarea name="description" class="form-control"> <?php echo $rows['description']; ?></textarea>
  </div>
		<div class="form-group">Enter Event Date
  <input type="date" name="date" value="<?php echo $rows['dt']; ?>"  class="">
			</div>				
	<div class="p-2">
  <button type="submit" name="s1" class="btn btn-primary">UPDATE EVENT DATA</button>
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
 
