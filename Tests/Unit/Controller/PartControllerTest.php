<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class PartControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\PartController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Controller\PartController::class)
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
    public function listActionFetchesAllPartsFromRepositoryAndAssignsThemToView()
    {

        $allParts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $partRepository = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Domain\Repository\PartRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $partRepository->expects(self::once())->method('findAll')->will(self::returnValue($allParts));
        $this->inject($this->subject, 'partRepository', $partRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('parts', $allParts);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
