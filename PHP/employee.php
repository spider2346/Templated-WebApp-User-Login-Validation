<?php
require_once("sqltemplate.php");
require_once("db_login.php");

$options["filename"]="employee.tmpl"; 
$sqltemplate = new SqlTemplate($options);

$dept = $_POST['employee'];

$sqltemplate->AddQuery("SELECT dept_manager.emp_no, dept_name, first_name, last_name, title from dept_emp 
inner join employees ON employees.emp_no = dept_emp.emp_no
inner join departments ON departments.dept_no = dept_emp.dept_no
inner join dept_manager on dept_manager.dept_no = dept_emp.dept_no
inner join titles on titles.emp_no = dept_emp.emp_no
where dept_emp.to_date = '9999-01-01' and titles.title like '%Senior%' and dept_emp.dept_no = :dept_no LIMIT 300",['dept_no'=> $dept],'genlist');

$sqltemplate->EchoOutput();

?>
