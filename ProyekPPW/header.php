<?php
include_once("./inc/inc_koneksi.php");
include_once("./inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoesStore</title>

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--custom css-->
    <link rel="stylesheet" href="<?php echo url_dasar()?>/./css/style.css">
</head>
<body>

   <!-- navbar -->
   <nav id="navbar" class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
    <div class = "container">
        <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
            <i class="fa fa-shoe-prints"></i>ShoesStore
        </a>

        <div class = "order-lg-2 nav-btns">
            <a class="btn position-relative" href="cart.html">
                <i class="fa fa-shopping-cart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
            </a>
            <a class="btn position-relative" href="#">
                <i class="fa fa-heart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
            </a>
            <a class="btn position-relative" onclick="toggleSearch()" href="#">
                <i class="fa fa-search"></i>
            </a>
            <div class="search-container" id="search-container">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

        <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
            <ul class = "navbar-nav mx-auto text-center">
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "index.php">home</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "promo.php">promo</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "product.php">product</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "about.php">about</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "account.php">login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navbar -->