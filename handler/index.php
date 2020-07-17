<?php

// VISITOR COUNT
$servername = "localhost";
$username = "REPLACE WITH YOUR PHPMYADMIN USERNAME";
$password = "REPLACE WITH YOUR PHPMYADMIN PASSWORD";
$dbname = "REPLACE WITH YOUR DATABASE NAME";
$query = new mysqli($servername, $username, $password,$dbname);
$update="UPDATE `traffic_data` SET `visitors` = visitors+1";
$run = mysqli_query($query,$update);


$not_found = 'Answer not found.';
$subject_not_found = 'Subject not found.';
$init = 'Paste question to show answers.';
$not_enough = 'Please provide more parts of the question';
$elsc = ''; //init
$subject = ''; //init
$minimum_part = 10;
$answer_from_database = ''; //init
$star = ''; // init
$question_result = ''; //init


// STORING DATA FOR TOGGLE
if(isset($_COOKIE['auto_submit'])){
$auto_s_cookie = $_COOKIE['auto_submit'];
}	else {
$auto_s_cookie = '';
}

if(isset($_COOKIE['auto_paste'])){
$auto_p_cookie = $_COOKIE['auto_paste'];
}	else {
$auto_p_cookie = '';
}

if(isset($_POST['allow_cookie'])){
	setcookie("allow_cookies", 'true', time() + (10 * 365 * 24 * 60 * 60));
	header('Location: index.php');
}


if(isset($_POST['close-tutorial'])){
	setcookie("tutorial_viewed", 'true', time() + (10 * 365 * 24 * 60 * 60));
	header('Location: index.php');
}

if(isset($_POST['switch-theme'])){
	setcookie("dark", 'true', time() + (10 * 365 * 24 * 60 * 60));
	header('Location: index.php');
}

if(isset($_POST['switch-theme-default'])){
	unset($_COOKIE['dark']);
	setcookie('dark', '', time() - 3600);
	header('Location: index.php');
}

// check if auto submit checkbox is checked
if(isset($_POST['question']) && empty($_POST['question']) && !empty($_POST['auto_submit']) && $auto_s_cookie == '') {
	setcookie("auto_submit", 'on', time() + (10 * 365 * 24 * 60 * 60));
	header('Location: index.php');
}	elseif(isset($_POST['question']) && empty($_POST['question']) && empty($_POST['auto_submit']) && $auto_s_cookie == 'on') {
	unset($_COOKIE['auto_submit']);
	$cookie = setcookie('auto_submit', '', time() - 3600);
	header('Location: index.php');
}
if(isset($_POST['question']) && empty($_POST['question']) && !empty($_POST['auto_paste']) && $auto_p_cookie == '') {
	setcookie("auto_paste", 'on', time() + (10 * 365 * 24 * 60 * 60));
	header('Location: index.php');
   }	elseif(isset($_POST['question']) && empty($_POST['question']) && empty($_POST['auto_paste']) && $auto_p_cookie == 'on') {
	unset($_COOKIE['auto_paste']);
	$cookie = setcookie('auto_paste', '', time() - 3600);
	header('Location: index.php');
}


if(isset($_POST['question']) && !empty($_POST['question'])) {
    $answer_char = strlen($_POST['question']); //compute length
    if($answer_char > $minimum_part) {

		$question_unfiltered = strtolower($_POST['question']); // RAW, WITH SPECIAL REGEX
		$question_raw = str_replace('\\','\\\\\\\\\\',mysqli_real_escape_string($query, $question_unfiltered)); // FILTERED
		$question_raw_unpreg = mysqli_real_escape_string($query, $question_unflitered);

		$sql="SELECT * FROM main_data WHERE question = '".$question_raw_unpreg."' OR question LIKE '%{$question_raw}%'";
		$result = mysqli_query($query,$sql);
		$result_count = $result->num_rows;
		$array = array(); //init
		while($row = mysqli_fetch_assoc($result)){
		if($result_count > 1){
			//echo $row['answer'].'<br/>';
			}	elseif($result_count == 1) {
				//echo $row['answer'];
			}
			$answer = stripslashes($row['answer']); //answer
			$test = $row['answer'];
			$subject = $row['subject']; //subject	
            $array[] = '{'.$row['question'].'+}'.$row['answer'];
            $answer_from_database =  stripslashes(implode('|',$array));
            
			$current = $row['marked_wrong'];
			$current_add = $current + 1;
			if(isset($_POST['marked_wrong'])) {
				$update="UPDATE `main_data` SET `marked_wrong` = '".$current_add."' WHERE `answer` = '".$test."' AND `question` LIKE '%{$question_raw}%'";
				$run = mysqli_query($query,$update);
		}
		$star = $row['marked_wrong'];
		$question_result = stripslashes($row['question']);
		}
		//echo $answer_from_database;
		if($result_count == 0) {
		$answer = $not_found;	
		}
		
		
		$query->close();
	

		session_start();
		// FOR INPUT AUTO FILL
		$_SESSION["question"] = $question_unfiltered;
		$_SESSION["question_result"] = $question_result;
		
		// RATING 
		$_SESSION['rating'] = $star;
		//BRAINLY
		if(isset($_SESSION['question']) && $answer == 'Answer not found.'){
			$question = $_SESSION['question'];
			$brainly = 'https://brainly.ph/app/ask?entry=hero&q='."$question";
		}

		
    }	elseif(isset($_POST['question']) && !empty($_POST['question'])) {
        $answer = $not_enough;
    }
	$_SESSION["answer"] = str_replace('Answer: ','', $answer);    
}   


// API KEY STORAGE
if(isset($_POST['key-generate'])) {
	setcookie("generated", 'true', time() + (10 * 365 * 24 * 60 * 60));
    $key = implode('-', str_split(substr(strtolower(sha1(microtime().rand(1000, 9999))), 0, 30), 6));
	session_start();
	$_SESSION["key"] = $key;
	header('Location: api.php');

	// IP HANDLING
	function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

	$ip = getUserIP();
	$servername = "localhost";
	$username = "REPLACE WITH YOUR PHPMYADMIN USERNAME";
	$password = "REPLACE WITH YOUR PHPMYADMIN PASSWORD";
	$dbname = "REPLACE WITH YOUR DATABASE NAME";
	$date = date("Y-m-d H:i:s");
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	$sql = "INSERT INTO api_key (api_key, date, used, ip)
	VALUES ('$key', '$date','no', '$ip')";
	$conn->query($sql);
	$conn->close();
}

if(basename(dirname($_SERVER[PHP_SELF])) == 'handler') {
    header('Location: ../index.php');
}