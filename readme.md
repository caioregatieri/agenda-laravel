## Sistema de agendamento de consultas

### Criado com laravel mvc, usando banco de dados mysql

<hr/>

### Passos para instalação

* git clone https://github.com/caioregatieri/agenda-laravel
* cd agenda-laravel
* php composer install
* cp .env-example .env
* php artisan key:generate
* php artisan migrate
* php artisan db:seed
* php artisan serve