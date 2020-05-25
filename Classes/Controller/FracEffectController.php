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
 * FracEffectController
 */
class FracEffectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * fracEffectRepository
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Repository\FracEffectRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $fracEffectRepository = null;

    /**
     * action list
     *
     * @param Fixpunkt\FpFractionslider\Domain\Model\FracEffect
     * @return void
     */
    public function listAction()
    {
        $parts = $this->partRepository->findAll();
        $this->view->assign('parts', $parts);
    }
}
