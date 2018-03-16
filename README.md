## Installation

```bash
composer require sevenecks/ansi
```

## Colorize

### Usage

#### Static Usage
The methods on Colorize can be called statically and the full API is listed later. 

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

#### Instantiated Usage
Colorize also supports a magic method that will allow you to call the static methods dynamically, if you want to instantiate the Colorize class. This can be useful for dependency injection.

```php
require_once __DIR__ . '/vendor/autoload.php';
use SevenEcks\Ansi\Colorize;

$test_string = 'This is a test';

$colorize = new Colorize;

echo $color->red('tester');
echo $color->darkGray('testy mctesterson');
```

### Colors

There are several colors available for foreground and background.

#### Foreground

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

#### Background

Colorize::bgBlack
Colorize::bgRed
Colorize::bgGreen
Colorize::bgYellow
Colorize::bgBlue
Colorize::bgMagenta
Colorize::bgCyan
Colorize::bgLightGray

## ColorInterface

You can use the ColorInterface.php file to implement your own ANSI Colorization class. The interface requires all the functions that the Colorize class implements, but does not care about how you define your colors or what is going on below the hood.

## Change Log
Please see [Change Log](CHANGELOG.md) for more information.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
