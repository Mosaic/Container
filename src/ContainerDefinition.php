<?php

namespace Mosaic\Container;

use Interop\Container\Definition\DefinitionInterface;

interface ContainerDefinition extends DefinitionInterface
{
    /**
     * @return Container
     */
    public function getContainerImplementation() : Container;
}
