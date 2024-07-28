# sadmin
Sample Admin Template using Laravel, Breeze, Spatie, Tailwind Css (Dashboard Template)

### Steps to Run After Cloning

1. **Duplicate the `.env.example` File**  
   In the project root directory, create a copy of the `.env.example` file and rename it to `.env`.

2. **Configure Database Settings**  
   Open the newly created `.env` file and update the database configuration with your preferred settings. For example:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sadmin
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Install Composer Dependencies**  
   Run the following command to install PHP dependencies:
   ```bash
   composer install
   ```

4. **Generate Application Key**  
   Generate a new application key using the command:
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seed the Database**  
   Set up the database by running migrations and seeding:
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Install Node.js Dependencies**  
   Install JavaScript dependencies with:
   ```bash
   npm install
   ```

7. **Build Assets**  
   Compile and optimize assets using:
   ```bash
   npm run build
   ```

8. **Start the Development Server**  
   Launch the development server with:
   ```bash
   php artisan serve
   ```
```
