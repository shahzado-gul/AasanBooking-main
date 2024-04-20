<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />

    <title>Contact-us</title>

    <!-- SDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("QBu6YBJXbYBZIIeDG");
        })();
    </script>


    <!-- SDN -->





</head>

<body>

    <span id="toast" class="toast-none toast-active">Feedback submitted</span>
    <span id="error" class="toast-none toast-error">Make sure no field remains empty</span>

    <header>

        <nav class="navbar">
            <a href="{{ route('home') }}" class="navbar-brand"><img class="logo" src="./images/page/logo.png"
                    alt="Brand Logo" /></a>
            <a id="hamburger" class="hamburger" onclick="toogleMenu()" href="#"><img class="menu-icon"
                    src="./images/icons/menuIcon.png" alt="burger-menu"></a>
            <ul id="nav" class="nav">
                <li class="nav-item "><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item "><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </nav>

    </header>



    <main>
        <section class="main-section">
            <section class="main-title-section">
                <h1 class="title">Contact Us</h1>
                <!-- <p class="links">Home <span class="symbol">></span> Contact Us</p> -->
            </section>
            <div class="main-content-section">
                <div class="contact-details ">

                    <div class="map-box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14415.509986983625!2d68.24595360781252!3d25.408910899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c7bbce1d33ccb%3A0x665db353baebc310!2sNational%20Expansion%20Plan%20of%20NICs%20Jamshoro!5e0!3m2!1sen!2s!4v1668076728117!5m2!1sen!2s"
                            width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="adress-boxes">


                        <div class="adress-detail-box">
                            <img class="adress-icon" src="./images/icons/contact.svg" alt="Contact Icon">
                            <div class="adress-details">
                                <h1>Contact No:</h1>
                                <p>+92-335-299-6009</p>
                            </div>
                        </div>
                        <div class="adress-detail-box">
                            <img class="adress-icon" src="./images/icons/mail.png" alt="Mail Icon">
                            <div class="adress-details">
                                <h1>Email:</h1>
                                <p>aasanbookingofficial@gmail.com</p>
                            </div>
                        </div>

                        <div class="adress-detail-box">
                            <img class="adress-icon" src="./images/icons/address.png" alt="Address Icon">
                            <div class="adress-details">
                                <h1>Address:</h1>
                                <p>Aasaan Booking Office ,Science And Technology Park, National Incubation Center
                                    Jamshoro, Sindh, Pakistan</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <div class="main-content-section">
            {!! Form::open(['route' => 'feedbacks.store', 'method' => 'post']) !!}
            <div class="contact-form about-details">
                <h1 class="contact-form-title"><span class="feedback-title">Feedback Form</span></h1>
                <div class="form-field">
                    <label for="name">Full Name:</label><br>
                    <input type="text" name="name" id="name" placeholder="Full Name" required>
                </div>

                <div class="form-field">
                    <label for="email">Email Address:</label><br>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>


                <div class=" message-field">
                    <label for="message">Message:</label><br>
                    <textarea name="message" id="message" placeholder="Write message here" required></textarea>
                </div>

                <div class="submit-button">

                    <button id="btn" type="submit" class="submitBtn">SUBMIT</button>
                </div>

            </div>
            {!! Form::close() !!}
        </div>


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
                <p class="company-description">AasanBooking is providing online bus ticket booking facility at very
                    affordable price </p>
            </div>

            <div class="footer-part">
                <h3><span>Follow Us</span></h3>
                <ul class="follow-us">

                    <li> <a href="https://www.facebook.com/AasanBooking" target="_blank"><img class="social-logo"
                                src="./images/icons/socialmedia/facebook.png" alt="facebook-logo"></a>
                    </li>
                    <li> <a href="https://api.whatsapp.com/send?phone=923352996009&text=Salam%20AasanBooking"
                            target="_blank"><img class="social-logo" src="./images/icons/socialmedia/whatsapp.png"
                                alt="Whatsapp-logo"></a>
                    </li>
                    <li> <a href="https://www.instagram.com/aasanbookingofficial/" target="_blank"><img
                                class="social-logo" src="./images/icons/socialmedia/instagram.png"
                                alt="instagram-logo"></a>
                    </li>
                    <li> <a href="https://www.linkedin.com/company/aasanbooking/" target="_blank"><img
                                class="social-logo" src="./images/icons/socialmedia/linkedin.png"
                                alt="linkedIn-logo"></a>
                    </li>


                </ul>
            </div>

        </div>

        <hr>

        <div class="copyright-area">Copyright © 2022 <b>Aasan Booking</b>. All Rights Reserved.</div>
    </footer>

    <script src="./js/script.js"></script>


</body>

</html>
