# PetSphere - Apne Computer Par Local Test Kaise Karein (XAMPP)

## Step 1: XAMPP Install Karein
1. https://www.apachefriends.org se XAMPP download karein (Windows ke liye).
2. Install karein (default settings rakhein).

## Step 2: Project Files Sahi Jagah Rakhein
1. XAMPP install hone ke baad `C:\xampp\htdocs` folder open karein.
2. Is poore `FYP` folder ko copy karke `C:\xampp\htdocs\FYP` mein paste kar dein.
   (Yani final path aisa hona chahiye: `C:\xampp\htdocs\FYP\login.php` waghera)

## Step 3: Apache aur MySQL Start Karein
1. XAMPP Control Panel open karein.
2. `Apache` aur `MySQL` ke saamne "Start" button dabayein.
3. Dono green ho jayein toh sahi hai.

## Step 4: Database Banayein
1. Browser mein ye link kholein: `http://localhost/phpmyadmin`
2. Upar "Databases" tab par click karein.
3. Database ka naam likhein: `pet_sphere` aur "Create" par click karein.
4. Ab naye bane `pet_sphere` database ko select karein (left sidebar se).
5. Upar "Import" tab par click karein.
6. "Choose File" se is folder mein di gayi `pet_sphere_setup.sql` file select karein.
7. Neeche "Import" (ya "Go") button dabayein.
8. Sab tables (users, manage_pet_shop, vet_consults, waghera) ban jayengi, aur 2 test users
   bhi add ho jayenge:
   - Admin login:  admin@petsphere.com / admin123
   - Client login: client@petsphere.com / client123

## Step 5: Website Chalayein
1. Browser mein ye link open karein:
   `http://localhost/FYP/login.php`
2. Upar diye gaye test email/password se login karein.
3. Baaki pages (dashboard, manage-pets, vet-consults, pharmacy, waghera) sab is
   `http://localhost/FYP/` link ke andar milenge.

## Common Masla (Troubleshooting)
- Agar "Connection failed" ya "database not found" error aaye:
  - Check karein MySQL start hai ya nahi.
  - Check karein database ka naam exactly `pet_sphere` hai.
  - `config.php` aur `connection.php` mein username `root` aur password khali (`""`) hai —
    agar aapne XAMPP mein MySQL root password set kiya hua hai, toh in dono files mein
    password wahi update karna hoga.
- Agar koi page blank aaye: Apache error log check karein
  (`C:\xampp\apache\logs\error.log`) ya PHP error dikhane ke liye XAMPP mein
  `php.ini` mein `display_errors = On` kar dein.

Bas itna karne se poora project apke computer par
`http://localhost/FYP/login.php` par chal jayega.
