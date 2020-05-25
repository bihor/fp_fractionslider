<?php
namespace Fixpunkt\FpFractionslider\Domain\Model;

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
 * Slide-element
 */
class Slide extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title of the slide
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Optional subtitle of this slide
     *
     * @var string
     */
    protected $subtitle = '';

    /**
     * Fixed background image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $background = null;

    /**
     * Or fixed background color
     *
     * @var string
     */
    protected $color = '';

    /**
     * data-in attribute
     *
     * @var int
     */
    protected $datain = 0;

    /**
     * Slide-elements for this slide
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\Part>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $elements = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->elements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the background
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $background
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Sets the background
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $background
     * @return void
     */
    public function setBackground(\TYPO3\CMS\Extbase\Domain\Model\FileReference $background)
    {
        $this->background = $background;
    }

    /**
     * Returns the color
     *
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     *
     * @param string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Returns the datain-value
     *
     * @return string $datain
     */
    public function getDatainValue()
    {
        $result = '';
        switch ($this->datain) {
            case 1:    $result = 'none';
                break;
            case 2:    $result = 'fade';
                break;
            case 4:    $result = 'slideLeft';
                break;
            case 5:    $result = 'slideRight';
                break;
            case 6:    $result = 'slideTop';
                break;
            case 7:    $result = 'slideBottom';
                break;
            case 8:    $result = 'scrollLeft';
                break;
            case 9:    $result = 'scrollRight';
                break;
            case 10:    $result = 'scrollTop';
                break;
            case 11:    $result = 'scrollBottom';
                break;
            case 13:    $result = 'slideup';
                break;
            case 14:    $result = 'slidedown';
                break;
            case 15:    $result = 'slideright';
                break;
            case 16:    $result = 'slideleft';
                break;
            case 17:    $result = 'slidehorizontal';
                break;
            case 18:    $result = 'slidevertical';
                break;
            case 19:    $result = 'boxslide';
                break;
            case 20:    $result = 'slotslide-horizontal';
                break;
            case 21:    $result = 'slotslide-vertical';
                break;
            case 22:    $result = 'boxfade';
                break;
            case 23:    $result = 'slotfade-horizontal';
                break;
            case 24:    $result = 'slotfade-vertical';
                break;
            case 25:    $result = 'fadefromright';
                break;
            case 26:    $result = 'fadefromleft';
                break;
            case 27:    $result = 'fadefromtop';
                break;
            case 28:    $result = 'fadefrombottom';
                break;
            case 29:    $result = 'fadetoleftfadefromright';
                break;
            case 30:    $result = 'fadetorightfadefromleft';
                break;
            case 31:    $result = 'fadetotopfadefrombottom';
                break;
            case 32:    $result = 'fadetobottomfadefromtop';
                break;
            case 33:    $result = 'parallaxtoright';
                break;
            case 34:    $result = 'parallaxtoleft';
                break;
            case 35:    $result = 'parallaxtotop';
                break;
            case 36:    $result = 'parallaxtobottom';
                break;
            case 37:    $result = 'scaledownfromright';
                break;
            case 38:    $result = 'scaledownfromleft';
                break;
            case 39:    $result = 'scaledownfromtop';
                break;
            case 40:    $result = 'scaledownfrombottom';
                break;
            case 41:    $result = 'zoomout';
                break;
            case 42:    $result = 'zoomin';
                break;
            case 43:    $result = 'slotzoom-horizontal';
                break;
            case 44:    $result = 'slotzoom-vertical';
                break;
            case 45:    $result = 'random-static';
                break;
            case 46:    $result = 'random';
                break;
        }
        return $result;
    }

    /**
     * Returns the datain
     *
     * @return int $datain
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Sets the datain
     *
     * @param int $datain
     * @return void
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;
    }

    /**
     * Adds a Part
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\Part $element
     * @return void
     */
    public function addElement(\Fixpunkt\FpFractionslider\Domain\Model\Part $element)
    {
        $this->elements->attach($element);
    }

    /**
     * Removes a Part
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\Part $elementToRemove The Part to be removed
     * @return void
     */
    public function removeElement(\Fixpunkt\FpFractionslider\Domain\Model\Part $elementToRemove)
    {
        $this->elements->detach($elementToRemove);
    }

    /**
     * Returns the elements
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\Part> $elements
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Sets the elements
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\Part> $elements
     * @return void
     */
    public function setElements(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $elements)
    {
        $this->elements = $elements;
    }
}
