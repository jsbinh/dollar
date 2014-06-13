<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> List Users</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
    </div>
    <?php echo $this->Form->create('User', array()) ?>
        <?php
            echo $this->Form->hidden('id');
            echo $this->Form->hidden('password');
        ?>
	    <table class="table table-striped table-bordered bootstrap-datatable datatable">
	        <tbody>
               <tr>
                    <td width="20%">Username</td>
                    <td>
                        <?php echo $this->Form->input('username', array('class'=>'span6', 'div'=> false, 'label'=>false, 'readonly'=>true)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Fullname</td>
                    <td>
                        <?php echo $this->Form->input('fullname', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">City</td>
                    <td>
                        <?php echo $this->Form->input('city', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Phone</td>
                    <td>
                        <?php echo $this->Form->input('phone', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Country</td>
                    <td>
                        <?php echo $this->Form->input('country', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Skype</td>
                    <td>
                        <?php echo $this->Form->input('skype', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Facebook</td>
                    <td>
                        <?php echo $this->Form->input('facebook', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Email</td>
                    <td>
                        <?php echo $this->Form->input('email', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Solidtrust</td>
                    <td>
                        <?php echo $this->Form->input('solidtrustpay', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Egopay</td>
                    <td>
                        <?php echo $this->Form->input('egopay', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Perfectmoney</td>
                    <td>
                        <?php echo $this->Form->input('perfectmoney', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Neteller</td>
                    <td>
                        <?php echo $this->Form->input('neteller', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Okpay</td>
                    <td>
                        <?php echo $this->Form->input('okpay', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Sponsor</td>
                    <td>
                        <?php echo $this->Form->input('sponsor', array('class'=>'span6', 'div'=> false, 'label'=>false)) ?>
                    </td>
               </tr>
               <tr>
                    <td colspan="2">
                        <?php
                            echo $this->Form->submit('Save', array('class'=>'btn btn-primary', 'div'=>false, 'label'=>false));
                            echo ' ';
                            echo $this->Html->link('Back', array('controller'=>'Users', 'action'=>'index'), array('class'=>'btn', 'div'=>false, 'label'=>false))
                        ?>
                    </td>
               </tr>
	        </tbody>

	    </table>
    <?php echo $this->Form->end(); ?>
</div>
