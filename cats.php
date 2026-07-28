<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cats Collection | Premium Pet Boutique</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Main Common Style Link -->
  <link rel="stylesheet" href="cats.css">
  <!-- Separate Cats Page Style Link -->
  <link rel="stylesheet" href="cats-style.css">
</head>
<style>
    /* ==========================================================================
   CATS PAGE PREMIUM UTILITY STYLES (EXACT MATCH TO DESIGN)
   ========================================================================== */

/* 1. Import Premium Fonts From Google Server */
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Fredoka:wght@700&display=swap');

/* 2. Global Body Page Background Setup */
body {
    background-image: url('images/background-cat.jpeg') !important; /* Aapki desktop cats pic ka exact path */
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
}

/* 3. Main Title (Cats Collection) - Bold & Highly Attractive Style */
.cats-page-title {
    font-family: 'Fredoka', 'Plus Jakarta Sans', sans-serif !important;
    font-size: 36pt !important;              /* Full attractive prominent size */
    font-weight: 800 !important;              /* Extra heavy bold texture */
    color: purple !important;                /* Rich premium dark color */
    text-align: center !important;
    margin: 35px 0 20px 0 !important;
    letter-spacing: -0.5px !important;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.08) !important; /* Subtle premium pop effect */
    display: block !important;
}

/* Title ke aage agar koi default paw marker ya animation render ho rahi ho toh usay hatane ke liye */
.cats-page-title::after {
    content: "" !important;
    display: none !important;
}

/* 4. Products Grid Wrapper */
.products-grid {
    background: transparent !important;
    background-color: transparent !important;
    display: grid !important;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)) !important;
    gap: 30px !important;
}

/* 5. Clean Solid White Card Boxes (Piche se image bilkul hide ho jayegi) */
.product-card {
    background-color: #ffffff !important;   /* Complete solid white look */
    background: #ffffff !important;
    opacity: 1 !important;                    /* Zero transparency, text standard visibility */
    border: 2px solid purple !important;
    border-radius: 20px !important;            /* Smooth classy corners */
    padding: 18px !important;
    display: flex !important;
    flex-direction: column !important;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04) !important; /* Soft floating shadow */
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

/* Card Hover Animations */
.product-card:hover {
    transform: translateY(-6px) !important;
    box-shadow: 0 15px 35px rgba(30, 70, 32, 0.12) !important;
}
 /* Google Fonts se modern rounded cute typography import karne ke liye */
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap');
/* --- Cats Page Layout Styling --- */
.products-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px 0;
}

.cats-page-title {
  margin-bottom: 0; 
  font-size: 2.2rem;
  font-weight: 700;
  color: #1a1817;
  letter-spacing: -0.5px;
  text-align: center; /* Title ka text center karne k liye */
}
/* Main Navigation Bar Container */
.navigation-bar {
    width: 100%;
    padding: 20px;
    display: block;
    text-align: left;
    background-color: transparent;
    margin-bottom: 30px;
}

/* --- Highly Professional Back Button Styling --- */
.back-btn {
    display: inline-block;
    padding: 10px 24px;
    background-color: #ffffff; /* Premium white solid card layer */
    color: purple; /* Custom deep rose pink branding color */
    border: 1.5px solid #ffe3e8; /* Soft subtle pastel border */
    border-radius: 50px; /* Perfect modern capsule curve */
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 10.5pt;
    font-weight: 600;
    text-decoration: none !important; /* Browser ki default gandi underline khatam karne ke liye */
    letter-spacing: 0.3px;
    box-shadow: 0 4px 12px rgba(255, 77, 109, 0.06); /* Soft minimal ambient shadow */
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); /* Professional easing lag */
    cursor: pointer;
}

/* Arrow inside button */
.back-btn span {
    display: inline-block;
    margin-right: 6px;
    font-size: 12pt;
    transition: transform 0.3s ease;
    vertical-align: middle;
}

/* --- Interactive Hover Effects --- */
.back-btn:hover {
    background-color: purple; /* Background brand color me fill ho jayega */
    color: #ffffff !important; /* Text pure white ho jayega */
    border-color: purple;
    box-shadow: 0 6px 20px purple(255, 77, 109, 0.25); /* Glow shadow effect */
    text-decoration: none !important;
}

/* Hover par teer (arrow) halka sa left slide hoga smooth effect k sath */
.back-btn:hover span {
    transform: translateX(-4px);
}

/* Click Active state feedback */
.back-btn:active {
    transform: scale(0.97); /* Micro-interaction real tactile push click effect */
}

/* Products Grid Setup */
.products-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
}

/* Product Elegant Cards */
.product-card {
  background: #ffffff;
  border: 1px solid #eeebe7;
  border-radius: 20px;
  padding: 16px;
  display: flex;
  flex-direction: column;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.01);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  animation: fadeInUp 0.6s ease-out;
}

.product-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 35px rgba(74, 69, 64, 0.06);
  border-color: #dcd7d0;
}

/* Product Image Hover Zoom */
.product-img-wrapper {
  width:100%;
  height: 200px;
  object-fit:cover;
  border-radius: 15px;
  overflow: hidden;
  margin-bottom: 15px;
}

.product-img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.product-card:hover .product-img-wrapper img {
  transform: scale(1.05);
}

/* Typography Inside Product Cards */
.product-info h4 {
  font-size: 1.25rem;
  font-weight: 700;
  color: #1a1817;
  margin-bottom: 6px;
}

.product-info p {
  font-size: 0.9rem;
  color: #857e78;
  margin-bottom: 20px;
  min-height: 40px;
}

/* Card Footer & Buy Button */
.product-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
  padding-top: 15px;
  border-top: 1px solid #faf8f5;
}

/* Form layout adjustment for standard flow */
.cart-form {
  margin: 0;
  padding: 0;
}

.product-price {
  font-size: 1.15rem;
  font-weight: 700;
  color: #8a7355;
}

.add-to-cart-btn {
  padding: 10px 18px;
  background-color: #2c2927;
  color: #ffffff;
  border: none;
  border-radius: 10px;
  font-weight: 500;
  font-size: 0.85rem;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.add-to-cart-btn:hover {
  background-color: #4a4540;
}

/* Mobile View Adjustments */
@media (max-width: 768px) {
  .navigation-bar {
    flex-direction: column-reverse; /* Mobile par layout kharab na ho */
    gap: 15px;
    align-items: center;
  }
  .back-btn {
    position: static; /* Mobile par button normal adjust ho jaye */
  }
}
    </style>
<body>

  <div class="products-container">
    
    <!-- Top Navigation Bar with Back Button -->
    <div class="navigation-bar">
      <a href="firstpage.php#shop" class="back-btn">
        <span>&larr;</span> Back to Categories
      </a>
      <h2 class="cats-page-title">Cats Collection</h2>
    </div>

    <!-- 8 Professional Cat Type Cards Grid -->
    <div class="products-grid">
      
      <!-- Breed 1 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/persian-cat.jpeg" alt="Persian Cat">
        </div>
        <div class="product-info">
          <h4>Persian Cat</h4>
          <p>Luxurious long hair, calm demeanor & perfect indoor companion.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 15,000-30,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Persian Cat">
            <input type="hidden" name="item_price" value="22500"> <!-- Average value for logic handling -->
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 2 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Siamese-cat.jpeg" alt="Siamese Cat">
        </div>
        <div class="product-info">
          <h4>Siamese Cat</h4>
          <p>Highly intelligent, vocal, sleek body and striking blue eyes.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 15,000-30,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Siamese Cat">
            <input type="hidden" name="item_price" value="22500">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 3 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Himalayan-cat.jpeg" alt="Himalayan Cat">
        </div>
        <div class="product-info">
          <h4>Himalayan cat</h4>
          <p>Chubby cheeks, dense plush coat, calm and easy-going nature.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 15,000-40,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Himalayan Cat">
            <input type="hidden" name="item_price" value="27500">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 4 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Russian-cat.jpeg" alt="Russian Cat">
        </div>
        <div class="product-info">
          <h4>Russian cat</h4>
          <p>Gentle giants, large tufted ears, heavily furred and very friendly.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 15,000-35,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Russian Cat">
            <input type="hidden" name="item_price" value="25000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 5 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/British-shorthair.jpeg" alt="British Shorthair">
        </div>
        <div class="product-info">
          <h4>British Shorthair</h4>
          <p>Affectionate, blue-eyed, limp-soft when held, silky semi-long coat.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 30,000-150,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="British Shorthair">
            <input type="hidden" name="item_price" value="90000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 6 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Bengal-cat.jpeg" alt="Bengal Cat">
        </div>
        <div class="product-info">
          <h4>Bengal Cat</h4>
          <p>Wild leopard-like look, highly energetic, muscular and playful.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 50,000-150,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Bengal Cat">
            <input type="hidden" name="item_price" value="100000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 7 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Scottish-fold.jpeg" alt="Scottish Fold">
        </div>
        <div class="product-info">
          <h4>Scottish Fold</h4>
          <p>Famous for cute folded ears, owl-like round face and sweet nature.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 60,000-200,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Scottish Fold">
            <input type="hidden" name="item_price" value="130000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Breed 8 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Maine-Coon.jpeg" alt="Maine Coon">
        </div>
        <div class="product-info">
          <h4>Maine Coon</h4>
          <p>Elegant silvery-blue coat, quiet, reserved, with brilliant green eyes.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 150,000-300,000PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Maine Coon">
            <input type="hidden" name="item_price" value="225000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</body>
</html>