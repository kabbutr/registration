<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="kabbu.css">
</head>
<body>

	<div> 
	<h1>REGISTRATION FORM</h1>
		
    <form method="post">
    	<input type="hidden" name="id" value="<?php echo $id; ?>">
    	<label>user name : </label>
    	<input type="text" name="name" placeholder="name of the artical">
    	<br><br>
    	
   	    <label> email id: </label>
	    <input type="text" name="name" placeholder="write the content">
	    <br><br>
		
		<label>password: </label>
		<input type="text" name="a_name" placeholder="name of the Author_name">
		<label>Confirm password: </label>
		<input type="text" name="a_name" placeholder="name of the Author_name">
		<br><br>

		<h3>PERSONAL DETAILS</h3>
		
		<br>

		<label> first name: </label>
		<input type="text" name="First name" placeholder="Frist name">
		<label> last name: </label>
		<input type="text" name="Last name" placeholder="Last name"><br><br>

		<label>address : </label>
    	<input type="text" name="adrress" placeholder="address"><br><br>

		<div style="display:inline;">
    		<label> gender: </label>
			<input type="radio" name="male" placeholder="male">male
			<input type="radio" name="female" placeholder="female">female
		</div><br><br>

		<label> date of birth: </label>
		<input type="text" name="date of birth" placeholder="date of birth"><br><br>

		<div style="display: inline;">
    		<label> status: </label>
			<input type="radio" name="married" placeholder="married">married
			<input type="radio" name="unmarried" placeholder="unmarried">unmarried
		</div>
		<br><br>
		
		<label>phone no :</label>
    	<input type="text" name="phone no" placeholder="phone no">
		<br><br>
		<div style="display:inline;">
			<label> Skill :</label>
			<input type="checkbox" value="html">html
			<input type="checkbox" value="css">css
		</div><br><br>
	    
	    <label> hobby :</label>
    	<input type="text" name="hobby" placeholder="hobby"><br><br>

	    <label> Tell about your self :</label>
		<input type="text" placeholder="tell about your self"><br><br>
 
    	<label> Think program :</label>
		<input type="text" placeholder="What you think you can do as a programmer">

		<br><br>
		<input type="checkbox" value="" required>terms and condition    
		<button  type="submit" name="save" >Save</button><br>

	</form>
</body>
</html>