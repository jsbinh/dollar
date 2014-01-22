<div class="highlight">
	<div class="clearfix">
<center><h1>Forgot Password</h1><br><br>
<p>Please fill out the form below. You'll need your username and the<br>e-mail address you used to register (unless you have since changed it). </p><br><br>
<?php echo $this->Form->create('User') ?>
	<table align="center" border="0" cellspacing="0" cellpadding="3">
		<tbody>
			<tr>
				<td>Username:</td>
				<td width="144">					
					<?php echo $this->Form->input('username', array('label'=>false, 'div'=>false, 'required'=>false)); ?>
				</td>
			</tr>
			<tr>
				<td>E-mail address:</td>
				<td>					
					<?php echo $this->Form->input('email', array('label'=>false, 'div'=>false, 'required'=>false)); ?>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<br><br>
					<?php echo $this->Form->submit('Get New Password', array('controller'=>'Users', 'action'=>'forgotPassword','label'=>false, 'div'=>false)) ?>
				</td>
			</tr>		
		</tbody>
	</table>
<?php echo $this->Form->end(); ?>
</div>
<br><br><br><br><br><br><br><br><br><br>