<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Roboto:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/jpg" href="/images/ganyuChibi.jpg">
    <title>Ganyu Web</title>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar_container">
            <a href="/" id="navbar_logo"><i class="fas fa-snowflake"></i>Ganyu</a>
            <div class="navbar_toggle" id="mobile_menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar_menu">
                <li class="navbar_item"><a href="./web/home.php" class="navbar_link">Home</a></li>
                <li class="navbar_item"><a href="./web/tech.php" class="navbar_link">Tech</a></li>
                <li class="navbar_item"><a href="./web/product.php" class="navbar_link">Products</a></li>
                <li class="navbar_btn"><a href="#signup" class="button">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="main">
        <div class="main_container">
            <div class="main_content">
                <h1>Next Generation</h1>
                <h2>Technology</h2>
                <p>See what make us diffirent</p>
                <button class="main_btn"><a href="/"></a>Get Started</button>
            </div>
            <div class="main_img_container">
                <img src="./images/ganyuTech.jpg" alt="pic" id="main_img">
            </div>
        </div>
    </div>
    <!-- Services Section -->
    <div class="services">
        <h1>See what the hype is about?</h1>
        <div class="services_container">
            <div class="services_card">
                <h2>Experience Bliss</h2>
                <p>AI Power Technology</p>
                <button>Get Started</button>
            </div>
            <div class="services_card">
                <h2>Are you ready?</h2>
                <p>Take the leap</p>
                <button>Get Started</button>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <div class="footer_container">
        <div class="footer_links">
            <div class="footer_link_wrapper">
                <div class="footer_link_items">
                    <h2>About Us</h2>
                    <a href="/">How it works</a>
                    <a href="/">Testimonals</a>
                    <a href="/">Careers</a>
                    <a href="/">Investments</a>
                    <a href="/">Terms of Service</a>
                </div>
                <div class="footer_link_items">
                    <h2>Contact Us</h2>
                    <a href="/">Contact Us</a>
                    <a href="/">Support</a>
                    <a href="/">Destinations</a>
                    <a href="/">Sponsorships</a>
                </div>
            </div>
            <div class="footer_link_wrapper">
                <div class="footer_link_items">
                    <h2>Videos</h2>
                    <a href="/">Submit Video</a>
                    <a href="/">Ambassadors</a>
                    <a href="/">Agency</a>
                    <a href="/">Influencer</a>
                </div>
                <div class="footer_link_items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a>
                    <a href="/">Facebook</a>
                    <a href="/">Youtube</a>
                    <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <div class="social_media">
            <div class="social_media_wrap">
                <div class="footer_logo">
                    <a href="/" id="footer_logo"><i class="fas fa-snowflake"></i>Ganyu</a>
                </div>
                <p class="website_rights">@Ganyu 2025.All right reserved</p>
                <div class="social_icons">
                    <div class="social_icon">
                        <a href="/" class="social_icon_link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="social_icon">
                        <a href="/" class="social_icon_link"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="social_icon">
                        <a href="/" class="social_icon_link"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="social_icon">
                        <a href="/" class="social_icon_link"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="social_icon">
                        <a href="/" class="social_icon_link"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>