<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop", 200));
$productManager->add(new Product("Mobile", 100));
$productManager->add(new Product("I phone X", 10000000));

$products = $productManager->getProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th> Tên San pham</th>
            <th>Giá</th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>

            <td><?php echo $product->getName()  ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>

</html>