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

    <title>KERELA</title>
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
<div class="container mt-4">
<h2 align="center">KERELA</h2>
<p>
Encompassing serenity, Kerala is a charming South Indian destination that should be in every traveller’s bucket list. Adorned with the emerald backwaters, sprawling and lush tea estates, pristine hill stations, and azure Arabian Sea, Kerala tourism boasts numerous tourist places with which you will fall in love instantly.
</p>
<p>Capital : <b>Thiruvananthapuram  </b>Location : <b>South India</b></p>
<p><h5>Best time to visit:</h5>
The best time to visit Kerala is between October and February, when on an average the weather is conducive to go on sightseeing tours and enjoying all the activities offered in the state.
</p>
<br>
<article>
    <h3 align="center">Kerela Tourism</h3>
    <img src="andhrap.jpg" alt="" width="40%" height="300px" align="right">
    <p align="left">
    Encompassing serenity, Kerala is a charming South Indian destination that should be in every traveller’s bucket list. Adorned with the emerald backwaters, sprawling and lush tea estates, pristine hill stations, and azure Arabian Sea, Kerala tourism boasts numerous tourist places with which you will fall in love instantly.
    </p>
    <p align="left">
    In North Kerala, districts like Kasaragod, Kannur, Wayanad, Kozhikode, and Malappuram have many attractions for the tourists. Wayanad offers a lovely hill station holiday whereas Kozhikode offers a great beach holiday and an opportunity of bird watching.
</p><p align="left">
In Central Kerala, Palakkad, Thrissur, Ernakulam, and Idukki have a number of experiences in store. Thrissur is a culture aficionado’s paradise while Idukki and Ernakulam are the hotspots for nature lovers.
</p><p align="left">
In South Kerala Kottayam, Pathanamthitta, Alappuzha, Kollam, Thiruvananthapuram are ready with a variety of experiences like backwaters and houseboat in Alappuzha; beach vacations in Kollam, and a glance at rich history of Kerala at Pathanamthitta.
    </p>
    <p align="left">
    Kerala tourism isn’t only about imbibing natural beauty but its rich culture that is festooned with dances, festivals, delectable cuisine, literature, Ayurveda therapies, and art & craft. Kerala has it all, and you have to see it, to believe it.
    The state opens its doors to beach holidays with picturesque beaches like Varkala, Kovalam and Marari. Giving a good run to pristine beaches are the backwaters of Kerala that can be best experienced in Alleppey and Kumarakom.
    Kerala's beach and backwaters are accompanied by its lush and surreal hill stations, of which Munnar, Wayanad and Vagamon are the best places to visit in the summer season. With Western Ghats covering some of its area, Kerala is the best wildlife destination and is perfect for birdwatching.
</article>
<br>
<article>
    <h4 align="center">ALLEPPEY</h4>
    <a href="https://en.wikipedia.org/wiki/Alappuzha" target="_blank">
    <img src="all.jpg" align="right" alt="">
    </a>
    <p align="left">
    Officially called Alappuzha, Alleppey is the picture-perfect place known for its beautiful backwaters and the houseboats offering overnight stays. The coastline of Alleppey offers some of the best beaches in Kerala with water sports during the dry season. </p>
    <p align="left">Alleppey is located close to Kochi in the South Indian state of Kerala. Its palm-fringed inter-connect network of canal backwaters attracts a lot of tourists from all over the world. Coupled with other beautiful places in Kerala like Munnar and Thekkady, Alleppey is often considered for a honeymoon or for a great family vacation. 
    </p>
    <p align="left">
    There are plenty of houseboats, homestays, and rejuvenating Ayurvedic resorts that make staying in Alleppey brilliant. The houseboats pass through the serene backwaters, where you can catch glimpses of green paddy fields, choir-making activities, and witness the life of locals in Kerala.
    </p>
</article>
<br>
<article>
    <h4 align="center">MUNNAR</h4>
    <p align="right">
        <a href="https://en.wikipedia.org/wiki/Munnar" target="_blank">
    <img src="mun.jpg" align="right" width=450px alt=""></a>
</p>
    <p align="left">
    Popular among honeymooners, Munnar is a hill station in Kerala, located in the Idukki district. Lying in the Western Ghats at 1600 metres, it is one of the most sought after and visited travel destinations globally, especially popular amongst honeymooners. Munnar is famous for its tea estates, greenery, blankets of mist forming natural-view points. </p>
    <p align="left">Munnar is divided into Old Munnar, where the tourist information office is, and Munnar, where the bus station and most guest houses are located. The Eravikulam National Park, Salim Ali Bird Sanctuary and tea plantations are its major attractions. Munnar is also famous for being home to the rare Neelakurinji flowers that bloom once in 12 years (the next bloom is in 2030) and the endangered Nilgiri Tahr.
    </p>
    <p align="left">
    Once the summer resort of the erstwhile British government, the main reason to visit Munnar is to explore the tea plantations that looks like a blanket of green spread all over. It is also an ideal place for trekking, camping, paragliding and boating. Munnar is often visited along with Alleppey and Thekkady, the two most popular tourist attractions in Kerala.
    </p>
    <p align="left">
    Munnar is a haven for shopping for tea and spices. Cardamom, ginger, cinnamon, clove, nutmeg, coffee and a variety of homemade chocolates can be bought from the number of shops spread across the hill town.
    </p>
</article>
<br>
<article>
    <h4 align="center">KOCHI</h4>
    <p align="right">
        <a href="https://en.wikipedia.org/wiki/Kochi" target="_blank">
    <img src="kochi.jpg" align="right" width="450px" alt=""></a>
</p>
    <p align="left">
    Situated on the southwest coast of India, Kochi or Cochin is a commercial port city with a trading history that dates back to at least 600 years. Called the Queen of the Arabian Sea, the city is Kerala's financial, commercial, and industrial capital.</p>
    <p align="left">A gaggle of islands interconnected by ferries, this cosmopolitan town has upmarket stores, art galleries and some of the finest heritage accommodations. In a true vintage-meets-future fashion, restaurants and shopping hubs crowd Ernakulum, Jew Town and Fort Kochi along with palaces, beaches, temples, and heritage sites. Kochi is also an important place to see Kathakali and Kalarippayattu performances and the annual Biennale Festival.
    </p>
    <p align="left">
    Well connected by all means possible, this coastal city is both a popular tourist hotspot and an active naval base, being officially the home to the Southern Command of the Indian Navy and an air squadron of the Indian Navy. 
    </p>
    
</article>
<br>
<article>
<?php 

$sql = "SELECT * from heritage where state=19";
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