<div class="highlight">
	<div class="clearfix">
	<br>
	<center><shadow><center><br>
	<h1 align="center">Login</h1>
	<?php echo $this->Form->create('User'); ?>
		<table align="center" border="0" cellspacing="0" cellpadding="3">
			<tbody>
				<tr>
					<td>Username:</td>
					<td>
						<?php echo $this->Form->input('username', array('label'=>false, 'div'=>false)) ?>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>
						<?php echo $this->Form->input('password', array('label'=>false, 'div'=>false)) ?>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br><input type="checkbox" name="remember">Remember me
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">						
						<?php echo $this->Form->submit('Login', array('label'=>false, 'div'=>false, 'style' => 'margin-top: 25px;')) ?>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br>
						[<?php echo $this->Html->link('Forgot Password?', array('controller'=>'Users', 'action'=>'forgotPassword')); ?>]					
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br>
						Not registered?
						<?php echo $this->Html->link('Sign-Up!', array('controller'=>'Users', 'action'=>'register')); ?>
					</td>
				</tr>
			</tbody>
		</table>
	<?php echo $this->Form->end(); ?>	
	</center></shadow></center>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>