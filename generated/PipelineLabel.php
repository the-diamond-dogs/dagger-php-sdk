<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * Key value object that represents a Pipeline label.
 */
class PipelineLabel extends \DaggerIo\Client\AbstractDaggerInputObject
{
    public function __construct(
        public string $name,
        public string $value,
    ) {
    }
}
