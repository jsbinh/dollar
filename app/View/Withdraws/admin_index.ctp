<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<script type='text/javascript'>
    $(document).ready(function() {
        setTimeout(function() {
            $("#flashMessage").fadeOut().remove();
        }, 5000);
    });
</script>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> List Egopays</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
        <div class="action">
            <?php //echo $this->Html->link('Add', array('controller'=>'Percents', 'action'=>'add'), array('class'=>'btn btn-success')); ?>
        </div>
    </div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Username</th>
                <th>Pay name</th>
                <th>Account</th>
                <th>Amount</th>
                <th>Date</th>
               <!--  <th width="15%">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            App::import('Model', 'User');
            $this->User = new User();
            if (!empty($withdraws)) {
                foreach ($withdraws as $data) {
                    ?>
                    <tr>
                        <td>
                            <?php echo h($this->User->getUserbyId($data['Withdraw']['user_id'])); ?>
                        </td>
                         <td class="center">
                            <?php echo h($data['Withdraw']['pay_name']) ?>
                        </td>
                        <td class="center">
                            <?php echo h($data['Withdraw']['account']) ?>
                        </td>
                        <td class="center">
                            <?php echo h($data['Withdraw']['amount']) ?>
                        </td>
                        <td class="center">
                            <?php echo h($data['Withdraw']['withdraw_date']) ?>
                        </td>
                        <!-- <td class="center">
                            <?php
                            // echo $this->Html->link('<i class="icon-zoom-in icon-white"></i>
                            //                              Edit
                            //                             </span> ', array('controller' => 'Percents',
                            //     'action' => 'edit', $data['Neteller']['id']), array('escape' => false, 'class' => 'btn btn-success'));
                            // echo ' ';
                            // echo $this->Form->postLink('<i class="icon-trash icon-white"></i>Delete</span>',array('controller' => 'Percents', 'action' => 'delete', $data['Neteller']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Do you want delete this row?', h($data['Neteller']['id'])));
                            ?>
                        </td> -->
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>

    </table>
    <?php if ($this->Paginator->numbers()): ?>
        <div class="pagination">
            <ul>
                <?php echo '<li>' . $this->Paginator->prev(__('<<'), array(), null, array('class' => 'prev disabled')) . '</li>'; ?>
                <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '')); ?>
                <?php echo '<li>' . $this->Paginator->next(__('>>'), array(), null, array('class' => 'next disabled')) . '</li>'; ?>
            </ul>
        </div>
    <?php endif;?>
</div>
