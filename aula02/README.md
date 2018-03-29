# Subir VM

/home/repositorio/FREQUENTES/Dev/developer_US.ova

## Habilitar Erros PHP

sudo subl /etc/php/7.0/apache2/php.ini
line 462
display_errors = On
sudo service apache2 restart

## Criar as pastas

mkdir /var/www/html
mkdir /var/www/html/502
cd /var/www/html/502

## Baixar o PHPUnit

➜ wget -O phpunit https://phar.phpunit.de/phpunit-6.phar 

➜ chmod +x phpunit

➜ sudo mv phpunit /usr/local/bin/phpunit

➜ phpunit --version