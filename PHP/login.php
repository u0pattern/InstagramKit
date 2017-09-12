<html>
<head>
<title>Login Instagram by 1337r00t</title>
</head>
<body bgcolor="black">
<font color="red" size="4">
<center>
	<h5>
             ,        ,
            /(        )`
            \ \___   / |
            /- _  `-/  '
           (/\/ \ \   /\
           / /   | `    \
           O O   ) /    |
           `-^--'`<     '
          (_.)  _  )   /
           `.___/`    /
             `-----' /
<----.     __ / __   \
<----|====O)))==) \) /====
<----'    `--' `.__,' \
             |        |
              \       /
        ______( (_  / \______
      ,'  ,-----'   |        \
      `--{__________)        \/
	</h5>
<form action="" method="post">
<font color="#00FDFF">Username </font><input name="username" type="text" ><br><br>
<font color="#00FDFF">Password </font><input name="password" type="text" ><br><br>
<input type="submit" name="enter" value="login">
</form>
<?
if($_POST['enter']){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = curl_init(); 
	curl_setopt($login, CURLOPT_URL, "https://www.instagram.com/accounts/login/ajax/"); 
	curl_setopt($login, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($login, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($login, CURLOPT_HTTPHEADER, array(
		'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
		'X-Instagram-AJAX: 1',
		'X-Requested-With: XMLHttpRequest',
		'Referer: https://www.instagram.com/',
		'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
    ));
	curl_setopt($login, CURLOPT_POSTFIELDS, "username=$username&password=$password");
	$response = curl_exec($login);
	if(eregi('"authenticated": true,', $response))
		{
			echo "<br><font color='grenn'>Logged -> $username:$password </font>";
		}
		else
		{
			if(eregi("checkpoint", $response))
			{
				echo "<br><font color='white'>Logged But CheckPoint :( -> $username:$password </font>";
			}
			else
			{
				if(eregi("Please wait a few minutes before you try again.", $response))
				{
					echo "<br><font color='pink'> Use Proxy </font>";
				}
				else
				{
					echo "<br><font color='red'> Failed -> $username:$password</font>";
				}
			}
		}
	curl_close($login);
}
else
{
	echo "<br><br><font color='yellow'>CoDeD By 1337r00t</font>";
}
?>
</center>
</body>
</html>
