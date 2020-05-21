# Develop

## Topics
1. [Introduction](#introduction)
2. [Documentation](#documentation)
3. [Requirements](#requirements)
4. [Installation & Configuration](#installation-and-configuration)
5. [License](#license)
6. [Security Vulnerabilities](#security-vulnerabilities)

### Introduction

[Bagisto](https://www.bagisto.com) is a hand tailored E-Commerce framework built on some of the hottest opensource technologies
such as [Laravel](https://laravel.com) (a [PHP](https://secure.php.net/) framework) and [Vue.js](https://vuejs.org)
a progressive Javascript framework.

**Bagisto can help you to cut down your time, cost, and workforce for building online stores or migrating from physical stores
to the ever demanding online world. Your business -- whether small or huge -- can benefit. And it's very simple to set it up.**

**Read our documentation: [Bagisto Docs](https://devdocs.bagisto.com/)**

**We also have a forum for any type of concerns, feature requests, or discussions. Please visit: [Bagisto Forums](https://forums.bagisto.com/)**

# Visit our live [Demo](https://demo.bagisto.com)

It packs in lots of features that will allow your E-Commerce business to scale in no time:

Check out [these features and more](https://bagisto.com/features/).

**For Developers**:
Take advantage of two of the hottest frameworks used in this project -- Laravel and Vue.js -- both of which have been used in Bagisto.

### Documentation

#### Bagisto Documentation [https://devdocs.bagisto.com](https://devdocs.bagisto.com)

### Requirements

* **OS**: Ubuntu 16.04 LTS or higher / Windows 7 or Higher (WampServer / XAMPP).
* **SERVER**: Apache 2 or NGINX.
* **RAM**: 3 GB or higher.
* **PHP**: 7.2.0 or higher.
* **Processor**: Clock Cycle 1 Ghz or higher.
* **For MySQL users**: 5.7.23 or higher.
* **For MariaDB users**: 10.2.7 or Higher.
* **Node**: 8.11.3 LTS or higher.
* **Composer**: 1.6.5 or higher.

### For Xampp version on Windows

Add this line to xampp\phpmyadmin\config.inc.php

```
$cfg['ExecTimeLimit'] = 6000;
And Change xampp\php\php.ini to

post_max_size = 750M 
upload_max_filesize = 750M   
max_execution_time = 5000
max_input_time = 5000
memory_limit = 2048M
And change xampp\mysql\bin\my.ini

max_allowed_packet = 200M
```

### Installation and Configuration

**1. You can install Bagisto by using the GUI installer.**

##### a. Download zip from the link below:

[Download the latest release](https://github.com/bagisto/bagisto/releases/latest)

##### b. Extract the contents of zip and execute the project in your browser:

~~~
http(s)://localhost/bagisto/public
~~~

or

~~~
http(s)://example.com/public
~~~

**2. Or you can install Bagisto from your console.**

##### Execute these commands below, in order

~~~
1. composer create-project bagisto/bagisto
~~~

~~~
2. Open file .env and insert your configuration of database
~~~

~~~
3. php artisan key:generate
~~~

~~~
4. php artisan bagisto:install
~~~


**To execute Bagisto**:

##### On server:

Warning: Before going into production mode we recommend you uninstall developer dependencies.
In order to do that, run the command below:

~~~
composer install
~~~

~~~
Open the specified entry point in your hosts file in your browser or make an entry in hosts file if not done.
~~~

##### On local:

~~~
php artisan serve
~~~


**How to log in as admin:**

> *http(s)://example.com/admin/login*

~~~
email:admin@example.com
password:admin123
~~~

**How to log in as customer:**

*You can directly register as customer and then login.*

> *http(s)://example.com/customer/register*


### License
Bagisto is a truly opensource E-Commerce framework which will always be free under the [MIT License](https://github.com/bagisto/bagisto/blob/master/LICENSE).

### Security Vulnerabilities
Please don't disclose security vulnerabilities publicly. If you find any security vulnerability in Bagisto then please email us: mailto:support@bagisto.com.

# Composer

Although, mailer environment variables are also required to be set up as **Bagisto** requires emails to send to customers and admins for various functionalities that are built in.

Atualizar a estrutura de novas tabelas

~~~
0. php artisan migrate
~~~

~~~
1. php artisan db:seed
~~~

~~~
2. php artisan vendor:publish
-> Press 0 and then press enter to publish all assets and configurations.
~~~

~~~
3. php artisan storage:link
-> Caso tenha problemas no upload de imagens
~~~

~~~
4. composer dump-autoload
~~~

# Local

### Run

```
php artisan serve
```

### Webpack

#### Run developer

```
npm run watch or npm run start
```

#### Run production

```
npm run prod
```

#### Hosts

~~~
http://localhost:3000 // node
http://localhost:8000 // artisan
~~~

#### Loggin do admin:

http(s)://example.com/admin/login 

~~~
email:admin@example.com
password:admin123
~~~

## Laravel

## Laravel Page Speed

> Simple package to minify HTML output on demand which results in a 35%+ optimization.

** You can install the package via composer **

```
$ composer require renatomarinho/laravel-page-speed
```

** Open and insert in project/src/config/app.php **

```
RenatoMarinho\LaravelPageSpeed\ServiceProvider::class
```

** Open and insert //app/Http/Kernel.php **

```
protected $middleware = [
    ...
    \RenatoMarinho\LaravelPageSpeed\Middleware\InlineCss::class,
    \RenatoMarinho\LaravelPageSpeed\Middleware\ElideAttributes::class,
    \RenatoMarinho\LaravelPageSpeed\Middleware\InsertDNSPrefetch::class,
    \RenatoMarinho\LaravelPageSpeed\Middleware\RemoveComments::class,
    \RenatoMarinho\LaravelPageSpeed\Middleware\TrimUrls::class,
    \RenatoMarinho\LaravelPageSpeed\Middleware\RemoveQuotes::class,
    \RenatoMarinho\LaravelPageSpeed\Middleware\CollapseWhitespace::class,
]
```

** Publish configuration file **

```
php artisan vendor:publish --provider="RenatoMarinho\LaravelPageSpeed\ServiceProvider"
```

### Generate new sprite

Insira seus novos png em **resources\themes\bliss\assets\sprites**

```sh
gulp
```

 2 arquivos do sprites serão gerados:

 - resources\themes\theme_activated\assets\sass\sprites.scss
 - resources\themes\theme_activated\assets\images\sprites.png

## New Provider

Quando um provider novo for criado (Assim ele sera recolhecido)

~~~
composer dump-autoload
php artisan vendor:publish // Digite 0 e enter
~~~

## Create New Theme

Go to your project’s root directory and check for config folder. Inside it, you will find a file called themes.php

Check contents of ‘themes.php’ file, it holds all necessary information of creating a custom theme.

Create the new theme folder with files in the ./resources/themes/{name_theme}

Go to http://127.0.0.1:8000/admin/channels/edit/1 to activate the new thema.

## Create a new Package

A package is like Laravel packages that includes views, controller and models. Packages are created to manage your large laravel applications into smaller units. In the bagisto, we have created plenty of packages at path packages/Bliss/.

https://devdocs.bagisto.com/create_package.html#how-to-create-package

# Plugins

### Laravel Data Faker

https://github.com/bagisto/laravel-data-faker
