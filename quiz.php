<?php
session_start();
$sc=0;
$_SESSION['t']=1;

?>

<html>
    <head>
	
<link rel="stylesheet" href="quiz.css" type="text/css">
    </head>
    <body>
	<img id="line" src="swirl-design-white-hi.png"><br>
	
	
        <div class="heading">
            <span class="title1">QuiZERIA</span>
            <span class="title2">ENTER YOUR NAME</span> 
            <form method="post">
            <input type="text" id="txt" name="user" style="position:absolute; top:200px; left:225px;">
            <input type="submit" class="register" value="enter" name="ent">
            </form>
           <?php if(isset($_POST['ent']))
{
    $_SESSION['us']=$_POST['user'];
    $_SESSION['sc']=$sc;
    header('location:quiz2.php');
}
            ?>
			
            
        </div>
        
<hr color="white">
		
		
		
<table id="pic">
  <tr>
    <td><div class="card-container">
  <div class="card">
    <div class="side"><img id="flip" src="history-quiz-questions-370x297.jpg"></div>
    <div class="side back">CHOOSE TO SHINE</div>
  </div>
</div>
</td>
    <td><div class="card-container">
  <div class="card">
    <div class="side"><img id="flip" src="shutterstock_496986886.jpg"></div>
    <div class="side back">DECIDE COMMIT SUCCEED</div>
  </div>
</div></td>
    <td><div class="card-container">
  <div class="card">
    <div class="side"><img id="flip" src="PIMCO_Education_Hero_A_Sept2016_460x470_47007.jpg"></div>
    <div class="side back">NEVER BACK DOWN</div>
  </div>
        
</div></td>
<td>
<div class="card-container">
  <div class="card">
    <div class="side back">1 DAY, OR DAY 1?</div>
    <div class="side"><img id="flip" src="quiz_00005.jpg"></div>
  </div>
</div>
</td>
<td>
<div class="card-container">
  <div class="card">
    <div class="side back">DREAM BIG</div>
    <div class="side"><img id="flip" src="the-crucible-study-guide_204067_large.jpg"></div>
  </div>
</div>
</td>
<td>
<div class="card-container">
  <div class="card">
    <div class="side back">SELF MADE</div>
    <div class="side"><img id="flip" src="maxresdefault.jpg"></div>
  </div>
</div>
</td>
<td>
<div class="card-container">
  <div class="card">
    <div class="side back">BE BRAVE n BOLD</div>
    <div class="side"><img id="flip" src="keep-calm-its-quiz-time-2.png"></div>
  </div>
</div>
</td>
  </tr>
  </table>
  <footer color="grey"> contact us </footer>
    </body>
</html>