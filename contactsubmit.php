<?php
    //$confail=false;
    //$consuccess=false;
   include_once("admin/database.inc.php");
include_once("admin/functions.inc.php");
    if(isset($_POST["name"]))
    {
        $conname=get_user_field($db->con,$_POST["name"]);
        $conemail=get_user_field($db->con,$_POST["email"]);
        $concity=get_user_field($db->con,$_POST["city"]);
        $conmobile=get_user_field($db->con,$_POST["phone"]);
        $conmsg=get_user_field($db->con,$_POST["message"]);
       
            $consql="INSERT INTO contact (con_name, email,city,mobile,msg,dt)VALUES ('$conname', '$conemail', '$concity','$conmobile','$conmsg',current_timestamp())";
            $conres=mysqli_query($db->con,$consql);
            if($conres)
            {
                echo '<span class="text-white">Meassage has been Sent!</span>';
            }
            else{
                 echo '<span class="text-danger">Error Occured!</span>';
            }
	}
			  ?>