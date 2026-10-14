<?php 
	$fail=false;
	include_once("logheader.inc.php");
	
	 if(isset($_POST["submit"]))
    {
        $name=get_user_field($db->con,$_POST["name"]);
		$pass=get_user_field($db->con,$_POST["password"]);
		$sql="select * from adminsignup where adminname='$name' and adminpassword='$pass'";
		$res=mysqli_query($db->con,$sql);
		if($num=mysqli_num_rows($res)>0)
		{
			
			$_SESSION['usertype']='admin';
			$_SESSION['username']=$name;
			header("location:index.php");
		}
		else{
			$fail=true;
		}
	}
?>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h3 class="logy">GD GOENKA LOGIN PANEL</h3>
		<form action="" method="post">
			<input type="text" class="ggg" name="name" placeholder="ADMIN NAME" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
<!--			<span class="mb-2"><input type="checkbox" />Remember Me</span>-->
			
			<!-- <h6 class="text-left  fgpass"  ><a href="recoverpass.php" >Forgot Password?</a></h6> -->
				<div class="clearfix"></div>
			
				<div class="mt-2">
				<?php
					if($fail)
					{
						echo '<div class="alert alert-danger " role="alert">
							 Login Details are WRONG!
						</div>';
					}
				?>
				</div>
				<input type="submit" value="Sign In" name="submit">
		</form>
		
</div>
</div>
<?php 
    include_once("logfooter.inc.php")
?>
