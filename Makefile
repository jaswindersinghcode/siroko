.PHONY: up
up:
	docker-compose build
	docker-compose up -d
	docker exec -it siroko-app ./bin/setup-docker.sh

.PHONY: bash
bash:
	docker exec -it siroko-app /bin/bash

.PHONY: down
down:
	docker-compose down

.PHONY: clean
clean:
	docker-compose down -v

.PHONY: tests
tests:
	docker exec siroko-app ./bin/console cache:clear --env=tests
	docker exec siroko-app ./vendor/bin/phpunit tests --stderr

.PHONY: testunit
testunit:
	docker exec siroko-app ./vendor/bin/phpunit tests/Application

.PHONY: composer-update
composer-update:
	docker exec siroko-app composer update
