<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

class Module extends \DaggerIo\Client\AbstractDaggerObject implements \DaggerIo\Client\IdAble
{
    /**
     * Modules used by this module
     */
    public function dependencies(): array
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('dependencies');
        return $this->queryLeaf($leafQueryBuilder, 'dependencies');
    }

    /**
     * The dependencies as configured by the module
     */
    public function dependencyConfig(): array
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('dependencyConfig');
        return $this->queryLeaf($leafQueryBuilder, 'dependencyConfig');
    }

    /**
     * The doc string of the module, if any
     */
    public function description(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('description');
        return $this->queryLeaf($leafQueryBuilder, 'description');
    }

    /**
     * The code generated by the SDK's runtime
     */
    public function generatedCode(): GeneratedCode
    {
        $innerQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('generatedCode');
        return new \DaggerIo\Gen\GeneratedCode($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * The ID of the module
     */
    public function id(): ModuleId
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('id');
        return $this->queryLeafDaggerScalar($leafQueryBuilder, 'id', \DaggerIo\Gen\ModuleId::class);
    }

    /**
     * The name of the module
     */
    public function name(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('name');
        return $this->queryLeaf($leafQueryBuilder, 'name');
    }

    /**
     * Objects served by this module
     */
    public function objects(): array
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('objects');
        return $this->queryLeaf($leafQueryBuilder, 'objects');
    }

    /**
     * The SDK used by this module. Either a name of a builtin SDK or a module ref pointing to the SDK's implementation.
     */
    public function sdk(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('sdk');
        return $this->queryLeaf($leafQueryBuilder, 'sdk');
    }

    /**
     * Serve a module's API in the current session.
     *     Note: this can only be called once per session.
     *     In the future, it could return a stream or service to remove the side effect.
     */
    public function serve(): NullVoid
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('serve');
        return $this->queryLeafDaggerScalar($leafQueryBuilder, 'serve', \DaggerIo\Gen\NullVoid::class);
    }

    /**
     * The directory containing the module's source code
     */
    public function sourceDirectory(): Directory
    {
        $innerQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('sourceDirectory');
        return new \DaggerIo\Gen\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * The module's subpath within the source directory
     */
    public function sourceDirectorySubPath(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('sourceDirectorySubPath');
        return $this->queryLeaf($leafQueryBuilder, 'sourceDirectorySubPath');
    }

    /**
     * This module plus the given Object type and associated functions
     */
    public function withObject(TypeDefId|TypeDef $object): Module
    {
        $innerQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('withObject');
        $innerQueryBuilder->setArgument('object', $object);
        return new \DaggerIo\Gen\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }
}
