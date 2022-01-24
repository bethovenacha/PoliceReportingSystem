<?php
    include 'connection.php';
    
    $islogedin = $_POST['islogedin'] === "true" ? true : false;
    $filters = $_POST['filters'];
    $seachKey = $_POST['seachKey'];
    $query = "";
    
    if($seachKey != "") {
        $seachKey = str_replace(' ', '%', $seachKey);
        $query = "WHERE subject LIKE '%".$seachKey."%' ";
        //$query = "WHERE complainantName LIKE '".$seachKey."%'";
        
		if(strpos($filters, 'Status') !== false) {
            $query = "WHERE Status = '".$seachKey."' ";
        }
		
        if(strpos($filters, 'complainantName') !== false) {
            $query = $query."OR complainantName LIKE '%".$seachKey."%' ";
        }
        
        if(strpos($filters, 'accusedName') !== false) {
            $query = $query."OR accusedName LIKE '%".$seachKey."%' ";
        }
        
        if(strpos($filters, 'dateRecorded') !== false) {
            $dateFrom = $_POST["dateFrom"];
            $dateTo = $_POST["dateTo"];
            
            $query = $query."AND (dateRecoreded > '".$dateFrom."' AND dateRecoreded < '".$dateTo."')";
        }
    } else if (strpos($filters, 'dateRecorded') !== false) {
        $dateFrom = $_POST["dateFrom"];
        $dateTo = $_POST["dateTo"];
        
        $query = $query."WHERE (dateRecoreded > '".$dateFrom."' AND dateRecoreded < '".$dateTo."')";
    }
    
    $list = array();
    $result = mysql_query("SELECT * FROM records ".$query." ORDER BY id DESC");
    while($row = mysql_fetch_array($result)) {
        $data = new stdClass();
        
        $data->complainantName = $row['complainantName'];
        $data->complainantAddress = $row['complainantAddress'];
        $data->complainantContact = $row['complainantContact'];
        $data->complainantAge = $row['complainantAge'];
        $data->complainantGender = $row['complainantGender'];
        $data->accusedName = $row['accusedName'];
        $data->accusedAddress = $row['accusedAddress'];
        $data->accusedContact = $row['accusedContact'];
        $data->accusedAge = $row['accusedAge'];
        $data->accusedGender = $row['accusedGender'];
        $data->eventNmber = $row['eventNmber'];
        $data->picture = $row['picture'];
        $data->subject = $row['subject'];
        $data->natureOfCrime = $row['natureOfCrime'];
        $data->dateCommited = $row['dateCommited'];
        $data->placeCommited = $row['placeCommited'];
        $data->apprehendingOffier = $row['apprehendingOffier'];
        $data->dateRecoreded = $row['dateRecoreded'];
        $data->id = $row['id'];
        $data->reason = $row['reason'];
		$data->status = $row['Status'];
		$data->email = $row['email'];
        
        array_push($list,$data);
    }
    
    $data = array("islogedin" => $islogedin, "list" => $list);
    
    echo json_encode($data);
?>