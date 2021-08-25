<?php
namespace Fixpunkt\FpFractionslider\Controller;

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
 * PartController
 */
class PartController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * partRepository
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Repository\PartRepository
     */
    protected $partRepository = null;

    /**
     * Injects the Repository
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Repository\PartRepository $partRepository
     */
    public function injectPartRepository(\Fixpunkt\FpFractionslider\Domain\Repository\PartRepository $partRepository)
    {
        $this->partRepository = $partRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $parts = $this->partRepository->findAll();
        $this->view->assign('parts', $parts);
    }
}
