<?php

namespace SevenEcks\Ansi\Test;

use SevenEcks\Ansi\Colorize;

class ColorizeTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_has_colors()
    {
        $this->assertEquals('0;30', Colorze::$FOREGROUND_BLACK);
    }
}
