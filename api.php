<!DOCTYPE HTML>
<!--
   DESIGNED AND CODED 
   BY JERSON REYES
   ONE PERSPECTIVE MEDIA | 2019
   
   BLNDD API | 2019
   https://www.blnd.ga/index.html
   -->
   <?php
	include('handler/index.php');
	?>
<html>
   <head>
      <title>BLND - API</title>
      <link rel="STYLESHEET" href="css/main.css"></link>
      <link rel="SHORTCUT ICON" href="media/icon.png"></link>
    <meta name="description" content="Answer AMA Online Education questions at ease - BLND is an automated answering system developed for AMA Blended Learning users including Grade 11 and Grade 12 students.">
    <meta name="keywords" content="AMA, OED, ONLINE, EDUCATION, SOURCE, GRADE 11, GRADE 12, SENIOR HIGH, BLENDED, LEARNING, AUTOMATED, ANSWERS">
    <meta property="og:url" content="https://www.blnd.ga/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="BLND - Blended Learning"/>
    <meta property="og:description" content="Answer AMA Online Education questions at ease - BLND is an automated answering system developed for AMA Blended Learning users including Grade 11 and Grade 12 students."/>
    <meta property="og:image" content="media/cover.jpg"/>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8"/>
    <meta name="VIEWPORT" content="width=device-width, initial-scale=1"/>
   </head>
   <body>
      <!-- BACKGROUND / BODY -->
      <div id="background-cut"></div>
      <div id="overall-page">
         <div>
            
         <!--
            BODY
            -->
         <div id="body">
            <div id="body-wrapper" class="relative">
               <div id="text" class="center no-line-height" style="margin:1%">
                  <div style="padding:2%">
                     <a href="index.php" id="blnd">
						<p class="extra-large-text condensed line-height-fix bold" style="line-height:0">BLND</p>
						<p class="normal-text large-spacing condensed line-height-fix" style="margin-top:-4%">API | BETA</p>
					 </a><br/>
					 <p class="large-text condensed bold" style="margin-top:50px;margin-top:5vh">REQUEST API KEY</p>
                     <div id="form" class="center">
                        <form method="POST" name="auto-answer" autocomplete="off" style="margin-top:3%">
                           <?php session_start();if(isset($_SESSION["key"])) {echo('<div id="key" class="inline condensed" style="margin:1%;line-height:1">'.$_SESSION["key"].'</div>');}?>
                           <input type="submit" id="generate" name="key-generate" onClick="<?php if(isset($_COOKIE['generated'])){echo 'return false';}?>" value="GENERATE"></input>
						   <br/>
                        </form>
					
                     </div>
                  </div>
               </div>
				<div style="margin:auto 10%;padding-bottom:5%">
					<div style="font-family:arial;font-size:80%;color:black;padding:5%;background-color:rgba(255,255,255,1);width:inherit;" class="relative" id="code">
						<div style="line-height:0"><span class="slightly-large condensed">USING THE API</span><p class="bold larger-than-normal condensed">COPY CODES BELOW | USE IT ON A .PHP FILE</p></div><br/>
						<pre><comment>&lt;!-- COPY THIS CODE AND CHANGE THE VARIABLES ACCORDING TO YOUR WEBSITE --&gt;</comment>
						<br/>&lt;form action="https://api.blnd.ga/"&gt;
						<br/>&#9;&lt;?php 
						<br/><br/>&#9;$website_url = ""; &nbsp;&#9;<comment>// URL OF THIS WEBSITE, SPECIFICALLY THIS PAGE</comment>
						<br/>&#9;$api_key = ""; &nbsp;&#9;<comment>// REQUEST THROUGH API.PHP PAGE</comment>
						<br/>&#9;$multiple_answers = ""; <comment>// IF YOU WANT THE API TO RETURN MULTIPLE RESULTS, SET TRUE</comment>
						<br/>
						<br/><br/><comment>// DO NOT TOUCH THE LINES BELOW. IT IS FOR YOUR SERVER TO INTERPRET THE DATA</comment>
						<br/>&#9;$api_key = base64_encode($api_key);$website_url = base64_encode($website_url); echo '&lt;input name="data"value="' . "$api_key" . '+' . "$website_url" . '"type="hidden"/&gt;';
if (isset($_GET['blndd_api_response'])) {$answer = base64_decode($_GET['blndd_api_response']);if (!empty($_GET['blndd_api_response_subject'])) {$subject = ' | Subject:' . base64_decode($_GET['blndd_api_response_subject']);} else {$subject = '';};} else {$answer = '';$subject = '';}if ($multiple_answers == 'true') {if (isset($_GET['multiple-answers'])) {$multiple = base64_decode(strtr($_GET['multiple-answers'], '-_,', '+/='));$process = explode('|', $multiple);$multiple_ans =str_replace('{','&lt;br/&gt;Q: ', $process);$multiple_ans = str_replace(['+'], '&lt;br/&gt;', $multiple_ans);$multiple_ans =str_replace('}', '&lt;br/&gt;Answer: ', $multiple_ans);}}if (empty($multiple_ans)) {$multiple_ans = '';}?&gt;
						<br/><br/><br/><comment>&lt;!-- YOU CAN CUSTOMIZE THE ELEMENTS BELOW | ACCESS THE DATA BY VARIABLES SUCH AS $answer AND $subject. USE THE FOREACH LOOP FOR PRINTING MULTIPLE RESULTS--&gt;</comment>
						<br/>&#9;&lt;input name="question"&gt;&lt;/input&gt;&lt;input type="submit" id="submit" value="ANSWER"&gt;&lt;/input&gt;&lt;/form&gt;<br/><br/>&#9;&lt;div&gt;&lt;?php echo$answer.$subject?&gt;&lt;/div&gt;<br/>&#9;&lt;?php foreach((array)$multiple_ans as$multiple){echo$multiple;}?&gt;
						</pre>
						<br/>
						<p class="slightly-large condensed bold"><a href="https://api.blnd.ga/sample.php">CLICK: RENDERED OUTPUT</a></p>
					</div>
				</div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>