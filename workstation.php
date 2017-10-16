<link href= "prr.css" type="text/css" rel="stylesheet">
<table class="table">
<tr>
<th> constituency</th>
<th> ward</th>
<th> location </th>
<th> facility </th>
</tr>
<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM workstations");



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
  
 echo "<td>".$row['constituency']. "</td>";
 echo "<td>".$row['ward']. "</td>";
 echo "<td>".$row['location']. "</td>";
 echo "<td>".$row['facility']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database


