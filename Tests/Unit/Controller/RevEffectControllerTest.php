<?php
namespace Fixpunkt\FpFractionslider\Tests\Unit\Controller;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use Fixpunkt\FpFractionslider\Controller\RevEffectController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use Fixpunkt\FpFractionslider\Domain\Repository\RevEffectRepository;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
/**
 * Test case.
 *
 * @author Kurt Gusbeth <k.gusbeth@fixpunkt.com>
 */
class RevEffectControllerTest extends UnitTestCase
{
    /**
     * @var \Fixpunkt\FpFractionslider\Controller\RevEffectController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMockBuilder(RevEffectController::class)
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
    public function listActionFetchesAllRevEffectsFromRepositoryAndAssignsThemToView()
    {

        $allRevEffects = $this->getMockBuilder(ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $revEffectRepository = $this->getMockBuilder(RevEffectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $revEffectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRevEffects));
        $this->inject($this->subject, 'revEffectRepository', $revEffectRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('revEffects', $allRevEffects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
