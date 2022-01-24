<?php
    include 'connection.php';
    
    //$searchKey = $_POST('searchKey');
    //$filters = $_POST('searchKey');
    
    $list = array();
    $result = mysql_query("SELECT * FROM users");
    
    while($row = mysql_fetch_array($result)) {
        $data = new stdClass();
        
        $data->firstname = $row['firstname'];
        $data->lastname = $row['lastname'];
        $data->age = $row['age'];
        $data->address = $row['current_address'];
        $data->position = $row['position_officer'];
        $data->picture = $row['picture'];
        $data->dateRegistered = $row['date_register'];
        $data->officerIdNum = $row['officer_id_num'];
        $data->username = $row['username'];
        $data->password = $row['password'];
        $data->id = $row['id'];
        $data->isAdmin = $row['isAdmin'];
        
        array_push($list,$data);        
    }
    
    echo json_encode($list);
?>