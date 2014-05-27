<div class="highlight">
<div class="clearfix">

<center>
<shadow>
<table height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td valign="top">
<div align="center">
<br>
<h2>WITHDRAW</h2>
<br>
<font size="8" face="verdana">$0.00</font>
<br>
<font size="2" face="verdana">Account Balance</font><br><font face="verdana" size="1" color="grey">Minimum Withdrawal: $1.00</font>
<br><br>
<font size="2" face="verdana">Please enter your account in your profile to withdrawal.</font>
<br>

<table width="548" border="0" align="center">
    <tbody>
        <?php echo $this->Form->create('Withdraw');?>
            <tr>
                <td align="center">
                	<?php echo $this->Html->image('stp.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('solidTrust_id', array('value'=>'1')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('solidTrust_email', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('solidTrust_amount', array('type'=>'text', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00')) ?>
                </td>
            	<td align="center">
                    <?php echo $this->Form->submit('INSTANT WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
            <!-- egopay -->
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('egopay.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('egopay_id', array('value'=>'2')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('egopay_email', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('egopay_amount', array('type'=>'text', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('INSTANT WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('pm.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('pefect_id', array('value'=>'3')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('pefect_email', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('pefect_amount', array('type'=>'text', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('INSTANT WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('neteller.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('neteller_id', array('value'=>'4')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('neteller_email', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('neteller_amount', array('type'=>'text', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('INSTANT WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('okpay.png', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('okpay_id', array('value'=>'6')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('okpay_email', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('okpay_amount', array('type'=>'text', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('INSTANT WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
        <?php echo $this->Form->end; ?>
    </tbody>
</table>
<font size="2" face="verdana">Payments via Egopay and Perfect Money will be sent within 12 hours.</font>

<br><br>

</div></td>
</tr>
</tbody></table>
</shadow>
</center>
</div>
<br><br><br><br><br><br>
</div>

<style type="text/css">
    .withdraw-email{
        height: 33px;
        width: 300px;
        font-size: 22px;
        text-align: center;
        color: grey;
    }
    .withdraw-amount{
        height: 33px;
        width: 100px;
        font-size:22px;
        text-align:center;
        color:grey;
    }
</style>