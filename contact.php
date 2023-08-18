<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
    header("location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact Us</title>
    <link rel="stylesheet" href="s1.css">
    <link rel="stylesheet" href="s6.css">
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<br>
<h3 align="center">Contact Us</h3>
<br>
<table align="center">
<tr>
    <th>Name</th>
    <th>Contact Number</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>Aditya Kumar</td>
    <td>8690409766</td>
    <td>21104042@mail.jiit.ac.in</td>
  </tr>
  <tr>
    <td>Stuti Gupta</td>
    <td>9149003706</td>
    <td>21104043@mail.jiit.ac.in</td>
  </tr>
  <tr>
    <td>Avijot Singh</td>
    <td>9915154976</td>
    <td>21104036@mail.jiit.ac.in</td>
  </tr>
  <tr>
    <td>Hirdyarth Gupta</td>
    <td>9084170826</td>
    <td>21104055@mail.jiit.ac.in</td>
  </tr>
</table>
<br>
<p align="center"><b>Location :</b> Jaypee Institute Of Information Technology,A-10, Sector-62, ,Noida-201 309, Uttar Pradesh, India</p>
<br>
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