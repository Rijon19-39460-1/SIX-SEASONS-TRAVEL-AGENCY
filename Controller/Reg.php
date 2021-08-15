<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<script src="../View/js/reg.js"></script>
</head>
<body style="background-color:#E6C2BF;">

<h1 style="text-align: center;">Registration form</h1>
<form method="POST" name ="registration" onsubmit="add(this); return false;">
  <fieldset style="background-color:#B6E5D8">
    <legend><h3>Basic Information</h3></legend>
    <label for="fname">Enter your first name:</label>
    <input type="text" id="fname" name="fname">
    <span id="fnameErr"></span>
     <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname">
    <span id="lnameErr"></span>
    <br><br>
    <label for="fullname">Enter your Full name:</label>
    <input type="text" id="fullname" name="fullname">
    <span id="fullnameErr"></span>
     <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender" value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender"   value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender" value="Others">
    <label for="Others">Others</label>
    <span id="genderErr"></span>
    <br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span id="dobErr"></span>
    <br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Sikhism">Sikhism</option>
    </select>
    <span id="religionErr"></span>
    <br><br>
    
  </fieldset>
  <fieldset style="background-color:#B6E5D8">
    <legend><h3>Contact Information</h3></legend>
    <label for="Praddress">Enter your Present Address:</label>
    <textarea name="Praddress" id="Praddress" rows="3" cols="30"></textarea>
    <span id="PraddressErr"></span>
     <br><br>
    <label for="Peaddress">Enter your Permanent Address:</label>
    <textarea name="Peaddress" id="Peaddress" rows="3" cols="30"></textarea>
    <span id="PeaddressErr"></span>
     <br><br>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span id="phoneErr"></span>
     <br><br>
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <span id="emailErr"></span>
    <br><br>
    </fieldset>
    <fieldset style="background-color:#B6E5D8">
    <legend><h3>Account Information</h3></legend>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username">
    <span id="usernameErr"></span>
    <br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password">
    <span id="passwordErr"></span>
    <br>
  </fieldset>
  <br><br><input type="submit" value="Submit">
</form>
 <br>
 <a href="../Controller/Login.php">Go Back</a><br>
<div id="reg"></div>

</body>
</html>