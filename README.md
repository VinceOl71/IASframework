# IASframework

IASframework is a Laravel-based web application framework created as a school project.  
It features user registration, login, password security (strength meter and show/hide), and responsive UI.

---

## Features

- Secure password hashing
- Password strength meter with color indicators (weak, medium, strong) - selected feature
- Show/Hide password toggle
- Input validation 
- Role-based access control

---

## Tech Stack

| Component      | Technology        |
|----------------|-----------------|
| Backend        | Laravel (PHP)    |
| Frontend       | Blade + Tailwind CSS |
| Database       | MySQL            |
| Asset Bundler  | Vite             |

---

## Installation

1. Clone the repository
   - git clone https://github.com/VinceOl71/IASframework.git
   - cd IASframework

3. Install dependencies
   - composer install
   - npm install
   - npm run build

4. Setup environment
   - cp .env.example .env
   - php artisan key:generate

   ### Edit .env to set your database credentials
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=3306
   - DB_DATABASE=your_database
   - DB_USERNAME=root
   - DB_PASSWORD=secret

5. Run Migrations
   - php artisan migrate

6. Serve the application
   - php artisan serve

Members and their contributions:

1. Olaivar - Backend development, Laravel Setup
2. Shono - Frontend development, Tailwind CSS Integration
3. Echin - Database Design, Migrations

Progress Check:

Feb 4, 2026 
- Initialized Laravel Project
- Set up basic routes and controllers
- Implemented password hashing
- Tested login flow and reset password

Feb 11, 2025 
- Had internet issues so changes were commited later
- Updated Routes and controller
- Implemented Database and Migrations
- Implemented Role-Based Access

Feb 12, 2025
- Input Validation
- Implemented Password Strength Meter
- Styled webpages with Tailwind CSS
