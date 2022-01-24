<?php
require_once 'server/connection.php';

if(isset($_POST['reportId'])){

	$id = $_POST['reportId'];
	
				echo '<input type="button" class="btn btn-danger pull-right" value="Print" onclick="printDiv();">&nbsp;';
				echo '<input type="button" class="btn btn-danger pull-right" value="Back" onclick="location.reload();">';

	echo '<div id="ReportDoc">';
		echo "<center><label style='font-size:48px;'>Police Report</label></center>";
		$query = mysql_query("SELECT * FROM police_report,records WHERE police_report.complainant_id='".$id."' AND records.id='".$id."' ");
		echo '<center>';
		echo '<table style="padding:20px;margin:50px;">';
		while($res=mysql_fetch_array($query)){
			echo '<tr>';
				echo '<td>Event Number:'.$res['eventNmber'].' </td>';
				echo '<td>Reporting Officer:'.$res['apprehendingOffier'].'</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>Event Number:'.$res['eventNmber'].' </td>';
				echo '<td>Reporting Officer:'.$res['apprehendingOffier'].'</td>';
			echo '</tr>';
			echo '<tr></tr><tr></tr>';
			echo '<tr>';
				echo '<td>
				<br><br>
				<b>Event Detail:</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											'.$res['detail_event'].' </td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>
				<br><br>
				<b>Action Taken:</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											'.$res['action_taken'].' </td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>
				<br><br>
				<b>Summary:</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											'.$res['summary'].' </td>';
			echo '</tr>';
			
		}
		echo '</table>';
		
		echo '</center>';
	echo '</div>';
	
	
	
}
	
?>
<script type="text/javascript">
	 function printDiv() {
           var divID = "ReportDoc";
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = "<html><head><title></title></head><body>" + divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
</script>