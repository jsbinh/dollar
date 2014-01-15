<div class="highlight">
	<div class="clearfix">
		<center>
			<shadow>
				<div align="center">
					<br><br>					
					<h1 >Register</h1>					
					<?php echo $this->Form->create('User'); ?>
						<table border="0" align="center" cellpadding="3" cellspacing="0">
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
									<td>Confirm password:</td>
									<td>
										<?php echo $this->Form->input('confirm_password', array('label'=>false, 'div'=>false)) ?>
									</td>
								</tr>
								<tr>
									<td>Email address:</td>
									<td>
										<?php echo $this->Form->input('email', array('label'=>false, 'div'=>false)) ?>
									</td>
								</tr>
								<tr>
									<td>Confirm email address:</td>
									<td>
										<?php echo $this->Form->input('confirm_email', array('label'=>false, 'div'=>false)) ?>
									</td>
								</tr>
								<tr>
									<td>Sponsor:</td>
									<td>
										<?php echo $this->Form->input('confirm_email', array('label'=>false, 'div'=>false, 'readonly'=>true)) ?>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="right">
										<center>
											<?php echo $this->Form->submit('Register!', array('label'=>false, 'div'=>false, 'style' => 'margin-top: 35px;')) ?>											
										</center>
									</td>
								</tr>								
							</tbody>
						</table>
					<?php echo $this->Form->end(); ?>

						</div>
						</td></tr></tbody>
					</table> 


	</div></shadow></center>
</div>
<br><br><br><br><br><br>