# Laravel CMS

-   [System Requirements](#system-requirements)
-   [Editor Requirements](#editor-requirements)
-   [Installation](#installation)

## System Requirements

-   [PHP >= 7.1.3](https://nodejs.org/en/)
-   [Node.js](https://nodejs.org/en/)
-   [Composer](https://getcomposer.org/)
-   [MySQL](https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html)
-   [Nginx](https://www.nginx.com/) or [Apache](https://httpd.apache.org/)
-   Enable PHP Extentions inside `php.ini` file
    -   OpenSSL PHP Extension
    -   PDO PHP Extension
    -   Mbstring PHP Extension
    -   Tokenizer PHP Extension
    -   XML PHP Extension
    -   Ctype PHP Extension
    -   JSON PHP Extension

## Editor Requirements

Install the follwoing extentions for your editor

-   [EditorConfig](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig)
-   [StyleLint](https://marketplace.visualstudio.com/items?itemName=shinnn.stylelint)

### Installation

1. `git clone git@github.com:code2gether/laravel-cms.git`
2. `cd laravel-cms`
3. Pull all composer packages `composer install && composer update` , and node modules `npm install`
4. Make a new `.env` file by running this command in your terminal `cp .env.example .env`
5. Run `php artisan key:generate`
6. Create a new database using (Sequel Pro, Navicat, phpMyAdmin, ...etc) with the correct credentials you specify in your `.env` file

```
DB_PORT     = 3306
DB_DATABASE = YOUR_DATABASE_NAME
DB_USERNAME = DATABASE_USER_NAME_OR_ROOT
DB_PASSWORD = DATABASE_PASSWORD_OR_EMPTY
```

7. Generate DB Tables `php artisan migrate`

#### Spin up PHP Dev Server

```
php artisan serve
```

#### Watch Live Changes

If you change any JS or SCSS code then you need to run this command to see changes on time.

```
npm run watch
```

enjoy yahya;)
