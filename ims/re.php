<!DOCTYPE html>
<html>
<head>
    <title>Admin - Report</title>
    <link rel="stylesheet" type="text/css" href="re.css">
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
                                                <a href="stim.php">Stock</a>
                                            </li>
                                            <li class="menuAction">
                                                <a href="Report.html">Report</a>
                                            </li>
                                            <li>
                                                    <a href="userview.php"> User </a>
                                            </li>
                                    </ul>
                            </div>
                    </div>
                    <div class="dash_content_container">
                        <div class="dash_topNav">
                            <a href="Report.html">Report</a>
                            <a href="logout.php" id="logoutBtn">Log-out</a>
                        </div>
                        <div class="dash_content">
                                <div class="dash_content_main">
                                <h1 class="sechead">Inventory Reports </h1> 
                                        <div id="reportsContainer">
                                        <div class="reportTypeContainer">
                                            <div class="reportType">
                                                <p>Products Report</p>
                                                <div class="alignRight">
                                                    <a href="report_csv.php?report=product" class="reportExportBtn">Excel</a>
                                                </div>
                                            </div>
                                            <div class="reportType">
                                                <p>Suppliers Report</p>
                                                <div class="alignRight">
                                                    <a href="report_csv.php?report=supplier" class="reportExportBtn">Excel</a>
                                                </div>

                                            </div>
                                            <div class="reportType">
                                                <p>Stocks Report</p>
                                                <div class="alignRight">
                                                    <a href="report_csv.php?report=stock" class="reportExportBtn">Excel</a>
                                                </div>

                                        </div>

                                        </div>    
                                </div>
                        </div>
                    </div>
     </div>

</body> 

</html>