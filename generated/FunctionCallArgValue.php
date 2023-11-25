<?php

/**
 * This class has been generated by dagger-java-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

class FunctionCallArgValue extends \DaggerIo\Client\AbstractDaggerObject
{
    /**
     * The name of the argument.
     */
    public function name(): string
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('name');
        return $this->queryLeaf($leafQueryBuilder, 'name');
    }

    /**
     * The value of the argument represented as a string of the JSON serialization.
     */
    public function value(): Json
    {
        $leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('value');
        return $this->queryLeafDaggerScalar($leafQueryBuilder, 'value', \DaggerIo\Gen\Json::class);
    }
}
