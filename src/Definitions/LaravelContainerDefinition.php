<?php

namespace Mosaic\Container\Definitions;

use Illuminate\Container\Container;
use Mosaic\Container\Adapters\Laravel\Container as Adapter;
use Mosaic\Contracts\Container\Container as ContainerContract;
use Mosaic\Contracts\Container\ContainerDefinition;

class LaravelContainerDefinition implements ContainerDefinition
{
    /**
     * @return ContainerContract
     */
    public function getDefinition() : ContainerContract
    {
        return new Adapter(new Container);
    }
}
