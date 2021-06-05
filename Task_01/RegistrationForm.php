<!DOCTYPE html>
<html>
<head>
<h1>Registration Form</h1>
</head>
<body>
<hr>
<form>
	<table>
		<tr>
			<td>
				Full Name:
			</td>

			<td>
				<input type=”text”  id=”fname” name=”fname”>
			</td>
		</tr>

        <tr>
            <td>
				E-mail:
			</td>

			<td>
				<input type=”email” id=”email” name=”email”>
			</td>
		</tr>

        <tr>
            <td>
				Password:
			</td>

			<td>
				<input type=”password” id=”password” name=”password”>
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
		</tr>

        <tr>
            <td>
                <label for="file">Please choose a file:</label>
			</td>

			<td>
                
                <input type="file" id="file" name="file">   
			</td>
		</tr>        
	</table>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">  

</form> 
</body>
</html>
