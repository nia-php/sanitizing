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
 * Interface for sanitizer implementations.
 * Sanitizers are used to remove unwanted stuff from a passed content.
 */
interface SanitizerInterface
{

    /**
     * Sanitizes the passed content.
     *
     * @param string $content
     *            The content to sanitize.
     * @return string The sanitized content.
     */
    public function sanitize(string $content): string;
}

