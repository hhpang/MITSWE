<!DOCTYPE html>
	<head>
		<link type="text/css" rel="stylesheet" href="rr_style.css">
		<script type="text/javascript" src="roomreservation.js"></script>
	</head>
	<body>
		<div id="main">
			<div id="banner">
				<div class="inline-block"><img src="swe_logo.png"></img></div>
				<div id="title">Room Reservations Form 2014-15</div>
			</div>
			
			<p><FONT class="req">Questions marked with * are required.</FONT>
				<br>Questions or suggestions? Email <a href="mailto:swe-secretary@mit.edu">swe-secretary@mit.edu</a>!
			</p>
			
			<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='confirmation.php';}"></iframe>
			<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dHZKQmYzQ0ZRdXpVbk13TldGU18xUWc6MA&amp;theme=0AX42CRMsmRFbUy03NTAzM2Q4My03ODU1LTQ2NzItODI2YS1kZmU5YzdiMzZjOGQ&amp;ifq" method="POST" target="hidden_iframe" onsubmit="javascript:return validateFields()">
				<div>
					<label class="question" for="entry_2">Is your event happening <em>at least</em> 2 weeks/14 days from today?<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_2">This is necessary in order to allow adequate time for a room confirmation, and for appropriate advertising &amp; planning. More time is always appreciated.</label><br>
					<ul class="radio_buttons">
						<li><label><input type="radio" name="entry.2.group" checked value="Yes"id="group_2_1">Yes</label></li>
						<li><label><input type="radio" name="entry.2.group" value="No" id="group_2_2">No</label></li>
					</ul>
				</div>
			
				<div class="heading">Contact Info</div>
				
				<div class="form-input">
					<label class="question" for="entry_3">Your Name<FONT class="req">*</FONT></label><br>
					<input type="text" name="entry.3.single" value="" class="textfield-req" id="entry_3">
				</div>
				<div class="form-input">
					<label class="question" for="entry_36">Email<FONT class="req">*</FONT></label><br>
					<input type="text" name="entry.36.single" value="" class="textfield-req" id="entry_36">
				</div>
				<div class="form-input">
					<label class="question" for="entry_7">Phone Number<FONT class="req">*</FONT></label><br>
					<input type="text" name="entry.7.single" value="" class="textfield-req" id="entry_7">
				</div>
				<div class="form-input">
					<label class="question" for="entry_4">SWE Department<FONT class="req">*</FONT></label><br>
					<select name="entry.4.single" id="entry_4">
						<option value="VP MemDev">Membership Development</option> 
						<option value="VP Corporate Relations">Corporate Relations</option> 
						<option value="VP Outreach">Outreach</option> 
						<option value="VP Campus Relations">Campus Relations</option>
						<option value="Exec">Exec</option>
					</select>
				</div>
				<div class="form-input">
					<label class="question" for="entry_5">Board Position<FONT class="req">*</FONT></label><br>
					<input type="text" name="entry.5.single" value="" class="textfield-req" id="entry_5">
				</div>
				
				<div class="heading">Event Info</div>
				
				<div class="form-input-wide">
					<label class="question" for="entry_37">Event Title<FONT class="req">*</FONT>&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="entry.37.single" value="" class="textfield-req" id="entry_37" style="width:340px">
				</div>
				<div class="form-input">
					<label class="question" for="entry_11">Anticipated Attendance<FONT class="req">*</FONT>&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="entry.11.single" value="" class="textfield-short-req" id="entry_11">
				</div>
				<div class="form-input-wide">
					<label class="question" for="entry_15">Event Description<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_15">Can include:<br>
						<ul class="noindent">
							<li>What activities are happening at your event</li>
							<li>What you hope to accomplish by hosting your event</li>
							<li>Any outsiders you're sponsoring (specific company, elementary school, etc)</li>
						</ul>
					</label>
					<textarea name="entry.15.single" rows="8" cols="75" class="textarea-req" id="entry_15"></textarea>
				</div>
				<div class="form-input-wide">
					<label class="question" for="entry_12">Provide an Advertising Blurb!</label><br>
					<label class="helpertext" for="entry_12">This will be used on the website to advertise your event.</label><br>
					<textarea name="entry.12.single" rows="8" cols="75" class="textarea" id="entry_12"></textarea>
				</div>
				
				<div class="heading">Time and Date Info</div>
				<div class="form-input">
					<label class="question" for="entry_26">Event Date<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_26">(Day of Week; Month, Day, Year)</label><br>
					<input type="text" name="entry.26.single" value="" class="textfield-req" id="entry_26">
				</div>
				<div class="form-input">
					<label class="question" for="entry_24">Start Time for Reservation<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_26">Factor in set-up!</label><br>
					<input type="text" name="entry.24.single" value="" class="textfield-req" id="entry_24">
				</div>
				<div class="form-input">
					<label class="question" for="entry_22">End Time for Reservation<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_26">Factor in clean-up!</label><br>
					<input type="text" name="entry.22.single" value="" class="textfield-req" id="entry_22">
				</div>
				<div class="form-input-wide" style="height:200px">
					<label class="question" for="entry_20">What size space do you want?<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_20">Select all that would be appropriate for your event. If Student Center is selected, that location is your first choice, but please provide a back-up.</label><br>
					<ul class="twocol-list-req">
						<li><label><input type="checkbox" name="entry.20.group" value="Small (&lt;23)" id="group_20_1">Small (&lt;23)</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Medium (24-42)" id="group_20_2">Medium (24-42)</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Large (43-99)" id="group_20_3">Large (43-99)</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Lecture Hall (100+)" id="group_20_4">Lecture Hall (100+)</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Student Center Regular Room (Mezz Lounge, 20Chim, etc.)" id="group_20_5">Student Center Regular Room <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Mezz Lounge, 20Chim, etc.)</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Student Center Large Room (La Sala, Lobdell)" id="group_20_6">Student Center Large Room <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(La Sala, Lobdell)</label></li>
						<li><label><input type="checkbox" name="entry.20.group" value="Bush Room (Needs very early reservation!)" id="group_20_7">Bush Room <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Needs very early reservation!)</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Lobby 10 Booth" id="group_20_8">Lobby 10 Booth</label></li> 
						<li><label><input type="checkbox" name="entry.20.group" value="Student Center Booth" id="group_20_9">Student Center Booth</label></li>
					</ul>
				</div>
				<div class="form-input-wide" style="height:200px">
					<label class="question" for="entry_18">Preferred Room Attributes (For Classrooms Only)</label><br>
					<label class="helpertext" for="entry_18">We&#39;ll try to accommodate as many as possible. <br>
						Classrooms usually have A/V.</label><br>
					<ul class="twocol-list">
						<li><label><input type="checkbox" name="entry.18.group" value="Flat Room" id="group_18_1">
					Flat Room</label></li>
						<li><label><input type="checkbox" name="entry.18.group" value="Tiered Room" id="group_18_2">
					Tiered Room</label></li>
						<li><label><input type="checkbox" name="entry.18.group" value="Tile Floor" id="group_18_3">
					Tile Floor</label></li>
						<li><label><input type="checkbox" name="entry.18.group" value="Carpet" id="group_18_4">
						Carpet</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="Moveable Furniture" id="group_18_5">
						Moveable Furniture</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="Tablet Armchairs" id="group_18_6">
						Tablet Armchairs</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="Tables and Chairs" id="group_18_7">
						Tables and Chairs</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="Seminar Table (like Conference Room)" id="group_18_8">
						Seminar Table</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="LCD Video Projector" id="group_18_9">
						LCD Video Projector</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="MIT Cable" id="group_18_10">
						MIT Cable</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="CD/DVD Player" id="group_18_11">
						CD/DVD Player</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="Wireless Microphone" id="group_18_12">
						Wireless Microphone</label></li> 
						<li><label><input type="checkbox" name="entry.18.group" value="Athena Station" id="group_18_13">
						Athena Station</label></li>
					</ul>
				</div>
				<div class="form-input-wide">
					<label class="question" for="entry_38">How many rooms do you need for this event?<FONT class="req">*</FONT></label><br>
					<label class="helpertext" for="entry_38">If you have multiple events, please use separate forms.</label><br>
					<input type="text" name="entry.38.single" value="" class="textfield-short-req" id="entry_38">
				</div>
				<div class="form-input-wide">
					<label class="question" for="entry_39">Room Set-up Style (for Student Center rooms)</label><br>
					<label class="helpertext" for="entry_39"><a href="http://web.mit.edu/eventguide/cacfacilities/setup.html">See set-up styles here.</a></label><br>
					<ul class="twocol-list">
						<li><label><input type="radio" name="entry.39.group" value="Conference Style" id="group_39_1">Conference Style</label></li> 
						<li><label><input type="radio" name="entry.39.group" value="Lecture Style" id="group_39_2">Lecture Style</label></li> 
						<li><label><input type="radio" name="entry.39.group" value="U-Shape" id="group_39_3">U-Shape</label></li> 
						<li><label><input type="radio" name="entry.39.group" value="Hollow Square" id="group_39_4">Hollow Square</label></li> 
						<li><label><input type="radio" name="entry.39.group" value="Classroom Style" id="group_39_5">Classroom Style</label></li> 
						<li><label><input type="radio" name="entry.39.group" value="Banquet Style" id="group_39_6">Banquet Style</label></li>
					</ul>
				</div>
				<div class="form-input-wide">
					<label class="question" for="entry_29">Will your event have food?</label><br>
					<label class="helpertext" for="entry_29">If yes, where are you ordering from? <br>How many food/drink tables will you need?</label><br>
					<textarea name="entry.29.single" rows="8" cols="75" class="textarea" id="entry_29" style="height:50px"></textarea>
				</div>
				<div class="form-input-wide">
					<label class="question" for="entry_35">Any additional comments?</label><br>
					<textarea name="entry.35.single" rows="8" cols="75" class="textarea" id="entry_35"></textarea>
				</div>
				<div class="inline-block"><input type="submit" name="submit" value="Submit"></div>
				<div class="errorMsg" name="invalidErrorMsg">You have not completed all required fields.</div>

			</form>
		</div>
	</body>
</html>