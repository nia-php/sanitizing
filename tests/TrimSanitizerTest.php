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
use Nia\Sanitizing\TrimSanitizer;

/**
 * Unit test for \Nia\Sanitizing\TrimSanitizer.
 */
class TrimSanitizerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Sanitizing\TrimSanitizer::sanitize
     */
    public function testSanitize()
    {
        $sanitizer = new TrimSanitizer();

        $this->assertSame("foo\n \tbar", $sanitizer->sanitize(" \t \r \n foo\n \tbar \n"));
    }
}

