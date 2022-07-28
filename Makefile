up:
	@docker-compose up

shell:
	@docker-compose exec app sh

it-run:
	@docker-compose exec app php /var/www/index.php

init:
	@docker-compose exec app composer init

install:
	@docker-compose exec -T app composer require "$(filter-out $@, $(MAKECMDGOALS))"

update:
	@docker-compose exec -T app composer update

install-dev:
	@docker-compose exec -T app composer require "$(filter-out $@, $(MAKECMDGOALS))" --dev

fix-permissions:
	@sudo chown -R 1000:1000 .
