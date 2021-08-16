<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<script src="../SAKIB/View/js/Tguide.js"></script>
<link rel="stylesheet" href="../SAKIB/View/css/guideA.css"></link>
</head>
<body>

<?php
include '../SAKIB/view/gheading.php';
?>
<h1>Tour guide details adding</h1>
<form method="POST" name ="guideA" onsubmit="add(this); return false;">
    <fieldset>
    <legend>Basic Information</legend>
    <label for="guideid">Enter Tour guide Id:</label>
    <input type="text" id="guideid" name="guideid">
    <span id="customeridErr"></span>
    <br><br>
    <label for="fullname">Enter Tour guide Full name:</label>
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
    <label for="dob">Enter Tour guide Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span id="dobErr"></span>
    <br><br>
    <label for="religion">Choose Tour guide's Religion:</label>
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
    <legend>Contact Information</legend>
    <label for="Praddress">Enter Customer Present Address:</label>
    <textarea name="Praddress" id="Praddress" rows="3" cols="30"></textarea>
    <span id="PraddressErr"></span>
    <br><br>
    <label for="Peaddress">Enter Customer Permanent Address:</label>
    <textarea name="Peaddress" id="Peaddress" rows="3" cols="30"></textarea>
    <span id="PeaddressErr"></span>
    <br><br>
    <label for="phone">Enter Customer phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span id="phoneErr"></span>
    <br><br>
    <label for="email">Enter Customer Email:</label>
    <input type="email" id="email" name="email">
    <span id="emailErr"></span>
    <br><br>
    </fieldset>

    <fieldset>
    <legend>Guiding Information</legend>
    <label for="country">Select guiding country:</label>
    <select name="country" id="country">
    <option></option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="India">India</option>
    <option value="Chaina">Chaina</option>
    <option value="Nepal">Nepal</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Dubai">Dubai</option>
    <option value="Thailand">Thailand</option>
    </select>
    <span id="countryErr"></span>
    <br><br>
    <label for="region">Enter guiding region:</label>
    <input type="text" id="region" name="region">
    <span id="regionErr"></span>
    <br><br>

    <label for="type">Choose Level of tour Guide:</label>
    <select name="type" id="type">
    <option></option>
    <option value="A Level">A Level</option>
    <option value="B Level">B Level</option>
    <option value="C Level">C Level</option>
    <option value="D Level">D Level</option>
    </select>
    <span id="typeErr"></span>
    <br><br>

    <label for="time">Choose Max duration of Guiding:</label>
    <select name="time" id="time">
    <option></option>
    <option value="3 days">3 days</option>
    <option value="3-5 days">3-5 days</option>
    <option value="4-6 days">4-6 days</option>
    <option value="7 days">7 days</option>
    </select>
    <span id="timeErr"></span>
    <br><br>
    </fieldset>
  </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
<div id="guide"></div>

</body>
</html>