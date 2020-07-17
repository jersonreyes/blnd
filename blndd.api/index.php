<?php
// BLNDD API
// STATUS
$not_found = 'Answer not found.';
$subject_not_found = 'Subject not found.';
$not_enough = 'Please provide more parts of the question';
$answer_from_database =  '';//init
$minimum_part = 7;
$answer = '';
$subject = '';

//INIT
if(isset($_GET['data'])) {
	$data = $_GET['data'];
}	else {$data = ' + ';}

list($key_from_website, $website_url) = explode('+', $data);
// SEPARATE KEY FROM ORIGINAL WEBSITE URL

//INIT
if ($key_from_website!=''){
	$key_raw = base64_decode($key_from_website);
}	else {$key_raw = '';}

//INIT
if ($website_url!=''){
	$redirect_response = base64_decode($website_url);
}	else {$redirect_response = '';}


// KEY RETRIEVAL/VERIFICATION

	$servername = "localhost";
$username = "REPLACE WITH YOUR PHPMYADMIN USERNAME";
$password = "REPLACE WITH YOUR PHPMYADMIN PASSWORD";
$dbname = "REPLACE WITH YOUR DATABASE NAME";
	$conn = new mysqli($servername, $username, $password,$dbname);

	$sql="SELECT * FROM api_key WHERE api_key = '$key_raw'";
	$result = mysqli_query($conn,$sql);
	$row_cnt = $result->num_rows;
	
	if ($row_cnt){
	  while ($row=mysqli_fetch_row($result)){

			if (isset($_GET['question']) && $key_raw === $row[1] ) {
				$answer_char = strlen($_GET['question']); //compute length
				if ($answer_char > $minimum_part) {
	
					$query = new mysqli($servername, $username, $password,$dbname);
					$question_unflitered = strtolower($_GET['question']); // RAW, WITH SPECIAL REGEX
					$question_raw = str_replace('\\','\\\\\\\\\\',mysqli_real_escape_string($conn, $question_unflitered)); // FILTERED
					$sql="SELECT * FROM main_data WHERE question LIKE '%{$question_raw}%'";
					$result = mysqli_query($query,$sql);
					$result_count = $result->num_rows;
					while($row = mysqli_fetch_assoc($result)){
						if($result_count > 0){
						$answer = "Answer:" . $row['answer']; //answer
						$subject = $row['subject']; //subject
						}
						$array[] = '{'.$row['question'].'+}'.$row['answer'];
						$answer_from_database =  stripslashes(implode('|',$array));
					}
					if($result_count < 1) {
					$answer = $not_found;	
					}
					
					$query->close();
					
				} else {
					$answer = $not_enough;
				}
                $answer_from_database_encoded = strtr(base64_encode($answer_from_database), '+/', '-_');
			}
          $answer = strtr(base64_encode($answer), '+/=', '-_,');
          $subject = strtr(base64_encode($subject), '+/=', '-_,');

	//REDIRECT TO ORIGINAL WEBSITE
    header('Location: ' . $redirect_response.'?blndd_api_response='.$answer.'&blndd_api_response_subject='.$subject.'&multiple-answers='.$answer_from_database_encoded);
    exit;
	
		}
	  }	
		if($key_raw == '') {
		  echo '<title>ERR-1 - BLND API</title><link rel="stylesheet" href="../css/main.css"><style>body{background-color:#FFF8E1}</style></link>
          
          <div style="padding:4%;line-height:1px;" class="condensed">
          
          <p style="font-size:60px;"><b>BLNDD API</b><div style="font-size:12px;margin-bottom:3%;margin-top:-1.5%">DEVELOPED BY JERSON REYES</div>
          
          <div style="margin-top:-4%">
          <div style="padding:3% 0%;">
          <p style="font-size:30px;color:gray"><span class="black" style="vertical-align:middle">ERR-1:</span> API KEY NOT PROVIDED</div></div></p>
          
          <p style="font-size:13px;color:gray;margin-top:-4%">REQUEST INFORMATION</p></div>';
	  }	  
	  
	  if($row_cnt<1 && $key_raw != '') {
		  echo '<title>ERR-1 - BLND API</title><link rel="stylesheet" href="../css/main.css"><style>body{background-color:#FFF8E1}</style></link>
          
          <div style="padding:4%;line-height:1px;" class="condensed">
          
          <p style="font-size:60px;"><b>BLNDD API</b><div style="font-size:12px;margin-bottom:3%;margin-top:-1.5%">DEVELOPED BY JERSON REYES</div>
          
          <div style="margin-top:-4%">
          <div style="padding:3% 0%;">
          <p style="font-size:30px;color:gray"><span class="black" style="vertical-align:middle">ERR-2:</span> API KEY DOES NOT MATCH</div></div></p>
          
          <p style="font-size:13px;color:gray;margin-top:-4%">REQUEST INFORMATION</p></div>';
	  }
?>
