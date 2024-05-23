.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


ChangeLog
---------

- Here you find all the changes through the versions.

==========  =======================================================================================
Version     Changes
==========  =======================================================================================
0.4.0       Initial upload to TER.
0.5.0       Settings sortOrder, limit, listId and showId added. Slide-list-action added. 

            Bugfixing: CDATA removed (TYPO3 8 doesn´t like it - TYPO3 7 needs it sometimes).
0.6.0       {settings.more.*} and additional-Flexforms added.
            Slide preview to the page layout view added.
0.6.2       cettcontent now as integer-field. Iconprovider was wrong.
0.6.3       Compatibility to jQuery 3.
1.0.0       Now for TYPO3 8 and 9.

            TypoScript-setup plugin.tx_fpfractionslider_pi1 renamed to plugin.tx_fpfractionslider.
            Note: you need to rename your TypoScript-setup-settings in some cases too.
            I did this because TYPO3 8 ignores the "Record Storage Page" when
            plugin.tx_fpfractionslider_pi1.persistence.storagePid is empty (or set)!
1.1.0       Version for TYPO3 9 and 10.
1.1.4       addSlash-parameter in the Viewhelper activated. Default value: true.

            extension-key added to composer.json.

            Bugfix for TYPO3 10: image appearance in the BE.
1.2.1       Version for TYPO3 10 and 11.
1.3.0       Replacement of the Viewhelper re:addPublicResources. It is now deprecated.
            Use f:asset.css or f:asset.script instead.
1.3.2       PHP 8 bugfix.
2.0.0       Breaking: all plugins must be changed via an update-script (in the install-tool)!

            Breaking: the Viewhelper re:addPublicResources was removed.

            Breaking: plugin.tx_fpfractionslider_pi1 renamed to plugin.tx_fpfractionslider.
2.1.0       Refactored with the rector-tool.

            ts-files renamed to .typoscript!

2.1.1       Bugfix: backend preview.
==========  =======================================================================================
