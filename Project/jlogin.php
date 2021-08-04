<?php include('jserver.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="jstyle.css">
</head>
<body style="font-size:120%;
background-image:url(nature.jpg);
background-repeat:no;
background-size:cover;">
<div class="header" style="background-color:#333399;border:2px solid black;">
<h2>Login</h2>
</div>
<form method="post" action="jlogin.php">
<?php include('jerror.php'); ?>
<div class="ig">
<label>Username</label>
<input type="text" name="un">
</div>
<div class="ig">
<label>Password</label>
<input type="password" name="p">
</div>
<div class="ig">
<button type="submit" name="login" class="btn" style="background-color:#333399;border:1px solid black;">Log In</button>
</div>
<p>Not a member? <a href="join.php">Register</a></p>
</form>
</body>
</html>