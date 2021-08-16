<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<script src="../SAKIB/View/js/reg.js"></script>
<link rel="stylesheet" href="../SAKIB/View/css/reg.css"></link>
</head>
<body>

<h1 style="text-align: center;">Registration form</h1>
<form method="POST" name ="registration" onsubmit="add(this); return false;">
  <fieldset>
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
    <select name="gender" id="gender">
    <option></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
    </select>
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
  <fieldset>
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
    <fieldset>
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
  <br><br><input type="submit" value="Submit" id="subb">
</form>
 <br>
<div id="reg"></div>
 <a href="../SAKIB/Controller/Login.php" style="text-decoration: none;width: 55%;padding: 8px;color: white;background-color: #DC143C;text-align: center;">Go Back</a><br>
</body>
</html>