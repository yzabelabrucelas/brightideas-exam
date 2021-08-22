<?php
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');
$request_body = file_get_contents('php://input');
$_POST        = json_decode($request_body, true);
$process      = $_POST['process'];

$examObj = new Exam();

switch ($process) {
    case 'fetchData':
        $examObj->getStudentListArray();
    break;
    case 'insertData':

    break;
    case 'updateData':

    break;
    case 'deleteData':

    break;
};

class Exam
{
    private $conn;
    public function __construct()
    {
        $this->_connect();
    }

    public function _connect()
    {
        /*
        Using the following information, connect to the database using mysql
        host:testing.brightideastechnology.com
        username:exam_user or exam_user2
        password:exam_password
        database name:exam_db

        SQL Editor: http://testing.brightideastechnology.com/tools/testing-adminer.php
        */
    }

    public function _query($sql_query)
    {
        $result = mysqli_query($this->conn, $sql_query) or die(mysqli_error($this->conn));
        return $result;
    }

    public function _fetch_query($sql_query)
    {
        $result = mysqli_query($this->conn, $sql_query) or die(mysqli_error($this->conn));
        $rows   = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getStudentListArray()
    {
        $sql    = "SELECT student_id, first_name, last_name FROM <last name>_<first name initial>_table";
        $result = $this->_fetch_query($sql);
        echo json_encode($result);
    }
}
