<?php
/**
 * faq block authority edit template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Ryo Ozawa <ozawa.ryo@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<?php
	echo $this->Html->script('http://rawgit.com/angular/bower-angular-sanitize/v1.2.25/angular-sanitize.js', false);
	echo $this->Html->script('http://rawgit.com/m-e-conroy/angular-dialog-service/v5.2.0/src/dialogs.js', false);
	echo $this->Html->script('/frames/js/frames.js', false);

	echo $this->Html->css('/faqs/css/faqs.css');
?>

<?php echo $this->element('Faqs.frame_menu', array('tab' => 'block')); ?>

<?php echo $this->element('Faqs.block_menu', array('tab' => 'auth')); ?>

<form novalidate>

	<div class="panel panel-default" >
		<div class="panel-body has-feedback">
			<div class="form-group">
				<div>
					<label>
						<?php echo __d('blocks', 'Article'); ?>
					</label>
				</div>
				<div class="well well-sm" class="nc-faqs-transparent">
					<div>
						<div>
							<label>
								<?php echo __d('blocks', 'Author'); ?>
							</label>
						</div>
						<?php echo $this->Form->input('data[content_creatable][room_admin]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Room Administrator'),
									'class' => 'nc-faqs-font-normal',
								),
								'checked' => true,
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[content_creatable][chief_editor]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Chief Editor'),
									'class' => 'nc-faqs-font-normal',
								),
								'checked' => true,
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[content_creatable][editor]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Editor'),
									'class' => 'nc-faqs-font-normal',
								),
								'checked' => true,
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[content_creatable][general_user]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'General User'),
									'class' => 'nc-faqs-font-normal',
								),
								'div' => false,
							));?>
					</div>
					<div>
						<div>
							<label>
								<?php echo __d('blocks', 'Approval'); ?>
							</label>
						</div>
						<label class="nc-faqs-font-normal">
							<input type="radio" name="publishContents" ng-model="publishContents" ng-value="1">
							<?php echo __d('blocks', 'Used'); ?>
						</label>
						<label class="nc-faqs-font-normal">
							<input type="radio" name="publishContents" ng-model="publishContents" ng-value="0" ng-init="publishContents = 0">
							<?php echo __d('blocks', 'Unused'); ?>
						</label>
					</div>
					<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
						<fieldset ng-disabled="! publishContents" collapse="! publishContents">
							<div>
								<label>
									<?php echo __d('blocks', 'Approver'); ?>
								</label>
							</div>
							<?php echo $this->Form->input('data[publishContents][room_admin]',
								array(
									'type' => 'checkbox',
									'label' => array(
										'text' => __d('net_commons', 'Room Administrator'),
										'class' => 'nc-faqs-font-normal',
									),
									'div' => false,
									'checked' => true,
								));?>
							<?php echo $this->Form->input('data[publishContents][chief_editor]',
								array(
									'type' => 'checkbox',
									'label' => array(
										'text' => __d('net_commons', 'Chief Editor'),
										'class' => 'nc-faqs-font-normal',
									),
									'div' => false,
									'checked' => true,
								));?>
						</fieldset>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div>
					<label>
						<?php echo __d('blocks', 'Comment'); ?>
					</label>
				</div>
				<div class="well well-sm" class="nc-faqs-transparent">
					<div>
						<div>
							<label>
								<?php echo __d('blocks', 'Author'); ?>
							</label>
						</div>
						<?php echo $this->Form->input('data[comment_creatable][room_admin]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Room Administrator'),
									'class' => 'nc-faqs-font-normal',
								),
								'checked' => true,
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[comment_creatable][chief_editor]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Chief Editor'),
									'class' => 'nc-faqs-font-normal',
								),
								'checked' => true,
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[comment_creatable][editor]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Editor'),
									'class' => 'nc-faqs-font-normal',
								),
								'checked' => true,
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[comment_creatable][general_user]',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'General User'),
									'class' => 'nc-faqs-font-normal',
								),
								'div' => false,
							));?>

						<?php echo $this->Form->input('data[comment_creatable][guests',
							array(
								'type' => 'checkbox',
								'label' => array(
									'text' => __d('net_commons', 'Guests'),
									'class' => 'nc-faqs-font-normal',
								),
								'div' => false,
							));?>
					</div>
					<div>
						<div>
							<label>
								<?php echo __d('blocks', 'Approval'); ?>
							</label>
						</div>
						<label class="nc-faqs-font-normal">
							<input type="radio" name="publishComments" ng-model="publishComments" ng-value="1">
							<?php echo __d('blocks', 'Used'); ?>
						</label>
						<label class="nc-faqs-font-normal">
							<input type="radio" name="publishComments" ng-model="publishComments" ng-value="0" ng-init="publishComments = 0">
							<?php echo __d('blocks', 'Unused'); ?>
						</label>
					</div>
					<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
						<fieldset ng-disabled="! publishComments" collapse="! publishComments">
							<div>
								<label>
									<?php echo __d('blocks', 'Approver'); ?>
								</label>
							</div>
							<?php echo $this->Form->input('data[publishComments][room_admin]',
								array(
									'type' => 'checkbox',
									'label' => array(
										'text' => __d('net_commons', 'Room Administrator'),
										'class' => 'nc-faqs-font-normal',
									),
									'div' => false,
									'checked' => true,
								));?>
							<?php echo $this->Form->input('data[publishComments][chief_editor]',
								array(
									'type' => 'checkbox',
									'label' => array(
										'text' => __d('net_commons', 'Chief Editor'),
										'class' => 'nc-faqs-font-normal',
									),
									'div' => false,
									'checked' => true,
								));?>
						</fieldset>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div>
					<div>
						<label>
							<?php echo __d('blocks', 'Email Notification'); ?>
						</label>
					</div>
					<label class="nc-faqs-font-normal">
						<input type="checkbox" name="mail" ng-model="sendMail">
						<?php echo __d('blocks', 'Notify the registration by email'); ?>
					</label>
				</div>
				<div collapse="! sendMail" class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
					<div>
						<label>
							<?php echo __d('blocks', 'Destination'); ?>
						</label>
					</div>
					<?php echo $this->Form->input('data[send_mail][room_admin]',
						array(
							'type' => 'checkbox',
							'label' => array(
								'text' => __d('net_commons', 'Room Administrator'),
								'class' => 'nc-faqs-font-normal',
							),
							'div' => false,
						));?>

					<?php echo $this->Form->input('data[send_mail][chief_editor]',
						array(
							'type' => 'checkbox',
							'label' => array(
								'text' => __d('net_commons', 'Chief Editor'),
								'class' => 'nc-faqs-font-normal',
							),
							'div' => false,
						));?>

					<?php echo $this->Form->input('data[send_mail][editor]',
						array(
							'type' => 'checkbox',
							'label' => array(
								'text' => __d('net_commons', 'Editor'),
								'class' => 'nc-faqs-font-normal',
							),
							'div' => false,
						));?>

					<?php echo $this->Form->input('data[send_mail][general_user]',
						array(
							'type' => 'checkbox',
							'label' => array(
								'text' => __d('net_commons', 'General User'),
								'class' => 'nc-faqs-font-normal',
							),
							'div' => false,
						));?>
				</div>
			</div>
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

</form>

