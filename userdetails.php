<?php
include 'connection.php';


$result=  mysqli_query ($db,"SELECT* FROM users");

echo "<table border='1'>
<tr>
<th class="c1"> Image</th>
<th class="c2"> Firstname</th>
<th class= "c3"> Last Name </th>
<th> ID Number </th>
<th> Contact </th>
<th> Email</th>
<th> Account </th>
<th> Religion </th>
<th> Residence </th>
<th> Next of Kin </th>
<th> Next Of Kin ID </th>
</tr>";

while ($row= mysqli_fetch_array($result))//fetch data 
{      

 echo "<tr>";
 echo "<td>".$row['Image']. "</td>"; 
 echo "<td>".$row['Firstname']. "</td>";
 echo "<td>".$row['Lastname']. "</td>";
 echo "<td>".$row['IDnumber']. "</td>";
 echo "<td>".$row['Gender']. "</td>";
  echo "<td>".$row['Contact']. "</td>";
   echo "<td>".$row['Email']. "</td>";
    echo "<td>".$row['Account']. "</td>";
     echo "<td>".$row['Religion']. "</td>";
      echo "<td>".$row['Nextofkin']. "</td>";
       echo "<td>".$row['NextofkinID']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database

?>