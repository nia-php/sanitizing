<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Test\Nia\Sanitizing;

use PHPUnit_Framework_TestCase;
use Nia\Sanitizing\CompositeSanitizer;
use Nia\Sanitizing\NullSanitizer;
use Nia\Sanitizing\TrimSanitizer;
use Nia\Sanitizing\NonWhitespaceSanitizer;

/**
 * Unit test for \Nia\Sanitizing\CompositeSanitizer.
 */
class CompositeSanitizerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Sanitizing\CompositeSanitizer::sanitize
     */
    public function testSanitize()
    {
        $sanitizer1 = new NullSanitizer();
        $sanitizer2 = new TrimSanitizer();
        $sanitizer3 = new NonWhitespaceSanitizer();

        $sanitizer = new CompositeSanitizer([
            $sanitizer1,
            $sanitizer2
        ]);

        $this->assertSame([
            $sanitizer1,
            $sanitizer2
        ], $sanitizer->getSanitizers());

        $this->assertSame("foo\n \tbar", $sanitizer->sanitize(" \t \r \n foo\n \tbar \n"));

        $this->assertSame($sanitizer, $sanitizer->addSanitizer($sanitizer3));

        $this->assertSame([
            $sanitizer1,
            $sanitizer2,
            $sanitizer3
        ], $sanitizer->getSanitizers());

        $this->assertSame("foobar", $sanitizer->sanitize(" \t \r \n foo\n \tbar \n"));
    }
}

