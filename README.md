# travel-alya
Just another project

## Setting up

### Pulling repositories

```
git clone https://github.com/kofix-ml/travel-alya.git
```

### setting up project

1. go into project folder
  ```
  cd travel-alya/
  ```
2. initialising project
```
composer install
npm install
```
3. setting up env
```
cp env .env
```
..* replace db config 
  ![alt text](https://github.com/kofix-ml/travel-alya/blob/master/readmeimg/Screen Shot 2016-12-19 at 12.44.55 AM.png "Logo Title Text 1")
4. setting up project 
..* migrate db
  ```php
  php artisan migrate
  ```
..* seed db
  ```php
  php artisan db:seed
  ```

### launching project

```php
php artisan serve --port 8000
```
