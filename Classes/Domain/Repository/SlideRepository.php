<?php
namespace Fixpunkt\FpFractionslider\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
/***
 *
 * This file is part of the "FractionSlider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Kurt Gusbeth <k.gusbeth@fixpunkt.com>, fixpunkt werbeagentur gmbH
 *
 ***/
/**
 * The repository for Slides
 */
class SlideRepository extends Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];

    /**
     * findAll ersetzen, wegen Sortierung und Limit
     * @param	string	$sortOrder	Sort order
     * @param	integer	$limit		Limit
     */
    public function findAll($sortOrder = 'asc', $limit = 0)
    {
		$query = $this->createQuery();
		if ($limit > 0) {
			$query->setLimit(intval($limit));
		}
		if ($sortOrder == 'desc') {
			$query->setOrderings(	['sorting' => QueryInterface::ORDER_DESCENDING] );
		}
		return $query->execute();
    }
}