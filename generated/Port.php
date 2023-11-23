<?php

/**
 * This class has been generated by dagger-java-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * A port exposed by a container.
 */
class Port extends \DaggerIo\Client\AbstractDaggerObject
{
	/**
	 * The port description.
	 */
	public function description(): string
	{
		$leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('description');
		return $this->queryLeaf($leafQueryBuilder, 'description');
	}


	/**
	 * The port number.
	 */
	public function port(): int
	{
		$leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('port');
		return $this->queryLeaf($leafQueryBuilder, 'port');
	}


	/**
	 * The transport layer network protocol.
	 */
	public function protocol(): NetworkProtocol
	{
		$innerQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('protocol');
		return new \DaggerIo\Gen\NetworkProtocol($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
	}
}
