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

use Doctrine\ORM\QueryBuilder;
use StingerSoft\Contracts\Entity\Loggable\EntityChangeSetInterface;
use StingerSoft\Contracts\Entity\Loggable\LoggableInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Service to handle the access to entity change sets
 *
 */
interface EntityChangeSetServiceInterface {

	/**
	 * Tries to find the entity that is related to the given event
	 *
	 * @param EntityChangeSetInterface $entityChangeSet
	 */
	public function getEntityForEntityChangeSet(EntityChangeSetInterface $entityChangeSet): ?LoggableInterface;

	/**
	 * Creates a query builder to fetch all events linked to the passed entities
	 *
	 * @param LoggableInterface|LoggableInterface[] $entities
	 * @return QueryBuilder
	 */
	public function getEntityChangeSetQueryBuilderForEntity($entities): QueryBuilder;

	/**
	 * Creates a query builder to fetch all backendevents related to the given user (if set)
	 *
	 * @param bool $sortDescByDate
	 * @param UserInterface|null $user
	 * @return QueryBuilder
	 */
	public function getEntityChangeSetQueryBuilder(UserInterface $user = null, bool $sortDescByDate = false): QueryBuilder;

	/**
	 * Returns all used action types
	 *
	 * @return string[]
	 */
	public function getActionTypes(): array;
}