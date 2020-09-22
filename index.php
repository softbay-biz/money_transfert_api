<?php
include 'DB.class.php';
$db = new DB;

//get all from database
$products = $db->getRows('products');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal money transfer api</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
<body>
<div class="container" >
    <h1>Paypal express checkout - products</h1>
<!--    Product's list-->
    <?php
    if(!empty($products)){
        foreach ($products as $row){ ?>
    <div class="my-sm-2">
        <img width="300px" height="200px" src="pics/<?php echo $row['image']; ?>"/>
        <p><?= $row['price']; ?></p>
        <p><b>price:</b> <?= $row['price'] ?> $</p>
        <a class="btn btn-primary" href="checkout.php?id=<?= $row['id']; ?>">Buy</a>
    </div>
    <?php
        }
    }else{
        echo '<p>Product(s) not found....</p>';
    }
    ?>
</div>
</body>
</html>
