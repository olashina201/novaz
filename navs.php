<?php

include("./cpanel/link.php");
session_start();


?>
<header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">

    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="./"><img src="img/mlogo.png" height="90" alt="Logo"></a>
                        </div>
                        <div class="get-support clearfix d-none">
                            <div class="get-support-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="get-support-info">
                                <h6>Get Support</h6>
                                <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li><a href="./">Home</a>

                                    </li>
                                    <li class="menu-icon"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="apartment">Apartments</a></li>
                                            <li><a href="hostel">Hostel</a></li>
                                            <li><a href="houses">Houses</a></li>
                                            <li><a href="shortlet">Shortlet</a></li>
                                            <li><a href="land">Lands</a></li>
                                            <li><a href="offices">Offices</a></li>
                                            <li><a href="shop">Shops</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about">About</a></li>
                                            <li><a href="service">Services</a></li>

                                            <li><a href="faq">FAQ</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">

                    <!-- user-menu -->
                    <div class="ltn__drop-menu user-menu">
                        <?php
                        if ($_SESSION) {
                            $uml =  $_SESSION['US_mail'];

                            $qry  = mysqli_query($link, "SELECT * FROM user WHERE email = '$uml' ");
                            $dprw = mysqli_fetch_array($qry); ?>
                            <ul>
                                <li>
                                    <a href="#" class="rounded-circle"><img class="rounded-circle img-fluid" style="height: 45px; width: 43px" src="./upreg/<?php echo $dprw['uimg'] ?>" alt="User Image"></a>
                                    <ul>
                                        <li><a href="users/dashboard">My Account</a></li>
                                        <li><a href="users/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php  } else { ?>
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <li><a href="users/login">Sign in</a></li>
                                        <li><a href="users/register">Register</a></li>
                                        <li><a href="users/dashboard">My Account</a></li>

                                    </ul>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                    <!-- mini-cart -->
                    <div>
                        <!-- header-top-btn -->
                        <div class="header-top-btn">
                            <a href="users/add-listing">Add Listing</a>
                        </div>
                    </div>
                    <!-- mini-cart -->
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>