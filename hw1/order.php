<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/order.css">
    <link rel="stylesheet" href="./css/food.css">
</head>
<body>
    <div class="hero-menu">
        <header class="category-menu">
            <img src="./images/logo.png" alt="" class="category-logo">
            <ul class="category-list-menu">
                <li class="category-menu-item">
                    <a href="" class="category-link">
                        Home
                    </a>
                </li>
                <li class="category-menu-item">
                    <a href="" class="category-link">
                        Category
                    </a>
                </li>
                <li class="category-menu-item">
                    <a href="" class="category-link">
                        Foods
                    </a>
                </li>
                <li class="category-menu-item">
                    <a href="" class="category-link">
                        Contact
                    </a>
                </li>
            </ul>
        </header>
    </div>
    <div class="order-form">
        <h3 class="global-title">Fill this form to confirm your order</h3>
        <div class="form-top">
            <div class="top-left">
                <img src="images/menu-pizza.jpg" alt="" class="left-img">
            </div>
            <div class="top-right">
                <h3 class="right-title">Food title</h3>
                <span class="right-price">$2.3</span>
                <span class="right-price">Quantity</span>
                <div class="right-quantity">
                    <input type="number" value="1" class="quantity-select" />
                </div>
            </div>
        </div>
        <div class="form-bottom">
            <form action="" class="form-group">
                <label for="">Full name</label>
                <input placeholder="Enter your name..." type="text" class="form-input">
                <label for="">Phone number</label>
                <input placeholder="Enter your phone..." type="text" class="form-input">
                <label for="">Email</label>
                <input placeholder="Enter your email..." type="text" class="form-input">
                <label for="">Address</label>
                <textarea name="" placeholder="Enter your address..." id="" cols="30" rows="10"></textarea>
                <button>Confirm order</button>
            </form>
        </div>
    </div>
    <div class="footer-icon">
        <img src="images/Facebook.png" alt="">
        <img src="images/Instagram.png" alt="">
        <img src="images/Twitter.png" alt="">
    </div>
    <div class="footer-desc">
        All rights reserved. Design by <span>CSE TLU</span>
    </div>
</body>
</html>