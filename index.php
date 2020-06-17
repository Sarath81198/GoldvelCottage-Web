<?php
require "config.php";

try {
  $dba = $collection->findOne(array("room_type" => "dba"));
  $sba = $collection->findOne(array("room_type" => "sba"));
  $dbna = $collection->findOne(array("room_type" => "dbna"));
  $sbna = $collection->findOne(array("room_type" => "sbna"));
} catch (\Throwable $th) {
  header("Location: index.php");
  // throw $th;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

  <title>Goldvel Cottage</title>
</head>

<body>

  <div id="mySidenav" class="sidenav" style="z-index: 10001;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#about">About</a>
      <a href="#rooms">Rooms</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
  </div>

  <div style="height: 60px; position:fixed; z-index:10000; background-color: white; width: 100%; box-shadow: 0px 1px 8px 0px #888888;">
    <div class="row">
      <div class="col-2">
        <span style="font-size:40px;cursor:pointer; padding-left: 20px; color:orange;" onclick="openNav()">&#9776;</span>
      </div>
      <div class="col-8">
        <center><img src="./img/logo/logo_name.png" style="height:30px;  margin-top:15px"></center>
      </div>
      <div class="col-2"></div>

    </div>
  </div>




  <!-- carousel -->

  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/logo/logo_name_bg_white.png" class="d-block w-100" style="padding-top: 60px; object-fit: contain;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/cottage_0.jpg" class="d-block w-100" style="padding-top: 60px; object-fit: contain;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/cottage_1.jpg" style="padding-top: 60px; object-fit: contain;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/cottage_3.jpg" style="padding-top: 60px; object-fit: contain;" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="space"></div>
  <div class="space">

    <center><a href="#about"><i class="fa fa-chevron-circle-down" style="font-size:70px ;color: orange"></i></a></center>
  </div>
  <section id="about">

    <div class="space"></div>
    <div class="space"></div>

    <div class="welcome">
      WELCOME
    </div>
    <div class="container">
      <div class="space"></div>

      <div class="para1">
        <p>Our cottage is located in <b>Palani</b>, a place famous for Palani Murugan Temple or Arulmigu Kulazhandaivelayutha
          Swamy Temple which is deticated to <b>Lord Murugan. Our cottage is situated close to the Palani Murugan Temple,
            overlooking the hill.</b></p>
      </div>
      <hr class="divider">
  </section>
  <center>
    <section id="rooms">
    <div class="container">
      <div class="row">
        <div class="col-sm m-50">
          <div class="card">
            <img class="card-img-top" src="./img/card_double_bed_ac.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Double Bed - A/C</b></h5>
              <?php
              if ($dba['has_offer']) {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $dba['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                  <p class="text-success"><?php echo $dba['offer'] ?>% OFF</p>
                  <h4 class="text-danger"><s>₹ <?php echo $dba['original_price'] ?> </s></h4>
                </p>
              <?php } else {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $dba['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                </p>
              <?php
              }
              ?>
              <a href="./rooms/double_bed_ac.php" style="margin-top:50px" class="btn btn-success"><b>BOOK NOW</b></a>
            </div>
          </div>
        </div>
        <div class="col-sm m-50">
          <div class="card">
            <img class="card-img-top" src="./img/card_single_bed_ac.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Single Bed - A/C</b></h5>
              <?php
              if ($sba['has_offer']) {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $sba['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                  <p class="text-success"><?php echo $sba['offer'] ?>% OFF</p>
                  <h4 class="text-danger"><s>₹ <?php echo $sba['original_price'] ?> </s></h4>
                </p>
              <?php } else {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $sba['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                </p>
              <?php
              }
              ?>
              <a href="./rooms/single_bed_ac.php" style="margin-top:50px" class="btn btn-success"><b>BOOK NOW</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm m-50">
          <div class="card">
            <img class="card-img-top" src="./img/card_double_bed_non_ac.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Double Bed - Non A/C</b></h5>
              <?php
              if ($dbna['has_offer']) {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $dbna['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                  <p class="text-success"><?php echo $dbna['offer'] ?>% OFF</p>
                  <h4 class="text-danger"><s>₹ <?php echo $dbna['original_price'] ?> </s></h4>
                </p>
              <?php } else {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $dbna['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                </p>
              <?php
              }
              ?>
              <a href="./rooms/double_bed_non_ac.php" style="margin-top:50px" class="btn btn-success"><b>BOOK NOW</b></a>
            </div>
          </div>
        </div>
        <div class="col-sm m-50">
          <div class="card">
            <img class="card-img-top" src="./img/card_single_bed_non_ac.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Single Bed - Non A/C</b></h5>
              <?php
              if ($sbna['has_offer']) {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $sbna['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                  <p class="text-success"><?php echo $sbna['offer'] ?>% OFF</p>
                  <h4 class="text-danger"><s>₹ <?php echo $sbna['original_price'] ?> </s></h4>
                </p>
              <?php } else {
              ?>
                <p class="card-text">
                  <h3 class="text-success"><b>₹ <?php echo $sbna['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                </p>
              <?php
              }
              ?>
              <a href="./rooms/single_bed_non_ac.php" style="margin-top:50px" class="btn btn-success"><b>BOOK NOW</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
<section>
  </center>
  <div class="wrap">

    <!-- Button trigger modal -->
    <section id="gallery">
    <button type="button" class="button shadow-lg" data-toggle="modal" data-target=".cd-example-modal-lg"><b>View Gallery</b></button>
      <section>
    <!-- Modal -->
    <div class="modal fade cd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Gallery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row text-center text-lg-left">
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_0.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_0.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_1.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_1.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_2.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_2.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_3.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_3.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_4.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_4.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_5.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_5.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_6.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_6.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/cottage_interior_7.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/cottage_interior_7.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/card_double_bed_ac.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/card_double_bed_ac.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/card_single_bed_ac.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/card_single_bed_ac.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/card_double_bed_non_ac.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/card_double_bed_non_ac.jpg" alt="">
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <a href="./img/card_single_bed_non_ac.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="./img/card_single_bed_non_ac.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="divider">

  <div class="space"></div>

  <section>
    <h1><b>SEND US A MESSAGE</b></h1>
    <form class="cf">
      <div class="half left cf">
        <input class="shadow-lg" type="text" id="input-name" placeholder="Enter Your Name">
        <input class="shadow-lg" id="input-number" placeholder="Enter Your Phone number">
      </div>
      <div class="half right cf">
        <textarea class="shadow-lg" name="message" type="text" id="input-message" placeholder="Enter Your Address"></textarea>
      </div>

      <input type="submit" value="SEND" id="input-submit">

      <div class="space"></div>
    </form>
  </section>

  <div id="map" style="margin-left:auto; margin-right:auto; width:70%;height:400px;"></div>
  <center><a href="https://goo.gl/maps/6B4U8TaHg2yVN4tR7" style="margin-top:60px" class="btn btn-primary"><i class="fas fa-directions"></i> GET DIRECTIONS</a></center>



  <div class="space"></div>

  <hr class="divider">

  </div>

  <section id="contact">
    <footer>
      <div class="container footer-container">
        <div class="row footer-row">
          <div class="col-xs-12 col-sm-6 col-md-6 text-right pt-25">
            <address>
              <ul class="list-unstyled">
                <li>
                  <p>83, Sannathi Road Adivaram,</p>
                </li>
                <li>
                  <p>Palani - 624601,</p>
                </li>
                <li>
                  <p>Tamil Nadu, India</p>
                </li>
                <li><a class="tel" href="tel:8668197402" type="tel"><i class="fa fa-mobile"></i><span> +91 86681 97402</span></a></li>
                <li><a class="tel" href="mailto:goldvelcottage@gmail.com"><i class="fa fa-envelope"></i><span> contact@goldvelcottage.in</a></li>
              </ul>
            </address>
          </div>

          <div class="col-xs-12 col-md-6 col-sm-6 social-section">
            <!-- <div class="text-center">
              <form class="contact cf">
                <div class=" left cf-1">
                    <b>Your Contact Number</b> 
                    <input type="number" id="check-in" placeholder="Phone number (10 digit)" min="5000000000" max="9999999999"><button><i class="fa fa-paper-plane-o"></i></button>
                </div>
            </form>          
            </div> -->
            <div class="pt-50">
              <h5><b>GET IN TOUCH</b></h5>
              <form class="contact">
                <input type="number" min="5000000000" max="9999999999" placeholder="Enter your contact number">
                <button class="btn btn-success" style="margin-top: 30px;"><i class="fa fa-paper-plane"></i> Send</button><br>
                <small class="text-muted pt-25"><i>(We will contact you as soon as we receive your contact details. PS: We won't share your contact details with anyone)</i></small>
              </form>

            </div>
          </div>
        </div>


      </div>
      <hr class="footer-hr">
      <img src="./img/logo/logo_name_white.png" class="img-fluid" alt="Responsive image" style="width:400px">
      <hr class="copyright">
      <small class="footer-greets">THANK YOU FOR VISITING US!</small>
      </div>
    </footer>
  </section>



  <script>
    var lat = 10.447391;
    var lon = 77.516654;

    map = L.map('map').setView([lat, lon], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Goldvel Cottage, Palani, Tamil Nadu, India',
      maxZoom: 18,
    }).addTo(map);

    marker = L.marker([lat, lon]).addTo(map);

    marker.bindPopup("<b>Goldvel Cottage</b><br />Sannadhi Road, Adivaram,<br/>Palani").openPopup();
  </script>





  <script type="text/javascript" src="main.js"></script>
  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
