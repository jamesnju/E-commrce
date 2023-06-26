<?php
    require_once 'connection.php';

    $sql_cart = "SELECT * FROM cart";
    $all_cart = $conn->query($sql_cart);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>header</title>
</head>
<body>
   
    <header>
        <i class="logo">
            <img src="/img/logo.png" width="100%" height="100%"/>
        </i> 
             
        <div id="main">
            <a href="upload.php">Sellproduct</a>
            <a href="products.php">products</a>
            
        </div>
        <div id ="cart" >
            <a href="cart.php">
                <span id="badge"><?php echo mysqli_num_rows($all_cart); ?></span>
                <img src="./img/icon1.png" height="30" width="50"/>
            </a>
        </div>
        <div id="logout">
            <a  href="logout.php">
            <img src="./img/admin.png" width="60" height="40"/>
            </a>
        </div>
        
    </header>
    
   
    
    
</body>
</html>