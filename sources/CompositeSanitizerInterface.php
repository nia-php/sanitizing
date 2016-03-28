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
 * Interface for composite sanitizer implementations.
 * Composite sanitizers are used to combine multiple sanitizers and use them as one.
 */
interface CompositeSanitizerInterface extends SanitizerInterface
{

    /**
     * Adds a sanitizer-
     *
     * @param SanitizerInterface $sanitizer
     *            The sinitizer to add.
     * @return CompositeSanitizerInterface Reference to this instance.
     */
    public function addSanitizer(SanitizerInterface $sanitizer): CompositeSanitizerInterface;

    /**
     * Returns a list with assigned sanitizers.
     *
     * @return SanitizerInterface[] Listh with assigned sanitizers.
     */
    public function getSanitizers(): array;
}

