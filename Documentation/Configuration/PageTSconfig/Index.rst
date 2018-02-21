.. include:: Images.txt

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


Page TSconfig
^^^^^^^^^^^^^

- You can use the Page TSconfig to hide unused fields.

Example
~~~~~~~

Here an example to hide some fields:

::

  TCEFORM.tx_fpfractionslider_domain_model_part.pro.disabled = 1
  TCEFORM.tx_fpfractionslider_domain_model_part.revolution.disabled = 1
  TCEFORM.tx_fpfractionslider_domain_model_part.cettcontent.disabled = 1
  TCEFORM.tx_fpfractionslider_domain_model_part.cssstyles.disabled = 1
  TCEFORM.tx_fpfractionslider_domain_model_slide.color.disabled = 1
  TCEFORM.tx_fpfractionslider_domain_model_slide.subtitle.disabled = 1

|img-7|

*Image: you find this on the Ressources tab of a page*


You have to use the table-name and column-name. The column-names for the different effects are: fraction, pro and revolution.
