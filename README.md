Before Pulling this repo please make sure to have Laravel, Composer, and NodeJs in your system

For these files and the project to work please follow:

1. Create a folder to store this repo and open your terminal.
2. Clone this repository "git clone https://github.com/DeveloperChink/fin_book_08.git"
3. Type in your terminal  "laravel new -f", "git restore -W .", "composer require laravel/ui", "npm install", and "npm run dev" sequentially.
4. Under ".env" file, make sure to set DB_CONNECTION=mysql, DB_DATABASE=financial, DB_USERNAME=root, DB_PASSWORD=root.
5. In your terminal type "php artisan migrate:install" to create the datatables in the database .
6. In your terminal type "php artisan serve" to run the server.
7. In a separate terminal type "mysql -u root" to connect to the database.
