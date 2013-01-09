<?php

namespace Suin\UnitTestPatterns\TestingInterfaces;

/**
 * The interface for clients who wants to format data to string.
 */
interface FormatterInterface
{
    /**
     * Format an array to string
     *
     * @param array $data
     * @return string A formatted string
     */
    public function format(array $data);
}
