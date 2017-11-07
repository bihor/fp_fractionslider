<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class CssclassControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\CssclassController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Controller\CssclassController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCssclassesFromRepositoryAndAssignsThemToView()
    {

        $allCssclasses = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cssclassRepository = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Domain\Repository\CssclassRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cssclassRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCssclasses));
        $this->inject($this->subject, 'cssclassRepository', $cssclassRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cssclasses', $allCssclasses);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
