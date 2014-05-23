<?php
    require_once 'classes/login.php';
    $obj=new Login();    
    $result=$obj->select_all_user();   
?>
<html>
    <head>
        <title>Database Layout</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    
    <body>
        <div class="wrapper">
            <div class="header">
                <h1>View All User</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="database_layout.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="sign_up.php">Sign Up</a></li>
                    <li><a href="view_user.php">View User</a></li>
                </ul>
            </nav>
            
            <div class="content_area">
                <div class="main_content">
                    <h1>View All User</h1>
                    <hr/>
                    <br/>
                    <table border="1" align="center">
                        <tr>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            while($row= mysql_fetch_array($result))
                            {
                            ?>
                        <tr>
                            <td><?php echo $row['first_name'].' '.$row['last_name'];?></td>
                            <td><?php echo $row['email_address'];?></td>
                            <td><?php echo $row['mobile_no'];?></td>
                            <td>
                                <a href="edit_user.php?user_id=<?php echo $row['user_id']?>">Edit</a>&nbsp;|&nbsp;
                                <a href="delete_user.php?user_id=<?php echo $row['user_id'];?>">Delete</a>
                            </td>
                        </tr>
                        
                        <?php } ?>
                        
                    </table>
                </div>
                <div class="sidebar"></div>
            </div>
        </div>
    </body>
</html>
