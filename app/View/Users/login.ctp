<script>
	$('#failed_login_alert').alert(); 
</script>

<div class="users form-inline col-md-12">
	<h2>Please enter your username and password</h2>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('role'=>'form')); ?>
	<div class="form-group">
	    <?php echo $this->Form->input('username', array('class'=>'form-control', 'placeholder'=>'Username')); ?>
	</div>
	<div class="form-group">
	    <?php echo $this->Form->input('password', array('class'=>'form-control', 'placeholder'=>'Password'));
		?>
	</div>
	<br><br>
	<?php 
		if(isset($failed_login) && $failed_login){
			echo $this->Html->div(
				'alert alert-danger alert-dismissable',
				$this->Html->tag('button',
					'&times;',
					array('type'=>'button', 'class'=>'close', 'data-dismiss'=>'alert', 'aria-hidden'=>true)
				).'Invalid username or password, try again',
				array(
					'id'=>'failed_login_alert')
			);
		}
	?>
	<div class="form-group">
		<?php echo $this->Form->submit('Login', array('class'=>'btn btn-default')); ?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>