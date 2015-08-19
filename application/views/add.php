<!DOCTYPE html>
<html>
<head>
<title> Add</title>
<style>
#button{
  color: #FFF;
  background-color: #39B7CD;
  font-weight: bold;
  padding: 5px 10px;
  border-radius: 4px;
}
h3{
  color:#39B7CD;
}
</style>

</head>
<body>
<h3> Add new student</h3>
<?php echo form_open('student/processadd'); ?>

Full Name: <br/>
<input type="text" name="name" required>

<br/><br/>
Address: <br/>
<textarea  rows="3" cols="20" name="address" required></textarea>

<br/><br/>
Gender: <br/>
<input type="radio" name="gender" value="male" > Male<br/>
<input type="radio" name="gender" value="female" > Female <br/>

<br/><br/>
Year of passing: <br/><br/>
<select name="year" required>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
</select>

<br/><br/>
Extra curricular intrests : <br/>
  <input type="checkbox" name="extra[]" value="sports"> Sports<br>
  <input type="checkbox" name="extra[]" value="programming"> programming<br>
  <input type="checkbox" name="extra[]" value="arts"> arts<br>
  <input type="checkbox" name="extra[]" value="music"> music<br>
<br/><br/>

<input type="submit" id="button" name="save" value="save">&nbsp;&nbsp;
<?php echo anchor('student/',' Cancel');
      echo form_close(); ?>

</body>
</html>