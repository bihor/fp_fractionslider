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
 * SlideController
 */
class SlideController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * slideRepository
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Repository\SlideRepository
     */
    protected $slideRepository = null;

    /**
     * Injects the Repository
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Repository\SlideRepository $slideRepository
     */
    public function injectSlideRepository(\Fixpunkt\FpFractionslider\Domain\Repository\SlideRepository $slideRepository)
    {
        $this->slideRepository = $slideRepository;
    }

    /**
     * configurationManager
     *
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager = null;

    /**
     * @param \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface $configurationManager
     */
    public function injectConfigurationManager(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface $configurationManager)
    {
        $this->configurationManager = $configurationManager;
        $tsSettings = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
        if (isset($tsSettings['plugin.']['tx_fpfractionslider.']['settings.']) && is_array($tsSettings['plugin.']['tx_fpfractionslider.']['settings.'])) {
            $tsSettings = $tsSettings['plugin.']['tx_fpfractionslider.']['settings.'];
        } else {
            $tsSettings = [];
        }
        if (isset($tsSettings['plugin.']['tx_fpfractionslider_pi1.']['settings.']) && is_array($tsSettings['plugin.']['tx_fpfractionslider_pi1.']['settings.'])) {
            $tsSettings_pi1 = $tsSettings['plugin.']['tx_fpfractionslider_pi1.']['settings.'];
        	$tsSettings = array_merge($tsSettings, $tsSettings_pi1);
        }
        $settings = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);
        if (isset($settings['override']) && is_array($settings['override'])) {
            $overrides = $settings['override'];
            unset($settings['override']);
            //$settings = array_merge($tsSettings, $overrides);	// übernimmt auch leere Werte :-(
            if (is_array($tsSettings['fractionslider.'])) {
	            foreach ($tsSettings['fractionslider.'] as $key => $value) {
	                if (isset($overrides['fractionslider'][$key]) && !($overrides['fractionslider'][$key] === '' || $overrides['fractionslider'][$key] === NULL || $overrides['fractionslider'][$key] == '-')) {
	                    $settings['fractionslider'][$key] = $overrides['fractionslider'][$key];
	                } else {
	                    $settings['fractionslider'][$key] = $value;
	                }
	            }
            }
            if (is_array($tsSettings['sliderpro.'])) {
	            foreach ($tsSettings['sliderpro.'] as $key => $value) {
	                if (isset($overrides['sliderpro'][$key]) && !($overrides['sliderpro'][$key] === '' || $overrides['sliderpro'][$key] === NULL || $overrides['sliderpro'][$key] == '-')) {
	                    $settings['sliderpro'][$key] = $overrides['sliderpro'][$key];
	                } else {
	                    $settings['sliderpro'][$key] = $value;
	                }
	            }
            }
            if (is_array($tsSettings['sliderrevolution.'])) {
	            foreach ($tsSettings['sliderrevolution.'] as $key => $value) {
	                if (isset($overrides['sliderrevolution'][$key]) && !($overrides['sliderrevolution'][$key] === '' || $overrides['sliderrevolution'][$key] === NULL || $overrides['sliderrevolution'][$key] == '-')) {
	                    $settings['sliderrevolution'][$key] = $overrides['sliderrevolution'][$key];
	                } else {
	                    $settings['sliderrevolution'][$key] = $value;
	                }
	            }
            }
            if (isset($tsSettings['more.']) && is_array($tsSettings['more.'])) {
	            foreach ($tsSettings['more.'] as $key => $value) {
	                if (isset($overrides['more'][$key])) {
	                    $settings['more'][$key] = $overrides['more'][$key];
	                } else {
	                    $settings['more'][$key] = $value;
	                }
	            }
            }
            if ($overrides['sortOrder'] == 'asc' || $overrides['sortOrder'] == 'desc') {
            	$settings['sortOrder'] = $overrides['sortOrder'];
            } else {
            	$settings['sortOrder'] = $tsSettings['sortOrder'];
            }
            if ($overrides['limit'] > 0) {
            	$settings['limit'] = $overrides['limit'];
            } else {
            	$settings['limit'] = $tsSettings['limit'];
            }
            if ($overrides['listId']) {
            	$settings['listId'] = $overrides['listId'];
            } else {
            	$settings['listId'] = $tsSettings['listId'];
            }
            if ($overrides['showId']) {
            	$settings['showId'] = $overrides['showId'];
            } else {
            	$settings['showId'] = $tsSettings['showId'];
            }
        }
        $this->settings = $settings;
    }

    /**
     * action list
     *
     * @return void
     */
    public function fractionsliderAction()
    {
        $slides = $this->slideRepository->findAll($this->settings['sortOrder'], $this->settings['limit']);
        $this->view->assign('slides', $slides);
        $this->view->assign('jsonSettings', json_encode($this->settings['fractionslider']));
    }

    /**
     * action sliderpro
     *
     * @return void
     */
    public function sliderproAction()
    {
        $slides = $this->slideRepository->findAll($this->settings['sortOrder'], $this->settings['limit']);
        $this->view->assign('slides', $slides);
        $this->view->assign('jsonSettings', json_encode($this->settings['sliderpro']));
    }

    /**
     * action sliderrevolution
     *
     * @return void
     */
    public function sliderrevolutionAction()
    {
        $slides = $this->slideRepository->findAll($this->settings['sortOrder'], $this->settings['limit']);
        $this->view->assign('slides', $slides);
        $this->settings['sliderrevolution']['delay'] = intval($this->settings['sliderrevolution']['delay']);
        $this->settings['sliderrevolution']['gridwidth'] = intval($this->settings['sliderrevolution']['gridwidth']);
        $this->settings['sliderrevolution']['gridheight'] = intval($this->settings['sliderrevolution']['gridheight']);
        $this->view->assign('jsonSettings', json_encode($this->settings['sliderrevolution']));
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
    	$this->view->assign('slides', $this->slideRepository->findAll($this->settings['sortOrder'], $this->settings['limit']));
    }
    
    /**
     * action show
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\Slide $slide
     * @return void
     */
    public function showAction(\Fixpunkt\FpFractionslider\Domain\Model\Slide $slide)
    {
        $this->view->assign('slide', $slide);
    }
}
