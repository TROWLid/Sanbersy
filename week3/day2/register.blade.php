<!DOCTYPE html>
<html>
<head>
	<title>SanberBook | Sign Up</title>
</head>
<body>
<h1>Create New Account!</h1>
<h3>Sign Up Form</h3>

<form action="/welcome" >
	@crf
	<label for="sfname">First name :</label><br>
	<br>
	<input type="text" id="sfname" name="sfname"><br>
	<br>
	<label for="slname">Last name :</label><br>
	<br>
	<input type="text" id="slname" name="slname"><br>
	<br>
	<label>Gender :</label><br>
	<br>
	<input type="radio" id="sradio1" name="sradio1">
	<label for="sradio1">Male</label><br>
	<input type="radio" id="sradio2" name="sradio2">
	<label for="sradio2">Female</label><br>
	<input type="radio" id="sradio3" name="sradio3">
	<label for="sradio3">Other</label><br>
	<br>
	<label for="sselect">Nationality :</label><br>
	<br>
	<select id="sselect" name="sselect">
		<option>Malaysian</option>
		<option>Singaporean</option>
		<option>Indonesian</option>
		<option>Australian</option>
	</select><br>
	<br>
	<label>Language Spoken :</label><br>
	<br>
	<input type="checkbox" id="scbox1" name="scbox1">
	<label for="scbox1">Bahasa Indonesia</label><br>
	<input type="checkbox" id="scbox2" name="scbox2">
	<label for="scbox2">English</label><br>
	<input type="checkbox" id="scbox3" name="scbox3">
	<label for="scbox3">Other</label><br>
	<br>
	<label for="sbio">Bio :</label><br>
	<br>
	<textarea id="sbio" name="sbio" rows="10" cols="33"></textarea><br>
	<input type="submit" value="Sign Up">
</form>
</body>
</html>