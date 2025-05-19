Це вебзастосунок, розроблений на базі Laravel v12.14.1 з використанням PHP 8.3.21.

🧰 Використані технології
Laravel 12.14.1

PHP 8.3.21

Docker / Docker Compose

Blade Templates

MySQL

phpMyAdmin


Встановлення:

1. Клонувати репозиторій:

        git clone https://github.com/Ghostvoid7/test_laravel_03.git

2. Запустити Docker-контейнери:
        
        docker-compose up -d --build

3. Увійти до контейнеру:
    
        docker-compose exec php bash

4. Виконати міграції

        php artisan migrate


Додати сідери Постів:

    php artisan db:seed PostsSeeder

Доступ до застосунку

Сайт: http://localhost:8000

phpMyAdmin: http://localhost:8081

Логін: root

Пароль: 12345