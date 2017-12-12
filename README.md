## Installation

Via Composer

```json
{
    "require": {
        "sevenecks/ansi": "1.0.*"
    }
}
```

    $ curl -s https://getcomposer.org/installer | php
    $ php composer.phar install

```bash
composer require sevenecks/ansi
```

## Usage

```php
require_once __DIR__ . '/vendor/autoload.php';
use SevenEcks\Ansi\Colorize;

$test_string = 'This is a test';

echo Colorize::cyan($test_string) . "\n";
echo Colorize::bgRed($test_string) . "\n";
// background color first
echo Colorize::cyan(Colorize::bgRed($test_string)) . "\n";
```

## Change Log
Please see [Change Log](CHANGELOG.md) for more information.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
