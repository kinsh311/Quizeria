<?php
$somevar = $_GET['uid'];
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'test');
$i = 0;


$q="select * from Technology_question";

$res = mysqli_query($con,$q);
$arey = array();
while($row = mysqli_fetch_assoc($res)){
    $arey[$i]['QNO'] = $row['qno'];
    $arey[$i]['QUESTION'] = $row['question'];
    $arey[$i]['O1'] = $row['o1'];
    $arey[$i]['O2'] = $row['o2'];
    $arey[$i]['O3'] = $row['o3'];
    $arey[$i]['O4'] = $row['o4'];
    $arey[$i]['ANSWER'] = $row['answer'];
    $i++;
}


?>
<html>
<head>
    <style>
    .but {
    background-color: slategrey; /* Green */
    border: box;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 10px;
    margin: 1px 2px;
    cursor: none;
        border-radius: 100%;
}</style>
<link rel="stylesheet" href="quiz3.css" type="text/css">
    <script>
     var strUser = <?php echo json_encode($somevar); ?>;
         if(strUser == 2)
             {
                 var Q = <?php echo json_encode( $arey ); ?>;
             }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script>
    var r=0;</script>
</head>

    
    
<body onload="nq()">
<div class="fullscreen-bg">
	<video loop autoplay poster="8.jpg" class="fullscreen-bg__video">
		<source src="Backyard_4K_Living_Background.mp4" type="video/mp4">
	</video>
</div>


<h1 id="sh1"> Quizeria </h1><br><br><br>

    
    
<hr>

    
    
<div class="mdiv">
<h1 id="s1" style="font-family: fantasy; font-size: 50;" > </h1>
<br><br>
    <label id="oo1" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op1" value="eniac" ><br>
    <label id="oo2" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op2"  ><br>
    <label id="oo3" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op3"  ><br>
    <label id="oo4" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op4"><br>
    <button class="sub" onclick="some()">proceed</button>
    <br>
   
    
    </div>
    <br>
 
    
    <script type="text/javascript">
    
            
	



$(document).ready(function(){
$('.slectOne').on('change', function() {
   $('.slectOne').not(this).prop('checked', false);
   $('#result').html($(this).data( "id" ));
   if($(this).is(":checked"))
   	$('#result').html($(this).data( "id" ));
   else
   	$('#result').html('Empty...!');
});
});
        
     
     
        function nq(){  
  if (strUser == 2){
      document.getElementById("op1").checked = false;
      document.getElementById("op2").checked = false;
      document.getElementById("op3").checked = false;
      document.getElementById("op4").checked = false;
            
            
            document.getElementById("s1").innerHTML=Q[r]['QUESTION'];
             document.getElementById("oo1").innerHTML=Q[r]['O1'];
             document.getElementById("oo2").innerHTML=Q[r]['O2'];
             document.getElementById("oo3").innerHTML=Q[r]['O3'];
             document.getElementById("oo4").innerHTML=Q[r]['O4'];
      
       
                }
        
        
     
        }
        function some()
        {
            if(document.getElementById("op1").checked == true)
                {   
                    if(Q[r]['O1']==Q[r]['ANSWER']){
                        
                    alert('this is correct');}
                }
            else if(document.getElementById("op2").checked == true)
                {   
                    if(Q[r]['O2']==Q[r]['ANSWER']){
                        
                    alert('this is correct');}
                }
            else if(document.getElementById("op3").checked == true)
                {   
                    if(Q[r]['O3']==Q[r]['ANSWER']){
                        
                    alert('this is correct');}
                }
             else if(document.getElementById("op4").checked == true)
                {   
                    if(Q[r]['O4']==Q[r]['ANSWER']){
                        
                    alert('this is correct');}
        }
            r++;
            nq();
        }
      

</script>
    <table><tr>
        <td><button class="but">Q1</button>
        </td>
        <td><button class="but">Q2</button>
        </td>
        <td><button class="but">Q3</button>
        </td>
        </tr>
        <tr>
        <td><button class="but">Q4</button>
        </td>
        <td><button class="but">Q5</button>
        </td>
        <td><button class="but">Q6</button>
        </td>
        </tr>
        <tr>
        <td><button class="but">Q7</button>
        </td>
        <td><button class="but">Q8</button>
        </td>
        <td><button class="but">Q9</button>
            </td></tr><tr>
        <td><button class="but">Q10</button>
        </td></tr>
        
    </table>
</body>
</html>
