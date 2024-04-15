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
 * Part of a slide-element
 */
class FracEffect extends AbstractEntity
{
    /**
     * data-position attribute
     *
     * @var string
     */
    protected $dataposition = '';

    /**
     * data-in attribute
     *
     * @var int
     */
    protected $datain = 0;

    /**
     * data-out attribute
     *
     * @var int
     */
    protected $dataout = 0;

    /**
     * data-ease-in attribute
     *
     * @var string
     */
    protected $dataeasein = '';

    /**
     * data-ease-out attribute
     *
     * @var string
     */
    protected $dataeaseout = '';

    /**
     * data-delay attribute
     *
     * @var string
     */
    protected $datadelay = '';

    /**
     * data-time attribute
     *
     * @var string
     */
    protected $datatime = '';

    /**
     * data-step attribute
     *
     * @var string
     */
    protected $datastep = '';

    /**
     * data-special attribute
     *
     * @var int
     */
    protected $dataspecial = 0;

    /**
     * Returns the dataposition
     *
     * @return string $dataposition
     */
    public function getDataposition()
    {
        return $this->dataposition;
    }

    /**
     * Sets the dataposition
     *
     * @param string $dataposition
     * @return void
     */
    public function setDataposition($dataposition)
    {
        $this->dataposition = $dataposition;
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
            3 => 'left',
            4 => 'right',
            5 => 'top',
            6 => 'bottom',
            7 => 'topLeft',
            8 => 'bottomLeft',
            9 => 'topRight',
            10 => 'bottomRight',
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
     * Returns the datain-value
     *
     * @return string $datain
     */
    public function getDataoutValue()
    {
        $result = '';
        $result = match ($this->dataout) {
            1 => 'none',
            2 => 'fade',
            3 => 'left',
            4 => 'right',
            5 => 'top',
            6 => 'bottom',
            7 => 'topLeft',
            8 => 'bottomLeft',
            9 => 'topRight',
            10 => 'bottomRight',
            default => $result,
        };
        return $result;
    }

    /**
     * Returns the dataout
     *
     * @return int $dataout
     */
    public function getDataout()
    {
        return $this->dataout;
    }

    /**
     * Sets the dataout
     *
     * @param int $dataout
     * @return void
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;
    }

    /**
     * Returns the dataeasein
     *
     * @return string $dataeasein
     */
    public function getDataeasein()
    {
        return $this->dataeasein;
    }

    /**
     * Sets the dataeasein
     *
     * @param string $dataeasein
     * @return void
     */
    public function setDataeasein($dataeasein)
    {
        $this->dataeasein = $dataeasein;
    }

    /**
     * Returns the dataeaseout
     *
     * @return string $dataeaseout
     */
    public function getDataeaseout()
    {
        return $this->dataeaseout;
    }

    /**
     * Sets the dataeaseout
     *
     * @param string $dataeaseout
     * @return void
     */
    public function setDataeaseout($dataeaseout)
    {
        $this->dataeaseout = $dataeaseout;
    }

    /**
     * Returns the datadelay
     *
     * @return string $datadelay
     */
    public function getDatadelay()
    {
        return intval($this->datadelay);
    }

    /**
     * Sets the datadelay
     *
     * @param string $datadelay
     * @return void
     */
    public function setDatadelay($datadelay)
    {
        $this->datadelay = $datadelay;
    }

    /**
     * Returns the datatime
     *
     * @return string $datatime
     */
    public function getDatatime()
    {
        return intval($this->datatime);
    }

    /**
     * Sets the datatime
     *
     * @param string $datatime
     * @return void
     */
    public function setDatatime($datatime)
    {
        $this->datatime = $datatime;
    }

    /**
     * Returns the datastep
     *
     * @return string $datastep
     */
    public function getDatastep()
    {
        return intval($this->datastep);
    }

    /**
     * Sets the datastep
     *
     * @param string $datastep
     * @return void
     */
    public function setDatastep($datastep)
    {
        $this->datastep = $datastep;
    }

    /**
     * Returns the dataspecial
     *
     * @return int $dataspecial
     */
    public function getDataspecial()
    {
        return $this->dataspecial;
    }

    /**
     * Sets the dataspecial
     *
     * @param int $dataspecial
     * @return void
     */
    public function setDataspecial($dataspecial)
    {
        $this->dataspecial = $dataspecial;
    }
}
