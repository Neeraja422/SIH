<?php 
if(isset($_POST['submit'])){
	$exam =$_POST['exam'];
	if($exam=="JEE MAINS"){
		header("Location: prepare.php");
	}
}