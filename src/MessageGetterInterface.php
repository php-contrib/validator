<?php

declare(strict_types=1);

namespace PhpContrib\Validator;

use Stringable;

/**
 * Unifies validation configuration objects with a standard api.
 */
interface MessageGetterInterface
{
  /**
   * Provides validation messages.
   *
   * @return (string|Stringable)[]
   */
  public function getMessages(): array;
}
