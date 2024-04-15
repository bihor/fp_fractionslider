<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Controller\ProEffectController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Repository\ProEffectRepository;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class ProEffectControllerTest extends UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\ProEffectController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMockBuilder(ProEffectController::class)
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
    public function listActionFetchesAllProEffectsFromRepositoryAndAssignsThemToView()
    {

        $allProEffects = $this->getMockBuilder(ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $proEffectRepository = $this->getMockBuilder(ProEffectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $proEffectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProEffects));
        $this->inject($this->subject, 'proEffectRepository', $proEffectRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('proEffects', $allProEffects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
