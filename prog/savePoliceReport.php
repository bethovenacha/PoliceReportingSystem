<?php
require_once 'server/connection.php';
  if(isset($_POST['event']) AND isset($_POST['action']) AND isset($_POST['summary']) AND isset($_POST['id'])){
		$query= mysql_query("SELECT * FROM police_report WHERE complainant_id='".$_POST['id']."'");
		
		if(mysql_num_rows($query) == 0){
			$q=mysql_query("INSERT INTO police_report VALUES('','".$_POST['event']."','".$_POST['action']."','".$_POST['summary']."','".$_POST['id']."')");
			if($q){
				echo 'Data Saved.';
			}
		}else{
			echo 'Data already exists.Please update.';
		}
  }
  if(isset($_POST['event2']) AND isset($_POST['action2']) AND isset($_POST['summary2']) AND isset($_POST['id2'])){
	$update = mysql_query("UPDATE police_report SET detail_event='".$_POST['event2']."',action_taken='".$_POST['action2']."',summary='".$_POST['summary2']."' WHERE complainant_id='".$_POST['id2']."'");
	if($update){
		echo 'Report Updated.';
	}
  }

?>