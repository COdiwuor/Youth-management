<!DOCTYPE html/>
<html>
   <head>
<title>book</title>
<link
rel="stylesheet"
type="text/css"
href="ycsms.css"/>

<div class="container-full joinbar">
<div class="main"style="background-color:white; font-size:20px"> 
	<header><nav><div class style="background-image:url(wbb.PNG); color:white"><img src="logo.png"style="width:100px; height:100px;"><a href="index.php"style="padding:50px;color:black;hover:red;text-decoration: none;">Home</a><a href="about.php"style="color:black; padding:50px;text-decoration: none;">About</a><a href="join.php"style="padding:25px; color:black;text-decoration: none;">How to Join</a><a href="contact.html"style="padding:25px;color:black;text-decoration: none;">Contact Us</a><a href="login.html"style="padding:25px;color:black;text-decoration: none;">Login</a></nav></header>


</div>
</div>
</head>
<body>

  
        <link href="./rel.css" rel="stylesheet" type="text/css">

<form action="bidded.php" method="post">
  <div class="container">
Select Month:<br>
<input type="radio" name="month"
<?php if (isset($month) && $month=="january") echo "checked";?>
value="january">January
<input type="radio" name="month"
<?php if (isset($month) && $month=="february") echo "checked";?>
value="february">february
<input type="radio" name="month"
<?php if (isset($month) && $month=="march") echo "checked";?>
value="march">march
<input type="radio" name="month"
<?php if (isset($month) && $month=="april") echo "checked";?>
value="april">april
<input type="radio" name="month"
<?php if (isset($month) && $month=="may") echo "checked";?>
value="may">may
<input type="radio" name="month"
<?php if (isset($month) && $month=="june") echo "checked";?>
value="june">june
<input type="radio" name="month"
<?php if (isset($month) && $month=="july") echo "checked";?>
value="july">july
<input type="radio" name="month"
<?php if (isset($month) && $month=="august") echo "checked";?>
value="august">august
<input type="radio" name="month"
<?php if (isset($month) && $month=="september") echo "checked";?>
value="september">september
<input type="radio" name="month"
<?php if (isset($month) && $month=="october") echo "checked";?>
value="october">october
<input type="radio" name="month"
<?php if (isset($month) && $month=="november") echo "checked";?>
value="november">november
<input type="radio" name="month"
<?php if (isset($month) && $month=="december") echo "checked";?>
value="december">december

<input type="submit" value="submit">
  </div>
</form> 
</div>
</body>
</html>