# http-status

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://opensource.org/license/mit)

php 8.1 enumerator with http response statuses

### Requirements
- PHP >=8.1
### Installation
```bash
composer require drobotik/http-status
```

### Usage

```php
use Drobotik\HttpStatus\HTTP_STATUS;

HTTP_STATUS::BAD_REQUEST->code(); // 200
HTTP_STATUS::BAD_REQUEST->message(); // Ok

$status = HTTP_STATUS::getCaseByCode(200); 
$status->code(); // 200
$status->message(); // Ok

$status = HTTP_STATUS::getCaseByCode(123); // Exception 
```