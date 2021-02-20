.PONY: start-local

start-local:
	php -S localhost:8090 apps/mooc/backend/public/index.php
unit-test:
	./vendor/bin/phpunit
e2e-test:
	./vendor/bin/behat -p mooc_backend