<div style="text-align: center;">
<h1>User Login</h1>
<form action="<?=$baseurl;?>/" method="POST">

<table cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
	<td><b>Username</b></td>
	<td><input type="text" name="username"></td>
</tr>
<tr>
	<td><b>Password</b></td>
	<td><input type="password" name="password" id="gray"></td>
</tr>
<!--<tr>
	<td><b>Remember Me On This Computer</b></td>
	<td><input type="checkbox" name="setcookie"></td>
</tr>-->
<tr>
	<td colspan="2">
		<input type="hidden" name="function" value="Log In">
		<input type="submit" name="submit" value="Log In">
	</td>
</tr>
</table>
</form>


<a href="<?php echo $baseurl;?>/register/">Register for an account</a> <br>
<a href="<?php echo $baseurl;?>/password/">Forgot your username or password?</a>

</div>