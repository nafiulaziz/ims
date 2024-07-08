<!DOCTYPE html>
<html>
<head>
    <title> Admin - Product</title>
    <link rel="stylesheet" type="text/css" href="prdadd.css">
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
                                                <a href="dash.php">DashBoard</a>
                                            </li>
                                            <li class="menuAction">
                                                <a href="productView.php">Product</a>
                                                <div class="nav">
                                                    <ul class="subM">
                                                        <li>
                                                            <a href="productView.php"> View Product</a>
                                                        </li>
                                                        <li class="menuAction">
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
                                                    <a href="userview.php"> User </a>
                                            </li>
                                    </ul>
                            </div>
                    </div>
                    <div class="dash_content_container">
                        <div class="dash_topNav">
                            <a href="productadd.php">Product</a>
                            <a href="logout.php" id="logoutBtn">Log-out</a>
                        </div>
                        <div class="dash_content">
                            <div class="dash_content_main">
                                <h1 class="sechead">Insert a Product </h1>
                                <div class="productform">
                                    <form action="productcon.php" method="post">
                                        <label for="prdname">Product Name:</label>
                                        <input type="text" id="prdname" name="prdname" required>

                                        <label for="crtby">Created By:</label>
                                        <input type="text" id="crtby" name="crtby" required>

                                        <label for="qnty">Quantity:</label>
                                        <input type="number" id="qnty" name="qnty" required>

                                        <label for="buyprice">Buy Price:</label>
                                        <input type="number" id="buyprice" name="buyprice" required>

                                        <label for="sellprice">Sell Price:</label>
                                        <input type="number" id="sellprice" name="sellprice" required>

                                        <input onclick="myFunction()" type="submit" id="submit" name="submit"value="Add Product">
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
     </div>

</body> 
<script>
function myFunction() {
  alert("Product Added Successfully");
}
</script>
</html>