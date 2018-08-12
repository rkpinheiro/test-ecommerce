<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About this project

The project is a simplify ecommerce. There are features as:
- User registration.
- Product List
- Checkout.
- Cart management.
- Convert currency
- and finish Order

## Run the project

You can execute this project doing this step:

clone this repository
```
    git clone git@github.com:rurikhero/test-ecommerce.git
```
execute composer install

```
    cd test-ecommerce
    composer install
```
copy the .env
```
    cp .env.example .env
```
generate your key

```
    php artisan key:generate
```

execute the migrations and seeders
```
    php artisan migrate --seed
```
run the server
```
    php artisan serve
```
and Have fun o/

Obs: make sure that your database and mail configurations it's working correctly.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
