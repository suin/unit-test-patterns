<?php

namespace Suin\UnitTestPatterns\TestingInterfaces\Tests;

use Suin\UnitTestPatterns\TestingInterfaces\FormatterInterface;

abstract class FormatterInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Return concrete formatter object
     * @return FormatterInterface
     */
    abstract public function getFormatter();

    /**
     * Tests the contract of format() method
     *
     * This is a test that executed commonly all concrete classes.
     */
    final public function testContractOfFormat()
    {
        $array = array('dummy', 'values');

        $formatter = $this->getFormatter();
        $result = $formatter->format($array);

        $this->assertInternalType(
            'string',
            $result,
            sprintf('%s::format() MUST returns string', get_class($formatter))
        );
    }
}
