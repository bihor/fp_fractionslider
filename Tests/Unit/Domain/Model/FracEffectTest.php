<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class FracEffectTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Domain\Model\FracEffect
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Fixpunkt\FpFractionslider\Domain\Model\FracEffect();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDatapositionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDataposition()
        );

    }

    /**
     * @test
     */
    public function setDatapositionForStringSetsDataposition()
    {
        $this->subject->setDataposition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dataposition',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatainReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatainForIntSetsDatain()
    {
    }

    /**
     * @test
     */
    public function getDataoutReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDataoutForIntSetsDataout()
    {
    }

    /**
     * @test
     */
    public function getDataeaseinReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDataeasein()
        );

    }

    /**
     * @test
     */
    public function setDataeaseinForStringSetsDataeasein()
    {
        $this->subject->setDataeasein('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dataeasein',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDataeaseoutReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDataeaseout()
        );

    }

    /**
     * @test
     */
    public function setDataeaseoutForStringSetsDataeaseout()
    {
        $this->subject->setDataeaseout('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dataeaseout',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatadelayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatadelay()
        );

    }

    /**
     * @test
     */
    public function setDatadelayForStringSetsDatadelay()
    {
        $this->subject->setDatadelay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datadelay',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatatimeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatatime()
        );

    }

    /**
     * @test
     */
    public function setDatatimeForStringSetsDatatime()
    {
        $this->subject->setDatatime('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datatime',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatastepReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatastep()
        );

    }

    /**
     * @test
     */
    public function setDatastepForStringSetsDatastep()
    {
        $this->subject->setDatastep('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datastep',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDataspecialReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDataspecialForIntSetsDataspecial()
    {
    }
}
