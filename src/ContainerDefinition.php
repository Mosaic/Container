<?php

namespace Mosaic\Container;

interface ContainerDefinition
{
    /**
     * @return Container
     */
    public function getDefinition() : Container;
}
