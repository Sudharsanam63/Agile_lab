<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #4CAF50;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            padding: 20px;
        }

        .product {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
        }

        .product-item img {
            width: 100%;
            border-radius: 5px;
        }

        .product-item h3 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Grocery Shop</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="addproduct.php">Add Products</a>
    <a href="#">Update Products</a>
    <a href="#">About Us</a>
    <a href="#">Contact Us</a>
    <a href="adminlog.php">Admin Login</a>
</nav>

<section>
    <div class="product">
        <div class="product-item">
            <img src="https://via.placeholder.com/150" alt="Product Image">
            <h3>Product Name</h3>
            <p>Description of the product.</p>
            <p>$9.99</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more product items here -->
    </div>
</section>

<footer>
    <p>&copy; 2024 Grocery Shop. All rights reserved.</p>
</footer>

</body>
</html>
