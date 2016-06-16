# Novo Rastreio de Objetos dos Correios
---

Pessoal recentemente os correios mudou a url do rastreio de objetos o link antigo não está mais funcionando, segue o código para o novo rastreio.

Fiz uma classe básica e um exemplo de como usar:

```php
require "Tranking.php";

$traking = Tranking::get(array("PJ883760587BR"));
print "<pre>"; print_r($traking);
```

Fica livre disposição de fazer alterações e tornar o código mais evoluído com composer, laravel e etc. :)
