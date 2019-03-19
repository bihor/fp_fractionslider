<?php
namespace Fixpunkt\FpFractionslider\Hooks;

/**
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
 * Variante aus tx_news. Alternative:
 * http://www.npostnik.de/typo3/vorschau-von-plugin-einstellungen-im-backend-in-typo3/
 */
use TYPO3\CMS\Backend\Utility\BackendUtility as BackendUtilityCore;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Restriction\BackendWorkspaceRestriction;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Type\Bitmask\Permission;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Hook to display verbose information about pi1 plugin in Web>Page module
 *
 */
class PageLayoutView
{

    /**
     * Extension key
     *
     * @var string
     */
    const KEY = 'fpfractionslider';

    /**
     * Path to the locallang file
     *
     * @var string
     */
    const LLPATH = 'LLL:EXT:fp_fractionslider/Resources/Private/Language/locallang_be.xlf:';

    /**
     * Max shown settings
     */
    const SETTINGS_IN_PREVIEW = 10;

    /**
     * Table information
     *
     * @var array
     */
    public $tableData = [];

    /**
     * Flexform information
     *
     * @var array
     */
    public $flexformData = [];

    /**
     * @var IconFactory
     */
    protected $iconFactory;

    public function __construct()
    {
        $this->iconFactory = GeneralUtility::makeInstance(IconFactory::class);
    }

    /**
     * Returns information about this extension's pi1 plugin
     *
     * @param array $params Parameters to the hook
     * @return string Information about pi1 plugin
     */
    public function getExtensionSummary(array $params) {
        $actionTranslationKey = $result = '';

        $header = '<strong>' . $this->getLanguageService()->sL(self::LLPATH . 'pagelayoutview') . '</strong>';

        if ($params['row']['list_type'] == self::KEY . '_pi1') {
            $this->flexformData = GeneralUtility::xml2array($params['row']['pi_flexform']);

            // if flexform data is found
            $actions = $this->getFieldFromFlexform('switchableControllerActions');
            if (!empty($actions)) {
                $actionList = GeneralUtility::trimExplode(';', $actions);
                $actionList2 = GeneralUtility::trimExplode('>', $actionList[0]);
                
                // translate the first action into its translation
                //$actionTranslationKey = strtolower(str_replace('->', '_', $actionList[0]));
                $actionTranslationKey = strtolower($actionList2[1]);
                $actionTranslation = $actionTranslationKey;

                $th = $this->getLanguageService()->sL(self::LLPATH . 'template');
                $td = $actionTranslation;
            } else {
                $th = $this->generateCallout($this->getLanguageService()->sL(self::LLPATH . 'template.not_configured'));
                $td = '';
            }
            $this->tableData[] = [
            		$th,
            		$td
            ];

            if (!empty($params['row']['pages'])) {
            	$this->getStartingPoint($params['row']['pages']);
            	
            	$pageIds = GeneralUtility::intExplode(',', $params['row']['pages'], true);
            	$sliders = [];
            
            	$i = 0;
            	foreach ($pageIds as $pid) {
            		//$sliderRecords = BackendUtilityCore::getRecordsByField('tx_fpfractionslider_domain_model_slide', 'pid', $id);
            		$queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_fpfractionslider_domain_model_slide');
            		/*$queryBuilder->getRestrictions()
            		->removeAll()
            		->add(GeneralUtility::makeInstance(DeletedRestriction::class))
            		->add(GeneralUtility::makeInstance(BackendWorkspaceRestriction::class));
            		*/
            		$sliderRecords = $queryBuilder->select('title')
	            		->from('tx_fpfractionslider_domain_model_slide')
	            		->where(
	            			$queryBuilder->expr()->eq(
	            				'pid',
	            				$queryBuilder->createNamedParameter($pid, \PDO::PARAM_INT)
	            			)
	            		)
	            		->setMaxResults(self::SETTINGS_IN_PREVIEW)
	            		->execute()
	            		->fetchAll();
            		if ($sliderRecords !== false) {
	            		foreach ($sliderRecords as $row) {
			            	$i++;
			            	$sliders[] = implode(",", $row); //['title'];
			            	if ($i >= self::SETTINGS_IN_PREVIEW) {
			            		break;
			            	}
	            		}
            		}
            		if ($i >= self::SETTINGS_IN_PREVIEW) {
            			break;
            		}
            	}
            	
            	if ($i > 0) {
            		$this->tableData[] = [
            				'Slides:',
            				implode('; ', $sliders)
            		];
            	}
            }
            
            if (is_array($this->flexformData)) {
            	$listPid = (int)$this->getFieldFromFlexform('settings.override.listId');
            	if ($listPid > 0) {
            		$content = $this->getRecordData($listPid);
            		$this->tableData[] = [
            				$this->getLanguageService()->sL(self::LLPATH . 'listId'),
            				$content
            		];
            	}
            	$detailPid = (int)$this->getFieldFromFlexform('settings.override.showId');
            	if ($detailPid > 0) {
            		$content = $this->getRecordData($detailPid);
            		$this->tableData[] = [
            				$this->getLanguageService()->sL(self::LLPATH . 'showId'),
            				$content
            		];
            	}
            	$sortOrder = $this->getFieldFromFlexform('settings.override.sortOrder');
            	if ($sortOrder) {
            		$this->tableData[] = [
            				$this->getLanguageService()->sL(self::LLPATH . 'sortOrder'),
            				$this->getLanguageService()->sL(self::LLPATH . 'sortOrder.' . $sortOrder)
            		];
            	}
            	$limit = (int)$this->getFieldFromFlexform('settings.override.limit');
            	if ($limit > 0) {
            		$this->tableData[] = [
            				$this->getLanguageService()->sL(self::LLPATH . 'limit'),
            				$limit
            		];
            	}
        		if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['fp_fractionslider']['Fixpunkt\\FpFractionslider\\Hooks\\PageLayoutView']['extensionSummary'])) {
                    $params = [
                        'action' => $actionTranslationKey
                    ];
                    foreach ($GLOBALS['TYPO3_CONF_VARS']['EXT']['fp_fractionslider']['Fixpunkt\\FpFractionslider\\Hooks\\PageLayoutView']['extensionSummary'] as $reference) {
                        GeneralUtility::callUserFunction($reference, $params, $this);
                    }
               } 
               $result = $this->renderSettingsAsTable($header, $params['row']['uid']);
            }
        }

        return $result;
    }

    /**
     * Daten zu einer Seite
     * 
     * @param int $id
     * @param string $table
     * @return string
     */
    public function getRecordData($id, $table = 'pages')
    {
        $record = BackendUtilityCore::getRecord($table, $id);

        if (is_array($record)) {
            $data = '<span data-toggle="tooltip" data-placement="top" data-title="id=' . $record['uid'] . '">'
                . $this->iconFactory->getIconForRecord($table, $record, Icon::SIZE_SMALL)->render()
                . '</span> ';
            $content = BackendUtilityCore::wrapClickMenuOnIcon($data, $table, $record['uid'], true, '',
                '+info,edit,history');

            $linkTitle = htmlspecialchars(BackendUtilityCore::getRecordTitle($table, $record));

            if ($table === 'pages') {
                $id = $record['uid'];
                $currentPageId = (int)GeneralUtility::_GET('id');
                $link = htmlspecialchars($this->getEditLink($record, $currentPageId));
                $switchLabel = $this->getLanguageService()->sL(self::LLPATH . 'pagemodule.switchToPage');
                $content .= ' <a href="#" data-toggle="tooltip" data-placement="top" data-title="' . $switchLabel . '" onclick=\'top.jump("' . $link . '", "web_layout", "web", ' . $id . ');return false\'>' . $linkTitle . '</a>';
            } else {
                $content .= $linkTitle;
            }
        } else {
            $text = sprintf($this->getLanguageService()->sL(self::LLPATH . 'pagemodule.pageNotAvailable'), $id);
            $content = $this->generateCallout($text);
        }

        return $content;
    }

    /**
     * Get the startingpoint
     *
     * @param string $pids
     * @return void
     */
    public function getStartingPoint($pids)
    {
        //$value = $this->getFieldFromFlexform('settings.startingpoint');
        if (!empty($pids)) {
            $pageIds = GeneralUtility::intExplode(',', $pids, true);
            $pagesOut = [];

            foreach ($pageIds as $id) {
                $pagesOut[] = $this->getRecordData($id, 'pages');
            }

            $this->tableData[] = [
            	$this->getLanguageService()->sL(self::LLPATH . 'LGL.startingpoint'),
                implode(', ', $pagesOut)
            ];
        }
    }

    /**
     * Render an alert box
     *
     * @param string $text
     * @return string
     */
    protected function generateCallout($text)
    {
        return '<div class="alert alert-warning">' . htmlspecialchars($text) . '</div>';
    }

    /**
     * Render the settings as table for Web>Page module
     * System settings are displayed in mono font
     *
     * @param string $header
     * @param int $recordUid
     * @return string
     */
    protected function renderSettingsAsTable($header = '', $recordUid = 0)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
      //  $pageRenderer->loadRequireJsModule('TYPO3/CMS/fp_fractionslider/PageLayout');
        $pageRenderer->addCssFile('EXT:fp_fractionslider/Resources/Public/css/PageLayoutView.css');

        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName('EXT:fp_fractionslider/Resources/Private/Templates/Backend/PageLayoutView.html'));
        $view->assignMultiple([
            'header' => $header,
            'rows' => [
                'above' => array_slice($this->tableData, 0, self::SETTINGS_IN_PREVIEW),
                'below' => array_slice($this->tableData, self::SETTINGS_IN_PREVIEW)
            ],
            'id' => $recordUid
        ]);

        return $view->render();
    }

    /**
     * Get field value from flexform configuration,
     * including checks if flexform configuration is available
     *
     * @param string $key name of the key
     * @param string $sheet name of the sheet
     * @return string|NULL if nothing found, value if found
     */
    public function getFieldFromFlexform($key, $sheet = 'sDEF')
    {
        $flexform = $this->flexformData;
        if (isset($flexform['data'])) {
            $flexform = $flexform['data'];
            if (is_array($flexform) && is_array($flexform[$sheet]) && is_array($flexform[$sheet]['lDEF'])
                && is_array($flexform[$sheet]['lDEF'][$key]) && isset($flexform[$sheet]['lDEF'][$key]['vDEF'])
            ) {
                return $flexform[$sheet]['lDEF'][$key]['vDEF'];
            }
        }

        return null;
    }

    /**
     * Build a backend edit link based on given record.
     *
     * @param array $row Current record row from database.
     * @param int $currentPageUid current page uid
     * @return string Link to open an edit window for record.
     * @see \TYPO3\CMS\Backend\Utility\BackendUtilityCore::readPageAccess()
     */
    protected function getEditLink($row, $currentPageUid)
    {
        $editLink = '';
        $localCalcPerms = $GLOBALS['BE_USER']->calcPerms(BackendUtilityCore::getRecord('pages', $row['uid']));
        $permsEdit = $localCalcPerms & Permission::PAGE_EDIT;
        if ($permsEdit) {
            $returnUrl = BackendUtilityCore::getModuleUrl('web_layout', ['id' => $currentPageUid]);
            $editLink = BackendUtilityCore::getModuleUrl('web_layout', [
                'id' => $row['uid'],
                'returnUrl' => $returnUrl
            ]);
        }
        return $editLink;
    }

    /**
     * Return language service instance
     *
     * @return \TYPO3\CMS\Lang\LanguageService
     */
    public function getLanguageService()
    {
        return $GLOBALS['LANG'];
    }

}
