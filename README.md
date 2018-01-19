## Installation
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
// manually call the colorize string function
echo Colorize::colorizeString("TEST STRING", Colorize::$FOREGROUND_BLUE);
```

## Colors
There are several colors available for foreground and background.

### Foreground
Colorize::darkGray

Colorize::blue

Colorize::lightBlue

Colorize::green

Colorize::lightGreen

Colorize::cyan

Colorize::lightCyan

Colorize::red

Colorize::lightRed

Colorize::purple 

Colorize::lightPurple

Colorize::brown

Colorize::yellow

Colorize::lightGray

Colorize::white

### Background
Colorize::bgBlack

Colorize::bgRed

Colorize::bgGreen

Colorize::bgYellow

Colorize::bgBlue

Colorize::bgMagenta

Colorize::bgCyan

Colorize::bgLightGray

## Change Log
Please see [Change Log](CHANGELOG.md) for more information.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
