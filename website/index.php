<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>
            <?php
            $hostname = gethostname();
            echo "This is webhost: $hostname"
            ?>
        </h1>

        <h1>Welcome to my shop</h1>
        <ul>
            <?php
            $json = file_get_contents('http://nginx:8081/');
            $obj = json_decode($json);
            
	    $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
            ?>
        </ul>
    </body>
</html>


