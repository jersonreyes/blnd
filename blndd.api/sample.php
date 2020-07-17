<!DOCTYPE HTML>
<html>
   <head>
      <title>BLNDD API | Sample Page</title>
   </head>
   <body style="font-family:arial;text-align:center;padding:5%">
		<form action="http://localhost/www.shs-oed.ml/blndd.api/">
			<?php $website_url = 'http://localhost/www.shs-oed.ml/blndd.api/sample.php';
            $api_key = '7f31a1-7efe72-9f6e88-ed2d05-9c0b70'; $multiple_answers = 'true';$api_key = base64_encode($api_key);$website_url = base64_encode($website_url);
            
echo '<input name="data"value="' . "$api_key" . '+' . "$website_url" . '"type="hidden"/>';
if (isset($_GET['blndd_api_response'])) {$answer = base64_decode($_GET['blndd_api_response']);if (!empty($_GET['blndd_api_response_subject'])) {$subject = ' | Subject:' . base64_decode($_GET['blndd_api_response_subject']);} else {$subject = '';};} else {$answer = '';$subject = '';}if ($multiple_answers == 'true') {if (isset($_GET['multiple-answers'])) {$multiple = base64_decode(strtr($_GET['multiple-answers'], '-_,', '+/='));$process = explode('|', $multiple);$multiple_ans =str_replace('{','<br/>Q: ', $process);$multiple_ans = str_replace(['+'], '<br/>', $multiple_ans);$multiple_ans =str_replace('}', '<br/>Answer: ', $multiple_ans);}}if (empty($multiple_ans)) {$multiple_ans = '';} 
            //DO NOT TOUCH LINES AFTER WEBSITE_URL AND API_KEY | FOR API FUNCTIONS ?>
			
            <input name="question"></input><input type="submit" id="submit" value="ANSWER"></input>
            </form>

			<div><?php echo $answer . $subject ?></div>		
			<?php foreach ((array)$multiple_ans as $multiple) {
            echo $multiple;
            } ?>
   
</body>
</html>