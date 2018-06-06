initial:
	sudo curl -fsSL get.docker.com -o get-docker.sh
	sudo curl -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-` uname -s`-`uname -m` > /usr/local/bin/docker-compose
	sudo chmod +x /usr/local/bin/docker-compose
	sudo sh get-docker.sh
	sudo docker network create backend
	sudo apt-get update
	sudo apt-get install python-software-properties
	sudo add-apt-repository ppa:ondrej/php
	sudo apt-get update
	sudo apt install php7.1 php7.1-xml php7.1-mbstring php7.1-mysql php7.1-json php7.1-curl php7.1-cli php7.1-common php7.1-mcrypt php7.1-gd libapache2-mod-php7.1 php7.1-zip
	curl -sS https://getcomposer.org/installer | php
	sudo mv composer.phar /usr/bin/composer
	docker-compose -f docker-compose.mysql.yml up -d --force-recreate
	cd project/public
	sudo apt-get update
	sudo apt-get install npm
	php -S 0.0.0.0:8080 index.php

my-sql-build:
	docker-compose -f docker-compose.mysql.yml up -d --force-recreate

laravel-migrate:
	php ./project/artisan migrate


laravel-migrate-refresh:
	php ./project/artisan migrate:refresh --seed
#--------------------------------------------------------------------------------------------------------------------
