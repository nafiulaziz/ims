<!DOCTYPE html>
<html>
<head>
    <title>Admin - User</title>
    <link rel="stylesheet" type="text/css" href="use.css">
</head>
<body>
        <div id="dashMain">
                <div class="dashslide">
                    <h3 class="dashlogo">IMS</h3>
                    <div class="dashslide_user">
                        <img src="admin.png" alt="Admin_image">
                        <span>Admin</span>
                    </div>
                    <div class="dashslide_menu">
                        <ul class="dashmenu_list">
                            <li>
                                <a href="dash.php">Dashbord</a>
                            </li>
                            <li>
                                <a href="productView.php">Product</a>
                            </li>
                            <li>
                                <a href="supVi.php">Suppliers</a>
                            </li>
                            <li>
                                <a href="stim.php">Stocks</a>
                            </li>
                            <li>
                                <a href="re.php">Report</a>
                            </li>
                            <li class="menuAction">
                                    <a href="userview.php">User</a>
                                <div class="nav">
                                    <ul class="subM">
                                        <li class="menuAct"> 
                                            <a href="userview.php"> View User </a>
                                        </li>
                                        <li>
                                            <a href="useradd.php"> Add User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dash_content_container">
                    <div class="dash_topNav">
                        <a href="userview.php">Users </a>
                        <a href="logout.php" id="logoutBtn">Log-out</a>
                    </div>
                    <div class="dash_content">
                        <div class="dash_content_main">
                            <h1 class="sechead">User List </h1>    
                            <div class="userform">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                include 'dbcon.php';
                                                $SQLma ="SELECT u_id, u_fn, u_ln, u_mail, u_ct, u_ut from users LIMIT 10"; 
                                                $res = $con->query($SQLma);
                                                foreach($res as $row)
                                                {
                                                    echo '<tr>';
                                                    echo '<td>' . $row['u_id'] . '</td>';
                                                    echo '<td>' . $row['u_fn'] . '</td>';
                                                    echo '<td>' . $row['u_ln'] . '</td>';
                                                    echo '<td>' . $row['u_mail'] . '</td>';
                                                    echo '<td>' . $row['u_ct'] . '</td>';
                                                    echo '<td>' . $row['u_ut'] . '</td>';?>
                                                    <td class="action-buttons">
                                                        <button class="delete-btn">Delete</button>
                                                    </td>
                                                    <?php
                                                    echo'</tr>';
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>   
                    </div>  
                    </div>
        </div>                  
</body>
</html>