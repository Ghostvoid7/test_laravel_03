This is a web application developed on Laravel v12.14.1 using PHP 8.3.21.

🧰 Technologies used
Laravel 12.14.1

PHP 8.3.21

Docker / Docker Compose

Blade Templates

MySQL

phpMyAdmin


Installing:

0. Clone repository:

        git clone https://github.com/Ghostvoid7/test_laravel_03.git

1. Enter to directory

        cd test_laravel_03

2. Run Docker-containers:
        
        docker-compose up -d --build

3. Enter to container:
    
        docker-compose exec php bash

4. Install Composer dependencies:

        composer install

5. Change environment variables

6. Run migrations

        php artisan migrate


7. Add seed Posts:

        php artisan db:seed PostsSeeder

Access to app

Site: http://localhost:8000

phpMyAdmin: http://localhost:8081

Login: root

Password: 12345
