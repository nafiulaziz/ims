<!DOCTYPE html>
<html>
<head>
    <title>Admin - Product</title>
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
                            <li class="menuAction">
                                <a href="productView.php">Product</a>
                                <div class="nav">
                                    <ul class="subM">
                                        <li class="menuAction">
                                            <a href="productView.php"> View Product</a>
                                        </li>
                                        <li>
                                            <a href="productadd.php"> Add Product</a>
                                        </li>
                                    </ul>   
                                </div>
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
                            <li>
                                    <a href="userview.php">User</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dash_content_container">
                    <div class="dash_topNav">
                        <a href="productView.php">Product</a>
                        <a href="logout.php" id="logoutBtn">Log-out</a>
                    </div>
                    <div class="dash_content">
                        <div class="dash_content_main">
                            <h1 class="sechead">Product List </h1> 
                            <div class="productform">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Buy price</th>
                                            <th>Sell Price</th>
                                            <th>Created By</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                include 'dbcon.php';
                                $sql = "SELECT p_id, p_na, qu, p_bu, p_s, p_cr, p_ct, p_ut from products";
                                $res = $con->query($sql);

                                    foreach($res as $row)    
                                    {
                                        echo"<tr>";
                                            echo"<td>".$row['p_id']."</td>";
                                            echo"<td>".$row['p_na']."</td>";
                                            echo"<td>".$row['qu']."</td>";
                                            echo"<td>".$row['p_bu']."</td>";
                                            echo"<td>".$row['p_s']."</td>";
                                            echo"<td>".$row['p_cr']."</td>";
                                            echo"<td>".$row['p_ct']."</td>";
                                            echo"<td>".$row['p_ut']."</td>";?>
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