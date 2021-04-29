<?php
namespace Fixpunkt\FpFractionslider\ViewHelpers;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * AddPublicResourcesViewHelper-ViewHelper from tx_news:
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 * 
 *
 * @package fp_fractionslider
 */
class AddPublicResourcesViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;
    
    protected $escapeOutput = false;
    
    public function initializeArguments()
    {
        $this->registerArgument('path', 'string', 'Path to the CSS/JS file which should be included', true);
        $this->registerArgument('compress', 'bool', 'Define if file should be compressed', false, false);
        $this->registerArgument('footer', 'bool', 'Only JS files: Whether the file should be included in the footer', false, false);
        $this->registerArgument('library', 'string', 'Whether the file should be included as a library', false, '');
        $this->registerArgument('addSlash', 'bool', 'Define if to add a slash at the beginning', false, true);
    }
    
    /**
     * AddPublicResourcesViewHelper-ViewHelper
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return void
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
        ) {
            $path1 = $arguments['path'];
            $compress = (bool)$arguments['compress'];
            $footer = (bool)$arguments['footer'];
            $library = $arguments['library'];
            $addSlash = (bool)$arguments['addSlash'];
            $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
            $js = (strtolower(substr($path1, -3)) === '.js') ? 1 : 0;
            $css = (strtolower(substr($path1, -4)) === '.css') ? 1 : 0;
            $basis = Environment::getPublicPath();
            if (!($js || $css)) {
                return;
            }
            if (TYPO3_MODE === 'FE') {
                $sani = GeneralUtility::makeInstance(\TYPO3\CMS\Frontend\Resource\FilePathSanitizer::class);
                $path = $sani->sanitize($path1);
                // KGB: am Anfang wird (meistens) ein / benötigt!
                if ($addSlash && substr($path,0,1) != '/') {
                    $path = '/' . $path;
                }
                if ($path === '' || ($addSlash && !file_exists($basis . $path))) {
                    //echo " not found: $basis$path ";
                    return;
                }
                if ($js) {
                    if ($footer) {
                        if ($library != '') {
                            $pageRenderer->addJsFooterLibrary($library, $path, NULL, $compress);
                        } else {
                            $pageRenderer->addJsFooterFile($path, NULL, $compress);
                        }
                    } else {
                        if ($library) {
                            $pageRenderer->addJsLibrary($library, $path, NULL, $compress);
                        } else {
                            $pageRenderer->addJsFile($path, null, $compress, false, '', true);
                        }
                    }
                } else {
                    if ($library) {
                        $pageRenderer->addCssLibrary($path, 'stylesheet', 'all', '', $compress);
                    } else {
                        $pageRenderer->addCssFile($path, 'stylesheet', 'all', '', $compress, false, '', true);
                    }
                }
            }
    }
}
