<?php
/**
 * block edit form template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Ryo Ozawa <ozawa.ryo@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>
<!-- frame setting START -->

<?php echo $this->Html->css('/faqs/css/faqs.css'); ?>

<?php echo $this->Form->hidden('FaqBlock.id', array('value' => $block['id'])); ?>

<div class="form-group">
	<?php echo $this->Form->input('FaqBlock.name',
		array(
			'type' => 'text',
			'label' => $nameLabel,
			'class' => 'form-control',
			'error' => false,
			'ng-model' => 'block.name',
		)); ?>
	<div class="has-error">
		<?php if (isset($this->validationErrors['FaqBlock']['name'])): ?>
		<?php foreach ($this->validationErrors['FaqBlock']['name'] as $message): ?>
			<div class="help-block">
				<?php echo $message ?>
			</div>
		<?php endforeach ?>
		<?php endif; ?>
	</div>
</div>

<div class="form-group">
	<div>
		<label>
			<?php echo __d('blocks', 'Public Setting'); ?>
		</label>
	</div>
	<?php echo $this->Form->input('FaqBlock.public_type',
		array(
			'type' => 'radio',
			'options' => array(
				FaqBlock::TYPE_PRIVATE => __d('blocks', 'Private'),
				FaqBlock::TYPE_PUBLIC => __d('blocks', 'Public'),
				FaqBlock::TYPE_LIMITED_PUBLIC => __d('blocks', 'Limited Public'),
			),
			'div' => false,
			'legend' => false,
			'error' => false,
			'ng-model' => 'block.publicType',
			'checked' => true,
		)); ?>
	<div collapse="block.publicType != <?php echo FaqBlock::TYPE_LIMITED_PUBLIC; ?>">
		<div class="row nc-faqs-input-date">
			<div class="col-md-2">
				<?php echo __d('blocks', 'Start'); ?>
			</div>
			<div class="col-md-10">
				<div class="input-group">
					<?php echo $this->Form->input('FaqBlock.from',
						array(
							'type' => 'text',
							'class' => 'form-control',
							'error' => false,
							'ng-model' => 'block.from',
							'datepicker-popup' => 'yyyy/MM/dd HH:mm',
							'is-open' => 'isFrom',
							'label' => false,
							'div' => false,
						)); ?>
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" ng-click="showCalendar($event, 'from')">
							<i class="glyphicon glyphicon-calendar"></i>
						</button>
					</span>
				</div>
				<div class="has-error">
					<?php if (isset($this->validationErrors['FaqBlock']['from'])): ?>
					<?php foreach ($this->validationErrors['FaqBlock']['from'] as $message): ?>
						<div class="help-block">
							<?php echo $message ?>
						</div>
					<?php endforeach ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row nc-faqs-input-date">
			<div class="col-md-2">
				<?php echo __d('blocks', 'End'); ?>
			</div>
			<div class="col-md-10">
				<div class="input-group">
					<?php echo $this->Form->input('FaqBlock.to',
						array(
							'type' => 'text',
							'class' => 'form-control',
							'error' => false,
							'ng-model' => 'block.to',
							'datepicker-popup' => 'yyyy/MM/dd HH:mm',
							'is-open' => 'isTo',
							'label' => false,
							'div' => false,
						)); ?>
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" ng-click="showCalendar($event, 'to')">
							<i class="glyphicon glyphicon-calendar"></i>
						</button>
					</span>
				</div>
				<div class="has-error">
					<?php if (isset($this->validationErrors['FaqBlock']['to'])): ?>
					<?php foreach ($this->validationErrors['FaqBlock']['to'] as $message): ?>
						<div class="help-block">
							<?php echo $message ?>
						</div>
					<?php endforeach ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- frame setting E N D -->