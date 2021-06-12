migrate:
	php artisan migrate
fresh:
	php artisan migrate:fresh --seed
seed:
	php artisan db:seed
dacapo:
	php artisan dacapo
rollback-test:
	php artisan migrate:fresh
	php artisan migrate:refresh
tinker:
	php artisan tinker
test:
	php artisan test
optimize:
	php artisan optimize
optimize-clear:
	php artisan optimize:clear
cache:
	composer dump-autoload -o
	@make optimize
	php artisan event:cache
	php artisan view:cache
cache-clear:
	composer clear-cache
	@make optimize-clear
	php artisan event:clear
ide-helper:
	php artisan clear-compiled
	php artisan ide-helper:generate
	php artisan ide-helper:meta
	php artisan ide-helper:models --nowrite
dry-cs:
	./vendor/bin/php-cs-fixer fix -v --diff --dry-run
fix-cs:
	./vendor/bin/php-cs-fixer fix -v --diff
