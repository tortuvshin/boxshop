<p align="center">
<a href="https://github.com/tortuvshin/boxshop">
<img src="https://github.com/tortuvshin/boxshop/blob/master/public/img/logo.png"/>
</a><br>
	<b>Laravel Ecommerce Platform</b>
</p>

<p align="center">
    <a href="https://github.com/tortuvshin/boxshop/issues">
        <img src="https://img.shields.io/github/issues/tortuvshin/boxshop.svg"
            alt="Issues"></a>
     <a href="https://github.com/tortuvshin/boxshop/fork">
        <img src="https://img.shields.io/github/forks/tortuvshin/boxshop.svg?style=social&label=Fork"
            alt="Forks"></a>
    <a href="https://github.com/tortuvshin/boxshop/stargazers">
        <img src="https://img.shields.io/github/stars/tortuvshin/boxshop.svg?style=social&label=Stars"
            alt="Stars"></a>
    <a href="https://github.com/tortuvshin/">
        <img src="https://img.shields.io/github/followers/tortuvshin.svg?style=social&label=Follow"
            alt="Followers"></a>
    <a href="https://raw.githubusercontent.com/tortuvshin/boxshop/master/LICENSE">
        <img src="https://img.shields.io/badge/license-MIT-blue.svg"
            alt="LICENSE"></a>
    <a href="https://twitter.com/intent/tweet?text=Wow:&url=%5Bobject%20Object%5D">
        <img src="https://img.shields.io/twitter/url/https/github.com/tortuvshin/boxshop.svg?style=social"
            alt="Tweet"></a>
</p>


This is a e-commerce platform I made mostly using Laravel 5.4

## Requirements

	PHP >= 5.6.4
	MySQL >= 5.7
	OpenSSL PHP Extension
	PDO PHP Extension
	Mbstring PHP Extension
	Tokenizer PHP Extension
	XML PHP Extension


<a name="installation"></a>
## Install

Clone repo

```
git clone https://github.com/tortuvshin/boxshop.git
```

Install Composer

```
[Download Composer](https://getcomposer.org/download/)
```

composer update/install 

```
composer install
```

Install Nodejs

```
https://nodejs.org/en/download/
```

NPM dependencies
```
npm install
```

Using Laravel Mix 

```
npm run dev
```

## How to setting 

Go into .env file and change Database and Email credentials.

```
php artisan migrate
```

```
php artisan db:seed
```
	
Generating a New Application Key
```
php artisan key:generate
```

[NODEJS]: https://nodejs.org/en/download/
[COMPOSER]: https://getcomposer.org/download/
[RECAPTCHA]: https://www.google.com/recaptcha/admin#list
