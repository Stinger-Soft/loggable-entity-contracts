<?php
declare(strict_types=1);

/*
 * This file is part of the Stinger Soft Entity Loggable Contracts.
 *
 * (c) Oliver Kotte <oliver.kotte@stinger-soft.net>
 * (c) Florian Meyer <florian.meyer@stinger-soft.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StingerSoft\Contracts\Entity\Loggable;


use Symfony\Contracts\EventDispatcher\Event;

class BeforeInsertEvent extends Event {

	public const BEFORE_INSERT = 'stinger_soft.entity_change_set.before_insert';

	/** @var EntityChangeSetInterface */
	protected $entityChangeSet;

	/** @var LoggableInterface */
	protected $originalEntity;

	public function __construct(EntityChangeSetInterface $entityChangeSet, LoggableInterface $originalEntity) {
		$this->entityChangeSet = $entityChangeSet;
		$this->originalEntity = $originalEntity;
	}

	/**
	 * @return EntityChangeSetInterface
	 */
	public function getEntityChangeSet(): EntityChangeSetInterface {
		return $this->entityChangeSet;
	}

	/**
	 * @param EntityChangeSetInterface $entityChangeSet
	 */
	public function setEntityChangeSet(EntityChangeSetInterface $entityChangeSet): void {
		$this->entityChangeSet = $entityChangeSet;
	}


	/**
	 * @return LoggableInterface
	 */
	public function getOriginalEntity(): LoggableInterface {
		return $this->originalEntity;
	}

}