# SCMS


## Installation

```bash
git clone https://github.com/ambagasdowa/scms.git
```
then
composer install 


run
```bash
git submodule update --init
```

```php
composer update
```

and after [optional]

```php
composer suggests | xargs -i composer require {}
```


* Build a schema for users table

```bash
bin/cake migrations migrate -p CakeDC/Users
```


* Create a superuser

```bash
bin/cake users addSuperuser
```
