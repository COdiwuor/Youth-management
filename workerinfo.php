<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
include"connection.php";
$sql="SELECT * FROM `january` WHERE `Firstname`='".$id."'";
$query=mysqli_query($db,$sql);
$execute=mysqli_fetch_assoc($query);
$FirstName=$execute['Firstname'];
$LastName=$execute['Lastname'];
$ID=$execute['IDnumber'];
$Contact=$execute['Contacts'];
?>
<form method='post' enctype='multipart/form-data'>
<label>FirstName</label><input type='text' value='<?php echo $FirstName?>' readonly><br><br>
<labl>Lastname</label><input type='text' value='<?php echo $LastName?>' readonly><br><br>
<label>ID Number</label><input type='text' value='<?php echo $ID?>' readonly><br><br>
<label>Contacts</label><input type='text' value='<?php echo $Contact?>' readonly><br><br>
<input type='file' name='fileToUpload' required><br><br>
<input type='submit' name='submit' value='Submit'>
</form>
<?php
if(isset($_POST['submit'])){
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
$video_path=$_FILES['fileToUpload']['name']; 
$sql2="UPDATE `january` SET `report`='".$video_path."' WHERE `Firstname`='".$FirstName."' AND `Lastname`='".$LastName."' AND `IDnumber`='".$ID
."'";
if(mysqli_query($db,$sql2)){
    echo "Success name sent to the database";
}else{
 echo "sorry an error occured my friend check your database";   
}
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
echo "uploaded successfully";
}  

 }
?>