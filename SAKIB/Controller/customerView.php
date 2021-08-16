<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Travel Agency</title>
<script src="../SAKIB/View/js/cusView.js"></script>
</head>
<body style="background-color: #E3E8E9;">
<?php
include '../SAKIB/Model/dbcusD.php';
if(!empty($_GET["listID"]))
{
    $del = delete($_GET["listID"]);
    if($del)
    {
        $users = getAllUsers();
    }
    else
    {
        $users = getAllUsers();
    }
}
?>
<?php
include '../SAKIB/view/Cheading.php';
?>
<h1>Customer Details </h1>
<form method="GET" name ="cView" onsubmit="result(this); return false;">
    <label for="customerids">Enter Customer Id:</label>
    <input type="text" id="customerid" name="customerid">    
    &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Search">
    
    <span id="customeridErr"></span>
    <br><br>
</form>
<fieldset style="background-color: #FBE5C8">
<div id="his"></div>
</fieldset>
<button onclick="view()">View ALL</button>
</body>
</html>