<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Domain\Model\ProEffect;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class ProEffectTest extends UnitTestCase
{
    /**
     * @var ProEffect
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new ProEffect();
    }

    protected function tearDown()
    {
    }

    /**
     * @test
     */
    public function getDatawidthReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatawidth()
        );

    }

    /**
     * @test
     */
    public function setDatawidthForStringSetsDatawidth()
    {
        $this->subject->setDatawidth('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datawidth',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDataheightReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDataheight()
        );

    }

    /**
     * @test
     */
    public function setDataheightForStringSetsDataheight()
    {
        $this->subject->setDataheight('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dataheight',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatadepthReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatadepth()
        );

    }

    /**
     * @test
     */
    public function setDatadepthForStringSetsDatadepth()
    {
        $this->subject->setDatadepth('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datadepth',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatapositionReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatapositionForIntSetsDataposition()
    {
    }

    /**
     * @test
     */
    public function getDatahorizontalReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatahorizontal()
        );

    }

    /**
     * @test
     */
    public function setDatahorizontalForStringSetsDatahorizontal()
    {
        $this->subject->setDatahorizontal('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datahorizontal',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDataverticalReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatavertical()
        );

    }

    /**
     * @test
     */
    public function setDataverticalForStringSetsDatavertical()
    {
        $this->subject->setDatavertical('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datavertical',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatashowtransitionReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatashowtransitionForIntSetsDatashowtransition()
    {
    }

    /**
     * @test
     */
    public function getDatashowoffsetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatashowoffset()
        );

    }

    /**
     * @test
     */
    public function setDatashowoffsetForStringSetsDatashowoffset()
    {
        $this->subject->setDatashowoffset('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datashowoffset',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatashowdurationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatashowduration()
        );

    }

    /**
     * @test
     */
    public function setDatashowdurationForStringSetsDatashowduration()
    {
        $this->subject->setDatashowduration('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datashowduration',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatashowdelayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatashowdelay()
        );

    }

    /**
     * @test
     */
    public function setDatashowdelayForStringSetsDatashowdelay()
    {
        $this->subject->setDatashowdelay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datashowdelay',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatahidetransitionReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatahidetransitionForIntSetsDatahidetransition()
    {
    }

    /**
     * @test
     */
    public function getDatahideoffsetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatahideoffset()
        );

    }

    /**
     * @test
     */
    public function setDatahideoffsetForStringSetsDatahideoffset()
    {
        $this->subject->setDatahideoffset('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datahideoffset',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatahidedurationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatahideduration()
        );

    }

    /**
     * @test
     */
    public function setDatahidedurationForStringSetsDatahideduration()
    {
        $this->subject->setDatahideduration('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datahideduration',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatahidedelayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatahidedelay()
        );

    }

    /**
     * @test
     */
    public function setDatahidedelayForStringSetsDatahidedelay()
    {
        $this->subject->setDatahidedelay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datahidedelay',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatastaydurationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatastayduration()
        );

    }

    /**
     * @test
     */
    public function setDatastaydurationForStringSetsDatastayduration()
    {
        $this->subject->setDatastayduration('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datastayduration',
            $this->subject
        );

    }
}
