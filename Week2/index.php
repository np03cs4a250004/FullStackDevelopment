<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
</head>
<body>
    <h1>Week 2 - Advanced PHP</h1>
    <p>Full Stack Web Development - Week 2 Tutorial</p>

<?php
echo "<h3>Exercise 1</h3>";
$categories = ["Laptops", "Phones", "Accessories", "Audio"];

foreach ($categories as $category) {
    echo $category."<br>";
}
echo "<h3>Exercise 2</h3>";
$product = [
    "name" => "Wireless Mouse",
    "price" => 850,
    "stock" => 12
];
echo "Product Name: " .$product["name"]."<br>";
echo "Price: " .$product["price"]."<br>";
echo "Stock: " .$product["stock"];

echo "<h3>Exercise 3</h3>";

$products = [
    ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
    ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
    ["id"=>103, "name"=>"Macbook", "category"=>"Laptops", "price"=>2000, "stock"=>30],
    ["id"=>104, "name"=>"Iphone Duo", "category"=>"Mobile Phones", "price"=>3000, "stock"=>10],
    ["id"=>105, "name"=>"Airpod", "category"=>"Earphones", "price"=>400, "stock"=>18]
];

echo "<h3>Exercise 4</h3>";

foreach ($products as $product) {
    echo "Product Name: " . $product["name"] . "<br>";
    echo "Category: " . $product["category"] . "<br>";
    echo "Price: Rs. " . $product["price"] . "<br>";
    echo "Stock: " . $product["stock"] . "<br>";
    echo "<hr>";
}

?>

</body>
</html>