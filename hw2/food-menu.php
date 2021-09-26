<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="heading">
        <img src="../images/logo.png" alt="">
        <div class="logoo">
        <ul class="nav justify-content-end">
            <li class=" nav-item">
            <a class="menu-edit nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="menu-edit nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
            <a class="menu-edit nav-link" href="#">Foods</a>
            </li>
                <a class="menu-edit nav-link" href="#">Contact</a>
            </li>
            </li>
        </ul>
        </div>
    </div>

    <nav class="navbar submitsearch navbar-light bg-light">
        <div class="subsearch container-fluid ">
        <form class="d-flex ">
            <input class="search-edit form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn butsearch btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </nav>
    </div>
    <div class="foodmenu">
    <div class="center">
        <h1>Food Menu</h1>
    </div>
        <div class="container">
        <div class="row">
            <div class="box-box col-6 col-sm-6">
            <div class="box-image">
                <img src="../images/menu-momo.jpg" alt="" class="box-photo box-vien">              
            </div>
            <div class="box-title">
                <h6>Dumplings Specials</h6>
                <h6>$5.00</h6>
                <h6>Chicken Dumpling with herbs from Mountain</h6>
                <button type="button" class="btn btn-outline-danger">Order Now</button>
            </div>
            </div>
            <div class="box-box col-6 col-sm-6">
            <div class="box-image">
                <img src="../images/menu-burger.jpg" alt="" class="box-photo box-vien">              
            </div>
            <div class="box-title">
                <h6>Best Burger</h6>
                <h6>$6.00</h6>
                <h6>Best Firewood Pizza in Town</h6>
                <button type="button" class="btn btn-outline-danger">Order Now</button>
            </div>
            </div>       
            <div class="w-100 d-none d-md-block">
            </div>      
            <div class="box-box col-6 col-sm-6">
            <div class="box-image">
                <img src="../images/menu-momo.jpg" alt="" class="box-photo box-vien">               
            </div>
            <div class="box-title">
                <h6>Sadeko Momo</h6>
                <h6>$6.00</h6>
                <h6>Best Spicy Momo for Winter</h6>
                <button type="button" class="btn btn-outline-danger">Order Now</button>
            </div>
            </div>
            <div class="box-box col-6 col-sm-6">
            <div class="box-image">
                <img src="../images/menu-pizza.jpg" alt="" class="box-photo box-vien">               
            </div>
            <div class="box-title">
                <h6>Mixed Pizza</h6>
                <h6>$10.00</h6>
                <h6>Pizza with chicken, Ham, Buff, Mushroom and Vegetables</h6>
                <button type="button" class="btn btn-outline-danger">Order Now</button>
            </div>
            </div>
        </div>
        </div>
        <div class="more">
        <h6><a href="#">See all foods</a></h6>
        </div>
    </div>
    <div class="social">
        <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
            <a href="http://fb.com"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
            </div>
            <div class="col-md-auto">
            <a href="http://instagram.com"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
            </div>
            <div class="col-md-auto">
            <a href="https://twitter.com/"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
            </div>
        </div>
        </div>
        <div class="bg-danger">
    <p class="text-center py-3 text-light">2021 All right reserved, Food House. Developed By <a href="#">Ha Minh</a></p>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>