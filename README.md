laravel-transaction-middleware
=================================

This is a middleware used to open database transactions in the request. 
If an exception is thrown during the request execution, 
the SQL statements executed in the whole request will be rolled back

## Requirements

- laravel `>=5.5`

## Install

```bash
$ composer require cannonsir/laravel-transaction-middleware
```


## Uninstall

```bash
$ composer remove cannonsir/laravel-transaction-middleware
```


## Usage

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

## License

MIT License. See the LICENSE file.
