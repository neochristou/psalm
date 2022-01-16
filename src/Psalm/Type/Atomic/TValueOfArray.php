<?php

namespace Psalm\Type\Atomic;

use Psalm\Type\Atomic;

/**
 * Represents a value of an array.
 */
class TValueOfArray extends Atomic
{
    /** @var TClassConstant|TKeyedArray|TList|TArray */
    public $type;

    /**
     * @param TClassConstant|TKeyedArray|TList|TArray $type
     */
    public function __construct(Atomic $type)
    {
        $this->type = $type;
    }

    public function getKey(bool $include_extra = true): string
    {
        return 'value-of<' . $this->type . '>';
    }

    /**
     * @param  array<lowercase-string, string> $aliased_classes
     */
    public function toPhpString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        int $analysis_php_version_id
    ): ?string {
        return null;
    }

    public function canBeFullyExpressedInPhp(int $analysis_php_version_id): bool
    {
        return false;
    }

    public function getAssertionString(): string
    {
        return 'mixed';
    }
}
