<?php echo JHtml::_('tabs.panel', JText::_('COM_FABRIK_GROUP_LABEL_PUBLISHING_DETAILS'), 'list-publishing-panel');?>
<?php echo JHtml::_('sliders.start','table-sliders-'.$this->item->id, array('useCookie'=>1)); ?>

<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_PUBLISHING_DETAILS'), 'publishing-details'); ?>
	<fieldset class="panelform">
	<ul class="panelformlist">
		<?php foreach($this->form->getFieldset('publishing-details') as $field): ?>
			<li>
				<?php if (!$field->hidden): ?>
					<?php echo $field->label; ?>
				<?php endif; ?>
				<?php echo $field->input; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</fieldset>

<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_RSS'), 'rss'); ?>
	<fieldset class="panelform">
		<ul class="panelformlist">
			<?php foreach($this->form->getFieldset('rss') as $field): ?>
				<?php if (!$field->hidden): ?>
					<li><?php echo $field->label; ?></li>
				<?php endif; ?>
				<li><?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>

	<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_CSV'), 'csv'); ?>
	<fieldset class="panelform">
		<ul class="panelformlist">
			<?php foreach($this->form->getFieldset('csv') as $field): ?>
				<?php if (!$field->hidden): ?>
					<li><?php echo $field->label; ?></li>
				<?php endif; ?>
				<li><?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>

	<?php echo JHtml::_('sliders.panel',JText::_('COM_FABRIK_GROUP_LABEL_SEARCH'), 'search'); ?>
	<fieldset class="panelform">
		<ul class="panelformlist">
			<?php foreach($this->form->getFieldset('search') as $field): ?>
				<?php if (!$field->hidden): ?>
					<li><?php echo $field->label; ?></li>
				<?php endif; ?>
				<li><?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>


<?php echo JHtml::_('sliders.end'); ?>
