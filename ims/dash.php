<!DOCTYPE html>
<html>
<head>
    <title> Admin - Dashbord</title>
    <link rel="stylesheet" type="text/css" href="dash.css">
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

                    <li class="menuAction">
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

                    <li>
                        <a href="userview.php">User</a>
                    </li>

                </ul>

            </div>
        </div>

        <div class="dash_content_container">

            <div class="dash_topNav">
                    <a href="dash.php" >Admin Dash Board </a>
                    <a href="logout.php" id="logoutBtn">Log-out</a>
            </div>
            <div class="dash_content">
                <div class="dash_content_main">
                    <div class="content">
                        <div class="cards">
                            <div class="card">
                                <div class="box">
                                    <h1>5</h1>
                                    <h3>Users</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <h1>25</h1>
                                    <h3>Products</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="box">
                                    <h1>5</h1>
                                    <h3>Suppliers</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                        <p class="highcharts-description">
                            Available products in our inventory.
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Products In our Inventory',
        align: 'left'
    },
    tooltip: {
        valueSuffix: '%'
    },
    
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Availability',
            colorByPoint: true,
            data: [
                {
                    name: 'Mouse',
                    y: 25
                },
                {
                    name: 'Monitor',
                    y: 15
                },
                {
                    name: 'Sound-Box',
                    y: 15
                },
                {
                    name: 'Key-Board',
                    y: 30
                },
                {
                    name: 'Printer',
                    y: 15
                }
            ]
        }
    ]
});
    </script>
</body>
</html>