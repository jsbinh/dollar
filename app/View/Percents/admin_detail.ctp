<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> Percents</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
    </div>
    <?php echo $this->Form->create('Percent', array()) ?>
        <?php
            echo $this->Form->hidden('id');
        ?>
	    <table class="table table-striped table-bordered bootstrap-datatable datatable">
	        <tbody>
               <tr>
                    <td width="20%">Date</td>
                    <td>
                        <?php echo $this->Form->input('date', array('class'=>'span5 datepicker', 'div'=> false, 'label'=>false, 'type'=>'text', 'required'=>true)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="20%">Percent</td>
                    <td>
                        <?php echo $this->Form->input('percent', array('class'=>'span5', 'div'=> false, 'label'=>false, 'required'=>true)) ?>
                    </td>
               </tr>
               <tr>
                    <td colspan="2">
                        <?php
                            echo $this->Form->submit('Save', array('class'=>'btn btn-primary', 'div'=>false, 'label'=>false));
                            echo ' &nbsp;';
                            echo $this->Html->link('Back', array('controller'=>'Percents', 'action'=>'index'), array('class'=>'btn', 'div'=>false, 'label'=>false))
                        ?>
                    </td>
               </tr>
	        </tbody>
	    </table>
    <?php echo $this->Form->end(); ?>
</div>
