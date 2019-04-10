<?php
include "../../../../../config.php";
include 'menus.php';
testConnexion();
$db=config::getConnexion();
?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Mirora - Watch & Luxury Store Bootstrap 4 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Elegent Icon CSS -->
    <link rel="stylesheet" href="assets/css/elegent-icons.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  
        <!-- Breadcumb area End -->

        <!-- Main Content wrapper start -->

        <section class="main-content-wrapper">
            <div class="account-wrapper pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="user-dashboard-tab">
                        <div class="row">
                            <div class="col-lg-4 mb-md--30">
                                <div class="user-dashboard-tab__head nav flex-column" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">Orders</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#downloads" aria-controls="downloads" aria-selected="true">Downloads</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Addresses</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</a>
                                    <a class="nav-link" href="login-register.html">Logout</a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        <p>Hello <strong>John</strong> (not <strong>John</strong>? <a href="login.html">Log out</a>)</p>
                                        <p>From your account dashboard. you can easily check & view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details</a>.</p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <div class="account-table table-content table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column">$25.00 for 1 item</td>
                                                        <td><a href="#" class="btn btn-medium btn-style-1">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column">$25.00 for 1 item</td>
                                                        <td><a href="#" class="btn btn-medium btn-style-1">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="downloads">
                                        <div class="account-table table-content table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Downloads</th>
                                                        <th>Expires</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wide-column">Volga - Ecommerce Bootstrap Template</td>
                                                        <td class="wide-column">August 10, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn btn-medium btn-style-1">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wide-column">Volga - Ecommerce Bootstrap Template</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn btn-medium btn-style-1">Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addresses">
                                        <div class="billing-address mb--20">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <h4>BILLING ADDRESS</h4>
                                            <a href="#" data-attr="#billing_address" class="btn btn-medium btn-style-1 expand_action">Edit</a>
                                            <div class="address-form bg--2 mt--20 hide-in-default" id="billing_address">
                                                <form action="#" class="form">
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="billing_fname" class="form__label">First Name <span>*</span></label>
                                                            <input type="text" name="billing_fname" id="billing_fname" class="form__input form__input--2">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="billing_lname" class="form__label">Last Name <span>*</span></label>
                                                            <input type="text" name="billing_lname" id="billing_lname" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label">Company</label>
                                                            <input type="text" name="billing_company" id="billing_company" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_country" class="form__label">Country</label>
                                                            <select name="billing_country" id="billing_country" class="form__input form__input--2 nice-select">
                                                                <option value="">Select a country…</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD" selected="selected">Bangladesh</option>
                                                                <option value="BD">Brazil</option>
                                                                <option value="CN">China</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="FR">France</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="RU">Russia</option>
                                                                <option value="KR">South Korea</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom (UK)</option>
                                                                <option value="US">United States (US)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_streetAddress" class="form__label">Street Address</label>
                                                            <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                            <input type="text" name="billing_apartment" id="billing_apartment" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_city" class="form__label">Town/City <span>*</span></label>
                                                            <input type="text" name="billing_city" id="billing_city" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_district" class="form__label">District <span>*</span></label>
                                                            <select name="billing_district" id="billing_district" class="form__input form__input--2 nice-select">
                                                                <option value="">Select a District…</option>
                                                                <option>BARISAL</option>
                                                                <option>BHOLA</option>
                                                                <option>BANDARBAN</option>
                                                                <option>BRAHMANBARIA</option>
                                                                <option>CHANDPUR</option>
                                                                <option>CHITTAGONG</option>
                                                                <option>COMILLA</option>
                                                                <option>COX'S BAZAR</option>
                                                                <option>DHAKA</option>
                                                                <option>FARIDPUR</option>
                                                                <option>FENI</option>
                                                                <option>GAZIPUR</option>
                                                                <option>GOPALGANJ</option>
                                                                <option>JAMALPUR</option>
                                                                <option>KHAGRACHHARI</option>
                                                                <option>KISHOREGONJ</option>
                                                                <option>LAKSHMIPU</option>
                                                                <option>RMADARIPUR</option>
                                                                <option>MUNSHIGANJ</option>
                                                                <option>MYMENSINGH</option>
                                                                <option>NARAYANGANJ</option>
                                                                <option>NARSINGDI</option>
                                                                <option>NETRAKONA</option>
                                                                <option>NOAKHALI</option>
                                                                <option>RANGAMATI </option>
                                                                <option>RAJBARI</option>
                                                                <option>SHARIATPUR</option>
                                                                <option>SHERPUR</option>
                                                                <option>TANGAIL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_zip" class="form__label">Post/Zip Code <span>*</span></label>
                                                            <input type="text" name="billing_zip" id="billing_zip" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="billing_phone" class="form__label">Phone</label>
                                                            <input type="text" name="billing_phone" id="billing_phone" class="form__input form__input--2">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="billing_email" class="form__label">Email Address <span>*</span></label>
                                                            <input type="email" name="billing_email" id="billing_email" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form__group col-12">
                                                            <button type="submit" class="btn btn-medium btn-style-1">Save Address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shipping-address">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <h4>Shipping ADDRESS</h4>
                                            <a href="#" data-attr="#shipping_address" class="btn btn-medium btn-style-1 expand_action">Edit</a>
                                            <div class="address-form bg--2 mt--20 hide-in-default" id="shipping_address">
                                                <form action="#" class="form">
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="shipping_fname" class="form__label">First Name <span>*</span></label>
                                                            <input type="text" name="shipping_fname" id="shipping_fname" class="form__input form__input--2">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="shipping_lname" class="form__label">Last Name <span>*</span></label>
                                                            <input type="text" name="shipping_lname" id="shipping_lname" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_company" class="form__label">Company</label>
                                                            <input type="text" name="shipping_company" id="shipping_company" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_country" class="form__label">Country</label>
                                                            <select id="shipping_country" name="shipping_country" class="form__input form__input--2 nice-select">
                                                                <option value="">Select a country…</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD" selected="selected">Bangladesh</option>
                                                                <option value="BD">Brazil</option>
                                                                <option value="CN">China</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="FR">France</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="RU">Russia</option>
                                                                <option value="KR">South Korea</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom (UK)</option>
                                                                <option value="US">United States (US)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_streetAddress" class="form__label">Street Address</label>
                                                            <input type="text" name="shipping_streetAddress" id="shipping_streetAddress" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                            <input type="text" name="shipping_apartment" id="shipping_apartment" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_city" class="form__label">Town/City <span>*</span></label>
                                                            <input type="text" name="shipping_city" id="shipping_city" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_district" class="form__label">Distring <span>*</span></label>
                                                            <select name="shipping_district" id="shipping_district" class="form__input form__input--2 nice-select">
                                                                <option value="">Select a District…</option>
                                                                <option>BARISAL</option>
                                                                <option>BHOLA</option>
                                                                <option>BANDARBAN</option>
                                                                <option>BRAHMANBARIA</option>
                                                                <option>CHANDPUR</option>
                                                                <option>CHITTAGONG</option>
                                                                <option>COMILLA</option>
                                                                <option>COX'S BAZAR</option>
                                                                <option>DHAKA</option>
                                                                <option>FARIDPUR</option>
                                                                <option>FENI</option>
                                                                <option>GAZIPUR</option>
                                                                <option>GOPALGANJ</option>
                                                                <option>JAMALPUR</option>
                                                                <option>KHAGRACHHARI</option>
                                                                <option>KISHOREGONJ</option>
                                                                <option>LAKSHMIPU</option>
                                                                <option>RMADARIPUR</option>
                                                                <option>MUNSHIGANJ</option>
                                                                <option>MYMENSINGH</option>
                                                                <option>NARAYANGANJ</option>
                                                                <option>NARSINGDI</option>
                                                                <option>NETRAKONA</option>
                                                                <option>NOAKHALI</option>
                                                                <option>RANGAMATI </option>
                                                                <option>RAJBARI</option>
                                                                <option>SHARIATPUR</option>
                                                                <option>SHERPUR</option>
                                                                <option>TANGAIL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_zip" class="form__label">Post/Zip Code <span>*</span></label>
                                                            <input type="text" name="shipping_zip" id="shipping_zip" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="shipping_phone" class="form__label">Phone</label>
                                                            <input type="text" name="shipping_phone" id="shipping_phone" class="form__input form__input--2">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="shipping__email" class="form__label">Email Address <span>*</span></label>
                                                            <input type="email" name="shipping__email" id="shipping__email" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form__group col-12">
                                                            <button type="submit" class="btn btn-5 btn-style-2">Save Address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <div class="account-form bg--2">
                                            <form action="#" class="form">
                                                <div class="form-row mb--20">
                                                    <div class="col-md-6 mb-sm--20">
                                                        <div class="form__group">
                                                            <label for="account_fname" class="form__label">First Name</label>
                                                            <input type="text" name="account_fname" id="account_fname" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <label for="account_lname" class="form__label">First Name</label>
                                                            <input type="text" name="account_lname" id="account_lname" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="user_email" class="form__label">Email Address</label>
                                                            <input type="email" name="user_email" id="user_email" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <h4>PASSWORD CHANGE</h4>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="cur_password" class="form__label">Current Password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="cur_password" id="cur_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="new_password" class="form__label">New Password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="new_password" id="new_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="new_password" class="form__label">Confirm Password</label>
                                                            <input type="password" name="confirm_password" id="confirm_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-medium btn-style-2">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>
        </section>

        <!-- Main Content wrapper end -->

        <!-- Footer Start -->
        <footer class="footer border-top ptb--40 ptb-md--30">
            <div class="container">
                <div class="row mb--40 mb-md--30">
                    <div class="col-lg-4 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">About Mirora</h3>
                            <div class="widget-content mb--20">
                                <p>Address: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                                <p>Phone: (012) 800 456 789</p>
                                <p>Fax: (012) 800 456 789</p>
                                <p>Email: Contact@plazathemes.com</p>
                            </div>
                            <ul class="social social-round">
                                <li class="social__item">
                                    <a class="social__link" href="facebook.com">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="twitter.com">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="youtube.com">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="instagram.com">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="plus.google.com">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Information</h3>
                            <ul class="widget-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-sm--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Extras</h3>
                            <ul class="widget-menu">
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="widget-title">Custom Products</h3>
                            <div class="widget-product">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="assets/img/products/11-450x450.jpg" alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <img src="assets/img/products/11-450x450.jpg" alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb--40 mb-md--30">
                    <div class="col-12">
                        <ul class="footer-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Online Store</a></li>
                            <li><a href="#">Promotion</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copyright-text">Copyright &copy; 2018 <a href="#">HasTech</a> .All Right Reserved.</p>
                        <img src="assets/img/others/payment.png" alt="payment">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Scroll To Top Start -->    
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->

        <!-- Popup Subscribe Box Start -->

        <div class="popup-subscribe-box" id="subscribe-popup">
            <div class="popup-subscribe-box-content">
                <div class="popup-subscribe-box-body">
                    <a href="#subscribe-popup" class="popup-close">close</a>
                    <h3>NEWSLETTER</h3>
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                    <form class="popup-subscribe-form validate" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                        <input type="email" name="popup-subscribe-email" id="popup-subscribe-email" placeholder="Enter your email here...">
                        <input type="submit" value="Subscribe" class="btn subscribe-btn btn-medium btn-style-1">
                        <div class="form-group text-center mt--20">
                            <input type="checkbox" name="hide-popup" id="hide-popup">
                            <label for="hide-popup"> Don't show this popup again </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Popup Subscribe Box End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">Close</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-sm--20">
                            <div class="tab-content product-thumb-large">
                                <div id="thumb1" class="tab-pane active show fade">
                                    <img src="assets/img/products/1-1-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb2" class="tab-pane fade">
                                    <img src="assets/img/products/2-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb3" class="tab-pane fade">
                                    <img src="assets/img/products/10-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb4" class="tab-pane fade">
                                    <img src="assets/img/products/11-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb5" class="tab-pane fade">
                                    <img src="assets/img/products/12-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb6" class="tab-pane fade">
                                    <img src="assets/img/products/13-600x600.jpg" alt="product thumb">
                                </div>
                            </div>
                            <div class="product-thumbnail">
                                <div class="thumb-menu" id="modal-thumbmenu">
                                    <div class="thumb-menu-item">
                                        <a href="#thumb1" data-toggle="tab" class="nav-link active">
                                            <img src="assets/img/products/1-1-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb2" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/2-2-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb3" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/10-10-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb4" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/11-11-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb5" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/12-12-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb6" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/13-13-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="modal-box product">
                                <h3 class="product-title">Acer Aspire E 15</h3>
                                <div class="ratings mb--20">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="product-detail-list list-unstyled mb--20">
                                    <li>Brand: <a href="#">Apple</a></li>
                                    <li>Product Code: Watches</li>
                                    <li>Reward Points: 600</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                                <div class="product-price border-bottom pb--20 mb--20">
                                    <span class="regular-price">$100.50</span>
                                    <span class="sale-price">$98.98</span>
                                </div>
                                <div class="product-options mb--20">
                                    <h3>Available Options</h3>
                                    <div class="form-group">
                                        <label><sup>*</sup>Color Switch</label>
                                        <select>
                                            <option> --- Please Select --- </option>
                                            <option>Black</option>
                                            <option>Blue</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-action-wrapper mb--20">
                                    <div class="product-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="wishlist.html">+Add to wishlist</a>
                                        <a href="compare.html">+Add to compare</a>
                                    </div>
                                </div>  
                                <p class="product-tags">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
</html>