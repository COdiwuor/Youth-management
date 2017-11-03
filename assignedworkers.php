<html>

<link href= "tt.css" type="text/css" rel="stylesheet">


<table class="table">
<tr>
<th> firstname</th>
<th> lastname</th>
<th> IDnumber </th>
<th> Contact</th>
<th> Report</th>
</tr>
<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM january");



while($row= mysqli_fetch_array ($result))
{      
echo"<tr>";
 
 echo "<td><INPUT TYPE='TEXT' NAME='firstname' SIZE='20' value=".$row['Firstname'].">" . "</td>";
 echo "<td><INPUT TYPE='TEXT' NAME='firstname' SIZE='20' value=".$row['Lastname'].">" . "</td>";
 echo "<td><INPUT TYPE='TEXT' NAME='firstname' SIZE='20' value=".$row['IDnumber'].">" . "</td>";
 echo "<td><INPUT TYPE='TEXT' NAME='firstname' SIZE='20' value=".$row['Contacts'].">" . "</td>";
 echo "<td><a href='workerinfo.php?id=".$row['Firstname']."'><button class='btn btn-primary' color:white;'>View</button></a><td>";
echo"</tr>";
 
};
echo "</table>";//display the tale


mysqli_close($db);//close database

?>

<input type="hidden" name = "firstname" value=".$row['Firstname'].">
<input type="hidden" name = "lastname" value="$row['Lastname']">
<input type="hidden" name = "ID" value="$row['IDnumber']">
<input type="hidden" name = "contacts" value="$row['Contacts']">
<input type="hidden" name = "report" value="$row['report']">
</form>
</html>


