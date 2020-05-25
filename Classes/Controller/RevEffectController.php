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
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $revEffectRepository = null;

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
