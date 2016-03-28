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
use Nia\Sanitizing\ClosureSanitizer;

/**
 * Unit test for \Nia\Sanitizing\ClosureSanitizer.
 */
class ClosureSanitizerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Sanitizing\ClosureSanitizer::sanitize
     */
    public function testSanitize()
    {
        $sanitizer = new ClosureSanitizer(function ($content) {
            return preg_replace('/[^fbr]/', '', $content);
        });

        $this->assertSame("fbr", $sanitizer->sanitize(" \t \r \n foo\n \tbar \n"));
    }
}

