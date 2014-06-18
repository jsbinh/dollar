<div class="highlight">
    <div class="clearfix" align="center">
        <br> 
        <h2>Edit account profile</h2>
        <font face="verdana" size="2">
            <strong>Your sponsor is:</strong> <?php echo !empty($this->request->data['User']['sponsor']) ? $this->request->data['User']['sponsor'] : 'none'; ?>
        </font>
        <br><br><br>
        <?php echo $this->Form->create('User'); ?>
        	<?php echo $this->Form->input('id', array('type'=>'hidden')); ?>
        	<table width="400" border="0" cellpadding="2" cellspacing="2">
                <tbody>
                    <tr>
                        <td width="200">
                            <font size="2" face="verdana"><sombra>Username:</sombra></font>
                        </td>
                        <td width="200">
                            <?php echo $this->Form->input('username', array('type'=>'text', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false, 'size'=>'35')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="200">
                            <font size="2" face="verdana"><sombra>Email:</sombra></font>
                        </td>
                        <td width="200">
                            <?php echo $this->Form->input('email', array('type'=>'text', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false, 'size'=>'35')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="200">
                            <font size="2" face="verdana"><sombra>Country:</sombra></font>
                        </td>
                        <td width="200">
                            <?php echo $this->Form->input('country', array('type'=>'text', 'label'=>false, 'div'=>false, 'size'=>'35', 'placeholder'=>'none')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td><font size="2" face="verdana"><sombra>Phone:</sombra></font></td>
                        <td>
                            <?php echo $this->Form->input('phone', array('type'=>'text', 'label'=>false, 'div'=>false, 'size'=>'35', 'placeholder'=>'none')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font size="2" face="verdana"><sombra>Skype:</sombra></font>
                        </td>
                        <td>
                            <?php echo $this->Form->input('skype', array('type'=>'text', 'label'=>false, 'div'=>false, 'size'=>'35', 'placeholder'=>'none')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font size="2" face="verdana"><sombra>Facebook:</sombra></font>
                        </td>
                        <td>
                            <?php echo $this->Form->input('facebook', array('type'=>'text', 'label'=>false, 'div'=>false, 'size'=>'35', 'placeholder'=>'none')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font size="2" face="verdana"><sombra>City:</sombra></font>
                        </td>
                        <td>
                            <?php echo $this->Form->input('city', array('type'=>'text', 'label'=>false, 'div'=>false, 'size'=>'35', 'placeholder'=>'none')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font size="2" face="verdana"><sombra>New Password:</sombra></font>
                        </td>
                        <td>
                            <?php echo $this->Form->input('newpassword', array('type'=>'password', 'label'=>false, 'div'=>false, 'size'=>'35')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" >
                            <?php echo $this->Form->submit('Update account', array('controller'=>'Users', 'action'=>'profile', 'style'=>'margin-top: 40px;')) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php echo $this->Form->end(); ?>
    </div>
<br><br><br><br><br><br><br><br><br><br>
</div>

