<?php

include "database.php";

//if(isset($_POST["signup"]) &!empty($_POST["signup"])) {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {	

}

if(isset($_POST["signup"])){
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
	$pdo->prepare($sql)->execute([$username, $email, $password]);
	header('Location: login.html');
	}
	
else if(isset($_POST["login"]) &!empty($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["psw"];
	
	$sql = "SELECT user_id, username, email, password FROM userProfiles WHERE email = :email";
	$stmt = $pdo->prepare($sql);
	
	$stmt->bindValue(':email', $email);
	$stmt->execute();
	
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($user === false){
		die("Incorrect email password combination");
	} else {
		$validPassword == password_verify($password, $user['password']);
		
		if ($validPassword){
			echo "Logged in successfully";
		} else {
			echo "Incorrect username password combination";
		}
	}
	header('Location: modal.html');
}

?>
