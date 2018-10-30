<?php
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'test');
$i=0;

$q="select * from Technology_question";

$res = mysqli_query($con,$q);
$products =array(); 
while($row = mysqli_fetch_assoc($res)){

$products[$i]['qno'] = $row['qno'];
$products[$i]['q'] = $row['question'];
$products[$i]['O1'] = $row['o1'];
$products[$i]['O2'] = $row['o2'];
$products[$i]['O3'] = $row['o3'];
$products[$i]['O4'] = $row['o4'];
$products[$i]['ANSWER'] = $row['answer'];

$i++;
}
?>
<script type="text/javascript">
var products = <?php echo json_encode( $products ) ?>;


alert( products[0]['ANSWER'] ); 
</script>
<html>
    <body>
            <h1 id="h"></h1>
        <button onclick="hey()">hey</button>
        
    <script>
        function hey(){
        for(i=0;i<10;i++)
        {
            var remarks=products[i]['ANSWER'];
             var ank = document.createElement("H2");
                                var praman = document.createTextNode(remarks);
                                ank.appendChild(praman);
            document.body.appendChild(ank);
                   // document.createElement("H1").innerHTML=products[i]['ANSWER'];
                
        }}
        </script>
    </body>
</html>


