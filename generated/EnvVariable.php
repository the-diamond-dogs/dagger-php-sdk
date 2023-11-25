<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * A simple key value object that represents an environment variable.
 */
class EnvVariable extends \DaggerIo\Client\AbstractDaggerObject
{
    /**
     * The environment variable name.
     */
    public function name(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('name');
        return $this->queryLeaf($leafQueryBuilder, 'name');
    }

    /**
     * The environment variable value.
     */
    public function value(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('value');
        return $this->queryLeaf($leafQueryBuilder, 'value');
    }
}
