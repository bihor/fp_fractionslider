<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class ProEffectControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\ProEffectController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Controller\ProEffectController::class)
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
    public function listActionFetchesAllProEffectsFromRepositoryAndAssignsThemToView()
    {

        $allProEffects = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $proEffectRepository = $this->getMockBuilder(\Fixpunkt\FpFractionslider\Domain\Repository\ProEffectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $proEffectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProEffects));
        $this->inject($this->subject, 'proEffectRepository', $proEffectRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('proEffects', $allProEffects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
