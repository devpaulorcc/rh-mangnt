
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# RH Mangnt 🛠️

## Technologies Used 🚀

- **Laravel**: PHP framework used for backend development.
- **MySQL**: Relational database for storing information.
- **Bootstrap**: CSS framework for responsive design and styling.
<p align="center">
  <img src="https://skillicons.dev/icons?i=laravel,mysql,bootstrap" alt="Technologies and tools" />
</p>

## Installation ⚙️

1. Clone the repository:

   ```bash
   git clone https://github.com/devpaulorcc/rh-mangnt.git
   ```

2. Navigate to the project directory:

   ```bash
   cd rh-mangnt
   ```

3. Install Composer dependencies:

   ```bash
   composer install
   ```

4. Copy the example `.env` file and set up environment variables:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Set up database information in the `.env` file:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

7. Run migrations to create tables in the database:

   ```bash
   php artisan migrate
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`.

## Contribution 🤝

Contributions are welcome! Feel free to open issues or submit pull requests.
