<?php
namespace Fixpunkt\FpFractionslider\ViewHelpers;
 
/**
 * ViewHelper zur Rückgabe eines geparsten tt_content Elementes
 */
 
class ContentViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * Parse content element
     *
     * @param    int           UID des Content Element
     * @return   string        Geparstes Content Element
     */
    public function render($uid)
    {
        $conf = array( // config
            'tables' => 'tt_content',
            'source' => intval($uid),
            'dontCheckPid' => 1
        );
        return $this->objectManager->get('TYPO3\CMS\Frontend\ContentObject\RecordsContentObject')->render($conf);
    }
}
?>