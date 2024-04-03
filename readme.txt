    docker-compose build app
    docker-compose up -d

    untuk composer install 
    docker-compose exec app rm -rf vendor composer.lock
    docker-compose exec app composer install

    docker-compose build app
    docker-compose up -d

    cara running setelah docker dijalankan 
    jalankan : 
    untuk migrate dan seed 
    docker-compose exec app php artisan migrate:fresh --seed


    note 

    untuk masuk ke mysql 
    docker exec -it travellist-db mysql -u root -p


    jika ada perubahan 
    docker di stop terus di tracing 
    di build ulang : 