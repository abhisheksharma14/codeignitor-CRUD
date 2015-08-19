<!DOCTYPE html>
<html>
<head>
	<title>student</title>
</head>
<style>
.anchor{
	background:#39B7CD;
	color:white;
	border-radius: 4px;
	padding: 5px 10px;
	text-decoration:none;
}
</style>
<body>
<h1>List Of Students</h1>
<br>
<br>
<br>
<?php
$this->table->set_template(array( 'table_open' => '<table cellpadding="8" cellspacing="2">'));

 $this->table->set_heading('Id','Name','Option'); 
foreach ($liststudent as $sd)
{
	$this->table->add_row($sd->id,$sd->name,anchor('student/delete/'.$sd->id,'DELETE').' | '.anchor('student/edit/'.$sd->id,'EDIT'));
}
echo $this->table->generate();

echo "<br/>".anchor('student/add',' Add student',array('class' => 'anchor')); ?>

</body>
</html>