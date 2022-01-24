						

<div id="report-new" style="display:none; height: 90%; overflow-y: scroll;">
	<input type="hidden" id="report-status" />
	
					
<div class="panel panel-default" id="report-status-table">
<table class="table table-bordered table-striped" >
    <div style="min-height:250px;" >
        <div style="margin: 0 0 10px 0;">
            <b><font size="+1">Incident Record Form</font></b>

            <div style="float:right;">
                <?php
                    if($isAdmin == 1) { 
                ?>
					<input type="hidden" id="complainant_id">
					
					<div style="float:left;margin:2px;">
						<input type="button" value="Police Report" class="btn btn-info btn-sm" id="btnPoliceReport" onclick="showPoliceReport()" />
						
					</div>
					<script type="text/javascript">
						function showPoliceReport(){
							var id = document.getElementById("complainant_id").value;
							
							$.post('index_old.php',{secondid:id},function(data){
								$("#report-status-table").html(data);
							});
						}
					</script>
					
                    <div style="float:left;">
						<input type="button" value="Edit" class="btn btn-info btn-sm" id="btn-report-edit" />
						
					</div>
					
                <?php 
                } 
                ?>

                <div style="float:left; margin-left: 5px;"><input type="button" value="Print" class="btn btn-info btn-sm" id="btn-report-print" /></div>
            </div>
        </div>
        <div style="margin: 0 0 10px 0; border-bottom: solid #dae1e9 1px;"><b><font size="+1">Complainant</font></b></div>
        <div style="float: left;">
            <!-- COLUMN 1 -->
            <div style="float:left; min-width: 150px; text-align: right;">
                <div style="padding: 5px 0 10px 10"><font size="+1">First Name</font></div>
				<div style="padding: 5px 0 10px 10"><font size="+1">Middle Name</font></div>
				<div style="padding: 5px 0 10px 10"><font size="+1">Last Name</font></div>
				<div style="padding: 5px 0 10px 10"><font size="+1">Extension Name</font></div>
                <!--<div style="padding: 5px 0 3px 0">Age</div>
                <div style="padding: 5px 0 3px 0">Gender</div>-->
            </div>
            <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
                <div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-first-name" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-middle-name" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-last-name" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-extension-name" /></div>
                <!--<div style="margin: 5px 0 4px 0;"><input type="text" style="width:95px; margin: 0;" tabindex="3" value="" id="complainant-age" /></div>
                <div style="margin: 5px 0 4px 0;">
                    <select style="font-size:16px; width:99px; margin: 0;" tabindex="5" id="complainant-gender">
                        <option selected="selected">Male</option>
                        <option>Female</option>
                     </select>
                </div>-->
            </div>
            <!-- COLUMN 1 -->

            <!-- COLUMN 2 -->
            <div style="float:left; min-width: 150px; text-align: right;">
				<div style="padding: 5px 0 10px 10"><font size="+1">Age</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Gender</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Address</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Contact no</font>.</div>
				<div style="padding: 5px 0 10px 10"><font size="+1">E-mail</font></div>
            </div>
            <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-age" /></div>
                <div style="margin: 5px 0 4px 0;">
                    <select style="font-size:16px; width:99px; margin: 0;" tabindex="2" id="complainant-gender">
                        <option selected="selected">Male</font></option>
                        <option>Female</font></option>
                     </select>
                </div>
                <div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-address" /></div>
                <div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-contact" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="complainant-e-mail" /></div>
            </div>
            <!-- COLUMN 2 -->
        </div>
    </div>

    <div style="min-height: 200px;">
        <div style="margin: 0 0 10px 0; border-bottom: solid #dae1e9 1px;"><b><font size="+1">Accused</font></font></b></div>
        <div style="float: left;">
            <!-- COLUMN 1 -->
            <div style="float:left; min-width: 150px; text-align: right;">
				<div style="padding: 5px 0 10px 10"><font size="+1">First Name</font></div>
				<div style="padding: 5px 0 10px 10"><font size="+1">Middle Name</font></div>
				<div style="padding: 5px 0 10px 10"><font size="+1">Last Name</font></div>
				<div style="padding: 5px 0 10px 10"><font size="+1">Extension Name</font></div>
                <!--<div style="padding: 5px 0 3px 0">Age</div>
                <div style="padding: 5px 0 3px 0">Gender</div>-->
            </div>
            <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="accused-first-name" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="accused-middle-name" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="accused-last-name" /></div>
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="accused-extension-name" /></div>
                <!--<div style="margin: 5px 0 4px 0;"><input type="text" style="width:95px; margin: 0;" tabindex="8" value="" id="accused-age" /></div>
                <div style="margin: 5px 0 4px 0;">
                    <select style="font-size:16px; width:99px; margin: 0;" tabindex="10" id="accused-gender">
                        <option value="Male" selected="selected">Male</option>
                        <option value="Female">Female</option>
                     </select>
                </div>-->
            </div>
            <!-- COLUMN 1 -->

            <!-- COLUMN 2 -->
            <div style="float:left; min-width: 150px; text-align: right;">
				<div style="padding: 5px 0 10px 10"><font size="+1">Age</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Gender</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Address</font></div>
                <div style="padding: 5px 0 10px 10; display: none;"><font size="+1">Contact no.</font></div>
            </div>
            <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
				<div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" value="" id="accused-age" /></div>
                <div style="margin: 5px 0 4px 0;">
                    <select style="font-size:16px; width:99px; margin: 0;" tabindex="3" id="accused-gender">
                        <option value="Male" selected="selected"><font size="+1">Male</font></option>
                        <option value="Female"><font size="+1">Female</font></option>
                     </select>
                </div>
                <div style="margin: 5px 0 4px 0;"><input type="text" class="form-control" id="accused-address" /></div>
                <div style="margin: 5px 0 4px 0;  display: none;"><input type="text" class="form-control" id="accused-contact" /></div>
            </div>
            <!-- COLUMN 2 -->
        </div>
    </div>

    <div>
		<div style="margin: 0 0 10px 0; border-bottom: solid #dae1e9 1px;"><b><font size="+1">Description of crime</font></b></div>
        <div style="float: left;">
            <!-- COLUMN 1 -->
            <div style="float:left; min-width: 150px; text-align: right;">
                <div style="padding: 5px 0 10px 10"><font size="+1">Event No.</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Subject/Incident</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Sanction of the crime</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Date Committed</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Place Committed</font></div>
                <div style="padding: 5px 5 10px 10"><font size="+1">Apprehending Officer</font></div>
                <div style="padding: 5px 0 10px 10"><font size="+1">Date recorded</font></div>
            </div>
            <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
                <div style="margin: 6px 0 0 0;"><span id="event-number">System Generated...</span><!--<input type="text" style="width:95px; margin: 0;" tabindex="11" value="Auto Generated" id="event-number" />--></div>
                <div style="margin: 6px 0 4px 0;"><input type="text" class="form-control" value="" id="subject" /></div>
                <div style="margin: 6px 0 4px 0;"><input type="text" class="form-control" value="" id="nature-of-crime" /></div>
                <div style="margin: 6px 0 4px 0;"><input type="text" class="form-control" value="" id="txt-date-commited" /></div>
                <div style="margin: 6px 0 4px 0;"><input type="text" class="form-control" value="" id="place-commited" /></div>
                <div style="margin: 6px 0 4px 0;"><input type="text" class="form-control" value="" id="apprehending-officer" /></div>
                <div style="margin: 6px 0 14px 0;"><input type="text" class="form-control" value="" id="txt-date-recoreded" /></div>
            </div>
            <!-- COLUMN 1 -->

            <!-- COLUMN 2 -->
            <div style="float:left; min-width: 150px; text-align: right;">
                <div style="padding: 5px 0 3px 0;"><font size="+1">Picture</font></div>
            </div>
            <div style="float:left; min-width: 150px; padding: 0 0 0 5px;">
                <!--<div style="margin: 4px 0 4px 0;"><input type="file" id="file-image" /></div>-->
                <input type="button" id="file-image" value="upload/take a picture" />
                <div><img src="images/image-default.png" alt="picture" style="width: 220px; height: 165px;" id="img-image" /></div>
            </div>
            <!-- COLUMN 2 -->
        </div>
    </div>

    <div >
        <div id="reason-container" style="float: left;">
            <!-- COLUMN 1 -->
            <div style="float:left; min-width: 150px; text-align: right;">
                <div style="padding: 5px 0 3px 0"><font size="+1">Incident Report</font></div>
            </div>
            <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
                <div id="txt-reason-holder">
                    <textarea rows="7" cols="70" tabindex="18" id="txt-reason" style="background-color: white; color: black;"></textarea>
                    <div id="txt-reason-print-preview" style="display:none; width: 335px;"></div>
                </div>

                <div style="margin: 5px 0 50px 0;">
                    <?php
                        if($islogedin) { 
                    ?>
                        <div style="float:left;"><input type="button" value="submit" class="btn btn-info btn-sm" id="btn-report-submit" /></div>
                    <?php 
                        } 
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
	</table>
</div>


    <div id="camera-view" style="display:none;">
        <div id="webcam"></div>
        <div><input type="button" value="take a shot" id="take-shot" onclick="base64_toimage()"/></div>
    </div>
</div>

<script type="text/javascript">
    var path = null, hasUploaded = false, reportCommand = "ADD", reportId = 0;

    $("#webcam").scriptcam({
        showMicrophoneErrors: false,
        onError: onError,
        uploadImage: 'images/upload.gif',
        onPictureAsBase64: base64_tofield_and_image
    });

    function onError(errorId, errorMsg) {
        alert(errorMsg);
    }

    function base64_toimage() {
        $('#img-image').attr("src", "data:image/png;base64," + $.scriptcam.getFrameAsBase64());

        hasUploaded = true;

        $.unblockUI();
    };

    function base64_tofield_and_image(b64) {
        $('#img-image').attr("src", "data:image/png;base64," + b64);

        hasUploaded = true;

        $.unblockUI();
    };

    function command(command, id) {
        reportCommand = command;
        reportId = id;
    }

    $(document).delegate("#file-image", "click", function () {


        $.blockUI({
            centerY: 0,
            message: $("#camera-view"),
            css: {
                padding: "5px",
                width: "auto",
                border: "1px",
                cursor: "default",
                top: "35%",
                left: "40%"
            },
            overlayCSS: {
                cursor: "default"
            }
        });
    });

    $(document).delegate("#btn-report-edit", "click", function () {
        //$("#complainant-name").removeAttr("disabled");
		$("#complainant-first-name").removeAttr("disabled");
		$("#complainant-middle-name").removeAttr("disabled");
		$("#complainant-last-name").removeAttr("disabled");
		$("#complainant-extension-name").removeAttr("disabled");
        $("#complainant-address").removeAttr("disabled");
        $("#complainant-contact").removeAttr("disabled");
        $("#complainant-e-mail").removeAttr("disabled", "disabled");
        $("#complainant-age").removeAttr("disabled", "disabled");

        //$("#accused-name").removeAttr("disabled");
		$("#accused-first-name").removeAttr("disabled");
		$("#accused-middle-name").removeAttr("disabled");
		$("#accused-last-name").removeAttr("disabled");
		$("#accused-extension-name").removeAttr("disabled");
        $("#accused-address").removeAttr("disabled");
        $("#accused-contact").removeAttr("disabled");
        $("#accused-age").removeAttr("disabled", "disabled");

        $("#event-number").removeAttr("disabled");
        $("#subject").removeAttr("disabled");
        $("#nature-of-crime").removeAttr("disabled");
        $("#place-commited").removeAttr("disabled");
        $("#apprehending-officer").removeAttr("disabled");

        $("#complainant-gender").removeAttr("disabled");
        $("#accused-gender").removeAttr("disabled");

        $("#txt-reason").removeAttr("disabled");
		
		$("#txt-date-commited").removeAttr("disabled", "disabled");
        $("#txt-date-recoreded").removeAttr("disabled", "disabled");

        $("#file-image").css("display", "block");

        $("#btn-report-edit").css("display", "none");
        $("#btn-report-print").css("display", "none");
        $("#btn-report-submit").css("display", "block");
    });

    $(document).delegate("#btn-report-print", "click", function () {
		$("#print-record").css("color", "black");
		$("#print-record").css("display", "block");
		$("#main").css("display", "none");
		
		$("#print-report-detail").html($("#txt-reason").val());
		$("#print-report-policename").html($("#setting").html());
		
		window.print();
		
		setTimeout(function() {
			$("#print-record").css("display", "none");
			$("#main").css("display", "block");
		}, 300);
		
        /*$("#btn-report-submit").css("display", "none");
        $("#btn-report-print").css("display", "none");
        $("#btn-report-back").css("display", "none");
        $("#search-container").css("display", "none");
        $("#client-detail-container").css("display", "none");
		$("#content-container-control").css("display", "none");
		$("#content-container-nav").css("display", "none");

        $("#report-new").css("width", "600px");

        $("#reason-container").css("margin-top", "70px");
        $("#txt-reason").css("display", "none");
        $("#txt-reason-print-preview").css("display", "block");

        $("#txt-reason-print-preview").html($("#txt-reason").val());*/
		
		/*$("#btn-report-submit").css("display", "none");
        $("#btn-report-edit").css("display", "none");
		$("#btn-report-print").css("display", "none");
		
		$("#header-container").css("display", "none");
		$("#content-container-control").css("display", "none");
		$("#content-container-nav").css("display", "none");
		
		$("#report-new").css("position", "absolute");
		$("#report-new").css("left", "-150px");
		$("#report-new").css("width", "800px");
		$("#report-new").css("overflow", "none");
		
        window.print();
		
		$("#btn-report-submit").css("display", "none");
        $("#btn-report-edit").css("display", "block");
		$("#btn-report-print").css("display", "block");
		
		$("#header-container").css("display", "block");
		$("#content-container-control").css("display", "block");
		$("#content-container-nav").css("display", "block");
		
		$("#report-new").css("position", "");
		$("#report-new").css("left", "");
		$("#report-new").css("width", "");
		$("#report-new").css("overflow-y", "auto");*/

        /*$("#reason-container").css("margin-top", "0px");
        $("#txt-reason").css("display", "block");
        $("#txt-reason-print-preview").css("display", "none");

        $("#btn-report-submit").css("display", "none");
        $("#btn-report-print").css("display", "block");
        $("#btn-report-back").css("display", "block");
        $("#search-container").css("display", "block");
        $("#client-detail-container").css("display", "block");

        $("#report-new").css("width", "auto");*/
    });

    $(document).delegate("#btn-report-submit", "click", function () {
		var message = "Are you sure to continue submission?";
		var isContinue = confirm(message);
		
		if(!isContinue) return;
	
        var complainantFirstName = $("#complainant-first-name").val();
		var complainantMiddleName = $("#complainant-middle-name").val();
		var complainantLastName = $("#complainant-last-name").val();
		var complainantExtensionName = $("#complainant-extension-name").val();
		
		var complainantName = complainantFirstName + '|' + complainantMiddleName + '|' + complainantLastName + '|' + complainantExtensionName;
        var complainantAddress = $("#complainant-address").val();
        var complainantContact = $("#complainant-contact").val();
        var complainantAge = $("#complainant-age").val();
        var complainantGender = $("select[id=complainant-gender]").val();

        var accusedFirstName = $("#accused-first-name").val();
		var accusedMiddleName = $("#accused-middle-name").val();
		var accusedLastName = $("#accused-last-name").val();
		var accusedExtensionName = $("#accused-extension-name").val();
		
		var accusedName = accusedFirstName + '|' + accusedMiddleName + '|' + accusedLastName + '|' + accusedExtensionName;
        var accusedAddress = $("#accused-address").val();
        var accusedContact = $("#accused-contact").val();
        var accusedAge = $("#accused-age").val();
        var accusedGender = $("select[id=accused-gender]").val();

        var eventNmber = $("#event-number").html();//$("#event-number").val();
        var picture = "";
        var subject = $("#subject").val();
        var natureOfCrime = $("#nature-of-crime").val();
        var dateCommited = $("#txt-date-commited").val();
        var placeCommited = $("#place-commited").val();
        var apprehendingOffier = $("#apprehending-officer").val();
        var dateRecoreded = $("#txt-date-recoreded").val();
        var reason = $("#txt-reason").val();
        
		var email = $("#complainant-e-mail").val();
		
		var status = $("#report-status").val();;
		
		if(status === "Solved" && reportCommand === "UPDATE")
		{
			status = "Voided";
		}
		else
		{
			status = accusedName.trim().replace(/\|/g, '') === "" ? "Unsolved" : "Solved" ;
		}
		
			
		
        var filename = "<?php $date = new DateTime(); echo $date->format('Y-m-d-H-i-s'); ?>.jpg";
        var path = $("#img-image").attr("src").indexOf("default") > 0 ? null : $("#img-image").attr("src");

        if (reportCommand === "UPDATE" && !hasUploaded) {
            filename = $("#img-image").attr("src").replace("images/uploads/", "");
            path = null;
        }

        hasUploaded = false;

        var data = "complainantName=" + complainantName +
                   "&complainantAddress=" + complainantAddress +
                   "&complainantContact=" + complainantContact +
                   "&complainantAge=" + complainantAge +
                   "&complainantGender=" + complainantGender +
                   "&accusedName=" + accusedName +
                   "&accusedAddress=" + accusedAddress +
                   "&accusedContact=" + accusedContact +
                   "&accusedAge=" + accusedAge +
                   "&accusedGender=" + accusedGender +
                   "&eventNmber=" + eventNmber +
                   "&picture=" + picture +
                   "&subject=" + subject +
                   "&natureOfCrime=" + natureOfCrime +
                   "&dateCommited=" + dateCommited +
                   "&placeCommited=" + placeCommited +
                   "&apprehendingOffier=" + apprehendingOffier +
                   "&dateRecoreded=" + dateRecoreded +
				   "&email=" + email +
				   "&status=" + status;
				   
        $.blockUI();
        
        $.ajax({
            type: "POST",
            url: "server/report.php?" + data,
            data: {
                'file': path,
                'filename': filename,
                'reason': reason,
                'command': reportCommand,
                'id': reportId
            },
            dataType: 'json',
            context: document.body
        }).success(function (data) {
            if (data.result) {
				$('#home-content').css("display", "none");
				$('#search-content').css("display", "block");
				$('#result-class-header').css("display", "none");
				$('#result-profile-header').css("display", "block");				

                $("#img-image").attr("src", "images/image-default.png");

                path = null;
				
				_searchKey = "";
				
                search();
            } else {
                $.growlUI('Notification', 'An Error occurred while saving...');
            }

            $.unblockUI();
        });
    });
</script>