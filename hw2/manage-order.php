<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-dark">
        <div class="container-fluid ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a class="nav-link text-danger fw-bolder" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-danger fw-bolder" href="admin.php">Admin</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-danger fw-bolder" href="category.php">Categories</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-danger fw-bolder" href="food.php" >Food</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-danger fw-bolder" href="order.php" >Order</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-danger fw-bolder" href="#" >Logout</a>
            </li>
            
            </ul>
        </div>
        </div>
    </nav>

    <div class="bg-gray-light ">
        <div class="p-5 ">
        <h2 class="px-5  fw-bolder">
            Manage Orders
        </h2>
        </div>
        <div class="px-5 mx-4 pb-5">
            <button class="btn btn-primary px-5 mx-4" type="submit">Add New User</button>
        </div>
        
        
    <div class="table-responsive px-5 mx-5 pb-5">
        <table class="table table-sm table-borderless">
        <thead>
            <tr class="border-bottom">
            <th scope="col">S.N</th>
            <th scope="col">Food</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Total</th>
            <th scope="col">Order date</th>
            <th scope="col">Status</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mixed Pizza</td>
                <td>10.00</td>
                <td>2</td>
                <td>20.00</td>
                <td>2020-10-29
                    09:07:17
                </td>
                <td class="text-success">
                    Delivered
                </td>
                <td class="width-100">Mr.Minh</td>
                <td>0888081747</td>
                <td>haminh0205@gmail.com</td>
                <td>Ha noi</td>
                <td>
                <button class="btn btn-success">Update</button>
                <button class="btn btn-danger">Order</button>
                </td>   
            </tr>
            
            <tr>
                <th scope="row">1</th>
                <td>Best Burger</td>
                <td>4.00</td>
                <td>4</td>
                <td>16.00</td> 
                <td>2020-11-30
                    04:07:17
                </td>
                <td class="text-success">
                    Delivered
                </td>
                <td>Mr.Duc</td>
                <td>0886884939</td>
                <td>haduc0510@gmail.com</td>
                <td>Ha noi</td>
                <td>
                <button class="btn btn-success">Update</button>
                <button class="btn btn-danger">Order</button>
                </td>   
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Sadeko Momo</td>
                <td>6.00</td>
                <td>3</td>
                <td>18.00</td>
                <td>2020-11-30
                    04:07:17
                </td>
                <td class="text-danger">
                    Cancelled
                </td>
                <td>Mrs.Tu</td>
                <td>0886817775</td>
                <td>dangtu0707@gmail.com</td>
                <td>Ha noi</td>
                <td>
                <button class="btn btn-success">Update</button>
                <button class="btn btn-danger">Order</button>
                </td>   
            </tr>
        </tbody>
        </table>
        </div>
    </div>

    <div class="bg-danger">
    <p class="text-center py-3 text-light">2021 All right reserved, Food House. Developed By <a href="#">Ha Minh</a></p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
</body>
</html>