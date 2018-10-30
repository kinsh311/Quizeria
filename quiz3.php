<?php
session_start();
$t=$_SESSION['t'];
if($t!=1)
{
    $tt=$_GET['sc'];
    echo $tt;
    $_SESSION['sc']=$tt;
    header('location:quiz2.php');
    
}

else{
    $_SESSION['t']=0;
$somevar = $_GET['uid'];
$con=mysqli_connect('127.0.0.1','root'); 
mysqli_select_db($con,'test');
$i = 0;

if($somevar==2){
    $naam="TECHNOLOGY";
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
}}
else if($somevar==3){
    $naam="APTITUDE";
$q="select * from aptitude_question";
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
}}
else if($somevar==1){
    $naam="GENERAL KNOWLEDGE";
$q="select * from gk_question";
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
}}
else if($somevar==4){
    $naam="CRICKET";
$q="select * from cricket_question";
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
}}
else if($somevar==5){
    $naam="HISTORY";
$q="select * from history_question";
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
}}
else if($somevar==6){
    $naam="INVENTIONS";
$q="select * from invention_question";
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
}}
else if($somevar==7){
    $naam="LITERATURE";
$q="select * from literature_question";
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
}}
else if($somevar==8){
    $naam="NETWORKING";
$q="select * from networking_question";
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
}}
else if($somevar==9){
    $naam="POLITICS";
$q="select * from politics_question";
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
}}
else if($somevar==10){
$naam="GAME OF THRONES";
    $q="select * from got_question";
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
}}}

?>
<html>
<head>
    <style>
.mySlides {display:none}


.slideshow-container {
    height: 150;
    width: 300;
  position: absolute;
  top: 10;
    right:30;
    box-shadow: box-shadow: 0 10px 30px #576;
    border-radius: 2px;
    opacity: .8;
    
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

        </style>
    
    
    
<link rel="stylesheet" href="quiz3.css" type="text/css">
    <script>
    var strUser = <?php echo json_encode($somevar); ?>;
    var naam = <?php echo json_encode($naam); ?>;
   

    var Q = <?php echo json_encode( $arey ); ?>;
             
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script>
    var r=0;</script>
</head>

    
    
<body onload="first()">

<div class="fullscreen-bg">
	<video loop autoplay poster="blurry-night.jpg" class="fullscreen-bg__video">
		<source src="blurry-night.mp4" type="video/mp4">
	</video>
</div>

<h1 id="sh1"> Quizeria </h1>
    
    <div class="slideshow-container">

<div class="mySlides fade">
  <img src="p1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="p2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="p3.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="p4.jpg" style="width:100%">
</div>
        <div class="mySlides fade">
  <img src="p5.jpg" style="width:100%">
</div>
        <div class="mySlides fade">
  <img src="p6.jpg" style="width:100%">
</div>

</div>
    <br>

<br>
    <br>
    
    
    
    
<hr>
<div id="scoreDiv">
    <h2 id="score"></h2>
</div>
    
<div class="mdiv" id="ddiv">
<h1 id="s1" style="font-family: fantasy; font-size: 50; line-height: 0.95;"></h1>
<br>
    <label id="oo1" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op1" value="eniac" ><br>
    <label id="oo2" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op2"  ><br>
    <label id="oo3" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op3"  ><br>
    <label id="oo4" style="font-family: fantasy; font-size: 30;" ></label>  <input type="checkbox" class="slectOne" id = "op4"><br>
    <button class="sub" onclick="some()" id="proceed">proceed</button>
    <br>
   
    
    </div>
    <br>
 
    
    <script type="text/javascript">
    var sc=0;   
            
	

$('.sub').bind('keypress', false);

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
        //to remove
        
        Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}
//to remove end
        var btn;
        
        var h;
        var i;
        var ii;
        var iii;
        var iv;
        var v;
        function first()
        {
            
                
             document.getElementById("op1").style.visibility="hidden";
            document.getElementById("op2").style.visibility="hidden";
            document.getElementById("op3").style.visibility="hidden";
            document.getElementById("op4").style.visibility="hidden";
            document.getElementById("proceed").style.visibility="hidden";
            document.getElementById("scoreDiv").style.visibility="hidden";
            document.getElementById("scard").style.visibility="hidden";
            
    h = document.createElement("H1");
    var t = document.createTextNode("Instructions :");
    h.appendChild(t);
    h.style.fontSize="50"; 
    h.style.position="absolute";
    h.style.left="270"; 
    h.style.top="200";
    h.style.fontFamily="cursive";
    h.style.color="3A1413";
            
     i = document.createElement("H2");
    var ti = document.createTextNode(" # This Quiz contains 10 questions.");
    i.appendChild(ti);
    i.style.fontSize="30"; 
    i.style.position="absolute";
    i.style.left="300";
    i.style.top="300";        
    i.style.fontFamily="sans";
    i.style.color="black";
    
    ii = document.createElement("H2");
    var tii = document.createTextNode(" # Select an answer for every question.");
    ii.appendChild(tii);
    ii.style.fontSize="30"; 
    ii.style.position="absolute";
    ii.style.left="300";
    ii.style.top="350";        
    ii.style.fontFamily="sans";
    ii.style.color="black";
            
    iii = document.createElement("H2");
    var tiii = document.createTextNode(" # Unanswered questions will be scored as incorrect.");
    iii.appendChild(tiii);
    iii.style.fontSize="30"; 
    iii.style.position="absolute";
    iii.style.left="300";
    iii.style.top="400";        
    iii.style.fontFamily="sans";
    iii.style.color="black";
            
    iv = document.createElement("H2");
    var tiv = document.createTextNode(" # Click the radio button to indicate your choice.");
    iv.appendChild(tiv);
    iv.style.fontSize="30"; 
    iv.style.position="absolute";
    iv.style.left="300";
    iv.style.top="450";        
    iv.style.fontFamily="sans";
    iv.style.color="black";
            
    v = document.createElement("H2");
    var tv = document.createTextNode(" # Click on the Proceed button to have your answers graded.");
    v.appendChild(tv);
    v.style.fontSize="30"; 
    v.style.position="absolute";
    v.style.left="300";
    v.style.top="500";        
    v.style.fontFamily="sans";
    v.style.color="black";
            
            
    btn = document.createElement("BUTTON");
    var t = document.createTextNode("UNDERSTOOD");
    btn.appendChild(t);      
    btn.className="unders"
    document.body.appendChild(btn);                                                                                
    document.body.appendChild(h);
    document.body.appendChild(i);
    document.body.appendChild(ii);
    document.body.appendChild(iii);
    document.body.appendChild(iv);
    document.body.appendChild(v);

            btn.onclick=second;
        }
        function second()
        {
            v.remove();
            iv.remove();
            iii.remove();
            ii.remove();
            i.remove();
            h.remove();
            btn.remove();
            document.getElementById("op1").style.visibility="visible";
            document.getElementById("op2").style.visibility="visible";
            document.getElementById("op3").style.visibility="visible";
            document.getElementById("op4").style.visibility="visible";
            document.getElementById("proceed").style.visibility="visible";
            document.getElementById("scoreDiv").style.visibility="visible";
            document.getElementById("scard").style.visibility="visible";
            
            nq();
        }
        
        function nq(){
          
            
            
    document.getElementById("score").innerHTML=sc+"/10";
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
        function some()
        {
            if(r==9)
                {
                    wait_madi();
                    function wait_madi() {
                        window.setTimeout(wait_madtini,1000);
                    }

                 
                    function wait_madtini(){
            document.getElementById("s1").style.visibility="hidden";
            document.getElementById("op1").style.visibility="hidden";
            document.getElementById("op2").style.visibility="hidden";
            document.getElementById("op3").style.visibility="hidden";
            document.getElementById("op4").style.visibility="hidden";
            document.getElementById("oo1").style.visibility="hidden";
            document.getElementById("oo2").style.visibility="hidden";
            document.getElementById("oo3").style.visibility="hidden";
            document.getElementById("oo4").style.visibility="hidden";
            document.getElementById("proceed").style.visibility="hidden";
            document.getElementById("scoreDiv").style.visibility="hidden";
            document.getElementById("scard").style.visibility="hidden";
            document.getElementById("ddiv").style.backgroundColor="white";
                        if(sc==10)
                            {
                                var remarks="GOD LEVEL";
                                
                                var god = document.createElement("IMG");
                                god.setAttribute("src", "god.png");
                                god.setAttribute("height","200");
                                god.setAttribute("width","200");
                                god.style.position="absolute";
                                god.style.top="200";
                                god.style.left="1000";
                                document.body.appendChild(god);
                                
                            }
                        if(sc>=8 && sc!=10)
                            {
                                var remarks="EXCELLENT";
                                
                                var god = document.createElement("IMG");
                                god.setAttribute("src", "ex.png");
                                god.setAttribute("height","200");
                                god.setAttribute("width","200");
                                god.style.position="absolute";
                                god.style.top="200";
                                god.style.left="1000";
                                document.body.appendChild(god);
                                
                            }
                        if(sc>=5 && sc<8)
                            {
                                var remarks="AVERAGE";
                                
                                var god = document.createElement("IMG");
                                god.setAttribute("src", "avg.png");
                                god.setAttribute("height","200");
                                god.setAttribute("width","200");
                                god.style.position="absolute";
                                god.style.top="200";
                                god.style.left="1000";
                                document.body.appendChild(god);
                            }
                        if(sc<5)
                            {
                                var remarks="POOR";
                                
                                var god = document.createElement("IMG");
                                god.setAttribute("src", "poor.png");
                                god.setAttribute("height","200");
                                god.setAttribute("width","200");
                                god.style.position="absolute";
                                god.style.top="200";
                                god.style.left="1000";
                                document.body.appendChild(god);
                            }
                        if(sc==0)
                            {
                                var remarks="YOU ARE DUMB";
                        
                                var god = document.createElement("IMG");
                                god.setAttribute("src", "dumb.png");
                                god.setAttribute("height","200");
                                god.setAttribute("width","200");
                                god.style.position="absolute";
                                god.style.top="200";
                                god.style.left="1000";
                                document.body.appendChild(god);
                            }
                        
                                var ank = document.createElement("H2");
                                var praman = document.createTextNode(remarks);
                                ank.appendChild(praman);
                                ank.style.fontSize="60"; 
                                ank.style.position="absolute";
                                ank.style.left="300";
                                ank.style.top="200";        
                                ank.style.fontFamily="sans";
                                ank.style.color="#3399CC";
                                document.body.appendChild(ank);  
                                
                                var table1 = document.createElement("TABLE");
                                table1.setAttribute("id", "table1");
                                table1.setAttribute("cellspacing", "15");
                                table1.style.fontFamily="Trebuchet MS";
                                table1.style.fontSize="25";
                                document.body.appendChild(table1);
                                
                                var row1 = document.createElement("TR");
                                row1.setAttribute("id", "row1");
                                var row2 = document.createElement("TR");
                                row2.setAttribute("id", "row2");
                                var row3 = document.createElement("TR");
                                row3.setAttribute("id", "row3");
                                var row4 = document.createElement("TR");
                                row4.setAttribute("id", "row4");
                                document.getElementById("table1").appendChild(row1);
                                document.getElementById("table1").appendChild(row2);
                                document.getElementById("table1").appendChild(row3);
                                document.getElementById("table1").appendChild(row4);
                                
                                
                                var oneone = document.createElement("TD");
                                var oneoned = document.createTextNode("QUIZ NAME");
                                oneone.appendChild(oneoned);
                                document.getElementById("row1").appendChild(oneone);
                                
                                 var onetwo = document.createElement("TD");
                                var onetwod = document.createTextNode(naam);
                                onetwo.appendChild(onetwod);
                                document.getElementById("row1").appendChild(onetwo);
                                
                                
                                 var twoone = document.createElement("TD");
                                var twooned = document.createTextNode("TOTAL QUESTION");
                                twoone.appendChild(twooned);
                                document.getElementById("row2").appendChild(twoone);
                                
                                var twotwo = document.createElement("TD");
                                var twotwod = document.createTextNode("10");
                                twotwo.appendChild(twotwod);
                                document.getElementById("row2").appendChild(twotwo);
                                
                                
                                var TF = document.createElement("TD");
                                var TFd = document.createTextNode("CORRECT");
                                TF.appendChild(TFd);
                                document.getElementById("row3").appendChild(TF);
                                
                                var TS = document.createElement("TD");
                                var TSd = document.createTextNode(sc);
                                TS.appendChild(TSd);
                                document.getElementById("row3").appendChild(TS);
                                
                                
                                
                                
                                
                                
                                
                              
                                var ankdiv = document.createElement("DIV");
                                ankdiv.appendChild(table1);
                                ankdiv.style.position="absolute";
                                ankdiv.style.top="400";
                                ankdiv.style.left="300";
                                ankdiv.style.borderRadius="20";
                                
                            
                                
                                ankdiv.style.backgroundColor="grey";
                                document.body.appendChild(ankdiv);
                                
                        
                    
                        
                        var playnext = document.createElement("BUTTON");
                        var pn=document.createTextNode("ENTER")
                        playnext.setAttribute("class","next");
                        
                       playnext.onclick=q4;
                        playnext.appendChild(pn);
                        
                        document.body.appendChild(playnext);
                        
                        function q4()
                        {
                          
                             window.location.href="quiz3.php?sc="+sc;

                        }
                        
                       
                            
            
                    }
                }
            if(document.getElementById("op1").checked == true)
                {   
                    if(Q[r]['O1']==Q[r]['ANSWER']){
                        sc++;
                        document.getElementById("score").innerHTML=sc+"/10";
                        if(r==0) document.getElementById(1).style.backgroundColor="#669933"; if(r==1) document.getElementById(2).style.backgroundColor="#669933"; if(r==2) document.getElementById(3).style.backgroundColor="#669933"; if(r==3) document.getElementById(4).style.backgroundColor="#669933"; if(r==4) document.getElementById(5).style.backgroundColor="#669933"; if(r==5) document.getElementById(6).style.backgroundColor="#669933"; if(r==6) document.getElementById(7).style.backgroundColor="#669933"; if(r==7) document.getElementById(8).style.backgroundColor="#669933"; if(r==8) document.getElementById(9).style.backgroundColor="#669933"; if(r==9) document.getElementById(10).style.backgroundColor="#669933";
                    }
                     else
            {
            if(r==0) document.getElementById(1).style.backgroundColor="#922A31"; if(r==1) document.getElementById(2).style.backgroundColor="#922A31"; if(r==2) document.getElementById(3).style.backgroundColor="#922A31"; if(r==3) document.getElementById(4).style.backgroundColor="#922A31"; if(r==4) document.getElementById(5).style.backgroundColor="#922A31"; if(r==5) document.getElementById(6).style.backgroundColor="#922A31"; if(r==6) document.getElementById(7).style.backgroundColor="#922A31"; if(r==7) document.getElementById(8).style.backgroundColor="#922A31"; if(r==8) document.getElementById(9).style.backgroundColor="#922A31"; if(r==9) document.getElementById(10).style.backgroundColor="#922A31";
            }
                }
            else if(document.getElementById("op2").checked == true)
                {   
                    if(Q[r]['O2']==Q[r]['ANSWER']){
                        sc++;
                        document.getElementById("score").innerHTML=sc+"/10";
                        if(r==0) document.getElementById(1).style.backgroundColor="#669933"; if(r==1) document.getElementById(2).style.backgroundColor="#669933"; if(r==2) document.getElementById(3).style.backgroundColor="#669933"; if(r==3) document.getElementById(4).style.backgroundColor="#669933"; if(r==4) document.getElementById(5).style.backgroundColor="#669933"; if(r==5) document.getElementById(6).style.backgroundColor="#669933"; if(r==6) document.getElementById(7).style.backgroundColor="#669933"; if(r==7) document.getElementById(8).style.backgroundColor="#669933"; if(r==8) document.getElementById(9).style.backgroundColor="#669933"; if(r==9) document.getElementById(10).style.backgroundColor="#669933";
                    }
                     else
            {
            if(r==0) document.getElementById(1).style.backgroundColor="#922A31"; if(r==1) document.getElementById(2).style.backgroundColor="#922A31"; if(r==2) document.getElementById(3).style.backgroundColor="#922A31"; if(r==3) document.getElementById(4).style.backgroundColor="#922A31"; if(r==4) document.getElementById(5).style.backgroundColor="#922A31"; if(r==5) document.getElementById(6).style.backgroundColor="#922A31"; if(r==6) document.getElementById(7).style.backgroundColor="#922A31"; if(r==7) document.getElementById(8).style.backgroundColor="#922A31"; if(r==8) document.getElementById(9).style.backgroundColor="#922A31"; if(r==9) document.getElementById(10).style.backgroundColor="#922A31";
            }
                }
            else if(document.getElementById("op3").checked == true)
                {   
                    if(Q[r]['O3']==Q[r]['ANSWER']){
                        sc++;
                        document.getElementById("score").innerHTML=sc+"/10";
                        if(r==0) document.getElementById(1).style.backgroundColor="#669933"; if(r==1) document.getElementById(2).style.backgroundColor="#669933"; if(r==2) document.getElementById(3).style.backgroundColor="#669933"; if(r==3) document.getElementById(4).style.backgroundColor="#669933"; if(r==4) document.getElementById(5).style.backgroundColor="#669933"; if(r==5) document.getElementById(6).style.backgroundColor="#669933"; if(r==6) document.getElementById(7).style.backgroundColor="#669933"; if(r==7) document.getElementById(8).style.backgroundColor="#669933"; if(r==8) document.getElementById(9).style.backgroundColor="#669933"; if(r==9) document.getElementById(10).style.backgroundColor="#669933";
                    }
                     else
            {
            if(r==0) document.getElementById(1).style.backgroundColor="#922A31"; if(r==1) document.getElementById(2).style.backgroundColor="#922A31"; if(r==2) document.getElementById(3).style.backgroundColor="#922A31"; if(r==3) document.getElementById(4).style.backgroundColor="#922A31"; if(r==4) document.getElementById(5).style.backgroundColor="#922A31"; if(r==5) document.getElementById(6).style.backgroundColor="#922A31"; if(r==6) document.getElementById(7).style.backgroundColor="#922A31"; if(r==7) document.getElementById(8).style.backgroundColor="#922A31"; if(r==8) document.getElementById(9).style.backgroundColor="#922A31"; if(r==9) document.getElementById(10).style.backgroundColor="#922A31";
            }
                }
             else if(document.getElementById("op4").checked == true)
                {   
                    if(Q[r]['O4']==Q[r]['ANSWER']){
                        sc++;
                        document.getElementById("score").innerHTML=sc+"/10";
                       if(r==0) document.getElementById(1).style.backgroundColor="#669933"; if(r==1) document.getElementById(2).style.backgroundColor="#669933"; if(r==2) document.getElementById(3).style.backgroundColor="#669933"; if(r==3) document.getElementById(4).style.backgroundColor="#669933"; if(r==4) document.getElementById(5).style.backgroundColor="#669933"; if(r==5) document.getElementById(6).style.backgroundColor="#669933"; if(r==6) document.getElementById(7).style.backgroundColor="#669933"; if(r==7) document.getElementById(8).style.backgroundColor="#669933"; if(r==8) document.getElementById(9).style.backgroundColor="#669933"; if(r==9) document.getElementById(10).style.backgroundColor="#669933";
                        
                    }
                     else
            {
            if(r==0) document.getElementById(1).style.backgroundColor="#922A31"; if(r==1) document.getElementById(2).style.backgroundColor="#922A31"; if(r==2) document.getElementById(3).style.backgroundColor="#922A31"; if(r==3) document.getElementById(4).style.backgroundColor="#922A31"; if(r==4) document.getElementById(5).style.backgroundColor="#922A31"; if(r==5) document.getElementById(6).style.backgroundColor="#922A31"; if(r==6) document.getElementById(7).style.backgroundColor="#922A31"; if(r==7) document.getElementById(8).style.backgroundColor="#922A31"; if(r==8) document.getElementById(9).style.backgroundColor="#922A31"; if(r==9) document.getElementById(10).style.backgroundColor="#922A31";
            }
        }
            else
            {
            if(r==0) document.getElementById(1).style.backgroundColor="#922A31"; if(r==1) document.getElementById(2).style.backgroundColor="#922A31"; if(r==2) document.getElementById(3).style.backgroundColor="#922A31"; if(r==3) document.getElementById(4).style.backgroundColor="#922A31"; if(r==4) document.getElementById(5).style.backgroundColor="#922A31"; if(r==5) document.getElementById(6).style.backgroundColor="#922A31"; if(r==6) document.getElementById(7).style.backgroundColor="#922A31"; if(r==7) document.getElementById(8).style.backgroundColor="#922A31"; if(r==8) document.getElementById(9).style.backgroundColor="#922A31"; if(r==9) document.getElementById(10).style.backgroundColor="#922A31";
            }
            r++;
            nq();
        }
      
        //photo animation
        var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
        <table id="scard" cellspacing="0">
           
            <tr>
                <td id="notd"></td>
        <td colspan="2"><button class="but" id="1">Q1</button>
        </td>
        <td colspan="2"><button class="but" id="2">Q2</button>
        </td>
        <td colspan="2"><button class="but" id="3">Q3</button>
        </td>
        
        <td colspan="2"><button class="but" id="4">Q4</button>
        </td>
        <td colspan="2"><button class="but" id="5">Q5</button>
        </td>
        <td colspan="2"><button class="but" id="6">Q6</button>
        </td>
        
        <td colspan="2"><button class="but" id="7">Q7</button>
        </td>
        <td colspan="2"><button class="but" id="8">Q8</button>
        </td>
        <td colspan="2"><button class="but" id="9">Q9</button>
            </td>
        <td colspan="2"><button class="but" id="10">Q10</button>
        </td></tr>
        
    </table>
</body>
</html>
