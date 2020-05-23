# Storename

## Documentation

Bagisto Documentation [https://devdocs.bagisto.com](https://devdocs.bagisto.com)

## Requirements

* **OS**: Ubuntu 16.04 LTS or higher / Windows 7 or Higher (WampServer / XAMPP).
* **SERVER**: Apache 2 or NGINX.
* **RAM**: 3 GB or higher.
* **PHP**: 7.2.0 or higher.
* **Processor**: Clock Cycle 1 Ghz or higher.
* **For MySQL users**: 5.7.23 or higher.
* **For MariaDB users**: 10.2.7 or Higher.
* **Node**: 8.11.3 LTS or higher.
* **Composer**: 1.6.5 or higher.

## For Xampp version on Windows

Add this line to xampp\phpmyadmin\config.inc.php

```
$cfg['ExecTimeLimit'] = 6000;
```

And Change xampp\php\php.ini to

```
post_max_size = 750M 
upload_max_filesize = 750M   
max_execution_time = 5000
max_input_time = 5000
memory_limit = 2048M
And change xampp\mysql\bin\my.ini

max_allowed_packet = 200M
```

## Install

#### Install packages composer

```
composer install
```

#### Laravel

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

#### Install npm

```
yarn install
```

#### Server

```
yarn start
```

#### Build

```
yarn prod
```

## Admin

> *http(s)://example.com/admin/login*

~~~
email:admin@example.com
password:admin123
~~~