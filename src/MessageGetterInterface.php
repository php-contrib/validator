<?php

declare(strict_types=1);

namespace PhpContrib\Validator;

/**
 * Unifies validation configuration objects with a standard api.
 */
interface MessageGetterInterface
{
    /**
     * Provides a validation message.
     */
    public function getMessage(): string;
}
