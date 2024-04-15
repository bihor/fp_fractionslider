<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Controller\CssclassController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Repository\CssclassRepository;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class CssclassControllerTest extends UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\CssclassController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMockBuilder(CssclassController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
    }

    /**
     * @test
     */
    public function listActionFetchesAllCssclassesFromRepositoryAndAssignsThemToView()
    {

        $allCssclasses = $this->getMockBuilder(ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cssclassRepository = $this->getMockBuilder(CssclassRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cssclassRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCssclasses));
        $this->inject($this->subject, 'cssclassRepository', $cssclassRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cssclasses', $allCssclasses);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
