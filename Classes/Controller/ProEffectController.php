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
 * ProEffectController
 */
class ProEffectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * proEffectRepository
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Repository\ProEffectRepository
     * @inject
     */
    protected $proEffectRepository = null;

    /**
     * action list
     *
     * @param Fixpunkt\FpFractionslider\Domain\Model\ProEffect
     * @return void
     */
    public function listAction()
    {
        $partPros = $this->partProRepository->findAll();
        $this->view->assign('partPros', $partPros);
    }
}
