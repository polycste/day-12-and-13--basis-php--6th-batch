<?php
    require_once 'classes/login.php';
    $obj=new Login();
    
    if($_POST['btn']=='Sign Up')
    {
        $obj->save_user($_POST);
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
                    <form action="sign_up.php" method="post">
                        <table border="1" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="first_name" placeholder="First Name" tabindex="1" /></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" placeholder="Last Name" tabindex="2"/></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email_address" placeholder="Email Address" tabindex="3"/></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Your Password" tabindex="4"/></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6"></textarea></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile_no" placeholder="Your Mobile No" tabindex="7"/></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" placeholder="Your City" tabindex="8" /></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>
                                    <input type="radio" name="gender" value="male"  />Male
                                    <input type="radio" name="gender" value="female"  />Female
                                </td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td><select tabindex="9" name="country">
                                        <option value="0">Select Country</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Srilanka">Srilanka</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Bhutan">Bhutan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Zip Code:</td>
                                <td><input type="text" name="zip_code" placeholder="Your Zip Code" tabindex="10"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Sign Up"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="sidebar"></div>
            </div>
        </div>
    </body>
</html>

<?php

    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email_addreess=$_POST['email_addreess'];
        $password=$_POST['first_name'];
        $first_name=$_POST['first_name'];
        $first_name=$_POST['first_name'];
        $first_name=$_POST['first_name'];
        $first_name=$_POST['first_name'];
        $first_name=$_POST['first_name'];
        $first_name=$_POST['first_name'];
    }
    
?>