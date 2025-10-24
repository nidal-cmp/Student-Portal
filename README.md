# 🎓 Student Management Portal 

A simple, clean, and effective PHP-based Student Portal to manage student records. This application allows users to **register new students**, **search for existing students**, **view all students**, and **delete students by their ID**.

## 📌 Features

- **Student Registration**  
  Register new students by providing details like name, age, course, and contact information.
  
- **View Students**  
  View a list of all registered students.

- **Search Students**  
  Search for students using keywords like name, course, or ID.

- **Delete Students**  
  Remove student records by their unique student ID.

## 🛠️ Technologies Used

### Backend
- PHP 7.4+
- MySQL (for data storage)

### Frontend
- HTML5, CSS3
- Basic responsive layout

### Security
- Prepared statements for SQL operations
- Input sanitization and validation

## 📁 File Structure

```
student-portal/
├── delete.php         # Script to delete a student by ID
├── home.php           # Home page and main navigation
├── index.php          # Welcome page / landing page
├── search.php         # Search students page
├── submit.php         # Form and logic to register new students
├── view.php           # View all student records
└── database/          # (optional) Database connection and schema files
```

## 📝 Installation

### Requirements

- Web server (Apache/Nginx)
- PHP 7.4+
- MySQL 5.7+

### Setup Instructions

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/student-portal.git
   ```

2. **Set up the database**:
   - Create a new MySQL database (e.g., `student_portal`).
   - Import your SQL schema:
     ```bash
     mysql -u username -p student_portal < database/student_portal.sql
     ```

3. **Configure database connection**:
   - Update your database connection details in `submit.php`, `search.php`, `view.php`, `delete.php`.

4. **Set up your web server**:
   - Point your web server’s document root to the project directory.

## 📖 Usage

- **Home Page**: Go to `home.php` for navigation.
- **Register Students**: Use `submit.php` to add new student records.
- **View Students**: Use `view.php` to view all registered students.
- **Search Students**: Use `search.php` to search for specific students.
- **Delete Students**: Click delete buttons on `view.php` to remove students by ID.

## 🔒 Security Considerations

- Use HTTPS in production.
- Regularly update PHP and MySQL.
- Implement additional measures:
  - CSRF protection
  - Rate limiting



## 📷 Screenshots

### 🏠 Home Page  
![Home Page](assets/screenshots/homepage.png)

### 📝 Register Student Page 
![Register Form](assets/screenshots/registrationpage.png)

### 📋 Student List View  
![View_Page](assets/screenshots/viewpage.png)

### 📋 Search Student Page 
![Search_Page](assets/screenshots/searchpage.png)

### 📋 Delete Student Page 
![Delete_Page](assets/screenshots/deletepage.png)



## 📈 Future Enhancements

- User authentication (admin panel)
- Edit/update student records
- Export student data (CSV/PDF)
- Pagination for student lists
- Mobile-friendly design
- Student profile pictures

## 🤝 Contributing

Contributions are welcome! Follow these steps:

1. Fork the repository
2. Create a new branch:
   ```bash
   git checkout -b feature/YourFeature
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add your feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/YourFeature
   ```
5. Open a Pull Request
