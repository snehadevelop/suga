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
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

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
        <section class="main-inner-banner coverbg" style="background: var(--gbg), url(assets/img/sugas/schedule-banner.webp)">
            <div class="container">
                <div class="banner-content">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">schedule</li>
                        </ol>
                    </nav>
                    <h1>Schedule</h1>
                </div>
            </div>
        </section>
        <!-- Main banner section code end -->

        <!-- schedule section start  -->
        <section class="main-schedule-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12 col-xs-12 py-2">
                        <div class="main-heading">
                            <div class="tabs">
                                <div class="daily active" id="daily-tab"> <!-- 'active' class added here -->
                                    <h3>Daily Schedule</h3>
                                </div>
                                <div class="weekly" id="weekly-tab">
                                    <h3>Weekly Schedule</h3>
                                </div>
                            </div>
                        </div>


                        <div class="main-inside-box" id="daily-schedule">
                            <h2 class="color-black">Today - Monday</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>6:00 am</h5>
                                        <h6 class="py-2">THE SUGA MORNING DRIVE, MIX &
                                            NEWS with Sean Duncan.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>8:00 am</h5>
                                        <h6 class="py-2">THE MORNING MIX with DJ
                                            Augustus.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>6:00 am</h5>
                                        <h6 class="py-2">THE SUGA MORNING DRIVE, MIX &
                                            NEWS with Sean Duncan.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>8:00 am</h5>
                                        <h6 class="py-2">THE MORNING MIX with DJ
                                            Augustus.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>6:00 am</h5>
                                        <h6 class="py-2">THE SUGA MORNING DRIVE, MIX &
                                            NEWS with Sean Duncan.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>8:00 am</h5>
                                        <h6 class="py-2">THE MORNING MIX with DJ
                                            Augustus.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>6:00 am</h5>
                                        <h6 class="py-2">THE SUGA MORNING DRIVE, MIX &
                                            NEWS with Sean Duncan.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 py-2">
                                    <div class="routine-box">
                                        <h5>8:00 am</h5>
                                        <h6 class="py-2">THE MORNING MIX with DJ
                                            Augustus.</h6>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-inside-box" id="weekly-schedule" style="display: none;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">TIME</th>
                                        <th scope="col">SUNDAY</th>
                                        <th scope="col">MONDAY</th>
                                        <th scope="col">Tuesday</th>
                                        <th scope="col">Wednesday</th>
                                        <th scope="col">Thursday</th>
                                        <th scope="col">Friday</th>
                                        <th scope="col">Saturday</th>
                                        <!-- Add other days -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row" data-label="TIME">
                                            <p>0600a</p>
                                            <p>0700a</p>
                                            <p>0800a</p>
                                            <p>0900a</p>
                                            <p>1000a</p>
                                        </td>
                                        <td data-label="SUNDAY">Sunday
                                            Inspirational
                                            Gospel</td>
                                        <td data-label="MONDAY">THE SUGA
                                            MORNING DRIVE
                                            MIX & NEWS
                                            [Yam, Banana,
                                            Ackee and
                                            Saltfish]</td>
                                        <td data-label="TUESDAY">THE SUGA
                                            MORNING DRIVE
                                            MIX & NEWS [Yam,
                                            Banana, Ackee
                                            and Saltfish]</td>
                                        <td data-label="WEDNESDAY">THE SUGA
                                            MORNING DRIVE
                                            MIX & NEWS
                                            [Yam, Banana,
                                            Ackee and
                                            Saltfish]</td>
                                        <td data-label="THURSDAY">THE SUGA
                                            MORNING DRIVE
                                            MIX & NEWS
                                            [Yam, Banana,
                                            Ackee and
                                            Saltfish]</td>
                                        <td data-label="FRIDAY">THE SUGA
                                            MORNING DRIVE
                                            MIX & NEWS
                                            [Yam, Banana,
                                            Ackee and
                                            Saltfish]</td>
                                        <td data-label="SATURDAY">Saturday Morning
                                            Feva In The
                                            Ja'niya & Trey
                                            World - Sat
                                            Reggae Hip
                                            Hop & R&B</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="TIME">
                                            <p>1000a12 </p>
                                            <p>NOON </p>
                                            <p>0100p</p>
                                            <p>0200p</p>
                                        </td>
                                        <td data-label="SUNDAY">
                                            <p>Sunday
                                                Inspirational
                                                Gospel</p>
                                        </td>
                                        <td data-label="MONDAY">
                                            <p class="pb-2">
                                                The Lunch Mix
                                                & News
                                            </p>
                                            <p>Guest Mix DJ</p>
                                        </td>
                                        <td data-label="TUESDAY">
                                            <p class="pb-2">
                                                The Lunch Mix
                                                & News
                                            </p>
                                            <p>Guest Mix DJ</p>
                                        </td>
                                        <td data-label="WEDNESDAY">
                                            <p class="pb-2">
                                                The Lunch Mix
                                                & News
                                            </p>
                                            <p>Guest Mix DJ</p>
                                        </td>
                                        <td data-label="THURSDAY">
                                            <p class="pb-2">
                                                The Lunch Mix
                                                & News
                                            </p>
                                            <p>Guest Mix DJ</p>
                                        </td>
                                        <td data-label="FRIDAY">
                                            <p class="pb-2">
                                                The Lunch Mix
                                                & News
                                            </p>
                                            <p>Guest Mix DJ</p>
                                        </td>
                                        <td data-label="SATURDAY">
                                            <p>Love Is Our
                                                Religion –
                                                Reggae,
                                                R&B, Soca</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="TIME">
                                            <p>0200p </p>
                                            <p>0300p </p>
                                            <p>0400p</p>
                                        </td>
                                        <td data-label="SUNDAY">
                                            <p>Your Health
                                                Is Your Wealth</p>
                                        </td>
                                        <td data-label="MONDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="TUESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="WEDNESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="THURSDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="FRIDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="SATURDAY">
                                            <p>Blazin Saturday –
                                                Reggae, Hip
                                                Hop, R&B</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="TIME">
                                            <p>0200p </p>
                                            <p>0300p </p>
                                            <p>0400p</p>
                                        </td>
                                        <td data-label="SUNDAY">
                                            <p>Your Health
                                                Is Your Wealth</p>
                                        </td>
                                        <td data-label="MONDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="TUESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="WEDNESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="THURSDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="FRIDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="SATURDAY">
                                            <p>Blazin Saturday –
                                                Reggae, Hip
                                                Hop, R&B</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="TIME">
                                            <p>0200p </p>
                                            <p>0300p </p>
                                            <p>0400p</p>
                                        </td>
                                        <td data-label="SUNDAY">
                                            <p>Your Health
                                                Is Your Wealth</p>
                                        </td>
                                        <td data-label="MONDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="TUESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="WEDNESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="THURSDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="FRIDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="SATURDAY">
                                            <p>Blazin Saturday –
                                                Reggae, Hip
                                                Hop, R&B</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row" data-label="TIME">
                                            <p>0200p </p>
                                            <p>0300p </p>
                                            <p>0400p</p>
                                        </td>
                                        <td data-label="SUNDAY">
                                            <p>Your Health
                                                Is Your Wealth</p>
                                        </td>
                                        <td data-label="MONDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="TUESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="WEDNESDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="THURSDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="FRIDAY">
                                            <p>
                                                The Afternoon
                                                Drive</p>
                                        </td>
                                        <td data-label="SATURDAY">
                                            <p>Blazin Saturday –
                                                Reggae, Hip
                                                Hop, R&B</p>
                                        </td>
                                    </tr>
                                    <!-- Add other time slots -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-12 col-xs-12 py-2">
                        <div class="sponsor-box-oppor">

                            <div class="video-box">
                                <h4 class="color-secondary pb-2">SPONSOR US</h4>
                                <img class="img-fluid w-100" src="assets/img/suga/sponsor1.png" alt="">
                            </div>
                            <div class="img-btn-box">
                                <img class="img-fluid w-100" src="assets/img/suga/sponsor2.png" alt="">
                                <div class="btntwo btnbox">
                                    <a href="" class="m-auto"> DONATE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- schedule section end  -->

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



        <script>
            // JavaScript to toggle between tabs
            document.getElementById("daily-tab").addEventListener("click", function() {
                document.getElementById("daily-schedule").style.display = "block";
                document.getElementById("weekly-schedule").style.display = "none";
            });

            document.getElementById("weekly-tab").addEventListener("click", function() {
                document.getElementById("daily-schedule").style.display = "none";
                document.getElementById("weekly-schedule").style.display = "block";
            });


            // active tab 
            // Example JavaScript to toggle active class on tabs
            document.querySelectorAll('.main-schedule-section .tabs div').forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    document.querySelectorAll('.main-schedule-section .tabs div').forEach(otherTab => {
                        otherTab.classList.remove('active');
                    });

                    // Add active class to clicked tab
                    this.classList.add('active');
                });
            });
        </script>
    </body>

    </html>