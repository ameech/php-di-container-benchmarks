<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite2 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 2;
    }

    public function getTitle(): string
    {
        return "Instantiation of a big object graph (100 objects)";
    }

    public function getDescription(): string
    {
        return "";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 iterations, startup time included", 10, true),
            new TestCase(2, "10 iterations, startup time excluded", 10, false),
            new TestCase(3, "100 iterations, startup time included", 100, true),
            new TestCase(4, "1000 iterations, startup time included", 1000, true),
        ];
    }
}
