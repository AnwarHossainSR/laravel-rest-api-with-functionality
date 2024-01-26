.PHONY: run
run:
	php artisan serve

.PHONY: test
test:
	php artisan test

.PHONY: clear
clear:
	php artisan cache:clear
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear
	php artisan optimize:clear
	composer dump-autoload

.PHONY: seed
seed:
	php artisan migrate:fresh --seed
.PHONY: migrate
migrate:
	php artisan migrate

.PHONY: install
install:
	composer install

.PHONY: link
link:
	php artisan storage:link

.PHONY: key
key:
	php artisan key:generate

.PHONY: optimize
optimize:
	php artisan optimize

.PHONY: dump
dump:
	composer dump-autoload

.PHONY: queue
queue:
	php artisan queue:work
