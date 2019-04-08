<?php

namespace Spatie\Enum\Exceptions;

use InvalidArgumentException;

class DuplicatedValueException extends InvalidArgumentException
{
    public function __construct(array $values, string $class)
    {
        parent::__construct('The values ["'.implode('", "', $values).'"] are duplicated in enum '.$class);
    }
}
