
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>  

<p align="center">  
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>  
</p>  

## Appricotsoft(Laravel)

Laravel was used to develop the application because it is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

##  Project Setup
In order to setup the application locally on you system.
1. clone the repository
2. `git clone git@github.com:willypelz/appricotsoft.git`
3. cd into the project directory
4. `cd appricotsoft`
5. install the dependencies for the application
6. `composer install` 
7. create a database called `appricotsoft` in your database
8. update the env files with your mysql connection details that you have on your system


    DB_CONNECTION=mysql  
    DB_HOST=YOUR_HOST  
    DB_PORT=MYSQL_PORT  
    DB_DATABASE=appricotsoft  
    DB_USERNAME=MYSQL_USER_NAME  
    DB_PASSWORD=MYSQL_PASSWORD

9. `php artisan migrate`
10. `npm install`
11. `npm run watch`
12. serving the project
13. `php artisan serve`


# Creating a user through command
14. `php artisan user:create`

##  Testing the Application
**Application Testing**  is defined as a software  **testing**  type, conducted through scripts with the motive of finding errors in software. It deals with  **tests**  for the entire  **application**. It helps to enhance the quality of your  **applications**  while reducing costs, maximizing ROI, and saving development time.

In order to run the feature test that was written
`php ./vendor/bin/phpunit`
when you want to generate a coverage
`php ./vendor/bin/phpunit --coverage-html ./coverage`

This generates html report files in the application in the coverage folder, which can be located in the root directory

### Important
Ensure you setup xdebug on your system. <small> [Xdebug Setup for local machine (xampp)](https://medium.com/d6-digital/installing-xdebug-for-xampp-with-php-in-windows-d2b750861118) </small>

##  Testing the Application (user testing)

1. Note:: ** when creating an author in the application you have to arrange the name of the authors separated with commas

2. when testing the external application you can use any of the strings to search for the name of the appricotsoft

`"name"  or "name or name" or name`



# Updates

1. There are still advance optimization and refactoring that can still be done in this project
2. Add unit testing. 


# Developer(Softwaredef)

1. Name: Asefon Michael Pelumi
2. Nickname: Softwaredef
3. Mail: pelumiasefon@gmail.com

Thanks. If you have any problem setting it up or complain you can kindly post them on issues or message me directly
