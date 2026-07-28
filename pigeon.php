<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pigeons Collection | Premium Pet Boutique</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Main Common Style Link -->
  <link rel="stylesheet" href="pigeon.css">
  <!-- Separate Pigeons Page Style Link -->
  <link rel="stylesheet" href="pigeons-style.css">
</head>
<style>
    /* ==========================================================================
   CATS PAGE PREMIUM UTILITY STYLES (EXACT MATCH TO DESIGN)
   ========================================================================== */

/* 1. Import Premium Fonts From Google Server */
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Fredoka:wght@700&display=swap');

/* 2. Global Body Page Background Setup */
body {
    background-image: url('images/background-pigeons.jpeg') !important; /* Aapki desktop cats pic ka exact path */
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
}

/* 3. Main Title (Cats Collection) - Bold & Highly Attractive Style */
.pigeons-page-title {
    font-family: 'Fredoka', 'Plus Jakarta Sans', sans-serif !important;
    font-size: 36pt !important;              /* Full attractive prominent size */
    font-weight: 800 !important;              /* Extra heavy bold texture */
    color: blue !important;                /* Rich premium dark color */
    text-align: center !important;
    margin: 35px 0 20px 0 !important;
    letter-spacing: -0.5px !important;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.08) !important; /* Subtle premium pop effect */
    display: block !important;
}

/* Title ke aage agar koi default paw marker ya animation render ho rahi ho toh usay hatane ke liye */
.parrots-page-title::after {
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
    border: 2px solid darkblue !important;
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
    box-shadow: 0 16px 35px rgba(30, 70, 32, 0.12) !important;
}
 /* Google Fonts se modern rounded cute typography import karne ke liye */
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap');
/* --- Cats Page Layout Styling --- */
.products-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px 0;
}

.pigeons-page-title {
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
    color: darkblue; /* Custom deep rose pink branding color */
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
    background-color: darkblue; /* Background brand color me fill ho jayega */
    color: #ffffff !important; /* Text pure white ho jayega */
    border-color: darkblue;
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
  border-radius: 15px;
  overflow: hidden;
  margin-bottom: 15px;
  display:block;
}

.product-img-wrapper img {
  width: 100%;
  height: 315px;
  object-fit: cover;
  object-position:center;
  display:block;
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

/* Form layout structure adjustment */
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

/* Mobile View Adjustments */
@media (max-width: 768px) {
  .navigation-bar {
    flex-direction: column-reverse;
    gap: 15px;
    align-items: center;
  }
  .back-btn {
    position: static;
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
      <h2 class="pigeons-page-title">Pigeons Collection</h2>
    </div>

    <!-- 8 Professional Pigeon Type Cards Grid -->
    <div class="products-grid">
      
      <!-- Pigeon 1 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Teddy-pigeon.jpeg" alt="White Pigeon">
        </div>
        <div class="product-info">
          <h4>Teddy Pigeon</h4>
          <p>Pure white feathers, symbol of peace, and very gentle nature.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 3,000-15000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Teddy Pigeon">
            <input type="hidden" name="item_price" value="9000"> <!-- Median calculation for handling logic -->
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 2 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Kamagar-pigeon.jpeg" alt="Fantail Pigeon">
        </div>
        <div class="product-info">
          <h4>Kamagar Pigeon</h4>
          <p>Stunning fan-shaped tail like a peacock, proud posture and elegant gait.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 2500-8,000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Kamagar Pigeon">
            <input type="hidden" name="item_price" value="5250">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 3 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Fantail-pigeon.jpeg" alt="Homing Pigeon">
        </div>
        <div class="product-info">
          <h4>Fantail Pigeon</h4>
          <p>Exceptional navigation skills, loyal breed, known for finding its way home.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 2000-6000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Fantail Pigeon">
            <input type="hidden" name="item_price" value="4000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 4 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Sialkoti-pigeon.jpeg" alt="King Pigeon">
        </div>
        <div class="product-info">
          <h4>Sialkoti Pigeon</h4>
          <p>Large exhibition breed, beautifully heavy body with a calm personality.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 2,000-7,000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Sialkoti Pigeon">
            <input type="hidden" name="item_price" value="4500">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 5 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Jacobin-pigeon.jpeg" alt="Tumbler Pigeon">
        </div>
        <div class="product-info">
          <h4>Jacobin Pigeon</h4>
          <p>Famous for performing acrobatic backward flips while flying high.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 8,000-20,000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Jacobin Pigeon">
            <input type="hidden" name="item_price" value="14000">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 6 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Pouter-pigeon.jpeg" alt="Jacobin Pigeon">
        </div>
        <div class="product-info">
          <h4>Pouter Pigeon</h4>
          <p>Distinguished by an incredible, dense muff of feathers forming a hood.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 10,000-25,000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Pouter Pigeon">
            <input type="hidden" name="item_price" value="17500">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 7 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Feral-pigeon.jpeg" alt="Lahore Pigeon">
        </div>
        <div class="product-info">
          <h4>Feral Pigeon</h4>
          <p>Beautiful local heritage breed with unique marked feather patterns.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 400-800 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Feral Pigeon">
            <input type="hidden" name="item_price" value="600">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

      <!-- Pigeon 8 -->
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="images/Shirazi-pigeon.jpeg" alt="Tippler Pigeon">
        </div>
        <div class="product-info">
          <h4>Shirazi Pigeon</h4>
          <p>Endurance flyer, capable of staying in the air for hours continuously.</p>
        </div>
        <div class="product-footer">
          <span class="product-price">Rs. 3500-10,000 PKR</span>
          <form action="add-cart.php" method="POST" class="cart-form">
            <input type="hidden" name="item_name" value="Shirazi Pigeon">
            <input type="hidden" name="item_price" value="6750">
            <button type="submit" name="add_to_cart" class="add-to-cart-btn">BUY NOW</button>
          </form>
        </div>
      </div>

    </div>
  </div>

</body>
</html>