<?php

namespace Suin\UnitTestPatterns\TestingInterfaces;

/**
 * JSON formatter
 */
class JsonFormatter implements FormatterInterface
{
    /**
     * {@inherit}
     */
    public function format(array $data)
    {
        return json_encode($data);
    }
}
