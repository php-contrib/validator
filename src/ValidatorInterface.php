<?php

declare(strict_types=1);

namespace Phpolar\Validator;

/**
 * Unifies validation configuration objects with a standard api.
 */
interface ValidatorInterface
{
    /**
     * Use to determine if a configuration is valid.
     */
    public function isValid(): bool;
}
