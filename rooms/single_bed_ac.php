<?php
require "../config.php";

try {
    $sba = $collection->findOne(array("room_type" => "sba"));
} catch (\Throwable $th) {
    // header("Location: index.php");
    throw $th;
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
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="../favicon.ico" rel="icon" type="image/x-icon" />


    <title>Goldvel Cottage</title>
</head>

<body>


    <div style="height: 60px; position:fixed; z-index:100; background-color: white; width: 100%; box-shadow: 0px 1px 8px 0px #888888;">
        <div class="row">
            <div class="col-2">
                <a href="../index.php"><i class="fa fa-home fa-3x" style="margin-top:5px ; margin-left:5px; color:#f3722c;"></i></a>
            </div>
            <div class="col-8">
                <center><img src="./../img/logo/logo_name.png" style="height:30px;  margin-top:15px"></center>
            </div>
            <div class="col-2"></div>

        </div>
    </div>
    <!-- content here -->
    <div class="container pt-100">
        <div class="row">
            <div class="col-sm">
                <center>
                    <img src="./../img/card_single_bed_ac.jpg" style="width:90%; height:400px; object-fit:cover; border-radius: 8px; border: 5px solid #ddd; box-shadow: 0px 1px 8px 0px #888888;">
                    <hr>
                    <div class="text-center">
                        <h4 class="text-center">Amenties</h4>
                        <div class="text-center social-buttons">
                            <a href="#" class="btn btn-default btn-lg social-button link-facebook"><i class="fa fa-snowflake"></i>
                            </a>

                            <a href="#" class="btn btn-default btn-lg social-button link-codepen"><i class="fa fa-bed"></i>
                            </a>

                            <a href="#" class="btn btn-default btn-lg social-button link-twitter"><i class="fa fa-wifi"></i>
                            </a>

                            <a href="#" class="btn btn-default btn-lg social-button link-linkedin"><i class="fa fa-tv"></i>
                            </a>
                            <a href="#" class="btn btn-default btn-lg social-button link-instagram"><i class="fa fa-plug"></i>
                            </a>
                            <a href="#" class="btn btn-default btn-lg social-button link-cutlery"><i class="fa fa-cutlery"></i>
                            </a>
                        </div>
                    </div>

                </center>
            </div>
            <div class="col-sm left-v-line pt-25">
                <h2 class="dark-text"><b>Single Bed - A/C</b></h2>
                <?php
                if ($sba['has_offer']) {
                ?>
                    <div name="price">
                        <h3 class="text-success pt-50"><b>₹ <?php echo $sba['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                        <p class="text-success"><?php echo $sba['offer'] ?>% OFF</p>
                        <h4 class="text-danger"><s>₹ <?php echo $sba['original_price'] ?> </s></h4>
                    </div>
                <?php
                } else {
                ?>
                    <h3 class="text-success pt-50"><b>₹ <?php echo $sba['offer_price'] ?> <i class="fa fa-tag"></i></b></h3>
                <?php
                }
                ?>

                <div class="space"></div>

                <form class="cf">
                    <div class=" left cf">
                        <b class="text-warning">Your contact number:</b>
                        <input type="number" id="check-in" placeholder="Phone number (10 digit)" min="5000000000" max="9999999999">
                    </div>
                    <input type="submit" value="BOOK" class="text-success pt-25">
                    <small class="text-muted"><i>(We will contact you as soon as we receive your contact details)</i></small>
                </form>
            </div>
        </div>
    </div>
    <!-- !!!!!!!!!!!! -->
    <script type="text/javascript" src="../main.js"></script>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
