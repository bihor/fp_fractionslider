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
 * CssclassController
 */
class CssclassController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * cssclassRepository
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Repository\CssclassRepository
     * @inject
     */
    protected $cssclassRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $cssclasses = $this->cssclassRepository->findAll();
        $this->view->assign('cssclasses', $cssclasses);
    }
}
