<div class="highlight">
<div class="clearfix">

<center><shadow>
<table height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td valign="top" align="center">
				<br>
				<font size="2" face="verdana">
					Welcome <strong> <?php echo $user['User']['username'] ?> </strong> !! Server time: <?php echo date('H:i:s Y-m-d') ?>
				</font>
				<br><br>

<div>
    <font size="2" face="verdana">
        <h4><strong>Daily Profit - Results of the last 10 days</strong></h4>
        <table width="95%"  style="background-color: #EFF5FB" class="table">
            <tr style="font-size: 2; font-style: verdana">
                <td width="11%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
                <td width="10%" align="center">
                    <strong>3.0%</strong> <br>
                    2014-05-20
                </td>
            </tr>
        </table>
    </font>
</div>
<br/>
<table class="table table-striped table-hover">
  <tbody><tr>
    <td width="474" valign="top"><div align="center">
	  <h2>Account Details</h2>
	  <table width="100%" border="0" cellpadding="2" cellspacing="0">
        <tbody><tr>
          	<td width="19%" rowspan="4">
          		<?php echo $this->Html->image('avatar.jpg', array('width'=>'80', 'height'=>'80')); ?>
        	</td>

            <td width="47%" align="left">
                <font size="2" face="verdana">Active Investments:</font>
            </td>

            <td width="34%" align="center">
                <font size="3" face="verdana" color="grey"><strong>$0.00</strong></font>
            </td>

        </tr>
        <tr>
            <td align="left">
                <font size="2" face="verdana">Total invested:</font>
            </td>
            <td align="center">
                <font size="3" face="verdana" color="grey"><strong>$0.00</strong></font>
            </td>

        </tr>
        <tr>
            <td align="left">
                <font size="2" face="verdana">Total payments received:</font>
            </td>
            <td align="center">
                <font size="3" face="verdana" color="grey"><strong>$0.00</strong></font>
            </td>
        </tr>
		<tr>
            <td align="left">
                <font size="2" face="verdana"><strong>Account Balance:</strong></font>
            </td>
            <td align="center">
                <font size="3" face="verdana" color="grey"><strong>$0.00</strong></font>
            </td>
        </tr>
    </tbody>
</table>

<br>

<font color="grey" size="2" face="verdana">
	  <strong>Total referrals:</strong> 0 <strong>Total commissions received:</strong> $0.00<br>
	  <strong>Your referral link:</strong>
	  </font>

	 <br><br>

<h2>TRANSFER BALANCE FOR MEMBER</h2>

<div class="CSSTabletransfer">
    <form action="" method="post">
        <table height="25" align="center">
            <input type="hidden" name="transferbf" value="transferbf">
            <tr>
                <td align="center">
                    <input type="text" class="tranfer" name="transferbuser" placeholder="username" value="">
                </td>
                <td width="150" align="center">
                    <input type="number" class="tranfer" name="transferbvalue" placeholder="0.00" value="" min="0">
                </td>
                <td width="50" align="center">
                    <input type="submit" style="height:40px;width:150px;" name="Submit" value="TRANSFER BALANCE">
                </td>
            </tr>
        </table>
    </form>
</div>
    </div></td>

    <td width="470" valign="top">

<center>

<h2>Payment System </h2>

<table class="table table-striped table-hover">
    <tbody>
        <tr>
           <td width="150"><div align="center"><strong>Processor</strong></div></td>
           <td width="150"><div align="center"><strong>Value</strong></div></td>
           <td width="150"><div align="center"><strong>Deposit</strong></div></td>
        </tr>
        <tr>
            <form action="" method="post">
                <td align="center">
        		  <?php echo $this->Html->image('stp.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="number" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="" min="0">
    	        </td>
                <td align="center">
                    <input type="submit" name="Submit" style="width:210px;" value="SOLIDTRUSTPAY ADD FUNDS">
    	        </td>
            </form>
        </tr>
        <tr>
            <form action="https://www.egopay.com/payments/pay/express/?hash=T7BF6ZY82ZYPV9X8UIIDABWYMU9UGEH5_TW7iaUasVZf-y3K2gW7ngPA5acPgpsOD2wBBHoQMbCXUSE1Xlj4hcJ7zqwMf7izj4ivnRZkf7shJSwOkKhWwguGuy92DMUvlf3uDBlv9Bl0sMlaWuwa4HH991OGrMeoTjrV_vSzntry2E91UeiuKHkL5XndHLwrNoFl6q__m6vTNR4fTYHYGgzjStiKOPRRWXeGVbFy_KpCKqhufi0fhA16_4yDBRBtbd7HbqOcffZC7_E1bAATpFeYNumul59zFhK8Rt444F0W6V5NYf1u11JM_c_I6kdVQEbl-3Kw6XwK227BuqrPrnLhQYqHNr3hLZLK5cqJk1KItVGCPmqvOA" method="post" target="_blank">
                <td align="center">
                    <?php echo $this->Html->image('egopay_new.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="number" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="100" min="0">
    	        </td>
                <td  align="center">
                    <input type="submit" name="Submit" style="width:210px;" value="EGOPAY ADD FUNDS">
    	       </td>
            </form>
        </tr>

        <tr>
            <form action="https://perfectmoney.is/api/step1.asp" method="post" target="blank">
                <input type="hidden" name="PAYEE_ACCOUNT" value="U1735086">
                <input type="hidden" name="PAYEE_NAME" value="Forexpam Inc">
                <input type="hidden" name="PAYMENT_ID" value="Forex system invest ">
                <!-- <input type="text" name="PAYMENT_AMOUNT" value=""><BR> -->
                <input type="hidden" name="PAYMENT_UNITS" value="USD">
                <input type="hidden" name="STATUS_URL" value="admin@forexpam.com">
                <input type="hidden" name="PAYMENT_URL" value="http://www.forexpam.com/members/paysuccess">
                <input type="hidden" name="PAYMENT_URL_METHOD" value="LINK">
                <input type="hidden" name="NOPAYMENT_URL" value="http://forexpam.com/member">
                <input type="hidden" name="NOPAYMENT_URL_METHOD" value="LINK">
                <input type="hidden" name="SUGGESTED_MEMO" value="">
                <input type="hidden" name="BAGGAGE_FIELDS" value="">
                <!-- <input type="submit" name="PAYMENT_METHOD" value="Pay Now!"> -->
                <td  align="center">
                	<?php echo $this->Html->image('pm.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="number" name="PAYMENT_AMOUNT" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="" min="0">
                </td>
                <td align="center">
                    <input type="submit" name="PAYMENT_METHOD" style="width:210px;" value="PERFECT MONEY ADD FUNDS">
                </td>
            </form>
        </tr>
        <tr>
            <!-- <form action="" method="post"> -->
                <td  align="center">
                	<?php echo $this->Html->image('neteller.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="number" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="" min="0">
                </td>
                <td align="center">
                    <button class="submit-button" style="width:206px;" data-toggle="modal" data-target="#myModal">
                      NETELLER ADD FUNDS
                    </button>
                </td>
            <!-- </form> -->
        </tr>
        <tr>
            <form action="" method="post">
                <td align="center">
                	<?php echo $this->Html->image('balance.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="number" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="" min="0">
                </td>
                <td align="center">
                    <input type="submit" name="Submit" style="width:210px;" value="DEPOSIT VIA ACCOUNT BALANCE">
                </td>
            </form>
        </tr>

        <tr>
            <form action="https://www.okpay.com/process.html" method="post" target="_blank">
                <input type="hidden" name="ok_receiver" value="OK676429149"/>
                <input type="hidden" name="ok_item_1_name" value="Forexpam"/>
                <input type="hidden" name="ok_currency" value="USD"/>
                <input type="hidden" name="ok_item_1_type" value="service"/>

                <td align="center">
                    <?php echo $this->Html->image('okpay.png', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="number" name="amount_okpay" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="" min="0">
                </td>
                <td align="center">
                    <input type="submit" name="Submit" style="width:210px;" value="OKPAY Payment">
                </td>
            </form>
        </tr>
    </tbody>
</table>

<div align="center">
<font color="grey" size="2" face="verdana">Please enter any amount between <strong>$1.00 - $5,000.00</strong>
<br>or deposits processors enter any value between<strong> $10 and $10,000</strong></font></div>

</center></td>
</tr>
</tbody></table>

<br>

<div align="center">
<font size="2" face="verdana">
Deposits via <strong>EgoPay</strong> and <strong>PerfectMoney</strong> will be processed by the end of the day (server time).<br>
Depósitos via <strong>EgoPay</strong> e <strong>PerfectMoney</strong> serão processados até o final do dia. (horário do servidor).
</font>
</div>	

<br>
<br><br>

</div></td>
</tr>
</tbody></table>
</shadow>
</center>
</div>
</div>




<!-- Modal -->
<div align="center" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-left: -300px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">To make investment via Neteller you have to pay manually to Forexpam.com Neteller account.
                </h4>
                Our Neteller Account Number Is: 453323176365
            </div>
            <div class="modal-body">

            <?php echo $this->Form->create('Neteller', array('class'=>'form-horizontal')); ?>
                <table class="table table-striped table-hover">
                    <tr>
                        <td colspan="2"><strong>Required Information:</strong></td>
                    </tr>
                    <tr>
                        <td>Your Neteller account number</td>
                        <td>
                            <?php echo $this->Form->input('account_number', array('div'=>false, 'label'=>false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Transaction ID</td>
                        <td>
                            <?php echo $this->Form->input('transaction_id', array('type'=>'text', 'div'=>false, 'label'=>false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td>
                            <?php echo $this->Form->input('transaction_id', array('type'=>'text', 'div'=>false, 'label'=>false)); ?>
                        </td>
                    </tr>
                </table>
            <?php echo $this->Form->end(); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>