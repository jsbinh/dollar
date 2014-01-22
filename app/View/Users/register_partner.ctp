<div class="highlight">
    <div class="clearfix" align="center">        
        <br>
        <h2>Register Partner</h2>
        <br>
        <?php echo $this->Form->create('User'); ?>
            <?php echo $this->Form->input('id', array('type'=>'hidden')); ?>
            <table width="400" border="0" cellpadding="2" cellspacing="2">
            <tbody>
                <tr>
                    <td width="200">
                        <font size="2" face="verdana"><sombra>Username:</sombra></font>
                    </td>
                    <td width="200">
                        <?php echo $this->Form->input('username', array('size'=>'35', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        <font size="2" face="verdana"><sombra>Full Name:</sombra></font>
                    </td>
                    <td width="200">
                        <?php echo $this->Form->input('fullname', array('size'=>'35', 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>
                    </td>
                </tr>
            	<tr>
                    <td width="200">
                        <font size="2" face="verdana"><sombra>Email:</sombra></font>
                    </td>
                    <td width="200">
                        <?php echo $this->Form->input('email', array('size'=>'35', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2" face="verdana"><sombra>City:</sombra></font>
                    </td>
                    <td>
                        <?php echo $this->Form->input('city', array('size'=>'35', 'readonly'=>false, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>
                    </td>
                </tr>
                <tr>
                    <td><font size="2" face="verdana">
                        <sombra>Phone (optional):</sombra></font>
                    </td>
                    <td>
                        <?php echo $this->Form->input('phone', array('size'=>'35', 'readonly'=>false, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2" face="verdana"><sombra>Country:</sombra></font>
                    </td>
                    <td>
                        <?php echo $this->Form->input('country', array('size'=>'35', 'readonly'=>false, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2" face="verdana"><sombra>Skype (optional):</sombra></font>
                    </td>
                    <td>
                        <?php echo $this->Form->input('skype', array('size'=>'35', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2" face="verdana"><sombra>Facebook (optional):</sombra></font>
                    </td>
                    <td>
                        <?php echo $this->Form->input('facebook', array('size'=>'35', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false)) ?>                        
                    </td>
                </tr> 
                <tr>
                    <td colspan="2" align="center">
                        <?php echo $this->Form->submit('Register Partner', array('controller'=>'Users', 'action'=>'registerPartner', 'style'=>'margin-top: 40px;')) ?>
                   </td>
                </tr>

            </tbody>
        </table>
    <?php echo $this->Form->end(); ?> 
    </div>
    <br><br><br><br><br><br><br><br>
</div>