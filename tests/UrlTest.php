<?php

namespace Wimby\Url;

use PHPUnit\Framework\TestCase;


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
