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
<h2>Register</h2>
</div>
<form method="post" action="join.php">
<?php include('jerror.php'); ?>
<div class="ig">
<label>Username</label>
<input type="text" name="un" value="<?php echo $username; ?>">
</div>
<div class="ig">
<label>Email</label>
<input type="email" name="em" value="<?php echo $email; ?>">
</div>
<div class="ig">
<label>Password</label>
<input type="password" name="p">
</div>
<div class="ig">
<label>Confirm Password</label>
<input type="password" name="cp">
</div>
<div class="ig">
<button type="submit" name="reg" class="btn" style="background-color:#333399;border:1px solid black;">Register</button>
</div>
<p>Already a member? <a href="jlogin.php"> Login</a></p>
</form>
</body>
</html>