<?php
namespace Fixpunkt\FpFractionslider\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
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
 * Slider revolution effect
 */
class RevEffect extends AbstractEntity
{
    /**
     * data-x value
     *
     * @var string
     */
    protected $datax = '';

    /**
     * data-y value
     *
     * @var string
     */
    protected $datay = '';

    /**
     * data-start value
     *
     * @var string
     */
    protected $datastart = '';

    /**
     * data-whitespace value
     *
     * @var int
     */
    protected $datawhitespace = '';

    /**
     * data-width value
     *
     * @var string
     */
    protected $datawidth = '';

    /**
     * data-height value
     *
     * @var string
     */
    protected $dataheight = '';

    /**
     * data-hoffset value
     *
     * @var string
     */
    protected $datahoffset = '';

    /**
     * data-voffset value
     *
     * @var string
     */
    protected $datavoffset = '';

    /**
     * data-responsive_offset value
     *
     * @var int
     */
    protected $dataresponsiveoffset = 0;

    /**
     * data-basealign value
     *
     * @var int
     */
    protected $databasealign = 0;

    /**
     * Returns the datax
     *
     * @return string $datax
     */
    public function getDatax()
    {
        return $this->datax;
    }

    /**
     * Sets the datax
     *
     * @param string $datax
     * @return void
     */
    public function setDatax($datax)
    {
        $this->datax = $datax;
    }

    /**
     * Returns the datay
     *
     * @return string $datay
     */
    public function getDatay()
    {
        return $this->datay;
    }

    /**
     * Sets the datay
     *
     * @param string $datay
     * @return void
     */
    public function setDatay($datay)
    {
        $this->datay = $datay;
    }

    /**
     * Returns the datastart
     *
     * @return string $datastart
     */
    public function getDatastart()
    {
        return $this->datastart;
    }

    /**
     * Sets the datastart
     *
     * @param string $datastart
     * @return void
     */
    public function setDatastart($datastart)
    {
        $this->datastart = $datastart;
    }

    /**
     * Returns the datawidth
     *
     * @return string $datawidth
     */
    public function getDatawidth()
    {
        return $this->datawidth;
    }

    /**
     * Sets the datawidth
     *
     * @param string $datawidth
     * @return void
     */
    public function setDatawidth($datawidth)
    {
        $this->datawidth = $datawidth;
    }

    /**
     * Returns the dataheight
     *
     * @return string $dataheight
     */
    public function getDataheight()
    {
        return $this->dataheight;
    }

    /**
     * Sets the dataheight
     *
     * @param string $dataheight
     * @return void
     */
    public function setDataheight($dataheight)
    {
        $this->dataheight = $dataheight;
    }

    /**
     * Returns the datahoffset
     *
     * @return string $datahoffset
     */
    public function getDatahoffset()
    {
        return $this->datahoffset;
    }

    /**
     * Sets the datahoffset
     *
     * @param string $datahoffset
     * @return void
     */
    public function setDatahoffset($datahoffset)
    {
        $this->datahoffset = $datahoffset;
    }

    /**
     * Returns the datavoffset
     *
     * @return string $datavoffset
     */
    public function getDatavoffset()
    {
        return $this->datavoffset;
    }

    /**
     * Sets the datavoffset
     *
     * @param string $datavoffset
     * @return void
     */
    public function setDatavoffset($datavoffset)
    {
        $this->datavoffset = $datavoffset;
    }

    /**
     * Returns the datawhitespace
     *
     * @return string $datawhitespace
     */
    public function getDatawhitespaceValue()
    {
    	$result = '';
        $result = match ($this->datawhitespace) {
            1 => 'normal',
            2 => 'nowrap',
            3 => 'pre',
            default => $result,
        };
        return $result;
    }
    
    /**
     * Returns the datawhitespace
     *
     * @return int datawhitespace
     */
    public function getDatawhitespace()
    {
        return $this->datawhitespace;
    }

    /**
     * Sets the datawhitespace
     *
     * @param string $datawhitespace
     * @return void
     */
    public function setDatawhitespace($datawhitespace)
    {
        $this->datawhitespace = $datawhitespace;
    }

    /**
     * Returns the dataresponsiveoffset
     *
     * @return string $dataresponsiveoffset
     */
    public function getDataresponsiveoffsetValue()
    {
    	$result = '';
    	$result = match ($this->dataresponsiveoffset) {
         1 => 'on',
         2 => 'off',
         default => $result,
     };
    	return $result;
    }
    
    /**
     * Returns the dataresponsiveoffset
     *
     * @return int $dataresponsiveoffset
     */
    public function getDataresponsiveoffset()
    {
        return $this->dataresponsiveoffset;
    }

    /**
     * Sets the dataresponsiveoffset
     *
     * @param int $dataresponsiveoffset
     * @return void
     */
    public function setDataresponsiveoffset($dataresponsiveoffset)
    {
        $this->dataresponsiveoffset = $dataresponsiveoffset;
    }

    /**
     * Returns the databasealign
     *
     * @return string $databasealign
     */
    public function getDatabasealignValue()
    {
    	$result = '';
    	$result = match ($this->databasealign) {
         1 => 'slide',
         2 => 'grid',
         default => $result,
     };
    	return $result;
    }
    
    /**
     * Returns the databasealign
     *
     * @return int $databasealign
     */
    public function getDatabasealign()
    {
        return $this->databasealign;
    }

    /**
     * Sets the databasealign
     *
     * @param int $databasealign
     * @return void
     */
    public function setDatabasealign($databasealign)
    {
        $this->databasealign = $databasealign;
    }
}
