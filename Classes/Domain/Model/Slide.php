<?php
namespace Fixpunkt\FpFractionslider\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
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
class Slide extends AbstractEntity
{
    /**
     * Title of the slide
     *
     * @var string
     */
    #[Validate(['validator' => 'NotEmpty'])]
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
     * @var FileReference
     */
    #[Cascade(['value' => 'remove'])]
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
     * @var ObjectStorage<Part>
     */
    #[Cascade(['value' => 'remove'])]
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
        $this->elements = new ObjectStorage();
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
     * @return FileReference $background
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Sets the background
     *
     * @return void
     */
    public function setBackground(FileReference $background)
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
        $result = match ($this->datain) {
            1 => 'none',
            2 => 'fade',
            4 => 'slideLeft',
            5 => 'slideRight',
            6 => 'slideTop',
            7 => 'slideBottom',
            8 => 'scrollLeft',
            9 => 'scrollRight',
            10 => 'scrollTop',
            11 => 'scrollBottom',
            13 => 'slideup',
            14 => 'slidedown',
            15 => 'slideright',
            16 => 'slideleft',
            17 => 'slidehorizontal',
            18 => 'slidevertical',
            19 => 'boxslide',
            20 => 'slotslide-horizontal',
            21 => 'slotslide-vertical',
            22 => 'boxfade',
            23 => 'slotfade-horizontal',
            24 => 'slotfade-vertical',
            25 => 'fadefromright',
            26 => 'fadefromleft',
            27 => 'fadefromtop',
            28 => 'fadefrombottom',
            29 => 'fadetoleftfadefromright',
            30 => 'fadetorightfadefromleft',
            31 => 'fadetotopfadefrombottom',
            32 => 'fadetobottomfadefromtop',
            33 => 'parallaxtoright',
            34 => 'parallaxtoleft',
            35 => 'parallaxtotop',
            36 => 'parallaxtobottom',
            37 => 'scaledownfromright',
            38 => 'scaledownfromleft',
            39 => 'scaledownfromtop',
            40 => 'scaledownfrombottom',
            41 => 'zoomout',
            42 => 'zoomin',
            43 => 'slotzoom-horizontal',
            44 => 'slotzoom-vertical',
            45 => 'random-static',
            46 => 'random',
            default => $result,
        };
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
     * @return void
     */
    public function addElement(Part $element)
    {
        $this->elements->attach($element);
    }

    /**
     * Removes a Part
     *
     * @param Part $elementToRemove The Part to be removed
     * @return void
     */
    public function removeElement(Part $elementToRemove)
    {
        $this->elements->detach($elementToRemove);
    }

    /**
     * Returns the elements
     *
     * @return ObjectStorage<Part> $elements
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Sets the elements
     *
     * @param ObjectStorage<Part> $elements
     * @return void
     */
    public function setElements(ObjectStorage $elements)
    {
        $this->elements = $elements;
    }
}
