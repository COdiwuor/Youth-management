<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link
rel="stylesheet"
type="text/css"
href="ycsms.css"/>
<div>
    <nav >
<a ><img class="img" src="contact.PNG" style="width:2%;height:2%;">07112228222</a>
<a style="float:right" href="www.facebook.com"><img class="img" src="facebook.ico" style="width:10%;height:10%;"></a>
<a style="float:right"href="www.twitter.com"><img src="twitter.PNG" style="width:10%;height:10%;"></a>
<a style="float:right"href="www.youtube.com" ><img src="youtube.JPG" style="width:10%;height:10%;"></a>
</nav>


<hr style="color:green">
</div>
    </head>
    <body>
         <div class="float-left-area">
<div class="inner-left">
       
<fieldset>
<legend >My Profile </legend>
  <div class="float-left-area">

</div><br>

<link href= "Prr.css" type="text/css" rel="stylesheet">
<table class="table">
<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM supervisors");



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
  echo '<th> Image: <br> <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="width:150px;height:130px"/></td>';
 echo "<th class="c1"> First Name: ".$row['Firstname']. "</td>";
 echo "<th class="c2"> LastName: ".$row['Lastname']. "</td>";
 echo "<th class="c3"> ID: ".$row['IDnumber']. "</td>";
 echo "<th class="c4"> Gender: ".$row['Gender']. "</td>";
 echo "<th> Contact: ".$row['Contact']. "</td>";
 echo "<th> Email: ".$row['Email']. "</td>";
 echo "<th> Account: ".$row['Account']. "</td>";
 echo "<th> Religion: ".$row['Religion']. "</td>";
 echo "<th> Residence: ".$row['Residence']. "</td>";
 echo "<th> NextofKin: ".$row['Nextofkin']. "</td>";
 echo "<th> NextofKin ID: ".$row['NextofkinID']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database
?>
</fieldset>


</div>
</div>
<div class="float-right-area" >
<div class="inner-right" style= "font-family:Baskerville Old Face;
font-size:30px;">
<a href= "userdetails.php" > User Details </a><br>
<a href= "workstation.php" > workstations </a> <br>
<a href= "supervisor.php"  > supervisors </a><br>
<a href= "reports.html" > reports </a><br>
<a href= "suggestions.html"> Suggestions </a><br>
<a href= "logout.php"> Logout </a><br>


    </div>
    </div>
</body>

    </html>