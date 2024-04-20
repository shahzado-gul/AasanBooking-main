<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>About us</title>
</head>

<body>



    <header>

        <nav class="navbar">
            <a href="{{route('home')}}" class="navbar-brand"><img class="logo" src="./images/page/logo.png" alt="Brand Logo" /></a>
            <a id="hamburger" class="hamburger" onclick="toogleMenu()" href="#"><img class="menu-icon" src="./images/icons/menuIcon.png" alt="burger-menu"></a>
            <ul id="nav" class="nav">
                <li class="nav-item "><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item "><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </nav>

    </header>


    <main>
        <section class="main-section">
            <section class="main-title-section">
                <h1 class="title">About Us</h1>
                <!-- <p class="links">Home <span class="symbol">></span> About Us</p> -->
            </section>
            <div class="main-content-section">
                <div class="about-details">
                    <h1 class="details-title">Who we are?</h1>
                    <p class="details-description">Booking tickets is not an easy cinch. You have two options, either go to the bus terminal for ticket booking or talk to an agent for advance booking. But AasanBooking system has made this easy for you. we have created such a user friendly UI system so that everyone just a few clicks can book tickets from anywhere. Not only this, people will also be able to know about bus tickets, timings, prices and facilities.We have eliminated the need for queue maintenance and brought you the convenience of booking tickets through your devices.</p>
                    <h1 class="details-title">Vision</h1>
                    <p class="details-description"><q>AasanBooking aims to provide affordable and reliable range of tickets so that people can book tickets in best price range without any Struggle</q> </p>
                </div>
            </div>


            <div class="slide-container swiper" style="margin:auto;">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="./images/team/Shahzado Gul1.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="icon">
                                <a href="">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Shahzado Gul</h2>
                                <h2 class="name"><span class="designation">Founder</span></h2>
                                <p class="description">Shahzado Gul is a young entrepeneur,community builder and problem solver who founder the company <span>AasanBooking</span></p>

                                <!-- <button class="button">View More</button> -->
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="./" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="icon">
                                <a href="">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Suhail Chandio</h2>
                                <h2 class="name"><span class="designation">Content Creater</span></h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <!-- <button class="button">View More</button> -->
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="./" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="icon">
                                <a href="">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Zafar Iqbal</h2>
                                <h2 class="name"><span class="designation">C T O</span></h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <!-- <button class="button">View More</button> -->
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="./" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="icon">
                                <a href="">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Ahmed Kharik</h2>
                                <h2 class="name"><span class="designation">Researcher</span></h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <!-- <button class="button">View More</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>