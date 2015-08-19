<!DOCTYPE html>
<html>
<head>
<title> add</title>
</head>
<style>
.button{	
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

<body>
<h3> Edit new student</h3>
<br/>

<?php echo form_open('student/processedit'); ?>

Full Name: <br/>
<input type="text" name="name" value="<?php echo $sd->name; ?>">
<br/><br/>

Address: <br/>
<textarea  rows="3" cols="20" name="address" required><?php echo $sd->address; ?></textarea>
<br/><br/>

Gender : <br/>
<input type="radio" name="gender" value="male" <?php if($sd->gender == 'male') echo "checked"; ?> >Male<br>
<input type="radio" name="gender" value="female" <?php if($sd->gender == 'female') echo "checked"; ?> >Female</td>
<br/><br/>

Year of passing:<br/><br/>
<select name="year" >
  <option value="2015" <?php if($sd->year == 2015 ) echo 'selected'; ?> > 2015</option>
  <option value="2014" <?php if($sd->year == 2014 ) echo 'selected'; ?> > 2014</option>
  <option value="2013" <?php if($sd->year == 2013 ) echo 'selected'; ?> > 2013</option>
  <option value="2012" <?php if($sd->year == 2012 ) echo 'selected'; ?> > 2012</option>
</select>
<br/><br/>

Extra curricular interests: <br/>
<?php 
  $ex = $sd->extra;
  $ex = explode(',', $ex);
?>
  <input type="checkbox" name="extra[]" value="sports" <?php if(in_array('sports', $ex)) echo 'checked'; ?>> Sports<br>
  <input type="checkbox" name="extra[]" value="programming" <?php if(in_array('programming', $ex)) echo 'checked'; ?>> programming<br>
  <input type="checkbox" name="extra[]" value="arts" <?php if(in_array('arts', $ex)) echo 'checked'; ?>> arts<br>
  <input type="checkbox" name="extra[]" value="music" <?php if(in_array('music', $ex)) echo 'checked'; ?>> music<br>
<br/><br/>

<input type="submit" class="button" name="save" value="Save">&nbsp;&nbsp;
<?php echo anchor('student/', 'Back');?>
</body>
</html>