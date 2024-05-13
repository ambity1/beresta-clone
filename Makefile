db-refresh:
	php artisan migrate:fresh

start-docker:
	docker compose up --build

stop-docker:
	docker stop beresta-beresta-1
	docker stop beresta-mysql-1

rm-docker:
	docker rm beresta-beresta-1
	docker rm beresta-mysql-1

start-php:
	php artisan serve

start-sail:
	composer require laravel/sail --dev
	php artisan sail:install
	./vendor/bin/sail up #эта команда может не сработать из-за таймаута или другой херни, внимательно прошу следить за консолью.

stop-sail:
	./vendor/bin/sail stop

connect:
	docker exec -it beresta-server-1 /bin/bash

db-on:
	docker run --name myphpgarbage -e MYSQL_DATABASE=beresta -e MYSQL_PASSWORD=password -e MYSQL_USER=green -e MYSQL_ROOT_PASSWORD=password -p "3306":"3306"  mysql/mysql-server:8.0
