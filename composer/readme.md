# Projeto - Iniciando com o composer

## Instalação

```
php -r "readfile('https://getcomposer.org/installer');" | php
sudo mv composer.phar /usr/bin/composer
```

## Testou e atualizou o composer

```
composer
composer selfupdate
```

## Iniciando um projeto

```
composer init
```

## Adicionando uma dependencia
```
composer require laravel/lumen-framework
```

## Removendo uma dependencia
```
composer remove laravel/lumen-framework
```

## Configurando o autoload

No arquivo `composer.json`

```
"autoload": {
        "psr-4": {
            "Lucas\\": "src/"
        }
    }
```

No terminal
```
composer dumpautoload
```