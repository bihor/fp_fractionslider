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
 * Part of a slide
 */
class Part extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title of this element
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Optional subtitle of this element
     *
     * @var string
     * @validate NotEmpty
     */
    protected $subtitle = '';

    /**
     * Title of an optional link
     *
     * @var string
     */
    protected $linktitle = '';

    /**
     * Link
     *
     * @var string
     */
    protected $link = '';

    /**
     * Image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * Or: relation to a tt_content element
     *
     * @var integer
     */
    protected $cettcontent = '';

    /**
     * CSS styles
     *
     * @var string
     */
    protected $cssstyles = '';

    /**
     * CSS class
     *
     * @var \Fixpunkt\FpFractionslider\Domain\Model\Cssclass
     */
    protected $cssclass = null;

    /**
     * fraction
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\FracEffect>
     * @cascade remove
     */
    protected $fraction = null;

    /**
     * pro
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\ProEffect>
     * @cascade remove
     */
    protected $pro = null;

    /**
     * revolution
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\RevEffect>
     * @cascade remove
     */
    protected $revolution = null;

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
        $this->fraction = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->pro = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->revolution = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the linktitle
     *
     * @return string $linktitle
     */
    public function getLinktitle()
    {
        return $this->linktitle;
    }

    /**
     * Sets the linktitle
     *
     * @param string $linktitle
     * @return void
     */
    public function setLinktitle($linktitle)
    {
        $this->linktitle = $linktitle;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the cettcontent
     *
     * @return integer $cettcontent
     */
    public function getCettcontent()
    {
        return $this->cettcontent;
    }

    /**
     * Sets the cettcontent
     *
     * @param integer $cettcontent
     * @return void
     */
    public function setCettcontent($cettcontent)
    {
        $this->cettcontent = $cettcontent;
    }

    /**
     * Returns the cssstyles
     *
     * @return string $cssstyles
     */
    public function getCssstyles()
    {
        return $this->cssstyles;
    }

    /**
     * Sets the cssstyles
     *
     * @param string $cssstyles
     * @return void
     */
    public function setCssstyles($cssstyles)
    {
        $this->cssstyles = $cssstyles;
    }

    /**
     * Returns the cssclass
     *
     * @return \Fixpunkt\FpFractionslider\Domain\Model\Cssclass $cssclass
     */
    public function getCssclass()
    {
        return $this->cssclass;
    }

    /**
     * Sets the cssclass
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\Cssclass $cssclass
     * @return void
     */
    public function setCssclass(\Fixpunkt\FpFractionslider\Domain\Model\Cssclass $cssclass)
    {
        $this->cssclass = $cssclass;
    }

    /**
     * Adds a FracEffect
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\FracEffect $fraction
     * @return void
     */
    public function addFraction(\Fixpunkt\FpFractionslider\Domain\Model\FracEffect $fraction)
    {
        $this->fraction->attach($fraction);
    }

    /**
     * Removes a FracEffect
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\FracEffect $fractionToRemove The FracEffect to be removed
     * @return void
     */
    public function removeFraction(\Fixpunkt\FpFractionslider\Domain\Model\FracEffect $fractionToRemove)
    {
        $this->fraction->detach($fractionToRemove);
    }

    /**
     * Returns the fraction
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\FracEffect> $fraction
     */
    public function getFraction()
    {
        return $this->fraction;
    }

    /**
     * Sets the fraction
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\FracEffect> $fraction
     * @return void
     */
    public function setFraction(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $fraction)
    {
        $this->fraction = $fraction;
    }

    /**
     * Adds a ProEffect
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\ProEffect $pro
     * @return void
     */
    public function addPro(\Fixpunkt\FpFractionslider\Domain\Model\ProEffect $pro)
    {
        $this->pro->attach($pro);
    }

    /**
     * Removes a ProEffect
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\ProEffect $proToRemove The ProEffect to be removed
     * @return void
     */
    public function removePro(\Fixpunkt\FpFractionslider\Domain\Model\ProEffect $proToRemove)
    {
        $this->pro->detach($proToRemove);
    }

    /**
     * Returns the pro
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\ProEffect> $pro
     */
    public function getPro()
    {
        return $this->pro;
    }

    /**
     * Sets the pro
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\ProEffect> $pro
     * @return void
     */
    public function setPro(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pro)
    {
        $this->pro = $pro;
    }

    /**
     * Adds a RevEffect
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\RevEffect $revolution
     * @return void
     */
    public function addRevolution(\Fixpunkt\FpFractionslider\Domain\Model\RevEffect $revolution)
    {
        $this->revolution->attach($revolution);
    }

    /**
     * Removes a RevEffect
     *
     * @param \Fixpunkt\FpFractionslider\Domain\Model\RevEffect $revolutionToRemove The RevEffect to be removed
     * @return void
     */
    public function removeRevolution(\Fixpunkt\FpFractionslider\Domain\Model\RevEffect $revolutionToRemove)
    {
        $this->revolution->detach($revolutionToRemove);
    }

    /**
     * Returns the revolution
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\RevEffect> $revolution
     */
    public function getRevolution()
    {
        return $this->revolution;
    }

    /**
     * Sets the revolution
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fixpunkt\FpFractionslider\Domain\Model\RevEffect> $revolution
     * @return void
     */
    public function setRevolution(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $revolution)
    {
        $this->revolution = $revolution;
    }
}
