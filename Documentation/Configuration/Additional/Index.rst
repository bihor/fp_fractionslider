.. include:: /Includes.rst.txt


Additional
^^^^^^^^^^

- You can add an additional slide, if you want.
  Why? If you don´t want to show all slides, you can add an additional slide to your template.
  There you could set a link to a list-view-page with all slides/news.

Example
~~~~~~~

Here an example for the sliderpro-template. Add this to sp-thumbnails:

::

	<div class="sp-thumbnail">
		<div class="sp-thumbnail-text">
			<div class="sp-thumbnail-title">{settings.more.text1}</div>
			<f:if condition="{settings.more.text2} != ''"><div class="sp-thumbnail-description">{settings.more.text2}</div></f:if>
		</div>
	</div>

And this to sp-slides:

::

	<div class="sp-slide">
		<f:image src="fileadmin/your/image.jpg" alt="" class="sp-image" />
		<p class="sp-caption sp-white sp-padding"
			data-horizontal="40" data-vertical="40" data-position="bottomRight"
			data-show-transition="left" data-hide-transition="up" data-show-delay="500" data-hide-delay="100">
				{settings.more.text3}
				<f:link.page pageUid="{settings.listId}">{settings.more.textlink}</f:link.page>
		</p>
	</div>
