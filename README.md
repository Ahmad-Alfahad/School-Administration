# School Management System

## Overview

School Management System is a Laravel-based web application designed to manage students, teachers, and classrooms through a modern and user-friendly interface.

The project follows a clean architecture approach using the Repository Pattern and Service Layer to ensure maintainability, scalability, and separation of concerns.

---

## Features

### Authentication

- Secure login system using Laravel Breeze
- Protected routes
- Session-based authentication

### Dashboard

- Total Students Count
- Total Teachers Count
- Total Classrooms Count
- Quick system overview

### Students Management

- Create Student
- View Student Details
- Update Student Information
- Delete Student
- Search Students
- Paginated Results

### Teachers Management

- Create Teacher
- View Teacher Details
- Update Teacher Information
- Delete Teacher
- Search Teachers
- Paginated Results

### Classrooms Management

- Create Classroom
- View Classroom
- Update Classroom
- Delete Classroom
- Search Classrooms
- Paginated Results

### Business Rules

- Prevent assigning students to full classrooms
- Prevent duplicate classroom names
- Prevent deleting classrooms containing students

---

## System Architecture

The application follows the following architecture:

Controller
→ Service Layer
→ Repository Layer
→ Model

### Repository Layer

Responsible for all database operations.

### Service Layer

Responsible for business rules and application logic.

### Form Requests

Responsible for request validation.

---

## Technologies Used

- PHP 8+
- Laravel 12
- MySQL
- Tailwind CSS
- Alpine.js
- SweetAlert2
- Laravel Breeze

---

## Database Structure

### Users

| Column       | Description           |
| ------------ | --------------------- |
| id           | Primary Key           |
| name         | User Name             |
| email        | User Email            |
| phone        | User Phone            |
| classroom_id | Assigned Classroom    |
| password     | User Password         |
| created_at   | Creation Timestamp    |
| updated_at   | Last Update Timestamp |

---

### Classrooms

| Column       | Description                |
| ----------   | -------------------------- |
| id           | Primary Key                |
| name         | Classroom Name             |
| capacity     | Maximum Number of Students |
| description  | Description For Classroom  |
| created_at   | Creation Timestamp         |
| updated_at   | Last Update Timestamp      |

---

### Teachers

| Column         | Description           |
| ------------   | --------------------- |
| id             | Primary Key           |
| name           | Teacher Name          |
| email          | Teacher Email         |
| phone          | Teacher Phone Number  |
| specialization | Teacher Specialization|
| classroom_id   | Assigned Classroom    |
| created_at     | Creation Timestamp    |
| updated_at     | Last Update Timestamp |

---

### Students

| Column       | Description           |
| ------------ | --------------------- |
| id           | Primary Key           |
| name         | Student Name          |
| email        | Student Email         |
| phone        | Student Phone         |
| birth_date   | Student Birth Dat     |
| classroom_id | Assigned Classroom    |
| created_at   | Creation Timestamp    |
| updated_at   | Last Update Timestamp |

---

## Installation

Clone the repository:


git clone <https://github.com/Ahmad-Alfahad/School-Adminstration.git>


Install dependencies:


composer install

npm install


Create environment file:


cp .env.example .env


Generate application key:


php artisan key:generate


Configure database credentials inside the `.env` file.

Run migrations and seeders:


php artisan migrate:fresh --seed


Build frontend assets:


npm run build


Start the application:


php artisan serve


---

## Test Account

Email:

admin@school.com

Password:

password


Update these credentials according to your seeders if different.

---

## Screenshots

### Dashboard

![Dashboard](screenshots/dashboard1.png)
![Dashboard](screenshots/dashboard2.png)

### Students Management

![Students](screenshots/student.png)
![Students](screenshots/studentinfo.png)

### Teachers Management

![Teachers](screenshots/teacher.png)
![Teachers](screenshots/teacherinfo.png)

### Classrooms Management

![Classrooms](screenshots/classroom.png)
![Classrooms](screenshots/classroominfo.png)

---

## Future Improvements

- Role & Permission Management
- Attendance Management
- Subjects Management
- Exams Management
- Reports & Exporting
- Notifications

---

## Author

Ahmed Alfahad

Laravel Developer
