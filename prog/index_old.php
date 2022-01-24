<?php
require_once 'server/connection.php';

	if(isset($_POST['showCriminal'])){
		echo '
			<div id="criminalModal" style="overflow:auto;" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content" style="overflow:auto;">

								<div class="modal-header" style="background-color:teal;">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
								  <h4 class="modal-title" id="myModalLabel" style="color:white;">Accused</h4>
								</div>
									<div class="modal-body" id="criminalModalImage">		 
										
								   </div>
								<div class="modal-footer" style="background-color:teal">
									<label class="label label-error">
									</label>
								  <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:white;font-weight:bold;">Exit</button>
								</div>

							  </div>
							</div>
						  </div>
		
		';
		$query = mysql_query("SELECT * FROM records");
		
		echo '<div class="container-fluid">';
			echo '<div class="row">';
			  
		while($res=mysql_fetch_array($query)){
			echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin:0;padding:0;">';
				echo '<img src="images/uploads/'.$res['picture'].'"  id="'.$res['id'].'" width="150" height="200" data-toggle="modal" 
										data-target="#criminalModal" onclick="showCriminalFace(this.id);"> &nbsp;&nbsp;';
				echo "Name:".$res['accusedName'].'<br>';
				
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
		?>
		<script type="text/javascript">
			function showCriminalFace(id){
				$.post('criminalImage.php',{id:id},function(data){
					$("#criminalModalImage").html(data);
				});
			}
		</script>
		<?php
	}

	if(isset($_POST['myid'])){
		$id= $_POST['myid'];
		echo $id;
	}

	if(isset($_POST['secondid'])){
	
	$query = mysql_query("SELECT * FROM police_report WHERE complainant_id='".$_POST['secondid']."' ");
		
		$fetch = mysql_fetch_array($query);
		echo '<input type="hidden" id="secondHidden" value="'.$_POST['secondid'].'">';
		echo '<h1>Police Report Form</h1>';
		echo '<table class="table table-bordered table-striped">';					
				
					echo '<tr>';													
							echo '<td>';
								echo '<label class="label label-default">Detail of Event</label><br>';
									echo'<textarea id="taEvent" cols="150" rows="10">'.$fetch['detail_event'].'</textarea>';
										
							echo '</td>';
							
					echo '</tr>';
					
					echo '<tr>';
								echo '<td>';
								echo '<label class="label label-default">Action Taken</label><br>';
									echo'<textarea id="taAction" cols="150" rows="10">'.$fetch['action_taken'].'</textarea>';
										
							echo '</td>';
					echo '</tr>';
						echo '<tr>';
								echo '<td>';
								echo '<label class="label label-default">Summary</label><br>';
									echo'<textarea id="taSummary" cols="150" rows="10">'.$fetch['summary'].'</textarea>';
										
							echo '</td>';
					echo '</tr>';
					echo '</tr>';
						echo '<tr>';
							echo '<td>';
									echo '<input type="button" class="btn btn-info" value="Save" id="btnSavePoliceReport" onclick="saveReport();">&nbsp;';
									echo '<input type="button" class="btn btn-primary" id="btnUpdatePoliceReport" value="Update" onclick="updateReport();">&nbsp;';
									echo '<input type="button" class="btn btn-danger" id="btnViewReport" value="View Report" onclick="viewReport();">';
							echo '</td>';
					echo '</tr>';
		
		?>
		<script type="text/javascript"> 
			
			function saveReport(){
				var event = document.getElementById("taEvent").value;
				var action = document.getElementById("taAction").value;
				var summary = document.getElementById("taSummary").value;
				var id = document.getElementById("secondHidden").value;
				$.post('savePoliceReport.php',{id:id,event:event,action:action,summary:summary},function(data){
					
					alert(data);
					if(data=="Data Saved."){
						location.reload();
					}
				});
			}
			function updateReport(){
				var event = document.getElementById("taEvent").value;
				var action = document.getElementById("taAction").value;
				var summary = document.getElementById("taSummary").value;
				var id = document.getElementById("secondHidden").value;
				$.post('savePoliceReport.php',{id2:id,event2:event,action2:action,summary2:summary},function(data){
					alert(data);
				});
			}
			function viewReport(){
			var id = document.getElementById("secondHidden").value;
				$.post('policeReport.php',{reportId:id},function(data){
					$("#main").css({"background-image":"none"});
					$("#main").css({"background-color":"#fff"});
					$("#body").css({"background-image":"none"});
					$("#body").css({"background-color":"#fff"});
					$("#main").css({"color":"#000"});
					$("#body").css({"color":"#000"});
					
					$("#main").html(data);
				});
			}
		</script>
		<?php	
	  echo '</table>';
	}
	
	
					
?>