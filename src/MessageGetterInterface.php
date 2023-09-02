<?php

declare(strict_types=1);

namespace PhpContrib\Validator;

/**
 * Unifies validation configuration objects with a standard api.
 */
interface MessageGetterInterface
{
    /**
     * Provides a message that describes why the value is invalid.
     */
    public function getMessage(): string;
}
