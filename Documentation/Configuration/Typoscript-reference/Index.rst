

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


TypoScript-Reference
^^^^^^^^^^^^^^^^^^^^

- Here you can make some settings.

========================================  =============  =================================================================================  ===========
Property                                  Data type      Description                                                                        Default
========================================  =============  =================================================================================  ===========
view.templateRootPaths.0 & .1             string         Path to the main template.                                                         EXT:...
view.partialRootPaths.0 & .1              string         Path to the partials of the template.                                              EXT:...
view.layoutRootPaths.0 & .1               string         Path to the layout template.                                                       EXT:...
persistence.storagePid                    int            Storage PID of the slider elements. Can be defined by the plugin too.
settings.listId                           int            Link to a list-page.
settings.showId                           int            Link to a single-page.
settings.sortOrder                        int            sorting order: asc or desc.                                                        asc
settings.limit                            int            Limit: how many entries should be shown? 0: all.
settings.fractionslider.*                 array          Settings for the "jQuery-FractionSlider".
settings.sliderpro.*                      array          Settings for the "Professional jQuery Content Slider Plugin - Slider Pro".
settings.sliderrevolution.*               array          Settings for the "Slider revolution".
settings.more.*                           array          Settings for an additional slide.
========================================  =============  =================================================================================  ===========

Example
~~~~~~~

Here an TypoScript constants example:

::

  plugin.tx_fpfractionslider_pi1.view {
    templateRootPath = fileadmin/Resources/Private/Slider/Templates/
    partialRootPath = fileadmin/Resources/Private/Slider/Partials/
    layoutRootPath = fileadmin/Resources/Private/Slider/Layouts/
  }

Here some TypoScript setup example:

::

   plugin.tx_fpfractionslider.persistence.storagePid >
   plugin.tx_fpfractionslider.persistence.storagePid = 603
   plugin.tx_fpfractionslider.settings.limit = 10
   plugin.tx_fpfractionslider.settings.fractionslider.timeout = 3000

Note: visit the homepage of the slider plugin to understand the settings of each slider.
