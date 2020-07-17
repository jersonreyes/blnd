<!DOCTYPE HTML>
<!--
   DESIGNED AND CODED 
   BY JERSON REYES
   ONE PERSPECTIVE MEDIA | 2019
   
   BLNDD API | 2019
   https://www.blnd.ga/index.html
   -->
<?php
   include('../handler/index.php');
   ?>
<html>
   <head>
      <title>BLND - Blended Learning</title>
  <link rel="SHORTCUT ICON" href="https://www.blnd.ga/media/icon.png">
    <meta name="description" content="Answer AMA Online Education questions at ease - BLND is an automated answering system developed for AMA Blended Learning users including Grade 11 and Grade 12 students.">
    <meta name="keywords" content="AMA, OED, ONLINE, EDUCATION, SOURCE, GRADE 11, GRADE 12, SENIOR HIGH, BLENDED, LEARNING, AUTOMATED, ANSWERS">
    <meta property="og:url" content="https://www.blnd.ga/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="BLND - Blended Learning"/>
    <meta property="og:description" content="Answer AMA Online Education questions at ease - BLND is an automated answering system developed for AMA Blended Learning users including Grade 11 and Grade 12 students."/>
    <meta property="og:image" content="https://www.blnd.ga/media/cover.jpg"/>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8"/>
    <meta name="VIEWPORT" content="width=device-width, initial-scale=1"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   </head>
<body style="padding:5%">
<style>
table {
 border:1px solid black;
}
th {
 background-color:black;	
 padding:2%;
 color:white;
 text-transform:uppercase;
 font-family:bebas neue;
}
td {
		border: 1px solid black;
		padding-left:1%;
}
</style>
<center style="font-family:bebas neue;">
MASSIVE DATABASE
</center>
<br/>
<table>
<tr>
<th style="width:5%">#</th>
<th style="width:5%">REAL ID</th>
<th>question</th>
<th>answer</th>
<th style="width:10%">marked wrong</th>
</tr>
<?php
		$subject = 'FILI';
		
		$servername = "localhost";
$username = "REPLACE WITH YOUR PHPMYADMIN USERNAME";
$password = "REPLACE WITH YOUR PHPMYADMIN PASSWORD";
$dbname = "REPLACE WITH YOUR DATABASE NAME";
		$query = new mysqli($servername, $username, $password,$dbname);
		$sql="SELECT * FROM main_data WHERE subject LIKE '%{$subject}%'";
		$result = mysqli_query($query,$sql);
		static $number = 0;
		while($row = mysqli_fetch_assoc($result)){
			$answer = stripslashes($row['answer']); //answer
			$number++;
			echo '<tr><td>';
			echo $number;
			echo '</td>';
			echo '<td>';
			echo $row['id'];
			echo '</td>';
			echo '<td>';
			echo stripslashes($row['question']);
			echo '</td>';
			echo '<td>';
			echo stripslashes($row['answer']);
			echo '</td>';
			echo '<td style="text-align:Center;">';
			echo stripslashes($row['marked_wrong']);
			echo '</td></tr>';
		}
		$query->close();
?>
</table>
</body>
</html>