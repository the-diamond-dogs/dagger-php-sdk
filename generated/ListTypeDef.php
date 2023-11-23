<?php

/**
 * This class has been generated by dagger-java-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * A definition of a list type in a Module.
 */
class ListTypeDef extends \DaggerIo\Client\AbstractDaggerObject
{
	/**
	 * The type of the elements in the list
	 */
	public function elementTypeDef(): TypeDef
	{
		$innerQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('elementTypeDef');
		return new \DaggerIo\Gen\TypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
	}
}