# PHP User Form with Toggle Status

A simple PHP project that allows users to submit their name and age to a MySQL database and toggle a status field between 0 and 1. Built using HTML, PHP, JavaScript, and MySQL.

----

 Features

- Add a user (name + age) via a form.
- Store users in a MySQL database.
- Display all users in a table.
- Toggle each user's `status` (0 or 1) with a button.
- Live update of status using AJAX (without reloading the page).

---

 Technologies Used

- PHP
- MySQL
- JavaScript (AJAX)
- HTML

---

 Database Setup

1. Open **phpMyAdmin** (via XAMPP/MAMP).
2. Create a new database:
   ```sql
   CREATE DATABASE info;
   ```
3. Select the database and create a table using:
   ```sql
   CREATE TABLE user (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100),
     age INT,
     status TINYINT(1) DEFAULT 0
   );
   ```

---

 Files Included

 File          Description                                
 `index.php`   Main page with the form and user table     
 `db.php`      Database connection                        
 `submit.php`  Handles form submission to insert data     
 `fetch.php`   Fetches and displays users from database   
 `toggle.php`  Toggles the user's status via AJAX         

---

 How to Run the Project

1. Copy the project folder into `htdocs` (if using XAMPP).
2. Start **Apache** and **MySQL** from XAMPP control panel.
3. Open your browser and visit:
   ```
   http://localhost/your-folder-name/
   ```
4. Fill out the form and test toggling statuses.

---

 Example Behavior

- Submit:
  - Name: `Ali`, Age: `24`
- Appears in the table:
  - Status: `0`
- Click "Toggle":
  - Status becomes `1` instantly



