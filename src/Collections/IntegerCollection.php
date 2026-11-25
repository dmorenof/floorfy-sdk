<?php

declare(strict_types=1);

namespace FloorfySDK\Collections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<int> */
final class IntegerCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'integer';
}
