<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Domain\Model\Slide;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Model\Part;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class SlideTest extends UnitTestCase
{
    /**
     * @var Slide
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new Slide();
    }

    protected function tearDown()
    {
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSubtitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubtitle()
        );

    }

    /**
     * @test
     */
    public function setSubtitleForStringSetsSubtitle()
    {
        $this->subject->setSubtitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subtitle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBackgroundReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getBackground()
        );

    }

    /**
     * @test
     */
    public function setBackgroundForFileReferenceSetsBackground()
    {
        $fileReferenceFixture = new FileReference();
        $this->subject->setBackground($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'background',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );

    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
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
    public function getElementsReturnsInitialValueForPart()
    {
        $newObjectStorage = new ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getElements()
        );

    }

    /**
     * @test
     */
    public function setElementsForObjectStorageContainingPartSetsElements()
    {
        $element = new Part();
        $objectStorageHoldingExactlyOneElements = new ObjectStorage();
        $objectStorageHoldingExactlyOneElements->attach($element);
        $this->subject->setElements($objectStorageHoldingExactlyOneElements);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneElements,
            'elements',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addElementToObjectStorageHoldingElements()
    {
        $element = new Part();
        $elementsObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elementsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($element));
        $this->inject($this->subject, 'elements', $elementsObjectStorageMock);

        $this->subject->addElement($element);
    }

    /**
     * @test
     */
    public function removeElementFromObjectStorageHoldingElements()
    {
        $element = new Part();
        $elementsObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elementsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($element));
        $this->inject($this->subject, 'elements', $elementsObjectStorageMock);

        $this->subject->removeElement($element);

    }
}
