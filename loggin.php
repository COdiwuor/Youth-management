<!DOCTYPE html/>
<html>
 <div class="bg">
   <head>
<<title>login</title>
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


<hr>
</div>
<div class="container-full joinbar">
<div class="main"style="background-color:white; font-size:20px"> 
	<header><nav><div class style="background-image:url(wbb.PNG); color:white"><img src="logo.png"style="width:100px; height:100px;"><a href="index.php"style="padding:50px;color:black;hover:red;text-decoration: none;">Home</a><a href="about.php"style="color:black; padding:50px;text-decoration: none;">About</a><a href="join.php"style="padding:25px; color:black;text-decoration: none;">How to Join</a><a href="contact.html"style="padding:25px;color:black;text-decoration: none;">Contact Us</a><a href="login.html"style="padding:25px;color:black;text-decoration: none;">Login</a></nav></header>


</div>
</div>
</head>
<body>
        <link href="./rel.css" rel="stylesheet" type="text/css">

<form action="login.php" method="post">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

      <button type="submit"  id="login" class="loginbtn" name="login">Log in</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <input type="checkbox" checked="checked"> Remember me
    <span class="psw">Forgot <a href="#">password?</a></span><br>
    <p> You do not have an account </p><a href="newaccount.html">SIGN UP </a>
  </div>
</form> 
</div>
</body>
</html>