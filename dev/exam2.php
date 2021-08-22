<?php

/*
INSTRUCTIONS:
This exam tests you on the following.
(item#1) Basic connection using mysql
(item#2) Inner Join Query
(item#3) Calling and using functions declared in a class
(item#4) Basic output of array into a prepared html table
(item#5) Bonus Item - It is up to you how to do it

/* ------- item#1 ----------
Using the following information, connect to the database using mysql
host: testing.brightideastechnology.com
username: exam_user or exam_user2
password: exam_password
database name: exam_db
 */

// ITEM #1

class User_List
{

    private function _query($sql_query)
    {
        $result = mysql_query($sql_query) or die(mysql_error());
        $rows   = array();
        while ($row = mysql_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getStudentListArray()
    {
        $sql = 'SELECT * FROM student';
        return $this->_query($sql);
    }

    public function getStudentAndClassesArray()
    {
        /*
        ------- item#2 ----------
        Using SQL Joins, generate a query for fetching all the
        needed contents for the html output (refer to the exam)
        and store the result into an associative array
        Sample structure:
        array
        0 =>
        array
        'last_name' => string 'Geronimo'
        'first_name' => string 'Sarah'
        'school_name' => string 'North High School'
        'class_name' => string 'Communication Arts'
        1 =>
        array (size=4)
        'last_name' => string 'Pempengco'
        'first_name' => string 'Charice'
        'school_name' => string 'East High School'
        'class_name' => string 'Communication Arts'
         */

        $sql = '';

        return $this->_query($sql);
    }
    public function getStudentsWithClassCount()
    {
        /*
        ------- item#5 ----------
        This is a bonus problem. Create a function that returns the number of classes for each student.
         */
        $sql = '';

        return $this->_query($sql);
    }

}

/* ------- item#3 ----------
call the functions you have here and store the function outputs into a variable so you can use it in the tables below.
 */
//set this variable using the getStudentListArray() function from instantiated $newUserList
$newUserList = new User_List();

?>

<div class=content>
	<style>
		table { width:500px; border-color:lightgray; }
		td,th { padding:2px;}
		th {  background-color:lightblue; }
	</style>
	<table border="1" cellspacing='0' cellpadding='0'>
		<thead>
			<tr>
				<th colspan='4'>Basic List</th>
			</tr>
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
			</tr>
		</thead>
		<tbody>
			<!-- put the output here -->
				<tr>
					<td></td>
					<td></td>
				</tr>
		</tbody>
	</table>
	<br/>
	<table border="1" cellspacing='0' cellpadding='0'>
		<thead>
			<tr>
				<th colspan='4'>Student list with class and school names</th>
			</tr>
			<tr>
				<th>School</th>
				<th>Class</th>
				<th>Last Name</th>
				<th>First Name</th>
			</tr>
		</thead>
		<tbody>
			<?php //------- item#4 ---------- ?>
			<!-- put the output here -->
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</tbody>
	</table>
	<br/>
	<table border="1" cellspacing='0' cellpadding='0'>
		<thead>
			<tr>
				<th colspan='3'>Student list with class count</th>
			</tr>
			<tr>
				<th>Class Count</th>
				<th>Last Name</th>
				<th>First Name</th>
			</tr>
		</thead>
		<tbody>
			<?php //------- item#5 ---------- ?>
			<!-- put the output here -->
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</tbody>
	</table>
</div>
