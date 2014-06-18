<table height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td valign="top">
<div align="center">
<br>
<h2>Last Withdrawals</h2>
<br>
<div class="CSSTableGenerator">
	<table width="800" height="25" align="center">
		<tbody>
            <tr>
                <td width="128" height="25"><div align="center">ID</div></td>
                <td width="292" height="25"><div align="center">User</div></td>
                <td width="180" height="25"><div align="center">Value</div></td>
                <td width="180" height="25"><div align="center">Processor</div></td>
                <td width="180" height="25"><div align="center">Date</div></td>
            </tr>
            <?php
                if(!empty($withdraw)){
                    foreach ($withdraw as $key => $data) {
            ?>
                <tr>
                    <td nowrap="" align="center">
                        <font size="2" face="verdana">
                            <?php echo str_pad($data['Withdraw']['id'], 6, '0', STR_PAD_LEFT); ?>
                        </font>
                    </td>
                    <td nowrap="" align="center">
                        <font size="2" face="verdana">
                            <?php echo $data['Withdraw']['user_id'] ?>
                        </font>
                    </td>
                    <td nowrap="" align="center">
                        <font size="2" face="verdana">
                            <strong>
                                <?php echo '$'.$data['Withdraw']['amount'] ?>
                            </strong>
                        </font>
                    </td>
                    <td nowrap="" align="center">
                        <font size="2" face="verdana">
                            <?php echo $data['Withdraw']['pay_name'] ?>
                        </font>
                    </td>
                    <td nowrap="" align="center">
                        <font size="2" face="verdana">
                        <?php echo $data['Withdraw']['withdraw_date'] ?>
                        </font>
                    </td>
                </tr>
            <?php
                    }

                }
            ?>
        </tbody>
    </table>
</div>

<br><br>


</div></td>
</tr>
</tbody></table>

</shadow></center></div>






</div>