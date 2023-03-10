# How To Install

1. Clone this repo.
2. install composer package
3. install npm package
4. copy .env from .env.example
5. generate app key. php artisan key:generate

## Run with docker
1.  Pull on start ./vendor/bin/sail up -d
2.  Migrate database ./vendor/bin/sail artisan migrate --seed

## Open
-   open the projects: http://localhost:8011
-   open the mailpits: https://localhost:8026

## Login
- Admin:
    username: admin
    password: admin

- Superadmin: 
    username: superadmin
    password: superadmin