<?php 
session_start();
require_once "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>GOA</title>
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
<h2 align="center">GOA</h2>
<p>
The coastal paradise, Goa is not unknown to anyone. This tiny state in West India is famous for its plethora of beautiful beaches, great seafood, amazing nightlife, and thrilling watersports.
</p>
<p>Capital : <b>Panaji  </b>Location : <b>West India</b></p>
<p><h5>Best time to visit:</h5>
Throughout the year.
</p>
<br>
<article>
    <h3 align="center">Goa Tourism</h3>
    <img src="goa.jpg" alt="" width="40%" height="300px" align="right">
    <p align="left">
    Goa along with being a popular beach destination in India is a perfect honeymoon destination, a great getaway with friends, and an amazing family holiday place, which means, the place is filled with activities and attractions to keep all its visitors engaged
    </p>
    <p align="left">
    The state is majorly divided into two districts - North Goa and South Goa. North Goa is famous for its lively beaches like Calangute, Baga, Candolim, Anjuna; beach shacks, Fort Aguada; Church of Mae De Dues; Boghdeshwara Temple; and Chorao, Divar Island.
</p><p align="left">
South Goa, on the other hand is known for its quieter beaches like Butterfly, Palolem, Polem, and Agonda; luxury resorts; Se Cathedral and St Xavier’s Church; and many sightseeing places like Dudhsagar Waterfalls where one can enjoy trekking as well.
</p><p align="left">
Goa also offers its visitors the chance to enjoy river carnivals; Rajbhavan Darshan; e-bikes tour; white water river rafting; hot air ballooning; birding tours at Dr Salim Ali Bird Sanctuary; Ayurveda massages; shopping; water activities like scuba diving and sea rafting; and other adventure activities like motorised paragliding, and bungee jumping.
    </p>
    <p align="left">
    In our Goa Travel Guide, we add the most authentic information ensuring you know everything about the state before planning a trip. Our authentic Goa travel guide includes information on places to visit, top things to do, and best hotels. With us, you also get the best Goa tour packages that ensure an amazing holiday experience at this top beach destination in India.
</article>
<br>
<article>
    <h4 align="center">AGONDA BEACH GOA</h4>
    <a href="https://en.wikipedia.org/wiki/Agonda" target="_blank">
    <img src="ago.jpg" align="right" width=350px alt="">
    </a>
    <p align="left">
    A quiet and beautiful beach in South Goa, Agonda Beach is for those who want to spend time amidst peaceful surroundings and away from the chaos. This pristine beach in Goa stretches almost two miles and is fringed by beach shacks offering some great food and drinks.</p>
    <p align="left">Agonda Beach is perfect for swimming and chilling. It is also great for taking a boat ride and enjoying the expanse of the sea and the beauty of nearby Butterfly and Honeymoon Beaches. A large number of shops selling clothes and accessories make Agonda Beach ideal for shopping as well.
    </p>
</article>
<br>
<br>
<br>
<br>
<br>
<article>
    <h4 align="center">BAGA BEACH GOA</h4>
    <p align="right">
        <a href="https://en.wikipedia.org/wiki/Baga,_Goa" target="_blank">
    <img src="baga.jpg" align="right" width=450px alt=""></a>
</p>
    <p align="left">
    One of the most happening beaches in Goa, Baga Beach is where you will find water sports, fine dining restaurants, bars, and clubs. Situated in North Goa, Baga Beach is bordered by Calangute and Anjuna Beaches. Watersports are the major attraction of Baga Beach. Parasailing, wakeboarding, windsurfing, kite surfing, jet skiing are some of the top watersports activities to enjoy in Baga Beach. One can also go for dolphin spotting tours and island trips from the beach.</p>
    <p align="left">Baga also boasts one of the best nightlife scenes in Goa, the famous Tito’s Lane has some of the best bars and clubs. One unique attraction at Baga Beach is an indoor snow park that has a play area, sledding area, and ice bar. For shopaholics, there is a Tibetan Market on the Baga Road.
    </p>
    <p align="left">
    Baga beach is also one of the favorite hangouts for nature enthusiasts, where one can relish the scenic beauty of a place. For couples, a candlelit dinner at the beachside is a perfect retreat for making it a romantic Baga beach holiday.
    </p>
    
</article>
<br>

<article>
<?php 

$sql = "SELECT * from heritage where state=12";
$result=mysqli_query($conn,$sql);

while ($r=mysqli_fetch_array($result))
{
    $p=$r['photo'];
    echo "<h4 align='center'>".$r['hname']."</h4>";
    echo "<image src='./uploads/".$p."' width = '23%' align='right' >" ;
    echo "The heritage site is located in ";
    echo $r['district'];
    echo ".This heritage site falls under the category of ";
    echo $r['category'];
    echo " site.";
    echo "<div >".$r['about']."</div>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}

?>
</article>
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