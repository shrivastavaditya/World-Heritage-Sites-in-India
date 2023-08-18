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

    <title>HIMACHAL PRADESH</title>
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
<h2 align="center">HIMACHAL PRADESH</h2>
<p>
Himachal Pradesh is among the most visited top mountain tourist places in North India, Himalayas region. It gifts you with memories that last for a lifetime. Valleys, mountains, ancient monasteries, historical sites, lakes, mountain passes! - The list never ends. The wanderlust in you will be compelled to stay here forever. Pick up any Himachal travel guide, chances are, you will be hooked on to its beauty within a few minutes. This state has so much to offer. Indeed, it’s a top tourist attraction in North India!
</p>
<p>Capital : <b>Shimla(Summer), Dharamshala(Winter)  </b>Location : <b>North India</b></p>
<p><h5>Best time to visit:</h5>
Round the year.
</p>
<br>
<article>
    <h3 align="center">Himachal Pradesh Tourism</h3>
    <img src="him.jpg" alt="" width="40%" height="300px" align="right">
    <p align="left">
    Himachal Pradesh tourism has something in store for nature lovers. Its beauty lies in its diversity. You have lush valleys like Kinnaur, Kullu and Kangra & barren terrains of Lahaul & Spiti. Tales of Malana fascinate tourists as much as the Buddhist culture in Mcleodganj. Exploring Dalhousie, with its rich colonial past, is sheer delight. The famous Hill stations like Shimla, Kullu & Manali are dotted with meadows, orchards, quaint villages & rich colonial past.
</p><p align="left">
Any sightseeing tour of Himachal should include its wonderful lakes. Quiet and still, they reflect the surroundings, both literally and symbolically. A few of the famous lakes are Renuka, Rewalsar, Prashar, Suraj Tal & Chandratal. The views of the Himalayan Ranges fill you with excitement, from head to toe.
</p>
<p align="left">
The varied landscape of Himachal also lends itself to various adventure activities. The thrill of river rafting can be enjoyed at River Sutlej at Tattapani near Shimla, River Beas near Kullu, River Ravi near Chamba, River Chenab and Spiti in Lahaul and Spiti district.
There are also a lot of opportunities for trekking, for both amateur & advanced trekkers. Some of the famous treks are Pin Parvati Pass, Hampta Pass, Kinnaur Kailash & Chandratal.
Soar high with paragliding at Bir Billing, the second highest paragliding spot in the world. Skiing, angling, rock climbing, camping & mountaineering are other top adventure sports you can enjoy.
    </p>
<p align="left">
    History buffs travelling to Himachal also have something to look forward to. There are several heritage sites which are top tourist attractions, for both their architecture & historical magnificence. From ancient forts, colonial mansions, lush country sides of ancient traditions, magnificent havelis to elegant British colonial architecture, you will be mesmerized to see its breathtaking heritage charm.
    A few of these are Jandrighat Palace in Dalhousie, Rang Mahal in Chamba, Bahadurpur Fort in Bilaspur, Padam Palace in Rampur, and Kangra Fort in Kangra.
</article>
<br>
<article>
    <h4 align="center">SHIMLA</h4>
    <a href="https://en.wikipedia.org/wiki/Shimla" target="_blank">
    <img src="shm.jpg" align="right" alt="">
    </a>
    <p align="left">
    Shimla is the capital of Himachal Pradesh and a popular hill-station among Indian families and honeymooners. Situated at the height of 2200m, Shimla was the summer capital of British India. Shimla still retains its old-world charm with beautiful colonial architecture, pedestrian-friendly Mall Road and the ridge lined up with multiple shops, cafes and restaurants.</p>
    <p align="left">Shimla is well connected with many cities and is just 4 hours from the nearby city of Chandigarh. The city has an airport as well; however, there aren't many daily flights from here. The railway station connects Shimla with the plans and is famous for the Kalka-Shimla train route; a UNESCO listed World Heritage site.
    </p>
    <p align="left">
    The weather is pleasant for most of the months with tourists flocking especially during the summer months. The winters are cold with some days of snow from mid-December till February end.
    </p>
    <p align="left">
    Shimla is often covered along with nearby towns of Kufri, a hill-station almost always covered by snow and Chail, famous for a huge palace and the highest cricket ground in the world. Tourists also visit the famous Jakhu Temple and engage in sightseeing at various viewpoints during their trip to Shimla.
    </p>
</article>
<br>
<article>
    <h4 align="center">MANALI</h4>
    <p align="right">
        <a href="https://en.wikipedia.org/wiki/Manali,_Himachal_Pradesh" target="_blank">
    <img src="man.jpg" align="right" alt=""></a>
</p>
    <p align="left">
    One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year. </p>
    <p align="left">With the Covid-19 pandemic going on, Manali has evolved to be a place loved by young people looking for longer stays for workation. With ambient cafes, good wifi availability, small eateries and convenient shops, Old Manali is among the favorite neighbourhood for such people. There are many homestays and hostels offering dorm beds for cheap for longer durations. 
    </p>
    <p align="left">
    Manali has many trekking options around it, making it a great base for exploring this side of Himalayas. River Beas provides great rafting options in the nearby town of Kullu. Adjoining Parvati river, lies the Parvati Valley with  Kasol, Manikaran, Tosh and small villages attracting travellers for longer stays. Atal Tunnel now allows travellers to reach Sissu within a few hours making Spiti way more accessible. 
    </p>
    <p align="left">
    It snows the most in the months of January & February followed by December and March. If you're very lucky, you might find some snow in April. 
    </p>
    
</article>
<br>
<article>
    <h4 align="center">KULLU</h4>
    <p align="right">
        <a href="https://en.wikipedia.org/wiki/Kullu" target="_blank">
    <img src="kullu.jpg" align="right" width="600px" alt=""></a>
</p>
    <p align="left">
    Kullu, a popular tourist destination in Himachal Pradesh is located on the banks of the Beas river. Kullu is known for its Dusshera Festival, ancient temples, and rafting.  Kullu is generally coupled with its sister town Manali which is at a much higher altitude and provides more scenic views of snow-capped mountains. </p>
    <p align="left">Kullu is also home to Bhuntar airport and bus junction and is used as the base town to reach Manikaran, Kasol, Malana, Naggar. Kullu also has few important temples like the Raghunath Temple and Jagannath Devi Temple. There are many treks that also originate from this area include the Bijli Mahadev Temple Trek, Parvati Valley Trek, etc. 
    </p>
    <p align="left">
    With panoramic views and majestic hills covered with Deodar and Pine trees, Kullu is a nature lover's paradise. Situated at an altitude of 1230 meters between Pir Pranjal, Lower Himalayan, and Great Himalayan Ranges, Kullu is abundant with apple orchards.  Being the district headquarter, Kullu is a bustling town. Rafting is a popular activity that starts from Pirni, around 4 km away from Kullu.
    </p>
    
</article>
<br>
<article>
<?php 

$sql = "SELECT * from heritage where state=15";
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