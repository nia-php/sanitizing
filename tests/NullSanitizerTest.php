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
use Nia\Sanitizing\NullSanitizer;

/**
 * Unit test for \Nia\Sanitizing\NullSanitizer.
 */
class NullSanitizerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Sanitizing\NullSanitizer::sanitize
     */
    public function testSanitize()
    {
        $sanitizer = new NullSanitizer();

        $this->assertSame(" \t \r \n foo\n \tbar \n", $sanitizer->sanitize(" \t \r \n foo\n \tbar \n"));
    }
}

