laravel-transaction-middleware
=================================

[![Latest Stable Version](https://poser.pugx.org/cannonsir/laravel-transaction-middleware/v/stable)](https://packagist.org/packages/cannonsir/laravel-transaction-middleware)
[![Total Downloads](https://poser.pugx.org/cannonsir/laravel-transaction-middleware/downloads)](https://packagist.org/packages/cannonsir/laravel-transaction-middleware)
[![Latest Unstable Version](https://poser.pugx.org/cannonsir/laravel-transaction-middleware/v/unstable)](https://packagist.org/packages/cannonsir/laravel-transaction-middleware)
[![License](https://poser.pugx.org/cannonsir/laravel-transaction-middleware/license)](https://packagist.org/packages/cannonsir/laravel-transaction-middleware)


This is a middleware used to open database transactions in the request. 
If an exception is thrown during the request execution, 
the SQL statements executed in the whole request will be rolled back

## Usage

> You just need to use `transaction` middleware
 

Using Middleware in routing

```php
Route::middleware('transaction')->resource('users', 'UserController');
```

Using middleware in the controller constructor

```php
public function __construct()
{
    $this->middleware('transaction');
}
```

## Requirements

- laravel `>= 5.5`

## Install

```bash
$ composer require cannonsir/laravel-transaction-middleware
```

## Uninstall

```bash
$ composer remove cannonsir/laravel-transaction-middleware
```

## License

MIT License. See the LICENSE file.
