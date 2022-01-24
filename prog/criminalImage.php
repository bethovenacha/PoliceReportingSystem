<?php
require_once 'server/connection.php';
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		$q=mysql_query("SELECT * FROM records WHERE id='".$id."'");
		
		$f=mysql_fetch_array($q);
		
		echo '<img src="images/uploads/'.$f['picture'].'" width="600" height="200" class="img-responsive"><br>';
		echo '<table class="table table-bordered table-stripe">';
				echo '<tr>';
						echo '<td><label class="label label-info">Name:</label></td>';
						echo '<td style="color:black;">'.$f['accusedName'].'</td>';
						echo '<td><label class="label label-info">Address:</label></td>';
						echo '<td style="color:black;">'.$f['accusedAddress'].'</td>';
						
				echo '</tr>';
				echo '<tr>';
						echo '<td><label class="label label-info">Contact:</label></td>';
						echo '<td style="color:black;">'.$f['accusedContact'].'</td>';
						echo '<td><label class="label label-info">Age:</label></td>';
						echo '<td style="color:black;">'.$f['accusedAge'].'</td>';
						
				echo '</tr>';
				echo '<tr>';
						echo '<td><label class="label label-info">Gender:</label></td>';
						echo '<td style="color:black;">'.$f['accusedGender'].'</td>';
						echo '<td><label class="label label-info">Event Number:</label></td>';
						echo '<td style="color:black;">'.$f['eventNmber'].'</td>';
						
				echo '</tr>';
				echo '<tr>';
						echo '<td><label class="label label-info">Subject:</label></td>';
						echo '<td style="color:black;">'.$f['subject'].'</td>';
						echo '<td><label class="label label-info">Nature of Crime:</label></td>';
						echo '<td style="color:black;">'.$f['natureOfCrime'].'</td>';
						
				echo '</tr>';
				echo '<tr>';
						echo '<td><label class="label label-info">Date Commited:</label></td>';
						echo '<td style="color:black;">'.$f['dateCommited'].'</td>';
						echo '<td><label class="label label-info">Place Commited:</label></td>';
						echo '<td style="color:black;">'.$f['placeCommited'].'</td>';
						
				echo '</tr>';
				echo '<tr>';
						echo '<td><label class="label label-info">Apprehending Officer:</label></td>';
						echo '<td style="color:black;">'.$f['apprehendingOffier'].'</td>';
						echo '<td><label class="label label-info">Date Recorded:</label></td>';
						echo '<td style="color:black;">'.$f['dateRecoreded'].'</td>';
						
				echo '</tr>';
				echo '<tr>';
						echo '<td><label class="label label-info">Reason:</label></td>';
						echo '<td style="color:black;">'.$f['reason'].'</td>';
						echo '<td><label class="label label-info">Status:</label></td>';
						echo '<td style="color:black;">'.$f['Status'].'</td>';
						
				echo '</tr>';
		echo '</table>';
		
	}
?>