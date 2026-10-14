<?php
include_once("database.inc.php");
$id=$_GET['id'];
$sql="delete from adminstud where id=$id";
$res=mysqli_query($db->con,$sql);
if($res)
			{
				?><script>alert("data is Deleted")</script><?php
				header("location:adminstud.php");
				die();
			}
			else{
				?> <script>alert("Error Occured")</script><?php
			}
?>