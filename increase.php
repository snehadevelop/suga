<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="dev_raj" />
    <!-- ======== Page title ============ -->
    <title>Suga</title>
    <meta name="description" content="Suga" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/solar/favicon.png" />
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css" />

    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />


    <!-- template main style css file -->
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="responsive.css" />
    <link rel="stylesheet" href="sneha.css" />


</head>


<body class="body-wrapper">
    <!-- start navbar main header  -->
    <?php
    include "header.php";
    ?>
    <!-- end navbar -->
    <!-- welcome content start from here -->

    <!-- main banner section start -->
    <section class="main-inner-banner coverbg" style="background: var(--gbg), url(assets/img/sugas/onair-banner.webp)">
        <div class="container">
            <div class="banner-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Increase your contribution</li>
                    </ol>
                </nav>
                <h1>Increase your contribution to SUGA 95.7 FM</h1>
            </div>
        </div>
    </section>

    <!-- Main banner section code end -->
    <section class="main-contact-section">
        <div class="container">
            <div class="main-icontact-box">
                <div class="icontact-form-box py-2">
                    <div class="heading-box">
                        <h2 class="color-secondary text-uppercase">Amount Pledging</h2>

                    </div>

                    <form>
                        <div class="form-top-box">
                            <h5 class="color-lblack pb-4">How would you like to increase your monthly donation?</h5>
                            <div class="donation-amount-section">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="donationAmount" id="donation10" value="10">
                                    <label class="form-check-label" for="donation10">Per Month - $10</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="donationAmount" id="donation15" value="15">
                                    <label class="form-check-label" for="donation15">Per Month - $15</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="donationAmount" id="donation20" value="20">
                                    <label class="form-check-label" for="donation20">Per Month - $20</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="donationAmount" id="donation25" value="25">
                                    <label class="form-check-label" for="donation25">Per Month - $25</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="donationAmount" id="donation30" value="30">
                                    <label class="form-check-label" for="donation30">Per Month - $30</label>
                                </div>
                                <!-- Optionally, you can add a custom amount input here -->
                            </div>
                            <div class="form-group p-0 pb-3">
                                <label for="">Custom Payment Amount</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <h5 class="color-lblack pb-4">Please enter your information in the form below.</h5>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="form-group">
                                    <label for="">State/Prov</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="form-group">
                                    <label for="">Zip/Postal</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class=" col-md-6 p-0">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email">
                                </div>
                            </div>

                        </div>

                        <div class="btncontact pt-4">
                            <button type="submit">Continue Payment</button>
                        </div>


                    </form>


                </div>



            </div>


        </div>
    </section>

    <!-- Footer code start -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer code end -->
    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>