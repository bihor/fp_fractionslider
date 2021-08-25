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
 * RevEffectController
 */
class RevEffectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * revEffectRepository
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Repository\RevEffectRepository
     */
    protected $revEffectRepository = null;

    /**
     * Injects the Repository
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Repository\RevEffectRepository $revEffectRepository
     */
    public function injectRevEffectRepository(\Fixpunkt\FpFractionslider\Domain\Repository\RevEffectRepository $revEffectRepository)
    {
        $this->revEffectRepository = $revEffectRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $revEffects = $this->revEffectRepository->findAll();
        $this->view->assign('revEffects', $revEffects);
    }
}
