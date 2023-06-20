<?php
session_start();

ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/mycustomweb.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>      
        <meta name="viewport" content="width:device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta charset="UTF-8">
        <title>Shop Huy</title>
    </head>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    
            <div class="container-fluid">
                
            <a href="MYSHOP.php" class="navbar-brand"><figure>
                <img src="./images/267901914_1144488219424426_8851621994233261185_n.png" width="70px" >
            </figure></a>

            <style>
                .dropdown:hover .dropdown-menu{
                    display: block;
                }
            </style>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarMain">
                <div class="navbar-nav">
                <a class="nav-link active" href="cart.php">Cart</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarMain">
                <div class="navbar-nav">
                <a class="nav-link active" href="proadd.php">Add Product</a>
            </div>


            <div class="category" style="color:white">
                <a class="nav-link active" href="#">
                <div class="dropdown">
                <a href="#" name="cat_id" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    Category
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="Headphone.php">Robot</a>
                    <a class="dropdown-item" href="Mouse.php">Car</a>
                    <a class="dropdown-item" href="Keyboard.php">Lego</a>
                    <!-- <a class="dropdown-item" href="add_category.php">Add Category</a> -->
            </div>
            </div>
                </a>

            </div>

            <!-- <div class="collapse navbar-collapse" id="navbarMain">
                <div class="navbar-nav">
                <a class="nav-link active" href="proadd.php">Add Product</a>
            </div> -->

            <div class="navbar-nav ms-auto"> 
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        $sUsername = $_SESSION['user_name'];
                        echo $sUsername;
                        echo '<div class="dropdown-menu">
                        <a class="dropdown-item" href="category_management.php">Management</a>
                        <a class="dropdown-item" href="logout.php">Log out</a>
                        </div>';
                    }
                    else {
                        $sUsername = NULL;
                        echo "No Account";
                        echo '<div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="formreg1.php">Register</a>
                        </div>';
                    }
                    ?>
                    </a> 
                </div>
               

        </nav>
        <style>
                .dropdown:hover .dropdown-menu{
                    display: block;
    
                }

            </style>
    <body>

            <div class="search" >
                <form class="search" action="index.php"> 
                        <div class="input_icon" style="background-color:white; border-radius: 5px" >
                            <i class="fa fa-search cus-fa"></i>
                            <input type="text" class="input-field" placeholder="Search Store"  name="search">
                        </div> 
                </form>  
            </div>
            
                        
            <div>
        </div>
</html>