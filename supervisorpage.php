<!DOCTYPE HTML>
<html>
<head>
<title>Supervisor</title>
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
        <form name="registration" action="register.php" method="get">
<fieldset>
<legend >Supervisor </legend>
  <div class="float-left-area">
<div class="inner-left">



<link href= "Prr.css" type="text/css" rel="stylesheet">
<table class="table">
<tr>
<th>Image </th>
<th> Firstname</th>
<th> Lastname</th>
<th> IDnumber </th>
<th> Gender </th>
<th> Contact </th>
<th> Email </th>
<th> Account </th>
<th> Religion </th>
<th> Residence </th>
<th> Nextofkin </th>
<th> NextofkinID </th>
</tr>
<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM supervisors");



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
  echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="width:150px;height:130px"/></td>';
 echo "<td>".$row['Firstname']. "</td>";
 echo "<td>".$row['Lastname']. "</td>";
 echo "<td>".$row['IDnumber']. "</td>";
 echo "<td>".$row['Gender']. "</td>";
 echo "<td>".$row['Contact']. "</td>";
 echo "<td>".$row['Email']. "</td>";
 echo "<td>".$row['Account']. "</td>";
 echo "<td>".$row['Religion']. "</td>";
 echo "<td>".$row['Residence']. "</td>";
 echo "<td>".$row['Nextofkin']. "</td>";
 echo "<td>".$row['NextofkinID']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database


?>
</div>
</div><br><br><br><br>
</fieldset>

</div>
</div>
<div class="float-right-area" >
<div class="inner-right" style= "font-family:Baskerville Old Face;
font-size:30px;">
<a href= "assignedworkers.php" > Assigned Workers </a><br>
<a href= "" > Suggestions </a> <br>
<a href= "logout.php"> Logout </a><br>


    </div>
    </div>
</body>

    </html>
