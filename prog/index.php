<?php 
    //GLOBALS
    $islogedin = false;
    $isAdmin = 0;
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$idNum = $_POST['idnum'];
		$pos = $_POST['position'];
		$isAdmin = $_POST['isAdmin'];
		$picture = $_POST['picture'];
		$id = $_POST['id'];
		
		$islogedin = true;
	}
?>

<html>
	<head>
		<title>Police Report Record System</title>
		
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		
		<link rel="stylesheet" type="text/css" href="style/style.css" />
        <link rel="stylesheet" type="text/css" href="style/jquery.datetimepicker.css" />
        <script src="lib/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="lib/swfobject.js" type="text/javascript"></script>
        <script src="lib/scriptcam.min.js" type="text/javascript"></script>
        <script src="lib/jquery.blockUI.js" type="text/javascript"></script>
        <script src="lib/jquery.datetimepicker.js" type="text/javascript"></script>
        <script src="lib/date.format.js" type="text/javascript"></script>		
	</head>
	<body id="body">

		<?php if($islogedin) include 'print.php'; ?>
		<div id="main">
		
			<div id="header-container" style="background-color:#c7e0f9; height: 50px;">
					</div>
		
			<div id="header-container" style="background-color:#c7e0f9; height: 200px;">
				<center><img src="images/clear4.png" width=500 height=200/></center>
			</div>

			
			<div id="content-container">
				<!--<div id="content-container-content" style="width: 80%; height: auto; position: auto; left: 0;">-->
					<div id="content-container-content" style="margin: 0px 10px 0px 10px; color: black;">
					
<?php include'js/news.php'; ?>
<?php include'js/management.php'; ?>			
					
					
<!--						<div id="home-news-content" style="display: none; font-weight:normal; height:inherit; overflow-y: auto;">
							<div style="background-color: #0374ba; padding: 5px; color: white;">
								<b>News</b>
							</div>
							<div style="background-color: #FFFFFF; padding: 5px; color: white;">
								<div id="rss-container" style="color: black; font-weight: normal; font-size: 10px;">
									Rss Feed
								</div>
							</div>									
						</div>
						
<!--					div id="about-us-content" style="display: none; font-weight: normal; margin-left: 20px; padding-top: 20px;">
							<h1>The PNP Organization</h1>
							<p style="text-align: justify; width: 732; margin-left: 20px;">The Philippine National Police (PNP) is the primary law enforcement agency of the country, which is national in scope and civilian in character. It was activated on January 29, 1991 under Section 23, Chapter III, of Republic Act No.6975, entitled "An Act Establishing the Philippine National Police Under a Reorganized Department in the Interior and Local Government,". It was constitued from the full merger of the former Philippine Constabulary (PC) and the Integrated National Police (INP) with Police Director General CESAR NAZARENO as the First Chief, PNP. It is currently led by the 18th Chief, PNP, Pilice Director General ALAN LA MADRID PURISIMA.</p>
						</div>
						
						<div id="policies-content" style="display: none; font-weight: normal; margin-left: 20px; padding-top: 20px;">
							<h1>General Policy</h1>
							<div style="width: 600px; margin-left: 30px;">
								<b>a.</b> The Involvement of PNP peronel during strikes, lockouts and labor disputes in general shall be limited to the maintenance of peace and order, enforcement of laws, and implementation of legal orders of the duty constituted outhorities.
								<br/><br/>
								<b>b.</b> The PNP shall only render assistance to labor disputes upon written request addressed to the Chief of Police. In case of actual violence, the police can respond without the written request.
								<br/><br/>
								<b>c.</b> Insofar as practicable, no PNP personel shall be allowed to render police assistance in connection with a strike or lockout if there is question or complainant as regards his relationship by afinity or consanguinity to any official/leader of the parties in the controversy or if he has inicial or pecuniary interest therein.
								<br/><br/>
								<b>d.</b> PNP personel detailed as peace-keeping force in strike or lockout areas shall be in prescribed uniform at all times.
								<br/><br/>
								<b>e.</b> They shall exercise maximum tolerance and when called for by the situation or when all other peaceful and non-violent means have been exhausted, police officer may employ such means as may be necessary and reasonable to prevent or repel an aggression.
							</div>
						</div>
						
<!--						<div id="contact-us-content" style="display: none; font-weight: normal; margin-left: 20px; padding-top: 20px;">
							<h1>Contact us</h1>
							<div style="margin-left: 10px;">
								<span><b>Contact</b></span>
								
								<div style="margin-left: 30px; margin-top: 15px;">
									<div><span style="text-decoration: underline; color: #4a75c9;">Toril Police Station</span></div>
									<div>
										<img src="images/ContactIcon1.png" style="width: 30px; height: 30px; margin-bottom: -6px;"/>
										<span>2911633</span>
									</div>
									<div>
										<img src="images/ContactIcon2.png" style="width: 30px; height: 30px; margin-bottom: -6px;"/>
										<span>Toril</span>
									</div>
								</div>
							</div>
							<br/>
							<br/>
							<br/>
							<h1>Other Information</h1>
							<div style="margin-left: 30px; margin-top: 15px; width: 600px;">
								REMINDER: For other non-emergency police service assistance or inquiries, please go to your nearest police office or use the telephone numbers provided in the website to call the concerned police office.
							</div>
						</div>-->
						

								<div id="home-content" style="display: none; font-weight: normal;">
							<!--Welcome To Police Report Record Management System!-->
							
									<?php include 'report.php'; ?>
									<?php if($islogedin) include 'users.php'; ?>
								</div>
								

					
						<div id="search-content" style="display: none;">
							<!-- RESULT -->
							<div class="panel">
							<table class="table">
							<div style="height:50px; border-bottom: solid #dae1e9 1px; margin: 10px 0px;">
							
								<div id="result-profile-header" style="float: left; margin-top: 10px; display: none;">
									search result <span id="search-result-count">999</span>
								</div>
								<div id="result-class-header" style="float: left; margin-top: 3px; display: block; color: white;">
									<ul class="nav">
										<li id="btn-solved-cases" style="width: 130px;"><button type="button" class="btn btn-info btn-sm"><b class="glyphicon glyphicon-ok"></b> Reported cases</button></li>
										<li id="btn-unsolved-cases" style="width: 150px;"><button type="button" class="btn btn-info btn-sm"><b class="glyphicon glyphicon-remove"></b> Unsolved Cases</button></li>
										<li id="btn-voided-cases" style="width: 150px;"><button type="button" class="btn btn-danger btn-sm"><b class="glyphicon glyphicon-asterisk"></b> Voided Cases</button></li>
									</ul>
									
								</div>
							</div>
					

							<div style="float : left; font-weight: normal; height: 82%; overflow-y: auto;" id="report-list-result">
								<!--<div style="float : left; border-bottom: solid #dae1e9 1px; padding-bottom: 10px; cursor: pointer;">
									<div style="float : left; min-width: 80%;"><font size="+1">Event Number : 1</font></div>
									<div style="float : left; min-width: 20%;"><font size="+1">01/01/2015 4:30 PM</font></div>

									<div style="float : left; min-width: 80%; margin: 5px 0 0 0;"><font size="+1">Apprehending Officer : Juan Dela Cruz</font></div>
							
									<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Complainant Name : Frederick C Molina Jr.</font></div>
									<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Accused Name : Ivan Balio</font></div>

									<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Subject/Incident : Robery/Tieft</font></div>
									<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Date/Time Committed : 01/01/2014 1:03 PM</font></div>
						
									<div style="float : left; margin: 5px 0 0 0;"><font size="+1">Place Committed : Downtown Area</font></div>
								</div>-->
							
							</div>
							</table>
							</div>
							<!-- RESULT -->
						
						

				</div>
					
<!--				<div id="content-container-control" style="width: 100px; height: 100%; position: absolute; border-right: solid black;">
				
					<div id="content-container-control-search" style="margin: 58px 3px 0 0;">
						<div style="background-color: #0374ba; padding: 5px;">
							Search Results
						</div>
						
						<input id="txt-search-field" type=text style="width: 100%; margin: 2px 0px;"/>
						
						<ul class="nav-dark">
							<li id="btn-filter" style="margin: 0 3px 0 2px;">Filter</li>
							<li id="btn-search">Search</li>
						</ul>
					</div>-->
					
<!--					<div id="content-container-control-menu" style="position: absolute; bottom: 0; width: 100%;">
						<div style="margin-right: 3px;">
							<div style="background-color: #0374ba; padding: 5px;">
								Managements
							</div>
							<div style="color: #000000;">
								<div id="btnAboutUs" style="margin: 15px; cursor: pointer;">
									About us
								</div>
								<div id="btnPolicies" style="margin: 15px; cursor: pointer;">
									Policies
								</div>
								<div id="btnContactUs" style="margin: 15px; cursor: pointer;">
									Contact us
								</div>
							</div>
						</div>
					</div>-->
				</div>
			
				<!--<div id="content-container-nav" style="position:150px; background-color: #000000; height:55px; padding:inherit;">-->
					<!--<div style="float: left; margin: 12px 0 0 15px;">-->
					
					<div class="container">
					<div class="navbar navbar-default navbar-fixed-top">
						
						<ul class="nav navbar-nav"> 
						
							<li><b ><button type="button" id="btn-home" class="btn btn-primary"><b class="glyphicon glyphicon-home"></b> Home</b></button></></li>
							<li><b ><button type="button" id="btn-profile" class="btn btn-primary"><b class="glyphicon glyphicon-file"></b> Profiles</b></button></li>
							<li><b ><button type="button" id="btn-class" class="btn btn-primary"><b class="glyphicon glyphicon-th-list"></b> Classifications</b></button></li>
							<?php if($islogedin) {?><li id="btn-new-report"><button type="button" class="btn btn-primary"><b class="glyphicon glyphicon-folder-open"></b> Report Form</button></li>
								<li id="btn-criminal-list">
									<button type="button" class="btn btn-primary" onclick="showCriminal();">
									<b class="glyphicon glyphicon-folder-open"></b> Criminal List
									</button>
								</li>
							<?php }?>
							<script type="text/javascript">
								function showCriminal(){
								
									$.post('index_old.php',{showCriminal:"showCriminal"},function(data){
										
										$("#rss-container").html(data);
									});
								}
							</script>
							
						</ul>
											<!--=====searchbox=====-->
		<div class="col-xs-3 col-xs-offset-2">
		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default" id="btn-filter">Filter </button>

                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" id="txt-search-field" class="form-control"  placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="btn-search"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
		<!--=====searchbox=====-->
					
					
					<div  style="float: right; margin: 5px 5px 0 0;">
						<ul class="nav navbar-nav">
							<?php if($islogedin) { ?>
								<li style="background: none; width: auto; font-weight: normal; text-align: left; cursor: normal;">
									<div style="float:left;">
										<img src="images/user-avatar/<?php echo $picture; ?>" style="width: 42px; height: 42px; margin: -7px 4px 0 0;" />
									</div>
									<div style="float:left; margin: -7px 5px 0 0;">
										<div style="float: left; margin-right: 5px; padding-right: 5px; border-right: solid black 1px; border-right-color: white;">
											<?php if($isAdmin == 1) { ?><div style="cursor: pointer; text-decoration:underline;" id="setting"><?php echo $pos.' '.$fname.' '.$lname; ?></div> <?php } ?>
											<?php if($isAdmin == 0) { ?><div ><?php echo $pos.' '.$fname.' '.$lname; ?></div><?php } ?>
											<div style="cursor: pointer; text-decoration:underline; float: left;" id="logout"><b class="glyphicon glyphicon-log-out"></b> log out</div>
											<div style="float: right;" id="logout"><b><?php if($isAdmin == 1) { echo "Admin"; } else { echo "User"; } ?></b></div>
										</div>
										<div style="float: left; margin-top: 3px;">
											<div>Time/Date : <span id="dtr-date" style="text-decoration: underline; cursor: pointer;"><?php $date = new DateTime(); echo $date->format('Y-m-d H:i:s'); ?></span></div>
											<div>Officer I.D. :<?php echo $idNum; ?></div>
										</div>
									</div>
								</li>
							<?php } else { ?>
								<li id="btn-login"><button type="button" class="btn btn-primary"><b class="glyphicon glyphicon-log-in"></b> Login</button></li>
							<?php } ?>
						</ul>
					</div>
					
					</div>
				</div>
			</div>
			</div>
			<!--</div>-->
		</div>
		
        <!-- FILTER -->
        <div id="search-filter-container" style="font-size: 12px; display: none; text-align: left;">
            <div style="font-size: 16px; border-bottom: solid 1px #808080; margin-bottom: 5px;">Filter</div>
            <div><input type="checkbox" checked="checked" value="" id="cb-complainantName"/> Complainant Name</div>
            <div><input type="checkbox" checked="checked" value="" id="cb-accusedName"/> Accused Name</div>
            <div><input type="checkbox" id="cb-date"/> Date</div>
            <div style="text-align: right; padding: 5px 5px 5px 26px;">
                <div style="margin-bottom: 5px;">
                    from <input type="text" id="dateFrom" disabled="disabled"/>
                </div>
                <div>
                    to <input type="text" id="dateTo" disabled="disabled"/>
                </div>
            </div>
            <div style="text-align: center; border-top: solid 1px #808080; margin-top: 5px; padding-top: 3px;">
                <input type="button" value="ok" id="btn-filter-ok"/>
            </div>
        </div>
        <!-- FILTER -->		
		
        <!-- LOGIN -->
        <div id="login-container" style="font-size: 12px; display: none; text-align: left;">
            <form method="post" action="index.php" id="form-login">
                <div style="font-size: 16px; border-bottom: solid 1px #808080; margin-bottom: 5px;">Login</div>
                <div style="text-align: right; padding: 5px 5px 5px 26px;">
                    <input type="hidden" name="firstname" id="txt-fname" />
                    <input type="hidden" name="lastname" id="txt-lname" />
                    <input type="hidden" name="age" id="txt-age" />
                    <input type="hidden" name="address" id="txt-address" />
                    <input type="hidden" name="position" id="txt-position" />
                    <input type="hidden" name="picture" id="txt-picture" />
                    <input type="hidden" name="dateregister" id="txt-register" />
                    <input type="hidden" name="idnum" id="txt-idnum" />
                    <input type="hidden" name="isAdmin" id="isAdmin" />
                    <input type="hidden" name="id" id="id" />

                    <div style="margin-bottom: 5px;">
                        <label><font size="+1">Username&nbsp;</font><label> <input type="username" class="form-control " id="txt-username" name="username"/>
                    </div>
					
                    <div style="margin-bottom: 10px;">
                        <label><font size="+1">Password&nbsp;<label><input type="password" class="form-control " id="txt-password" name="password"/>
                    </div>
                    <div id="login-result" style="text-align:center; color:red; margin-top: 3px;"></div>
                </div>
                <div style="text-align: right; border-top: solid 1px #808080; margin-top: 5px; padding-top: 3px;">
                    <input type="button" value="ok" id="btn-login-ok" class="btn btn-info btn-sm"/>
                    <input type="button" value="cancel" id="btn-login-cancel" class="btn btn-danger btn-sm"/>
                </div>
            </form>
        </div>
        <!-- LOGIN -->		
		
		<!-- DTR -->
        <?php //if($islogedin) { ?>
            <div id="dtr-container" style="font-size: 12px; display: none; text-align: left; min-height: 350px;">
                <div style="font-size: 16px; border-bottom: solid 1px #808080; margin-bottom: 5px;">Daily Time Record</div>
                <div style="min-height: 300px; max-height: 300px; overflow-y: auto; margin-bottom: 5px;">
                    <!-- column 1 -->
                    <div  style="float: left; min-width: 150px;">
                        <div>Log in</div>
                        <div id="dtr-timein">
                            2014-04-22 13:09:57
                        </div>
                    </div>
                
                    <!-- column 2 -->
                    <div  style="float: left; min-width: 150px;">
                        <div>Log out</div>
                        <div id="dtr-timeout">
                            2014-04-22 18:09:57
                        </div>
                    </div>
                
                    <!-- column 2 -->
                    <div  style="float: left; min-width: 150px;">
                        <div>Duration</div>
                        <div id="dtr-duration">
                            5Hr
                        </div>
                    </div>
                </div>

                <div style="float: right;"><input type="button" value="close" id="btn-dtr-close" /></div>
            </div>
        <?php //} ?>
        <!-- DTR -->	
		<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		
			<div class="navbar-text pull-left">
				<p>Copyright &copy 2014-2015.</p>
			</div>
			<div class="navbar-text pull-right">
				<p>KitLab. &copy </p>
			</div>
		</div>
	</body>
		

	<script type="text/javascript">
		var _searchKey = "";
	
		$('#dateFrom').datetimepicker();
        $('#dateTo').datetimepicker();
		$('#txt-date-commited').datetimepicker();
        $('#txt-date-recoreded').datetimepicker();
	
        $(document).ready(function () {
            var date = new Date();
            var result = date.format("yyyy/mm/dd HH:mm");

            $('#dateFrom').val(result);
            $('#dateTo').val(result);

			$('#home-content').css("display", "block");
			
            search();
			GetRssFeed();
			
			$('#home-news-content').css("display", "block");
        });
		
		$(document).delegate("#btn-home", "click", function () {
			$('#users').css("display", "none");
			$('#report-new').css("display", "none");
		location.reload()
			RestDisplay();
			$('#home-content').css("display", "block");
			$('#home-news-content').css("display", "block");
			//$('#search-content').css("display", "none");
		});
		
		$(document).delegate("#btn-profile", "click", function () {
		
			RestDisplay();
			//$('#home-content').css("display", "none");
			$('#search-content').css("display", "block");
			
			$('#result-class-header').css("display", "none");
			$('#result-profile-header').css("display", "block");
		});
		
		$(document).delegate("#btn-class", "click", function () {
			RestDisplay();
			//$('#home-content').css("display", "none");
			$('#search-content').css("display", "block");
			
			$('#result-class-header').css("display", "block");
			$('#result-profile-header').css("display", "none");
		});
		
		$(document).delegate("#btn-solved-cases", "click", function () {
			_searchKey = "Solved";
			search("Status");
		});
		
		$(document).delegate("#btn-unsolved-cases", "click", function () {
			_searchKey = "Unsolved";
			search("Status");
		});
		
		$(document).delegate("#btn-voided-cases", "click", function () {
			_searchKey = "Voided";
			search("Status");
		});
		
		$(document).delegate("#btn-new-report", "click", function () {
			$('#users').css("display", "none");
			$('#report-new').css("display", "block");
			
			RestDisplay();
			$('#home-content').css("display", "block");
			//$('#search-content').css("display", "none");
			
			$.ajax({
                url: "server/getEventId.php",
                dataType: 'json',
                context: document.body
            }).success(function (data) {
				var date = new Date();
				var result = date.format("yyyy-mm-dd HH:mm:ss");
				
				$("#report-status").val("");
				
				$("#complainant-first-name").val("").removeAttr("disabled");
				$("#complainant-middle-name").val("").removeAttr("disabled");
				$("#complainant-last-name").val("").removeAttr("disabled");
				$("#complainant-extension-name").val("").removeAttr("disabled");
				
				$("#complainant-address").val("").removeAttr("disabled");
				$("#complainant-contact").val("").removeAttr("disabled");
				$("#complainant-age").val("").removeAttr("disabled");
				$("#complainant-e-mail").val("").removeAttr("disabled");

				$("#accused-first-name").val("").removeAttr("disabled");
				$("#accused-middle-name").val("").removeAttr("disabled");
				$("#accused-last-name").val("").removeAttr("disabled");
				$("#accused-extension-name").val("").removeAttr("disabled");
				
				$("#accused-address").val("").removeAttr("disabled");
				$("#accused-contact").val("").removeAttr("disabled");
				$("#accused-age").val("").removeAttr("disabled");
				
				$("#event-number").html("BL-" + data.result);
				//$("#event-number").val("").removeAttr("disabled");
				$("#subject").val("").removeAttr("disabled");
				$("#nature-of-crime").val("").removeAttr("disabled");
				$("#place-commited").val("").removeAttr("disabled");
				$("#apprehending-officer").val("").removeAttr("disabled");
				//$("#apprehending-officer").val($("#setting").html()).removeAttr("disabled");
				
				$("#txt-date-commited").val(result).removeAttr("disabled");
				$("#txt-date-recoreded").val(result).removeAttr("disabled");

				$("#complainant-gender").val("Male").removeAttr("disabled");
				$("#accused-gender").val("Male").removeAttr("disabled");

				$("#txt-reason").val("").removeAttr("disabled");

				$("#file-image").css("display", "block");

				$("#btn-report-submit").css("display", "block");
				$("#btn-report-print").css("display", "none");
				$("#btn-report-edit").css("display", "none");
				
				command("ADD", 0);			
			});
		});
		
		$(document).delegate("#btnAboutUs", "click", function () {
			RestDisplay();
			$('#about-us-content').css("display", "block");
		});
		
		$(document).delegate("#btnPolicies", "click", function () {
			RestDisplay();
			$('#policies-content').css("display", "block");
		});
		
		$(document).delegate("#btnContactUs", "click", function () {
			RestDisplay();
			$('#contact-us-content').css("display", "block");
		});
		
		function RestDisplay() {
			$('#home-news-content').css("display", "none");
			$('#home-content').css("display", "none");
			$('#search-content').css("display", "none");
			$('#about-us-content').css("display", "none");
			$('#policies-content').css("display", "none");
			$('#contact-us-content').css("display", "none");
		}
		
		//RSS FEED
		
		function GetRssFeed () {
			$("#rss-container").html("");
			
			//https://ph.news.yahoo.com/rss/opinion
			////www.senate.gov.ph/rss/rss_news.aspx
			//http://www.inquirer.net/fullfeed
			
			$.ajax({
				url: 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=8&q=http://www.inquirer.net/fullfeed',
				type: 'GET',
				dataType: 'jsonp',
				success: function(data) {
					console.log(data);
				
					var entries = data.responseData.feed.entries;
					var totalEntries = entries.length;
					var currentEntry = 0;
					
					
					
					for(var i = 0; i < totalEntries; i++) {
						var entry = entries[i];
						
						var media = "";						
						if(entry.mediaGroups !== undefined) {
							media = entry.mediaGroups[0].contents[0].url;
						}
						
						var html = "<div id='entry_" + i + "' style='display: block'>" +
										"<div><a href='" + entry.link + "'><h4>" + entry.title + ".</h4></a></div>" +
										"<img src='" + media + "' width='130' height='90' align='left' border='0' />" +
										"<div>" + entry.content + "</div>" +
										//"<div style='float: right;'><a href='" + entry.link + "'>read more</a></div>" +
									"</div>";
					
						$("#rss-container").append(html);
					}
					
					/*$("#entry_" + currentEntry).show(500);
					currentEntry++;
					
					setInterval(function() {
						if(currentEntry > 0) {
							$("#entry_" + (currentEntry - 1)).hide();
						} else {
							$("#entry_" + (totalEntries - 1)).hide();
						}
						
						$("#entry_" + currentEntry).show(500);
					
						currentEntry++;
						
						if(currentEntry == totalEntries) {
							currentEntry = 0;
						}
					}, 30000);*/
				}
			});
		}
		
		//RSS FEED
		
		//FILTER
        $(document).delegate("#btn-filter", "click", function () {
            $.blockUI({
                centerY: 0,
                message: $("#search-filter-container"),
                css: {
                    padding: "5px 10px 5px 5px",
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
		
        $(document).delegate("#btn-filter-ok", "click", function () {
            $.unblockUI();
        });

        $(document).delegate("#cb-date", "click", function (e) {
            var isChecked = $("#cb-date").is(":checked");

            if (isChecked) {
                $("#dateFrom").removeAttr("disabled");
                $("#dateTo").removeAttr("disabled");
            } else {
                $("#dateFrom").attr("disabled", "disabled");
                $("#dateTo").attr("disabled", "disabled");
            }
        });		
		//FILTER
	
		//LOGIN
        $(document).delegate("#btn-login", "click", function () {
            $.blockUI({
                centerY: 0,
                message: $("#login-container"),
                css: {
                    padding: "5px 10px 5px 5px",
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
		
		$(document).delegate("#btn-login-ok", "click", function () {
            var username = $("#txt-username").val();
            var password = $("#txt-password").val();

            $.ajax({
                url: "server/login.php?username=" + username + "&password=" + password + "",
                dataType: 'json',
                context: document.body
            }).success(function (data) {
                if (data.result) {
                    $("#login-result").css("color", "green");
                    $("#login-result").html("Redirecting...");

                    $("#txt-fname").val(data.firstname);
                    $("#txt-lname").val(data.lastname);
                    $("#txt-age").val(data.age);
                    $("#txt-address").val(data.current_address);
                    $("#txt-position").val(data.position_officer);
                    $("#txt-picture").val(data.picture == "" ? "default.png" : data.picture);
                    $("#txt-register").val(data.date_register);
                    $("#txt-idnum").val(data.officer_id_num);
                    $("#isAdmin").val(data.isAdmin);
                    $("#id").val(data.id);

                    $("#form-login").submit();
                } else {
                    $("#login-result").html("Invalid username or password");
                }
            });
        });		
		
		$(document).delegate("#btn-login-cancel", "click", function () {
            $.unblockUI();
			
			search();
        });

        $(document).delegate("#logout", "click", function () {
            $.ajax({
                url: "server/logout.php?userid=<?php if($islogedin) { echo $id; } else { echo 0; } ?>",
                dataType: 'json',
                context: document.body
            }).success(function () {
                window.location.assign(document.URL);
            }).error(function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            });
        });
		
		$(document).delegate("#dtr-date", "click", function () {
			$.ajax({
                url: "server/dtr.php?userid=<?php if($islogedin) { echo $id; } else { echo 0; } ?>",
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
                    $("#dtr-timeout").append("<div>" + (record.timeout === null ? "Failed; " : record.timeout) + "</div>");
                    $("#dtr-duration").append("<div>" + (record.duration === null ? "Failed;" : record.duration) + "</div>");
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
		
        $(document).delegate("#btn-dtr-close", "click", function () {
            $.unblockUI();
        });
		
		$(document).delegate("#setting", "click", function () {
            $("#report-list").css("display", "none");
            $("#report-new").css("display", "none");
            $("#users").css("display", "block");
			
			RestDisplay();
			$('#home-content').css("display", "block");
			//$('#search-content').css("display", "none");

            getUsers();
			$("#user-password").val("");
        });
		//LOGIN
		
		//SEARCH
		$(document).delegate("#btn-search", "click", function () {
			var filters;
            var dateFilters;
			
			_searchKey = $("#txt-search-field").val();

            if ($("#cb-complainantName").is(':checked')) {
                filters = "complainantName";
            }
            if ($("#cb-accusedName").is(':checked')) {
                if (filters.length > 0) filters += "|";

                filters += "accusedName";
            }
            if ($("#cb-date").is(':checked')) {
                if (filters.length > 0) filters += "|";

                filters += "dateRecorded";
                dateFilters = { "dateFrom": $("#dateFrom").val(), "dateTo": $("#dateTo").val() };
            }

            search(filters, dateFilters);
			
			RestDisplay();
			//$('#home-content').css("display", "none");
			$('#search-content').css("display", "block");
			$('#result-class-header').css("display", "none");
			$('#result-profile-header').css("display", "block");
		});
		
		function search(filters, dateFilters) {
			var dateFrom, dateTo;

            if (typeof (filters) == 'undefined') filters = "";
            if (typeof (dateFilters) == 'undefined') {
                dateFilters = "";
            } else {
                dateFrom = dateFilters.dateFrom;
                dateTo = dateFilters.dateTo;
            }
			
            $("#report-list-result").html("");

            var isLogin = "<?php echo $islogedin ? 'true' : 'false';?>";
			
			$.ajax({
                type: "POST",
                url: "server/report-list.php",
                data: { "filters": filters, "dateFrom": dateFrom, "dateTo": dateTo, "seachKey": _searchKey, "islogedin": isLogin },
                dataType: "json",
                context: document.body
            }).success(function (data) {
					
				var count = (data.list).length;

                $("#search-result-count").html(count);
			
				$.each(data.list, function (i, e) {
					var complainantname = e.complainantName.split('|');
					var accusedname = e.accusedName.split('|');
				
					var html = '<div id="report_' + e.id + '" style="float : left; border-bottom: solid #dae1e9 1px; padding-bottom: 10px; margin-bottom: 10px;">' +
                                    '<div style="float : left; min-width: 80%;"><font size="+1">Event Number : ' + e.eventNmber + '</font></div>' +
                                    '<div style="float : left; min-width: 20%;"><font size="+1">' + e.dateRecoreded + '</font></div>' +

                                    '<div style="float : left; min-width: 80%; margin: 5px 0 0 0;"><font size="+1">Apprehending Officer :</font> ' + e.apprehendingOffier + '</div>' +

                                    '<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Complainant Name :</font> ' + e.complainantName.replace(/\|/g, ' ') + '</div>' +
                                    '<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Accused Name :</font> ' + e.accusedName.replace(/\|/g, ' ') + '</div>' +

                                    '<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Subject/Incident :</font> ' + e.subject + '</div>' +
                                    '<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Date/Time Committed :</font> ' + e.dateCommited + '</div>' +

                                    '<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Place Committed :</font> ' + e.placeCommited + '</div>' +
									'<div style="float : left; min-width: 50%; margin: 5px 0 0 0;"><font size="+1">Status :</font> ' + e.status + '</div>' +
                               
							   '</div>';
						
                    $("#report-list-result").append(html);
					
					if (data.islogedin) {
                        $("#report_" + e.id).css("cursor", "pointer");
                        $(document).delegate("#report_" + e.id, "click", function () {
						
						var myid= e.id;
						$.post('index_old.php',{myid:myid},function(data){
							$('#complainant_id').val(data);
							
						});
					
					/////////////HEY
					$('#users').css("display", "none");
							$('#report-new').css("display", "block");
						
							RestDisplay();
							$('#home-content').css("display", "block");
							//$('#search-content').css("display", "none");

                            var data = e;
							
							$("#report-status").val(e.status);
							
							$("#complainant-first-name").val(complainantname[0]).attr("disabled", "disabled");
							$("#complainant-middle-name").val(complainantname[1]).attr("disabled", "disabled");
							$("#complainant-last-name").val(complainantname[2]).attr("disabled", "disabled");
							$("#complainant-extension-name").val(complainantname[3]).attr("disabled", "disabled");
							
                            //$("#complainant-name").val(e.complainantName).attr("disabled", "disabled");
                            $("#complainant-address").val(e.complainantAddress).attr("disabled", "disabled");
                            $("#complainant-contact").val(e.complainantContact).attr("disabled", "disabled");
                            $("#complainant-age").val(e.complainantAge).attr("disabled", "disabled");
							$("#complainant-e-mail").val(e.email).attr("disabled", "disabled");

							$("#accused-first-name").val(accusedname[0]).attr("disabled", "disabled");
							$("#accused-middle-name").val(accusedname[1]).attr("disabled", "disabled");
							$("#accused-last-name").val(accusedname[2]).attr("disabled", "disabled");
							$("#accused-extension-name").val(accusedname[3]).attr("disabled", "disabled");
							
                            //$("#accused-name").val(e.accusedName).attr("disabled", "disabled");
                            $("#accused-address").val(e.accusedAddress).attr("disabled", "disabled");
                            $("#accused-contact").val(e.accusedContact).attr("disabled", "disabled");
                            $("#accused-age").val(e.accusedAge).attr("disabled", "disabled");
							
                            $("#event-number").html(e.eventNmber);
                            $("#subject").val(e.subject).attr("disabled", "disabled");
                            $("#nature-of-crime").val(e.natureOfCrime).attr("disabled", "disabled");
                            $("#place-commited").val(e.placeCommited).attr("disabled", "disabled");
                            $("#apprehending-officer").val(e.apprehendingOffier).attr("disabled", "disabled");

                            $("#txt-date-commited").val(e.dateCommited).attr("disabled", "disabled");
                            $("#txt-date-recoreded").val(e.dateRecoreded).attr("disabled", "disabled");

                            $("#complainant-gender").val(e.complainantGender).attr("disabled", "disabled");
                            $("#accused-gender").val(e.accusedGender).attr("disabled", "disabled");

                            $("#txt-reason").val(e.reason).attr("disabled", "disabled");

                            $("#file-image").css("display", "none");

                            var path = e.picture != "" ? e.picture : "image-default.png";
                            $("#img-image").attr("src", "images/uploads/" + path);

                            $("#btn-report-submit").css("display", "none");
                            
							if(e.status != "Voided") {
								$("#btn-report-print").css("display", "block");
								$("#btn-report-edit").css("display", "block");
							} else {
								$("#btn-report-print").css("display", "none");
								$("#btn-report-edit").css("display", "none");
							}
								

                            command("UPDATE", e.id);
                        });
                    }
				});
			}).error(function(jqXHR, textStatus, errorThrown) {
				alert(errorThrown);
			});
		}
		//SEARCH
	</script>

	
	<script src="js/bootstrap.js"></script>	
</html>