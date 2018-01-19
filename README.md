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

## API
```php
//foreground colors
public static $FOREGROUND_BLACK = '0;30';
public static $FOREGROUND_DARK_GRAY = '1;30';
public static $FOREGROUND_BLUE = '0;34';
public static $FOREGROUND_LIGHT_BLUE = '1;34';
public static $FOREGROUND_GREEN = '0;32';
public static $FOREGROUND_LIGHT_GREEN = '1;32';
public static $FOREGROUND_CYAN = '0;36';
public static $FOREGROUND_LIGHT_CYAN = '1;36';
public static $FOREGROUND_RED = '0;31';
public static $FOREGROUND_LIGHT_RED = '1;31';
public static $FOREGROUND_PURPLE = '0;35';
public static $FOREGROUND_LIGHT_PURPLE = '1;35';
public static $FOREGROUND_BROWN = '0;33';
public static $FOREGROUND_YELLOW = '1;33';
public static $FOREGROUND_LIGHT_GRAY = '0;37';
public static $FOREGROUND_WHITE = '1;37';

// background colors 
public static $BACKGROUND_BLACK = '40';
public static $BACKGROUND_RED = '41';
public static $BACKGROUND_GREEN = '42';
public static $BACKGROUND_YELLOW = '43';
public static $BACKGROUND_BLUE = '44';
public static $BACKGROUND_MAGENTA = '45';
public static $BACKGROUND_CYAN = '46';
public static $BACKGROUND_LIGHT_GRAY = '47'; 

/**
* Colorize a string of text and return it
*
* @param string $text
* @param string $color
*
* @return string
*/
public static function colorizeString($text, $color) 

/**
* Colorize the foreground of a string
*
* @param string $text
* @return string
*/
public static function black($text)
public static function darkGray($text)
public static function blue($text)
public static function lightBlue($text)
public static function green($text)
public static function lightGreen($text)
public static function cyan($text)
public static function lightCyan($text)
public static function red($text)
public static function lightRed($text)
public static function purple($text)
public static function lightPurple($text)
public static function brown($text)
public static function yellow($text)
public static function lightGray($text)
public static function white($text)
/**
 * Colorize the background of a string
 *
 * @param string $text
 * @return string
 */

public static function bgBlack($text)
public static function bgRed($text)
public static function bgGreen($text)
public static function bgYellow($text)
public static function bgBlue($text)
public static function bgMagenta($text)
public static function bgCyan($text)
public static function bgLightGray($text)

## Change Log
Please see [Change Log](CHANGELOG.md) for more information.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
