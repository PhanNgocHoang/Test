<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form action="doRegister.php" method = "post" style="margin-left: 40%">
		<p style="font-size: 60px; margin-left: 15% ">Register</p>
		<table border ="0" width="50%" style="font-size: 30px">
			<tr>
				<td>Your Name</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr>
				<td>Course</td>
				<td>
					<select name="cbCourse">
					<option value="C#">C#</option>
					<option value="C++">C++</option>
					<option value="Java">Java</option>
					<option value="Python">Python</option>
					<option value="PHP">PHP</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Birth Day</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td style="font-size: 20px">Male<input type="radio" name="gender" value="Male"> Female<input type="radio" name="gender" value="Female"></td>
			</tr>
			<tr>
				<td>FAV</td>
				<td style="font-size: 20px">Book<input type="checkbox" name="book" value="book"> Cars<input type="checkbox" name="car" value="car"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>
</body>
</html>