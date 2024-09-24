<?php

namespace Tests\App;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testExecute(): void
    {
        $example = new Example();

        $this->assertEquals('it works!', $example->execute());
    }
}
