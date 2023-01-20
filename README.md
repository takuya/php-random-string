
## Examples 
```php
use Takuya\RandomString\RandomString;
// use class
RandomString::gen();
RandomString::gen(20,RandomString::ALPHA_NUM);
RandomString::gen(20,RandomString::ALPHA);
RandomString::gen(20,RandomString::ALPHA|RandomString::SYMBOLS);
RandomString::gen(20,RandomString::LOWER|RandomString::SYMBOLS);
RandomString::gen(20,RandomString::UPPER|RandomString::NUMBER);
// use helper generates randomized ALPHA_NUM.
$str = random_string(20);
$str = random_string(10);
```