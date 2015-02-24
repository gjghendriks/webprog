<html>
<head>
<title>GamesCon - Innovating games - Register</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
<?php include "header.php"; include "../scripts/register_form.php"; ?>

<div id="content_wrap">
<p>If you wish to attend Gamescon you must register via this form.</p>
<form action="register.php" method="POST">
	<table id="register_table">
		<tr>
			<td id="register_table">Title:</td>
			<td id="register_table"><select id="field" name="title">
				<option value="Mr" <?php if($title == "Mr"){echo "selected='selected'";}?>>Mr</option>
				<option value="Mrs" <?php if($title == "Mrs"){echo "selected='selected'";}?>>Mrs</option>
				<option value="Dr." <?php if($title == "Dr."){echo "selected='selected'";}?>>Dr.</option>
				<option value="Prof." <?php if($title == "Prof."){echo "selected='selected'";}?>>Prof.</option>
				<option value="Sir" <?php if($title == "Sir"){echo "selected='selected'";}?>>Sir</option>
				<option value="Dame" <?php if($title == "Dame"){echo "selected='selected'";}?>>Dame</option></select></td>
		</tr>
		<tr>
			<td id="register_table">Initials:</td>
			<td id="register_table"><input id="field" required="true" type="text" name="initials" value="<?php echo $initials;?>" /></td>
			<td id="register_table_Err"><?php echo"$initialsErr"; ?></td>
		</tr>
		<tr>
			<td id="register_table">Last name:</td>
			<td id="register_table"><input id="field" required="true"  type="text" name="last_name" value="<?php echo $last_name;?>" /></td>
			<td id="register_table_Err"><?php echo"$last_nameErr"; ?></td>
		</tr>
		<tr>
			<td id="register_table">Attending:</td>
			<td id="register_table"><input type="radio" required="true" name="attending" value="one" <?php if($attending == "one"){echo'checked="checked"';} ?>>Day one
			<input type="radio" name="attending" value="two" <?php if($attending == "two"){echo'checked="checked"';} ?>>Day two
			<input type="radio" name="attending" value="both" <?php if($attending == "both"){echo'checked="checked"';} ?>>Both days</td>
		</tr>
		<tr>
			<td id="register_table">Email:</td>
			<td id="register_table"><input id="field" required="true"  type="email" name="email" value="<?php echo $email;?>" /></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input id="field" type="password" name="password" required="true"/></td>
			<td id="register_table_Err"><?php echo"$passwordErr"; ?></td>
		</tr>
	</table>
	<br />
	<input type="submit" name="submit" id="register_button" />
</form>

</div>
</body>
</html>
