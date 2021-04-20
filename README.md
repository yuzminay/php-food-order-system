# 🥘 Food Order Simple Php System
This is the simplest example of online food ordering website with admin panel.

# ⚙️ Technology Used
1. HTML5
2. CSS3
3. PHP
4. MySQL


# 🧰 Features
1. You can browse all the Categories and Food Items. 
2. You can order food.
3. In admin panel, you can manage admins, foods, categories.
4. You can update orders in admin and see statistics.

## 📖 SETUP

1. Download project to your root directory. (XAMPP, NGINX and etc.)

2. Create MySql database.

3. Import databse (.sql file)

4. Go to 'config' folder and Open 'constants.php' file. Then make changes on following constants

```php
<?php 
//Start Session
session_start();

//Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/food-order/'); //Update the home URL of the project if you have changed port number or it's live on server
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');
    
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database 

?>
```
5. Your site running at SITEURL (ex. http://localhost/food-order/)

6. Your admin panel running at SITEURL/admin/index.php (ex.  http://localhost/food-order/admin/index.php)