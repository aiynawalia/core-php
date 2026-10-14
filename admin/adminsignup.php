<?php 
    $fail=false;
    $passerror=false;
    include_once("logheader.inc.php");
	if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin')
    {
        
    }
    else
    {
        header("location:adminlogin.php");
    }
   
    if(isset($_POST["submit"]))
    {
        $name=get_user_field($db->con,$_POST["name"]);
        $email=get_user_field($db->con,$_POST["email"]);
        $phone=get_user_field($db->con,$_POST["phone"]);
        $password=get_user_field($db->con,$_POST["password"]);
        $cpassword=get_user_field($db->con,$_POST["cpassword"]);
        if($password==$cpassword)
        {
            $sql="INSERT INTO adminsignup (adminname, adminemail, adminmobile,adminpassword,dt)VALUES ('$name', '$email', '$phone','$password',current_timestamp())";
            $res=mysqli_query($db->con,$sql);
            if($res)
            {
                header("location:index.php");
            }
            else{
                $fail=ture;
            }
            
            
            
        }
        else
        {
            $passerror= true;
        }
        
    }
?>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h3 class="logy">GD GOENKA SIGN UP PANEL</h3>
		<form action="" method="post">
			<input type="text" class="ggg" name="name" placeholder="NAME" required="">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="text" class="ggg" name="phone" placeholder="PHONE" required="">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <input type="password" class="ggg" name="cpassword" placeholder="CONFORM PASSWORD" required="">
            <?php
                if($passerror)
                {
                    echo '<div class="alert alert-danger" role="alert">
                         Password NOT Matched.
                    </div>';
                }
                if($fail)
                {
                    echo '<div class="alert alert-danger" role="alert">
                         An ERROR is occured!
                    </div>';
                }
            ?>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="submit">
		</form>
		
</div>
</div>
<?php 
    include_once("logfooter.inc.php");
?>
