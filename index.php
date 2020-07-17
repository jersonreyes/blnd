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
    $user_id = $_SERVER['REMOTE_ADDR'];
    setcookie("user_id", $user_id, 0);
?>
<html>
  <head>
    <title>BLND - Blended Learning</title>
    <link rel="STYLESHEET" href="css/main.css" id="light"<?php
    if(isset($_COOKIE['dark'])) { echo'disabled';}?>/>
  <?php
if(isset($_COOKIE['dark'])) { echo'<link rel="STYLESHEET" href="css/dark.css" id="dark"/>';}
?>
  <link rel="SHORTCUT ICON" href="media/icon.png"></link>
    <meta name="description" content="Discover a new way — BLND is an automated answering system developed for AMA Blended Learning users which can be accessed anywhere, anytime, and on any device.">
    <meta name="keywords" content="AMA, OED, ONLINE, EDUCATION, SOURCE, GRADE 11, GRADE 12, SENIOR HIGH, BLENDED, LEARNING, AUTOMATED, ANSWERS">
    <meta property="og:url" content="https://www.blnd.ga/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="BLND - Blended Learning"/>
    <meta property="og:description" content="Discover a new way — BLND is an automated answering system developed for AMA Blended Learning users which can be accessed anywhere, anytime, and on any device."/>
    <meta property="og:image" content="https://www.blnd.ga/media/cover.jpg"/>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8"/>
    <meta name="VIEWPORT" content="width=device-width, initial-scale=1"/>
</head>
<body>
 <?php if(!isset($_COOKIE['tutorial_viewed'])) {
echo '
<!-- TUTORIAL -->
<div id="main-tutorial">
<div class="center" style="background:#fbf8f1;padding-top:4%;">
<a href="index.php" id="blnd" style=""><span class="larger-text condensed  line-height-fix black bold" style="line-height:0">BLND</span>
<br/>
<div class="small-text black large-spacing condensed line-height-fix" style="margin-top:0%">API | BETA</div>
</a>
</div>
<div id="content-bg"></div>
<div class="flex-center" id="content-wrapper" style="z-index:21;">
<div style="height:70%;width:70%;margin-top:2%">
<div id="tutorial">
<div id="tutorial-image"></div>
<div style="" id="main-content">
<div id="controls" class="center" style="">
<div id="progress" style="position:relative">
<div></div><div></div><div></div><div></div>
</div>
<div style="margin-top:2%">
<div id="1-btn"></div><div class="line"></div><div id="2-btn"></div><div class="line"></div><div id="3-btn"></div><div class="line"></div><div id="4-btn"></div>
</div>
</div>
<form method="POST" id="x-form"><button name="close-tutorial" type="submit">x</button></form>
<div id="content" style="display:inline-block;" class="center">
<div id="1" class="active">
<div class="tutorial-header flex-center">
<p class="condensed slightly-large">USING BLND</p>
</div>
<img src="media/blnd.png" width="70%"></img>
<div style="margin:2%;padding-left:10%;padding-right:10%">Please press forward → button or skip to continue</div>
<p class="condensed slightly-large"></p>
<span class="condensed bold large-text">Quick guide for new users</span>
</div>
<div id="2">
<div class="tutorial-header flex-center">
<p class="condensed slightly-large">USING BLND</p>
</div>
<img src="media/login.png" width="70%"></img>
<div style="margin:0%;padding-left:10%;padding-right:10%">
<p class="bold condensed slightly-large">LOGIN TO YOUR ACCOUNT</p>Get access to your <b>Blended Learning</b> account. Go to <a href="blended.amauonline.com"><b>blended.amauonline.com</a></b> if you haven\'t done already. Select a subject that is available on this website (you can see the list of available subjects right after you finish this). Make sure to select the corresponding code for your subject. If it is not available, check on other Facebook groups for .docx sources.</div>
</div>
<div id="3">
<div class="tutorial-header flex-center">
<p class="condensed slightly-large">USING BLND</p>
</div>
<img src="media/3.png" width="70%"></img>
<div style="margin:0%;padding-left:10%;padding-right:10%">
<p class="bold condensed slightly-large">PROPER SELECTION OF QUESTIONS</p>Select only <b>parts of the question</b>. This will help BLND find the answer properly. If it returns multiple results, try to select more of the question\'s text to narrow the search. If you are happy with the result, try to paste the question with ctrl+f on BLND to find the right answer. <b>TIP: Use advanced features</b> to save time. You can enable auto submit by pressing the button. This will automatically find the answer for your question after pasting (ctrl+v). You can also enable auto paste which will automatically paste the question after clicking the question box. By enabling both, clicking the question box automatically submits the question which returns the answer immediately.</div>
</div>
<div id="end">
<div class="tutorial-header flex-center">
<p class="condensed slightly-large">USING BLND</p>
</div>
<img src="media/4.png" style="border:1px solid orange" width="70%"></img>
<div style="margin:0%;padding-left:10%;padding-right:10%">
<p class="bold condensed slightly-large">WHAT TO DO WITH THE ANSWER</p>Click the answer <b>box/area</b> (shown on the picture above) to copy the answer. You can also use the <b>Copy to Clipboard</b> button. To answer questions faster, try to copy the answer and do the ctrl+f process on Blended Learning and paste the answer. This will save you a lot of time rather than finding answers one by one. You can also flag the answer as wrong to give a wrong-answer notice to other users.</div>
</div>
</div>
</div>
<div id="controls-main" class="center">
<form method="POST" id="skip-form"><button name="close-tutorial" type="submit"><div id="skip" class="bold">SKIP</div></button></form>
<div id="previous">Previous</div>
<div id="next">Forward →</div>
<form method="POST" class="inline" id="close-tutorial">
<button type="submit" name="close-tutorial" class="next inline-block">Okay →</button>
</form>
</div>
</div>
</div>
</div>
</div> </div>
';
} ?>
  <div id="overall-page">
    <!--
    OVERALL PAGE
    -->
    <div id="body">
      <div id="body-wrapper" class="relative">
        <div id="text" class="center no-line-height">
          <div style="padding:0%" style="background-color:white;">
              <div id="current-users" class="condensed white" style="text-align:right;margin-left:2%;margin-top:2%;position:fixed;left:0;top:0;z-index:1">
                <?php
                  if($online > 1) {$user = 'students';}else{$user = 'student';}
                echo '<span style="color:#80CBC4">•</span> '.$online.' '.$user.' online';
                  ?>
              </div>
            <form method="POST">
              <div id="switch-color-scheme" class="condensed white" style="text-align:right;margin-right:2%;margin-top:2%;position:fixed;right:0;top:0;z-index:1">
                <?php
if(isset($_COOKIE['dark'])) {
echo '<button type="submit" id="switch-theme" name="switch-theme-default">DEFAULT</button>';
}   else {
echo '<button type="submit" id="switch-theme" name="switch-theme">DARK</button>';
}?>
              </div>
            </form>
            <div id="header" style="margin-top:8.5%" class="condensed">
              <div class="inline-block larger-than-normal" style="vertical-align:top;margin-right:5%;margin-left:-1%;color:rgba(255,255,255,0.6)">
                <a id="facebook" href="https://www.facebook.com/jersonadrianoreyes/">DEVELOPED BY JERSON REYES
                </a>
              </div>
              <div class="inline-block">
                <a href="index.php" id="blnd">
                  <span class="extra-large-text condensed line-height-fix bold" style="line-height:0">BLND
                  </span>
                  <br/>
                  <div class="small-text large-spacing condensed line-height-fix" style="margin-top:10%">API | BETA
                  </div>
                </a>
              </div>
              <div id="forward" class="inline-block larger-than-normal" style="vertical-align:top;margin-left:5%">
                <a href="api.php">API
                </a>
                <a href="#after-block" style="margin-left:2vw">ABOUT
                </a>
                <a href="https://www.facebook.com/jersonadrianoreyes/" style="margin-left:2vw">CONTACT
                </a>
              </div>
            </div>
            <div id="form" class="flex-center" style="height:90vh">
              <form method="POST"  name="auto-answer" action="" style="width:100%;margin-top:-20%" id="auto-answer" autocomplete="off">
                <div class="flex-center">
                  <div style="margin-top:3%;width:50%" id="search-block">
                    <div id="search">
                      <input required id="question" type="question" name="question" class="inline-block" placeholder="question" oninvalid="this.setCustomValidity('Enter Your Question')"
                             oninput="setCustomValidity('')" autocomplete="off" style="vertical-align:top" value="<?php if(isset($_SESSION['question'])){echo htmlspecialchars($_SESSION['question']);}?>">
                      </input>
                    <button type="submit" id="submit" class="inline" value="ANSWER" style="">
                      <div id="search-button" style="position:relative;" class="inline-block">
                        <svg fill="#f1f1f1" viewBox="0 0 485.213 485.213" style="enable-background:new 0 0 485.213 485.213;"xml:space="preserve">
                          <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465C318.424,257.208,257.206,318.416,181.956,318.416z"/>
                          <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z"/>
                        </svg>
                      </div>
                    </button>
                      <?php if(!isset($_COOKIE['step_one'])) {
                        echo '<div class="info" id="step-one" style="position:relative;top:-100%;">
                      <div class="condensed slightly-large" style="position:absolute;right:-30%;line-height:1;margin-left:100">
                          <div class="box arrow-left">
                              STEP 1: <br/>PASTE A QUESTION BY PRESSING CTRL+V | OR TYPE EX. REQUIREMENT
                            </div>
                          </div>
                        </div>';
                        }?>
                  </div>
                  <div style="position:relative;width:100%">
                  </div>
                  <div style="position:relative;">
                    <p class="condensed">
                      <?php if($subject !== ''){echo("Subject: $subject"); }?>
                    </p>
                  </div>
                  <br/>
                  <div style="margin-top:5%;height:100px;height:10vh" id="controller-wrapper">
                    <div class="clear inline-block" style="width:30%;margin-top:-3%;vertical-align:bottom" id="advanced-controls">
                      <p class="condensed larger-than-normal bold" style="margin-top:1%">ADVANCED SETTINGS
                      </p>
                      <div class="container" class="inline-block">
                        <label class="switch" id="auto-submit" for="auto-submit-toggle" style="vertical-align:middle">
                          <input type="checkbox" id="auto-submit-toggle" 
                                 <?php if(isset($_COOKIE['auto_submit'])){echo 'checked';} ?> name="auto_submit" style="vertical-align:middle">
                          </input>
                        <div class="set-slider round">
                          </div>
                          </label>
                          <label for="auto-submit-toggle" style="margin-left:0.3%" class="condensed normal-text bold">AUTO SUBMIT
                          </label>
                          <label class="switch" id="auto-paste" for="auto-paste-toggle" style="vertical-align:middle;margin-left:0.5%">
                            <input type="checkbox" id="auto-paste-toggle" 
                                   <?php if(isset($_COOKIE['auto_paste'])){echo 'checked';} ?> name="auto_paste" style="vertical-align:middle">
                            </input>
                          <div class="set-slider round">
                          </div>
                          </label>
                        <label for="auto-paste-toggle" style="margin-left:0.3%" class="condensed normal-text bold">AUTO PASTE
                        </label>
                    </div>
                  </div>
                        <div style="margin-right:3%;height:100%;width:1px;background-color:white;vertical-align:middle" class="inline-block" id="divider">
                            </div>
                            <div id="br" class="inline" style="vertical-align:middle">
                              <button type="button" class="btn" id="copy-clipboard" data-clipboard-text="<?php 
                                                                                                         if(isset($_SESSION['answer'])) {
                                                                                                         echo $_SESSION['answer'];
                                                                                                         }
                                                                                                         ?>">COPY TO CLIPBOARD
                              </button>
                            </div>
                            </div>
                          <input type="submit" id="submit-hidden" formnovalidate style="display:none">
                          </input>
                        </div>
                    </div>
                </div>
      <?php
if(isset($_SESSION['answer'])) {
    if(!isset($_COOKIE['step_two'])) {
echo '<div class="condensed center info slightly-larger" id="step-two" style="margin-left:10%;position:absolute;z-index:22222;line-height:1;margin-top:-25%;">
                          <div style="position:absolute;">
                          <div class="box arrow-bottom slightly-larger">
                              STEP 2: <br/>CLICK ON THE ANSWER AREA TO COPY | OR PRESS COPY TO CLIPBOARD BUTTON
                            </div>
                          </div>
                          </div>';
}
    if(isset($_COOKIE['step_two'])) {
        $viewed = 'viewed';
    }   else {$viewed='';}
echo '<div id="answer-block">';
echo '<div id="answer" style="line-height:1;position:relative;margin-top:-15%;overflow:hidden"><div id="answer-text" style="line-height:1;">';
if($_SESSION['answer'] != 'Answer not found.') {echo '<div id="gray" class="btn '.$viewed.'>" data-clipboard-text="'; echo $_SESSION['answer']; echo '">';}
else {echo '<div id="gray" class="btn" style="background-color:none !important" data-clipboard-text="'; echo $_SESSION['answer']; echo '">';}
if($_SESSION['answer'] != 'Answer not found.' && $_SESSION['answer'] != 'Please provide more parts of the question') {
echo '<img src="media/check.png" height="20px" width="auto" style="vertical-align:middle;margin-right:0.5%"></img>';
}
echo ('
<span class="larger-than-normal" id="answer_from_response">'.$answer.'</span>');
if($_SESSION['answer'] != 'Answer not found.' && $_SESSION['answer'] != 'Please provide more parts of the question') {
if(isset($_SESSION['question_result'])) {echo '<br/><span class="normal-text"><img src="media/question.png" height="20px" width="auto" style="vertical-align:middle;margin-right:0.5%"></img>'.$_SESSION['question_result'].'</span><br/>';}
$unfiltered = $answer_from_database;$split = explode('|',$unfiltered);
if(!empty($unfiltered) && count($split) > 1) {echo '</div><div class="flex-center"><div style="text-align:center;max-width:70%;" class="center"><br/>Multiple Results:<br/>';
foreach ($split as $result) {
$result = str_replace('{','<br/><span style="font-weight:normal;font-size:80%;">Q: </span><span style="font-weight:normal;">',$result);$result = str_replace(['+'],'</span><br/>',$result);$result = str_replace('}','<span class="highlight-answer" style="display: inline-block;margin-bottom:2%;">Answer: ',$result);$result = $result.'</span>';
echo $result;
echo '<hr/>';
}
                                              echo '<div>';
}
if(empty($_SESSION["rating"])){$default = "none";}  else {$default = "";}
if(isset($_SESSION['rating'])){echo '<br/><span class="normal-text">TIMES FLAGGED AS WRONG: '.$_SESSION['rating'].$default.'</span>';}	
if(!empty($unfiltered)) {echo '</div>';}
echo '<br/><input type="submit" value="Flag as Wrong" id="flag" name="marked_wrong"></input>';		
}
if(isset($brainly)) { $brainly_stripped = htmlspecialchars(str_replace(' ','+', $brainly)); echo '<br/>Search in Brainly<br/><a href='."$brainly_stripped".' target="_blank">'.$brainly_stripped.'</a>';}}?>
      </form>
        </div>
  <?php if(!isset($_COOKIE['allow_cookies'])) {
echo '<div id="allow_cookie" style="position:fixed;bottom:0px;padding:2%;margin-left:-2%;width:100%;height:auto;background-color:black;color:white;z-index:2">
<span class="condensed slightly-larger bold" style="padding:1%;">THIS WEBSITE USES COOKIES FOR ALL FUNCTIONS TO WORK PROPERLY</span>
<form method="POST"><input type="submit" id="button-cookie" name="allow_cookie" style="position:fixed;right:2%" value="OKAY"></input></form>
</div>';
}?>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="mobile-detected" class="center">
      <div style="position:fixed;bottom:0px;padding:2%;z-index:500;margin-left:-2%;width:100%;height:auto;background-color:black;color:white">
        <span class="condensed slightly-large bold" style="padding:1%;">MOBILE DEVICE DETECTED | MOST FEATURES HAVE BEEN DISABLED
        </span>
      </div>
    </div>  
	
	<!-- UPDATE: DELETED PROMOTIONS PAGE FOR JERSON REYES -->
        <div style="margin-top:4%;background-color:#111111;width:100%;font-size:22px;color:white;margin-top:4%" id="api-promotion-subjects" class="center condensed">
                <div id="table-wrapper-main" style="padding:3%;height:auto;">
                   <div id="background-image-top" class="grayscale">
                    <div style="width:100%;font-size:22px;color:white;height:auto" class="center condensed black bold" id="after-block">
                      <div style="padding-top:3%;width:100%;" id="subjects" class="center">
     
                        <div class="inline-block" id="main-table" style="vertical-align:top;margin-top:3%">
                          <table> <th>WEEK </th> <th>1 </th> <th>2 </th> <th>3 </th> <th>4 </th> <th>5 </th> <th>6 </th> <th>7 </th> <th>8 </th> <th>9 </th> <th>10 </th> <th>11 </th> <th>12 </th> <th>13 </th> <th>14 </th> <th>15 </th> <th>16 </th> <th>17 </th> <th>18 </th> <th>19 </th> <th>20 </th> <tr><td>-</td></tr><tr> <td>BFIN-121 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><tr> <td>CHEM-112 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>CPAR-122 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>DIRR-112 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>-</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>-</td></tr><tr> <td>EAPP-111 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>-</td><td>-</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>ENGL-112 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>ENGL-121 </td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>Yes</td></tr><tr> <td>ENTR-122 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>FABM </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>FILI-111 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>FILI-112 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>FILI-121 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>GBIO-121 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>MEIL </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>ORAL-COMM </td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>PEDH-112 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>PHIL-121 </td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>PHSC-112 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>PHYC-121 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><tr> <td>PRIM-121 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><tr> <td>RSCH-111 </td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr> <td>RSCH-121 </td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr><td>-</td></tr></table>
                        </div>
                        <div style="padding:5%;display:inline-block;color:white;width:20%;margin-top:5%'vertical-align:top" id="table-text">
                          &nbsp;
                          <span class="larger-text" id="current-subjects" style="color:white;border:1px solid white;padding:0.2% 1%;font-weight:normal;">&nbsp;CURRENT SUBJECTS
                          </span>
                          <br/>
                          <p class="slightly-large">LAST UPDATED ON JULY 22, 2019</p>
                            <p class="larger-than-normal">WANT YOUR OWN WEBSITE CREATED OR DESIGNED?</p>
                          <p class="normal-text" style="color:white">
                            <a href="https://www.facebook.com/jersonadrianoreyes/" id="social-link" style="color:white !important">CONTACT ME ON MY SOCIAL ACCOUNTS
                            </a>
                        </div>
                      </div>  
                    </div></div></div></div>

    <!-- BOTTOM -->
    <div style="margin-top:4%;background-color:#111111;width:100%;font-size:22px;color:white;margin-top:0%" id="api-promotion" class="center condensed">
       <div id="footer-wrapper" style="padding:3%">
          <div id="background-image-bottom" class="grayscale">
             <div style="padding:2%">
                <div style="padding:5%">
                   <span class="large-text" style="color:white;border:1px solid white;padding:0.2% 1%;font-weight:normal">&nbsp;#DEVELOPERS 
                   </span>&nbsp;
                   <span class="large-text" style="color:white;border:1px solid white;padding:0.2% 1%;font-weight:normal">#ASPIRING CODERS 
                   </span>
                   <br/>
                   <br/>
                   WANT TO EMBED THE API TO YOUR OWN WEBSITE?
                   <p class="normal-text" style="color:gray">
                      <a href="api.php" id="req">REQUEST API CODE THROUGH HERE | DOCUMENTED ON /API.PHP
                      </a>
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="footer" style="background-color:#111111;font-size:22px;color:#FFFF99;height:auto" class=" condensed black bold">
       <div style="line-height:0;padding:5%;padding-bottom:0;">
          <div style="margin-left:25%;color:gray;margin-bottom:7%" id="footer-content">
             <div class="inline-block" style="margin-right:25%;margin-right:15vw;">
                <p class="condensed large-text bold">DESIGNED AND CODED</p>
                <p class="normal-text bold condensed" style="margin-top:-15px">BY JERSON REYES</p>
             </div>
             <div class="inline-block" id="logos" style="width:auto;vertical-align:top">
                <div id="prsp" class="inline-block"><img src="media/prsp.png" id="prsp-img"></img></div>
               
             </div>
          </div>
          <div class="center relative normal-text condensed bold" style="bottom:0px;padding-bottom:2%;color:gray;">
             <p>COPYRIGHT 2019 | PERSPECTIVE ONE MEDIA | JERSON REYES | PROPERTY ARTWORK</p>
          </div>
       </div>
    </div>
    </div>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script language="javascript" src="js/main.js"></script>
</body>
</html>
