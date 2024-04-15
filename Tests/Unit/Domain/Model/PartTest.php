<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Domain\Model\Part;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use Fixpunkt\FpFractionslider\Domain\Model\Cssclass;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Model\FracEffect;
use Fixpunkt\FpFractionslider\Domain\Model\ProEffect;
use Fixpunkt\FpFractionslider\Domain\Model\RevEffect;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class PartTest extends UnitTestCase
{
    /**
     * @var Part
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new Part();
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
    public function getLinktitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLinktitle()
        );

    }

    /**
     * @test
     */
    public function setLinktitleForStringSetsLinktitle()
    {
        $this->subject->setLinktitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'linktitle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );

    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );

    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCettcontentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCettcontent()
        );

    }

    /**
     * @test
     */
    public function setCettcontentForStringSetsCettcontent()
    {
        $this->subject->setCettcontent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cettcontent',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCssstylesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCssstyles()
        );

    }

    /**
     * @test
     */
    public function setCssstylesForStringSetsCssstyles()
    {
        $this->subject->setCssstyles('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cssstyles',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCssclassReturnsInitialValueForCssclass()
    {
        self::assertEquals(
            null,
            $this->subject->getCssclass()
        );

    }

    /**
     * @test
     */
    public function setCssclassForCssclassSetsCssclass()
    {
        $cssclassFixture = new Cssclass();
        $this->subject->setCssclass($cssclassFixture);

        self::assertAttributeEquals(
            $cssclassFixture,
            'cssclass',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFractionReturnsInitialValueForFracEffect()
    {
        $newObjectStorage = new ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFraction()
        );

    }

    /**
     * @test
     */
    public function setFractionForObjectStorageContainingFracEffectSetsFraction()
    {
        $fraction = new FracEffect();
        $objectStorageHoldingExactlyOneFraction = new ObjectStorage();
        $objectStorageHoldingExactlyOneFraction->attach($fraction);
        $this->subject->setFraction($objectStorageHoldingExactlyOneFraction);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFraction,
            'fraction',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addFractionToObjectStorageHoldingFraction()
    {
        $fraction = new FracEffect();
        $fractionObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fractionObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($fraction));
        $this->inject($this->subject, 'fraction', $fractionObjectStorageMock);

        $this->subject->addFraction($fraction);
    }

    /**
     * @test
     */
    public function removeFractionFromObjectStorageHoldingFraction()
    {
        $fraction = new FracEffect();
        $fractionObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fractionObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($fraction));
        $this->inject($this->subject, 'fraction', $fractionObjectStorageMock);

        $this->subject->removeFraction($fraction);

    }

    /**
     * @test
     */
    public function getProReturnsInitialValueForProEffect()
    {
        $newObjectStorage = new ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPro()
        );

    }

    /**
     * @test
     */
    public function setProForObjectStorageContainingProEffectSetsPro()
    {
        $pro = new ProEffect();
        $objectStorageHoldingExactlyOnePro = new ObjectStorage();
        $objectStorageHoldingExactlyOnePro->attach($pro);
        $this->subject->setPro($objectStorageHoldingExactlyOnePro);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePro,
            'pro',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addProToObjectStorageHoldingPro()
    {
        $pro = new ProEffect();
        $proObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $proObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($pro));
        $this->inject($this->subject, 'pro', $proObjectStorageMock);

        $this->subject->addPro($pro);
    }

    /**
     * @test
     */
    public function removeProFromObjectStorageHoldingPro()
    {
        $pro = new ProEffect();
        $proObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $proObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($pro));
        $this->inject($this->subject, 'pro', $proObjectStorageMock);

        $this->subject->removePro($pro);

    }

    /**
     * @test
     */
    public function getRevolutionReturnsInitialValueForRevEffect()
    {
        $newObjectStorage = new ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRevolution()
        );

    }

    /**
     * @test
     */
    public function setRevolutionForObjectStorageContainingRevEffectSetsRevolution()
    {
        $revolution = new RevEffect();
        $objectStorageHoldingExactlyOneRevolution = new ObjectStorage();
        $objectStorageHoldingExactlyOneRevolution->attach($revolution);
        $this->subject->setRevolution($objectStorageHoldingExactlyOneRevolution);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRevolution,
            'revolution',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRevolutionToObjectStorageHoldingRevolution()
    {
        $revolution = new RevEffect();
        $revolutionObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $revolutionObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($revolution));
        $this->inject($this->subject, 'revolution', $revolutionObjectStorageMock);

        $this->subject->addRevolution($revolution);
    }

    /**
     * @test
     */
    public function removeRevolutionFromObjectStorageHoldingRevolution()
    {
        $revolution = new RevEffect();
        $revolutionObjectStorageMock = $this->getMockBuilder(ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $revolutionObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($revolution));
        $this->inject($this->subject, 'revolution', $revolutionObjectStorageMock);

        $this->subject->removeRevolution($revolution);

    }
}
