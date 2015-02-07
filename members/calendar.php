<!-- This template is for everything in SUBDIRECTORIES -->

<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
function showHide(subText)
{
var textBlock=document.getElementById(subText);
var imgSign=document.getElementById('g'+subText);
if(textBlock.style.display=='block')
{
textBlock.style.display='none';
imgSign.src='/images/expand.gif';
imgSign.alt='show';
}
else
{
 textBlock.style.display='block';
 imgSign.src='/images/collapse.gif';
 imgSign.alt='hide';
  var top=((zxcPos(textBlock)[1]+textBlock.offsetHeight+20));
 var wheight=zxcWWHS()[1]+zxcWWHS()[3];
 if (top>wheight){
  window.scroll(0,zxcWWHS()[3]+top-wheight);
 }
 if (zxcPos(textBlock)[1]<zxcWWHS()[3]){
  window.scroll(0,zxcPos(textBlock)[1]-20);
 }
}
}

function zxcPos(zxcobj){
 zxclft=zxcobj.offsetLeft;
 zxctop=zxcobj.offsetTop;
 while(zxcobj.offsetParent!=null){
  zxcpar=zxcobj.offsetParent;
  zxclft+=zxcpar.offsetLeft;
  zxctop+=zxcpar.offsetTop;
  zxcobj=zxcpar;
 }
 return [zxclft,zxctop];
}

function zxcWWHS(){
 if (window.innerHeight) return [window.innerWidth-10,window.innerHeight-10,window.pageXOffset,window.pageYOffset];
 else if (document.documentElement.clientHeight) return [document.documentElement.clientWidth-10,document.documentElement.clientHeight-10,document.documentElement.scrollLeft,document.documentElement.scrollTop];
 return [document.body.clientWidth,document.body.clientHeight,document.body.scrollLeft,document.body.scrollTop];
}


/*]]>*/

</script>

<?php include('../header.php'); ?>

<div id="templatehead">
<div id="templatehead-text">
<!-- Page Title -->
Calendar

<?php include('../header2.php');?>

<!-- Body -->

<!--<h4>Click on each category / department of MIT SWE to view its schedule of events for Fall 2011.</h4>

<br><br>
<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('3'); return false;"><font size = "+1">General Body Meetings</font></a>

<div id="3" style="position:relative;display:none;top:0px;">
<p>
<br>
Wed 5/2 W20, West Lounge, 6-7:30pm<br>
</div>

<br><br>
<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('4'); return false;"><font size = "+1">Board Meetings (all SWE members are welcome!)</font></a>

<div id="4" style="position:relative;display:none;top:0px;">
<p>
<br>
Sun 4/29 W20-207, 11-12pm<br>
</div>

<br><br>
<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('5'); return false;"><font size = "+1">Campus Relations</font></a>

<div id="5" style="position:relative;display:none;top:0px;">
<p>
<br>
Mon 9/26 - Lobdell (2nd Floor Student Center), 7:30pm <em><b>Sweetest Study Break</b></em><br>
&nbsp;&nbsp;<em>"Sweet cupcakes, cookies decoration, socializing, smoothie making"</em><br>
<em><b>Big Lil Sib Program Pairings and Gatherings - To Be Announced</b></em><br>
</div>

<br><br>
<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('6'); return false;"><font size = "+1">Corporate Relations</font></a>

<div id="6" style="position:relative;display:none;top:0px;">
<p>
<br>
Sat 9/17 - 4-231, 9am-3pm <em><b>SWE Region F Business Meeting</b></em><br>
Tues 9/20 - PDR 1&2 (3rd Floor Student Center), 12-2pm <em><b>Dropbox Lunch</b></em><br>
&nbsp;&nbsp;<em>"Informal luncheon with Dropbox for members to network and hear from recruiters."</em><br>
Tues 9/20 - 2-105, 7:30-9:30pm <em><b>Yelp Tech Talk</b></em><br>
&nbsp;&nbsp;<em>"Yelp is doing a tech talk for recruitment purposes."</em><br>
Tues 10/4 - Bush Room (10-105), 7:30-9pm <em><b>Consulting/Finance Networking Event</b></em><br>
&nbsp;&nbsp;<em>"Walk-in networking event featuring 5 to 6 companies in consulting and finance with dinner served."</em><br>
Wed 10/5 - Room TBA, 7:30-9:30 <em><b>GWAMIT Panel</b></em><br>
&nbsp;&nbsp;<em>"Panel of 4 women from GWAMIT (Graduate Women at MIT) will be talking about 
graduate student life as a woman for a half hour. The event will then break into a 
general Q&A for students to personally ask questions."</em><br>
Fri 10/28 - Mezzanine Lounge (3rd Floor Student Center), 7:30pm <em><b>SWE Courses 1, 2, and 22 Networking Event</b></em><br>
&nbsp;&nbsp;<em>"Walk-in networking event featuring 5 to 6 companies in engineering disciplines with dinner served."</em><br>
Tues 11/14 - Twenty Chimneys (3rd Floor Student Center), 8pm <em><b>SWE Courses 3, 6-1, and 10 Networking Event</b></em><br>
&nbsp;&nbsp;<em>"Walk-in networking event featuring 5 to 6 companies in engineering disciplines with dinner served."</em><br>
Tues 11/22 - West Lounge (2nd Floor Student Center), 7:30pm <em><b>SWE Courses 20 and 10b (and 3 and 2 with bio applications) Networking Event</b></em><br>
&nbsp;&nbsp;<em>"Walk-in networking event featuring 5 to 6 companies in engineering disciplines with dinner served."</em><br>
Mon 12/12 - West Lounge (2nd Floor Student Center), 7:30pm <em><b>SWE Course 6-2/6-3 Networking Event</b></em><br>
&nbsp;&nbsp;<em>"Walk-in networking event featuring 5 to 6 companies in computer science with dinner served."</em><br>
</div>

<br><br>
<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('7'); return false;"><font size = "+1">Membership and Development</font></a>

<div id="7" style="position:relative;display:none;top:0px;">
<p>
<br>

Sat 9/10 <em><b>Board Member Kayak Trip</b></em><br>
Sun 10/9 - 1-3pm <em><b>Faneuil Hall Board Member Picnic</b></em><br>
Sat 11/12 - 5-7pm <em><b>Board Member Spa Day</b></em><br>
</div>

<br><br>
<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('8'); return false;"><font size = "+1">Outreach</font></a>

<div id="8" style="position:relative;display:none;top:0px;">
<p>
<br>
Sat 9/17 - 4-145, 10am-4pm <em><b>KEYS Session</b></em><br>
Sat 10/01 - W20-208, 8am-1pm <em><b>Girl Scout Outreach</b></em><br>
Sat 10/08 - W20-391, 10am-4pm <em><b>KEYS Session</b></em><br>
Sat 10/08 - W20-208, 8am-1pm <em><b>Girl Scout Outreach</b></em><br>
Sun 10/09 - W20-301, 2pm-3:30pm <em><b>Web Design Competition Opening Ceremony</b></em><br>
Tues 10/13 - W20-208, 7pm-10pm <em><b>WiSE Mentor Session</b></em><br>
Sat 10/15 - 4-149, 10am-4pm <em><b>WiSE Kick-off Conference</b></em><br>
&nbsp;&nbsp;<em>"Our goal is for each girl to find a mentor with whom she can contact with any questions ranging from specific majors to the college admissions process."</em><br>
Sun 10/16 - 14-0637, 2pm-5pm <em><b>Web Design Competition Session</b></em><br>
Sat 10/22 - W20-208, 8am-1pm <em><b>Girl Scout Outreach</b></em><br>
Sun 10/23 - 14-0637, 2pm-5pm <em><b>Web Design Competition Session</b></em><br>
Sat 10/29 - Lobby 10, 1:30pm-5:30pm <em><b>Exploring Majors Fair</b></em><br>
&nbsp;&nbsp;<em>"MIT students in each major will be answering questions or showing off projects to high school students."</em><br>
Sun 10/30 - 14-0637, 2pm-5pm <em><b>Web Design Competition Session</b></em><br>
Sat 11/05 - 4-237, 10am-3pm <em><b>WiSE Session</b></em><br>
Sun 11/06 - 14-0637, 2pm-5pm <em><b>Web Design Competition Session</b></em><br>
Sat 11/13 - W20-491, 12pm-2pm <em><b>Web Design Competition Closing Ceremony</b></em><br>
Sat 11/19 - 4-145, 10am-4pm <em><b>KEYS Session</b></em><br>
Sat 12/03 - 4-237, 10am-3pm <em><b>WiSE Session</b></em><br>
</div>-->



<br><br>

<h4>Click on each event to view more information about the events we are hosting this semester. This calendar contains most events hosted by MIT SWE.</h4>
<br><br>

<iframe src="http://www.google.com/calendar/embed?src=mitswe.regionf%40gmail.com&ctz=America/New_York" style="border: 0" width="610" height="600" frameborder="0" scrolling="no"></iframe>


<?php include('../calendar.php'); ?>

<!-- Right panel -->




<?php include('../footer.php'); ?>


