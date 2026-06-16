# E-Merge Edu – Online Learning Management System

E-Merge Edu is a web-based Learning Management System (LMS) designed to facilitate online education by providing course management, student enrollment, and administrative functionalities through an interactive and user-friendly platform.

## Features

### Student Module
- User Registration and Login
- Profile Management
- Browse Available Courses
- Course Enrollment
- View Learning Content
- Track Enrollment Status

### Admin Module
- Admin Authentication
- Course Management (Add, Update, Delete)
- Lesson Management
- Student Management
- Enrollment Monitoring
- Dashboard Overview

### General Features
- Responsive User Interface
- Database Integration
- Dynamic Content Management
- Secure Session-Based Authentication
- Interactive Frontend Components

## Technologies Used

### Frontend
- HTML5
- CSS3
- Bootstrap
- JavaScript
- jQuery

### Backend
- PHP

### Database
- MySQL

## System Architecture

```
User
 │
 ▼
Frontend (HTML, CSS, Bootstrap, JS)
 │
 ▼
PHP Backend
 │
 ▼
MySQL Database
```

## Project Structure

```
E_merge_edu/
│
├── admin/              # Admin panel files
├── student/            # Student functionalities
├── courses/            # Course-related modules
├── database/           # Database connection files
├── css/                # Stylesheets
├── js/                 # JavaScript files
├── images/             # Project assets
└── index.php           # Main entry point
```

## Installation Guide

### Prerequisites

- XAMPP / WAMP Server
- PHP 7+
- MySQL

### Setup Steps

1. Clone the repository

```bash
git clone https://github.com/Anni883/E_merge_edu.git
```

2. Move the project folder to:

```text
htdocs/
```

3. Start Apache and MySQL using XAMPP.

4. Create a database in phpMyAdmin.

5. Import the provided SQL file into MySQL.

6. Configure database credentials inside:

```php
dbconnection.php
```

7. Open your browser and run:

```text
http://localhost/E_merge_edu
```



## Learning Outcomes

Through this project, the following concepts were implemented and practiced:

- Full-Stack Web Development
- Database Design and Management
- CRUD Operations
- Session Handling
- Authentication and Authorization
- Responsive Web Design
- Client-Server Architecture

## Future Improvements

- Online Payment Integration
- Certificate Generation
- Video-Based Learning Modules
- Email Notifications
- Role-Based Access Control Enhancement
- REST API Integration



## License

This project is developed for educational and academic purposes.
