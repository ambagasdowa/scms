# SCMS


## Installation

```bash
git clone https://github.com/ambagasdowa/scms.git
```

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

```bash
run install.sh
```

* Build a schema for users table

```bash
bin/cake migrations migrate -p CakeDC/Users
```

* Create a superuser

```bash
bin/cake users addSuperuser
```
