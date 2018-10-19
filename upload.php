<?php
if($_FILES['file']['error']>0){
	$url = "fa";
	header("Location:fa");
  exit;
}
move_uploaded_file($_FILES['file']['tmp_name'],'file/'.$_FILES['file']['name']);
	$url = "su";
  header("Location:su");
  exit;
?>
