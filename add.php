<?php
session_start();
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Adding Heritage Site</title>
    <link rel="stylesheet" href="s5.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Heritage Sites</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="add.php">Suggest sites</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="contact.php">Contact Us</a>
      </li>
      
    </ul>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAACQklEQVRoge2YwUsUYRiHnxUVyexmQl70YISIgYeim0Gxgor0RwhB9xA8WIcgOnTxLHTr0inokth6EP+BJMSDCyoKpmi5lLrEdJgR3N3PnXe+7/2cOcwD32WZd36/Z3dndueDnJwcW6aAZaACBCmvClACJpNKvM1A+avWG6nEVAbKxq0JichyBorGrW/1pQsGkRPgpsQ4RU6AW5dfMIkE19PFmZruLWm10MaHyCnwEXgGDAFdhF/VIeA18MdDphGXi7AE3Ik5fxH4AlQds7yJ/AA6JAERg8BmFkVGE0hc8ChrIlsWEhesaIhoXewlh9lVjQJaIj8dZnc0CmiJXNst9Sq0RLodZns0CmiJ9DrMDih1aMDmDrJrmVUA9iwzvYgEwG0LkXsOeV5EPllIALQB3zVEtK6Rbcu5KrCmUUBLZMRhdlipQwO239nphDkF4LlDnjeRAOhPIDLimFWD9oPVeIJjHytnN+DyLm0A7YKMVmDdMcurSAC8E2TMKuTU4GMX5S9wI+aY34TP8i5430WRnPMsjdCkVATHVLVDfYiUBcfse8htwOUCPAQeCDJGCbc9M3fX+kf4xzFuT+syfcDnaDZ1kWNgHribQKCeAeA9cJSGSBl4AXQ6CNTTGZ2zLOwQS7PhU2CG8JfZF63AyyjLi8gecF+7dROGaf4YHMuBYegc2d1Im4eYN7sPJMOLhsEFLzVlfDD0+SoZHDMMPvHTUcRTQ5+idPiVYTgray7pO1EElgj/qaZd/lfURfxJ5OTk1PIfaKPtwS+H/PsAAAAASUVORK5CYII="><?php echo"Welcome ".$_SESSION['username']?></a>
      </li>
</ul>
</div>
  </div>
</nav>
    <center>
      <div class="abc">
        <br>
        <h3>Please Update the Heritage Site :</h3>
    <form action="#" method="post" enctype="multipart/form-data">
        <br>
        
        <div class="form-group col-md-6">
        <label>Enter the name of Heritage Site:
        <input type="text" name="hname" id="">
        </label>
</div>
        <br>
        
        <div class="abc">
        <label >Enter the category of the Site:
            <input type="text" name="category" id="">
        </label>
        </div
        <br>
        

        <label for="inputState">State</label>
            <select id="inputState" name="state" class="form-control">
        <option selected>Select the state or union territory of the Site</option>
        <option value="36">Andhra Pradesh</option>
        <option value="1">Andaman and Nicobar Islands</option>
        <option value="2">Arunachal Pradesh</option>
        <option value="3">Assam</option>
        <option value="4">Bihar</option>
        <option value="5">Chandigarh</option>
        <option value="6">Chhattisgarh</option>
        <option value="7">Dadar and Nagar Haveli</option>
        <option value="8">Daman and Diu</option>
        <option value="9">Delhi</option>
        <option value="10">Lakshadweep</option>
        <option value="11">Puducherry</option>
        <option value="12">Goa</option>
        <option value="13">Gujarat</option>
        <option value="14">Haryana</option>
        <option value="15">Himachal Pradesh</option>
        <option value="16">Jammu and Kashmir</option>
        <option value="17">Jharkhand</option>
        <option value="18">Karnataka</option>
        <option value="19">Kerala</option>
        <option value="20">Madhya Pradesh</option>
        <option value="21">Maharashtra</option>
        <option value="22">Manipur</option>
        <option value="23">Meghalaya</option>
        <option value="24">Mizoram</option>
        <option value="25">Nagaland</option>
        <option value="26">Odisha</option>
        <option value="27">Punjab</option>
        <option value="28">Rajasthan</option>
        <option value="29">Sikkim</option>
        <option value="30">Tamil Nadu</option>
        <option value="31">Telangana</option>
        <option value="32">Tripura</option>
        <option value="33">Uttar Pradesh</option>
        <option value="34">Uttarakhand</option>
        <option value="35">West Bengal</option>
            </select>
        </label>
        <br>
        
        <div class="abc">
        <label >Enter the district of the Site:
            <input type="text" name="district" id="">
        </label>
</div>
        
        <br>
        <div class="abc">
        <label >Tell us something about the Site:
            <textarea name="about" id="about" cols="90" rows="15"></textarea>
        </label>
</div>
        
        <br>
        <div class="abc">
        <label>Attach file here:
        <input type="file" name="photo" id="photo">
        </label>
</div>
        <br>
        
        <div class="xyz">
        <input type="submit" value="SUBMIT" class="btn" name ="submit">
</div>
<br>

        </center>
    </form>
    </div>
    <?php

    if(isset($_POST['submit']))
    {


    $hname = trim($_POST["hname"]);
    $category = trim($_POST["category"]);
    $state = trim($_POST["state"]);
    $district = trim($_POST["district"]);
    $about= trim($_POST["about"]);
    $photo=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name,"./uploads/$photo");

    $sql = "INSERT INTO heritage(hname,category,state,district,about,photo) values('$hname','$category','$state','$district','$about','$photo')";
    mysqli_query($conn,$sql);
    }
    
    
?>

    <footer class="bg-dark text-center text-white">

<div class="container p-4">
  <section class="mb-4">
    <p>
      Thanks for visiting our website!!! For further help please contact us.
    </p>
  </section>

  <section class="">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Northern India</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="hp.php" class="text-white">Himachal Pradesh</a>
          </li>
          <li>
            <a href="jammu.php" class="text-white">Jammu and Kashmir</a>
          </li>
          <li>
            <a href="up.php" class="text-white">Uttar Pradesh</a>
          </li>
          <li>
            <a href="uttarakhand.php" class="text-white">Uttarakhand</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Southern India</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="tamil.php" class="text-white">Tamil Nadu</a>
          </li>
          <li>
            <a href="kerala.php" class="text-white">Kerala</a>
          </li>
          <li>
            <a href="goa.php" class="text-white">Goa</a>
          </li>
          <li>
            <a href="andhra.php" class="text-white">Andhra Pradesh</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Central India</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="mp.php" class="text-white">Madhya Pradesh</a>
          </li>
          <li>
            <a href="raj.php" class="text-white">Rajasthan</a>
          </li>
          <li>
            <a href="ch.php" class="text-white">Chhattisgarh</a>
          </li>
          <li>
            <a href="odisha.php" class="text-white">Odisha</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Eastern India</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="assam.php" class="text-white">Assam</a>
          </li>
          <li>
            <a href="sikkim.php" class="text-white">Sikkim</a>
          </li>
          <li>
            <a href="meghalaya.php" class="text-white">Meghalaya</a>
          </li>
          <li>
            <a href="arunachal.php" class="text-white">Arunachal Pradesh</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
</div>
</footer>




</body>
</html>