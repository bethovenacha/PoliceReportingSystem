<?php 
    include 'connection.php';
    
    $detail = array('result'=>false);
    
    $username = $_GET["username"];
    $password = $_GET["password"];
    
    $result = mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
    while($row = mysql_fetch_array($result)) {
        //echo $row['firstname'] . " " . $row['lastname'] . "<br/>";
        
        $detail = array('result'=>true, 
                        'firstname'=>$row['firstname'], 
                        'lastname'=>$row['lastname'],
                        'age'=>$row['age'],
                        'current_address'=>$row['current_address'],
                        'position_officer'=>$row['position_officer'],
                        'picture'=>$row['picture'],
                        'date_register'=>$row['date_register'],
                        'officer_id_num'=>$row['officer_id_num'],
                        'isAdmin'=>$row['isAdmin'],
                        'id'=>$row['id']);
    }
    
    if($detail['result']) {
        $date = new DateTime();
        mysql_query("INSERT INTO dtr (fk_userid, timein) VALUES ('".$detail['id']."', '".$date->format('Y-m-d H:i:s')."')");
    }
	
    echo json_encode($detail);
?>