<?php

$rooms_final_price['double_bed_ac'] = 1050;
$rooms_final_price['single_bed_ac'] = 840;

$rooms_final_price['double_bed_non_ac'] = 630;
$rooms_final_price['single_bed_non_ac'] = 455;


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
        html {
            background-color: #171717
        }

        .mt-100 {
            margin-top: 100px;
        }

        label {
            color: white
        }

        .hr-grey {
            padding-top:30px;
            padding-bottom:30px;
            border-bottom: 2px solid grey ;
        }
    </style>
</head>

<body>
    <div style="height: 60px; position:fixed; z-index:10000; background-color: #303030; width: 100%; box-shadow: 0px 1px 8px 0px #888888;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <center><img src="./../img/logo/logo_name_white.png" style="height:30px;  margin-top:15px"></center>
            </div>
            <div class="col-2"></div>
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

                    default:
                        break;
                }

                deductingPrice = originalPrice * (offerPercentage / 100)
                finalPrice = originalPrice - deductingPrice


                switch (typeOfRoom) {
                    case 'doubleBedAc':
                        document.getElementById("doubleBedAcFinalPriceInput").value = finalPrice
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