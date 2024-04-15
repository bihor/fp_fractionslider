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
 * PartPro
 */
class ProEffect extends AbstractEntity
{
    /**
     * Sets the width of the layer
     *
     * @var string
     */
    protected $datawidth = '';

    /**
     * Sets the height of the layer
     *
     * @var string
     */
    protected $dataheight = '';

    /**
     * Sets the depth (z-index, in CSS terms) of the layer
     *
     * @var string
     */
    protected $datadepth = '';

    /**
     * Sets the position of the layer
     *
     * @var int
     */
    protected $dataposition = 0;

    /**
     * Sets the horizontal position of the layer, using the value specified for
     * data-position as a reference point
     *
     * @var string
     */
    protected $datahorizontal = '';

    /**
     * Sets the vertical position of the layer, using the value specified for
     * data-position as a reference point
     *
     * @var string
     */
    protected $datavertical = '';

    /**
     * Sets the transition of the layer when it appears in the slide
     *
     * @var int
     */
    protected $datashowtransition = 0;

    /**
     * Sets an offset for the position of the layer from which the layer will be
     * animated towards the final position when it appears in the slide
     *
     * @var string
     */
    protected $datashowoffset = '';

    /**
     * Sets the duration of the show transition
     *
     * @var string
     */
    protected $datashowduration = '';

    /**
     * Sets a delay for the show transition
     *
     * @var string
     */
    protected $datashowdelay = '';

    /**
     * Sets the transition of the layer when it disappears from the slide
     *
     * @var int
     */
    protected $datahidetransition = 0;

    /**
     * Sets an offset for the position of the layer towards which the layer will be
     * animated from the original position when it disappears from the slide
     *
     * @var string
     */
    protected $datahideoffset = '';

    /**
     * Sets the duration of the hide transition
     *
     * @var string
     */
    protected $datahideduration = '';

    /**
     * Sets a delay for the hide transition
     *
     * @var string
     */
    protected $datahidedelay = '';

    /**
     * Sets how much time a layer will stay visible before being hidden automatically
     *
     * @var string
     */
    protected $datastayduration = '';

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
     * Returns the datadepth
     *
     * @return string $datadepth
     */
    public function getDatadepth()
    {
        return $this->datadepth;
    }

    /**
     * Sets the datadepth
     *
     * @param string $datadepth
     * @return void
     */
    public function setDatadepth($datadepth)
    {
        $this->datadepth = $datadepth;
    }

    /**
     * Returns the dataposition value
     *
     * @return int $dataposition
     */
    public function getDatapositionValue()
    {
        $result = '';
        $result = match ($this->dataposition) {
            1 => 'topLeft',
            2 => 'topCenter',
            3 => 'topRight',
            4 => 'bottomLeft',
            5 => 'bottomCenter',
            6 => 'bottomRight',
            7 => 'centerLeft',
            8 => 'centerRight',
            9 => 'centerCenter',
            default => $result,
        };
        return $result;
    }

    /**
     * Returns the dataposition
     *
     * @return int $dataposition
     */
    public function getDataposition()
    {
        return $this->dataposition;
    }

    /**
     * Sets the dataposition
     *
     * @param int $dataposition
     * @return void
     */
    public function setDataposition($dataposition)
    {
        $this->dataposition = $dataposition;
    }

    /**
     * Returns the datahorizontal
     *
     * @return string $datahorizontal
     */
    public function getDatahorizontal()
    {
        return $this->datahorizontal;
    }

    /**
     * Sets the datahorizontal
     *
     * @param string $datahorizontal
     * @return void
     */
    public function setDatahorizontal($datahorizontal)
    {
        $this->datahorizontal = $datahorizontal;
    }

    /**
     * Returns the datavertical
     *
     * @return string $datavertical
     */
    public function getDatavertical()
    {
        return $this->datavertical;
    }

    /**
     * Sets the datavertical
     *
     * @param string $datavertical
     * @return void
     */
    public function setDatavertical($datavertical)
    {
        $this->datavertical = $datavertical;
    }

    /**
     * Returns the datashowtransition value
     *
     * @return int $datashowtransition
     */
    public function getDatashowtransitionValue()
    {
        $result = '';
        $result = match ($this->datashowtransition) {
            1 => 'left',
            2 => 'right',
            3 => 'up',
            4 => 'down',
            default => $result,
        };
        return $result;
    }

    /**
     * Returns the datashowtransition
     *
     * @return int $datashowtransition
     */
    public function getDatashowtransition()
    {
        return $this->datashowtransition;
    }

    /**
     * Sets the datashowtransition
     *
     * @param int $datashowtransition
     * @return void
     */
    public function setDatashowtransition($datashowtransition)
    {
        $this->datashowtransition = $datashowtransition;
    }

    /**
     * Returns the datashowoffset
     *
     * @return string $datashowoffset
     */
    public function getDatashowoffset()
    {
        return $this->datashowoffset;
    }

    /**
     * Sets the datashowoffset
     *
     * @param string $datashowoffset
     * @return void
     */
    public function setDatashowoffset($datashowoffset)
    {
        $this->datashowoffset = $datashowoffset;
    }

    /**
     * Returns the datashowduration
     *
     * @return string $datashowduration
     */
    public function getDatashowduration()
    {
        return $this->datashowduration;
    }

    /**
     * Sets the datashowduration
     *
     * @param string $datashowduration
     * @return void
     */
    public function setDatashowduration($datashowduration)
    {
        $this->datashowduration = $datashowduration;
    }

    /**
     * Returns the datashowdelay
     *
     * @return string $datashowdelay
     */
    public function getDatashowdelay()
    {
        return $this->datashowdelay;
    }

    /**
     * Sets the datashowdelay
     *
     * @param string $datashowdelay
     * @return void
     */
    public function setDatashowdelay($datashowdelay)
    {
        $this->datashowdelay = $datashowdelay;
    }

    /**
     * Returns the datahidetransition value
     *
     * @return int $datahidetransition
     */
    public function getDatahidetransitionValue()
    {
        $result = '';
        $result = match ($this->datahidetransition) {
            1 => 'left',
            2 => 'right',
            3 => 'up',
            4 => 'down',
            default => $result,
        };
        return $result;
    }

    /**
     * Returns the datahidetransition
     *
     * @return int $datahidetransition
     */
    public function getDatahidetransition()
    {
        return $this->datahidetransition;
    }

    /**
     * Sets the datahidetransition
     *
     * @param int $datahidetransition
     * @return void
     */
    public function setDatahidetransition($datahidetransition)
    {
        $this->datahidetransition = $datahidetransition;
    }

    /**
     * Returns the datahideoffset
     *
     * @return string $datahideoffset
     */
    public function getDatahideoffset()
    {
        return $this->datahideoffset;
    }

    /**
     * Sets the datahideoffset
     *
     * @param string $datahideoffset
     * @return void
     */
    public function setDatahideoffset($datahideoffset)
    {
        $this->datahideoffset = $datahideoffset;
    }

    /**
     * Returns the datahideduration
     *
     * @return string $datahideduration
     */
    public function getDatahideduration()
    {
        return $this->datahideduration;
    }

    /**
     * Sets the datahideduration
     *
     * @param string $datahideduration
     * @return void
     */
    public function setDatahideduration($datahideduration)
    {
        $this->datahideduration = $datahideduration;
    }

    /**
     * Returns the datahidedelay
     *
     * @return string $datahidedelay
     */
    public function getDatahidedelay()
    {
        return $this->datahidedelay;
    }

    /**
     * Sets the datahidedelay
     *
     * @param string $datahidedelay
     * @return void
     */
    public function setDatahidedelay($datahidedelay)
    {
        $this->datahidedelay = $datahidedelay;
    }

    /**
     * Returns the datastayduration
     *
     * @return string $datastayduration
     */
    public function getDatastayduration()
    {
        return $this->datastayduration;
    }

    /**
     * Sets the datastayduration
     *
     * @param string $datastayduration
     * @return void
     */
    public function setDatastayduration($datastayduration)
    {
        $this->datastayduration = $datastayduration;
    }
}
