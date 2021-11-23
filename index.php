<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st PHP PAge</title>
    <style>
        h1>b{
            color:red;
        }
    </style>
</head>
<body>
    <!-- chap 1 : intro -->
    <h1>This is
    <?php
echo "<b> PHP </b>";
    ?>
    Store !</h1>

    <!-- chap 2 : Varriables | declaration and usage -->
<?php
$name ="iPhone"
$value = 10000;

echo "<h4>Product is  : ".$name." <br> Price  is : ".$price."</h4>";

?>

    <!-- chap 3 : Array Varriables | Declaration and usage -->

    <?php
$iPhone['name'] =  "iPhone 13"
$iPhone['price'] = "$ 10000"
$iPhone['class'] = "Flagship"; 

echo "<ul>"
echo "<li>Product Name  :".$iPhone['name']."</li>";
echo "<li>Product Price :".$iPhone['price']."</li>";
echo "<li>Product Class :".$iPhone['class']."</li>";
echo "</ul>"
echo "<hr>";
    ?>
    
</body>
</html>