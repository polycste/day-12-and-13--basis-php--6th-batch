<?php
class Db{
    public function __construct() {
        $conn=  mysql_connect('localhost','root','');
        if(!$conn)
        {
            die("Database Connection Error :".  mysql_error());
        }
        mysql_select_db('db_batch06');
    }
}


?>
