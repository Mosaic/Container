<?php

namespace Mosaic\Container\Definitions;

use Illuminate\Container\Container;
use Mosaic\Container\Adapters\Laravel\Container as Adapter;
use Mosaic\Container\Container as ContainerContract;
use Mosaic\Container\ContainerDefinition;

class LaravelContainerDefinition implements ContainerDefinition
{
    /**
     * @return ContainerContract
     */
    public function getContainerImplementation() : ContainerContract
    {
        return new Adapter(new Container);
    }
}
