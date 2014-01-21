<div class="highlight">
	<div class="clearfix">		
		<div align="center">
			<br><br>					
			<h1 >Register</h1>					
			<?php echo $this->Form->create('User', array('div'=>false, 'label'=>false)); ?>
				<table border="0" align="center" cellpadding="3" cellspacing="0">
					<tbody>
						<tr>
							<td>Username:</td>
							<td>
								<?php echo $this->Form->input('username', array('label'=>false, 'div'=>false, 'required'=> false)) ?>
							</td>
						</tr>
						<tr>
							<td>Password:</td>
							<td>
								<?php echo $this->Form->input('password', array('label'=>false, 'div'=>false, 'required'=> false)) ?>
							</td>
						</tr>
						<tr>
							<td>Confirm password:</td>
							<td>
								<?php echo $this->Form->password('confirm_password', array('label'=>false, 'div'=>false, 'required'=> false)) ?>
							</td>
						</tr>
						<tr>
							<td>Email address:</td>
							<td>
								<?php echo $this->Form->input('email', array('label'=>false, 'div'=>false, 'required'=> false)) ?>
							</td>
						</tr>
						<tr>
							<td>Confirm email address:</td>
							<td>
								<?php echo $this->Form->input('confirm_email', array('label'=>false, 'div'=>false, 'required'=> false)) ?>
							</td>
						</tr>
						<tr>
							<td>Sponsor:</td>
							<td>
								<?php echo $this->Form->input('sponsor', array('label'=>false, 'div'=>false, 'readonly'=>true, 'required'=> false)) ?>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" style="padding-top: 40px;">
								<?php echo $this->Form->submit('Register!', array('controller'=>'Users', 'action'=>'register'), array('label'=>false, 'div'=>false, 'style' => 'margin-top: 35px;')) ?>
							</td>
						</tr>								
					</tbody>
				</table>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br>
</div>
