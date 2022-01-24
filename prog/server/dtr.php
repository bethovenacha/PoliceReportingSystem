<?php 
    include 'connection.php';

    $userid = $_GET["userid"];
    
    $list = array();
    $result = mysql_query("SELECT * FROM dtr WHERE fk_userid='".$userid."' ORDER BY timein DESC");
    while($row = mysql_fetch_array($result)) {
        $data = new stdClass();
        
        $data->timein = $row['timein'];
        $data->timeout = $row['timeout'];
        $data->duration = $row['duration'];
        
        array_push($list,$data);
    }
    
    echo json_encode($list);
?>