<?php declare(strict_types=1);

namespace WyriHaximus\HtmlCompress\Tests;

use WyriHaximus\HtmlCompress\Factory;
use WyriHaximus\TestUtilities\TestCase;

/**
 * @internal
 */
final class CompressorSmallestTest extends TestCase
{
    public function providerJavaScript(): iterable
    {
        yield [
            '<html><script>
                var i;
                var x = 0;
                
                var y = i + x;
                console.log(y);
            </script></html>',
            '<html><script>;var i,x=0,y=i+x;console.log(y)</script>',
        ];
    }

    /**
     * @dataProvider providerJavaScript
     * @param mixed $input
     * @param mixed $expected
     */
    public function testJavaScript($input, $expected): void
    {
        $actual = Factory::constructSmallest()->compress($input);
        self::assertSame($expected, $actual);
    }
}
