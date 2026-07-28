-- ============================================================
-- PetSphere (FYP) Database Setup Script
-- Is file ko phpMyAdmin mein "pet_sphere" naam ki database
-- create karke import karein.
-- ============================================================

CREATE DATABASE IF NOT EXISTS pet_sphere;
USE pet_sphere;

-- 1. USERS TABLE (login.php / signup.php ke liye)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL DEFAULT 'client'
);

-- Test users (email / password / role)
INSERT INTO users (email, password, role) VALUES
('admin@petsphere.com', 'admin123', 'admin'),
('client@petsphere.com', 'client123', 'client');

-- 2. MANAGE PET SHOP (add-pet.php / manage-pets.php)
CREATE TABLE IF NOT EXISTS manage_pet_shop (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Pet_Breed VARCHAR(150),
    Category VARCHAR(100),
    Price DECIMAL(10,2),
    Status VARCHAR(50)
);

-- 3. VET CONSULTS (appointments / doctors)
CREATE TABLE IF NOT EXISTS vet_consults (
    doc_id INT AUTO_INCREMENT PRIMARY KEY,
    doc_name VARCHAR(150),
    doc_spec VARCHAR(150),
    doc_fee DECIMAL(10,2),
    doc_status VARCHAR(50)
);

-- 4. PHARMACY INVENTORY (medicines)
CREATE TABLE IF NOT EXISTS pharmacy_inventory (
    m_id INT AUTO_INCREMENT PRIMARY KEY,
    m_name VARCHAR(150),
    m_cat VARCHAR(100),
    m_price DECIMAL(10,2),
    m_status VARCHAR(50)
);

-- 5. NOTIFICATIONS (notification.php)
CREATE TABLE IF NOT EXISTS notifications (
    id INT PRIMARY KEY,
    title VARCHAR(200),
    description TEXT,
    updated_at DATETIME
);

-- 6. REVIEWS (dashboard-client.php feedback form)
CREATE TABLE IF NOT EXISTS reviews (
    id INT PRIMARY KEY,
    rating VARCHAR(20),
    review_text TEXT,
    created_at DATETIME
);

-- 7. RECENT UPDATES (client dashboard)
CREATE TABLE IF NOT EXISTS recent_updates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50),
    details VARCHAR(255)
);

INSERT INTO recent_updates (status, details) VALUES
('Confirmed', 'Appointment with Dr. Sarah Ahmed'),
('Pending', 'Medicine Order #102 in transit');

-- 8. CLIENT BILLING (outstanding amount calc on client dashboard)
CREATE TABLE IF NOT EXISTS client_billing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fee_amount DECIMAL(10,2),
    status VARCHAR(50)
);

INSERT INTO client_billing (fee_amount, status) VALUES (15500, 'Pending');

-- 9. CLIENT PAYMENTS (payment-client.php)
CREATE TABLE IF NOT EXISTS client_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_method VARCHAR(50),
    cardholder_name VARCHAR(150) NULL,
    card_number VARCHAR(50) NULL,
    expiry_date VARCHAR(20) NULL,
    mobile_number VARCHAR(30) NULL,
    account_name VARCHAR(150) NULL,
    amount DECIMAL(10,2),
    status VARCHAR(50),
    created_at DATETIME
);

-- 10. WEBSITE SETTINGS (website-client.php)
CREATE TABLE IF NOT EXISTS website_settings (
    id INT PRIMARY KEY,
    title VARCHAR(200),
    email VARCHAR(150),
    about_desc TEXT,
    facebook_url VARCHAR(255),
    instagram_url VARCHAR(255),
    theme_color VARCHAR(20),
    last_updated VARCHAR(50)
);

INSERT INTO website_settings (id, title, email, about_desc, facebook_url, instagram_url, theme_color, last_updated) VALUES
(1, 'PetSphere', 'contact@petsphere.com', 'PetSphere is your one-stop solution for pet care, vet consultations and pharmacy needs.', 'https://facebook.com/petsphere', 'https://instagram.com/petsphere', '#ff7b00', 'Jul 26, 2026');

-- 11. ACTIVITY HISTORY (history-client.php)
CREATE TABLE IF NOT EXISTS activity_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    activity VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ============================================================
-- Done. Ab aap XAMPP start karke http://localhost/FYP/login.php
-- par ja kar login test kar sakte hain:
--   Admin  -> admin@petsphere.com / admin123
--   Client -> client@petsphere.com / client123
-- ============================================================
