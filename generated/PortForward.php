<?php

/**
 * This class has been generated by dagger-java-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * Port forwarding rules for tunneling network traffic.
 */
class PortForward extends \DaggerIo\Client\AbstractDaggerInputObject
{
	public function __construct(
		public int $backend,
		public ?int $frontend,
		public ?\NetworkProtocol $protocol,
	) {
	}
}
