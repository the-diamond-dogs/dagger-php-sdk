<?php

/**
 * This class has been generated by dagger-java-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace DaggerIo\Gen;

/**
 * A git ref (tag, branch or commit).
 */
class GitRef extends \DaggerIo\Client\AbstractDaggerObject
{
	/**
	 * The resolved commit id at this ref.
	 */
	public function commit(): string
	{
		$leafQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('commit');
		return $this->queryLeaf($leafQueryBuilder, 'commit');
	}


	/**
	 * The filesystem tree at this ref.
	 */
	public function tree(?string $sshKnownHosts = null, SocketId|Socket|null $sshAuthSocket = null): Directory
	{
		$innerQueryBuilder = new \DaggerIo\Client\DaggerQueryBuilder('tree');
		if (null !== $sshKnownHosts) {
		$innerQueryBuilder->setArgument('sshKnownHosts', $sshKnownHosts);
		}
		if (null !== $sshAuthSocket) {
		$innerQueryBuilder->setArgument('sshAuthSocket', $sshAuthSocket);
		}
		return new \DaggerIo\Gen\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
	}
}