<div class="highlight">
    <div class="clearfix" align="center">
        <br> 
        <h2>Edit account profile</h2>
        <font face="verdana" size="2"><strong>Your sponsor is:</strong> none</font><br><br>
        <br>
        <?php echo $this->Form->create('User'); ?>
        	<?php echo $this->Form->input('id', array('type'=>'hidden')); ?>        	
        	<table width="400" border="0" cellpadding="2" cellspacing="2">
                <tbody>
                    <tr>
                        <td width="200"><font size="2" face="verdana"><sombra>Username:</sombra></font></td>
                        <td width="200">                            
                            <?php echo $this->Form->input('username', array('type'=>'text', 'readonly'=>true, 'style'=>'color:grey', 'label'=>false, 'div'=>false, 'size'=>'35')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="200"><font size="2" face="verdana"><sombra>Country:</sombra></font></td>
                        <td width="200"><input type="text" name="name" value="" maxlenght="100" size="35" readonly="readonly" style="color:grey"></td>
                    </tr>
                	<tr>
                        <td width="200"><font size="2" face="verdana"><sombra>Email:</sombra></font></td>
                        <td width="200"><input type="text" name="email" value="hcbinh@gmail.com" size="35" readonly="readonly" style="color:grey"></td>
                    </tr>
                    <tr>
                        <td><font size="2" face="verdana"><sombra>Solidtrustpay:</sombra></font></td>
                        <td><input type="text" name="solidtrustpay" value="none" size="35"></td>
                    </tr>
                    <tr>
                        <td><font size="2" face="verdana"><sombra>Egopay:</sombra></font></td>
                        <td><input type="text" name="egopay" value="none" size="35"></td>
                    </tr>
                    <tr>
                        <td><font size="2" face="verdana"><sombra>PerfectMoney:</sombra></font></td>
                        <td><input type="text" name="perfectmoney" value="none" size="35"></td>
                    </tr>
                    <tr>
                        <td><font size="2" face="verdana"><sombra>Neteller:</sombra></font></td>
                        <td><input type="text" name="neteller" value="none" size="35"></td>
                    </tr>                	
                    </tr>
                    <tr>
                        <td><font size="2" face="verdana"><sombra>New Password:</sombra></font></td>
                        <td><input type="password" name="formnewpassword" value="" size="35"></td>
                    </tr>
                	
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div align="center">
                            <input name="submit" type="submit" value="Update account">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php echo $this->Form->end(); ?>
    </div>
<br><br><br><br><br><br><br><br><br><br>
</div>
