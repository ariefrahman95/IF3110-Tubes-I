<!--
	Registration Form
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Form</title>
		<?php
			function check_username($username) {
				$username = trim($username); // strip any white space
				$response = array(); // our response
				
				// Check whether the username is valid or not
				if (strlen($username) < 5) {
					$response = array(
						'ok' => false, 
						'msg' => "Username is too short.");
				} else if ($username === $_POST['password']) {
					$response = array(
						'ok' => false, 
						'msg' => "Username cannot be the same as password.");
				} else { // It's all good.
					$response = array(
						'ok' => true, 
						'msg' => "This username is free");
				}
				return $response;
			}
			
			function check_password($password) {
				$response = array(); // our response
				if(strrlen($password) < 8) {
					$response = array(
						'ok' => false, 
						'msg' => "Password is too short.");
				} else if($password === $_POST['username']) {
					$response = array(
						'ok' => false, 
						'msg' => "Password cannot be the same as username.");
				} else if($password === $_POST['email']) {
					$response = array(
						'ok' => false, 
						'msg' => "Password cannot be the same as e-mail.");
				} else {
					$response = array(
						'ok' => true, 
						'msg' => "Password is valid.");
				}
				return $response;
			}
			
			function check_password_conf($password) {
				$response = array(); // our response
				if ($password !== $_POST['password']) {
					$response = array(
						'ok' => false, 
						'msg' => "Incorrect password.");
				} else {
					$response = array(
						'ok' => true, 
						'msg' => "Password is valid.");
				}
				return $response;
			}
		?>
    </head>
    <body>
		<FORM NAME ="form1" METHOD ="POST" ACTION ="index.php">
			<b>Your username and password</b>
			<table>
				<tr>
					<td width =150> <b>Username : </b>	</td>
					<td width =150> <INPUT TYPE ="TEXT" NAME ="username" VALUE =""> </td>
				</tr>
				<tr>
					<td width =150> <b>Password : </b> </td>
					<td width =150> <INPUT TYPE ="PASSWORD" NAME ="password" VALUE =""> </td>
				</tr>
				<tr>
					<td width =150> <b>Confirm Password : </b> </td>
					<td width =150> </b> <INPUT TYPE ="PASSWORD" NAME ="conf_password" VALUE =""> </td>
				</tr>
			</table>
			
			<br />
			
			<b>Your personal details</b>
			<table>
				<tr>
					<td width =150> <b>Full Name : </b> </td>
					<td width =150> <INPUT TYPE ="TEXT" NAME ="name" VALUE =""> </td>
				</tr>
				<tr>
					<td width =150> <b>E-mail : </b> </td>
					<td width =150> <INPUT TYPE ="EMAIL" NAME ="email" VALUE =""> <br/>	</td>
				</tr>
				<tr>
					<td width =150> <b>Phone Number : </b> </td>
					<td width =150> <INPUT TYPE ="TEXT" NAME ="phone_num" VALUE =""> </td>
				</tr>
			</table>
			
			<br />
			
			<b> Your address details </b>
			<table>
				<tr>
					<td width =150> <b>Address : </b> </td>
					<td width =150> <INPUT TYPE ="TEXT" NAME ="address" VALUE =""> </td>
				</tr>
				<tr>
					<td width =150> <b>Postcode : </b> </td>
					<td width =150> <INPUT TYPE ="TEXT" NAME ="postcode" VALUE =""> </td>
				</tr>
				<tr>
					<td width =150> <b>Region/State : </b> </td>
					<td width =150> <INPUT TYPE ="TEXT" NAME ="region" VALUE =""> </td>
				</tr>
				<tr>
					<td> <b>City : </b> </td>
					<td> <INPUT TYPE ="TEXT" NAME ="city" VALUE =""> </td>
				</tr>
			</table>
			<INPUT TYPE ="SUBMIT" NAME ="" VALUE ="Register">
		</FORM>
    </body>
</html>
