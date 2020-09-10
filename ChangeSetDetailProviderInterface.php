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
 * If a loggable entity implements this interface then additional information will be stored into the change set entity
 */
interface ChangeSetDetailProviderInterface {

	/**
	 * Get detailed information for the change set
	 *
	 * @return array
	 */
	public function getChangeSetDetails(): array;
}