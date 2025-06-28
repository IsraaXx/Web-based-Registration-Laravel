# web-based-registration-laravel 📝

This Laravel project was developed as part of the **Web Based Information Systems** course (Spring 2025) at the Faculty of Computers and Artificial Intelligence, Cairo University.

It transforms the user registration form from the previous PHP assignment into a full Laravel web application, with additional modern features and best practices.

---

## 🌟 Features

✅ **User Registration**
- Stores user data into an SQLite database.
- Includes validations for:
  - Required fields
  - Email format
  - Password strength and confirmation
  - Unique username check

✅ **Email Notification**
- Automatically sends an email titled _“New registered user”_ with the content _“A new user `<username>` is registered to the system”_ upon successful registration.

✅ **WhatsApp Number Validation**
- Integrates with a third-party API to verify if a WhatsApp number is valid.

✅ **Multi-language Support**
- Supports both English and Arabic interfaces using Laravel's localization features.

✅ **Password Encryption**
- Stores user passwords securely using Laravel's hashing.

✅ **Automated Tests**
- Contains at least five automated tests, including:
  - Feature test to ensure registration inserts a new user and confirms with a success message.

---

## 📁 Project Structure

- `app/` - Controllers, models, and core logic.
- `resources/views/` - Blade templates for the frontend.
- `lang/` - Language files for multi-language support.
- `routes/` - Application routes.
- `public/` - Frontend assets (CSS, JS, images).
- `.env` - Environment configuration.
- `database/` - Contains:
    - `factories/` - Model factories for test data generation.
    - `migrations/` - Database table structures.
    - `seeders/` - Classes to seed data into the database.
    - SQLite database file for local development.
- `tests/` - Automated tests
- `composer.json` - PHP dependencies
---

## 🛠️ How to Run

1. Clone the repository:

    ```bash
    git clone <repo-url>
    cd <repo-folder>
    ```

2. Install Composer dependencies:

    ```bash
    composer install
    ```

3. Install npm dependencies (for assets):

    ```bash
    npm install
    npm run build
    ```

4. Copy `.env.example` to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Configure your database in `.env`. By default, the project uses SQLite. To use SQLite:

    - Create the SQLite database file:

        ```bash
        touch database/database.sqlite
        ```

    - In `.env` set:

        ```
        DB_CONNECTION=sqlite
        DB_DATABASE=/absolute/path/to/database/database.sqlite
        ```

    Or adjust your `.env` for MySQL if you prefer.

7. Run migrations:

    ```bash
    php artisan migrate
    ```

8. Run the development server:

    ```bash
    php artisan serve
    ```

9. Access the application at:

    ```
    http://localhost:8000
    ```
---
## 👥 Team Members

This project was developed by a team of **6 students** as part of the Web Based Information Systems course.

- Israa Mohamed
- Amany Mohamed
- Joseph Sameh
- Youssef Joseph
- Nour Ahmed
- Jonathan Mokhles
