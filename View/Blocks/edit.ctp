<?php
/**
 * faq block edit template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Ryo Ozawa <ozawa.ryo@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<?php
	echo $this->Html->script('/net_commons/base/js/workflow.js', false);
	echo $this->Html->script('/net_commons/base/js/wysiwyg.js', false);
	echo $this->Html->script('http://rawgit.com/angular/bower-angular-sanitize/v1.2.25/angular-sanitize.js', false);
	echo $this->Html->script('http://rawgit.com/m-e-conroy/angular-dialog-service/v5.2.0/src/dialogs.js', false);
	echo $this->Html->script('/frames/js/frames.js', false);
	echo $this->Html->script('/faqs/js/faqs.js', false);

	echo $this->Html->css('/faqs/css/faqs.css');
?>

<?php echo $this->element('Faqs.frame_menu', array('tab' => 'block')); ?>

<?php if ($block['id']) : ?>
	<?php echo $this->element('Faqs.block_menu', array('tab' => 'general')); ?>
<?php endif; ?>

<div id="nc-faq-container-<?php echo $frameId; ?>"
	 ng-controller="Faqs"
	 ng-init="block = <?php echo h(json_encode($block)); ?>;">

	<?php echo $this->Form->create(null, array(
			'name' => 'FaqBlockForm' . $frameId,
			'novalidate' => true,
		)); ?>

		<div class="panel panel-default" >
			<div class="panel-body has-feedback">
				<?php echo $this->element('Blocks/edit_form', array('nameLabel' => __d('faqs', 'FAQ Name'))); ?>

				<?php if ($block['id']) : ?>
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<span>
							<?php echo __d('categories', 'Category'); ?>
						</span>
						<div class="pull-right">
							<a class="btn btn-xs btn-primary"
							   href="<?php echo $this->Html->url('/' . h($frame['pluginKey']) . '/categories/edit/' . $frameId . '/' . (int)$block['id']);?>">
								<span class="glyphicon glyphicon-edit"></span>
							</a>
						</div>
					</div>
					<div class="panel-body">
						<?php if(count($categoryList)): ?>
							<?php
								foreach ($categoryList as $category) {
									echo $category['category']['name'] . __d('categories', ', ');
								}
							?>
						<?php else: ?>
							<?php echo __d('categories', 'No category.'); ?>
						<?php endif; ?>
					</div>
				</div>

				<accordion close-others="false">
					<accordion-group is-open="dangerSetting.open" class="panel-danger">
						<accordion-heading>
							<?php echo __d('net_commons', 'Danger Zone'); ?>
							<i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': dangerSetting.open, 'glyphicon-chevron-right': !dangerSetting.open}"></i>
						</accordion-heading>
						<div class="inline-block">
							<strong>
								<?php echo __d('blocks', 'Delete Block'); ?>
							</strong>
							<br/>
							<?php echo sprintf(__d('blocks', 'Delete all data associated with %s.'), $block['name']); ?>
						</div>
						<?php echo $this->Form->button(
							__d('net_commons', 'Delete'),
							array('name' => 'delete', 'class' => 'btn btn-danger pull-right')); ?>
					</accordion-group>
				</accordion>
				<?php endif; ?>
			</div>

			<div class="panel-footer text-center">
				<div class="text-center">
					<button type="button" class="btn btn-default" ng-click="cancel()">
						<span class="glyphicon glyphicon-remove small"></span>
						<?php echo __d('net_commons', 'Cancel'); ?>
					</button>
					<?php echo $this->Form->button(
						__d('net_commons', 'OK'),
						array('name' => 'edit', 'class' => 'btn btn-primary')); ?>
				</div>
			</div>
		</div>

	<?php echo $this->Form->end(); ?>
</div>

