<!DOCTYPE html>
<html>
<head>
    <title>Admin - Supplier</title>
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
                                            <li>
                                                <a href="productView.php">Product</a>
                                            </li>
                                            <li  class="menuAction">
                                                <a href="supVi.php">Suppliers</a>
                                                <div class="nav">
                                                    <ul class="subM">
                                                        <li>
                                                            <a href="supVi.php"> View Suppliers</a>
                                                        </li>
                                                        <li class="menuAction">
                                                            <a href="supadd.php"> Add Suppliers</a>
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
                                                    <a href="userview.php"> User </a>
                                            </li>
                                    </ul>
                            </div>
                    </div>
                    <div class="dash_content_container">
                        <div class="dash_topNav">
                            <a href="supadd.php">Supplier</a>
                            <a href="logout.php" id="logoutBtn">Log-out</a>
                        </div>
                        <div class="dash_content">
                            <div class="dash_content_main">
                                <h1 class="sechead">Insert Supplier</h1>
                                <div class="productform">
                                    <form action="supcon.php" method="post">
                                        <label for="suna">Supplier Name:</label>
                                        <input type="text" id="suna" name="suna" required>

                                        <label for="supro">Supplier Products:</label>
                                        <input type="text" id="supro" name="supro" required>

                                        <label for="sulo">Supplier Location:</label>
                                        <input type="text" id="sulo" name="sulo" required>

                                        <label for="sumail">E-mail:</label>
                                        <input type="email" id="sumail" name="sumail" required>

                                        <input onclick="myFunction()" type="submit" id="submit" name="submit"value="Add Suppliers">
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
     </div>

</body> 
<script>
function myFunction() {
  alert("Suppliers Added Successfully");
}
</script>
</html>