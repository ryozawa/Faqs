<?php
/**
 * faq form element template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Ryo Ozawa <ozawa.ryo@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<div class='form-group'>
	<?php echo $this->Form->input('Faq.category_id',
		array(
			'label' => __d('categories', 'Category'),
			'type' => 'select',
			'error' => false,
			'class' => 'form-control',
			'empty' => array(0 => __d('categories', 'Select Category')),
			'options' => $categoryOptions,
			'ng-model' => 'selectedCategoryId',
		)); ?>
	<div class="has-error">
		<?php if (isset($this->validationErrors['Faq']['category_id'])): ?>
		<?php foreach ($this->validationErrors['Faq']['category_id'] as $message): ?>
			<div class="help-block">
				<?php echo $message ?>
			</div>
		<?php endforeach ?>
		<?php endif ?>
	</div>
</div>

<div class='form-group'>
	<label class="control-label">
		<?php echo __d('faqs', 'Question') . $this->element('NetCommons.required'); ?>
	</label>
	<?php echo $this->Form->textarea('Faq.question',
		array(
			'class' => 'form-control',
			'rows' => 2,
			'required' => 'required',
			'ng-model' => 'faq.faq.question',
		)) ?>
	<div class="has-error">
		<?php if (isset($this->validationErrors['Faq']['question'])): ?>
		<?php foreach ($this->validationErrors['Faq']['question'] as $message): ?>
			<div class="help-block">
				<?php echo $message ?>
			</div>
		<?php endforeach ?>
		<?php endif; ?>
	</div>
</div>

<div class='form-group'>
	<label class="control-label">
		<?php echo __d('faqs', 'Answer') . $this->element('NetCommons.required'); ?>
	</label>
	<div class="nc-wysiwyg-alert">
		<?php echo $this->Form->textarea('Faq.answer',
			array(
				'class' => 'form-control',
				'rows' => 5,
				'required' => 'required',
				'ui-tinymce' => 'tinymce.options',
				'ng-model' => 'faq.faq.answer',
			)); ?>
	</div>
	<div class="has-error">
		<?php if (isset($this->validationErrors['Faq']['answer'])): ?>
		<?php foreach ($this->validationErrors['Faq']['answer'] as $message): ?>
			<div class="help-block">
				<?php echo $message ?>
			</div>
		<?php endforeach ?>
		<?php endif ?>
	</div>
</div>

<div ng-if="faq.faq.id">
	<accordion close-others="false">
		<accordion-group is-open="dangerSetting.open" class="panel-danger">
			<accordion-heading>
				<div>
					<?php echo __d('net_commons', 'Danger Zone'); ?>
					<i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': dangerSetting.open, 'glyphicon-chevron-right': !dangerSetting.open}"></i>
				</div>
			</accordion-heading>
			<strong>
				<?php echo __d('faqs', 'Delete FAQ'); ?>
			</strong>
			<?php echo $this->Form->button(
				__d('net_commons', 'Delete'),
				array('name' => 'delete', 'class' => 'btn btn-danger pull-right')); ?>
		</accordion-group>
	</accordion>
</div>
