<?php 

/*
include 'connection.php';

$query_result = mysql_query("SELECT * FROM records WHERE id='26'");

while($row = mysql_fetch_array($query_result)) {
	echo $row['id'];
	echo $row['Status'];
}
*/

require_once "lib/Mail.php";

$from = 'prrssystem@gmail.com';
$to = '<fmolina704@gmail.com>';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

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

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
?>