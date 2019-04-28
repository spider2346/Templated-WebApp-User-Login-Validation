<?php
require_once("sqltemplate.php");
require_once("db_login.php");

$options["filename"]="departments.tmpl"; 
$sqltemplate = new SqlTemplate($options);
$sqltemplate->AddQuery("SELECT dept_name from departments",[],'deptable');
$sqltemplate->EchoOutput();
?>