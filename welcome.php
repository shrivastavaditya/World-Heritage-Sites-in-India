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

    <title>Heritage Welcome Page</title>
    <link rel="stylesheet" href="s1.css">
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
<div class="container mt-4">


    <h1>Indian Heritage Sites</h1>
    <h2>Indian States</h2>
    <article>
    <taskbar>
  <img src="pngegg.png" width="24%" align="right">
</taskbar>
      <p align="left">
      28 States and 8 Union Territories in our country,makes India rich and versatile in terms of recreational and adventure activities, historic and modern tourist sites, cultural and spiritual insight.Each of the Indian states has something exclusive to offer to wide-eyed tourists who flock throughout the year.Travel to India is like exploring its treasure trove. The priceless monuments like the Taj Mahal and the Imambara attract tourists to India besides revealing its rich architectural and cultural heritage.
</p>
<p align="left">
There are several pilgrim tours to the Indian states that are of tourist interest. Devotees and tourists travel to the sacred shrines that dot the holy land of India. For the tourists who love nature, animal and adventure the various Indian states offer wildlife tours. Travelling to the incomparable Indian states offers variety of sights, sounds and smells. Tourists are spellbound by travelling to the hill resorts and beaches. Holiday tours, picnics, vacations are the best spent in India. Amongst the Indian states most travelled by tourists are Goa, Kerala, Rajasthan, Himachal Pradesh, Tamil Nadu, Sikkim, Uttarakhand, Bihar, Karnataka and Arunachal Pradesh.
</p>


    </article>

    <div class="indian-states-list">
        <div class="container1">
            <h3 align="center">STATES OF INDIA</h3>
            <div class="states-name">
                <ul>
                    <li><a href="andhra.php" target="_blank">Andhra Pradesh</a></li>
                    <li><a href="arunachal.php" target="_blank">Arunachal Pradesh</a></li>
                    <li><a href="assam.php" target="_blank">Assam</a></li>
                    <li><a href="bihar.php" target="_blank">Bihar</a></li>
                    <li><a href="ch.php" target="_blank">Chhattisgarh</a></li>
                    <li><a href="goa.php" target="_blank">Goa</a></li>
                </ul>
            </div>
            <div class="states-name">
                <ul>
                    <li><a href="guj.php" target="_blank">Gujarat</a></li>
                    <li><a href="haryana.php" target="_blank">Haryana</a></li>
                    <li><a href="hp.php" target="_blank">Himachal Pradesh</a></li>
                    <li><a href="jharkhand.php" target="_blank">Jharkhand</a></li>
                    <li><a href="karn.php" target="_blank">Karnataka</a></li>
                    <li><a href="kerala.php" target="_blank">Kerala</a></li>
                </ul>
            </div>
            <div class="states-name">
                <ul>
                    <li><a href="mp.php" target="_blank">Madhya Pradesh</a></li>
                    <li><a href="maharashtra.php" target="_blank">Maharashtra</a></li>
                    <li><a href="manipur.php" target="_blank">Manipur</a></li>
                    <li><a href="meghalaya.php" target="_blank">Meghalaya</a></li>
                    <li><a href="mizoram.php" target="_blank">Mizoram</a></li>
                    <li><a href="nagaland.php" target="_blank">Nagaland</a></li>
                </ul>
            </div>
            <div class="states-name">
                <ul>
                    <li><a href="odisha.php" target="_blank">Odisha</a></li>
                    <li><a href="punjab.php" target="_blank">Punjab</a></li>
                    <li><a href="raj.php" target="_blank">Rajasthan</a></li>
                    <li><a href="sikkim.php" target="_blank">Sikkim</a></li>
                    <li><a href="tamil.php" target="_blank">Tamil Nadu</a></li>
                </ul>
            </div>
            <div class="states-name">
                <ul>
                    <li><a href="telangana.php" target="_blank">Telangana</a></li>
                    <li><a href="tripura.php" target="_blank">Tripura</a></li>
                    <li><a href="uttarakhand.php" target="_blank">Uttarakhand</a></li>
                    <li><a href="up.php" target="_blank">Uttar Pradesh</a></li>
                    <li><a href="wb.php" target="_blank">West Bengal</a></li>

                </ul>
            </div>


        </div>
    </div>
    <div class="union-territories">
        <div class="container2">
            <h3 align="center">UNION TERRITORIES</h3>
            <div class="union">
                <ul>
                    <li><a href="andaman.php" target="_blank">Andaman and Nicobar Islands</a></li>
                    <li><a href="chandigarh.php" target="_blank">Chandigarh</a></li>
                    <li><a href="delhi.php" target="_blank">Delhi</a></li>

                </ul>
            </div>
            <div class="union">
                <ul>
                    <li><a href="dadra.php" target="_blank">Dadra and Nagar Haveli</a></li>
                    <li><a href="daman.php" target="_blank">Daman and Diu</a></li>
                    <li><a href="jammu.php" target="_blank">Jammu & Kashmir</a></li>
                </ul>
            </div>
            <div class="union">
                <ul>
                    <li><a href="laksh.php" target="_blank">Lakshadweep</a></li>
                    <li><a href="pudu.php" target="_blank">Puducherry</a></li>
                    <li><a href="ladakh.php" target="_blank">Ladakh</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
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