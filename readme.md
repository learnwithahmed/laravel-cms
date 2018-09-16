# Laravel CMS

-   [System Requirements](#system-requirements)
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

### Installation

1. `git clone git@github.com:code2gether/laravel-cms.git`
2. `cd laravel-cms`
3. update the .env file along with database connection
   `cp .env.example .env`
4. `composer install && composer update`
5. `php artisan migrate`

#### Run PHP Dev Server

```
php artisan serve
```

#### Run Node Engine

When you change any JS or SCSS code run this command to see changes on time.

```
npm run watch
```

enjoy ;)
