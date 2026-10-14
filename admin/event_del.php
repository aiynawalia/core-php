<?php
ob_start();
include_once("database.inc.php");
$id=$_GET['id'];
$sql="delete from adminevent where id=$id";
$res=mysqli_query($db->con,$sql);
if($res)
			{
				?><script>alert("data is Deleted")</script><?php
				header("location:adminevents.php");
				
			}
			else{
				?> <script>alert("Error Occured")</script><?php
			}
?>