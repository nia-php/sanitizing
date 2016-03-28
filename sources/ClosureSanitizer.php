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

use Closure;

/**
 * Sanitizer using a closure to sanitize the passed content.
 */
class ClosureSanitizer implements SanitizerInterface
{

    /**
     * The used closure.
     *
     * @var Closure
     */
    private $closure = null;

    /**
     * Constructor.
     *
     * @param Closure $closure
     *            The used closure.
     */
    public function __construct(Closure $closure)
    {
        $this->closure = $closure;
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Sanitizing\SanitizerInterface::sanitize($content)
     */
    public function sanitize(string $content): string
    {
        $closure = $this->closure;

        return $closure($content);
    }
}

