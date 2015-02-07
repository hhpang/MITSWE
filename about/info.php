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
National SWE


<?php include('../header2.php');?>

<!-- Body -->

<h3>About National SWE</h3>
The Society of Women Engineers (SWE), founded in 1950, is a not-for-profit educational and service organization. SWE is the driving force that establishes engineering as a highly desirable career aspiration for women. SWE empowers women to succeed and advance in those aspirations and be recognized for their life-changing contributions and achievements as engineers and leaders.
<br><br>

<h1><img src="/images/expand.gif">&nbsp;&nbsp;<a href="http://www.swe.org/">Learn more by visiting the National SWE webpage</a></h1>
<br><br>

<h3>Goals Expressed by the National Organization for the Society of Women Engineers</h3>

			      <b>Aspire:</b> 
		          Not only will 
		          you be supported in your aspirations, but you can also inspire others 
		          through SWE’s career guidance programs. Student sections typically have 
		          programs involving Girl Scouts, area high school or middle school activities 
		          and Engineers Week programs. Your participation in these programs can 
		          inspire a young girl to follow in your footsteps.<br><br>
		
		          <b>Advance:</b> 
		          SWE student membership (and professional membership after college) is 
		          an excellent resource for preparing you for your future. You will network 
		          with practicing women engineers, build the business skills you’ll need, 
		          and develop leadership and management abilities through committee and 
		          student leader involvement. Confident with your preparation, SWE has 
		          a valuable resource for finding the ideal job. SWE’s Career Center houses 
		          hundreds of internship and full time job opportunities and a résumé 
		          bank exclusively for SWE members.<br><br>
		
		          <b>Achieve:</b>
		          The SWE National Conference in the fall, and annual region conferences 
		          in the winter, offer student members camaraderie, exchange of ideas 
		          with other students, development seminars, access to distinguished women 
		          engineers, and opportunities to meet leading employers with challenging 
		          internships and permanent positions.


<br><br><br>
<h3>National Membership through MIT SWE</h3>
Becoming a National SWE member opens many doors of opportunity, both within and outside of MIT SWE.
National membership earns you exclusive invitations to networking events and workshops, and is a requirement
if you wish to participate on SWE Board.
<br><br>

<h1><img src="/images/expand.gif">&nbsp;&nbsp;<a href="/nationalmembership.php">Learn more about joining National SWE through MIT SWE</a></h1>
<br><br>



<img alt="click to expand" id="g2" style="border: 0px none;" src="/images/expand.gif">&nbsp;&nbsp;<a href="#" onclick="showHide('2'); return false;"><font size = "+1">Click to read: Letter from the President of MIT SWE 2011</font></a>

<div id="2" style="position:relative;display:none;top:0px;">
<p>
<br>
January 10, 2011<br><br>
Dear MIT SWE members and alumni,<br><br>
Happy new year! I’d like to introduce myself as the 2011 MIT SWE President. 
I’ve been involved in SWE since my freshman year at MIT, where most of my 
experience in MIT SWE has been in the outreach and corporate relations sections. 
I was an Event Outreach Co-Chair from 2008-2009, and a 2009 Career Fair Director.
 Last year, I served as Vice President of Corporate Relations, where I worked to 
where I worked to increase the amount of career development resources we offer, 
form many new relationships with engineering employers, and connect those employers 
to our students for scholarships, internships, and full-time positions.  I'm also 
involved in SWE beyond MIT - I'm currently serving as the FY11 Region F Collegiate 
Senator, which means I represent the opinions of New-England area collegiates to 
the SWE Senate and help to shape the future of SWE.
<p>
I'm looking forward to continuing to work with MIT SWE in the coming year.  Some 
of my goals for SWE this year include growing the number of resources we offer such 
as personal and professional development opportunities, connecting more people on 
campus to MIT SWE to form a stronger SWE community, and making the SWE experience 
fun and valuable for everyone involved.  SWE has been and incredible experience for 
me, and I want to help share the opportunities of SWE with others over the course 
of the year.
<p>
Finally, one exciting opportunity that SWE has gotten involved in recently is MIT150.
 SWE will be hosting the closing reception to the Women of MIT Symposium! We’d like 
to invite all alumni and current students to join us for the reception, which will 
be on Tuesday, March 29 at 5:00pm.  
<p>
Best wishes,<br>
Ellen McIsaac
</div>
<?php include('../calendar.php'); ?>

<!-- Right panel -->

<span class="title">Featured</span>
<br>
<br>
<a href="/regionfconference/"><strong><font size = "+1">Click here to learn about the 2012 Region F Conference hosted by MIT SWE!</font></strong></a>


<a href="/wise/" OnMouseOver = "document.images.wise.src='/images/wise_logo_bw.gif'"
OnMouseOut = "document.images.wise.src='/images/wise_logo.gif'">
<img src="/images/wise_logo.gif" NAME = "wise"></a>
<br>
<br>
<a href="/keys/" OnMouseOver = "document.images.keys.src='/images/keys_logo_bw.gif'"
OnMouseOut = "document.images.keys.src='/images/keys_logo.gif'">
<img src="/images/keys_logo.gif" NAME = "keys"></a>

<br><br>
<span class="title">Career Quick Links</span>
<br>
<br>
<a href="/resumedb/">MIT SWE Resume Database</a>
<br>Students, upload your resume today!</p>

<br>
<a href="http://jobresource.com/groups/ccenter.asp?fct=1&id=986830721">MIT SWE Job Postings</a>
<br>Check out full-time/internship positions!</p>

</p>



<?php include('../footer.php'); ?>


