<?php

namespace Suin\UnitTestPatterns\TestingInterfaces;

/**
 * This is a example class and has a bug
 */
class BuggyFormatter implements FormatterInterface
{
    /**
     * {@inherit}
     */
    public function format(array $data)
    {
        if (!is_array($data) === false) { // here is a bug
            return false;
        }

        return json_encode($data);
    }
}
