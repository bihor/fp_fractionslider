<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Domain\Model\RevEffect;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class RevEffectTest extends UnitTestCase
{
    /**
     * @var RevEffect
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new RevEffect();
    }

    protected function tearDown()
    {
    }

    /**
     * @test
     */
    public function getDataxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatax()
        );

    }

    /**
     * @test
     */
    public function setDataxForStringSetsDatax()
    {
        $this->subject->setDatax('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datax',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatay()
        );

    }

    /**
     * @test
     */
    public function setDatayForStringSetsDatay()
    {
        $this->subject->setDatay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datay',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatastartReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatastart()
        );

    }

    /**
     * @test
     */
    public function setDatastartForStringSetsDatastart()
    {
        $this->subject->setDatastart('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datastart',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatawhitespaceReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatawhitespaceForIntSetsDatawhitespace()
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
    public function getDatahoffsetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatahoffset()
        );

    }

    /**
     * @test
     */
    public function setDatahoffsetForStringSetsDatahoffset()
    {
        $this->subject->setDatahoffset('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datahoffset',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatavoffsetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDatavoffset()
        );

    }

    /**
     * @test
     */
    public function setDatavoffsetForStringSetsDatavoffset()
    {
        $this->subject->setDatavoffset('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'datavoffset',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDataresponsiveoffsetReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDataresponsiveoffsetForIntSetsDataresponsiveoffset()
    {
    }

    /**
     * @test
     */
    public function getDatabasealignReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatabasealignForIntSetsDatabasealign()
    {
    }
}
