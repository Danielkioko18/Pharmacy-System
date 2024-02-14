 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Dashboard</title>
     <link rel="stylesheet" type="text/css" href="homestyle.css">
 </head>
 <body>
    <?php include 'common/actions.php'; ?>
    <div class="container">
        <h4>Welcome back, <strong><?php echo $_SESSION['user']['username']; ?></strong></h4><br>
        <div class="preview">
            <div class="card">
                <div class="card-body">
                    <h4>Employees</h4>
                    <a href="employees.php">View Employees</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Products</h4>
                    <a href="products.php">View products</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Expiry</h4>
                    <a href="expiry.php">View epiry of products</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Orders</h4>
                    <a href="orders.php">View products orders done</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Supliers</h4>
                    <a href="supliers.php">View supliers </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Sales</h4>
                    <a href="sales.php">View Sales Made</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Users</h4>
                    <a href="">View System Users</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Stock</h4>
                    <a href="stock.php">View Stock</a>
                </div>
            </div>


        </div>
        </div>

 
 </body>
 </html>