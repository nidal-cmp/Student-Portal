# 🎓 Student Management Portal

**Student Management Portal** is a web-based PHP application designed to simplify student data management for academic institutions.  
It enables administrators or staff to **register, view, search, and delete student records** efficiently through an intuitive and responsive interface.

---

## 📋 Table of Contents
- [About the Project](#about-the-project)
- [Key Features](#key-features)
- [Tech Stack](#tech-stack)
- [Project Screenshots](#project-screenshots)
- [Installation & Setup](#installation--setup)
- [Usage Guide](#usage-guide)
- [Future Enhancements](#future-enhancements)
- [Contributing](#contributing)
- [Author](#author)
- [License](#license)

---

## 🧠 About the Project

The **Student Management Portal** was developed as part of my learning and development in **PHP and MySQL-based web systems**.  
It serves as a **simple CRUD application** (Create, Read, Update, Delete) for managing student information securely and efficiently.  

The goal of this project is to:
- Practice **server-side scripting** with PHP  
- Understand **database connectivity** using MySQL  
- Apply **secure data handling** practices in web development  

---

## 🌟 Key Features

- 🧾 **Student Registration** – Add new students by providing their name, age, course, and contact details  
- 🔍 **Search Students** – Find students using their name, course, or unique ID  
- 📋 **View Students** – Display all registered student records in a clean table view  
- ❌ **Delete Students** – Remove a student record by their ID instantly  
- 🔒 **Secure Database Operations** – Uses prepared statements to prevent SQL injection  
- 📱 **Responsive UI** – Works smoothly on desktop and mobile browsers  

---

## 🛠 Tech Stack

| Technology | Purpose |
|-------------|----------|
| **PHP 7.4+** | Backend scripting and server-side logic |
| **MySQL** | Database management and record storage |
| **HTML5** | Page structure and forms |
| **CSS3** | Styling and responsive design |
| **XAMPP / WAMP** | Local server environment for testing |

---

## 🖼 Project Screenshots

| 🏠 Home Page | 📝 Register Page | 📋 View Students |
|---------------|------------------|------------------|
| ![Home Page](./home.png) | ![Register Page](./register.png) | ![View Students](./view-students.png) |

| 🔍 Search Student | ❌ Delete Student |
|------------------|------------------|
| ![Search Page](./search.png) | ![Delete Page](./delete.png) |

---

## ⚙️ Installation & Setup

Follow these steps to set up and run the project locally:

```bash
# 1️⃣ Clone the repository
git clone https://github.com/yourusername/student-portal.git

# 2️⃣ Move into the project directory
cd student-portal

# 3️⃣ Set up the MySQL database
# Open MySQL and create a new database
CREATE DATABASE student_portal;

# 4️⃣ Import the SQL schema
mysql -u root -p student_portal < database/student_portal.sql

# 5️⃣ Configure database connection in PHP files
# Update your credentials inside submit.php, search.php, view.php, and delete.php
$conn = new mysqli("localhost", "root", "", "student_portal");

# 6️⃣ Start your Apache and MySQL servers using XAMPP or WAMP
# Then, open your browser and visit:
http://localhost/student-portal/home.php

# 🧭 Usage Guide

### 🏠 Home (`home.php`)
Main navigation page of the portal that links to all core functions — register, view, search, and delete students.

### 📝 Register (`index.php`)
Add new student details such as name, age, course, and contact information.  
Data is validated and stored securely in the MySQL database.

### 📋 View (`view.php`)
Displays a complete list of all registered student records in a structured table format.

### 🔍 Search (`search.php`)
Search for students by their **name**, **course**, or **student ID**.

### ❌ Delete (`delete.php`)
Remove student records by their unique ID quickly and safely.

# 🔮 Future Enhancements

### ✏️ Edit and Update Student Records
Allow users to modify existing student details directly from the portal.

### 🔑 Admin Login and Authentication
Add a secure admin login system for managing access to student data.

### 📊 Export Student Data as CSV/PDF
Enable exporting all student records into downloadable formats like CSV or PDF.

### 📸 Add Profile Pictures for Students
Include profile image upload functionality for each student record.

### 🗂 Pagination for Large Student Lists
Implement pagination to improve performance when displaying large datasets.

### 📱 Mobile-First UI Improvements
Redesign the interface for better mobile and tablet usability.

