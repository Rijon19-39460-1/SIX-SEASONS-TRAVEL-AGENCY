<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<script src="../SAKIB/view/js/visa.js"></script>
<link rel="stylesheet" href="../SAKIB/View/css/visaA.css"></link>
</head>
<body>
<?php
include '../SAKIB/view/vheading.php';
?>
<h1>Visa details adding</h1>
<form method="POST" name ="visaA" onsubmit="add(this); return false;">
  <fieldset>
    <legend>Basic Information of a Visa</legend>
    <label for="visaid">Enter VISA Id number:</label>
    <input type="text" id="visaid" name="visaid">
    <span id="visaidErr"></span>
     <br><br>
    <label for="countryname">Enter Country name for VISA:</label>
    <input type="text" id="countryname" name="countryname">
    <span id="countrynameErr"></span>
     <br><br>   
    <label for="visatype">Enter VISA type:</label>
    <textarea name="visatype" id="visatype" rows="4" cols="30"></textarea>
    <span id="visatypeErr"></span>
    <br><br>
    </fieldset>

    <fieldset>
    <legend>Requirements for visa</legend>
    <label for="personaldocument">Personal Document:</label>
    <textarea name="personaldocument" id="personaldocument" rows="4" cols="40"></textarea>
    <span id="personaldocumentErr"></span>
     <br><br>

    <label for="professionaldocuments">Professional Document:</label>
    <textarea name="professionaldocuments" id="professionaldocuments" rows="4" cols="40"></textarea>
    <span id="professionaldocumentsErr"></span>
     <br><br>

    <label for="financialdocument">Financial Document:</label>
    <textarea name="financialdocument" id="financialdocument" rows="4" cols="40"></textarea>
    <span id="financialdocumentErr"></span>
     <br><br>

    <label for="overseasdocument">Overseas Document:</label>
    <textarea name="overseasdocument" id="overseasdocument" rows="4" cols="40"></textarea>
    <span id="overseasdocumentErr"></span>
     </span> <br><br>
    </fieldset>

    <fieldset>
    <legend>Fees & Processing time for visa</legend>

    <label for="protime">Processing Time (Total Approx. Days):</label>
    <textarea name="protime" id="protime" rows="4" cols="40"></textarea>
    <span id="protimeErr"></span>
     <br><br>

    <label for="fees">Visa fee Details (Tourist & Business):</label>
    <textarea name="fess" id="fess" rows="4" cols="40"></textarea>
    <span id="fessErr"></span>
     <br><br>

    <label for="phone">Contact number:</label>
    <input type="tel" id="phone" name="phone" >
    <span id="phoneErr"></span>
     <br><br>

  </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
<div id="visa"></div>

</body>
</html>