<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AasanBooking is a Service-based company. In which, we are transforming Bus Services from a traditional booking system to an online booking system and provide people a highly convenient services through a Mobile Application. where they will find multiple Bus Services on one platform and book their tickets as per their choice from anywhere and anytime.">
    <meta name="keywords" content="Booking, Service">
    <meta name="author" content="Aasan Booking">
    <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->
    <!-- For partners slider -->

    <!--  For partners slider -->
    <link rel="stylesheet" href="css/style.css" />



    <title>AasanBooking</title>

    @livewireStyles
</head>

<body>

    <header>

        <nav class="navbar">
            <a href="{{route('home')}}" class="navbar-brand"><img class="logo" src="./images/page/logo.png" alt="Brand Logo" /></a>
            <a id="hamburger" class="hamburger" onclick="toogleMenu()" href="#"><img class="menu-icon" src="./images/icons/menuIcon.png" alt="Menu-Button"></a>
            <ul id="nav" class="nav">

                <li class="nav-item "><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item "><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

            </ul>

        </nav>

        <div class="hero-section mb-4">
            <div class="hero-details">
                <h1 class="hero-text"><span class="hero-title">Ab Book Karo <br> Aasani Say!</span></h1>
                <!-- <p class="hero-description">Lorem ipsum dollat, dolores commodi! Laudantium, officia!
                    Lorem ipsum dollat, dolores commodi! Laudantium, officia!
                </p>   -->
                <div class="hero-section-but">

                    <button class="hero-button hero-about-button" role="button" onclick="location.href = './login' ">login</button>
                    <button class="hero-button hero-contact-button" role="button" onclick="location.href = './register' ">Sign Up</button>

                </div>
            </div>
            <img class="bg-image" src="./images/page/buildings.png" alt="Background Image">
        </div>
    </header>
    <main>
        <section>
            <livewire:search-booking />
        </section>
        <section class="procedure-section">
            <div class="booking-procedure">
                <h1><span class="procedure-title">Follow 3 Steps To</span></h1>
                <h1><span class="procedure-title">Get Your Online Ticket</span></h1>
                <div class="steps-box">
                    <div class="box box1">
                        <img src="./images/icons/route.png" alt="Route-icon">
                        <h3>Search Your Route</h3>
                        <p>Select your bus route by providing basic data in respective tabs. </p>
                    </div>
                    <div class="box box2">
                        <img src="./images/icons/seat.png" alt="seat-icon">
                        <h3>Book Your Seat</h3>
                        <p>Choose the best service and book the seat of your choice.</p>
                    </div>
                    <div class="box box3">
                        <img src="./images/icons/pay.png" alt="pay-icon">
                        <h3>Select Your Payment Method</h3>
                        <p>We provide you with the safest and most secure payment method when you book your ticket.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="why-chose-us">

            <div class="why-chose-us-text-section">
                <h3><span class="why-chose-us-title ">Why You Chose Us</span></h3>
                <p class="why-chose-us-description">We offer a wide range of tickets with variety of transportation services from local to luxury buses, however, whenever and wherever you need.</p>
                <div class="feature">
                    <img class="icon" src="./images/icons/ticket.png" alt="Ticket-icon">
                    <div class="feature-description">
                        <h3>Pricing</h3>
                        <p>Our prices are competitive and fair. There are no surprise bills. Any unexpected or additional expenses must be pre-approved by you.</p>
                    </div>
                </div>
                <div class="feature">
                    <img class="icon2" src="./images/icons/wallet.png" alt="Payment-icon">
                    <div class="feature-description">
                        <h3>Easy Payment Process</h3>
                        <p>We have simple payment methods and simple wallets with the best security to provide you.</p>
                    </div>
                </div>
                <div class="feature">
                    <img class="icon" src="./images/icons/trusted.png" alt="trust-icon">
                    <div class="feature-description">
                        <h3>Trusted Partner Services</h3>
                        <p>We offer a variety of transportation services from local to luxury buses, however, whenever and wherever you need.</p>
                    </div>
                </div>
                <button href="/" class="book-now-button">Book Now</button>

            </div>
            <div class="why-chose-us-image-section">
                <img class="why-chose-us-image" src="./images/page/logo.png" alt="Logo">
            </div>

        </section>

        <section class="partners-section">

            <h1><span class="partners-title">Our Trusted Partners</span></h1>
            <div class="partners">
                <div class="partner-logo"><img src="./images/partners/Umair Movers.png" alt="Umair Movers"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Fareed Jan Movers.png" alt="Geo Fareed Jan Movers.png"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Farhan Movers 1.png" alt="Geo Farhan Movers"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Al Shoaib.png" alt="Geo Al Shoaib.png"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Farhan Movers 1.png" alt="Geo Farhan Movers"></div>



                <div class="partner-logo"><img src="./images/partners/Umair Movers.png" alt="Umair Movers"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Fareed Jan Movers.png" alt="Geo Fareed Jan Movers.png"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Farhan Movers 1.png" alt="Geo Farhan Movers"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Al Shoaib.png" alt="Geo Al Shoaib.png"></div>
                <div class="partner-logo"><img src="./images/partners/Geo Farhan Movers 1.png" alt="Geo Farhan Movers"></div>
            </div>


            <div class="sliderLeftArrow"></div>
            <div class="sliderRightArrow"></div>
        </section>

        <section class="popular-routes-section">
            <h1><span class="routes-title">Popular Bus Routes</span></h1>
            <div class="routes">

                <div class="route">
                    <p class="route-title">Jamshoro to Shikarpur</p>
                    <button class="route-booking-btn">
                        <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking!!+I%20need%20ticket%20information%20regarding%20Jamshoro%20to%20Shikarpur" target="_blank">More Details</a>
                    </button>
                </div>
                <div class="route">
                    <p class="route-title">Shikarpur to Jamshoro</p>
                    <button class="route-booking-btn">
                        <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking!!+I%20need%20ticket%20information%20regarding%20Shikarpur%20to%20Jamshoro" target="_blank">More Details</a>
                    </button>
                </div>
                <div class="route">
                    <p class="route-title">Jamshoro to Khairpur</p>
                    <button class="route-booking-btn">
                        <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking!!+I%20need%20ticket%20information%20regarding%20Jamshoro%20to%20Khairpur" target="_blank">More Details</a>
                    </button>
                </div>
                <div class="route">
                    <p class="route-title">Khairpur to Jamshoro</p>
                    <button class="route-booking-btn">
                        <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking!!+I%20need%20ticket%20information%20regarding%20Khairpur%20to%20Jamshoro" target="_blank">More Details</a>
                    </button>
                </div>
                <div class="route">
                    <p class="route-title">Jamshoro to Sukkur</p>
                    <button class="route-booking-btn">
                        <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking!!+I%20need%20ticket%20information%20regarding%20Jamshoro%20to%20Sukkur" target="_blank">More Details</a>
                    </button>
                </div>
                <div class="route">
                    <p class="route-title">Sukkur to Jamshoro</p>
                    <button class="route-booking-btn">
                        <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking!!+I%20need%20ticket%20information%20regarding%20Sukkur%20to%20Jamshoro" target="_blank">More Details</a>
                    </button>
                </div>
            </div>
        </section>

        <section class="landmark">
            <img class="vector" src="./images/page/Vector.png" alt="Vector Image">
        </section>

    </main>


    <footer>
        <div class="footer-area">
            <div class="footer-part">
                <h3><span>Payment Methods</span></h3>
                <div class="payments">
                    <img class="payment-logo" src="./images/icons/payment/jazzcash.png" alt="jazz-cash">
                    <img class="payment-logo" src="./images/icons/payment/easypaisa.png" alt="Easy-Paisa">
                    <img class="payment-logo" src="./images/icons/payment/bank.png" alt="bank">
                </div>
            </div>

            <div class="footer-part mid-part">
                <img class="footer-logo" src="./images/page/darklogo.png" alt="dark-logo">
                <p class="company-description">AasanBooking is providing online bus ticket booking facility at very affordable price </p>
            </div>

            <div class="footer-part">
                <h3><span>Follow Us</span></h3>
                <ul class="follow-us">

                    <li> <a href="https://www.facebook.com/AasanBooking" target="_blank"><img class="social-logo" src="./images/icons/socialmedia/facebook.png" alt="facebook-logo"></a>
                    </li>
                    <li> <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking" target="_blank"><img class="social-logo" src="./images/icons/socialmedia/whatsapp.png" alt="Whatsapp-logo"></a>
                    </li>
                    <li> <a href="https://www.instagram.com/aasanbookingofficial/" target="_blank"><img class="social-logo" src="./images/icons/socialmedia/instagram.png" alt="instagram-logo"></a>
                    </li>
                    <li> <a href="https://www.linkedin.com/company/aasanbooking/" target="_blank"><img class="social-logo" src="./images/icons/socialmedia/linkedin.png" alt="linkedIn-logo"></a>
                    </li>


                </ul>
            </div>

        </div>

        <hr>

        <div class="copyright-area">Copyright © 2022 <b>Aasan Booking</b>. All Rights Reserved.</div>
    </footer>


    <script src="./js/script.js"></script>
    @livewireScripts
</body>

</html>