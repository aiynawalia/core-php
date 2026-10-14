<?php
include_once("database.inc.php");
$id=$_GET['id'];
$sql="delete from adminnotice where id=$id";
$res=mysqli_query($db->con,$sql);
if($res)
			{
				?><script>alert("data is Deleted")</script><?php
				header("location:adminimpnotices.php");
				die();
			}
			else{
				?> <script>alert("Error Occured")</script><?php
			}
?>