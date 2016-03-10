<?php

namespace Mosaic\Container;

interface Container
{
    /**
     * Resolve the given type from the container.
     *
     * @param string $abstract
     * @param array  $parameters
     *
     * @throws NotFoundException when abstract is not bound to the container.
     * @return mixed
     */
    public function get($abstract, array $parameters = []);

    /**
     * Call the given Closure / class@method and inject its dependencies.
     *
     * @param callable|string $callback
     * @param array           $parameters
     * @param string|null     $defaultMethod
     *
     * @return mixed
     */
    public function call($callback, array $parameters = [], $defaultMethod = null);

    /**
     * Register a binding with the container.
     *
     * @param string|array         $abstract
     * @param callable|string|null $concrete
     *
     * @return void
     */
    public function bind($abstract, $concrete = null);

    /**
     * Register a shared binding in the container.
     *
     * @param string|array         $abstract
     * @param callable|string|null $concrete
     *
     * @return void
     */
    public function singleton($abstract, $concrete = null);

    /**
     * Determine if the given abstract type has been bound.
     *
     * @param string $abstract
     *
     * @return bool
     */
    public function has($abstract);

    /**
     * Alias a type to a different name.
     *
     * @param string $abstract
     * @param string $alias
     *
     * @return void
     */
    public function alias($abstract, $alias);

    /**
     * Register an existing instance as shared in the container.
     *
     * @param string $abstract
     * @param mixed  $instance
     */
    public function instance($abstract, $instance);
}
