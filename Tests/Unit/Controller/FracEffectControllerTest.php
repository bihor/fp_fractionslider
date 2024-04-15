<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Controller\FracEffectController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Repository\FracEffectRepository;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class FracEffectControllerTest extends UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\FracEffectController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMockBuilder(FracEffectController::class)
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
    public function listActionFetchesAllFracEffectsFromRepositoryAndAssignsThemToView()
    {

        $allFracEffects = $this->getMockBuilder(ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $fracEffectRepository = $this->getMockBuilder(FracEffectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $fracEffectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFracEffects));
        $this->inject($this->subject, 'fracEffectRepository', $fracEffectRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('fracEffects', $allFracEffects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
