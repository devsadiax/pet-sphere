<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Pet Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   
    <style>
        /* ===== GOOGLE FONT ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background:#000;

}

/* ================= NAVBAR =====s============ */

header{
    position:fixed;
    width:100%;
    top:0;
    left:0;
    background:#ffffff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 100px;
    z-index:1000;
}

.logo{
    display:flex;
    align-items:center;
    font-size:22px;
    font-weight:700;
    color:#1e1e1e;
}

.logo i{
    color:#ff7b00;
    margin-right:8px;
    font-size:24px;
}

nav a{
    margin:0 15px;
    text-decoration:none;
    color:#333;
    font-weight:500;
    transition:0.3s;
}

nav a:hover{
    color:#ff7b00;
}

.auth-buttons {
    display: flex;
    gap: 10px;
}

.btn {
    text-decoration: none;
    padding: 8px 18px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: bold;
    transition: 0.3s ease;
}

/* Login Button */
.login-btn {
    background-color: black;
    border: 2px solid orange;
    color: white;
}

.login-btn:hover {
    background-color: transparent;
    color: black;
}

/* Signup Button */
.signup-btn {
    background-color: black;
    color: white;
    border: 2px solid orange;
}

.signup-btn:hover {
    background-color: transparent;
    color: black;
}

         
/* ================= HERO SECTION ================= */

.hero{
    height:100vh;
    background: url('images/background image.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display:flex;
    align-items:center;
    padding:0 100px;
    position:relative;
}

.hero-content{
    color:#fff;
    max-width:600px;
}

.hero-content h2{
    font-size:40px;
    font-weight:600;
}

.hero-content h2 span{
    color:#ff7b00;
}

.hero-content h1{
    font-size:60px;
    font-weight:800;
    margin:10px 0 30px;
}

.btn{
    display:inline-block;
    padding:12px 30px;
    border:2px solid #fff;
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    transition:0.3s;
}

.btn:hover{
    background:#ff7b00;
    border-color:#ff7b00;
}

/* ================= WAVE SHAPE ================= */

.wave{
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:120px;
    background:#fff;
    border-top-left-radius:50% 100%;
    border-top-right-radius:50% 100%;
}
html{
    scroll-behavior: smooth;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    background: #f8f9fb;
}

/* ===== GOOGLE FONT ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background:#000;
}

/* ================= NAVBAR ================= */

header{
    position:fixed;
    width:100%;
    top:0;
    left:0;
    background:#ffffff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 100px;
    z-index:1000;
}

.logo{
    display:flex;
    align-items:center;
    font-size:22px;
    font-weight:700;
    color:#1e1e1e;
}

.logo i{
    color:#ff7b00;
    margin-right:8px;
    font-size:24px;
}

nav a{
    margin:0 15px;
    text-decoration:none;
    color:#333;
    font-weight:500;
    transition:0.3s;
}

nav a:hover{
    color:#ff7b00;
}

.auth-buttons {
    display: flex;
    gap: 10px;
}

.btn {
    text-decoration: none;
    padding: 8px 18px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: bold;
    transition: 0.3s ease;
}

/* Login Button */
.login-btn {
    background-color: black;
    border: 2px solid black;
    color: white;
}

.login-btn:hover {
    background-color: transparent;
    color: black;
}

/* Signup Button */
.signup-btn {
    background-color: black;
    color: white;
    border: 2px solid black;
}

.signup-btn:hover {
    background-color: transparent;
    color: black;
}


/* TOP BANNERS */
.services-banner {
    display: flex;
    justify-content: center;
    gap: 25px;
    padding: 50px 60px;
}

.banner-card {
    width: 30%;
    height: 220px;
    border-radius: 15px;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.banner-card .overlay {
    position: absolute;
    bottom: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
    color: white;
    padding: 20px;
}


.banner-card h2 {
    margin-bottom: 8px;
}

/* Background Images */
.buy {
    background-image: url('https://img.freepik.com/premium-photo/pretty-dog-standing-shopping-cart_157917-2745.jpg?semt=ais_hybrid&w=740&q=80');
}

.doctor {-
    background-image: url('https://images.unsplash.com/photo-1583511655857-d19b40a7a54e');
}

.medical {
    background-image: url('https://images.unsplash.com/photo-1587854692152-cbe660dbde88');
}

/* ABOUT SECTION */
.about-section {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 80px 60px;
    gap: 60px;
    background: white;
}

.about-image img {
    width: 420px;
}

.about-content {
    max-width: 500px;
}

.about-content h1 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #2c3e50;
}

.about-content p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

.features {
    margin-bottom: 20px;
}

.features div {
    margin-bottom: 10px;
    font-weight: 500;
    color: #e67e22;
}

.extra-text {
    font-size: 14px;
    color: #666;
}
html{
    scroll-behavior: smooth;
}
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#f4f4f4;
}

.team-section{
    text-align:center;
    padding:60px 20px;
}

.team-section h4{
    color:#4CAF50;
    margin-bottom:10px;
}

.team-section h2{
    font-size:40px;
    margin-bottom:50px;
}

.team-section h2 span{
    color:#ff7a59;
}

.team-container{
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
}

.card{
    background:#fff;
    width:280px;
    border-radius:10px;
    overflow:hidden;
    position:relative;
    transition:0.4s;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.card:hover{
    transform:translateY(-10px);
}

.img-box img{
    width:100%;
    height:300px;
    object-fit:cover;
}

.content{
    padding:20px;
}

.content h3{
    margin-bottom:5px;
}

.content p{
    color:gray;
}

.social{
    position:absolute;
    bottom:-60px;
    left:0;
    width:100%;
    background:#222;
    padding:15px 0;
    transition:0.4s;
}

.card:hover .social{
    bottom:0;
}

.social i{
    color:#ff7a59;
    margin:0 10px;
    cursor:pointer;
    transition:0.3s;
}

.social i:hover{
    color:#fff;
}
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family: Arial, sans-serif;
}

body{
background:#f5f5f5;
}

/* Contact Section */

.contact{
padding:60px 10%;
background:white;
text-align:center;
}

.contact h1{
font-size:36px;
margin-bottom:30px;
}

.contact h1 span{
color:orange;
}

/* Form */

.contact-form{
max-width:700px;
margin:auto;
}

.contact-form input,
.contact-form textarea{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

.contact-form textarea{
height:150px;
resize:none;
}

.contact-form button{
background:orange;
color:white;
border:none;
padding:12px 25px;
font-size:16px;
cursor:pointer;
border-radius:5px;
}

.contact-form button:hover{
background:#e67e22;
}

/* Map */

.map{
margin-top:40px;
}

.map iframe{
width:100%;
height:350px;
border:none;
}

/* Footer */

footer{
background:#111;
color:white;
padding:40px 10%;
display:flex;
flex-wrap:wrap;
justify-content:space-between;
}

.footer-box{
width:220px;
margin-bottom:20px;
}

.footer-box h2{
color:orange;
margin-bottom:10px;
}

.footer-box ul{
list-style:none;
}

.footer-box ul li{
margin:6px 0;
}

.newsletter input{
width:100%;
padding:8px;
margin:6px 0;
border:none;
}

.newsletter button{
background:orange;
color:white;
border:none;
padding:8px;
cursor:pointer;
}

.copy{
background:#000;
color:white;
text-align:center;
padding:10px;
}

.main-title {
  font-size: 2.8rem;
  font-weight: 700;
  color: #1a1817;
  letter-spacing: -1px;
  margin-bottom: 12px;
}

.subtitle {
  font-size: 1.1rem;
  color: #857e78;
  font-weight: 400;
}

/* --- Responsive Main Layout --- */
.main-layout {
  max-width: 1200px;
  margin: 0 auto;
}

.category-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 40px;
  padding: 10px;
}

/* --- Premium Category Cards (3 Boxes) --- */
.category-card {
  background: #ffffff;
  border: 1px solid #eeebe7;
  border-radius: 24px;
  overflow: hidden;
  text-decoration: none; /* Links ka underline khatam karne k liye */
  color: inherit;
  display: flex;
  flex-direction: column;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
  transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
  animation: fadeInUp 0.8s ease-out;
}

/* Card Hover Animations */
.category-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(74, 69, 64, 0.08);
  border-color: #dcd7d0;
}

/* Image Wrapper and Zoom Effect */
.img-container {
  position: relative;
  height: 240px;
  overflow: hidden;
}

.category-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.category-card:hover img {
  transform: scale(1.08);
}

/* Elegant dark fade over image */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.05));
}

/* Typography Inside Cards */
.card-info {
  padding: 25px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.card-info h3 {
  font-size: 1.5rem;
  font-weight: 700;
  color: #1a1817;
}

.card-info p {
  font-size: 0.95rem;
  color: #857e78;
}

/* Micro-interaction Button inside card */
.explore-btn {
  margin-top: 10px;
  font-size: 0.9rem;
  font-weight: 600;
  color: #8a7355; /* Sophisticated Warm Bronze color */
  transition: color 0.3s ease;
}

.category-card:hover .explore-btn {
  color: #5c4b35;
}

/* --- Entry Animations --- */
@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* --- Mobile View Optimization --- */
@media (max-width: 768px) {
  .main-title { font-size: 2.2rem; }
  body { padding: 20px 10px; }
  .category-grid { gap: 25px; }
}
/* Google Fonts ko import karein professional look ke liye */
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

/* Main Wrapper Styling */
.shop-header-container {
    text-align: center;
    width: 100%;
    margin: 40px auto 25px auto; /* Categories aur upar ke content ke beech spacing */
    padding: 10px 20px;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

/* Cute Premium Mini Tag */
.shop-badge-wrapper {
    margin-bottom: 8px;
}

.shop-tag {
    background-color: #fff0f3; /* Soft light pink tint */
    color: #ff4d6d; /* Attractive premium deep pink */
    font-size: 9.5pt;
    font-weight: 700;
    padding: 6px 16px;
    border-radius: 50px;
    display: inline-block;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Main Shop Now Title */
.shop-main-title {
    font-family: 'Fredoka', sans-serif; /* Clean rounded professional font */
    font-size: 28pt;
    color: #1e293b; /* Sleek dark slate color */
    margin: 0;
    font-weight: 600;
    letter-spacing: -0.5px;
}

/* Subtitle under title */
.shop-subtitle {
    color: #64748b; /* Soft gray for elegant contrast */
    font-size: 11pt;
    margin: 6px 0 0 0;
}

/* Professional Line Divider with Paw Icon */
.shop-fancy-divider {
    display: block;
    width: 180px;
    height: 1.5px;
    background: linear-gradient(90deg, transparent, #ff4d6d, transparent);
    margin: 16px auto 0 auto;
    position: relative;
}

.shop-divider-paw {
    position: absolute;
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #f8fafc; /* Apne page ke exact background color se match karein */
    padding: 0 12px;
    font-size: 11pt;
    color: #ff4d6d;
}
        </style>
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <header>
        <div class="logo">
            <i class="fa-solid fa-paw"></i>
            <span>PET SPHERE</span>
        </div>

        <nav>
            <a href="firstpage.php">Home</a>
            <a href="#about">About</a>
            <a href="#shop">Shop</a>
            <a href="#Services">Services</a>
            <a href="#">Medicines</a>
            <a href="#Contact">Contact</a>
        </nav>
<div class="auth-buttons">
    <a href="login.php" class="btn login-btn">Login</a>
    <a href="signup.php" class="btn signup-btn">Sign Up</a>
</div>
    </header>
    

    <!-- ===== HERO SECTION ===== -->
    <section class="hero">

        <div class="hero-content">
            <h2><span>Hi</span> Welcome To</h2>
            <h1>Our Pet Shop</h1>
            <a href="#shop" class="btn">Shop Now</a>
        </div>

        <!-- Wave Shape -->
        <div class="wave"></div>

    </section>

<!-- TOP 3 BANNERS -->
<section class="services-banner">

    <!-- Buy & Sell -->
    <div class="banner-card buy">
        <div class="overlay">
            <h2>Buy & Sell Pets</h2>
            <p>Find your perfect companion or connect your pets with loving families.</p>
        </div>
    </div>

    <!-- Doctors -->
    <div class="banner-card doctor">
        <div class="overlay">
            <h2>Professional Veterinary Care</h2>
            <p>Certified doctors providing complete health checkups and emergency care.</p>
        </div>
    </div>

    <!-- Medical Store -->
    <div class="banner-card medical">
        <div class="overlay">
            <h2>Pet Medical Store</h2>
            <p>Authentic medicines and prescriptions for your pet’s healthy life.</p>
        </div>
    </div>

</section>

<!-- ABOUT SECTION -->
<section class="about-section" id="about">

    <div class="about-image">
        <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b" alt="Pets">
    </div>

    <div class="about-content">
        <h1>Your Trusted Pet Partner</h1>
        <p>
            Pet Sphere is a complete pet care web application designed to make pet ownership easier and more reliable.
            We offer a secure platform for buying and selling pets, professional veterinary consultation,
            and a trusted online medical store — all in one place.
        </p>

        <div class="features">
            <div>✔ Verified Pet Listings</div>
            <div>✔ Certified Veterinary Doctors</div>
            <div>✔ Online Medical Store</div>
            <div>✔ Safe & Easy Adoption Process</div>
        </div>

        <p class="extra-text">
            At Pet Sphere, we believe every pet deserves love, care, and proper medical attention.
            Our mission is to connect pet lovers with trusted services while ensuring safety,
            transparency, and quality care for every companion.
        </p>

    </div>

</section>
<div class="shop-header-container">
    <div class="shop-badge-wrapper">
        <span class="shop-tag">Our Collection</span>
    </div>
    <h2 class="shop-main-title">Shop Now</h2>
    <p class="shop-subtitle">Find your perfect little companion from our premium categories</p>
    <div class="shop-fancy-divider">
        <span class="shop-divider-paw">🐾</span>
    </div>
</div>
 <!-- Shop Section -->
  <!-- Categories Container -->
  <main class="main-layout">
    <section class="category-grid" id="shop">
      <!-- Box 1: Cats -->
      <a href="cats.php" class="category-card">
        <div class="img-container">
          <!-- Apni picture ka path yahan daal lena -->
          <img src="images/cat.jpeg" alt="Cats Collection">
          <div class="overlay"></div>
        </div>
        <div class="card-info">
          <h3>Cats</h3>
          <p>Explore Elegant Breeds</p>
          <span class="explore-btn">View Collection &rarr;</span>
        </div>
      </a>

      <!-- Box 2: Parrots -->
      <a href="parrot.php" class="category-card">
        <div class="img-container">
          <img src="images/parrot.jpeg" alt="Parrots Collection">
          <div class="overlay"></div>
        </div>
        <div class="card-info">
          <h3>Parrots</h3>
          <p>Exotic & Intelligent Birds</p>
          <span class="explore-btn">View Collection &rarr;</span>
        </div>
      </a>

      <!-- Box 3: Pigeons -->
      <a href="pigeon.php" class="category-card">
        <div class="img-container">
          <img src="images/pigeon.jpeg" alt="Pigeons Collection">
          <div class="overlay"></div>
        </div>
        <div class="card-info">
          <h3>Pigeons</h3>
          <p>Rare & Beautiful Flyers</p>
          <span class="explore-btn">View Collection &rarr;</span>
        </div>
      </a>

    </section>
  </main>

<section class="team-section" id="Services">
    <h4>Team Member</h4>
    <h2>Meet Our <span>Doctors</span></h2>

    <div class="team-container">

        <!-- Doctor 1 -->
        <div class="card">
            <div class="img-box">
                <img src="images/doctor.1.jpg" alt="Doctor 1">
            </div>
            <div class="content">
                <h3>Dr. Sarah Khan</h3>
                <p>Cardiologist</p>
            </div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin-in"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>

        <!-- Doctor 2 -->
        <div class="card">
            <div class="img-box">
                <img src="images/doctor2.jpg" alt="Doctor 2">
            </div>
            <div class="content">
                <h3>Dr. Ahmed Ali</h3>
                <p>Neurologist</p>
            </div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin-in"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>

        <!-- Doctor 3 -->
        <div class="card">
            <div class="img-box">
                <img src="images/doctor003.jpg" alt="Doctor 3">
            </div>
            <div class="content">
                <h3>Dr. Ayesha Malik</h3>
                <p>Pediatrician</p>
            </div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin-in"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>

    </div>
</section>
<!-- Contact Section -->

<section class="contact" id="Contact">

<h1>Contact For <span>Any Query</span></h1>

<div class="contact-form">

<form>

<input type="text" placeholder="Your Name" required>

<input type="email" placeholder="Your Email" required>

<input type="text" placeholder="Subject">

<textarea placeholder="Message"></textarea>

<button type="submit">Send Message</button>

</form>

</div>

<!-- Map -->

<div class="map">

<iframe src="https://maps.google.com/maps?q=sialkot&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>

</div>

</section>

<!-- Footer -->

<footer>

<div class="footer-box">
<h2>Pet Sphere</h2>
<p>Your trusted platform for pet care, pet adoption and pet services.</p>
</div>

<div class="footer-box">
<h3>Get In Touch</h3>
<p>📍 Sialkot, Pakistan</p>
<p>📞 +92 300 0000000</p>
<p>📧 petsphere@email.com</p>
</div>

<div class="footer-box">
<h3>Popular Links</h3>
<ul>
<li>Home</li>
<li>About Us</li>
<li>Services</li>
<li>Our Team</li>
<li>Contact Us</li>
</ul>
</div>

<div class="footer-box newsletter">
<h3>Newsletter</h3>
<input type="text" placeholder="Your Name">
<input type="email" placeholder="Your Email">
<button>Submit Now</button>
</div>

</footer>

<div class="copy">
© 2026 Pet Sphere. All Rights Reserved.
</div>

</body>
</html>
</body>
</html>
<script>
    function showSignup() {
    document.getElementById("loginForm").classList.add("hidden");
    document.getElementById("signupForm").classList.remove("hidden");
}

function showLogin() {
    document.getElementById("signupForm").classList.add("hidden");
    document.getElementById("loginForm").classList.remove("hidden");
}
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if(username === "admin" && password === "1234") {
        alert("Login Successful 💚");
        window.location.href = "home.html";
    } else {
        alert("Invalid Username or Password ❌");
    }
});
// Simple animation effect on scroll

const cards = document.querySelectorAll(".card");

window.addEventListener("scroll", () => {
    cards.forEach(card => {
        let position = card.getBoundingClientRect().top;
        let screenHeight = window.innerHeight;

        if(position < screenHeight - 100){
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }
    });
});
    </script>
</body>
</html>
