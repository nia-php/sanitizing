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
 * Composite sanitizer implementation.
 */
class CompositeSanitizer implements CompositeSanitizerInterface
{

    /**
     * List with assigned sanitizers.
     *
     * @var SanitizerInterface[]
     */
    private $sanitizers = [];

    /**
     * Constructor.
     *
     * @param SanitizerInterface[] $sanitizers
     *            List with sanitizers to assign.
     */
    public function __construct(array $sanitizers = [])
    {
        foreach ($sanitizers as $sanitizer) {
            $this->addSanitizer($sanitizer);
        }
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Sanitizing\SanitizerInterface::sanitize($content)
     */
    public function sanitize(string $content): string
    {
        foreach ($this->sanitizers as $sanitizer) {
            $content = $sanitizer->sanitize($content);
        }

        return $content;
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Sanitizing\CompositeSanitizerInterface::addSanitizer($sanitizer)
     */
    public function addSanitizer(SanitizerInterface $sanitizer): CompositeSanitizerInterface
    {
        $this->sanitizers[] = $sanitizer;

        return $this;
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Sanitizing\CompositeSanitizerInterface::getSanitizers()
     */
    public function getSanitizers(): array
    {
        return $this->sanitizers;
    }
}

