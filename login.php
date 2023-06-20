<?php
include_once("connect.php");
// include_once("header.php");
session_start();

/*
Put your code right here
1. Check if button 'btnLogin' is submitted, if it's true, go to 2.
2. Check if you get $_POST of input of email and input of password. if it's true, go to 3.
3. Connect to PDO
4. write a query to check from table 'Users' if user's email and user's password are both true.
5. Excute it.
6. Count row of result
7. Fetch data from result
8. save session 
9. Redirect to homepage.
*/
?>

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
        <title>Shop huy</title>
    </head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                
            <a href="index.php" class="navbar-brand"><figure>
                <img src="./images/267901914_1144488219424426_8851621994233261185_n.png" width="70px" >
            </figure></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="">
                <span class="navbar-toggler-icon"></span>
            </button> -->
           <style>
                .dropdown:hover .dropdown-menu{
                    display: block;
                }
            </style>
			<div class="collapse navbar-collapse" id="navbarMain">
                <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Home</a>
            </div>
        </div>
</nav>
<?php
if(isset($_POST['btnLogin'])){


if(isset($_POST['txtPass']) && isset($_POST['txtEmail'])){

	
	$pwd = $_POST['txtPass'];
	$email = $_POST['txtEmail'];
	$c = new connect();
	$dblink = $c->connectToPDO();
	$sql = "SELECT * FROM user WHERE email =? AND password =?";
	$stmt = $dblink->prepare($sql);
	$re = $stmt->execute(array("$email", "$pwd"));
	$numrow = $stmt->rowCount();
	$row = $stmt->fetch(PDO::FETCH_BOTH);
	if($numrow ==1){
		$_SESSION['user_name'] = $row['name'];
		$_SESSION['user_email'] = $row['email'];
		header("Location:index.php");
	} else {
		echo '<p style="color: blue">You should double check the information<br></p>';
	}	
}
else {
	echo '<p style="color: blue">Enter your infomation! Please!<br><br></p>';
}
}
?>


<div class="container" style="color:red">
        <h2 class="pt-3"  >Login</h2>
        <form id="form1" name="form1" method="POST" 
	action="login.php">

	<div class="row">
		<div class="form-group">				    
			<label for="txtEmail" class="col-sm-2 control-label">Email:  </label>
			<div class="col-sm-10">
				<input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email" value=""/>
			</div>
		</div>  
		
		<div class="form-group">
			<label for="txtPass" class="col-sm-2 control-label">Password:  </label>			
			<div class="col-sm-10">
					<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
			</div>
		</div> 
		<div class="form-group pt-3"> 
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
				
				<input type="reset" name="btnCancel"  class="btn btn-primary" id="btnCancel" value="Cancel"/>
			</div>
			<div class="form-group">
			<a class="nav-link" href="formreg1.php"><u>Register</u></a>
			</div> 
		</div>
	</div>
		
	</form>
</div>
<?php
include_once 'footer.php';
?>