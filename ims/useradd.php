<!DOCTYPE html>
<html>
<head>
    <title>Admin - User</title>
    <link rel="stylesheet" type="text/css" href="user2.css">
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
                            <a href="userview.php"> User </a>
                            <div class="nav">
                                <ul class="subM">
                                    <li>
                                        <a href="userview.php"> View User </a>
                                    </li>
                                    <li class="menuAct">
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
                        <a href="useradd.php">User Add</a>
                        <a href="logout.php" id="logoutBtn">Log-out</a>
                    </div>
                    <div class="dash_content">
                        <div class="dash_content_main">
                            <h1 class="sechead">Insert User </h1>
                            <div class="userform">
                                <form action="usercon.php" method="post">
                                    <label for="userfn">First Name:</label>
                                    <input type="text" id="userfn" name="userfn" required>
                                    <label for="userln">Last Name:</label>
                                    <input type="text" id="userln" name="userln" required>
                                    <label for="usermail">Email:</label>
                                    <input type="email" id="usermail" name="usermail" required>
                                    <label for="userpass">Password:</label>
                                    <input type="password" id="userpass" name="userpass" required>
                                    <input  onclick="myFunction()"type="submit" id="submit" name="submit"value="Add User">
                                </form>
                            </div>    
                        </div>
                    </div>
            </div>
     </div>

</body> 
<script>
function myFunction() {
  alert("Registration Successful");
}
</script>

</html>