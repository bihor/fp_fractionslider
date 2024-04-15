<?php
namespace Fixpunkt\FpFractionslider\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * ViewHelper zur Rückgabe eines geparsten tt_content Elementes
 */
 
class ContentViewHelper extends AbstractViewHelper
{
	use CompileWithRenderStatic;
	
	protected $escapeOutput = false;
	
	public function initializeArguments()
	{
		$this->registerArgument('uid', 'integer', 'UID des Content Element', true);
	}
	
	/**
	 * Parse content element
	 * 
	 * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
	 * @return   string        Geparstes Content Element
	 */
	public static function renderStatic(
		array $arguments,
		\Closure $renderChildrenClosure,
		RenderingContextInterface $renderingContext
		) {
		$uid = $arguments['uid'];
		$conf = [
          'tables' => 'tt_content',
          'source' => intval($uid),
          'dontCheckPid' => 1,
        ];
		return $GLOBALS['TSFE']->cObj->cObjGetSingle('RECORDS',$conf);
	}
}