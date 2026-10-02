<?php
$success = "";
$error = "";

if (isset($_GET['success'])) {
    $success = "Your request has been submitted successfully!";
} elseif (isset($_GET['error'])) {
    if ($_GET['error'] === 'missing_fields') {
        $error = "Please fill in all required fields.";
    } elseif ($_GET['error'] === 'db_connection') {
        $error = "Database connection error! Please verify db.php settings on InfinityFree.";
    } else {
        $error = "Failed to submit request. Please try again.";
    }
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us - INDUSTRO</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    <span><i class="fas fa-map-marker-alt"></i> Sector 62, Noida, Uttar Pradesh, India</span>
                    <span><i class="fas fa-phone"></i> <a href="tel:+919876543210">+91 9118826548</a></span>
                    <span><i class="fas fa-envelope"></i> <a
                            href="mailto:industro.india@gmail.com">industro.india@gmail.com</a></span>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="logo">
                    <div class="logo-icon"><i class="fas fa-industry"></i></div>
                    <div class="logo-text">
                        INDUSTRO
                        <span>Industry & Factory</span>
                    </div>
                </div>
                <!-- Toggle Button -->
                <div class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </div>

                <nav id="navbar">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="service.php">SERVICES</a></li>
                        <li><a href="contact.php" class="active">CONTACT</a></li>
                    </ul>
                </nav>
                <button class="btn-quote" onclick="document.getElementById('name').focus();">Get a quote</button>

            </div>
        </header>
        <section class="contact-advanced">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">GET IN TOUCH</p>
                <h2>Request A Free Quote</h2>
            </div>

            <div class="contact-wrapper">

                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Contact Information</h3>

                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Sector 62, Noida, Uttar Pradesh, India</p>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <p><a href="tel:+91 9118826548">+91 9118826548</a></p>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p><a href="mailto:industro.india@gmail.com">industro.india@gmail.com</a></p>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <p>Mon – Sat: 9:00 AM – 6:00 PM</p>
                    </div>
                </div>


                <?php if (!empty($success)) { ?>
                    <div class="success-message">
                        ✅ <?php echo htmlspecialchars($success); ?>
                    </div>
                <?php } ?>
                <?php if (!empty($error)) { ?>
                    <div class="error-message">
                        ❌ <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php } ?>
                <!-- Contact Form -->
                <form class="contact-form" id="contactForm" action="save_contact.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="name" id="name"
                            placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email"
                            placeholder="Email Address" required>
                    </div>

                    <div class="form-group">
                        <input type="tel" name="phone" id="phone"
                            placeholder="Phone Number" required>
                    </div>

                    <div class="form-group">
                        <select name="service" id="service" required>
                            <option value="">Select Service</option>
                            <option>Material Engineering</option>
                            <option>Mechanical Engineering</option>
                            <option>Petroleum Industry</option>
                            <option>Electrical Engineering</option>
                            <option>Chemical Industry</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <textarea name="message" id="message"
                                placeholder="Project Details" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        Send Request <i class="fas fa-paper-plane"></i>
                    </button>

                </form>

            </div>
        </div>
    </section>
    <section class="map-section">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">OUR LOCATION</p>
                <h2>Visit Our Office</h2>
            </div>

            <div class="map-wrapper">
                <iframe 
                    src="https://www.google.com/maps?q=Sector+62+Noida+Uttar+Pradesh+India&output=embed"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
        
    </section>
    <!-- gallery -->
    <section class="office-gallery">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">OUR WORKSPACE</p>
                <h2>Inside Our Office</h2>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="image/Office Interior.jpg" alt="Office Interior">
                    <div class="gallery-overlay">
                        <h4>Corporate Workspace</h4>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/Meeting Room.jpg" alt="Meeting Room">
                    <div class="gallery-overlay">
                        <h4>Meeting Room</h4>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/Team Collaboration.jpg" alt="Team Collaboration">
                    <div class="gallery-overlay">
                        <h4>Team Collaboration</h4>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/Reception Area.jpg" alt="Reception Area">
                    <div class="gallery-overlay">
                        <h4>Reception Area</h4>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/Work Station.jpg" alt="Work Station">
                    <div class="gallery-overlay">
                        <h4>Work Stations</h4>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/Office Building.jpg" alt="Office Building">
                    <div class="gallery-overlay">
                        <h4>Noida Office</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <div class="logo" style="margin-bottom: 20px;">
                        <div class="logo-icon"><i class="fas fa-industry"></i></div>
                        <div class="logo-text" style="color: #fff;">
                            INDUSTRO
                            <span style="color: #aaa;">Industry & Factory</span>
                        </div>
                    </div>
                    <p>We touch the lives of millions of people across the world every day.</p>
                    <div style="margin-top: 20px;">
                        <a href="#" style="color: #fff; margin-right: 15px;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: #fff; margin-right: 15px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: #fff; margin-right: 15px;"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" style="color: #fff; margin-right: 15px;"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php"><i class="fas fa-chevron-right"></i>Home</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i>About Us</a></li>
                        <li><a href="service.php"><i class="fas fa-chevron-right"></i>Services</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>

                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Sector 62, Noida, Uttar Pradesh, India</p>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <p><a href="tel:+91 9118826548">+91 9118826548</a></p>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p><a href="mailto:industro.india@gmail.com">industro.india@gmail.com</a></p>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <p>Mon – Sat: 9:00 AM – 6:00 PM</p>
                    </div>
                </div>

        </footer>
    <script>
            // function validateForm() {
            //     var name = document.getElementById("name").value;
            //     var email = document.getElementById("email").value;
            //     var phone = document.getElementById("phone").value;
            //     var service = document.getElementById("service").value;
            //     var message = document.getElementById("message").value;
            //     var formMsg = document.getElementById("formMsg");

            //     if (name === "" || email === "" || phone === "" || service === "" || message === "") {
            //         formMsg.style.color = "red";
            //         formMsg.innerHTML = "Please fill in all fields.";
            //         return false;
            //     }

            //     formMsg.style.color = "green";
            //     formMsg.innerHTML = "Your request has been sent successfully!";
            //     return false; // Prevent actual form submission for demo purposes
            // }

        
            const menuToggle = document.getElementById("menuToggle");
            const navbar = document.getElementById("navbar");

            menuToggle.addEventListener("click", () => {
                navbar.classList.toggle("active");
            });
        </script>
    </body>
    </html>