<?php
session_start();
$naim = $_SESSION['us'];
$score = $_SESSION['sc'];


if($_SESSION['t']==0)
{
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'test');

$qu="UPDATE score SET score = $score WHERE name = '$naim'; ";
mysqli_query($con,$qu);
mysqli_close($con);
}
else
{
   
    $con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'test');

$qu="insert into yourname(name) values('$naim')";
mysqli_query($con,$qu);
mysqli_close($con);
}

?>
<html style="
  min-height: 100%;
  box-shadow: 0 0 500px rgba(0,0,0,1) inset;
"
>
<head>
<link rel="stylesheet" href="quiz2.css" type="text/css">
    <script>
    function f_gk()
        {
        window.location.href="quiz3.php?uid=1";
            
        }
      function f_tech()
        {
           window.location.href="quiz3.php?uid=2"; 
        }
        function f_apt()
        {
            window.location.href="quiz3.php?uid=3";
        }
        function f_cric()
        {
        window.location.href="quiz3.php?uid=4";
            
        }
        function f_hist()
        {
        window.location.href="quiz3.php?uid=5";
        }
            function f_inv()
        {
        window.location.href="quiz3.php?uid=6";
        }
           function f_lit()
        {
        window.location.href="quiz3.php?uid=7";
        }
           function f_net()
        {
        window.location.href="quiz3.php?uid=8";
        }
           function f_pol()
        {
        window.location.href="quiz3.php?uid=9";
        }
         function f_got()
        {
        window.location.href="quiz3.php?uid=10";
        }
        
            
        
    </script>

</head>
<body style="
	background-image: url(bg1.jpg);
    background-position:center;
    background-size:cover;
    background-blend-mode:luminosity;
	
"
>
<header id="topHeader">
Quizeria
</header>
    <br>
    <hr>
    <img src='topic.png' style="position: absolute;
                                left:40%;"/>


<div id="outerDiv" align="center">
    
<table id="tt">
  <tr>
    <td>
        
            <input type="image" id="workingButton_cricket" src="cricket.png" width="100" height="100" onclick="f_cric()" >
</td>
<td>
<input type="image" id="workingButton_gk" src="gk.png" width="100" height="100" onclick="f_gk()">
</td>
<td>
<input type="image" id="workingButton_technology" src="technology.jpg" width="100" height="100" onclick="f_tech()">
</td>
<td>
<input type="image" id="workingButton_politics" src="politics.png" width="100" height="100" onclick="f_pol()">
</td>
<td>
<input type="image" id="workingButton_history" src="history.png" width="100" height="100" onclick="f_hist()" >
</td>
    </tr>
    <tr>
<td>
<input type="image" id="workingButton_inventions" src="inventions.png" width="100" height="100" onclick="f_inv()" >
</td>
<td>
<input type="image" id="workingButton_literature" src="literature.jpg" width="100" height="100" onclick="f_lit()" >
</td>
<td>
<input type="image" id="workingButton_aptitude" src="aptitude.png" width="100" height="100" onclick="f_apt()" >
</td>

<td>
<input type="image" id="workingButton_networking" src="networking.jpg" width="100" height="100" onclick="f_net()">
</td>
        <td>
<input type="image" id="workingButton_music" src="got.jpg" width="100" height="100" onclick="f_got()">
</td>
</tr></table>
    </div>
    
</body>
</html>
