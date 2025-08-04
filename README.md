# SMK Cerulean Blue — School Management Web Application

This is a full-stack Laravel + ReactJS web application for managing students, teachers, classes, and users at SMK Cerulean Blue.  
The system was built with educational institutions in mind, especially for streamlined CRUD and authentication operations.

## Built With

- Laravel 9
- PHP 8+
- ReactJS (Vite)
- MySQL
- Bootstrap 5
- JavaScript / Blade
- Auth Middleware + Session

## Features

- Login / Logout authentication system
- Full CRUD for:
  - Students (`tb_siswa`)
  - Teachers (`tb_guru`)
  - Classes (`tb_kelas`)
  - Users (`tb_user`)
- Dynamic foreign key relationships between tables
- React integration using `app.jsx` (via Vite)
- Responsive and consistent UI using Bootstrap
- Navbar with greeting based on login session (e.g. "Good Morning, Hirano Kokoro")
- Prepared for local deployment (XAMPP/Apache)

## Folder Structure
resources/
└── views/
├── siswa/
├── guru/
├── kelas/
├── user/
└── layouts/

## Setup & Installation

git clone https://github.com/your-username/smk-cerulean-blue.git
cd smk-cerulean-blue

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Run Vite (for React)
npm run dev

# Setup .env and database
cp .env.example .env
php artisan key:generate
php artisan migrate

# Start local server
php artisan serve

# Login
After registering a new user, login via /login. Users are stored in tb_user table.

# Notes
This project was developed as a standalone fullstack application without external hosting
You may reuse this code for learning or private use

# Contact
Created with ❤️ by Anggoro Sakti Anindhito
Feel free to reach me via LinkedIn or GitHub if you have questions or suggestions!
