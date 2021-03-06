<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us | HappyHomes</title>
</head>

<body>
    <!-- NAVIGATION MENU -->
    <div class="nav-bar">
        <div class="logo">
            <h1>HAPPY<span>HOMES</span></h1>
        </div>
        <nav id="menu-bar">
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="about-us.html">ABOUT US</a></li>
                <li><a href="services.html">SERVICES</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="#" class="active">CONTACT US</a></li>
                <li>
                    <div class="search">
                        <img src="./images/search.png">
                        <input type="text">
                    </div>
                </li>
            </ul>
            <p class="lite-text">MENU</p>
            <img src="./images/close.png" class="close-icon" onclick="closemenu()">
        </nav>
        <img src="./images/menu.png" class="menu-icon" onclick="openmenu()">
    </div>
    <!-- PAGE TITLE -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(./images/services.jpg);">
        <div class="page-title__holder">
            <h1 class="page-title__title">Contact Us</h1>
            <p class="page-title__subtitle">One stop destination to make your home</p>
        </div>
    </section>
    <!-- PAGE CONTENT -->
    <section class="contact-us">
        <div class="contact-label">
            <div class="contact-items">
                <h1>Contact Address</h1>
                <div class="border"></div>
                <ul>
                    <li>
                        <span class="contact_item-label">Address:</span>
                        <a>Madhapur, Hyderabad, Telangana 500018</a>
                    </li>
                    <li>
                        <span class="contact_item-label">Phone: </span>
                        <a href="tel:+91 9876543210">+91 9876543210</a>
                    </li>
                    <li>
                        <span class="contact_item-label">Email: </span>
                        <a href="mailto:happyhomes@gmail.com">info@happyhomes.com</a>
                    </li>
                </ul>
                <h1>Social Contact</h1>
                <div class="border"></div>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>

            <div class="contact-items">
                <h1>Get In Touch</h1>
                <div class="border"></div>
                <div class="contact-form">
                    <form id="contact-form" method="POST" action="contact.php">
                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name" required><br>
                        <input name="email" id="email type=" email" class="form-control" placeholder="Your Email" required><br>
                        <input name="phone" id="phone" type="number" class="form-control" placeholder="Your Phone Number" required><br>
                        <textarea name="message" id="message" type="text" class="form-control" placeholder="Your Message" rows="5" required></textarea><br>
                        <input name="submit" id="submit" type="submit" class="form-control submit" value="Send Request" required><br>
                        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                            <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                            unset($_SESSION['success_message']);
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- GOOGLE MAP -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30449.8775990009!2d78.3741360517473!3d17.448477225794523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9158f201b205%3A0x11bbe7be7792411b!2sMadhapur%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1602500944883!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:3px;" aria-hidden="false" tabindex="0"></iframe>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-left">
            <div class="footer-items">
                <h1>Happy Homes</h1>
                <p>
                    Be faithful to your own taste, because nothing you really like is ever out of style.The best
                    rooms have something to say about the people who live in them.
                </p>
            </div>
            <div class="footer-items">
                <h2>Quick Links</h2>
                <div class="border"></div>
                <ul>
                    <a href="home.html">
                        <li>Home</li>
                    </a>
                    <a href="about-us.html">
                        <li>About Us</li>
                    </a>
                    <a href="services.html">
                        <li>Services</li>
                    </a>
                    <a href="portfolio.html">
                        <li>Portfolio</li>
                    </a>
                    <a href="contact-us.html">
                        <li>Contact Us</li>
                    </a>
                </ul>
            </div>
            <div class="footer-items">
                <h2>Portfolio</h2>
                <div class="border"></div>
                <ul>
                    <a href="bed-room.html">
                        <li>Bedroom</li>
                    </a>
                    <a href="kitchen-room.html">
                        <li>Kitchen</li>
                    </a>
                    <a href="living-room.html">
                        <li>Livingroom</li>
                    </a>
                    <a href="bath-room.html">
                        <li>Bathroom</li>
                    </a>
                    <a href="dining-room.html">
                        <li>Dining Area</li>
                    </a>
                    <a href="wardrobes.html">
                        <li>Wardrobes</li>
                    </a>
                </ul>
            </div>
            <div class="footer-items">
                <h2>Contact Us</h2>
                <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map-marker"></i>1-243,Madhapur,Hyderabad,500018</li>
                    <li><i class="fa fa-phone"></i>+91 9876543210</li>
                    <li><i class="fa fa-envelope"></i>info@happyhomes.com</li>
                </ul>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            Copyright &copy; Happy Homes 2020. All Rights reserved.
            Designed by <a href="">Happy Homes</a>
        </div>
    </footer>
    <!-- JS TO OPEN AND CLOSE NAVIGATION MENU -->
    <script src="./js/script.js"></script>
    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var message = $('#message').val();
                if (name == '' || email == '' || phone == '' || message == '') {
                    $('#error_message').html("All Fields are required");
                } else {
                    $('#error_message').html('');
                    $.ajax({
                        url: "contact.php",
                        method: "POST",
                        data: {
                            name: name,
                            message: message
                        },
                        success: function(data) {
                            $("form").trigger("reset");
                            $('#success_message').fadeIn().html(data);
                            setTimeout(function() {
                                $('#success_message').fadeOut("Slow");
                            }, 2000);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>