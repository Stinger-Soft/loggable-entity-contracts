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

/**
 * If this interface is implemented, the change set will log all changes on the referenced entity
 *
 */
interface LoggableAliasInterface extends LoggableInterface {

	/**
	 * Returns the entity to be logged.
	 * In most cases the right thing to return
	 * is <code>$this</code>.
	 *
	 * @return object
	 */
	public function getEntityToLog();
}