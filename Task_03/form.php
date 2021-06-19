<?php include "control/result.php"; ?>


<!DOCTYPE html>
<html>
<head>
<h1>Registration Form</h1>
</head>
<body>
<hr>
<form action="" method="post">
	<table>
		<tr>
			<td>
				Full Name:
			</td>

			<td>
				<input type=”text”  id=”fname” name=”fname”> 
			</td>
			<td>
				<?php echo $validatename; ?>
			</td>
		</tr>

        <tr>
            <td>
				E-mail:
			</td>

			<td>
				<input type=”text” id=”email” name=”email”> 
			</td>
			<td>
				<?php echo $validateemail; ?>
			</td>
		</tr>

        <tr>
            <td>
				Password:
			</td>

			<td>
				<input type=”password” id=”password” name=”password”> 
			</td>
			<td>
				<?php echo $validatepassword; ?>
			</td>
		</tr>

        <tr>
            <td>
				Comment:
			</td>

			<td>
                <textarea id="comment" name="comment" rows="10" cols="50"> 
                </textarea>
			</td>
			<td>
				<?php echo $validatecomment; ?>
			</td>
		</tr>

        <tr>
            <td>
				Gender:
			</td>

			<td>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
								
			</td>
			<td>
				<?php echo $validategender; ?>
			</td>
		</tr>

        <tr>
            <td>
				Please choose a hobby:
			</td>

			<td>
                <input type="checkbox" id="singing" name="hobby" value="singing">
                <label for="singing"> Singing</label>
                <input type="checkbox" id="dancing" name="hobby" value="dancing">
                <label for="dancing"> Dancing</label>
                <input type="checkbox" id="reading" name="hobby" value="reading">
                <label for="reading"> Reading</label>				
			</td>
			<td>
				<?php echo $validatehobby; ?>
				<?php echo $v1;?>
				<?php echo $v2;?>
				<?php echo $v3;?>
			</td>
		</tr>      
	</table>

    <input type="submit" value="Submit" name="button">
    <input type="reset" value="Reset">  

</form> 
</body>
</html>