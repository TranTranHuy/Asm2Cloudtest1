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
        <title>MyCustomWeb</title>
    </head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                
            <a href="MYSHOP.php" class="navbar-brand"><figure>
                <img src="../ASM2New/images/267901914_1144488219424426_8851621994233261185_n.png" width="70px" >
            </figure></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarMain">
                <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Home</a>
            </div>
        </div>
</nav>
    <?php

include_once "connect.php";


if(isset($_POST['register'])){
    $username = $_POST['username'];
    $gender = $_POST['grpGender'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $phone = $_POST['phone']; 
    $dateBirthday = date('Y-m-d', strtotime($_POST['txtBirth']));

    $c = new Connect();
    $dblink = $c->connectToPDO();

    $sql = "INSERT INTO `user`(`email`, `name`, `gender`, `address`, `password`, `role`, `phone`, `birthday`) VALUES (?,?,?,?,?,?,?,?)";

    $re = $dblink->prepare($sql);
    $stmt = $re->execute(array("$email","$username",$gender,$address,"$password","user","$phone","$dateBirthday"));
       
    if ($stmt == TRUE)
    {
        echo '<p style="color: blue">Register successful<br></p>';
    }             
    else{
        echo '<p style="color: blue">Register failed<br></p>';
    }
    
}

?>
    <body>
        <h4 style="color:red">Registration</h4>
        <?php
           
        ?>
        <form action="" id= "form1" name="form1" method="post" class="need-validation" style="color:blue"> 
            <div class="row pb-3">
                <label for="" class="col-md-1 col-form-label">Username:</label>
                <div class="col-md-7">
                <input type="text" name="username" id="username" required class="form-control"/>
                </div>
            </div>
            <div class="row pb-3">
                <label for="" class="col-md-1 col-form-label">Password:</label>
                <div class="col-md-7">
                <input type="password" name="password" id="password" required class="form-control"/>
                </div>
            </div>
            <div class="row pb-3">
                <label for="" class="col-md-1 col-form-label">Confirm Password:</label>
                <div class="col-md-7">
                <input type="password" name="confirm_password" id="confirm_password" required class="form-control"/>
                </div>
            </div>
            <div class="row pb-3">
                <label for="" class="col-md-1 col-form-label">Phone:</label>
                <div class="col-md-7">
                <input type="text" name="phone" id="phone" required class="form-control"/>
                </div>
            </div>
            <div class="row pb-3">
                <label for="" class="col-md-1 col-form-label">Email:</label>
                <div class="col-md-7">
                <input type="text" name="email" id="email" required class="form-control"/>
                </div>
            </div>
            <div class="row">
                <label for="gender" class="col-md-2 col-form-label">Gender:</label>
                <div class="col-md-10 d-flex">
                <div class="form-check pe-3">
                    <input type="radio" name="grpGender" value="0" id="maleRd" checked class="form-check-input"/>
                    <label for="maleRd" class="form-check-label">Male</label>  
                </div> 
                <div class="form-check my auto">
                    <input type="radio" name="grpGender" value="1" id="femaleRd" class="form-check-input"/>
                    <label for="femaleRd" class="form-check-label"> Female</label>   
                </div>    
            </div>
            <div class="row pb-3">
                <label for="country" class="col-md-1 col-form-label">Country:</label>
                <div class="col-md-7">
                    <select id="country" class="form-select" name = "address">
                        <option selected>
                            Choose your country
                        </option>
                        <option value="JAPAN">JAPAN</option>
                        <option value="VIETNAM">VIETNAM</option>
                        <option value="AMERICA">AMERICA</option>
                    </select>
                </div>
            </div>
            
        <div class="row pb-3">
                <label for = "birthday" class="col-md-1 control-label"> Birthday: </label>
            <div class="col-md-7">
                <input type="date" name = "txtBirth" id = "birthday" required class="form-control"/>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-7 ms-auto">
                 <input type="submit" value="Register" class="btn btn-primary" name="register" id="register">
            </div>         
        </div>
        <div class="row pb-3">
            <label><a class="nav-link" href="login.php"><u>Login</u></a></label>
                
        </div>
    </form>
    </body>
<?php
include_once "footer.php";
?>
</html>