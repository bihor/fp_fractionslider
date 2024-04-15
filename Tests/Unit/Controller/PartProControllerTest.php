<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Controller\PartProController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Repository\PartProRepository;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use Fixpunkt\FpFractionslider\Domain\Model\PartPro;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class PartProControllerTest extends UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\PartProController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMockBuilder(PartProController::class)
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
    public function listActionFetchesAllPartProsFromRepositoryAndAssignsThemToView()
    {

        $allPartPros = $this->getMockBuilder(ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $partProRepository = $this->getMockBuilder(PartProRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $partProRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPartPros));
        $this->inject($this->subject, 'partProRepository', $partProRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('partPros', $allPartPros);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPartProToView()
    {
        $partPro = new PartPro();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('partPro', $partPro);

        $this->subject->showAction($partPro);
    }
}
