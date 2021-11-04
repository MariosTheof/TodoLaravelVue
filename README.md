## Todo Laravel + Vue.js Application

An sqlite database is provided with this repo, so no need to run migrations or seeders.

### Docker run:
1. Add .env file to project directory.
2. `docker-compose up`

### Run it locally:
1. `composer install`

2. Create **.env** file with an sqlite database
which points to the local database file _**todo.sqlite**_.
   
3. `php artisan key:generate`

4. php artisan serve

##### Notes if you run locally: 
Make sure you have at least php 7.3 installed with
sqlite.so enabled in php.ini file. If you get driver error you might need to install php-sqlite3 with
`sudo apt-get install php-sqlite3`
