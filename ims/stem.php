<!DOCTYPE html>
<html>
<head>
    <title>Admin - Stock</title>
    <link rel="stylesheet" type="text/css" href="st.css">
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
                                            <li >
                                                <a href="productView.php">Product</a>
                                            </li>
                                            <li>
                                                <a href="supVi.php">Suppliers</a>
                                            </li>
                                            <li class="menuAction">
                                                <a href="stim.php">Stocks</a>
                                                <div class="nav">
                                                    <ul class="subM">
                                                        <li>
                                                            <a href="stim.php"> Stock In</a>
                                                        </li>
                                                        <li class="menuAction">
                                                            <a href="stem.php"> Stock Out</a>
                                                        </li>
                                                        </ul>
                                                </div>
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
                            <a href="stim.php">Stock</a>
                            <a href="logout.php" id="logoutBtn">Log-out</a>
                        </div>
                        <div class="dash_content">
                            <div class="dash_content_main">
                                <h1 class="sechead">Outgoing</h1>
                                <div class="productform">
                                    <form action="stout.php" method="post">
                                        <label for="prdname">Product Name:</label>
                                        <input type="text" id="prdname" name="prdname" required>

                                        <label for="qnty">Quantity:</label>
                                        <input type="number" id="qnty" name="qnty" required>

                                        <input onclick="myFunction()" type="submit" id="submit" name="submit"value="Remove">
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
     </div>

</body> 
<script>
function myFunction() {
  alert("Stocked Out Successfully");
}
</script>
</html>