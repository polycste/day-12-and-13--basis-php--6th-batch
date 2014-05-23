<?php
    require_once 'classes/login.php';
    $obj=new Login();
    $user_id=$_GET['user_id'];
    $result=$obj->select_user_by_user_id($user_id);
    $data=  mysql_fetch_array($result);
    if(isset($_POST['btn']))
    {
        $obj->update_user($_POST);
    }
?>
<html>
    <head>
        <title>Database Layout</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="wrapper">
            <div class="header">
                <h1>This is Database Layout</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="database_layout.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="sign_up.php">Sign Up</a></li>
                    <li><a href="view_user.php">view User</a></li>
                </ul>
            </nav>

            <div class="content_area">
                <div class="main_content">
                    <h1>
                        This is sign up form.
                    </h1>
                    <form action="edit_user.php" method="post">
                        <table border="1" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td>
                                    <input type="text" name="first_name" placeholder="First Name" value="<?php echo $data['first_name'];?>" tabindex="1" />
                                    <input type="hidden" name="user_id" value="<?php echo $data['user_id'];?>" tabindex="1" />
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $data['last_name'];?>" tabindex="2"/></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email_address" placeholder="Email Address" value="<?php echo $data['email_address'];?>" tabindex="3"/></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Your Password" value="<?php echo $data['last_name'];?>" tabindex="4"/></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6">
                                        <?php echo $data['address'];?>
                                    </textarea></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile_no" value="<?php echo $data['mobile_no'];?>" placeholder="Your Mobile No" tabindex="7"/></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" placeholder="Your City" value="<?php echo $data['city'];?>" tabindex="8" /></td>
                            </tr>
                            <tr>
                                <td>Zip Code:</td>
                                <td><input type="text" name="zip_code" placeholder="Your Zip Code" value="<?php echo $data['zip_code'];?>" tabindex="10"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Update"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="sidebar"></div>
            </div>
        </div>
    </body>
</html>
