<?php

    include 'connection.php';
    
    $command = $_GET['command'];
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['current_address'];
    $position = $_POST['position_officer'];
    $picture = $_POST['picture'];
    $officerIdNum = $_POST['officer_id_num'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $isAdmin = $_POST['isAdmin'];
    $id = $_POST['id'];
    
    $detaild = array("result"=>false);
    
    $file = $_POST['file'];
    
    $picture = "";
    
    if($file != null) {
        define('DIRECTORY', '../images/user-avatar');
    
        $content = file_get_contents($file);
        file_put_contents(DIRECTORY.'/'.$username.'.jpg', $content);
        
        $picture = $username.'.jpg'; 
    }
    
    try{
        if($command == 'UPDATE') {
            mysql_query("UPDATE users SET firstname='". $firstname ."', 
                                          lastname='". $lastname ."',
                                          age='". $age ."',
                                          current_address='". $address ."',
                                          position_officer='". $position ."',
                                          picture='". $picture ."',
                                          officer_id_num='". $officerIdNum ."',
                                          username='". $username ."',
                                          password='". $password ."',
                                          isAdmin=". $isAdmin ." WHERE id='". $id ."'");
            
        } else if($command == 'ADD') {
            mysql_query("INSERT INTO users (firstname, 
                                            lastname, 
                                            age, 
                                            current_address, 
                                            position_officer, 
                                            picture, 
                                            officer_id_num, 
                                            username, 
                                            password, 
                                            isAdmin) VALUES (
                                            '".$firstname."', 
                                            '".$lastname."', 
                                            '".$age."', 
                                            '".$address."', 
                                            '".$position."', 
                                            '".$picture."',
                                            '".$officerIdNum."',
                                            '".$username."',
                                            '".$password."',
                                            ".$isAdmin.")");
        } else if($command == 'DELETE') {
            mysql_query("DELETE FROM users WHERE id='".$id."'");
        }
        
        $detaild = array("result"=>true);
    } catch(Exception $e) {
        $detaild = array("result"=>false);
    }

    echo json_encode($detaild);
?>