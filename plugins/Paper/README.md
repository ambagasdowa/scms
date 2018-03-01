
### Enable Plugin

```php
// config/bootstrap.php
Plugin::load('Paper');
```

### Enable theme perController
> in controller add method
```php
public function beforeRender(Event $event) {
    $this->viewBuilder()->theme('Paper');
}
```

### Enable theme Global
```php
// src/Controller/AppController.php

public function beforeRender(Event $event) {
    $this->viewBuilder()->theme('Paper');
}
```
