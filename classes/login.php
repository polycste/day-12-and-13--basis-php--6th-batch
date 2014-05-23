<?php
require_once 'db.php';
class Login {
    public function __construct() {
        $conn=  mysql_connect('localhost','root','');
        if(!$conn)
        {
            die("Database Connection Error :".  mysql_error());
        }
        mysql_select_db('db_batch06');
    }    
    public function save_user($data)
    {
        $data['joining_date']=date("Y-m-d");
        
        $sql="INSERT INTO tbl_user (first_name,last_name,email_address,password,address,mobile_no,city,country,zip_code,joining_date,gender) VALUES ('$data[first_name]','$data[last_name]','$data[email_address]','$data[password]','$data[address]','$data[mobile_no]','$data[city]','$data[country]','$data[zip_code]','$data[joining_date]','$data[gender]') ";
        if(!mysql_query($sql))
        {
            die("Sql query Error :".  mysql_error());
        }
        else{
            echo "1 record added";
        }
    }
    
    public function select_all_user()
    {
        $sql="SELECT * FROM tbl_user";
        $result=mysql_query($sql);
        return $result;
    }
    public function delete_user($user_id)
    {
        $sql="DELETE FROM tbl_user WHERE user_id='$user_id'";
        mysql_query($sql);
        header("location:view_user.php");
    }
    public function select_user_by_user_id($user_id)
    {
        $sql="SELECT * FROM tbl_user WHERE user_id='$user_id'";
        $result=mysql_query($sql);
        return $result;
    }
    public function update_user($data)
    {
        $sql="UPDATE tbl_user SET first_name='$data[first_name]',last_name='$data[last_name]',email_address='$data[email_address]',password='$data[password]',address='$data[address]',city='$data[city]',mobile_no='$data[mobile_no]',zip_code='$data[zip_code]' WHERE user_id='$data[user_id]'";
        mysql_query($sql);
        header("location:view_user.php");
    }
    
}

?>
