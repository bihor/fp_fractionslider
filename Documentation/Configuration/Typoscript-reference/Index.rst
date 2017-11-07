

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
settings.fractionslider.*                 array          Settings for the "jQuery-FractionSlider"
settings.sliderpro.*                      array          Settings for the "Professional jQuery Content Slider Plugin - Slider Pro"
settings.sliderrevolution.*               array          Settings for the "Slider revolution".
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

Here an TypoScript setup example:

::

   plugin.tx_fpfractionslider_pi1.persistence.storagePid = 603
