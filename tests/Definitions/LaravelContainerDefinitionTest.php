<?php

namespace Mosaic\Container\Tests\Definitions;

use Mosaic\Container\Adapters\Laravel\Container;
use Mosaic\Container\Definitions\LaravelContainerDefinition;

class LaravelContainerDefinitionTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_should_define_a_container()
    {
        $this->assertInstanceOf(Container::class, (new LaravelContainerDefinition)->getContainerImplementation());
    }
}
