<?php

namespace Suin\UnitTestPatterns\TestingInterfaces\Tests;

use Suin\UnitTestPatterns\TestingInterfaces\JsonFormatter;

class JsonFormatterTest extends FormatterInterfaceTest
{
    /**
     * {@inherit}
     */
    public function getFormatter()
    {
        return new JsonFormatter();
    }

    /**
     * This is a class owned test case.
     */
    public function testFormat()
    {
        $data = array(
            'foo' => 1,
            'bar' => 2,
            'baz' => 3,
        );

        $formatter = new JsonFormatter();
        $result = $formatter->format($data);

        $this->assertSame('{"foo":1,"bar":2,"baz":3}', $result);
    }
}
