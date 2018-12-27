
## Documentation

- Clone project
- Go to the folder application using cd command on your cmd or terminal
- Run `composer install` on your cmd or terminal.
- Copy `.env.example` file to `.env` on the root folder.(Create your own `.env` if doesnot exist)
- Open your database(ex: phpmyadmin) and create new database.
- Open your `.env` file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.By default, the username is root and you can leave the password field empty. (This is for Xampp)
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve`
