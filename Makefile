.PHONY: up down fresh test lint build shell logs backup restore

up:
	docker-compose up -d

down:
	docker-compose down

fresh:
	php artisan migrate:fresh --seed

test:
	php artisan test

lint:
	node scripts/lint-design.mjs

build:
	npm run build

shell:
	docker-compose exec app bash

logs:
	docker-compose logs -f

backup:
	php artisan backup:run

restore:
	echo "To be implemented with spatie/laravel-backup"
