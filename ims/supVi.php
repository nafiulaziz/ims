<!DOCTYPE html>
<html>
<head>
    <title>Admin - Supplier</title>
    <link rel="stylesheet" type="text/css" href="prdview.css">
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
                            <li class="menuAction">
                                <a href="">Suppliers</a>
                                <div class="nav">
                                    <ul class="subM">
                                        <li class="menuAction">
                                            <a href="supVi.php">View Suppliers</a>
                                        </li>
                                        <li>
                                            <a href="supadd.php">Add Suppliers</a>
                                        </li>
                                    </ul>   
                                </div>
                            </li>
                            <li>
                                <a href="stim.php">Stocks</a>
                            </li>
                            <li>
                                <a href="re.php">Report</a>
                            </li>
                            <li>
                                    <a href="userview.php">User</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dash_content_container">
                    <div class="dash_topNav">
                        <a href="supVi.php">Suppliers </a>
                        <a href="logout.php" id="logoutBtn">Log-out</a>
                    </div>
                    <div class="dash_content">
                        <div class="dash_content_main">
                            <h1 class="sechead">Supplier List </h1> 
                            <div class="productform">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Supplier Name</th>
                                            <th>Supplier Product</th>
                                            <th>Supplier location</th>
                                            <th>E-mail</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                include 'dbcon.php';
                                $sql = "SELECT su_id, su_na, su_l, su_pro, su_mail, su_ct, su_ut from suppliers";
                                $res = $con->query($sql);

                                    foreach($res as $row)    
                                    {
                                        echo"<tr>";
                                            echo"<td>".$row['su_id']."</td>";
                                            echo"<td>".$row['su_na']."</td>";
                                            echo"<td>".$row['su_pro']."</td>";
                                            echo"<td>".$row['su_l']."</td>";
                                            echo"<td>".$row['su_mail']."</td>";
                                            echo"<td>".$row['su_ct']."</td>";
                                            echo"<td>".$row['su_ut']."</td>";?>
                                            <td class="action-buttons">
                                                <button class="delete-btn">Delete</button>
                                            </td>
                                            <?php
                                        echo"</tr>";
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