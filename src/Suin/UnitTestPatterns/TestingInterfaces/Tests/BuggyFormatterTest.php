<?php

namespace Suin\UnitTestPatterns\TestingInterfaces\Tests;

use Suin\UnitTestPatterns\TestingInterfaces\BuggyFormatter;

class BuggyFormatterTest extends FormatterInterfaceTest
{
    /**
     * {@inherit}
     */
    public function getFormatter()
    {
        return new BuggyFormatter();
    }
}
