

![](https://github.com/takuya/php-random-string/workflows/main/badge.svg)


### Examples 
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

CHARACTERS
```
ALPHA_NUM = (LOWER, UPPER, NUMBER)
ALPHA     = (LOWER, UPPER)
LOWER     = ( a, b, c ...z )
UPPER     = ( A, B, C ...Z )
NUMBER    = ( 0, 1, 2,...9 )
```
SYMBOL
```
SYMBOL = 
+ array_map( 'chr' , range( 33, 47 ) // "!,",#,$,%,&,',(,),*,+,,,-,.,/" 
+ array_map( 'chr' , range( 91, 96 ) // "[,\,],^,_,`" 
+ array_map( 'chr' , range(123,126 ) // "{,|,},~" 
```

### Installing
from github

```
composer config repositories.'php-random-string' \
vcs https://github.com/takuya/php-random-string  
composer require takuya/php-random-string:master
composer install
```
from packagist

```
composer require takuya/php-random-string
```
### Testing
```
git clone https://github.com/takuya/php-random-string
cd php-cert-checker
composer install
vendor/bin/phpunit
```
