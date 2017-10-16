<!DOCTYPE HTML>
<html>
<head>
<title>Users</title>
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
       <link href= "Prr.css" type="text/css" rel="stylesheet">
<table class="table">

<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM supervisors");



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
  echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="width:150px;height:130px"/></td>';
 echo "<th>".$row['Firstname']. "</td>";
 echo "<th>".$row['Lastname']. "</td>";
 echo "<th>".$row['IDnumber']. "</td>";
 echo "<th>".$row['Gender']. "</td>";
 echo "<th>".$row['Contact']. "</td>";
 echo "<th>".$row['Email']. "</td>";
 echo "<th>".$row['Account']. "</td>";
 echo "<th>".$row['Religion']. "</td>";
 echo "<th>".$row['Residence']. "</td>";
 echo "<th>".$row['Nextofkin']. "</td>";
 echo "<th>".$row['NextofkinID']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database


?></div>
</div>
<div class="float-right-area" >
<div class="inner-right" style= "font-family:Baskerville Old Face;
font-size:30px;">
<a href= "bid.php" > Book a Work slot </a><br>
<a href= "myreport.php" > My Report </a> <br>
<a href= "logout.php"> Logout </a><br>


    </div>
    </div>
    

</body>

    </html>
