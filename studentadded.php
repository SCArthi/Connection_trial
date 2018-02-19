<head>
	<title>Student Data Entry Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript">

                function getConfirmation(){
                    var retVal = confirm("Recheck all the details again student! ");
                    if( retVal == true ){
                        document.write ("You are successfully submitted your informations..!");
                        return true;
                    }
                    else{
                        Document.write ("User does not want to continue!");
                        return false;
                    }
                }
            </script>
</head>
<h1>
	Student Data Entry Page
</h1>
<h3>Add a New Student</h3>

<label>
	First Name : 
		<input type="text" name="firstname" placeholder="First Name" required>
</label>
<br><br>
<label>
	Last Name : 
		<input type="text" name="lastname" placeholder="Last Name" required>
</label>
<br><br>
<label>
	Email : 
		<input type="email" name="email" placeholder="Email" required>
</label>
<br><br>
<label>
	Street : 
		<input type="text" name="street" placeholder="Street" required>
</label>
<br><br>
<label>
	City : 
		<input type="text" name="city" placeholder="City" required>
</label>
<br><br>
<label>
	State : 
		<input type="text" name="state" placeholder="State" required>
</label>
<br><br>
<label>
	Zip Code : 
		<input type="number" name="zipcode" placeholder="Zip Code" required>
</label>
<br><br>
<label>
	Phone Number : 
		<input type="number" name="no" placeholder="Phone Number" required>
</label>
<br><br>
<label>
	Birth Date (DD-MM-YYYY) : 
		<input type="Date" name="date" placeholder="Birth Date" required>
</label>
<br><br>
<label>
	Sex : 
		<input type="radio" name="gender" required>Male
		<input type="radio" name="gender" required>Female
</label>
<br><br>
<label>
	Lunch Cost : 
		<input type="number" name="cost" placeholder="Lunch Cost" required>
</label>
<br><br>
<label>
	<input type="submit" name="submit" value="Send" onclick="getConfirmation();">
</label>