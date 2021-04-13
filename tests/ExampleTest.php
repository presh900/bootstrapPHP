<?php

declare(strict_types=1);

namespace BootstrapPHP\Test;

use Mockery\MockInterface;
use BootstrapPHP\Example;

class ExampleTest extends BootstrapPHPTestCase
{
    public function testGreet(): void
    {
        /** @var Example & MockInterface $example */
        $example = $this->mockery(Example::class);
        $example->shouldReceive('greet')->passthru();

        $this->assertSame('Hello, Friends!', $example->greet('Friends'));
    }
}
