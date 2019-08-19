# Readme

## About
```
Catalog Restfull API
```

## System Requirement
`PHP 7.1^`

## Installation
```
install PHP and composer
run composer install
```
## Setting ENV file
```
1. change .env.example to .env 
2. Create DB 
3. Set your ENV value
DB_HOST=YOUR_MYSQL_PORT
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD
4. if APP_KEY still empty run => php artisan key:generate
```
## Run APP
```
in terminal run command
php artisan migrate:refresh --seed (migration and seeding)
php artisan serve --port=9999 (run the application)
```