<?php 
/*$file = $_POST['file'];

if($file != null) {
    $name = $_POST['filename'];
    define('DIRECTORY', '../images/uploads');
    $content = file_get_contents($file);
    file_put_contents(DIRECTORY.'/'.$name, $content);
}*/
    include 'connection.php';	
	
	$id = 31;
	$query_result = mysql_query("SELECT * FROM records WHERE id='".$id."'");

	while($row = mysql_fetch_array($query_result)) {
		$caseId = $row['id'];
		$caseStatus = $row['Status'];
		$caseComplainantName = str_replace('|', ' ',  $row['complainantName']);
	}
	
	echo $caseComplainantName;
?>