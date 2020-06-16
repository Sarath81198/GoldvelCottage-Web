<?php
error_reporting(0);
session_start();
$logged_in = $_SESSION['login_status'];
if ($logged_in) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="./../favicon.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

        <title>Goldvel Cottage</title>
        <style>
            body {
                background-color: #171717;
            }

            .mt-100 {
                margin-top: 100px;
            }

            label {
                color: white
            }

            .hr-grey {
                padding-top: 30px;
                padding-bottom: 30px;
                border-bottom: 2px solid grey;
            }
        </style>
    </head>

    <body>

        <div style="top:0px;height: 60px; position:fixed; z-index:10000; background-color: #303030; width: 100%; box-shadow: 0px 1px 8px 0px #888888;">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-8">
                    <img src="./../img/logo/logo_name_white.png" style="height:30px;  margin-top:15px">
                </div>
                <div class="col-3">
                    <form action="./admin_action.php" method="POST">
                        <button type="submit" name="logout" style="margin-top:10px" class="btn btn-warning"><b><i class="fas fa-sign-out-alt"></i></b></button>
                    </form>
                </div>
            </div>
        </div>
        <center>
            <div class="container mt-100">
                <div name="double_bed_ac">
                    <h2 class="text-light"><b>Double Bed A/C</b></h2>
                    <form id="doubleBedAcForm">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="doubleBedAcOffer" onchange="offerCheckbox('doubleBedAc')" checked>
                                <label class="form-check-label" for="gridCheck">
                                    Is there any offer?
                                </label>
                            </div>
                        </div>
                        <div id="doubleBedAcOfferDiv">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Orignal Price:</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">₹</span>
                                        </div>
                                        <input type="text" id="doubleBedAcOriginalPrice" class="form-control" placeholder="Original price" aria-label="original price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('doubleBedAc')">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="text-warning">Offer (%): </label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="doubleBedAcOfferInput" class="form-control" placeholder="Offer in percentage" aria-label="offer" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('doubleBedAc')">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="text-success"><b>Final Price:</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                </div>
                                <input type="text" id="doubleBedAcFinalPriceInput" class="form-control" placeholder="Final price" aria-label="final price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><b>UPDATE PRICE</b></button>
                    </form>
                </div>
                <div class="hr-grey"></div>




                <div name="single_bed_ac">
                    <h2 class="text-light" style="padding-top:30px"><b>Single Bed A/C</b></h2>
                    <form id="singleBedAcForm">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="singleBedAcOffer" onchange="offerCheckbox('singleBedAc')" checked>
                                <label class="form-check-label" for="gridCheck">
                                    Is there any offer?
                                </label>
                            </div>
                        </div>
                        <div id="singleBedAcOfferDiv">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Orignal Price:</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">₹</span>
                                        </div>
                                        <input type="text" id="singleBedAcOriginalPrice" class="form-control" placeholder="Original price" aria-label="original price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('singleBedAc')">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="text-warning">Offer (%): </label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="singleBedAcOfferInput" class="form-control" placeholder="Offer in percentage" aria-label="offer" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('singleBedAc')">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="text-success"><b>Final Price:</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                </div>
                                <input type="text" id="singleBedAcFinalPriceInput" class="form-control" placeholder="Final price" aria-label="final price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><b>UPDATE PRICE</b></button>
                    </form>
                </div>
                <div class="hr-grey"></div>




                <div name="double_bed_non_ac">
                    <h2 class="text-light" style="padding-top:30px"><b>Double Bed A/C</b></h2>
                    <form id="doubleBedNonAcForm">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="doubleBedNonAcOffer" onchange="offerCheckbox('doubleBedNonAc')" checked>
                                <label class="form-check-label" for="gridCheck">
                                    Is there any offer?
                                </label>
                            </div>
                        </div>
                        <div id="doubleBedNonAcOfferDiv">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Orignal Price:</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">₹</span>
                                        </div>
                                        <input type="text" id="doubleBedNonAcOriginalPrice" class="form-control" placeholder="Original price" aria-label="original price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('doubleBedNonAc')">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="text-warning">Offer (%): </label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="doubleBedNonAcOfferInput" class="form-control" placeholder="Offer in percentage" aria-label="offer" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('doubleBedNonAc')">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="text-success"><b>Final Price:</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                </div>
                                <input type="text" id="doubleBedNonAcFinalPriceInput" class="form-control" placeholder="Final price" aria-label="final price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><b>UPDATE PRICE</b></button>
                    </form>
                </div>
                <div class="hr-grey"></div>



                <div name="single_bed_non_ac">
                    <h2 class="text-light" style="padding-top:30px"><b>Single Bed A/C</b></h2>
                    <form id="singleBedNonAcForm">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="singleBedNonAcOffer" onchange="offerCheckbox('singleBedNonAc')" checked>
                                <label class="form-check-label" for="gridCheck">
                                    Is there any offer?
                                </label>
                            </div>
                        </div>
                        <div id="singleBedNonAcOfferDiv">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Orignal Price:</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">₹</span>
                                        </div>
                                        <input type="text" id="singleBedNonAcOriginalPrice" class="form-control" placeholder="Original price" aria-label="original price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('singleBedNonAc')">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="text-warning">Offer (%): </label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="singleBedNonAcOfferInput" class="form-control" placeholder="Offer in percentage" aria-label="offer" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateFinalPrice('singleBedNonAc')">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="text-success"><b>Final Price:</b></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                </div>
                                <input type="text" id="singleBedNonAcFinalPriceInput" class="form-control" placeholder="Final price" aria-label="final price" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><b>UPDATE PRICE</b></button>
                    </form>
                </div>
                <div class="hr-grey"></div>

            </div>
        </center>



        <script>
            function offerCheckbox(typeOfRoom) {

                switch (typeOfRoom) {
                    case 'doubleBedAc':
                        offerCheckboxInput = document.getElementById("doubleBedAcOffer")
                        offerDiv = document.getElementById("doubleBedAcOfferDiv")
                        finalPriceInput = document.getElementById("doubleBedAcFinalPriceInput")
                        form = document.getElementById("doubleBedAcForm")
                        break;

                    case 'singleBedAc':
                        offerCheckboxInput = document.getElementById("singleBedAcOffer")
                        offerDiv = document.getElementById("singleBedAcOfferDiv")
                        finalPriceInput = document.getElementById("singleBedAcFinalPriceInput")
                        form = document.getElementById("singleBedAcForm")
                        break;

                    case 'doubleBedNonAc':
                        offerCheckboxInput = document.getElementById("doubleBedNonAcOffer")
                        offerDiv = document.getElementById("doubleBedNonAcOfferDiv")
                        finalPriceInput = document.getElementById("doubleBedNonAcFinalPriceInput")
                        form = document.getElementById("doubleBedNonAcForm")
                        break;

                    case 'singleBedNonAc':
                        offerCheckboxInput = document.getElementById("singleBedNonAcOffer")
                        offerDiv = document.getElementById("singleBedNonAcOfferDiv")
                        finalPriceInput = document.getElementById("singleBedNonAcFinalPriceInput")
                        form = document.getElementById("singleBedNonAcForm")
                        break;

                    default:
                        break;
                }

                if (offerCheckboxInput.checked) {
                    offerDiv.style.display = "block"
                    finalPriceInput.disabled = true
                    form.reset()

                } else {
                    offerDiv.style.display = "none"
                    finalPriceInput.disabled = false
                    finalPriceInput.value = ""
                }
            }

            function calculateFinalPrice(typeOfRoom) {
                switch (typeOfRoom) {
                    case 'doubleBedAc':
                        var originalPrice = parseInt(document.getElementById("doubleBedAcOriginalPrice").value)
                        var offerPercentage = parseInt(document.getElementById("doubleBedAcOfferInput").value)
                        break;

                    case 'singleBedAc':
                        var originalPrice = parseInt(document.getElementById("singleBedAcOriginalPrice").value)
                        var offerPercentage = parseInt(document.getElementById("singleBedAcOfferInput").value)
                        break;

                    case 'doubleBedNonAc':
                        var originalPrice = parseInt(document.getElementById("doubleBedNonAcOriginalPrice").value)
                        var offerPercentage = parseInt(document.getElementById("doubleBedNonAcOfferInput").value)
                        break;

                    case 'singleBedNonAc':
                        var originalPrice = parseInt(document.getElementById("singleBedNonAcOriginalPrice").value)
                        var offerPercentage = parseInt(document.getElementById("singleBedNonAcOfferInput").value)
                        break;

                    default:
                        break;
                }

                deductingPrice = originalPrice * (offerPercentage / 100)
                finalPrice = originalPrice - deductingPrice


                switch (typeOfRoom) {
                    case 'doubleBedAc':
                        document.getElementById("doubleBedAcFinalPriceInput").value = finalPrice
                        break;

                    case 'singleBedAc':
                        document.getElementById("singleBedAcFinalPriceInput").value = finalPrice
                        break;

                    case 'doubleBedNonAc':
                        document.getElementById("doubleBedNonAcFinalPriceInput").value = finalPrice
                        break;

                    case 'singleBedNonAc':
                        document.getElementById("singleBedNonAcFinalPriceInput").value = finalPrice
                        break;

                    default:
                        break;
                }
            }
        </script>

        <script type="text/javascript" src="./../main.js"></script>
        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ./login.php");
}
?>