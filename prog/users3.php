<div id="users" style="display:none;">
    <div>
        <div style="float: left; min-width: 190px; margin-right: 10px;">
            <div style="border-bottom: solid #dae1e9 1px; padding-bottom: 7px; margin-bottom: 3px;">
                User List
            </div>
            <div id="users-list">
                
            </div>
        </div>
        <div style="float: left; min-width: 600px;">
            <div style="border-bottom: solid #dae1e9 1px; padding-bottom: 7px; margin-bottom: 3px;">
                User Setting
                <div style="float:right">
                    <input type="button" value="Create" id="btn-user-create" />
                    <input type="button" value="Home"  id="btn-user-back" />
                </div>
            </div>
            <div>
                <div style="float:left; min-width: 150px; text-align: right;">
                    <div style="padding: 5px 0 3px 0">First Name</div>
                    <div style="padding: 5px 0 3px 0">Last Name</div>
                    <div style="padding: 5px 0 3px 0">Age</div>
                    <div style="padding: 5px 0 3px 0">Current Address</div>
                    <div style="padding: 5px 0 3px 0">Officer Position</div>
                    <div style="padding: 3px 0 3px 0">Officer ID Number</div>
                    <div style="padding: 4px 0 3px 0">Username</div>
                    <div style="padding: 4px 0 3px 0">Password</div>
					<div style="padding: 4px 0 3px 0">Confirm Password</div>
                    <div style="padding: 4px 0 3px 0">Date Registered</div>
                    <div style="padding: 4px 0 3px 0">Is Admin</div>
                </div>
                <div style="float:left; min-width: 97px; padding: 0 0 0 5px;">
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="30" style="margin: 0;" tabindex="1" value="" id="user-firstname" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="30" style="margin: 0;" tabindex="1" value="" id="user-lastname" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="15" style="margin: 0;" tabindex="1" value="" id="user-age" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="30" style="margin: 0;" tabindex="1" value="" id="user-address" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="30" style="margin: 0;" tabindex="1" value="" id="user-position" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="30" style="margin: 0;" tabindex="1" value="" id="user-id-number" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="30" style="margin: 0;" tabindex="1" value="" id="user-username" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="password" size="30" style="margin: 0;" tabindex="1" value="" id="user-password" /></div>
					<div style="margin: 5px 0 4px 0;"><input type="password" size="30" style="margin: 0;" tabindex="1" value="" id="user-password-confirmation" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="text" size="25" style="margin: 0;" tabindex="1" disabled="disabled" value="" id="user-registration" /></div>
                    <div style="margin: 5px 0 4px 0;"><input type="checkbox" value="0" id="user-is-admin" /></div>
                    <div style="margin: 5px 0 4px 0;">
                        <input type="button" value="dtr" id="btn-dtr-user" style="display:none; float: left; " />
                        <input type="button" value="update" id="btn-user-update" style="float: left; " />
                        <input type="button" value="save" id="btn-user-save" style="display:none; float: left; " />
                    </div>
                    <input type="hidden" id="user-id" />
                </div>

                <div style="float:left; min-width: 97px; padding: 0 0 0 10px;">
                    <div style="margin: 4px 0 4px 0;"><input type="file" id="file-user-image" /></div>
                    <div><img src="images/image-default.png" alt="picture" style="width: 200px; height: 183px;" id="img-user-image" /></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).delegate("#btn-dtr-user", "click", function () {

        $.ajax({
            url: "server/dtr.php?userid=" + $("#user-id").val(),
            dataType: 'json',
            context: document.body
        }).success(function (data) {
            $("#dtr-timein").html("");
            $("#dtr-timeout").html("");
            $("#dtr-duration").html("");

            var count = data.length;
            for (var x = 0; x < count; x++) {
                var record = data[x];

                $("#dtr-timein").append("<div>" + record.timein + "</div>");
                $("#dtr-timeout").append("<div>" + (record.timeout === null ? "FAILED" : record.timeout) + "</div>");
                $("#dtr-duration").append("<div>" + (record.duration === null ? "FAILED" : record.duration) + "</div>");
            }

            $.blockUI({
                centerY: 0,
                message: $("#dtr-container"),
                css: {
                    padding: "5px 10px 5px 5px",
                    width: "auto",
                    border: "1px",
                    cursor: "default",
                    top: "30%",
                    left: "35%"
                },
                overlayCSS: {
                    cursor: "default"
                }
            });
        });
    });

    var path = null;

    function getUsers() {
        $.ajax({
            url: "server/user-list.php",
            dataType: 'json',
            context: document.body
        }).success(function (data) {
            $("#users-list").html("");

            $.each(data, function (i, e) {
                var html = "<div style=\"height: 30px;\">" +
                                "<div style='float:left; cursor: pointer;' id='user_" + e.id + "'>" + e.lastname + ", " + e.firstname + "</div>" +
                                "<div style='margin-bottom: 10px; float:right; cursor:pointer;' id='delete_user_" + e.id + "'>" + '<b>-</b>' + "</div>" +
                           "</div>";

                $("#users-list").append(html);

                $(document).delegate("#delete_user_" + e.id, "click", function () {
                    var id = e.id;

                    $.ajax({
                        type: "POST",
                        url: "server/user.php?command=DELETE",
                        data: {
                            'id': id
                        },
                        dataType: 'json',
                        context: document.body,
                        success: function (data) {
                            getUsers();
                        },
                        error: function (data) {
                            getUsers();
                        }
                    });
					
					$("#img-user-image").attr("src", "images/image-default.png");
                });

                $(document).delegate("#user_" + e.id, "click", function () {

                    $("#user-firstname").val(e.firstname);
                    $("#user-lastname").val(e.lastname);
                    $("#user-age").val(e.age);
                    $("#user-address").val(e.address);
                    $("#user-position").val(e.position);
                    $("#user-registration").val(e.dateRegistered);
                    $("#user-username").val(e.username);
                    $("#user-password").val(e.password);
                    $("#user-id-number").val(e.officerIdNum);
                    $("#user-id").val(e.id);

                    if (e.isAdmin == 1) {
                        $("#user-is-admin").attr("checked", "checked");
                    }

                    var path = e.picture != "" ? e.picture : "default.png";
                    $('#img-user-image').attr('src', "images/user-avatar/" + path);

                    $("#btn-dtr-user").css("display", "block");
                    $("#btn-user-update").css("display", "block");
                    $("#btn-user-save").css("display", "none");

                    $("#users-list").find(".active").removeAttr("class");
                    $(this).attr("class", "active");
                });
            });
        });

        createUser();
    }

    function createUser() {
        var date = new Date();
        var result = date.format("yyyy-mm-dd HH:mm:ss");

        $("#user-firstname").val("");
        $("#user-lastname").val("");
        $("#user-age").val("");
        $("#user-address").val("");
        $("#user-position").val("");
        $("#user-registration").val(result);
        $("#user-username").val("");
        $("#user-password").val("");
		$("#user-password-confirmation").val("");
        $("#user-id-number").val("");
        $("#user-id").val("");

        $("#btn-dtr-user").css("display", "none");
        $("#btn-user-update").css("display", "none");
        $("#btn-user-save").css("display", "block");
    }

    $(document).delegate("#file-user-image", "change", function () {
        var file = this.files[0];

        var reader = new FileReader();
        reader.onload = function (e) {
            $('#img-user-image').attr('src', e.target.result);

            path = e.target.result;
        };

        reader.readAsDataURL(file);
    });

    $(document).delegate("#btn-user-create", "click", function () {
        createUser();
    });

    $(document).delegate("#btn-user-back", "click", function () {
        $("#report-list").css("display", "block");
        $("#report-new").css("display", "none");
        $("#users").css("display", "none");
    });

    $(document).delegate("#btn-user-save", "click", function () {
		var message = "Are you sure to save this user?";
		var isContinue = confirm(message);
		
		if(!isContinue) return;
	
        var fname = $("#user-firstname").val();
        var lname = $("#user-lastname").val();
        var age = $("#user-age").val();
        var address = $("#user-address").val();
        var position = $("#user-position").val();
        var username = $("#user-username").val();
        var password = $("#user-password").val();
		var password2 = $("#user-password-confirmation").val();
        var useridnum = $("#user-id-number").val();
        var id = $("#user-id").val();
        var isadmin = $("#user-is-admin").is(":checked") ? 1 : 0;

        var picture = $("#file-user-image").val().replace("C:\\fakepath\\", "");
		
		if(!(password == password2)) {
			alert("password mismatch! try again...");
			return;
		}
		
        $.ajax({
            type: "POST",
            url: "server/user.php?command=ADD",
            data: {
                'firstname': fname,
                'lastname': lname,
                'age': age,
                'current_address': address,
                'position_officer': position,
                'picture': picture,
                'officer_id_num': useridnum,
                'username': username,
                'password': password,
                'isAdmin': isadmin,
                'id': id,
                'file': path
            },
            dataType: 'json',
            context: document.body,
            success: function (data) {
                if (data.result) {
                    getUsers();
                    //alert("Data successfuly updated");
                } else {
                    alert("An error while updating the data has been encountered...");
                }
                //console.log(data.result);
            },
            error: function (data) {
                console.log("error");
            }
        });
    });

    $(document).delegate("#btn-user-update", "click", function () {
		var message = "Are you sure to update this user?";
		var isContinue = confirm(message);
		
		if(!isContinue) return;		
	
        var fname = $("#user-firstname").val();
        var lname = $("#user-lastname").val();
        var age = $("#user-age").val();
        var address = $("#user-address").val();
        var position = $("#user-position").val();
        var username = $("#user-username").val();
        var password = $("#user-password").val();
		var password2 = $("#user-password-confirmation").val();
        var useridnum = $("#user-id-number").val();
        var id = $("#user-id").val();
        var isadmin = $("#user-is-admin").is(":checked") ? 1 : 0;

        var picture = $("#file-user-image").val().replace("C:\\fakepath\\", "");
		
		if(!(password == password2)) {
			alert("password mismatch! try again...");
			return;
		}

        $.ajax({
            type: "POST",
            url: "server/user.php?command=UPDATE",
            data: {
                'firstname': fname,
                'lastname': lname,
                'age': age,
                'current_address': address,
                'position_officer': position,
                'picture': picture,
                'officer_id_num': useridnum,
                'username': username,
                'password': password,
                'isAdmin': isadmin,
                'id': id,
                'file': path
            },
            dataType: 'json',
            context: document.body
        }).success(function (data) {
            if (data.result) {
                getUsers();
                //alert("Data successfuly updated");
            } else {
                alert("An error while updating the data has been encountered...");
            }
            //console.log(data.result);
        }).error(function (data) {
            //alert("error");
        });
    });
</script>