<div class="highlight">
<div class="clearfix">

<center><shadow>
<table height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td valign="top" align="center">
				<br>
				<font size="2" face="verdana">
					Welcome to your Account Overview <strong></strong> !! Server time: <?php echo date('H:i:s Y-m-d') ?>
				</font>
				<br><br>
<table width="960" border="0" align="center">
  <tbody><tr>
    <td width="474" valign="top"><div align="center">
	  <h2>Account Details</h2>
	  <table width="100%" border="0" cellpadding="2" cellspacing="0">
        <tbody><tr>
          	<td width="19%" rowspan="4">
          		<?php echo $this->Html->image('avatar.jpg', array('width'=>'80', 'height'=>'80')); ?>
        	</td>

          <td width="47%" align="left"><font size="2" face="verdana">Active Investments:</font></td>

          <td width="34%"><div align="center"><font size="3" face="verdana" color="grey"><strong>$0.00</strong></font></div></td>

        </tr>
        <tr>

          <td><div align="left"><font size="2" face="verdana">Total invested:</font></div></td>

          <td><div align="center"><font size="3" face="verdana" color="grey"><strong>$0.00</strong></font></div></td>

        </tr>
        <tr>

          <td><div align="left"><font size="2" face="verdana">Total payments received:</font></div></td>

          <td><div align="center"><font size="3" face="verdana" color="grey"><strong>$0.00</strong></font></div></td>

        </tr>
		<tr>
          <td><div align="left"><font size="2" face="verdana"><strong>Account Balance:</strong></font></div></td>
          <td><div align="center"><font size="3" face="verdana" color="grey"><strong>$0.00</strong></font></div></td>
        </tr>
      </tbody></table>

<br>

<font color="grey" size="2" face="verdana">
	  <strong>Total referrals:</strong> 0 <strong>Total commissions received:</strong> $0.00<br>
	  <strong>Your referral link:</strong> 
	  </font>
	
	 <br><br>
	 
<h2>TRANSFER BALANCE FOR MEMBER</h2>	
	  
<div class="CSSTabletransfer">
<table height="25" align="center">
<form action="" method="post"></form>
<input type="hidden" name="transferbf" value="transferbf">
<tbody><tr>
<td><div align="center"><input type="text" style="height:35px;width:150px;font-size:22px;text-align:center;color:grey;" name="transferbuser" placeholder="username" value=""></div></td>
<td width="150"><div align="center"><input type="text" style="height:35px;width:144px;font-size:22px;text-align:center;color:grey;" name="transferbvalue" placeholder="0.00" value=""></div></td>
<td width="50"><div align="center"><input type="submit" style="height:40px;width:150px;" name="Submit" value="TRANSFER BALANCE"></div></td>
</tr>

</tbody></table>
</div>  
	  
 
    </div></td>

    <td width="470" valign="top">

<center>



<h2>Payment System </h2>

<table width="450" border="0" align="center">
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
                    <input type="text" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="">
    	        </td>
                <td align="center">
                    <input type="submit" name="Submit" style="width:210px;" value="SOLIDTRUSTPAY ADD FUNDS">
    	        </td>
            </form>
        </tr>
        <tr>
            <form action="https://www.egopay.com/payments/pay/express/?hash=T7BF6ZY82ZYPV9X8UIIDABWYMU9UGEH58aAjoFLFzUjtuZcX3P8WCUeDS0om1QRkqsB-B40di8qXUSE1Xlj4hcJ7zqwMf7izj4ivnRZkf7shJSwOkKhWwguGuy92DMUvlf3uDBlv9Bl0sMlaWuwa4HH991OGrMeoTjrV_vSzntry2E91UeiuKHkL5XndHLwrNoFl6q__m6vTNR4fTYHYGgzjStiKOPRRWXeGVbFy_KpCKqhufi0fhA16_4yDBRBtbd7HbqOcffZC7_E1bAATpFeYNumul59zFhK8Rt444F0W6V5NYf1u11JM_c_I6kdVQEbl-3Kw6XwK227BuqrPrnLhQYqHNr3hLZLK5cqJk1KItVGCPmqvOA" method="post" target="_blank">
                <td align="center">
                    <?php echo $this->Html->image('egopay_new.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="text" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="">
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
                    <input type="text" name="PAYMENT_AMOUNT" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="">
                </td>
                <td align="center">
                    <input type="submit" name="PAYMENT_METHOD" style="width:210px;" value="PERFECT MONEY ADD FUNDS">
                </td>
            </form>
        </tr>

        <tr>
            <form action="" method="post">
                <input type="hidden" name="depositneteller" value="depositneteller">
                <td  align="center">
                	<?php echo $this->Html->image('neteller.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="text" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="">
                </td>
                <td align="center">
                    <input type="submit" name="Submit" style="width:210px;" value="NETELLER ADD FUNDS">
                </td>
            </form>
        </tr>

        <tr>
            <form action="" method="post">
                <td align="center">
                	<?php echo $this->Html->image('balance.jpg', array('width'=>'100', 'height'=>'38')); ?>
                </td>
                <td align="center">
                    <input type="text" name="amount" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="">
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
                    <input type="text" name="amount_okpay" style="height:35px;width:100px;font-size:22px;text-align:center;color:grey;" value="">
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

<center>
<center><h2>News</h2></center>
<p><b>January 14, 2014 23:42</b><br>
En -Daily Profit for today is 3.2%.<br>
Pt - Divisão do lucro de hoje é de 3.2%<br>
</p><p><b>January 13, 2014 02:55pm</b><br>
En -Daily Profit for today is 3.5%.<br>
Reports last week in forex are already available in http://dollarsflowsystem.com/investments.php
Pt - Divisão do lucro de hoje é de 3.5%<br>
Relatorios da ultima semana no forex ja estao disponiveis em http://dollarsflowsystem.com/investments.php
</p><p><b>January 12, 2014 06:39pm</b><br>
En -Daily Profit for today is 2%.<br>
Pt - Divisão do lucro de hoje é de 2%<br>
</p><p><b>January 11, 2014 07:44pm</b><br>
En -Daily Profit for today is 2%.<br>
Pt - Divisão do lucro de hoje é de 2%<br>
</p><p><b>January 11, 2014 01:07pm</b><br>
En -Withdrawals via SolidTrustPay are already released again.<br>
For other processors will start now.<br>
Pt - Saques via SolidTrustPay ja estao liberados novamente.<br>
Para os outros processadores iremos iniciar agora.<br>
</p><p><b>January 10, 2014 11:32pm</b><br>
En -Daily Profit for today is 4.1%.<br>
We're doing maintenance on our SolidTrustPay account. Please wait for the next 24 hours we will be working again.<br>
Pt - Divisão do lucro de hoje é de 4.1%<br>
Estamos em manuten��o em nossa conta SolidTrustPay. Por favor aguarde que nas pr�ximas 24 horas estaremos trabalhando novamente.<br>
</p><p><b>January 09, 2014 09:18pm</b><br>
En -Daily Profit for today is 3.3%.<br>
Pt - Divisão do lucro de hoje é de 3.3%<br>
</p><p><b>January 08, 2014 08:55pm</b><br>
En -Daily Profit for today is 3.2%.<br>
Pt - Divisão do lucro de hoje é de 3.2%<br>
</p><p><b>January 07, 2014 11:27pm</b><br>
En -Daily Profit for today is 3.4%.<br>
Pt - Divisão do lucro de hoje é de 3.4%<br>
</p><p><b>January 06, 2014 11:47pm</b><br>
En -Daily Profit for today is 3.6%.<br>
Pt - Divisão do lucro de hoje é de 3.6%<br>
</p><p><b>January 05, 2014 11:51pm</b><br>
En -Daily Profit for today is 2.1%.<br>
Pt - Divisão do lucro de hoje é de 2.1%<br>
</p><p><b>January 04, 2014 05:55pm</b><br>
En -Daily Profit for today is 2%.<br>
We are closing our fiscal year.<br>
Payments on Saturday and Sunday will be paid Sunday until the end of the day.<br>
Pt - Divisão do lucro de hoje é de 2%<br>
Estamos fechando nosso ano fiscal.<br>
Os pagamentos de sabado e domingo serao pagos domingo ate o final do dia.<br>
</p><p><b>January 03, 2014 10:36pm</b><br>
En -Daily Profit for today is 3.5%.<br>
Pt - Divisão do lucro de hoje é de 3.5%<br>
</p><p><b>January 02, 2014 10:47pm</b><br>
En -Daily Profit for today is 3.2%.<br>
Pt - Divisão do lucro de hoje é de 3.2%<br>
<br><br>
</p></center>

<br><br>
</div></td>
</tr>
</tbody></table>
</shadow>
</center>
</div>
</div>