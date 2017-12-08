<?php
namespace SevenEcks\Ansi;

/**
 * Utilities for dealing with ansi within PHP. Useful for colorizing terminal output.
 *
 * @author Brendan Butts <sevenecks@gmail.com>
 */
class Colorize {
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
    {
        return "\033[" . $color . "m" . $text . "\033[0m";
    }

    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function black($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_BLACK); 
    }

    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function darkGray($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_DARK_GRAY); 
    }

    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function blue($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_BLUE); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function lightBlue($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_LIGHT_BLUE); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function green($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_GREEN); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function lightGreen($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_LIGHT_GREEN); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function cyan($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_CYAN); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function lightCyan($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_LIGHT_CYAN); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function red($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_RED); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function lightRed($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_LIGHT_RED); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function purple($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_PURPLE); 
    } 

    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function lightPurple($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_LIGHT_PURPLE); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function brown($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_BROWN); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function yellow($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_YELLOW); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function lightGray($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_LIGHT_GRAY); 
    }
    
    /**
     * Colorize the foreground of a string
     *
     * @param string $text
     * @return string
     */
    public static function white($text)
    {
       return self::colorizeString($text, self::$FOREGROUND_WHITE); 
    }

    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgBlack($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_BLACK); 
    }

    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgRed($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_RED); 
    }
    
    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgGreen($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_GREEN); 
    }
    
    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgYellow($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_YELLOW); 
    }
    
    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgBlue($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_BLUE); 
    }
    
    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgMagenta($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_MAGENTA); 
    }
    
    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgCyan($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_CYAN); 
    }
    
    /**
     * Colorize the background of a string
     *
     * @param string $text
     * @return string
     */
    public static function bgLightGray($text)
    {
       return self::colorizeString($text, self::$BACKGROUND_LIGHT_GRAY); 
    }


}

?>
