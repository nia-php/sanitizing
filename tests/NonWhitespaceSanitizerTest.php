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
use Nia\Sanitizing\NonWhitespaceSanitizer;

/**
 * Unit test for \Nia\Sanitizing\NonWhitespaceSanitizer.
 */
class NonWhitespaceSanitizerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Sanitizing\NonWhitespaceSanitizer::sanitize
     */
    public function testSanitize()
    {
        $sanitizer = new NonWhitespaceSanitizer();

        $this->assertSame("foobar", $sanitizer->sanitize(" \t \r \n foo\n \tbar \n"));
    }
}

