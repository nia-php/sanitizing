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
namespace Nia\Sanitizing;

/**
 * Sanitizer to remove all whitespaces from the passed content.
 */
class NonWhitespaceSanitizer implements SanitizerInterface
{

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Sanitizing\SanitizerInterface::sanitize($content)
     */
    public function sanitize(string $content): string
    {
        return preg_replace('/\s/', '', $content);
    }
}

