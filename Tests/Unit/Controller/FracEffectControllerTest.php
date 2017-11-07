<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class FracEffectControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\FracEffectController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Controller\FracEffectController::class)
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
    public function listActionFetchesAllFracEffectsFromRepositoryAndAssignsThemToView()
    {

        $allFracEffects = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $fracEffectRepository = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Domain\Repository\FracEffectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $fracEffectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFracEffects));
        $this->inject($this->subject, 'fracEffectRepository', $fracEffectRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('fracEffects', $allFracEffects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
