TEST_COMMAND=php vendor/bin/phpunit --bootstrap vendor/autoload.php tests
TEST_COMMAND_DOCKER=php /app/vendor/bin/phpunit --bootstrap /app/vendor/autoload.php /app/tests
DOCKER_COMMAND=docker run -v ${PWD}:/app php:
test:
	$(TEST_COMMAND)

test-multi:
	@set -e; for v in '5.5' '5.6' '7.0'; do printf "\nTesting on PHP $$v\n "; $(DOCKER_COMMAND)$$v $(TEST_COMMAND_DOCKER); done
