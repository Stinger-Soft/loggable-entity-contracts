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

use StingerSoft\Contracts\Entity\IdentifiableInterface;
use StingerSoft\Contracts\Entity\TimestampableInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * A change set represents a creation, deletion or a change on an entity
 */
interface EntityChangeSetInterface extends IdentifiableInterface, TimestampableInterface {
	/**
	 * Set the string representing the type of action
	 *
	 * @param string $action
	 *
	 */
	public function setAction(string $action);

	/**
	 * Get the string representing the type of action
	 *
	 * @return string
	 */
	public function getAction(): string;


	/**
	 * Set the classname of the entity the event is related to
	 *
	 * @param string $entityClassName
	 *
	 */
	public function setEntityClassName(string $entityClassName);

	/**
	 * Get the classname of the entity the event is related to
	 *
	 * @return string
	 */
	public function getEntityClassName(): string;

	/**
	 * Set the user who triggered this event
	 *
	 * @param UserInterface|null $user
	 *
	 */
	public function setUser(?UserInterface $user);

	/**
	 * Get the user who triggered this event
	 *
	 * @return UserInterface|null
	 */
	public function getUser(): UserInterface;

	/**
	 * Set the primary key of the entity the event is related to
	 *
	 * @param int|string $affectedId
	 *
	 */
	public function setAffectedId($affectedId);

	/**
	 * Get the primary key of the entity the event is related to
	 *
	 * @return int|string
	 */
	public function getAffectedId();

	/**
	 * Set the __toString output of the entity the event is related to
	 *
	 * @param string|null $name
	 *
	 */
	public function setName(?string $name);

	/**
	 * Get the __toString output of the entity the event is related to
	 *
	 * @return string|null
	 */
	public function getName(): ?string;

	/**
	 * Set an array containing what was changed on the entity
	 *
	 * @param array $changeset
	 */
	public function setChangeset(array $changeset);

	/**
	 * Get the array containing what was changed on the entity
	 *
	 * @return array
	 */
	public function getChangeset(): array;

	/**
	 * Set details
	 *
	 * @param array $details
	 */
	public function setDetails(array $details);

	/**
	 * Get details
	 *
	 * @return array
	 */
	public function getDetails(): array;
}  