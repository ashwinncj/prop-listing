<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Propkorneradmin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
        <div></div>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#">Home </a></li>
                    <li> <a href="http://propkorner.com" target="blank">Dashboard </a></li>
                    <li> <a href="#">My Listings</a><a href="#" style="font-size: 14px;"><em>Add Listing</em></a></li>
                    <li> <a href="#">Enquiries</a></li>
                </ul>
            </div>
            <div class="page-content-wrapper">
                <div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div>
                                <h1>Add Listing&nbsp;</h1>
                            </div>
                            <p></p>
                        </div>
                        <div class="col-xs-12">

                            <div class="col-md-3 col-lg-10 offset-lg-1 text-center" style="margin-bottom: -39px;margin-top: 30px;"><label style="width: 100%;font-size: 19px;">Post Property</label>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="sale-rent" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2" style="font-size: 17px;">For Sale</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="sale-rent" value="YES" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="font-size: 17px;">For Rent</label></div>
                            </div>
                            <div>
                                <div class="container">
                                    <div class="row" style="margin-top: 50px;">
                                        <div class="col-md-6 col-lg-5 offset-lg-1">
                                            <div class="radel-text-input"><input type="text" name="prop_name" value=""><label value="">Property Name</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <div class="radel-text-input"><input type="text" name="prop_price" value=""><label>Price</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 offset-lg-1">
                                            <div class="radel-text-input"><input type="text" name="addr_1" value=""><label>Address Line 1</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <div class="radel-text-input"><input type="text" name="prop_area" value=""><label>Area</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 offset-lg-1">
                                            <div class="radel-text-input"><input type="text" name="addr_2" value=""><label>Address Line 2</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <div class="radel-text-input"><input type="text" value=""><label>Status</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 offset-lg-1">
                                            <div class="radel-text-input"><input type="text" name="prop_locality" value=""><label>Locality</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <div class="radel-text-input"><input type="text" name="prop_bhk" value=""><label>BHK</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 offset-lg-1">
                                            <div class="radel-text-input"><input type="text" name="prop_pincode" value=""><label>Pincode</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <div class="radel-text-input"><input type="text" name="prop_bath" value=""><label>No. Of Bathroom</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 offset-lg-1">
                                            <div class="radel-text-input"><input type="text" name="prop_city" value=""><label>City</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <div class="radel-text-input"><input type="text" name="prop_description" value=""><label>Description</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div><label style="margin: auto;width: 100%;text-align: center;font-size: 23px;text-decoration: underline;">Amenities</label>
                                <div class="container">
                                    <div class="row" style="padding-top: 19px;">
                                        <div class="col-md-3 col-lg-2 offset-lg-1 col-sm-4"><label style="width: 100%;">Parking</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_parking" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_parking" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Gym</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_gym" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_gym" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">CCTV Guildelines</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_cctv" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_cctv" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Club House</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_clubhouse" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_clubhouse" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Indoor Games</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_indoorgames" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_indoorgames" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 19px;">
                                        <div class="col-md-3 col-lg-2 offset-lg-1 col-sm-4"><label style="width: 100%;">Kids Area</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_kidsarea" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_kidsarea" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Lift</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_lift" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_lift" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Swimming</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_swimming" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_swimming" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Water Harvesting</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_waterharvesting" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_waterharvesting" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Power Backup</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_powerbackup" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_powerbackup" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 19px;border: 1px solid bloack;">
                                        <div class="col-md-3 col-lg-2 offset-lg-1 col-sm-4"><label style="width: 100%;">Water Sewage</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_watersewage" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_watersewage" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-sm-4"><label style="width: 100%;">Party Hall</label>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_partyhall" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="amn_partyhall" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="container">
                                    <div class="row" style="margin-top: 12px;">
                                        <div class="col-md-6 col-lg-4 offset-lg-4" style="margin-top: 17px;margin-bottom: 20px;height: 113px;border: 1px solid black;"><label style="height: 0px;margin-left: 132px;margin-top: 4px;">Add Images</label><input type="file" multiple="" style="margin-top: 21px;margin-bottom: 48px;width: 269px;margin-left: 15px;border: 1px solid black;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-10 offset-lg-1 text-center"><label style="width: 100%;font-size: 19px;margin-top: 38px;">Additional Information</label>
                                <div class="form-check form-check-inline"><input class="form-check-input additional-popup-yes" type="radio" name="additional-info" value="Yes" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input additional-popup-no" type="radio" name="additional-info" value="NO" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
                            </div>
                            <div>
                                <div class="container popup" style="display: none;">
                                    <div class="row" style="margin-bottom: -1px;border: 1px solid black;margin-right: 60px;margin-left: 70px;">
                                        <div class="col-md-6 col-lg-5 offset-lg-1"><label style="font-size: 17px;">Preferred Tenants :</label>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Family</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Bachelor</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Commercial</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-2"><label style="font-size: 17px;">Facing :&nbsp;</label>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-2"><label class="form-check-label" for="formCheck-2">North</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-2"><label class="form-check-label" for="formCheck-2">South</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-2"><label class="form-check-label" for="formCheck-2">East</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-3"><label class="form-check-label" for="formCheck-3">West</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-2"><label>&nbsp;</label>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-2"><label class="form-check-label" for="formCheck-2">North-East</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-2"><label class="form-check-label" for="formCheck-2">North-West</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-2"><label class="form-check-label" for="formCheck-2">South-East</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="facing" id="formCheck-3"><label class="form-check-label" for="formCheck-3">South-West</label></div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 36px;border: 1px solid black;margin-right: 60px;margin-left: 70px;">
                                        <div class="col-md-6 col-lg-4 offset-lg-1"><label style="font-size: 17px;">Property feature</label>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="property-feature" value="yes" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Not Furnished</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="property-feature" value="yes" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Semi Furnished</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="property-feature" value="yes" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Fully Furnished</label></div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 offset-lg-0"><label style="font-size: 17px;margin-top: 25px;">Floor no. :&nbsp;</label><input type="text" style="width: 125px;margin-left: 17px;height: 24px;"><label style="font-size: 17px;">Total floors :&nbsp;</label><input type="text" style="width: 125px;height: 25px;"></div>
                                        <div
                                            class="col-md-6 col-lg-3"><label>&nbsp;</label><label style="font-size: 17px;">Extras :&nbsp;</label>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="extras" id="formCheck-2"><label class="form-check-label" for="formCheck-2" style="font-size: 15px;">has store room</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="extras" id="formCheck-2"><label class="form-check-label" for="formCheck-2">has prayer room</label></div>
                                            <div class="form-check"><input class="form-check-input" type="radio" name="extras" id="formCheck-3"><label class="form-check-label" for="formCheck-3">has power backup</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4"><button class="btn btn-primary align-items-center" type="submit" style="background-color: rgb(88,170,141);margin-top: -6px;margin-left: 146px;">Button</button></div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
                            <script src="assets/js/script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>

</html>