<?php

/**
 * This class has been generated by dagger-java-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * A simple key value object that represents a label.
 */
class Label extends \DaggerIo\Client\AbstractDaggerObject
{
    /**
     * The label name.
     */
    public function name(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('name');
        return $this->queryLeaf($leafQueryBuilder, 'name');
    }

    /**
     * The label value.
     */
    public function value(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('value');
        return $this->queryLeaf($leafQueryBuilder, 'value');
    }
}
