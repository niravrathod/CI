<h1>Your Tasks</h1>
<?php
foreach ($query->result() as $row) {
	echo "<h2>".$row->title."</h2>";
}
echo "<hr>";
$firstname = "Nirav";
$lastname = "Rathod";
$this->load->module('hmvctest');
$this->hmvctest->sayhello($firstname,$lastname);
echo "<hr>";
echo Modules::run('hmvctest/sayhello',$firstname,$lastname);
?>