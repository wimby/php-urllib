<?php

use PHPUnit\Framework\TestCase;
use Wimby\Url\Url;


class UrlTest extends TestCase
{
    function testOne()
    {
        $url = new Url();
        $this->assertInstanceOf(Url::class, $url);
    }

    function testTwo()
    {
        $this->assertEquals(true, true);
    }
}
