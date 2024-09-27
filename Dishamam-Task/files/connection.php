<?php
include_once("../vendor/autoload.php");

$connect=mysqli_connect('localhost','ajaxdata','ajaxdata','ajaxdata');
class  connection
{
    public $localhost = "localhost";
    public $username = "ajaxdata";
    public $pass = "ajaxdata";
    public $dbname = "ajaxdata";

    public $db;

    public function __construct()
    {
        $this->db = mysqli_connect($this->localhost, $this->username, $this->pass, $this->dbname);
        return $this->db;
    }

    function delete($table,$condition){
       return "DELETE FROM $table WHERE $condition";
    }

    function select($table)
    {
        $select = "select * from $table";
        $res = mysqli_query($this->db, $select);
        $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
        return $row;
    }
}

$con = new connection();


