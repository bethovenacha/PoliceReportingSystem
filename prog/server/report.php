<?php 
	include "lib/Mail.php";
    include 'connection.php';

	$mailResult = "";
	$caseComplainantName = "";
	$caseId = "";
	$caseStatus = "";
	
    $complainantName = $_GET['complainantName'];
    $complainantAddress = $_GET['complainantAddress'];
    $complainantContact = $_GET['complainantContact'];
    $complainantAge = $_GET['complainantAge'];
    $complainantGender = $_GET['complainantGender'];
    $accusedName = $_GET['accusedName'];
    $accusedAddress = $_GET['accusedAddress'];
    $accusedContact = $_GET['accusedContact'];
    $accusedAge = $_GET['accusedAge'];
    $accusedGender = $_GET['accusedGender'];
    $eventNmber = $_GET['eventNmber'];
    $picture = $_GET['picture'];
    $subject = $_GET['subject'];
    $natureOfCrime = $_GET['natureOfCrime'];
    $dateCommited = $_GET['dateCommited'];
    $placeCommited = $_GET['placeCommited'];
    $apprehendingOffier = $_GET['apprehendingOffier'];
    $dateRecoreded = $_GET['dateRecoreded'];
	$email = $_GET['email'];
	$status = $_GET['status'];
    
    $result = false;
    
    $reason = $_POST['reason'];
    $file = $_POST['file'];
    $command = $_POST['command'];
    $id = $_POST['id'];
    
    if($file != null) {
        $name = $_POST['filename'];
        define('DIRECTORY', '../images/uploads');
        $content = file_get_contents($file);
        file_put_contents(DIRECTORY.'/'.$name, $content);
        
        $picture = $name;
    }
    
    try {
        if($command == "ADD") {
            mysql_query("INSERT INTO records (complainantName, 
                                              complainantAddress, 
                                              complainantContact, 
                                              complainantAge, 
                                              complainantGender, 
                                              accusedName,
                                              accusedAddress,
                                              accusedContact,
                                              accusedAge,
                                              accusedGender,
                                              eventNmber,
                                              picture,
                                              subject,
                                              natureOfCrime,
                                              dateCommited,
                                              placeCommited,
                                              apprehendingOffier,
                                              reason,
											  email,
											  status) VALUES (
                                              '".$complainantName."',
                                              '".$complainantAddress."',
                                              '".$complainantContact."',
                                              '".$complainantAge."',
                                              '".$complainantGender."',
                                              '".$accusedName."',
                                              '".$accusedAddress."',
                                              '".$accusedContact."',
                                              '".$accusedAge."',
                                              '".$accusedGender."',
                                              '".$eventNmber."',
                                              '".$picture."',
                                              '".$subject."',
                                              '".$natureOfCrime."',
                                              '".$dateCommited."',
                                              '".$placeCommited."',
                                              '".$apprehendingOffier."',
                                              '".$reason."',
											  '".$email."',
											  '".$status."')");
											  
			$query_result = mysql_query("SELECT * FROM records ORDER BY id DESC LIMIT 1");
			
			while($row = mysql_fetch_array($query_result)) {
				$caseId = $row['id'];
				$caseStatus = $row['Status'];
				$caseComplainantName = str_replace('|', ' ',  $row['complainantName']);
			}
        } else if ($command == "UPDATE") {
            $picture = $_POST['filename'];
            
            mysql_query("UPDATE records SET complainantName='".$complainantName."',
                                            complainantAddress='".$complainantAddress."',
                                            complainantContact='".$complainantContact."',
                                            complainantAge='".$complainantAge."',
                                            complainantGender='".$complainantGender."',
                                            accusedName='".$accusedName."',
                                            accusedAddress='".$accusedAddress."',
                                            accusedContact='".$accusedContact."',
                                            accusedAge='".$accusedAge."',
                                            accusedGender='".$accusedGender."',
                                            eventNmber='".$eventNmber."',
                                            picture='".$picture."',
                                            subject='".$subject."',
                                            natureOfCrime='".$natureOfCrime."',
                                            dateCommited='".$dateCommited."',
                                            placeCommited='".$placeCommited."',
                                            apprehendingOffier='".$apprehendingOffier."',
                                            reason='".$reason."',
											email='".$email."',
											status='".$status."' WHERE id='".$id."'");
											
			$query_result = mysql_query("SELECT * FROM records WHERE id='".$id."'");
			
			while($row = mysql_fetch_array($query_result)) {
				$caseId = $row['id'];
				$caseStatus = $row['Status'];
				$caseComplainantName = str_replace('|', ' ',  $row['complainantName']);
			}
			
			if($status == "Voided") {
				mysql_query("UPDATE records SET Status='Voided' WHERE id='".$id."'");			
			}
        }
        
		$from = 'prrssystem@gmail.com';
		$to = $email;
		$subject = 'Police Report Record System!';
		$body = "Update\n\nCompliant Name : ".$caseComplainantName."\nEvent No. : ".$caseId."\nStatus : ".$caseStatus."";
		
		$headers = array(
			'From' => $from,
			'To' => $to,
			'Subject' => $subject
		);

		$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'prrssystem@gmail.com',
			'password' => 'test123123'
		));

		$mail = $smtp->send($to, $headers, $body);

		//if (PEAR::isError($mail)) {
		//	$mailResult = "Warning - unable to send mail"//$mail->getMessage();
			//echo('<p>' . $mail->getMessage() . '</p>');
		//} else {
		//	$mailResult = "Message successfully sent!";
		//}		
		
        $result = true;
    } catch (Exception $e) {
        $result = false;
    }
    
    $json = array('result'=>$result);
    echo json_encode($json);
?>