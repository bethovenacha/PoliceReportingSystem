<?php 
    include 'connection.php';
	
	$detail = array('result'=>0);
	$result = mysql_query("SELECT id FROM records ORDER BY id DESC LIMIT 1");
	while($row = mysql_fetch_array($result)) {
		$detail = array('result'=>$row['id']);
	}
	
	echo json_encode($detail);
?>