<?php
/**
 * faq edit template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Ryo Ozawa <ozawa.ryo@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<?php echo $this->Html->script('/net_commons/base/js/workflow.js', false); ?>
<?php echo $this->Html->script('/net_commons/base/js/wysiwyg.js', false); ?>
<?php echo $this->Html->script('/faqs/js/faqs.js'); ?>

<div id="nc-faqs-<?php echo $frameId; ?>"
	 ng-controller="Faqs"
	 ng-init="initFaqEdit(
		<?php echo h(json_encode($frameId)); ?>,
		<?php echo h(json_encode($faq)); ?>
		)">

	<?php echo $this->Form->create('Faq', array(
			'name' => 'FaqForm' . $frameId,
			'novalidate' => true,
		)); ?>

		<div class="panel panel-default">
			<div class="panel-body">

				<?php echo $this->element('Faqs/form_faq'); ?>

				<hr />

				<?php echo $this->element('Comments.form'); ?>

			</div>
			<div class="panel-footer text-center">
				<?php echo $this->element('NetCommons.workflow_buttons'); ?>
			</div>
		</div>

		<?php echo $this->element('Comments.index'); ?>

	<?php echo $this->Form->end(); ?>
</div>
