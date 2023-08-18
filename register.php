<?php
require_once "config.php";

$username =$password=$confirm_password="";
$username_err=$password_err=$confirm_password_err="";
$address=$state=$city=$zip="";
$address_err=$state_err=$city_err=$zip_err="";


if($_SERVER['REQUEST_METHOD']=="POST"){
    //check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username can't be blank";
    }
    else{
        $sql="SELECT id from users where username = ?";
        $stmt= mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt,"s",$param_username);

            //set the value of param username
            $param_username= trim($_POST['username']);

            //try to excute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err="This username is already taken";
                }
                else{
                    $username= trim($_POST['username']);
                }
            }
            else{
                echo "something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }

    //check for password

    if(empty(trim($_POST['password']))){
        $password_err="Password cannot be blank";
    }
    elseif(strlen(trim($_POST['password']))<5){
        $password_err="Password cannot be less than 5 characters";
    }
    else{
        $password=trim($_POST['password']);
    }
    //check for matching of password
    if(trim($_POST['password']) != trim($_POST['confirm_password']))
    {
        $password_err="Passwords should match";
    }
    //if there is no error ,insert into database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        $sql="INSERT into users (username,password) values(?,?)";
        $stmt=mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,"ss",$param_username,$param_password);

            //set parameters
            $param_username=$username;
            $param_password=password_hash($password,PASSWORD_DEFAULT);
            //try to execute theory
            if(mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            }
            else{
                echo "Something went wrong....cannot redirect!!";
            }
    }
    mysqli_stmt_close($stmt);
}
$address=$_POST['address'];
mysqli_query($conn,"update users set address = '$address' where username= '$username' ");

$city=$_POST['city'];
mysqli_query($conn,"update users set city = '$city' where username= '$username' ");

$zip=$_POST['zip'];
mysqli_query($conn,"update users set zip='$zip' where username= '$username' ");

$state=$_POST['state'];
mysqli_query($conn,"update users set state='$state' where username= '$username' ");

mysqli_close($conn);


}

?>





<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign up page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Login Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-4">
    <h3> Please Register Here :</h3>
    <form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="Enter your user id">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group ">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" name="confirm_password" class="form-control" id="inputPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
        <option selected>Choose your state</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="number3" name="zip" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</div>

  </body>
</html>