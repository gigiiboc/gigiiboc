<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(":checked").wrap("<span style='background-color:red'>");
});
</script>
</head>
<style>
input[type=checkbox]:checked {height:25px;width:25px;}
</style>
<body>

<form action="">
  Name: <input type="text" name="user"><br>
  I have a bike: <input type="checkbox" name="vehicle" value="Bike"><br>
  I have a car: <input type="checkbox" name="vehicle" value="Car" checked="checked"><br>
  I have an airplane: <input type="checkbox" name="vehicle" value="Airplane" checked="checked"><br>
  <input type="submit">
</form>

<p>Note: We use jQuerys .wrap method to highlight the selected elements, because Firefox does not support background color on checkboxes.</p>

</body>