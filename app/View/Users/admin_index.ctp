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
            <h2><i class="icon-calendar"></i> List Users</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
    </div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Username</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th width="16%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($users)) {
                foreach ($users as $data) {
                    ?>
                    <tr>
                        <td>
                            <?php echo h($data['User']['username']); ?>
                        </td>
                        <td>
                            <?php echo h($data['User']['fullname']) ?>
                        </td>
                        <td class="center">
                            <?php echo $data['User']['email']; ?>
                        </td>
                        <td class="center">
                            <?php echo $data['User']['phone']; ?>
                        </td>
                        <td class="center">

                            <?php
                            echo $this->Html->link('<i class="icon-zoom-in icon-white"></i>
                                                         Edit
                                                        </span> ', array('controller' => 'users',
                                'action' => 'edit', $data['User']['id']), array('escape' => false, 'class' => 'btn btn-success'));
                            echo ' ';
                            echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Delete</span>',array('controller' => 'users', 'action' => 'delete', $data['User']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Do you want delete this account %s?', h($data['User']['username'])));
                            ?>
                        </td>
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
