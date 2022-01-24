<?php 
    include 'connection.php';
        
    $userid = $_GET["userid"];
    
    $result = mysql_query("SELECT * FROM dtr WHERE fk_userid='".$userid."' ORDER BY timein DESC LIMIT 1");
    while($row = mysql_fetch_array($result)) {
        $login = new DateTime($row['timein']);
        $date = new DateTime();
        
        $diff = $login->diff($date);
        $duration = $diff->format('%H:%I:%S');
        
        mysql_query("UPDATE dtr SET timeout='".$date->format('Y-m-d H:i:s')."', duration='".$duration."' WHERE id='".$row['id']."'");
    }
    
    echo json_encode(array('result'=>true));
?>