<?php
$score = $_GET['sc'];
$naem = $_GET['nm'];
echo $score;
echo $naem;
?>
<html>
<head>
<link rel="stylesheet" href="quiz3.css" type="text/css">
</head>

    
    
<body>
    <div class="fullscreen-bg">
	<video loop autoplay poster="blurry-night.jpg" class="fullscreen-bg__video">
		<source src="blurry-night.mp4" type="video/mp4">
	</video>
</div>
<h1 id="sh1"> Quizeria </h1>
 
<hr>

    
<div class="mdiv" id="ddiv">
    <h1 id="s1" style="font-family: fantasy; font-size: 50; line-height: 0.95;"></h1>
    <br>
    <button class="sub" onclick="some()" id="proceed">NEXT QUIZ</button>
    <br>
</div>
    <br>
 </body>
</html>
