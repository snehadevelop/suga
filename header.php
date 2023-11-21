<?php
function isPageActive($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage == $pageName) {
        return 'class="active"'; // Add your CSS class for active links here
    } else {
        return '';
    }
}
?>

<!-- header end -->
<header class="header header-1">
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="header-right-socail">
                    <div class="social-profile d-flex align-items-center">
                        <div class="wather-box d-flex align-items-center gap-2">
                            <img src="assets/img/suga/wather.svg" alt="">
                            <p>28.5<sup>0</sup> USA</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 mx-3">
                            <a href="sponsor.php">Sponsor</a>
                            <a href="">Advertise</a>
                            <a href="contact-us.php">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="header-right-socail">
                    <div class="social-profile">
                        <p><i class="fas fa-circle"></i> <strong>LISTEN LIVE</strong> </p>
                    </div>
                </div>

                <div class="header-cta d-flex justify-content-end">
                    <div class="social-profile">
                        <ul class="menu">
                            <li><a href="https://www.facebook.com/people/SUGA-957-FM/100068881231506/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/suga957"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript:void;"><i class="fab fa-google"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC5BiMxPNdTUOrmWbmzegHaA"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/suga957"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="header-logo">
                            <div class="logo">
                                <a href="index">
                                    <img src="assets/img/suga/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="header-menu d-none d-xl-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="on-air.php">On Air</a>
                                        <ul>
                                            <li><a href="your-host.php">Your Host's</a></li>
                                            <li><a href="sechdule.php">Schedule</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news.php">News</a>
                                        <ul>
                                            <li><a href="entertainment.php">Entertainment</a></li>
                                            <li><a href="local-news.php">Local News</a></li>
                                            <li><a href="latest-news.php">latest News</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="sponsor.php">Sponsor</a>
                                        <ul>
                                            <li><a href="">Underwriting/Sponsorship Opportunities</a></li>
                                            <li><a href="">WSGD-LP Suga 95.7 FM Membership</a></li>
                                            <li><a href="">How to Build a Legacy</a></li>
                                            <li><a href="">WSGD-LP Suga 95.7 FM Corporate Circle</a></li>
                                            <li><a href="caribbean-delights.php">Caribbean Delights Deli</a></li>
                                            <li><a href="">Award Home Development &#038; Estate</a></li>
                                            <li><a href="">Life’s Cool Heating</a></li>
                                            <li><a href="">Attorney</a></li>
                                            <li><a href="">Waste management</a></li>
                                            <li><a href="frost-air-conditioning.php">Frost Air Conditioning, INC.</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="community.php">Community</a>
                                        <ul>
                                            <li><a href="">Press Release</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="last-songs-played.php">Last Songs Played</a>
                                    </li>

                                    <li>
                                        <a href="about-us.php">About</a>
                                        <ul>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="">FCC Licensing</a>
                                                <ul>
                                                    <li><a href="">WSGD-LP P.F, Suga 95.7 FM</a></li>
                                                    <li><a href="">WSGD-LP P.F, Suga 95.7 FM</a></li>
                                                    <li><a href="">WSGD-LP P.F, Suga 95.7 FM</a></li>

                                                </ul>

                                            </li>
                                            <li><a href="mission-vision.php">Mission & Vision</a></li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript:void;">More</a>
                                        <ul>
                                            <li><a href="contact-us.php">Contacts</a></li>
                                            <li><a href="">Carrer</a>
                                                <ul>
                                                    <li><a href="opportunity.php">Opportunity</a></li>
                                                    <li><a href="intern-opportunity.php">Intern Opportunity</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="sponsor.php">SPONSOR</a></li>
                                            <li><a href="eeoc-statements.php">EEOC Statements</a></li>
                                            <li><a href="">Contents</a></li>
                                            <li><a href="sechdule.php">Schedule</a></li>

                                        </ul>
                                    </li>




                                </ul>
                            </div>
                        </div>

                        <div class="header-right d-flex align-items-center position-relative">
                            <i class="fas fa-search" id="search-icon"></i>
                            <!-- Search Box (Initially Hidden) -->
                            <div id="search-box" style="display: none;">
                                <form class="search-item">
                                    <input type="text" id="search-input" placeholder="Search...">
                                    <button id="search-btn">Search</button>
                                </form>

                            </div>
                            <a href="donate.php" class="header-btn">Donate </a>
                            <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="fal fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu - responsive menu  -->
<div class="mobile-nav mobile-nav-red">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="on-air.php">On Air</a>
                        <ul>
                            <li><a href="your-host.php">Your Host's</a></li>
                            <li><a href="sechdule.php">Schedule</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="news.php">News</a>
                        <ul>
                            <li><a href="entertainment.php">Entertainment</a></li>
                            <li><a href="local-news.php">Local News</a></li>
                            <li><a href="latest-news.php">latest News</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="sponsor.php">Sponsor</a>
                        <ul>
                            <li><a href="">Underwriting/Sponsorship Opportunities</a></li>
                            <li><a href="">WSGD-LP Suga 95.7 FM Membership</a></li>
                            <li><a href="">How to Build a Legacy</a></li>
                            <li><a href="">WSGD-LP Suga 95.7 FM Corporate Circle</a></li>
                            <li><a href="caribbean-delights.php">Caribbean Delights Deli</a></li>
                            <li><a href="">Award Home Development &#038; Estate</a></li>
                            <li><a href="">Life’s Cool Heating</a></li>
                            <li><a href="">Attorney</a></li>
                            <li><a href="">Waste management</a></li>
                            <li><a href="frost-air-conditioning.php">Frost Air Conditioning, INC.</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="community.php">Community</a>
                        <ul>
                            <li><a href="">Press Release</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="last-songs-played.php">Last Songs Played</a>
                    </li>

                    <li>
                        <a href="about-us.php">About</a>
                        <ul>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="">FCC Licensing</a>
                                <ul>
                                    <li><a href="">WSGD-LP P.F, Suga 95.7 FM</a></li>
                                    <li><a href="">WSGD-LP P.F, Suga 95.7 FM</a></li>
                                    <li><a href="">WSGD-LP P.F, Suga 95.7 FM</a></li>

                                </ul>

                            </li>
                            <li><a href="mission-vision.php">Mission & Vision</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void;">More</a>
                        <ul>
                            <li><a href="contact-us.php">Contacts</a></li>
                            <li><a href="">Carrer</a>
                                <ul>
                                    <li><a href="opportunity.php">Opportunity</a></li>
                                    <li><a href="intern-opportunity.php">Intern Opportunity</a></li>
                                </ul>
                            </li>

                            <li><a href="sponsor.php">SPONSOR</a></li>
                            <li><a href="eeoc-statements.php">EEOC Statements</a></li>
                            <li><a href="">Contents</a></li>
                            <li><a href="sechdule.php">Schedule</a></li>

                        </ul>
                    </li>




                </ul>
            </div>
            <style>
                .sidebar-nav__bottom-social i {
                    font-size: 20px;
                }
            </style>
            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-social text-center">
                    <h6 class="color-white mt-5 mb-2">Follow On:</h6>
                    <ul>
                        <li><a href="https://www.facebook.com/people/SUGA-957-FM/100068881231506/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/suga957"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void;"><i class="fab fa-google"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC5BiMxPNdTUOrmWbmzegHaA"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/suga957"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
<!-- header end -->

<div class="header-gutter home"></div><!-- header end -->